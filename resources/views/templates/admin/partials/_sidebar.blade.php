<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header" style="background-color: #0f203f;padding-left: 12px;">
        <!-- Logo -->
        <a class="font-w600 text-dual" href="https://bpjs-kesehatan.go.id/bpjs/">
            <img src="{{ asset('assets/images/logo/logo.png') }}" style="width: 30px;">
            <span class="smini-hide">
                <span class="font-w700 font-size-h5" style="vertical-align: text-top;">&nbsp;BPJS Kesehatan</span>
            </span>
        </a>
        <!-- END Logo -->
    </div>
    <!-- END Side Header -->

    <!-- Side Navigation -->
    <div class="content-side content-side-full">
        <ul class="nav-main">
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('admin/home')) active @endif" href="{{route('admin.home')}}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">Home</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('badan-usaha')) active @endif" href="#">
                    <i class="nav-main-link-icon fa fa-building"></i>
                    <span class="nav-main-link-name">Badan Usaha</span>
                </a>
            </li>
            {{-- <li class="nav-main-heading">Telemarketing</li> --}}
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon si si-earphones-alt"></i>
                    <span class="nav-main-link-name">Telemarketing</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link @if (Request::is('telemarketing/bu-baru')) active @endif" href="#">
                            {{-- <i class="nav-main-link-icon fa fa-home"></i> --}}
                            <span class="nav-main-link-name">BU Baru</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link @if (Request::is('telemarketing/bu-exs')) active @endif" href="#">
                            {{-- <i class="nav-main-link-icon fa fa-home"></i> --}}
                            <span class="nav-main-link-name">BU Up to 100%</span>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- <li class="nav-main-heading">Pemeriksaan</li> --}}
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-search"></i>
                    <span class="nav-main-link-name">Pemeriksaan</span>
                </a>
                <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                        <a class="nav-main-link @if (Request::is('pemeriksaan/bu-baru')) active @endif" href="#">
                            {{-- <i class="nav-main-link-icon fa fa-home"></i> --}}
                            <span class="nav-main-link-name">BU Baru</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link @if (Request::is('pemeriksaan/bu-exs')) active @endif" href="#">
                            {{-- <i class="nav-main-link-icon fa fa-home"></i> --}}
                            <span class="nav-main-link-name">BU up to 100%</span>
                        </a>
                    </li>
                </ul>
            </li>
            
        </ul>

    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->
