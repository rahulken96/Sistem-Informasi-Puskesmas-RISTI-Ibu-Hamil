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
                                <h4 class="card-title">Lihat Data Pengguna</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($user as $val )

                                <div class="col-md-6">
                                    <div class="mb-3">

                                        <div class="form-group">
                                            <label for="namaPengguna">Nama Pengguna</label>
                                            <input name="namaPengguna" type="text"
                                                class="form-control-plaintext text-monospace @error('namaPengguna') is-invalid @enderror"
                                                id="defaultInput" placeholder="Nama" value="{{ $val->nama }}"
                                                disabled>
                                            @error('namaPengguna')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input name="username" type="text"
                                                class="form-control-plaintext text-monospace @error('username') is-invalid @enderror"
                                                id="defaultInput" placeholder="Username" value="{{ $val->username }}"
                                                disabled>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="alamatPengguna">Alamat Pengguna</label>
                                            <textarea name="alamatPengguna" class="form-control-plaintext text-monospace @error('alamatPengguna') is-invalid @enderror" placeholder="Alamat"
                                                disabled>{{ $val->alamat }}</textarea>
                                            @error('alamatPengguna')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
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
                                                class="form-control-plaintext text-monospace @error('emailPengguna') is-invalid @enderror"
                                                id="defaultInput" placeholder="email@example.com"
                                                value="{{ $val->email }}" disabled>
                                            @error('emailPengguna')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="umur">Usia</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control-plaintext text-monospace font-weight-bold" id="validationCustomUsername" placeholder="{{ $val->umur }} Tahun" aria-describedby="inputGroupPrepend" disabled>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="largeInput">Jabatan</label>
                                            <select name="jabatan" id=""
                                                class="form-control-plaintext text-monospace @error('jabatan') is-invalid @enderror select2">
                                                @if (old('jabatan') == 'bidan')
                                                    <option value="" disabled>-- Pilih --</option>
                                                    <option value="bidan" selected>Bidan</option>
                                                    <option value="kepala_pus">Kepala Puskesmas</option>
                                                    <option value="kepala_des">Kepala Desa</option>
                                                    <option value="kepala_cam">Kepala Kecamatan</option>
                                                @elseif (old('jabatan') == 'kepala_pus')
                                                    <option value="" disabled>-- Pilih --</option>
                                                    <option value="bidan">Bidan</option>
                                                    <option value="kepala_pus" selected>Kepala Puskesmas</option>
                                                    <option value="kepala_des">Kepala Desa</option>
                                                    <option value="kepala_cam">Kepala Kecamatan</option>
                                                @elseif (old('jabatan') == 'kepala_des')
                                                    <option value="" disabled>-- Pilih --</option>
                                                    <option value="bidan">Bidan</option>
                                                    <option value="kepala_pus">Kepala Puskesmas</option>
                                                    <option value="kepala_des" selected>Kepala Desa</option>
                                                    <option value="kepala_cam">Kepala Kecamatan</option>
                                                @elseif (old('jabatan') == 'kepala_cam')
                                                    <option value="" disabled>-- Pilih --</option>
                                                    <option value="bidan">Bidan</option>
                                                    <option value="kepala_pus">Kepala Puskesmas</option>
                                                    <option value="kepala_des">Kepala Desa</option>
                                                    <option value="kepala_cam" selected>Kepala Kecamatan</option>
                                                @else
                                                    <option value="" disabled selected>-- Pilih --</option>
                                                    <option value="bidan">Bidan</option>
                                                    <option value="kepala_pus">Kepala Puskesmas</option>
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
                                    <a class="btn btn-outline-info" data-toggle="collapse"
                                        href="{{ route('admin.data-pengguna.index') }}" role="button"
                                        aria-expanded="false" aria-controls="collapseExample">Keluar</a>
                                </div>
                            </div>
                            @endforeach
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
