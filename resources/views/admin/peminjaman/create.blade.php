@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br><div class="card-header"> Tambah Data Peminjaman</div><br>

                    <div class="card-body">
                    <form action="{{route('peminjaman.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for=""> Nama Petugas </label>
                            <select name="petugas_nama" class="form-control">
                            @foreach ($petugas as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->petugas_nama }}
                                </option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Nama Peminjam </label>
                            <select name="peminjam_nama" class="form-control">
                                @foreach ($peminjam as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->peminjam_nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for=""> Tanggal Pinjam </label>
                            <input class="form-control" type="date" name="peminjaman_tgl">
                        </div>

                        <div class="form-group">
                            <label for=""> Tanggal Pengembalin </label>
                            <input class="form-control" type="date" name="peminjaman_kembali">
                        </div>

                            <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjaman.index')}}" role="button"> Kembali </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

                  