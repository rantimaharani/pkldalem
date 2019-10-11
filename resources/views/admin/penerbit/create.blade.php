@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Tambah Data Denerbit</div>

                    <div class="card-body">
                    <form action="{{route('penerbit.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for=""> Nama </label>
                            <input class="form-control" type="text" name="penerbit_nini">
                        </div>
                        <div class="form-group">
                            <label for=""> Alamat </label>
                            <input class="form-control" type="text" name="penerbit_al">
                        </div>
                        <div class="form-group">
                            <label for=""> No Telepon </label>
                            <input class="form-control" type="text" name="penerbit_tp">
                        </div>
                        <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('penerbit.index')}}" role="button"> Kembali </a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

                  