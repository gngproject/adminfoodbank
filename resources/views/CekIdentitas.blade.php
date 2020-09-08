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
                    @if(session("error"))
                        <div class="alert alert-danger">
                            {{ session("error") }}
                        </div>
                    @endif

                    @if(session("success"))
                        <div class="alert alert-primary">
                            {{ session("success") }}
                        </div>
                    @endif

                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                        <h3 class="card-title">CEK IDENTITAS (KTP) </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="{{ route('cek.nik') }}" method="GET">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nikktp" class="col-sm-2 col-form-label">NIK KTP</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA">
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="submit" class="btn btn-default float-right">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                        </form>
                    </div>
                 <!-- /.card -->
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
