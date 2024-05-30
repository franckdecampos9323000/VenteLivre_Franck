@extends('main')

@section('title', 'Modifier un utilisateur')
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
                    <x-title :pageTitle="'Modifier un utilisateur'" />
                    <!--begin::Page title-->
                    <!--begin::Breadcrumb-->
                    <x-breadcrumb
                        :link1="route('home')"
                        :link2="route('admin.users.index')"
                        :text2="'Utilisateurs'"
                        :link3="route('admin.users.create')"
                        :text3="'Modifier un utilisateur '"
                        :link4="''"
                        :link5="''"
                    />
                    <!--End::Breadcrumb->
                     <!--begin::Button-->
                    <x-back-button :link="route('admin.users.index')" />
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
                <!--begin::Basic info-->
                <div class="card mb-5 mb-xl-10">
                @foreach ($errors->all() as $error)
                    <!--begin::Error-->
                    <!--begin::Alert-->
                    <div id="msgdanger" class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
                        <!--begin::Icon-->
                        <span class="svg-icon-light svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen007.svg-->
                        <span class="svg-icon svg-icon-light svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="white"/>
                        <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="white"/>
                        </svg></span>
                        <!--end::Svg Icon--></span>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                            <!--begin::Title-->
                            <h4 class="mb-2 light">Erreur!!</h4>
                            <!--end::Title-->

                            <!--begin::Content-->
                            <span>{{ $error }}</span>
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
                    <!--end::Error-->
                    @endforeach
                    <!--begin::Content-->
                    <div class="collapse show">
                        <!--begin::Form-->
                        <form class="form" action="{{ route('admin.users.update', ['user' => $user->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <!--begin::Card body-->
                            <div class="card-body border-top p-9">
                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::title-->
                                    <div class="">
                                        <h1><span class="required">Informations</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Informations sur l'utilisateur?"></i></h1>
                                    </div>
                                    <!--end::title-->
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Photo de profil</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Une image est requise"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline @error('photo_profil') is-invalid @enderror" data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset($user->getFirstMediaUrl('photo_profils')) }})"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Label-->
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow " data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Choisir une image">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="photo_profil" accept="image/*" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Cancel-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Retour">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Supprimer">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        @error('photo_profil')
                                            <span class="invalid-feedback" role="alert">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Email</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Adresse email"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="email" name="email" class="form-control form-control-lg form-control @error('email') is-invalid @enderror" placeholder="{{ ('Email') }}" value="{{ old('email', $user->email ?? '') }}" />
                                    </div>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Nom d'utilsateur</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Nom d'utilisateur"></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                        <input type="text" name="username" class="form-control form-control-lg form-control @error('username') is-invalid @enderror" placeholder="{{ ('Nom d\'utilisateur') }}" value="{{ old('username', $user->username ?? '') }}" />
                                    </div>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">{{$message}}</span>
                                    @enderror
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->

                                <div class="row mb-6">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                        <span class="required">Rôle (s)</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Le(s) rôle(s) des utilisateurs"></i>
                                    </label>
                                    <!--end::Label-->
                                    <div class="col-lg-8 fv-row">
                                        <!--begin::Solid input group style-->
                                        <div class="input-group input-group flex-nowrap">
                                            <span class="input-group-text"><i class="fa fa-shield fs-2"></i></span>
                                            <div class="overflow-hidden flex-grow-1">
                                                <select name="roles[]" class="form-select form-select @error('roles') is-invalid @enderror" multiple="multiple" data-allow-clear="true" data-placeholder="Choisir les rôles" data-control="select2">
                                                    @foreach ($roles as $id => $name)
                                                        <option value="{{ $id }}" {{ in_array($id, old('roles', $user->roles->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Solid input group style-->
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-active-light-primary me-2">Annuler</a>
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                                <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
</div>
<!--end:::Main-->

@endsection
