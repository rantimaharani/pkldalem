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
                <div class="card-header"> Mengubah Data Penerbit </div>

                    <div class="card-body">
                    <form action="{{route('penerbit.update',$penerbit->id)}}" method="post">
                            {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                        <label for=""> Nama </label>
                        <input class="form-control" value="{{ $penerbit->penerbit_nama }}" type="text" name="penerbit_nini">
                        </div>

                        <div class="form-group">
                        <label for=""> Alamat </label>
                        <input class="form-control" value="{{ $penerbit->penerbit_alamat }}" type="text" name="penerbit_al">
                        </div>

                        <div class="form-group">
                            <label for=""> No Telepon </label>
                            <input class="form-control" value="{{ $penerbit->penerbit_telp }}" type="text" name="penerbit_tp">
                            </div>

                            <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('penerbit.index')}}" role="button"> Kembali </a>

                    </form>
                        </div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            @endsection

                  


