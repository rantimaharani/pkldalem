@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <br>
                <center> <div class="card-header"><h2> Peminjaman </h2> </div> </center>
                <br>
                <center><a href="{{ route('peminjaman.create') }}" class="btn btn-primary"> Tambah </a></center>
                <br>
                    <div class="table-responsive">
                        <table class="table">
                        <tr> 
                            <th> No </th>
                            <th> Nama Petugas </th>
                            <th> Nama Peminjam </th>
                            <th> Tanggal Pinjam </th>
                            <th> Tanggal Pengembalian </th>
                            <th colspan="3" style="text-align: center;"> Aksi </th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($peminjaman as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->id_petugas}}</td>
                            <td>{{$data->id_peminjams}}</td>
                            <td>{{$data->peminjam_tgl}}</td>
                            <td>{{$data->peminjam_tgl_hrs_kembali}}</td>
                            <td><a href="{{ route('peminjaman.show',$data->id) }}" class="btn btn-warning"> Show </a></td>
                            <td><a href="{{ route('peminjaman.edit',$data->id) }}"class="btn btn-success"> Edit </a></td>
                            <td><form action="{{ route('peminjaman.destroy',$data->id) }}" method="POST">
                                
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit"> Delete </button>
                            </form>
                            </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection