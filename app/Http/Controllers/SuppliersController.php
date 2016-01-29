<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Request;
use Illuminate\Support\Facades\Input;

use Redirect;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['suppliers'] = Suppliers::orderBy('name','asc')->paginate(10);
        return view('suppliers.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
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
        Suppliers::create($input);
        
            // redirect
        // Session::flash('message', 'Berhasil Menambah Data!');
        return redirect('suppliers')->with('message', 'Record added.');
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
        $suppliers = Suppliers::find($id);

        return view('suppliers.update',compact('suppliers'));
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
            $items = Suppliers::find($id);
            
            $input = Input::all();
            $items->update($input);

            // redirect
            // Session::flash('message', 'Berhasil Mengubah Data!');
            return redirect('suppliers')->with('message', 'Record updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppliers = Suppliers::find($id);
        $suppliers->delete();

        // redirect
        Session::flash('message', 'Berhasil Menghapus Data!');
        return Redirect::to('suppliers');
    }
}
