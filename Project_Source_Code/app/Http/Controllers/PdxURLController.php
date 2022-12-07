<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pdxURL;
use App\Http\Requests\StorepdxURLRequest;
use App\Http\Requests\UpdatepdxURLRequest;

class PdxURLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPDX()
    {
        return view('parodontax.ParURL');
    }

    public function storePDX(Request $request)
    {
        $post = new pdxURL;
        $post->date = $request->date;
        $post->month = $request->month;
        $post->url = $request->url;
        $post->author = $request->author;
        $post->save();
        return redirect('add-pdx-post-form')->with('status', 'Brand Wise Monthly Data Has Been inserted');
    }

    public function displayData()
    {
        $data = pdxURL::latest()->paginate(7);

        return view('parodontax.parDisplay', compact('data'))->with('i', (request()->input('page', 1) - 1) * 7);
    }


    public function editParData(Request $request)
    {
        $data = pdxURL::where('id', $request->id)->first();
        return view('parodontax.parEdit')->with('data', $data);
    }

    public function updateParData(Request $request)
    {
        $data = pdxURL::where('id', $request->id)->first();
        $data->date = $request->date;
        $data->month = $request->month;
        $data->url = $request->url;
        $data->author = $request->author;
        $data->save();
        return redirect('/show-pdx-post-data')->with('status', 'Information has been updated');
    }

    public function deleteParData(Request $request)
    {
        $data = pdxURL::where('id', $request->id)->first();
        $data->delete();
        return redirect('/show-pdx-post-data')->with('completed', 'Information has been deleted');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pdxURL  $pdxURL
     * @return \Illuminate\Http\Response
     */
    public function edit(pdxURL $pdxURL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepdxURLRequest  $request
     * @param  \App\Models\pdxURL  $pdxURL
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepdxURLRequest $request, pdxURL $pdxURL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pdxURL  $pdxURL
     * @return \Illuminate\Http\Response
     */
    public function destroy(pdxURL $pdxURL)
    {
        //
    }
}
