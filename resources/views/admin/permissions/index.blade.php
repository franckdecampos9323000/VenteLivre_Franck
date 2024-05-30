@extends('main')

@section('title', 'Liste des permissions')
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
                    <!--begin::Page title-->
                    <x-title :pageTitle="'Liste des permissions'" />
                    <!--begin::Page title-->
                    <!--begin::Breadcrumb-->
                    <x-breadcrumb
                        :link1="route('home')"
                        :link2="route('admin.permissions.index')"
                        :text2="'Permission'"
                        :link3="''"
                        :text3="'Liste des permissions'"
                        :link4="''"
                        :link5="''"
                    />
                    <!--End::Breadcrumb->
                    <!--begin::Button-->
                    <x-add-button :link="route('admin.permissions.index')" :name="'une permission'" />
                    <!--begin::Button-->
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
                <x-stat-list
                    :icon1="'fa fa-shield fs-2 me-2'"
                    :texticon1="'Nombre de permissions'"
                    :text1="$allpermissions"
                    :icon2="'fas fa-check-circle fs-2 text-success me-2'"
                    :texticon2="'Permission actif'"
                    :text2="$allpermissions"
                    :icon3="'fas fa-times-circle fs-2 me-2'"
                    :texticon3="'Permission non actif'"
                    :text3="'0'"
                />
                <!--end::Row-->
                <br>
                <!--begin::Alert-->
                @if(session('success'))
                <div id="msgsuccess" class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen007.svg-->
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="white"/>
                    <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="white"/>
                    </svg></span>
                    <!--end::Svg Icon--></span>
                    <!--end::Icon-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 light">Message</h4>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <span>{{ session('success') }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Close-->
                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <span class="svg-icon svg-icon-2hx svg-icon-light"><!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs012.svg-->
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr019.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="white"/>
                        <path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="white"/>
                        </svg></span>
                        <!--end::Svg Icon--></span>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
                @endif

                @if(session('danger'))
                <div id="msgdanger" class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen007.svg-->
                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="white"/>
                    <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="white"/>
                    </svg></span>
                    <!--end::Svg Icon--></span>
                    <!--end::Icon-->

                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                        <!--begin::Title-->
                        <h4 class="mb-2 light">Message</h4>
                        <!--end::Title-->
                        <!--begin::Content-->
                        <span>{{ session('danger') }}</span>
                        <!--end::Content-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Close-->
                    <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                        <span class="svg-icon svg-icon-2hx svg-icon-light"><!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs012.svg-->
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr019.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="white"/>
                        <path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="white"/>
                        </svg></span>
                        <!--end::Svg Icon--></span>
                    </button>
                    <!--end::Close-->
                </div>
                <!--end::Alert-->
                @endif
                <table id="kt_datatable_dom_positioning" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800 px-7">
                            <th>#</th>
                            <th class="text-justify">Nom</th>
                            <th class="text-justify">Permissions</th>
                            <th class="text-justify">Rôle</th>
                            <th class="text-justify">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="text-justify">
                                <span class="badge badge-primary">{{ $permission->name }}</span>
                            </td>
                            <td class="text-justify">
                                {{ $permission->description }}
                            </td>
                            <td class="text-justify">
                                @foreach ($permission->roles as $role)
                                <span class="badge badge-secondary">{{ $role->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-icon btn-active-color-primary btn-sm" onclick="deleteline(event)" data-bs-toggle="tooltip" title="Supprimer la permission">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen027.svg-->
                                        <span class="svg-icon svg-icon-muted svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="#f1416c"/>
                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="#f1416c"/>
                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="#f1416c"/>
                                        </svg></span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->
@endsection
