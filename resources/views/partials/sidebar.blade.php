<!--begin::Wrapper-->
<div class="" id="">
    <!--begin::Sidebar-->
    <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
        <!--begin::Wrapper-->
        <div id="kt_app_sidebar_wrapper" class="app-sidebar-wrapper hover-scroll-y my-5 my-lg-2" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_sidebar_wrapper" data-kt-scroll-offset="5px">
            <!--begin::Sidebar menu-->
            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary px-6 mb-5">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <a class="menu-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}" class="btn btn-icon btn-light pulse pulse-primary">
                        <span class="menu-icon">
                            <i class="fa fa-tachometer fs-2" aria-hidden="true"></i>
                            <span class="pulse-ring border-1"></span>
                        </span>
                        <span class="menu-title">Tableau de board</span>
                    </a>
                </div>

                @if(auth()->user()->canAny(['annonce-list', 'annonce-create', 'annonce-edit', 'annonce-delete']))
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa fa-graduation-cap fs-2" aria-hidden="true"></i>
                        </span>
                        <span class="menu-title">Annonces</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion @if(Request::is('admin/annonces*') || Request::is('admin/chapters*') || Request::is('admin/sequences*')) show @endif">
                        @if(auth()->user()->can('annonce-create'))
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/annonces/create') ? 'active' : '' }}" href="{{ route('admin.annonces.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ajouter une annonce</span>
                            </a>
                        </div>
                        @endif
                        @if(auth()->user()->can('annonce-list'))
                        <div class="menu-item">
                            <a class="menu-link {{ Request::is('admin/annonces') ? 'active' : '' }}" href="{{ route('admin.annonces.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Liste des annonces</span>
                            </a>
                        </div>
                        @endif
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @endif

                

                @if(auth()->user()->canAny(['message-list', 'message-create', 'message-edit', 'message-delete']))
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa fa-bell fs-2" aria-hidden="true"></i>
                        </span>
                        <span class="menu-title">Messages</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion @if(Request::is('admin/messages*')) show @endif">
                        @if(auth()->user()->can('message-create'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/messages/create') ? 'active' : '' }}" href="{{ route('admin.messages.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Envoyer un message</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                        @if(auth()->user()->can('message-list'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/messages') ? 'active' : '' }}" href="{{ route('admin.messages.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Liste des messages</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @endif

                @if(auth()->user()->canAny(['role-list', 'role-create', 'role-edit', 'role-delete']))
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa fa-shield fs-2" aria-hidden="true"></i>
                        </span>
                        <span class="menu-title">Rôles</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion @if(Request::is('admin/roles*')) show @endif">
                        @if(auth()->user()->can('role-create'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/roles/create') ? 'active' : '' }}" href="{{ route('admin.roles.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ajouter un rôle</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                        @if(auth()->user()->can('role-list'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/roles') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Liste des rôles</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @endif

                @if(auth()->user()->canAny(['permission-list']))
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa fa-lock fs-2" aria-hidden="true"></i>
                        </span>
                        <span class="menu-title">Permissions</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion @if(Request::is('admin/permissions*')) show @endif">
                        @if(auth()->user()->can('permission-list'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/permissions') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Liste des permissions</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @endif

                @if(auth()->user()->canAny(['user-list', 'user-create', 'user-edit', 'user-delete']))
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa fa-user fs-2" aria-hidden="true"></i>
                        </span>
                        <span class="menu-title">Utilisateurs</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion @if(Request::is('admin/users*')) show @endif">
                        @if(auth()->user()->can('user-create'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/users/create') ? 'active' : '' }}" href="{{ route('admin.users.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Ajouter un utilisateur</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                        @if(auth()->user()->can('user-list'))
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Liste des utilisateurs</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        @endif
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @endif

                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <!--begin::Bullet-->
                        <span class="menu-icon">
                        <i class="fa fa-sign-out fs-2" aria-hidden="true"></i>
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title">Déconnexion</span>
                        <!--end::Title-->
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    </form>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->

                <!--begin::Menu Item-->
                <div class="menu-item">
                    <!--begin::Menu link-->
                    <a class="menu-link" href="#" target="_blank">
                        <!--begin::Bullet-->
                        <span class="menu-icon">
                        <i class="bi bi-back fs-2"></i>
                        </span>
                        <!--end::Bullet-->
                        <!--begin::Title-->
                        <span class="menu-title text-gray-700 fw-bold fs-6">
                        <button class="btn btn-primary">Voir la section utilisateur</button>
                        </span>
                        <!--end::Title-->
                    </a>
                    <!--end::Menu link-->
                </div>
                <!--end::Menu Item-->
            </div>
            <!--end::Sidebar menu-->
        </div><!--end::Wrapper-->
    </div>
    <!--end::Sidebar-->
</div>
