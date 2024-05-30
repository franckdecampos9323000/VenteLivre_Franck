@extends('main')

@section('title', 'Détail sur le role')
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
                        :link="''"
                    />
                    <!--begin::Button-->
                    <x-edit-button
                        :link="''"
                        :name="'le role'"
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
                            <div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Show Role</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

    </div>

</div>

</div>


<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Name:</strong>

        {{ $role->name }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Permissions:</strong>

        @if(!empty($rolePermissions))

            @foreach($rolePermissions as $v)

                <label class="label label-success">{{ $v->name }},</label>

            @endforeach

        @endif

    </div>

</div>

</div>
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
