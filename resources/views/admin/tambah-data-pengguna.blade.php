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
                            <form action="{{ route('admin.data-pengguna.store') }}" method="post"
                                class="custom-validation">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="namaPengguna">Nama Pengguna</label>
                                                <input name="namaPengguna" type="text"
                                                    class="form-control @error('namaPengguna') is-invalid @enderror"
                                                    id="defaultInput" placeholder="Nama"
                                                    value="{{ old('namaPengguna') }}" required>
                                                @error('namaPengguna')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input name="username" type="text"
                                                    class="form-control @error('username') is-invalid @enderror"
                                                    id="defaultInput" placeholder="Username"
                                                    value="{{ old('username') }}" required>
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input name="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="exampleInputPassword1" placeholder="Password" required>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Konfirmasi Password</label>
                                                <input name="password_confirmation" type="password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="exampleInputPassword1" placeholder="Password" required>
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>The password confirmation does not match.</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label for="largeInput">E-mail Pengguna</label>
                                                <input name="emailPengguna" type="text"
                                                    class="form-control @error('emailPengguna') is-invalid @enderror"
                                                    id="defaultInput" placeholder="email@example.com"
                                                    value="{{ old('emailPengguna') }}" required>
                                                @error('emailPengguna')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
                                            <div class="form-group">
                                                <label for="largeInput">Jabatan</label>
                                                <select name="jabatan" id=""
                                                    class="form-control @error('jabatan') is-invalid @enderror select2">
                                                    @if (old('jabatan') == 'bidan')
                                                        <option value="" disabled>-- Pilih --</option>
                                                        <option value="bidan" selected>Bidan</option>
                                                        <option value="kepala_pus">Kepala Puseksesmas</option>
                                                        <option value="kepala_des">Kepala Desa</option>
                                                        <option value="kepala_cam">Kepala Kecamatan</option>
                                                    @elseif (old('jabatan') == 'kepala_pus')
                                                        <option value="" disabled >-- Pilih --</option>
                                                        <option value="bidan">Bidan</option>
                                                        <option value="kepala_pus" selected>Kepala Puseksesmas</option>
                                                        <option value="kepala_des">Kepala Desa</option>
                                                        <option value="kepala_cam">Kepala Kecamatan</option>
                                                    @elseif (old('jabatan') == 'kepala_des')
                                                        <option value="" disabled >-- Pilih --</option>
                                                        <option value="bidan">Bidan</option>
                                                        <option value="kepala_pus">Kepala Puseksesmas</option>
                                                        <option value="kepala_des" selected>Kepala Desa</option>
                                                        <option value="kepala_cam">Kepala Kecamatan</option>
                                                    @elseif (old('jabatan') == 'kepala_cam')
                                                        <option value="" disabled >-- Pilih --</option>
                                                        <option value="bidan">Bidan</option>
                                                        <option value="kepala_pus">Kepala Puseksesmas</option>
                                                        <option value="kepala_des" >Kepala Desa</option>
                                                        <option value="kepala_cam" selected>Kepala Kecamatan</option>
                                                    @else
                                                        <option value="" disabled selected>-- Pilih --</option>
                                                        <option value="bidan">Bidan</option>
                                                        <option value="kepala_pus">Kepala Puseksesmas</option>
                                                        <option value="kepala_des">Kepala Desa</option>
                                                        <option value="kepala_cam">Kepala Kecamatan</option>
                                                    @endif

                                                </select>
                                                @error('jabatan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                        <a class="btn btn-danger" data-toggle="collapse" href="{{ route('admin.data-pengguna.index') }}" role="button" aria-expanded="false" aria-controls="collapseExample">Batal</a>
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
