<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjam;
use File;
use Session;
use auth;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjam = Peminjam::orderBy('created_at','desc')->get();
        return view('admin.peminjam.index', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peminjam = Peminjam::all();
        return view('admin.peminjam.create', compact('petugas','peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjam = new Peminjam();
        // peminjam_nama ngambil di database sesuai dengan migration 
        // peminjam_nini samakan dengan name="yang ada di create.blade.php"
        $peminjam->peminjam_nama = $request->peminjam_nama;
        $peminjam->peminjam_alamat = $request->peminjam_alamat;
        $peminjam->peminjam_telp = $request->peminjam_telp;

        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $Path = public_path(). '/assets/img/peminjam/';
            $filename = '-'
            .$file->getClientOriginalName();
            $upload = $file->move(
                $Path,
                $filename
            );
            $peminjam->foto = $filename;
        }
        $peminjam->save();

        return redirect()->route('peminjam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('admin.peminjam.show', compact('peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('admin.peminjam.edit',compact('peminjam'));
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
       $peminjam = Peminjam::findOrFail($id);
       $peminjam->peminjam_nama = $request->peminjam_nama;
       $peminjam->peminjam_alamat = $request->peminjam_alamat;
       $peminjam->peminjam_telp = $request->peminjam_telp;

       if($request->hasFile('foto')) {
           $file = $request->file('foto');
           $Path = public_path(). '/assets/img/peminjam/';
           $filename = '-'
           .$file->getClientOriginalName();
           $upload = $file->move(
               $Path,
               $filename
           );
           $peminjam->foto = $filename;
       }
       $peminjam->save();

       return redirect()->route('peminjam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjam = Peminjam::findOrFail($id)->delete();
        return redirect()->route('peminjam.index');
    }
}
