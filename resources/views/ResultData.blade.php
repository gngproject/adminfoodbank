@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Kasir</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Hasil Cek Identitas</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>ID/NIK</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>TEMPAT LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th colspan="4">ALAMAT</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>{{ $nik }}</td>
                                    <td>{{$result->data->nama}}</td>
                                    <td>{{$result->data->tempat_lahir}}</td>
                                    <td class="text-center">{{$result->data->jenis_kelamin}}</td>
                                    <td>{{$result->data->namaKel}},
                                    {{$result->data->namaKec}},
                                    {{$result->data->namaKabko}},
                                    {{$result->data->namaPropinsi}}</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
