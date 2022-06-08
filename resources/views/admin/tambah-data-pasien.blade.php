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
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Tambah Data Pasien</h4>

                                </div>
							</div>
							<div class="card-body">

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
                                        <div class="form-group">
                                            <label for="largeInput">Nama Pasien</label>
                                            <input type="text" class="form-control form-control" id="defaultInput" placeholder="Nama pasien..">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeInput">Usia</label>
                                            <input type="text" class="form-control form-control" id="defaultInput" placeholder="Usia Pasien..">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeInput">Alamat</label>
                                            <input type="text" class="form-control form-control" id="defaultInput" placeholder="Alamat..">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeInput">Kehamilan ke</label>
                                            <input type="number" class="form-control form-control" id="defaultInput" placeholder="Kehamilan ke...">
                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-success">Submit</button>
                                            <button class="btn btn-danger">Cancel</button>
                                        </div>

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
