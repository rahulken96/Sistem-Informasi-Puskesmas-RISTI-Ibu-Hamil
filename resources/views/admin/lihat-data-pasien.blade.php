@include('admin.layouts.header')
<body>
	@include('admin.layouts.navbar')

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
							<!-- <div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Tambah Data</h4>
									<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus"></i>
										Tambah Data
									</button>
								</div>
							</div> -->
							<div class="card-body">
								<!-- Modal -->
								<!-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<!-- <div class="modal-content">
											<div class="modal-header no-bd">
												<h5 class="modal-title">
													<span class="fw-mediumbold">
													Tambah</span>
													<span class="fw-light">
														Data Pasien
													</span>
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div> -->
											<!-- <div class="modal-body">

													<div class="row">
														<div class="col-sm-12">
															<div class="form-group form-group-default">
																<label>Name</label>
																<input id="addName" type="text" class="form-control" placeholder="fill name">
															</div>
														</div>
														<div class="col-md-6 pr-0">
															<div class="form-group form-group-default">
																<label>Position</label>
																<input id="addPosition" type="text" class="form-control" placeholder="fill position">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Office</label>
																<input id="addOffice" type="text" class="form-control" placeholder="fill office">
															</div>
														</div>
													</div>
												</form>
											</div> -->
											<!-- <div class="modal-footer no-bd">
												<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div> -->

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >


										<tbody>
											<tr>
												<td>Trisemester 1</td>
												<td> </td>
												<td> </td>
												<td> </td>

												<td>
													<div class="form-button-action">
														<a href= "#" button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat data">
															<i class="fa fa-eye""></i>
														</a>

													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<!-- <div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Tambah Data</h4>
									<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus"></i>
										Tambah Data
									</button>
								</div>
							</div> -->
							<div class="card-body">
								<!-- Modal -->
								<!-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<!-- <div class="modal-content">
											<div class="modal-header no-bd">
												<h5 class="modal-title">
													<span class="fw-mediumbold">
													Tambah</span>
													<span class="fw-light">
														Data Pasien
													</span>
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div> -->
											<!-- <div class="modal-body">

													<div class="row">
														<div class="col-sm-12">
															<div class="form-group form-group-default">
																<label>Name</label>
																<input id="addName" type="text" class="form-control" placeholder="fill name">
															</div>
														</div>
														<div class="col-md-6 pr-0">
															<div class="form-group form-group-default">
																<label>Position</label>
																<input id="addPosition" type="text" class="form-control" placeholder="fill position">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Office</label>
																<input id="addOffice" type="text" class="form-control" placeholder="fill office">
															</div>
														</div>
													</div>
												</form>
											</div> -->
											<!-- <div class="modal-footer no-bd">
												<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div> -->

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >


										<tbody>
											<tr>
												<td>Trisemester 2</td>
												<td> </td>
												<td> </td>
												<td> </td>

												<td>
													<div class="form-button-action">
														<a href= "#" button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat data">
															<i class="fa fa-eye""></i>
														</a>

													</div>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="card">
							<!-- <div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Tambah Data</h4>
									<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus"></i>
										Tambah Data
									</button>
								</div>
							</div> -->
							<div class="card-body">
								<!-- Modal -->
								<!-- <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<!-- <div class="modal-content">
											<div class="modal-header no-bd">
												<h5 class="modal-title">
													<span class="fw-mediumbold">
													Tambah</span>
													<span class="fw-light">
														Data Pasien
													</span>
												</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div> -->
											<!-- <div class="modal-body">

													<div class="row">
														<div class="col-sm-12">
															<div class="form-group form-group-default">
																<label>Name</label>
																<input id="addName" type="text" class="form-control" placeholder="fill name">
															</div>
														</div>
														<div class="col-md-6 pr-0">
															<div class="form-group form-group-default">
																<label>Position</label>
																<input id="addPosition" type="text" class="form-control" placeholder="fill position">
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group form-group-default">
																<label>Office</label>
																<input id="addOffice" type="text" class="form-control" placeholder="fill office">
															</div>
														</div>
													</div>
												</form>
											</div> -->
											<!-- <div class="modal-footer no-bd">
												<button type="button" id="addRowButton" class="btn btn-primary">Add</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div> -->

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >


										<tbody>
											<tr>
												<td>Trisemester 3</td>
												<td> </td>
												<td> </td>
												<td> </td>

												<td>
													<div class="form-button-action">
														<a href= "#" button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat data">
															<i class="fa fa-eye""></i>
														</a>

													</div>
												</td>
											</tr>

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
