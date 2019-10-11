@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> halaman detail pinjam</div>
                <br>
                <center><a href="{{ route('detail.create') }}" class="btn btn-primary"> tambah </a></center>
                <br>
                    <div class="table-responsive">
                        <table class="table">
                        <tr>
                            <th> no </th>
                            <th> Id Peminjam </th>
                            <th> Nama Buku </th>
                            <th> Tanggal Kembali </th>
                            <th> Denda </th>
                            <th> Kembali </th>
                            <th colspan="3" style="text-align: center;"> Aksi </th>
                        </tr>
                        
                        @php $no = 1; @endphp
                        @foreach ($detail as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->peminjaman->peminjamen_id}}</td>
                            <td>{{$data->buku->id_buku}}</td>
                            <td>{{$data->detail_tgl_kembali}}</td>
                            <td>{{$data->detail_denda}}</td>
                            <td>{{$data->detail_status_kembali}}</td>

                            <td><a href="{{ route('detail.show',$data->id) }}" class="btn btn-warning"> Show </a></td>
                            <td><a href="{{ route('detail.edit',$data->id) }}"class="btn btn-success"> Edit </a></td>
                            <td><form action="{{ route('detail.destroy',$data->id) }}" method="POST">
                                
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