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
                                <form action="{{ route('admin.data-pengguna.store') }}" method="post"
                                    class="custom-validation">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="nik">NIK</label>
                                                    <input name="nik" type="text"
                                                        class="form-control @error('nik') is-invalid @enderror"
                                                        id="defaultInput" placeholder="NIK"
                                                        value="{{ old('nik') }}" required>
                                                    @error('nik')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="namaPasien">Nama Pasien</label>
                                                    <input name="namaPasien" type="text"
                                                        class="form-control @error('namaPasien') is-invalid @enderror"
                                                        id="defaultInput" placeholder="Nama Pasien"
                                                        value="{{ old('namaPasien') }}" required>
                                                    @error('namaPasien')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="namaSuami">Nama Suami</label>
                                                    <input name="namaSuami" type="text"
                                                        class="form-control @error('namaSuami') is-invalid @enderror"
                                                        id="defaultInput" placeholder="Nama Suami"
                                                        value="{{ old('namaSuami') }}" required>
                                                    @error('namaSuami')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamatPasien">Alamat Pasien</label>
                                                    <textarea name="alamatPasien" class="form-control @error('alamatPasien') is-invalid @enderror" placeholder="Alamat"
                                                        required>{{ old('alamatPasien') }}</textarea>
                                                    @error('alamatPasien')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                      <label for="inputCity">City</label>
                                                      <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                      <label for="inputState">State</label>
                                                      <select id="inputState" class="form-control">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                      </select>
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamatPengguna">Alamat Pengguna</label>
                                                    <textarea name="alamatPengguna" class="form-control @error('alamatPengguna') is-invalid @enderror" placeholder="Alamat"
                                                        required>{{ old('alamatPengguna') }}</textarea>
                                                    @error('alamatPengguna')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="umur">Usia</label>
                                                    <div class="input-group">
                                                        <input type="number" name="umur"
                                                            class="form-control @error('umur') is-invalid @enderror"
                                                            placeholder="Usia" min="18" max="100" value="{{ old('umur') }}"
                                                            required>
                                                        <div class="input-group-text">Tahun</div>
                                                        @error('umur')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-action">
                                            <button type="submit" class="btn btn-info">Simpan</button>
                                            <a class="btn btn-outline-danger" data-toggle="collapse" href="{{ route('admin.data-pengguna.index') }}" role="button" aria-expanded="false" aria-controls="collapseExample">Batal</a>
                                        </div>
                                    </div>
                                </form>
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
