<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesachama - Your saving patner</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css">


</head>
<body class="form-membership" style="background-image: url({{ asset('assets/img/cover.jpg') }})">

<div class="form-wrapper">
    <!-- logo -->
    <div id="logo" style="margin-top:-30px;">
        <img class="logo " src="{{ asset('assets/media/image/logo.png') }}" alt="logo" style="width:300px;margin-bottom:-30px;">

    </div>
    <!-- ./ logo -->

    <h5>Sign in</h5>
    <div id="app">
        <login-form></login-form>
    </div>


</div>

{{--<script src="{{ asset('assets/js/app.min.js') }}"></script>--}}
<script src="{{ mix('js/login.js') }}" type="text/javascript"></script>


</body>

</html>
