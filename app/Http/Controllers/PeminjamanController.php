<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;
use App\Petugas;
use App\Peminjam;
use Session;
use auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjaman = Peminjaman::orderBy('created_at','desc')->get();
        return view('admin.peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        $peminjaman = Peminjaman::all();
        return view('admin.peminjaman.create', compact('petugas','peminjam'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peminjaman = new peminjaman();
        // peminjaman_nama ngambil di database sesuai dengan migration 
        // peminjaman_nini samakan dengan name="yang ada di create.blade.php"
        $peminjaman->id_peminjams = $request->peminjam_nama;
        $peminjaman->id_petugas = $request->petugas_nama;
        $peminjaman->peminjam_tgl = $request->peminjaman_tgl;
        $peminjaman->peminjam_tgl_hrs_kembali = $request->peminjaman_kembali;
        $peminjaman->save();

        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peminjaman = Peminjaman::all();
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        return view('admin.peminjaman.show',compact('peminjaman','petugas','peminjam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $petugas = Petugas::all();
        $peminjam = Peminjam::all();
        return view('admin.peminjaman.edit',compact('peminjaman','petugas','peminjam'));
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
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->id_peminjam = $request->peminjam_nama;
        $peminjaman->id_petugas = $request->petugas_nama;
        $peminjaman->peminjaman_tgl = $request->peminjaman_tgl;
        $peminjaman->peminjaman_tgl_hrs_kembali = $request->peminjaman_kembali;
        $peminjaman->save();

        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id)->delete();
        return redirect()->route('peminjaman.index');
    }
}
