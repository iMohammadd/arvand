<!DOCTYPE html>
<html lang="">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>@yield('title')</title>
<link rel="shortcut icon" href="">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/droidarabicnaskh.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
<style>body{padding-top:75px; background: url("{{asset('asset/image/symphony.png')}}") repeat;}.starter-template{padding:75px 15px;text-align:center;}</style>

<!--[if IE]>
<script src="{{asset('asset/js/html5shiv.min.js')}}"></script>
<script src="{{asset('asset/js/respond.min.js')}}"></script>
<![endif]-->
</head>

<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading rtl naskh"><h3><i class="fa fa-car"></i> اروند خودرو</h3></div>
        <div class="panel-body">
            <div class="container">
                <div class="col-md-8 context">
                    <div class="row rtl naskh">
                        <h4>@yield('heading')</h4>
                    </div>
                    <div class="row rtl naskh">
                        @yield('body')
                    </div>
                </div>
                <div class="col-md-4 rtl naskh">
                    @yield('sidebar')
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
</body>
</html>
