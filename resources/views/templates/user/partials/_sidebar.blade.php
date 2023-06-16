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
                <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('user.home')}}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">Home</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('user.home')}}">
                    <i class="nav-main-link-icon fa fa-building"></i>
                    <span class="nav-main-link-name">Badan Usaha</span>
                </a>
            </li>
            <li class="nav-main-heading">Telemarketing</li>
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('user.home')}}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">BU Baru</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('user.home')}}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">BU Up to 100%</span>
                </a>
            </li>
            <li class="nav-main-heading">Pemeriksaan</li>
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('user.home')}}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">BU Baru</span>
                </a>
            </li>
            <li class="nav-main-item">
                <a class="nav-main-link @if (Request::is('home')) active @endif" href="{{route('user.home')}}">
                    <i class="nav-main-link-icon fa fa-home"></i>
                    <span class="nav-main-link-name">BU up to 100%</span>
                </a>
            </li>
            
        </ul>

    </div>
    <!-- END Side Navigation -->
</nav>
<!-- END Sidebar -->
