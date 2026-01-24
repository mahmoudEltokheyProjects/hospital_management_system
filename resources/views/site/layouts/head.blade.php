<!-- Title : Multi-Language : Get title value from 'lang/ar or en/Frontend/frontend.invoice_system' -->
<title> {{ __('Frontend/frontend.invoice_system') }} </title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Common CSS -->
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
{{-- +++++++++++++++++++++++ my custom css  +++++++++++++++++++++++ --}}
<link href="{{URL::asset('assets/my_custom_css/language-switcher.css')}}" rel="stylesheet">

<!--  +++++++++++++++++++++++ English (LTR) CSS +++++++++++++++++++++++ -->
@if(App::isLocale('en'))
    <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/sidemenu.css')}}" rel="stylesheet" >
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style-dark.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet">
<!-- +++++++++++++++++++++++ Arabic (RTL) CSS +++++++++++++++++++++++ -->
@else
    <link href="{{URL::asset('assets/css-rtl/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}">
    <link href="{{URL::asset('assets/css-rtl/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet">
@endif

{{-- ++++++++++++++++ Custom Css Files ++++++++++++++++ --}}

{{-- @yield('css') --}}
