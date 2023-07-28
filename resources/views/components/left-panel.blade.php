<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand my-2" href="./"><img src="{{ asset('images/logo1.png') }}" alt="Logo"
                    width="100"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('images/logo1.png') }}" alt="Logo"
                    width="100"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if (Auth::user()->hasRole('admin'))
                    <li class="active">
                        <a href="{{ route('admin.dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.data-karyawan') }}"> <i class="menu-icon ti-email"></i>Data Karyawan </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Absensi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="qr.php">QR Code</a></li>
                            <li><i class="fa fa-table"></i><a href="absen.php">Data Absensi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="generate.php"> <i class="menu-icon ti-email"></i>Generate Laporan</a>
                    </li>
                @else
                    <li class="active">
                        <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.data-karyawan') }}"> <i class="menu-icon fa fa-table"></i>Absensi </a>
                    </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->
<!-- Left Panel -->
