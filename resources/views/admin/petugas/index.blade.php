@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <br>
                    <center> <div class="card-header"><h2> Petugas </h2> </div> </center>
                    <br>
                <center><a href="{{ route('petugas.create') }}" class="btn btn-primary"> Tambah </a></center>
                <br>
                    <div class="table-responsive">
                        <table class="table">
                        <tr> 
                            <th> No </th>
                            <th> Nama Petugas </th>
                            <th colspan="3" style="text-align: center;"> Aksi </th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($petugas as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->petugas_nama}}</td>
                            <td><a href="{{ route('petugas.show',$data->id) }}" class="btn btn-warning"> Show </a></td>
                            <td><a href="{{ route('petugas.edit',$data->id) }}"class="btn btn-success"> Edit </a></td>
                            <td><form action="{{ route('petugas.destroy',$data->id) }}" method="POST">
                                
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