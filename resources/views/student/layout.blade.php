<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>{!! $title ?? '' !!} | {{__('text.app_name')}}</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fonts.googleapis.com.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />
    <link rel="stylesheet" href="{{asset('assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}"/>
    <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" class="ace-main-stylesheet" id="main-ace-style"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('libs')}}/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('libs')}}/datatables.net-bs4/css/responsive.dataTables.min.css">


    <STYLE>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .input-group {
            position: relative;
            display: flex;
            flex-wrap: nowrap;
            align-items: stretch;
            width: 100%;
        }
        .dt-button{
            background-image: none!important;
            border: 1px solid #FFF;
            border-radius: 0;
            padding: 5px 20px;
            border-radius: 5px;
            box-shadow: none!important;
            -webkit-transition: background-color .15s,border-color .15s,opacity .15s;
            -o-transition: background-color .15s,border-color .15s,opacity .15s;
            transition: background-color .15s,border-color .15s,opacity .15s;
            vertical-align: middle;
            margin: 0;
            position: relative;
        }
        table{padding: 0px !important}
        table th, table td{
            padding: 10px;
        }
        .table td{
            border-bottom: 1px  solid  #f1f1f1 !important;
        }
        .nav li {
            display: block;
            width: 100% !important;
        }
        .dropdown-toggle:after {
            display: none;
        }
    </STYLE>
    @php
        $bg1 = \App\Http\Controllers\HomeController::getColor('background_color_1');
        $bg2 = \App\Http\Controllers\HomeController::getColor('background_color_2');
        $bg3 = \App\Http\Controllers\HomeController::getColor('background_color_3');
    @endphp
</head>

<body class="no-skin">
<div class="pre-loader">
    <div class="sk-fading-circle">
        <div class="sk-circle1 sk-circle"></div>
        <div class="sk-circle2 sk-circle"></div>
        <div class="sk-circle3 sk-circle"></div>
        <div class="sk-circle4 sk-circle"></div>
        <div class="sk-circle5 sk-circle"></div>
        <div class="sk-circle6 sk-circle"></div>
        <div class="sk-circle7 sk-circle"></div>
        <div class="sk-circle8 sk-circle"></div>
        <div class="sk-circle9 sk-circle"></div>
        <div class="sk-circle10 sk-circle"></div>
        <div class="sk-circle11 sk-circle"></div>
        <div class="sk-circle12 sk-circle"></div>
    </div>
</div>

<div id="navbar" class="navbar navbar-default  ace-save-state" style="background-color: {{$bg1}};">
    <div class="navbar-container w-100 ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left display" id="menu-toggler"
                data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a class="navbar-brand">
                <small style="color: white;">
                    <i class="fa fa-leaf"></i>
                    {{config('app.name')}}
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav d-flex flex-nowrap" style="">
                <li class="grenn dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle text-white font-weight-bold text-capitalize" href="#" id="navbarDropdownMenuLink" style="background-color: {{$bg2}};">
                        {{ Config::get('languages')[Session::has('appLocale') ? Session::get('appLocale') : App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != Session::get('appLocale'))
                                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                        @endif
                    @endforeach
                    </div>
                </li>
                <li class="grenn dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle text-white font-weight-bold" id="bg_primary_1" style="background-color: {{$bg2}};">
                        Batch : {{ \App\Models\Batch::find(Session::get('mode', \App\Helpers\Helpers::instance()->getCurrentAccademicYear()))->name ?? ''}}
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu">
                        @foreach(\App\Models\Batch::orderBy('name')->get() as $batch)
                            <li>
                                <a href="{{ route('mode',$batch->id) }}">{{$batch->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle" id="bg_primary_2" style="background-color: {{$bg2}};">
                        <img class="nav-user-photo" src="{{asset('assets/images/avatars/user.jpg')}}"
                             alt="Jason's Photo"/>
                        <span>
						<small>Welcome</small>
                         {{auth('student')->user()->name}}
						</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            @if(auth('student')->user() == null)
                                @if(auth('student')->user()->isHod || auth('student')->user()->isTeacher)
                                    <a href="{{route('user.home')}}"><i
                                            class="ace-icon fa fa-user"></i>Profile</a>
                                @elseif(auth('student')->user()->isAdmin)
                                    <a href="{{route('admin.home')}}"><i
                                            class="ace-icon fa fa-user"></i>Profile</a>
                                @endif
                            @else
                                <a href="{{route('student.home')}}"><i
                                        class="ace-icon fa fa-user"></i>Profile</a>
                            @endif
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>
<div class="main-container ace-save-state" id="main-container">

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try {
                ace.settings.loadState('sidebar')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts" style="background-color: {{$bg3}}; color: {{$bg1}};">
            <div>
                <h5>{{\App\Models\Batch::find(\App\Helpers\Helpers::instance()->getCurrentAccademicYear())->name}}</h5>
            </div>
        </div><!-- /.sidebar-shortcuts -->
        <ul class="nav nav-list text-capitalize">

            <li>
                <a href="{{route('student.home')}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-dashboard"></i>
                    <span class="menu-text text-capitalize">{{__('text.word_dashboard')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="{{route('student.programs.index')}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-filter"></i>
                    <span class="menu-text text-capitalize">{{__('text.all_our_programs')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="{{route('student.payment.data')}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-money"></i>
                    <span class="menu-text text-capitalize">{{__('text.payment_data')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="{{route('student.application.start', 0)}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-asterisk"></i>
                    <span class="menu-text text-capitalize">{{__('text.start_application')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="{{route('student.application.submit')}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-bank"></i>
                    <span class="menu-text text-capitalize">{{__('text.submit_form')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="{{route('student.application.form.download')}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-download"></i>
                    <span class="menu-text text-capitalize">{{__('text.download_form')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

            <li>
                <a href="{{route('student.application.admission_letter.download')}}">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-certificate"></i>
                    <span class="menu-text text-capitalize">{{__('text.admission_letter')}}</span>
                </a>
                <b class="arrow"></b>
            </li>

           <li>
                <a href="#" class="dropdown-toggle text-capitalize">
                    <i  style="color: {{$bg1}};" class="menu-icon fa fa-book"></i>
                    <span class="menu-text">{{__('text.accounts_and_users')}}</span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="{{route('logout')}}" class="text-capitalize">
                            <i  style="color: {{$bg1}};" class="menu-icon fa fa-caret-right"></i>
                            {{__('text.word_logout')}}
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon f ace-save-state"></i>
        </div>
    </div>
    <div class="main-content">
        <div class="main-content-inner">

            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Student Dashboard</li>
                    <li class="active"> Full Name: <b style="color: #e30000">{{auth('student')->user()->name}}</b></li>
                    <li class="active text-capitalize"> {{__('text.word_matricule')}}: <b style="color: #e30000">{{auth('student')->user()->matric}}</b></li>

                </ul><!-- /.breadcrumb -->
            </div>

            <div class=" ">
                <div>
                    <div id="user-profile-1" class="user-profile row">
                        <div style="width:100%; padding-block:1.5rem; font-size:2rem; font-weight:600; padding-inline:2rem;" class="shadow bg-light mx-1">
                            <span class="d-block w-100 text-danger text-center">PLEASE REMEMBER TO SUBMIT YOUR FORM AT THE END OF THIS PROCESS. PRINT OUT YOUR FORM AND DEPOSIT THEM AT THE SECRETARIAT <span class="text-dark">NEED HELP? CALL - </span>:<span class="text-primary"> 672495853/⁠687672289</span></span>
                            {{-- <span class="d-block w-100 text-danger text-center"><span class="text-primary">MOMO NUMBER -</span><span class="text-secondary"> NUMÉRO MOMO</span> :6 71 98 92 92 | MOMO NAME - <span class="text-secondary">NON SUR MOMO</span> :<span class="text-dark">EMELIE BERINYUY ASHUMBENG</span> | UNDERGRADUATE APPLICATION FEE - :<span class="text-primary">5,000 XAF</span> BACHELOR APPLICATION FEE - :<span class="text-primary">10,000 XAF </span> MASTERS APPLICATION FEE - :<span class="text-primary">20,000 XAF </span></span> --}}
                        </div>
                    </div>
                </div>
                <div class="mx-5 mb-5 mt-3">
                    @if(Session::has('success'))
                        <div class="alert alert-success fade in">
                            <strong>Success!</strong> {{Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert alert-danger fade in">
                            <strong>Error!</strong> {{Session::get('error')}}
                        </div>
                    @endif


                    <div class="mb-4 mx-3">
                        <h4 class="font-weight-bold">{{ $title ?? '' }}</h4>
                    </div>
                    @yield('section')
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="footer-inner">
        <div class="footer-content" style="background:#fff">
            <span class="bigger-120">
               &copy; {{__('text.copyright')}}
            </span>
            &nbsp; &nbsp;
            
        </div>
    </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
    <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div>
<script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/toastr/toastr.min.js') }}"></script>
<script src="{{asset('assets/js/ace.min.js')}}"></script>

<script src="{{ asset('libs')}}/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('libs')}}/datatables.net-bs4/js/dataTables.responsive.min.js"></script>


<script>
    $(function () {
        $('.table , .adv-table table').DataTable({
            responsive: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel',
                {
                    text: 'Download PDF',
                    extend: 'pdfHtml5',
                    message: '',
                    orientation: 'portrait',
                    exportOptions: {
                        columns: ':visible'
                    },
                    customize: function (doc) {
                        doc.pageMargins = [10,10,10,10];
                        doc.defaultStyle.fontSize = 7;
                        doc.styles.tableHeader.fontSize = 7;
                        doc.styles.title.fontSize = 9;
                        doc.content[0].text = doc.content[0].text.trim();

                        doc['footer']=(function(page, pages) {
                            return {
                                columns: [
                                    '{{ $title ?? '' }}',
                                    {
                                        // This is the right column
                                        alignment: 'right',
                                        text: ['page ', { text: page.toString() },  ' of ', { text: pages.toString() }]
                                    }
                                ],
                                margin: [10, 0]
                            }
                        });
                        // Styling the table: create style object
                        var objLayout = {};
                        // Horizontal line thickness
                        objLayout['hLineWidth'] = function(i) { return .5; };
                        // Vertikal line thickness
                        objLayout['vLineWidth'] = function(i) { return .5; };
                        // Horizontal line color
                        objLayout['hLineColor'] = function(i) { return '#aaa'; };
                        // Vertical line color
                        objLayout['vLineColor'] = function(i) { return '#aaa'; };
                        // Left padding of the cell
                        objLayout['paddingLeft'] = function(i) { return 4; };
                        // Right padding of the cell
                        objLayout['paddingRight'] = function(i) { return 4; };
                        // Inject the object in the document
                        doc.content[1].layout = objLayout;
                    }
                }

            ],
            info:     false,
            searching: true,
            ordering : false
        });

    });

</script>

<script src="{{ asset('libs')}}/datatables.net/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('libs')}}/datatables.net/js/jszip.min.js"></script>
<script src="{{ asset('libs')}}/datatables.net/js/pdfmake.min.js"></script>
<script src="{{ asset('libs')}}/datatables.net/js/vfs_fonts.js"></script>
<script src="{{ asset('libs')}}/datatables.net/js/buttons.html5.min.js"></script>

<script>
    (function($){
        'use strict';
        $(window).on('load', function () {
            if ($(".pre-loader").length > 0)
            {
                $(".pre-loader").fadeOut("slow");
            }
        });
    })(jQuery)
</script>
@yield('script')
</body>
</html>