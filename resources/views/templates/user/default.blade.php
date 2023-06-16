<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('templates.user.partials._head')
<body>
  <div id="page-container" class="sidebar-o sidebar-dark @if(Request::is('#')) sidebar-mini @endif enable-page-overlay side-scroll page-header-dark page-header-fixed">
    <!-- Sidebar -->
    @include('templates.user.partials._sidebar')
    <!-- End Sidebar -->
    <!-- Header -->
    @include('templates.user.partials._header')
    <!-- End Header -->

    <!-- Content  -->
    @yield('content')
    <!-- End Content -->

    {{-- Edit Profil --}}
    <div class="modal fade" id="edit_profile_modal" tabindex="-1" role="dialog" aria-labelledby="modal-block-popin" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header" style="background-color: #cd0f20;">
                        <h3 class="block-title" style="font-size: 18px;">Ubah Username/Password</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row">
                            <div class="col-lg-8 col-xl-12">
                                <div class="row">
                                    <div class="form-group col-4">
                                        <label for=""><b>NPP</b></label><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{ Auth::user()->npp }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label for=""><b>Nama</b></label><br>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{ Auth::user()->nama }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label for=""><b>Username</b></label><br>
                                        <div class="input-group">
                                            <input type="text" id="current_username" name="current_username" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <form method="post" id="edit_profile_form" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for=""><b>Ganti Username Baru</b></label><br>
                                            <div class="input-group">
                                                <input type="text" class="js-maxlength form-control" id="new_username" name="new_username" maxlength="50" minlength="3" placeholder="Kosongkan jika Username tidak ingin diubah" data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for=""><b>Konfirmasi Password Lama</b><span class="text-danger">*</span></label><br>
                                            <div class="input-group">
                                                <input type="password" class="js-maxlength form-control" id="confirm_password" name="confirm_password" maxlength="100" minlength="3" placeholder="Password Lama" data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for=""><b>Ganti Password Baru</b></label><br>
                                            <div class="input-group">
                                                <input type="text" class="js-maxlength form-control" id="new_password" name="new_password" maxlength="100" minlength="3" placeholder="Kosongkan jika Password tidak ingin diubah" data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content block-content-full text-right border-top">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-dark" id="edit_profile_savebtn">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- END Edit Profil --}}

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
      <div class="content py-3">
        <div class="row font-size-sm">
          <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
            <a class="font-w600" href="https://bpjs-kesehatan.go.id/bpjs" target="_blank"><b>BPJS Kesehatan</b></a> &copy; <span data-toggle="year-copy"></span>
          </div>
          <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">

          </div>
        </div>
      </div>
    </footer>

    <!-- END Footer -->
  </div>
  @include('templates.user.partials._script')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = Array.from(
            document.querySelectorAll('input[name=new_username], input[name=new_password]')
        );

        const inputListener = e => {
            inputs
            .filter(i => i !== e.target)
            .forEach(i => (i.required = !e.target.value.length));
        };

        inputs.forEach(i => i.addEventListener('input', inputListener));
    });
  </script>
  
  {{-- Page Script --}}
  @yield('page-script')
  {{-- END Page Script --}}

</body>
</html>
