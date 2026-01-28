<!-- main-sidebar -->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
            <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="">
                        <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/user.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name ?? 'User'}}</h4>
                        <span class="mb-0 text-muted">{{ Auth::user()->email ?? 'User'}}</span>
                    </div>
                </div>
            </div>
            <ul class="side-menu">
                    <li class="side-item side-item-category">
                        {{ __('Frontend/frontend.sidebar.sidebar_title') }}
                    </li>   
                    {{-- +++++++++++++++++++++++++ languages ++++++++++++++++++++++++ --}}
                    {{-- ================ Language Settings ================ --}}
                    <li class="slide">
                        <a class="side-menu__item" href="{{ url('/' . $page='home') }}">
                            <i class="fa fa-home fa-lg ml-2" style="color:#5b6e88;"></i>
                            <span class="side-menu__label">Language Settings</span>
                        </a>
                    </li>



                    <li class="slide">
                        {{-- ++++++++++++++ الرئيسية +++++++++++++++++ --}}
                        <a class="side-menu__item" href="{{ url('/' . $page='home') }}">
                            <i class="fa fa-home fa-lg ml-2" style="color:#5b6e88;"></i>
                            <span class="side-menu__label">
                                {{-- Get From "lang/ar/Frontend/" or "lang/en/Frontend/" --}}
                                {{-- {{ __('Frontend/frontend.sidebar.sidebar_sec1') }} --}}
                            </span>
                        </a>
                    </li>
                    {{-- @can('قائمة الفواتير') --}}
                    <li class="slide">
                        {{-- ++++++++++++++ الفواتير +++++++++++++++++ --}}
                        <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <i class="fa fa-file fa-lg ml-2" style="color:#5b6e88;"></i>
                            <span class="side-menu__label">
                                {{ __('Frontend/frontend.sidebar.sidebar_sec2') }}
                            </span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            {{-- @can('قائمة الفواتير') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='invoices') }}">
                                 {{-- Get From "lang/ar/Frontend/" or "lang/en/Frontend/" --}}
                                 {{ __('Frontend/frontend.sidebar.sidebar_sec2_Invoices.invoices_list') }}
                                </a>
                            </li>
                            {{-- @endcan --}}
                            {{-- @can('الفواتير المدفوعة') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='Invoice_Paid') }}">
                                    {{-- Get From "lang/ar/Frontend/" or "lang/en/Frontend/" --}}
                                    {{ __('Frontend/frontend.sidebar.sidebar_sec2_Invoices.paid_invoices') }}
                                </a>
                            </li>
                            {{-- @endcan --}}
                            {{-- @can('الفواتير الغير مدفوعة') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='unpaid_invoice') }}">
                                    {{-- Get From "lang/ar/Frontend/" or "lang/en/Frontend/" --}}
                                    {{ __('Frontend/frontend.sidebar.sidebar_sec2_Invoices.unpaid_invoices') }}
                                </a>
                            </li>
                            {{-- @endcan --}}
                            {{-- @can('الفواتير المدفوعة جزئيا') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='partial_paid_invoice') }}">
                                    {{-- Get From "lang/ar/Frontend/" or "lang/en/Frontend/" --}}
                                    {{ __('Frontend/frontend.sidebar.sidebar_sec2_Invoices.partial_paid_invoices') }}
                                </a>
                            </li>
                            {{-- @endcan --}}
                            {{-- @can('ارشيف الفواتير') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='Archive') }}">ارشيف الفواتير</a>
                            </li>
                            {{-- @endcan --}}
                        </ul>
                    </li>
                    {{-- @endcan --}}
                    {{-- @can('التقارير') --}}
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <i class="fa fa-print fa-lg ml-2" style="color:#5b6e88;"></i>
                            <span class="side-menu__label">
                                {{ __('Frontend/frontend.sidebar.sidebar_sec3') }}
                            </span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            {{-- @can('تقرير الفواتير') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='invoices_report') }}">تقارير الفواتير</a>
                            </li>
                            {{-- @endcan --}}
                            {{-- @can('تقرير العملاء') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='customers_report') }}">تقارير العملاء</a>
                            </li>
                            {{-- @endcan --}}
                        </ul>
                    </li>
                    {{-- @endcan --}}
                    {{-- @can('المستخدمين') --}}
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <i class="fa fa-users fa-lg ml-2" style="color:#5b6e88;"></i>
                            <span class="side-menu__label">
                                {{ __('Frontend/frontend.sidebar.sidebar_sec4') }}
                            </span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            {{-- @can('قائمة المستخدمين') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='users') }}">قائمة المستخدمين</a>
                            </li>
                            {{-- @endcan --}}
                            {{-- @can('صلاحيات المستخدمين') --}}
                            <li>
                                <a class="slide-item" href="{{ url('/' . $page='roles') }}">صلاحيات المستخدمين</a>
                            </li>
                            {{-- @endcan --}}
                        </ul>
                    </li>
                    {{-- @endcan --}}
                    {{-- @can('الاعدادات') --}}
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
                            <i class="fa fa-cog fa-lg ml-2" style="color:#5b6e88;"></i>
                            <span class="side-menu__label">
                                {{ __('Frontend/frontend.sidebar.sidebar_sec5') }}
                            </span>
                            <i class="angle fe fe-chevron-down"></i>
                        </a>
                        <ul class="slide-menu">
                            {{-- @can('الاقسام') --}}
                            <li> <a class="slide-item" href="{{ url('/' . $page='sections') }}">الاقسام</a> </li>
                            {{-- @endcan --}}
                            {{-- @can('المنتجات') --}}
                            <li> <a class="slide-item" href="{{ url('/' . $page='products') }}">المنتجات</a> </li>
                            {{-- @endcan --}}
                        </ul>
                    </li>
                    {{-- @endcan --}}
            </ul>
        </div>
    </aside>
<!-- main-sidebar -->
