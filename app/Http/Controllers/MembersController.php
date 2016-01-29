<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Request;
use Illuminate\Support\Facades\Input;

use Redirect;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['members'] = Members::orderBy('name','asc')->paginate(10);
        return view('members.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Input::all();
        Members::create($input);
        
            // redirect
        Session::flash('message', 'Berhasil Menambah Data!');
        return Redirect::to('members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Members::find($id);

        return view('members.update',compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $items = Members::find($id);
            
            $input = Input::all();
            $items->update($input);

            // redirect
            Session::flash('message', 'Berhasil Mengubah Data!');
            return Redirect::to('members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = Members::find($id);
        $members->delete();

        // redirect
        Session::flash('message', 'Berhasil Menghapus Data!');
        return Redirect::to('members');
    }
}
