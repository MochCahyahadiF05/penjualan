@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data wali
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Wali</label>
                            <input type="text" name="nama" class="form-control" id="" value=" {{$wali->nama}} "readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Wali</label>
                            @if (isset($wali) && $wali->foto)
                                <p>
                                    <img src=" {{asset('images/wali/',$wali->foto)}}" class="img-rounded img-resposive" style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href=" {{route('wali.index')}} " class="btn btn-primary">kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection