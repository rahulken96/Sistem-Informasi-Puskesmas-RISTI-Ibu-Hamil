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
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2"> Hi {{ explode(' ', Auth::user()->nama )[0] . ' ' .  explode(' ', Auth::user()->nama )[1] }} !</h5>
							</div>

						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title text-center">Jumlah Pasien/Ibu Hamil</div>

									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											{{-- <div id="circles-2"></div> --}} 2
											<h6 class="fw-bold mt-3 mb-0">Pasien/Ibu Hamil</h6>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title text-center">Jumlah Pasien/Ibu Hamil yang RISTI</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											{{-- <div id="circles-1"></div> --}}
                                            0
											<h6 class="fw-bold mt-3 mb-0">Pasien/Ibu Hamil</h6>
										</div>
									</div>
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
