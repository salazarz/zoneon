<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Zone One - User Area</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('philbert/favicon.ico')}}">
    <link rel="icon" href="{{asset('philbert/favicon.ico')}}" type="image/x-icon">

    <!-- Bootstrap Dropify CSS -->
    <link href="{{asset('philbert/vendors/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="{{asset('philbert/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<!--Preloader-->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!--/Preloader-->
<div class="wrapper theme-1-active pimary-color-green">

    <!-- Top Menu Items -->
@include('user.top_menu')
<!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
@include('user.left_sidebar')
<!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
{{--@include('user.right_sidebar')--}}
<!-- /Right Sidebar Menu -->


    <!-- Right Sidebar Backdrop -->
    <div class="right-sidebar-backdrop"></div>
    <!-- /Right Sidebar Backdrop -->

    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Title -->
            <div class="row heading-bg">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h5 class="txt-dark">Payment</h5>
                </div>
                <!-- Breadcrumb -->
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">User Area</a></li>
                        <li><a href="#"><span>invoice</span></a></li>
                        <li class="active"><span>payment</span></li>
                    </ol>
                </div>
                <!-- /Breadcrumb -->
            </div>
            <!-- /Title -->

            <!-- Row -->
            <div class="row">
                <div class="col-sm-12 ol-md-12 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h6 class="panel-title txt-dark">Invoice # {{$transaction->code}}</h6>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">
                                <p class="text-muted">Transfer to </p>
                                <h6 class="text-muted">BCA : <code>557 0289 99</code> a/n Qomarrudin Sultan</h6>
                                <form action="{{route('transaction.update',$transaction)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <div class="mt-40">
                                    <input type="file" id="input-file-now" class="dropify" name="payment_proof" required/>
                                </div>
                                <div class="mt-40">
                                    <button type="submit" class="btn btn-success btn-block btn-anim">
                                        <i class="fa fa-check"></i><span class="btn-text">Upload Proof</span>
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->

        </div>

        <!-- Footer -->
        @include('footer')
        <!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="{{asset('philbert/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('philbert/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Bootstrap Daterangepicker JavaScript -->
<script src="{{asset('philbert/vendors/bower_components/dropify/dist/js/dropify.min.js')}}"></script>

<!-- Form Flie Upload Data JavaScript -->
<script src="{{asset('philbert/dist/js/form-file-upload-data.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('philbert/dist/js/jquery.slimscroll.js')}}"></script>

<!-- Fancy Dropdown JS -->
<script src="{{asset('philbert/dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- Owl JavaScript -->
<script src="{{asset('philbert/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<!-- Switchery JavaScript -->
<script src="{{asset('philbert/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('philbert/dist/js/init.js')}}"></script>

</body>
</html>