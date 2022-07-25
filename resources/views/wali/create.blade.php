@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Wali
                    </div>
                    <div class="card-body">
                        <form action=" {{route('wali.store')}} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Wali</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <span class="invalid-feesback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto Wali</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                                <span class="invalid-feesback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">pilih data siswa </label>
                            <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror" id="">
                            @foreach($siswa as $data)
                                <option value=" {{$data->id}} ">{{$data->nama}}</option>
                            @endforeach
                            </select>
                            @error('id_siswa')
                                <span class="invalid-feesback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection