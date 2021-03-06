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
						<h4 class="page-title">Data Pasien</h4>
					</div>
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">

                                    <nav class="navbar navbar-light">
                                        <div class="container-fluid">
                                          <form class="d-md-flex" action="{{ route('admin.data-pasien.index') }}" method="get">
                                            @csrf
                                            <input class="form-control me-3" name="cari" type="search" placeholder="Cari Data Pasien .." aria-label="Search">
                                            <button class="btn btn-outline-success ml-3" type="submit">Cari</button>
                                          </form>
                                        </div>
                                      </nav>

                                      <a href="{{ route('admin.data-pasien.create') }}" class="btn btn-primary btn-round ml-auto" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Data</a>

								</div>
							</div>
							<div class="card-body">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>Nama Pasien</th>
												<th>Usia</th>
												<th>Alamat</th>
												<th>Kehamilan ke</th>
												<th style="width: 10%; align-items: center">Aksi</th>
											</tr>
										</thead>

										<tbody>
											@foreach ($pasien as $val )
                                            <tr>
												<td>{{ $val->nama }}</td>
												<td>{{ $val->umur }} tahun</td>
												<td>{{ $val->alamat }}</td>
												<td>{{ rand(1,3) }}</td>
												<td>
													<div class="form-button-action items-center">
														<a href= "lihat-data-valien.html" button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat">
															<i class="fa fa-eye"></i>
														</a>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
															<i class="fa fa-edit"></i>
														</button>
														<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus">
															<i class="fa fa-times"></i>
														</button>
													</div>
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
