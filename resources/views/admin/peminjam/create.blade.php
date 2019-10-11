@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <br>
                    <center> <div class="card-header"> Mengubah Data Peminjam </div> </center>
                    <br>
            
                    <div class="card-body">
                    <form action="{{route('peminjam.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for=""> Nama Peminjam </label>
                            <input class="form-control" type="text" name="peminjam_nama">
                        </div>

                        <div class="form-group">
                            <label for=""> Alamat Peminjam </label>
                            <input class="form-control" type="text" name="peminjam_alamat">
                        </div>

                        <div class="form-group">
                            <label for=""> Telepon Peminjam </label>
                            <input class="form-control" type="text" name="peminjam_telp">
                        </div>

                        <div class="form-group">
                         <label for=""> Foto </label>
                         <input type="file" name="foto" class="form-control" required >
                        </div>

                        <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjam.index')}}" role="button"> Kembali </a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

                  