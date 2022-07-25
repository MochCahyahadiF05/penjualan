@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data wali
                    </div>
                    <div class="card-body">
                        <form action=" {{route('wali.update',$wali->id)}} " method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Wali</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$wali->nama}}">
                                @error('nama')
                                <span class="invalid-feesback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto wali</label>
                                @if (isset($wali) && $wali->foto)
                                    <p>
                                        <img src=" {{asset('images/wali/',$wali->foto)}}" class="img-rounded img-resposive" style="width: 75px; height:75px;" alt="">
                                    </p>
                                @endif
                                <input type="file" name="foto" class="form-control  @error('foto') is-invalid @enderror" value="{{$wali->nama}}" id="">
                                @error('foto')
                                <span class="invalid-feesback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">pilih data siswa </label>
                                <select name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror" id="" readonly>
                                    @foreach($siswa as $data)
                                        <option value=" {{$data->id}} "
                                        {{$data->id == $wali->id_siswa ? 'selected' : ''}}>
                                        {{$data->nama}}
                                        </option>
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