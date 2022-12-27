<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;
use App\Exports\ExcelExport;

class ExcelController extends Controller
{
    


    function index()
    {
        $data = DB::table('posts')->paginate(20);
        return view('Analytics', compact('data'));
        // return $data;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     * @throws \PhpOffice\PhpSpreadsheet\Exception
     */
    function importData(Request $request){
        $this->validate($request, [
            'uploaded_file' => 'required|file|mimes:xls,xlsx'
        ]);
        
        $the_file = $request->file('uploaded_file');
        try{
            $spreadsheet = IOFactory::load($the_file->getRealPath());
            $sheet = new Spreadsheet();
            $sheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
            $sheet        = $spreadsheet->getActiveSheet();
            $row_limit    = $sheet->getHighestDataRow();
            $column_limit = $sheet->getHighestDataColumn();
            $row_range    = range( 2, $row_limit );
            $column_range = range( 'N', $column_limit );
            $startcount = 2;
            $data = array();
            foreach ( $row_range as $row ) {
                $data[] = [
                    'Area' => $sheet->getCell( 'A' . $row )->getValue(),
                    'Territory' => $sheet->getCell( 'B' . $row )->getValue(),
                    'DBCode' => $sheet->getCell( 'C' . $row )->getValue(),
                    'DBName' => $sheet->getCell( 'D' . $row )->getValue(),
                    'OutletCode' => $sheet->getCell( 'E' . $row )->getValue(),
                    'SKUName' => $sheet->getCell( 'F' . $row )->getValue(),
                    'Pcs' => $sheet->getCell( 'G' . $row )->getValue(),
                    'Value' =>$sheet->getCell( 'H' . $row )->getValue(),
                    'OutletName' =>$sheet->getCell( 'I' . $row )->getValue(),
                    'DHCPName' =>$sheet->getCell( 'J' . $row )->getValue(),
                    'Address' =>$sheet->getCell( 'K' . $row )->getValue(),
                    'ContactNumber' =>$sheet->getCell( 'L' . $row )->getValue(),
                    'Brand' =>$sheet->getCell( 'M' . $row )->getValue(),
                    'Month' =>$sheet->getCell( 'N' . $row )->getValue(),
                    // 'Date' =>date("d-m-Y"),
                ];
                $startcount++;
            }
            DB::table('posts')->insert($data);
        } catch (Exception $e) {
            $error_code = $e->errorInfo[1];
            return back()->withErrors('There was a problem uploading the data!');
            // return $data;
        }
        return back()->withSuccess('Great! Data has been successfully uploaded.');
        // return $data;
    }
    /**
     * @param $customer_data
     */
    public function ExportExcel($dump_data){
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '4000M');
        try {
            $spreadSheet = new Spreadsheet();
            $spreadSheet->getActiveSheet()->getDefaultColumnDimension()->setWidth(20);
            $spreadSheet->getActiveSheet()->fromArray($dump_data);
            $Excel_writer = new Xls($spreadSheet);
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="Historical Sales Dumpdata.xls"');
            header('Cache-Control: max-age=0');
            ob_end_clean();
            $Excel_writer->save('php://output');
            exit();
        } catch (Exception $e) {
            return;
        }
    }
    /**
     *This function loads the customer data from the database then converts it
     * into an Array that will be exported to Excel
     */
    function exportData(){
        $data = DB::table('posts')->orderBy('OutletCode', 'ASC')->get();
        $data_array [] = array("Area","Territory","DBCode","DBName", "OutletCode", "SKUName","Pcs","Value", "OutletName", "DHCPName", "Address", "ContactNumber", "Brand", "Month");
        foreach($data as $data_item)
        {
            $data_array[] = array(
                'Area' => $data_item->Area,
                'Territory' => $data_item->Territory,
                'DBCode' => $data_item->DBCode,
                'DBName' => $data_item->DBName,
                'OutletCode' => $data_item->OutletCode,         
                'SKUName' => $data_item->SKUName,
                'Pcs' => $data_item->Pcs,
                'Value' => $data_item->Value,
                'OutletName' =>$data_item->OutletName,
                'DHCPName' => $data_item->DHCPName,
                'Address' => $data_item->Address,
                'ContactNumber' => $data_item->ContactNumber,
                'Brand' => $data_item->Brand,
                'Month' =>$data_item->Month,
            );
        }
        $this->ExportExcel($data_array);
    }

    // //using maatwebsite
    // public function fileImportExport(Request $request)
    // {
    //     return view('Analytics');
    // }


    // public function fileImport(Request $request) 
    // {
    //     $request->validate([
    //         'import_file' => 'required',
    //     ]);
    //     Excel::import(new UsersImport, 
    //                   $request->file('file')->store('files'));
    //     return redirect()->back();
    // }


    // public function fileExport() 
    // {
    //     return Excel::download(new UsersExport, 'Dumpdata.xlsx');
    // }   
 }

