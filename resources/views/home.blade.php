@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Kasir</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="">
                       <ul>
                            <li><a href="{{ route('input.penerima') }}">Input Data Penerima</a></li>
                           <li>Report
                               <ul>
                                   <li>Harian</li>
                                   <li>Mingguan</li>
                                   <li>Bulanan</li>
                               </ul>
                           </li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
