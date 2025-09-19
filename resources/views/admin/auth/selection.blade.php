<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Hospital Management System" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>برنامج هوستبيتال سوفت لادارة المستشفيات</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

    <style>
        .selection-page
        {
            height:90vh;
            display: flex;
            align-items:center;
            justify-content:center;
            background-image: url('{{ asset('assets/img/selection_page/selection_bk.png')}}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        .form-inline {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; 
        }
        .selection-page .selection-page-content a
        {
            text-decoration: none;
        }
    </style>
    
</head>

<body>
    <div class="wrapper">
        <section class="selection-page">
            <div class="container">
                <div class="selection-page-content">
                    <div style="border-radius: 15px;" class="col-lg-8 col-md-8 bg-white">
                        <div class="login-fancy pb-40 clearfix">
                            <h2 style="font-family: 'Cairo', sans-serif" class="mb-30">حدد طريقة الدخول</h2>
                            <div class="form-inline">
                                {{-- ++++++++++++++ patient ++++++++++++++ --}}
                                <a class="btn btn-default col-lg-3" title="مريض" href="{{route('dashboard.login.show','patient')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/img/selection_page/patient.png')}}">
                                </a>
                                {{-- ++++++++++++++ doctor ++++++++++++++ --}}
                                <a class="btn btn-default col-lg-3" title="دكتور" href="{{route('dashboard.login.show','doctor')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/img/selection_page/doctor.png')}}">
                                </a>
                                {{-- ++++++++++++++ admin ++++++++++++++ --}}
                                <a class="btn btn-default col-lg-3" title="ادمن" href="{{route('dashboard.login.show','admin')}}">
                                    <img alt="user-img" width="100px;" src="{{URL::asset('assets/img/selection_page/admin.png')}}">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================
 login-->

    </div>
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    <!-- plugin_path -->
    <script>
        var plugin_path = 'js/';

    </script>


    <!-- toastr -->
    @yield('js')
    <!-- custom -->
    <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
