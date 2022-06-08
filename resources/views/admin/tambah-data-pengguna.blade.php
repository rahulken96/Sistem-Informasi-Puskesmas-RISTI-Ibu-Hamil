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
									<h4 class="card-title">Tambah Data Pengguna</h4>

                                </div>
							</div>
							<div class="card-body">

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
                                        <div class="form-group">
                                            <label for="largeInput">Nama</label>
                                            <input type="text" class="form-control form-control" id="defaultInput" placeholder="Nama..">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeInput">Username</label>
                                            <input type="text" class="form-control form-control" id="defaultInput" placeholder="Username..">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeInput">Usia</label>
                                            <input type="text" class="form-control form-control" id="defaultInput" placeholder="Usia..">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeInput">Role</label>
                                            <input type="number" class="form-control form-control" id="defaultInput" placeholder="Role..">
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
