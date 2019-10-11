<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::orderBy('created_at','desc')->get();
        return view('admin.penerbit.index', compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        return view('admin.penerbit.create', compact('penerbit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penerbit = new penerbit();
        // penerbit_nama ngambil di database sesuai dengan migration 
        // penerbit_nini samakan dengan name="yang ada di create.blade.php"
        $penerbit->penerbit_nama = $request->penerbit_nini;
        $penerbit->penerbit_alamat = $request->penerbit_al;
        $penerbit->penerbit_telp = $request->penerbit_tp;
        $penerbit->save();

        return redirect()->route('penerbit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('admin.penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('admin.penerbit.edit',compact('penerbit'));
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
        $penerbit = penerbit::findOrFail($id);
        $penerbit->penerbit_nama = $request->penerbit_nini;
        $penerbit->penerbit_alamat = $request->penerbit_al;
        $penerbit->penerbit_telp = $request->penerbit_tp;
        $penerbit->save();

        return redirect()->route('penerbit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::findOrFail($id)->delete();
        return redirect()->route('penerbit.index');
    }
}
