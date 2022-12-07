<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambers;
use App\Http\Requests\StoreChambersRequest;
use App\Http\Requests\UpdateChambersRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChambersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        return view('chambersForm');//
    }
    public function store(Request $request)
    {     
           $rules = [
            "AsmAreaExpert"=>"required",
            "AseName"=>"required",
            'DhcpName'=>'required',
            "Chamber_InstitutionName"=>'required',
            "Address1"=>'required',
            'Contact_Number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:11'
           ];
        $validator = Validator::make($request->all(),$rules);
        if ($validator->fails()) {
			return redirect('create')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();

				$info = new Chambers;
                $info->AsmAreaExpert = $data['AsmAreaExpert'];
                $info->AseName = $data['AseName'];
				$info->DhcpName = $data['DhcpName'];
				$info->Chamber_InstitutionName = $data['Chamber_InstitutionName'];
                $info->Address1 = $data['Address1'];
                $info->Contact_Number = $data['Contact_Number'];
				$info->save();
				return redirect('chambers')->withSuccess('Registered successfully!');
		}
    }
    public function response(Chambers $chambers)
    {
            $chambers = DB::select('select * from chambers');
            return view('chambersList',['chambers'=>$chambers]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreChambersRequest  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chambers  $chambers
     * @return \Illuminate\Http\Response
     */
    public function show(Chambers $chambers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chambers  $chambers
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambers $chambers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChambersRequest  $request
     * @param  \App\Models\Chambers  $chambers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChambersRequest $request, Chambers $chambers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chambers  $chambers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chambers $chambers)
    {
        //
    }
}
