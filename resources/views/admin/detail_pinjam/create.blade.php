@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <br>
                    <center> <div class="card-header"> Membuat Data Detail </div> </center>
                    <br>
            
                    <div class="card-body">
                    <form action="{{route('peminjam.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for=""> Id Peminjaman </label>
                            <select name="peminjamen_id" class="form-control">
                                @foreach ($peminjaman as $data)
                                <option value="{{$data->id}}">
                                    {{ $data->id }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                                <label for=""> Nama Buku </label>
                                <select name="id_buku" class="form-control">
                                    @foreach ($buku as $data)
                                    <option value="{{$data->id}}">
                                        {{ $data->id_buku }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                        <div class="form-group">
                            <label for=""> Tanggal Kembali </label>
                            <input class="form-control" type="date" name="detail_tgl_kembali">
                        </div>

                        <div class="form-group">
                            <label for=""> Denda </label>
                            <input type="file" name="foto" name="detail_denda">
                        </div>

                        <div class="form-group">
                            <label for=""> Status Kembali </label>
                            <input type="file" name="foto" name="detail_status_kembali">
                       </div>

                        <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjam.index')}}" role="button"> Kembali </a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

                  