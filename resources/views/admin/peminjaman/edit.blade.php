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
                <div class="card-header"> Mengubah Data Peminjaman </div>

                    <div class="card-body">
                    <form action="{{route('peminjaman.update',$peminjaman->id)}}" method="post">
                            {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group">
                        <label for=""> Nama Petugas </label>
                        {{-- <input class="form-control" value="{{ $peminjaman->id_;etugas }}" type="text" name="petugas_id">
                        </div> --}}
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
                        {{-- <input class="form-control" value="{{ $peminjaman->id_peminjam }}" type="text" name="peminjam_id">
                        </div> --}}
                        <select name="peminjam_nama" class="form-control">
                            @foreach ($peminjam as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->peminjam_nama }}
                                </option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <label for=""> Tanggal Peminjam </label>
                        <input class="form-control" value="{{ $peminjaman->peminjaman_tgl }}" type="date" name="peminjaman_tgl">
                        </div>

                        <div class="form-group">
                        <label for=""> Tanggal Peminjam Harus Kembali </label>
                        <input class="form-control" value="{{ $peminjaman->peminjaman_tgl_hrs_kembali }}" type="date" name="peminjaman_kembali">
                        </div>

                        <button type="submit" name="simpan" class="btn btn-md btn-info"> Simpan </button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjaman.index')}}" role="button"> Kembali </a>
                    </form>
                        </div>
                            </div>
                                </div>
                                    </div>
                                        </div>
                                            @endsection

                  


