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
						<h4 class="page-title">Cetak Laporan</h4>
					</div>
                            <div class="col-md-6">
                                <div class="card full-height">
                                    <div class="card-body">
                                        <div class="card-tools">
                                            <form action="" method="POST">
                                                <div class="form-group">
                                                    <select name="bulan" id="bulan" class="form-control">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">Nopember</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                    <div class="form-group">
                                                        <input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
                                                        <a href="?halaman=laporan_perbulan">
                                                        <input type="submit" value="Reload" class="btn btn-primary btn-sm">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Laporan RISTI</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add2" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Trisemester </th>
                                                <th>Resiko Tinggi</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Ibu Hamil</td>
                                                <td>2</td>
                                                <td>ya</td>
                                                <td>lohbener</td>
                                                <td>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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
