@extends('main')

@section('title', 'Admin - Vente de livre_formation')
@section('content')

@if(auth()->user()->can('dashboard'))
<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar pt-6 pb-2">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                <!--begin::Toolbar wrapper-->
                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                        <!--begin::Title-->
                        <h1>
                        <div class="text-secondary order-2 order-md-1">
                            <span class="text-muted">Bienvenue</span>
                            <span class="text-primary fw-semibold me-1">{{ auth()->user()->username }}</span>
                        </div>
                        <!--end::Title-->
                        </h1>
                    </div>
                    <!--end::Page title-->
                </div>
                <!--end::Toolbar wrapper-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <div class="col-xl-3">
                        <a href="#" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                            <div class="card-body">
                                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                        <path d="M12 2C6.48 2 2 6.48 2 12v7c0 .55.45 1 1 1s1-.45 1-1v-1h14v1c0 .55.45 1 1 1s1-.45 1-1v-7c0-5.52-4.48-10-10-10zm-2 15h-2v-3h2v3zm0-4h-2v-5h2v5zm4 4h-2v-3h2v3zm0-4h-2v-5h2v5zm4 4h-2v-3h2v3zm0-4h-2v-5h2v5z"/>
                                    </svg>
                                </span>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Annonces</div>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total:{{ $totalAnnonces }}</div>
                            </div>
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                    <div class="col-xl-3">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                        <path d="M20 6h-8l-2-2h-6c-1.104 0-2 .896-2 2v14c0 1.104.896 2 2 2h16c1.104 0 2-.896 2-2v-10c0-1.104-.896-2-2-2zm0 12h-16v-10h2v2h12v-2h2v10zm-2-7h-10v-2h10v2zm0 4h-10v-2h10v2z"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Transactions</div>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                    <div class="col-xl-3">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-success hoverable card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                                <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="24" height="24">
                                        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm8 2h-1c-1.1 0-2 .9-2 2v1c0 1.1.9 2 2 2h1c1.1 0 2-.9 2-2v-1zm-16 0h-1c-1.1 0-2 .9-2 2v1c0 1.1.9 2 2 2h1c1.1 0 2-.9 2-2v-1z"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Utilisateurs</div>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total: {{ $totalUsers }}</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                    <div class="col-xl-3">
                        <!--begin::Statistics Widget 5-->
                        <a href="#" class="card bg-dark hoverable card-xl-stretch mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra005.svg-->
                                <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                                    <i class="fa fa-bell fs-2hx"></i>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Messages</div>
                                <div class="text-white fw-bold fs-2 mb-2 mt-5">Total: {{ $totalMessages }}</div>
                            </div>
                            <!--end::Body-->
                        </a>
                        <!--end::Statistics Widget 5-->
                    </div>
                </div>
                <!--end::Row-->
                <!--begin::Row-->
                
                <!--end::Row-->
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-center">Graphes présentant les annnces totales</h1>
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <h1 class="text-center">Graphe présentant les utilisateurs totaux</h1>
                            <canvas id="myChart0"></canvas>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endif

    @include('chartjs.chartjs2')

    @endsection
