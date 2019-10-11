@extends('layouts.admin')

@section('content')
<div class="container">
        <br>
        <br>
        <br>
        <br>
        <center> <div class="card-header"><h2> Selamat Datang </h2> </div> </center>
        <br>
        <br>
        <br>
        <br>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
