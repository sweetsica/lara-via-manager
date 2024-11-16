@extends('template.default')
@section('content.head')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Zoter - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- DataTables -->
        <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <!-- Top Bar Start -->
            <div class="topbar">
                <nav class="navbar-custom">
                    <ul class="list-inline float-right mb-0">
                        <!-- language-->
                        <li class="list-inline-item hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <li class="list-inline-item dropdown notification-list hide-phone">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect text-white" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/flags/us_flag.jpg')}}" class="ml-2" height="16" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#"><img src="{{asset('assets/images/flags/italy_flag.jpg')}}" alt="" height="16"/><span> Italian </span></a>
                                <a class="dropdown-item" href="#"><img src="{{asset('assets/images/flags/french_flag.jpg')}}" alt="" height="16"/><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="{{asset('assets/images/flags/spain_flag.jpg')}}" alt="" height="16"/><span> Spanish </span></a>
                                <a class="dropdown-item" href="#"><img src="{{asset('assets/images/flags/russia_flag.jpg')}}" alt="" height="16"/><span> Russian </span></a>
                            </div>
                        </li>
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="ti-email noti-icon"></i>
                                <span class="badge badge-danger noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{asset('assets/users/avatar-3.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{asset('assets/users/avatar-4.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
                                <span class="badge badge-success noti-icon-badge">23</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>

            <div class="page-content-wrapper ">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                        <li class="breadcrumb-item active">Datatable</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Datatable</h4>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <table class="min-w-full border border-gray-300 text-sm text-left text-gray-500">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(0)">ID</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(1)">UID</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(2)">Họ tên</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(3)">Pass</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(4)">Token</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(5)">Cookie</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(6)">Email</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(7)">Nguồn</th>
                                    <th class="px-4 py-2 cursor-pointer" onclick="sortTable(8)">Giá</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @if(isset($data))
                                @foreach($data as $info)
                                    <tr contenteditable="true" class="border-t border-gray-300">
                                        @if(isset($info['id']))
                                            <td>{{ $info['id'] }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        <td class="px-4 py-2">{{ $info['uid']  }}</td>
                                        <td class="px-4 py-2">{{ $info['name'] ?? ''}}</td>
                                        <td class="px-4 py-2">{{ $info['pass'] ?? ''}}</td>
                                        <td class="px-4 py-2">{{ $info['token'] ?? ''}}</td>
                                        <td class="px-4 py-2">{{ $info['cookie'] ?? ''}}</td>
                                        <td class="px-4 py-2">{{ $info['email'] ?? ''}}</td>
                                        <td class="px-4 py-2">{{ $info['source_name'] ?? ''}}</td>
                                        <td class="px-4 py-2">{{ $info['price'] ?? ''}}</td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>


        </div> <!-- content -->
    </div>
@endsection
@section('content.script')
    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        // Function to sort table columns
        function sortTable(columnIndex) {
            const table = document.getElementById("table-body");
            const rows = Array.from(table.rows);

            // Toggle sort direction
            let sorted = rows.sort((a, b) => {
                const cellA = a.cells[columnIndex].innerText.toLowerCase();
                const cellB = b.cells[columnIndex].innerText.toLowerCase();
                return cellA.localeCompare(cellB);
            });

            // Append sorted rows back to the table body
            table.innerHTML = '';
            sorted.forEach(row => table.appendChild(row));
        }
    </script>
@endsection
