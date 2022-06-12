@include('admin.layouts.header')
<body>

		<!-- Navbar Header -->
        @include('admin.layouts.navbar')
		<!-- End Navbar -->

		<!-- Sidebar -->
		@include('admin.layouts.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Pengguna</h4>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Tambah Data</h4>
                                    <a href="{{ route('admin.data-pengguna.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Data</a>
								</div>
							</div>
							<div class="card-body">
                                @if ($pesan = session('success'))
                                    <div class="alert alert-success" role="alert">
                                        <Strong>{{ $pesan }}</Strong>
                                    </div>
                                @endif
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>Nama</th>
												<th>Username</th>
												<th>Usia</th>
												<th>Alamat</th>
												<th>role</th>
												<th style="width: 10%">Aksi</th>
											</tr>
										</thead>

										<tbody>
											@foreach ($user as $val )
                                            <tr>
                                                <td>{{ $val->nama }}</td>
												<td>{{ $val->username }}</td>
												<td>{{ $val->umur }} tahun</td>
												<td>{{ $val->alamat }}</td>
												<td>{{ $val->role }}</td>
												<td>
                                                    <form action="{{ route('admin.data-pengguna.destroy', $val->id) }}" method="POST" class="custom-validation">
                                                        <div class="form-button-action items-center">
                                                            <a href= "{{ route('admin.data-pengguna.show', $val->id) }}" button type="button" data-toggle="tooltip" title="Lihat Data" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </form>
												</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('admin.layouts.footer')
		</div>
	</div>
	@include('admin.layouts.script')
</body>
