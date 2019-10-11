@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset ('js/select2.min.js') }}"> </script>
    <script src="{{ asset ('app/assets/js/components/select2.init.js') }}"> </script>
    <script src="{{ asset ('app/assets/vendor/ckeditor/ckeditor.js') }}"> </script>
<script>
    CKEDITOR.replace('editor');

    $(document).ready(function() {
        $(#select2).select2();
    });
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Menampilkan Data Peminjaman </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> Nama Petugas </label>
                        <input class="form-control" value="{{$peminjaman->petugas_nama}}"type="text" name="petugas_nama" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""> Nama Peminjam</label>
                            <input class="form-control" value="{{$peminjaman->peminjam_nama}}"type="text" name="peminjam_nama" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""> Tanggal Pinjam </label>
                            <input class="form-control" value="{{$peminjaman->peminjam_tgl}}"type="date" name="peminjam_tgl" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""> Tanggal Pengembalian </label>
                            <input class="form-control" value="{{$peminjaman->peminjaman_kembali}}"type="date" name="peminjaman_kembali" disabled>
                            </div>

                            <div class="from-group">
                            <a href="{{ route('peminjaman.index') }}" class="btn btn-outline-info"> kembali </a>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
