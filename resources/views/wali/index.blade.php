@extends('layouts.admin')
@section('content')
<div class ="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">Data wali
                <a href="{{route('wali.create') }}"
                class="btn btn-sm btn-outline-primary" style="float: right">
                Tambah Data
              </a>
            </div>
            <div class="card-body"></div>
            <div class="table">
                <table class="table-responsive">
                    <thead>
                        <th>No</th>
                        <th>Nama wali</th>
                        <th>Foto</th>
                        <th>Nama Pembeli</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($wali as $data)
                        <td>{{ $no ++ }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>
                            <img src="{{ $data->image() }}" style="width: 150px; height: 150px; ">
                        </td>
                        <td>{{ $data->siswa->nama }}</td>
                        <td>Aksi</td>
                        @endforeach
                    </tbody>
               </table>
            </div>
        </div>
    </div>
</div>
@endsection