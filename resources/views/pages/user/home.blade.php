@extends('templates.user.default')

@section('content')

<!-- Main Container -->
<main id="main-container">
    <!-- Hero -->
    <div class="bg-image overflow-hidden" style="background-image: url({{ asset('assets/images/bg/bg4.svg') }});">
        <div class="bg-primary-dark-op" style="background-color: rgba(62,74,89,.4)!important;">
            <div class="content content-narrow content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                    <div class="flex-sm-fill">
                        <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Pesawat - BPJS Kesehatan</h1>
                        <h2 class="h4 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">{{ Auth::user()->nama }} ({{ Auth::user()->jabatan }})</h2>
                    </div>
                    <div class="flex-sm-00-auto mt-3 mt-sm-0 ml-sm-3">
                        <span class="d-inline-block invisible" data-toggle="appear" data-timeout="350">
                            <a class="btn btn-dark px-4 py-2" data-toggle="click-ripple" href="#">
                                <i class="fa fa-envelope mr-1"></i> Cek Pesan
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-narrow">
        <!-- Stats -->
        <div class="row">
            <div class="col-6 col-md-4 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-dark border-4x" href="#">
                    <div class="block-content block-content-full">
                        <img class="img-fluid mb-2" style="height:150px" src="{{ asset('assets/images/icon/home/dealer.svg') }}" alt="">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Dealer</div>
                        <div class="font-size-h2 font-w400 text-dark">100</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-dark border-4x" href="#">
                    <div class="block-content block-content-full">
                        <img class="img-fluid mb-2" style="height:150px" src="{{ asset('assets/images/icon/home/newsfeed.svg') }}" alt="">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Newsfeed</div>
                        <div class="font-size-h2 font-w400 text-dark">100</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-dark border-4x" href="#">
                    <div class="block-content block-content-full">
                        <img class="img-fluid mb-2" style="height:150px" src="{{ asset('assets/images/icon/home/mailbox.svg') }}" alt="">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Pesan Masuk</div>
                        <div class="font-size-h2 font-w400 text-dark">100</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-dark border-4x" href="#">
                    <div class="block-content block-content-full">
                        <img class="img-fluid mb-2" style="height:150px" src="{{ asset('assets/images/icon/home/review.svg') }}" alt="">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Review</div>
                        <div class="font-size-h2 font-w400 text-dark">100</div>
                    </div>
                </a>
            </div>
            
        </div>
    </div>
    <!-- END Stats -->
</main>
@endsection

@section('page-script')
    @include('templates.user.partials.scripts._home')
@endsection
