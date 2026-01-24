
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Hospital Management System" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>برنامج هوسبيتال سوفت لادارة المستشفيات</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
    {{-- +++++++++++++++ start : css +++++++++++++++ --}}
    <style>
        body
        {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        /* full page section with no gaps */
        .selection-page {
            position: relative;
            min-height: 100vh; /* full viewport */
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        /* background image fills screen */
        .selection-page .image_bk {
            position: absolute;
            inset: 0;
            background: url('{{ asset('assets/img/selection_page/bg/selection_page_bk.jpg') }}')
                        center center / cover no-repeat;
            z-index: 0;
        }
        /* dark overlay */
        .selection-page .image_bk .overlay_bk {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(1px);
            z-index: 1;
        }

        /* content box */
        .selection-page .selection-page-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 900px;
            display: flex;
            justify-content: center;
            padding: 0 15px;
        }

        .login-fancy {
            padding: 40px;
            text-align: center;
        }

        .login-fancy h2 {
            font-family: 'Cairo', sans-serif;
            margin-bottom: 45px;
            color:#fff;
            font-size:40px;
        }

        /* buttons container */
        .form-inline {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px; /* spacing between icons */
        }

        /* icon button style */
        .selection-page .selection-page-content a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: darkslategray;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all .3s ease;
        }

        .selection-page .selection-page-content a:hover {
            background: #1E3B3B; /* primary color on hover */
            transform: translateY(-12px);
        }

        .selection-page .selection-page-content a img {
            max-width: 60%;
            height: auto;
            transition: filter .3s ease;
        }

    </style>
    {{-- +++++++++++++++ end : css +++++++++++++++ --}}

</head>

<body>
    <div class="wrapper">
        <section class="selection-page">
            <div class="image_bk">
                <div class="overlay_bk"></div>
            </div>

            <div class="selection-page-content">
                <div class="col-lg-8 col-md-10 bg-white rounded-3 shadow">
                    <div class="login-fancy clearfix">
                        <h2>حدد طريقة الدخول</h2>
                        <div class="form-inline">
                            {{-- ///////////// 1- PATIENT ///////////// --}}
                            <a title="مريض" href="{{ route('dashboard.login.patient.show') }}">
                                <img alt="patient" src="{{ asset('assets/img/selection_page/icons/patient_icon.png') }}">
                            </a>
                            {{-- ///////////// 2- DOCTOR ///////////// --}}
                            <a title="دكتور" href="{{ route('dashboard.login.doctor.show') }}">
                                <img alt="doctor" src="{{ asset('assets/img/selection_page/icons/doctor_icon.png') }}">
                            </a>
                            {{-- ///////////// 3- ADMIN ///////////// --}}
                            <a title="ادمن" href="{{ route('dashboard.login.admin.show') }}">
                                <img alt="admin" src="{{ asset('assets/img/selection_page/icons/admin_login.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
