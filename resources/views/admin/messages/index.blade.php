@extends('main')

@section('title', 'Liste des messages')
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
                <x-title
                    :pageTitle="'Liste des messages'"
                />
                    <!--begin::Page title-->
                    <!--begin::Breadcrumb-->
                    <x-breadcrumb
                    :link1="route('home')"
                    :link2="route('admin.messages.index')"
                    :text2="'Messages'"
                    :link3="route('admin.messages.index')"
                    :text3="'Liste des messages'"
                    :link4="''"
                    :link5="''"
                />
                    <!--End::Breadcrumb-->
                    <!--begin::Button-->
                <x-add-button
                    :link="route('admin.messages.create')"
                    :name="'un message'"
                />
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
                    :icon1="'fa fa-desktop fs-2 me-2'"
                    :texticon1="'Nombre de messages'"
                    :text1="$totalMessages"
                    :icon2="'fas fa-check-circle text-success fs-2 me-2'"
                    :texticon2="'Message Validé'"
                    :text2="$activeCount"
                    :icon3="'fas fa-times-circle fs-2 me-2'"
                    :texticon3="'Message non validé'"
                    :text3="$inactiveCount"
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
                            <th>Titre</th>
                            <th>Contenu</th>
                            <th>Utilisateurs</th>
                            <th>Date d'envoi</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a class="text-dark fw-bold text-hover-primary mb-1 fs-6" href="#">{{ $message->title }}</a>  </td>
                            <td> {!! html_entity_decode($message->content) !!} </td>
                            <td>  @if ($message->users->isNotEmpty())
                                    @foreach ($message->users as $user)
                                        <p>{{ $user->username }}</p>
                                    @endforeach
                                @else
                                    <p>Aucun destinataire</p>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $message->senddate)->format('d-m-Y') }}</td>
                            <td>
                                <form action="{{ route('messages.toggleStatus', $message->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <!--begin::Switch-->
                                    <label for="status_{{ $message->id }}" class="form-check form-switch form-check-custom form-check">
                                        <!--begin::Input-->
                                        <input class="form-check-input w-30px h-20px" type="checkbox"  name="status" {{ $message->status ? 'checked' : '' }} onchange="this.form.submit()"/>
                                        <!--end::Input-->
                                        @if($message->status == true)
                                        <span class="badge badge-light-success fs-7 fw-bold">Activé</span>
                                        @else
                                        <span class="badge badge-light-danger fs-7 fw-bold">Désactivé</span>
                                        @endif
                                        <!--end::Label-->
                                        <!-- <span class="form-check-label text-muted fs-6">{{ $message->status ? 'Activé' : 'Désactivé' }}</span> -->
                                        <!--end::Label-->
                                    </label>
                                    <!--end::Switch-->
                                </form>
                            </td>
                            <td>
                                <!-- <a href="{{ route('admin.messages.show', $message) }}" class="btn btn-icon btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" title="Voir plus de détail">
                                    <span class="svg-icon svg-icon-muted svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="#3E97FF"/>
                                    <path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="#3E97FF"/>
                                    </svg></span>
                                </a> -->
                                <!-- <a href="{{ route('admin.messages.edit', $message) }}" class="btn btn-icon btn-active-color-primary btn-sm me-1" data-bs-toggle="tooltip" title="Modifier la message">
                                    <span class="svg-icon svg-icon-muted svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" >
                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="#3E97FF"/>
                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="#3E97FF"/>
                                    </svg></span>
                                </a>-->
                                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-icon btn-active-color-primary btn-sm" onclick="deleteline(event)" data-bs-toggle="tooltip" title="Supprimer la message">
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
