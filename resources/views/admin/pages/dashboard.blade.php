@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card text-center">
            <h2>35</h2>
            <p>Jumlah Audio</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <h2>35</h2>
            <p>Jumlah Video</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center">
            <h2>35</h2>
            <p>Jumlah Karya</p>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cube-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Total Pengunjung</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class=" text-muted">Toal Pengunjung Selama Website ini ada</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Kemarin : 1325</p>
                    </div>
                    <h5 class="m-0">1456 Pengunjung</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-account-network float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Pengunjung Hari ini</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                        <span class=" text-muted">Pengunjung Website pada Hari ini</span>
                </div>
                <div class="mt-4 text-muted">
                    <h5 class="m-0">3567 Pengunjung</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Total Member</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class=" text-muted">Total Member yang telah mendaftar</span>
                </div>
                <div class="mt-4 text-muted">
                    <div class="float-right">
                        <p class="m-0">Kemarin : 15.8</p>
                    </div>
                    <h5 class="m-0">14.5 Member</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat m-b-30">
            <div class="p-3 bg-primary text-white">
                <div class="mini-stat-icon">
                    <i class="mdi mdi-cart-outline float-right mb-0"></i>
                </div>
                <h6 class="text-uppercase mb-0">Member Baru Hari ini</h6>
            </div>
            <div class="card-body">
                <div class="border-bottom pb-4">
                    <span class=" text-muted">Member yang Mendaftar pada Hari ini</span>
                </div>
                <div class="mt-4 text-muted">
                    <h5 class="m-0">15234 Member</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    <script src="{{asset('assets/pages/dashboard.js')}}"></script>
@endpush