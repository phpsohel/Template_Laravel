<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title', 'Narayan Ganj Health')</title>
    <link rel="icon" href="{{ asset('image/2022-12-27 logocewa.png') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/font-6all.min.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
    <!-- Summer Note -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- Sweet Alert -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <!-- toaster -->
    <link rel="stylesheet" href="{{asset('admin/toaster/css/toastr.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.min.css')}}">
    <style>
        .btn-secondary {
            border-color: #fff !important;
        }

        .buttons-copy {
            margin: 5px;
            background: #ff7588;
        }

        .buttons-csv {
            margin: 5px;
            background: #ffc107;

        }

        .buttons-excel {
            margin: 5px;
            background: #bec561;
        }

        .buttons-pdf {
            margin: 5px;
            background: #ff7588;
        }

        .buttons-print {
            margin: 5px;
            background: #2196f3;
        }

        .buttons-collection {
            margin: 5px;
            background: #7c5cc4;
        }
            a.nav-link i,
            p {
                color: #7c5cc4;
                font-weight: 600!important;
            }

            a.nav-link p {
                margin-left: 10px !important;
                font-size: 17px;
                font-weight: 500;
            }

            .text-light {
                color: #333 !important;
            }

        </style>
    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand" style="background-color: #8BD0FF;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-dark"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a href="https://acquaintbd.com/contact-us/" target="_blank" class="nav-link" style="color: #7c5cc4">
                        <i class="fa-solid fa-handshake-angle"></i> Help
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " data-toggle="dropdown" href="" style="color: #7c5cc4">
                        <i class="fa-solid fa-user-plus"></i> {{Auth()->user()->name ?? ''}}</a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="max-width: 250px;min-width: 220px;">
                        <div class="dropdown-divider"></div>
                        <hr style="padding: 0;margin:0;">
                        <a href="{{ route('user.profile') }}" class="dropdown-item ">

                            <i class="fa thin fa-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <hr style="padding: 0;margin:0;">

                        @role('admin||Super-Admin')
                        <a href="{{ route('setting.index')}}" class="dropdown-item ">
                            <i class="fa thin fa-gear"></i> Settings</a>
                        @endrole
                        <div class="dropdown-divider"></div>
                        <hr style="padding: 0;margin:0;">
                        <a href="{{ route('password-change')}}" class="dropdown-item ">
                            <i class="fa-regular fa-user"></i> Password Change
                        </a>
                        <hr style="padding: 0;margin:0;">
                        <a href="{{ route('logout')}}" class="dropdown-item ">
                            <i class="fa-solid fa-right-from-bracket"></i> Log Out
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

       <aside class="main-sidebar sidebar-light-primary elevation-4">
           <div class="sidebar">
               <div class="mt-3 pb-3 mb-3  text-center">
                   <div class="image">
                       @php
                       $general_setting = App\Models\Generalsetting::first();
                       @endphp
                       @if (!empty($general_setting))
                       <img style="max-width: 230px;" src="{{ asset('image/'. $general_setting->site_logo ?? '') }}" class="elevation-2" alt="{{ $general_setting->site_title ?? '' }}">
                       @else
                       <img style="max-width: 230px ;height: 100px;" src="{{ asset('image/no_image.jpg') }}" class="elevation-2" alt="{{ $general_setting->site_title ?? '' }}">
                       @endif
                   </div>
                   <div class="info">
                       {{-- <a href="#" class="d-block">{{ Auth()->user()->name ?? ''}}</a> --}}
                   </div>
               </div>
               <div class="form-inline">
                   <div class="input-group" data-widget="sidebar-search">
                       <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                       <div class="input-group-append">
                           <button class="btn btn-sidebar">
                               <i class="fas fa-search fa-fw"></i>
                           </button>
                       </div>
                   </div>
               </div>
               <nav class="mt-2">
                   <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       @role('admin||Super-Admin')

                       <li class="nav-item border-bottom">
                           <a href="{{ route('index') }}" class="nav-link">
                               <i class="fa-solid fa-house"></i>
                               <p>Dashboard</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="{{ route('summer-note') }}" class="nav-link">
                               <i class="fa-solid fa-house"></i>
                               <p>Summer Note</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="" class="nav-link">
                               <i class="fa-solid fa-user"></i>
                               <p>Member <i class="fas fa-angle-left right"></i></p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item border-bottom fa-carret">
                                   <a href="{{ route('member.request_list') }}" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p> Request List</p>
                                   </a>
                               </li>
                               <li class="nav-item border-bottom fa-carret">
                                   <a href="{{ route('member.index') }}" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Member List</p>
                                   </a>
                               </li>
                               <li class="nav-item border-bottom">
                                   <a href="{{ route('member.reject_list') }}" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p> Rejected List</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       <li class="nav-item border-bottom">

                           <a href="{{route('member.report')}}" class="nav-link">
                               <i class="fa-solid fa-hotel"></i>
                               <p>Member Report</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="" class="nav-link">
                               <i class="far fa-bell"></i>
                               <p>Send Notification</p>
                           </a>
                       </li>

                       <li class="nav-item border-bottom">
                           <a href="{{route('member.report')}}" class="nav-link">
                               <i class="fa thin fa-gear"></i>
                               <p>Settings <i class="fas fa-angle-left right"></i></p>
                           </a>
                           <ul class="nav nav-treeview">
                               <li class="nav-item border-bottom fa-carret">

                                   <a href="{{ route('user') }}" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Users</p>
                                   </a>
                               </li>
                               <li class="nav-item border-bottom fa-carret">

                                   <a href="{{ route('role.index') }}" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>Role Permission</p>
                                   </a>
                               </li>
                               {{-- <li class="nav-item border-bottom">
                            <a href="" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Send Notification</p>
                            </a>
                        </li> --}}

                               <li class="nav-item border-bottom">
                                   <a href="{{ route('setting.index') }}" class="nav-link">
                                       <i class="far fa-circle nav-icon"></i>
                                       <p>General Settings</p>
                                   </a>
                               </li>
                           </ul>
                       </li>
                       @else

                       <li class="nav-item border-bottom">
                           <a href="{{ route('index') }}" class="nav-link">
                               <i class="fa-solid fa-house"></i>
                               <p>Dashboard</p>
                           </a>
                       </li>
                       <li class="nav-item border-bottom">
                           <a href="{{route('member.index')}}" class="nav-link">
                               <i class="fa-solid fa-user"></i>
                               <p>Member</p>
                           </a>
                       </li>
                       @endrole
                   </ul>
               </nav>
           </div>
       </aside>


        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer text-center">
            <strong>Copyright &copy; {{date("Y-m-d")}} Acquaint Technologies.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- ChartJS -->
    <script src="{{ asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sweet Alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Select2 -->
    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- Toaster -->
    <script src="{{ asset('admin/toaster/js/toastr.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('admin/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src=" {{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src=" {{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src=" {{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin/dist/js/pages/dashboard.js')}}"></script>
    <script src="{{ asset('admin/dist/js/PrintJs.js')}}"></script>
    {{-- Summer Note --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


    <script>
        //Data Table
        $(function() {
            $(" #example1").DataTable({
                "responsive": true
                , "lengthChange": false
                , "autoWidth": false
                , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true
                , "lengthChange": false
                , "searching": false
                , "ordering": true
                , "info": true
                , "autoWidth": false
                , "responsive": true
            , });
        });

        //Image click
        $(document).ready(() => {
            $('#image').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#showImage').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch (type) {
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
        }
        @endif

    </script>
    <script>
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            swal({
                    title: 'Are you sure want to delete?'
                    , text: 'Once You delete,This will be permently Delete'
                    , icon: 'warning'
                    , buttons: true
                    , dangerMode: true
                })
                .then((willdelete) => {
                    if (willdelete) {
                        window.location.href = link;
                    } else {
                        swal('Saafe data')
                    }
                });
        });

    </script>
    <script type="text/javascript">
        $('#click_print').click(function() {
            $('#table_print').printThis();
        })

    </script>
    {{-- Checkbox Selected With change_permission.blade.php --}}
    <script type="text/javascript">
        $("#select_all").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

    </script>
</body>
</html>

