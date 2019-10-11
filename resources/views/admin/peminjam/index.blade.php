@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <br>
                    <center> <div class="card-header"><h2> Peminjam </h2> </div> </center>
                    <br>
                <center><a href="{{ route('peminjam.create') }}" class="btn btn-primary"> Tambah </a></center>
                <br>
                    <div class="table-responsive">
                        <table class="table">
                        <tr> 
                            <th> No </th>
                            <th> Nama Peminjam </th>
                            <th> Alamat Peminjam </th>
                            <th> Telepon Peminjam </th>
                            <th> Foto Peminjam </th>
                            <th colspan="3" style="text-align: center;"> Aksi </th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($peminjam as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->peminjam_nama}}</td>
                            <td>{{$data->peminjam_alamat}}</td>
                            <td>{{$data->peminjam_telp}}</td>
                            
                            <td><img src="{{ asset('assets/img/peminjam/'.$data->foto)}}" alt="" height="200px" width="300px"></td>
                            <td><a href="{{ route('peminjam.show',$data->id) }}" class="btn btn-warning"> Show </a></td>
                            <td><a href="{{ route('peminjam.edit',$data->id) }}"class="btn btn-success"> Edit </a></td>
                            <td><form action="{{ route('peminjam.destroy',$data->id) }}" method="POST">
                                
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit"> Hapus </button>
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