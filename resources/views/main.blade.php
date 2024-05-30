<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<head>
    <!-- <base href="metronic/" /> -->
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <!-- <meta property="og:url" content="https://keenthemes.com/metronic" /> -->
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
    <link rel="shortcut icon" href="{{ asset('metronic/dist/assets/media/logos/favicon.png') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> -->
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('metronic/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/dist/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->

    <!-- Charts for dashboard-->
    <link href="{{ asset('metronic/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--Charts for dashboard-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('metronic/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Show details)-->
    <link href="{{ asset('other/show.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Show details)-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header d-flex flex-column flex-stack">
                <!--begin::Header main-->
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="app-header-logo d-flex align-items-center ps-lg-12" id="kt_app_header_logo">
                        <!--begin::Sidebar toggle-->
                        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-color-primary w-30px h-30px ms-n2 me-4 d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
                            <!--begin::Svg Icon | path: icons/duotune/text/txt012.svg-->
                            <span class="svg-icon svg-icon-6">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 0)" fill="currentColor" />
                                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 6)" fill="currentColor" />
                                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 12)" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Sidebar toggle-->
                        <!--begin::Sidebar mobile toggle-->
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px ms-3 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                    <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Sidebar mobile toggle-->
                        <!--begin::Logo-->
                        <a href="/" class="app-sidebar-logo">
                            <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/logo.png') }}" class="h-50px theme-light-show" />
                            <img alt="Logo" src="{{ asset('metronic/dist/assets/media/logos/logo.png') }}" class="h-50px theme-dark-show" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--Navbar  -->
                    @include('partials.navbar')

                </div>
                <!--end::Header main-->
                <!--begin::Separator-->
                <div class="app-header-separator border-dark"></div>
                <!--end::Separator-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                @include('partials.sidebar')

                <!-- Main Content -->
                @yield('content')

                @include('partials.footer')

                <!-- End Main Content -->

                @include('partials.aside')

            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->

    <!--  -->
    <!-- @include('partials.drawers') -->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    @include('partials.modal')

    <!-- begin:All status -->
    @include('partials.allstatus')
    <!-- end:All status -->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "metronic/dist/assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('metronic/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!-- Charts for Dashboard -->
    <script src="{{ asset('metronic/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <!-- End charts for dashboard -->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('metronic/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('metronic/dist/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('metronic/dist/assets/js/custom/utilities/modals/users-search.js') }}"></script>

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('metronic/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('metronic/dist/assets/js/custom/apps/calendar/calendar.js') }}"></script>
    <script src="{{asset('metronic/dist/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{asset('metronic/dist/assets/js/custom/widgets.js') }}"></script>
    <script src="{{asset('metronic/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{asset('metronic/dist/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{asset('metronic/dist/assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{asset('metronic/dist/assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->

    <!-- DatatablesJavascript -->
    <script src="{{asset('metronic/dist/scripts/dataTables.js') }}"></script>
    <!-- End DatatablesJavascript -->

    <!-- DataPicker JavaScript -->
    <script src="{{asset('metronic/dist/scripts/datepicker.js') }}"></script>
    <!-- End DataPicker JavaScript -->

    <!-- Content-type -->
    <script src="{{asset('metronic/dist/scripts/content-type.js') }}"></script>
    <!-- end:JContent type -->

    <!-- begin:Rich text -->
    <script src="{{ asset('metronic/dist/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script src="{{asset('metronic/dist/scripts/tinymce.js') }}"></script>
    <!-- end:Rich text -->

    <!-- begin:Select2 add member -->
    <script src="{{asset('metronic/dist/scripts/select2member.js') }}"></script>
    <!-- end:Select2 add member -->

    <!-- begin:Select all role -->
    <script src="{{ asset('other/role.js') }}"></script>
    <!-- end:Select all role -->

    <!-- begin:SweetAlert -->
    <script src="{{asset('metronic/dist/scripts/sweetalert.js') }}"></script>
    <!-- end:SweetAlert -->

    <!-- begin:FormRepeater -->
    <script src="{{ asset('metronic/dist/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{asset('metronic/dist/scripts/formrepeater.js') }}"></script>
    <!-- end:FormRepeater -->

    <!-- begin:Message time out -->
    <script src="{{asset('metronic/dist/scripts/timeout.js') }}"></script>
    <!-- end:Message time out -->

    <!-- begin:Message french format date -->
    <script src="{{asset('metronic/dist/scripts/flatpckirs.js') }}"></script>
    <!-- end:Message french formart date -->

    <!-- begin:charts -->
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <!-- end:charts-->

    <!-- begin:checkbox all permission -->
    <!-- <script src="{{ asset('metronic/dist/scripts/checkbox.js') }}"></script> -->
    <!-- end:checkbox all permission-->

    <!-- Inclure la bibliothèque TweenMax (gsap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
