<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/img/kesmas.png') }}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Admin
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
x
                    <div class="collapse in" id="collapseExample">
                    </div>
                </div>
            </div>
            <ul class="nav nav">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="{{ route('admin.dashboard') }}" class="collapsed active" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <strong>Dashboard</strong>

                        <a class="collapse" href="{{ route('admin.data-pengguna.index') }}" class="collapsed" aria-expanded="false">
                            <i class="fa fa-user "></i>
                            <p>Data Pengguna</p>
                        </a>

                        <a class="collapse" href="{{ route('admin.pasien') }}" class="collapsed" aria-expanded="false">
                            <i class="fa fa-user "></i>
                            <p>Data Pasien</p>
                        </a>
                        <a clas="collapse" href="cetak-laporan.html" class="collapsed" aria-expanded="false">
                            <i class="fa fa-print fa-lg box-icon"></i>
                            <p>Cetak Laporan</p>
                            <!-- <span class="caret"></span> -->
                        </a>

                    </a>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
