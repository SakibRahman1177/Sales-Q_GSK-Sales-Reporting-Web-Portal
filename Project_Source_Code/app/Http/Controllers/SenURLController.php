<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\senURL;
use App\Http\Requests\StoresenURLRequest;
use App\Http\Requests\UpdatesenURLRequest;

class SenURLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addSSD()
    {
        return view('sensodyne.SenURL');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeSSD(Request $request)
    {
        $post = new senURL;
        $post->date = $request->date;
        $post->month = $request->month;
        $post->url = $request->url;
        $post->author = $request->author;
        $post->save();
        return redirect('add-ssd-post-form')->with('status', 'Brand Wise Monthly Data Has Been inserted');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresenURLRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function displayData()
    {
        $data = senURL::latest()->paginate(7);

        return view('sensodyne.senDisplay', compact('data'))->with('i', (request()->input('page', 1) - 1) * 7);//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\senURL  $senURL
     * @return \Illuminate\Http\Response
     */
    public function show(senURL $senURL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\senURL  $senURL
     * @return \Illuminate\Http\Response
     */
    public function editSenData(Request $request)
    {
        $data = senURL::where('id', $request->id)->first();
        return view('sensodyne.senEdit')->with('data', $data);;
    }
    public function updateSenData(Request $request)
    {
        $data = senURL::where('id', $request->id)->first();
        $data->date = $request->date;
        $data->month = $request->month;
        $data->url = $request->url;
        $data->author = $request->author;
        $data->save();
        return redirect('/show-ssd-post-data')->with('completed', 'Information has been updated');
    }

    public function deleteSenData(Request $request)
    {
        $data = senURL::where('id', $request->id)->first();
        $data->delete();
        return redirect('/show-ssd-post-data')->with('completed', 'Information has been deleted');
    }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesenURLRequest  $request
     * @param  \App\Models\senURL  $senURL
     * @return \Illuminate\Http\Response
     */
//     public function update(UpdatesenURLRequest $request, senURL $senURL)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\senURL  $senURL
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(senURL $senURL)
//     {
//         //
//     }
// }
