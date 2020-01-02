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
                            <th>Food Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Home Name</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($foods as $f)
                        @php
                            $no++;
                        @endphp
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $f->food_name }}</td>
                                <td><img width="150px" height="90px" src=""></td>
                                <td>{{ $f->food_price }}</td>
                                <td>{{ $f->home_name}}</td>
                                <td>{{ $f->food_status}}</td>
                                <td><a href="#detail" data-toggle="modal" class="btn btn-info btn-sm">Lihat Gambar</a>
                                    <a href="/foods/hapus/{{ $f->food_id }}" onclick="return confirm('anda yakin menghapus item ini?')" class="btn btn-danger btn-sm">Delete</a></td>
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