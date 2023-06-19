<!-- Header -->
@php use Carbon\Carbon; @endphp
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Toggle Mini Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
            <!-- END Toggle Mini Sidebar -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ml-2">
                <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded" src="{{ asset('assets/images/avatar/user.png') }}" alt="" style="width: 18px;">
                    <span class="d-none d-sm-inline-block ml-1">@php $nama = explode(" ", Auth::user()->nama); echo $nama[0]; @endphp</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 text-center bg-flat-lighter">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/images/avatar/user.png') }}" alt="">
                    </div>
                    <div class="p-2">
                        <!-- <h5 class="dropdown-header text-uppercase">User Options</h5>

                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="">
                            <span>Profile</span>
                            <span><i class="si si-user ml-1"></i></span>
                        </a>
                        <div role="separator" class="dropdown-divider"></div> -->
                        <h5 class="dropdown-header text-uppercase">Actions</h5>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" style="cursor: pointer;" data-toggle="modal" data-target="#edit_profile_modal">
                            <span>Ubah Username/Password</span>
                            <i class="fa fa-user-edit ml-2 text-warning"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" style="cursor: pointer;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span>Log Out</span>
                            <i class="fa fa-sign-out-alt ml-2 text-danger"></i>
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
            
            <!-- END Toggle Side Overlay -->
        </div>
        <!-- END Right Section -->
    </div>
    
</header>
<!-- END Header -->





