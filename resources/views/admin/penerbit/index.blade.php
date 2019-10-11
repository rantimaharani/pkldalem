@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <br>
                    <center> <div class="card-header"><h2> Penerbit </h2> </div> </center>
                    <br>
                <center><a href="{{ route('penerbit.create') }}" class="btn btn-primary"> Tambah </a></center>
                <br>
                    <div class="table-responsive">
                        <table class="table">
                        <tr> 
                            <th> No </th>
                            <th> Nama Penerbit </th>
                            <th> Alamat Penerbit </th>
                            <th> Telepon Penerbit </th>
                            <th colspan="3" style="text-align: center;"> Aksi </th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($penerbit as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->penerbit_nama}}</td>
                            <td>{{$data->penerbit_alamat}}</td>
                            <td>{{$data->penerbit_telp}}</td>
                            <td><a href="{{ route('penerbit.show',$data->id) }}" class="btn btn-warning"> Show </a></td>
                            <td><a href="{{ route('penerbit.edit',$data->id) }}"class="btn btn-success"> Edit </a></td>
                            <td><form action="{{ route('penerbit.destroy',$data->id) }}" method="POST">
                                
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