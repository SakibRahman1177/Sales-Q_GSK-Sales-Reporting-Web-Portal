<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

use App\Models\ASE;
use App\Http\Requests\StoreASERequest;
use App\Http\Requests\UpdateASERequest;

class ASEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addASE()
    {
        return view('ASE.AddASE');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeASE(Request $request)
    {
        $post = new ASE;
        $post->ASM_Expert = $request->ASM_Expert;
        $post->ASE_Name = $request->ASE_Name;
        $post->ASE_Area = $request->ASE_Area;
        $post->Territory = $request->Territory;
        $post->OutletCode = $request->OutletCode;
        $post->save();
        return redirect('add-ase-list')->with('status', 'An ASE Data Has Been inserted');
    }
    public function editAseData(Request $request)
    {
        $data = ASE::where('id', $request->id)->first();
        return view('ASE.ASEListEdit')->with('data', $data);
    }
    public function updateAseData(Request $request)
    {
        $data = ASE::where('id', $request->id)->first();
        $data->ASM_Expert = $request->ASM_Expert;
        $data->ASE_Name = $request->ASE_Name;
        $data->ASE_Area = $request->ASE_Area;
        $data->Territory = $request->Territory;
        $data->OutletCode = $request->OutletCode;
        $data->save();
        return redirect('/ASEList')->with('completed', 'Information has been updated');
    }

    public function deleteAseData(Request $request)
    {
        $data = ASE::where('id', $request->id)->first();
        $data->delete();
        return redirect('/ASEList')->with('completed', 'Information has been deleted');
    }

    public function ManageChamber(Request $request)
    {
        // $data = ASE::where('ASE_Area', $request->ASE_Area)->first();
        // return view('Chamber.AreabyCmb', compact('data'));
        // return view('Chamber.AreabyCmb')->with($data);
        // $data = ASE::where('ASE_Area', $request->ASE_Area)->get();
        // ->join('a_s_e_s', function ($join) {
        //     $join->on('students.id', '=', 'contacts.student_id')

    //     $data = DB::table('a_s_e_s')
    //     ->join('posts', function ($join) {
    //     $join->on('a_s_e_s.OutletCode', '=', 'posts.OutletCode')
    //     ->where('a_s_e_s.ASE_Area', '=', '');
    // })->get();

    // $data = ASE::select(
    // 'a_s_e_s.ASM_Expert',
    // 'a_s_e_s.ASE_Name', 
    // 'a_s_e_s.ASE_Area', 
    // 'a_s_e_s.Territory',
    // 'a_s_e_s.OutletCode', 
    // 'posts.Region', 
    // 'posts.Area', 
    // 'posts.Territory',
    // 'posts.DBCode',
    // 'posts.DBName',
    // 'posts.RouteCode',
    // 'posts.Route',
    // 'posts.SRCode',
    // 'posts.SR',
    // 'posts.Channel',
    // 'posts.OutletName',
    // 'posts.SKUCode',
    // 'posts.SKUName',
    // 'posts.Channel',
    // 'posts.Pcs',
    // 'posts.Value',
    // 'posts.Date')->join("posts", "posts.OutletCode", "=", "a_s_e_s.OutletCode")
    // ->where('a_s_e_s.ASE_Area', $request->ASE_Area)->get()->toArray();
    
        // $data = DB::table('a_s_e_s')->join('posts', 'a_s_e_s.OutletCode', '=', 'posts.OutletCode')->get();
        
        $data= DB::select('select * from a_s_e_s, posts where posts.OutletCode = a_s_e_s.OutletCode and a_s_e_s.ASE_Area = ? ',[$request->ASE_Area]);
        return view('Chamber.AreabyCmb')->with('data', $data);
        // $data = DB::table('a_s_e_s')->orderBy('OutletCode', 'ASC');
        // return view('Chamber.AreabyCmb', compact('data'));
        
    }

    public function OutletSaleData(Request $request)
    {
        $data= DB::select('select * from a_s_e_s, posts where a_s_e_s.OutletCode = posts.OutletCode and posts.OutletCode = ? ',[$request->OutletCode]);
        return view('Chamber.OutletSale')->with('data', $data);

   }

    public function AseTable()
    {
        $data = DB::table('a_s_e_s')->orderBy('OutletCode', 'ASC')->paginate(30);
       return view('ASEList', compact('data'));
   }

   function importAseData(Request $request){
    $this->validate($request, [
        'uploaded_file' => 'required|file|mimes:xls,xlsx'
    ]);
    $the_file = $request->file('uploaded_file');
    try{
        $spreadsheet = IOFactory::load($the_file->getRealPath());
        $sheet        = $spreadsheet->getActiveSheet();
        $row_limit    = $sheet->getHighestDataRow();
        $column_limit = $sheet->getHighestDataColumn();
        $row_range    = range( 2, $row_limit );
        $column_range = range( 'E', $column_limit );
        $startcount = 2;
        $data = array();
        foreach ( $row_range as $row ) {
            $data[] = [
                'ASM_Expert' =>$sheet->getCell( 'A' . $row )->getValue(),
                'ASE_Name' => $sheet->getCell( 'B' . $row )->getValue(),
                'ASE_Area' => $sheet->getCell( 'C' . $row )->getValue(),
                'Territory' => $sheet->getCell( 'D' . $row )->getValue(),
                'OutletCode' => $sheet->getCell( 'E' . $row )->getValue(),
            ];
            $startcount++;
        }
        DB::table('a_s_e_s')->insert($data);
    } catch (Exception $e) {
        $error_code = $e->errorInfo[1];
        return back()->withErrors('There was a problem uploading the data!');
    }
    return back()->withSuccess('Great! Data has been successfully uploaded.');
}

// public function searchASE(Request $request){
//     // $search = $request->input('search');
//     // $data = ASE::query()
//     //     ->Where ( 'ASE_Name', 'LIKE', '%' . $search . '%' )
//     //     ->orWhere ( 'OutletCode', 'LIKE', '%' . $search . '%' )->get ();
//     if($request->filled('search')){

//         $data = ASE::search($request->search)->get();

//     }else{

//         $data = ASE::get();

//     }

//     return view('ASEList', compact('data'));		
// // $data = ASE::where ( 'ASM_Expert', 'LIKE', '%' . $search . '%' )
// //             ->orWhere ( 'ASE_Name', 'LIKE', '%' . $search . '%' )
// //             ->orWhere ( 'ASE_Area', 'LIKE', '%' . $search . '%' )
// //             ->orWhere ( 'Territory', 'LIKE', '%' . $search . '%' )
// //             ->orWhere ( 'OutletCode', 'LIKE', '%' . $search . '%' )->get ();
// // if (count ( $test ) > 0)
// // return view ( 'ASEList' )->withDetails ( $data )->withQuery ( $search );
// // else
// // return view ( 'ASEList' )->withMessage ( 'No Details found. Try search again !' );
    

// // Get the search value from the request
//     // if($request->ajax()){

//     //     $data=ASE::where('ASE_Name','like','%'.$request->search.'%')
//     //     ->orwhere('ASE_Area','like','%'.$request->search.'%')
//     //     ->orwhere('OutletCode','like','%'.$request->search.'%')->get();


//     //     $output='';
//     // if(count($data)>0){

//     //      $output ='
//     //         <table class="table">
//     //         <thead>
//     //         <tr>
//     //         <th scope="col">ASM Expert</th>
//     //             <th scope="col">ASE Name</th>
//     //             <th scope="col">ASE Area</th>
//     //             <th scope="col">Territory</th>
//     //             <th scope="col">Outlet Code</th>
//     //         </tr>
//     //         </thead>
//     //         <tbody>';

//     //             foreach($data as $row){
//     //                 $output .='
//     //                 <tr>
//     //                 <th scope="row">'.$row->ASM_Expert.'</th>
//     //                 <td>'.$row->ASE_Name.'</td>
//     //                 <td>'.$row->ASE_Area.'</td>
//     //                 <td>'.$row->Territory.'</td>
//     //                 <td>'.$row->OutletCode.'</td>
//     //                 </tr>
//     //                 ';
//     //             }

//     //      $output .= '
//     //          </tbody>
//     //         </table>';

//     // }
//     // else{

//     //     $output .='No results';

//     // }

//     // return $output;

//     // }

// }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreASERequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreASERequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ASE  $aSE
     * @return \Illuminate\Http\Response
     */
    public function show(ASE $aSE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ASE  $aSE
     * @return \Illuminate\Http\Response
     */
    public function edit(ASE $aSE)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateASERequest  $request
     * @param  \App\Models\ASE  $aSE
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateASERequest $request, ASE $aSE)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ASE  $aSE
     * @return \Illuminate\Http\Response
     */
    public function destroy(ASE $aSE)
    {
        //
    }
}
