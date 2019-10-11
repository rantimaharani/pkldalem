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
                <div class="card-header"> menampilkan data peminjam </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for=""> nama peminjam </label>
                        <input class="form-control" value="{{$peminjam->peminjam_nama}}"type="text" name="peminjam_nama" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""> alamat peminjam</label>
                            <input class="form-control" value="{{$peminjam->peminjam_alamat}}"type="text" name="peminjam_alamat" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""> telepon peminjam </label>
                            <input class="form-control" value="{{$peminjam->peminjam_telp}}"type="text" name="peminjam_telp" disabled>
                        </div>
                        <div class="form-group">
                            <label for=""> foto peminjam </label> <br>
                            <img src="{{asset('assets/img/peminjam/'.$peminjam->foto)}}" alt="" height="250px" width="250px">
                            <input type="file" class="form-control" name="foto" disabled>
                            </div>

                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjam.index')}}" role="button"> Kembali </a>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
