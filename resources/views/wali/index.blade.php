@extends('layouts/admin')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card border-secondary">
            <div class="card-header">
                <a href=" {{route('wali.create')}} " class="btn btn-sm btn-outline-primary" style="float: right">
                    Tambah Data 
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable">
                        <thead>
                            <th>no</th>
                            <th>Nama wali</th>
                            <th>foto</th>
                            <th>Nama Siswa</th>
                            <th>aksi</th>
                        </thead>
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($wali as $data)
                            <tr>

                                <td>{{$no++}}</td>
                                <td> {{$data->nama}} </td>
                                <td>
                                    <img src=" {{$data->image()}} " style="width: 100px; height:100px;">
                                </td>
                                <td> {{$data->siswa->nama}} </td>
                                <td>
                                    <form action=" {{route('wali.destroy',$data->id)}} " method="post">
                                    @csrf
                                    @method('delete')
                                    <a href=" {{route('wali.edit',$data->id)}} " class="btn btn-sm btn-outline-success">Edit</a>|
                                    <a href=" {{route('wali.show',$data->id)}} " class="btn btn-sm btn-outline-warning">Show</a>|
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('apakah anda yakin?')">Delete</button>
                                    </form>
                                </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection