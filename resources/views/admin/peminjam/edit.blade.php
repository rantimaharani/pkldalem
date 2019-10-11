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
                <br><div class="card-header"> Mengubah Data Peminjam </div><br>

                    <div class="card-body">
                    <form action="{{route('peminjam.update',$peminjam->id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                            <label for=""> Nama Peminjam </label>
                        <input class="form-control" value="{{$peminjam->peminjam_nama}}" type="text" name="peminjam_nama">
                        </div>

                        <div class="form-group">
                            <label for=""> Alamat Peminjam </label>
                            <input class="form-control" value="{{$peminjam->peminjam_alamat}}" type="text" name="peminjam_alamat">
                        </div>

                        <div class="form-group">
                            <label for=""> Telepon Peminjam </label>
                            <input class="form-control" value="{{$peminjam->peminjam_telp}}" type="text" name="peminjam_telp">
                        </div>

                        <div class="form-group">
                         <label for=""> Foto </label>
                        <img src="{{asset('assets/img/peminjam/'.$peminjam->foto)}}" alt="" height="250px" width="250px">
                         <input type="file" class="form-control" name="foto">
                        </div>

                        <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjam.index')}}" role="button"> Kembali </a>

                    </form>
                        </div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            @endsection

                  
