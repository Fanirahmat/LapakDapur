@extends('layouts.templateAdmin')
@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Tabel User / Customer
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Nama Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($users as $u)
                        @php
                            $no++;
                        @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $u->full_name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->level_name }}</td>
                                <td><a href="/users/hapus/{{ $u->user_id }}" onclick="return confirm('anda yakin menghapus user ini?')" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection