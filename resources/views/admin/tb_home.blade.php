@extends('layouts.templateAdmin')
@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Tabel Home's
                </h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Home Name</th>
                            <th>Image</th>
                            <th>Telpone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($homes as $h)
                        @php
                            $no++;
                        @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $h->home_name }}</td>
                                <td><img width="150px" height="90px" src=""></td>
                                <td>{{ $h->telephone }}</td>
                                <td>{{ $h->address}}</td>
                                <td>{{ $h->status}}</td>
                                <td><a href="#detail" data-toggle="modal" class="btn btn-info btn-sm">Lihat Gambar</a>
                                    <a href="/homes/hapus/{{ $h->home_id }}" onclick="return confirm('anda yakin menghapus homes ini?')" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

	<!-- Modal -->
	<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Detail Gambar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img width="565px" height="365px" src="">
				</div>
			</div>
		</div>
	</div>

@endsection