@extends('main')

@section('title', 'Détail sur l\'annonce')
@section('content')

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
                    <!--begin::Button-->
                    <x-back-button
                        :link="route('admin.annonces.index')"
                    />
                    <!--begin::Button-->
                    <x-edit-button
                        :link="route('admin.annonces.edit', $annonce)"
                        :name="'l\' annonce'"
                    />
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
                <!--begin::Post card-->
                <div class="card">
                    <!--begin::Body-->
                    <div class="card-body p-lg-20 pb-lg-0">
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-xl-row">
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid me-xl-15">
                                <!--begin::Post content-->
                                <div class="mb-17">
                                    <!--begin::Wrapper-->
                                    <div class="mb-8">
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap mb-6">
                                            <!--begin::Item-->
                                            <div class="me-9 my-1">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-800">Créée le:</span> {{ $annonce->created_at->format('d M Y') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="me-9 my-1">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-800">Modifiée le:</span> {{ $annonce->updated_at->format('d M Y') }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="me-9 my-1">
                                                <!--begin::Icon-->
                                                <!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-800">Statut :</span> @if($annonce->status == true)
                                                    <span class="badge badge-light-success fs-7 fw-bold">Activé</span>
                                                    @else
                                                    <span class="badge badge-light-danger fs-7 fw-bold">Désactivé</span>
                                                    @endif
                                                </span>
                                                <!--begin::Label-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="my-1">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                                <span class="svg-icon svg-icon-primary svg-icon-2 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
                                                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Label-->
                                                <span class="fw-bold text-gray-800">Auteur: {{ $annonce->user->username }}</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Title-->
                                        <a href="#" class="text-dark text-hover-primary fs-2 fw-bold">{{ $annonce->title }} </a>
                                        <!--end::Title-->
                                        <!--begin::Container-->
                                        <div class="overlay mt-8">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('{{ asset('images/' . $annonce->image) }}')"></div>
                                            <!--end::Image-->
                                        </div>
                                        <!--end::Container-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Description-->
                                    <div class="fs-5 fw-semibold text-gray-900">
                                        <!--begin::Text-->
                                        <p class="mb-8">{!! $annonce->description ? html_entity_decode($annonce->description) : 'Aucune description' !!}</p>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Post content-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Layout-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Post card-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->
@endsection
