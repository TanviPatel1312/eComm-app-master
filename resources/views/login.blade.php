<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form-v6 by Colorlib</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="assets/css/nunito-font.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="{{ asset('/js/jquery.js') }}" type="text/javascript"></script>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body class="form-v6">
<div class="page-content">
    <div class="form-v6-content">
        <div class="form-left">
            <img src="assets/images/images/form-v6.jpg" alt="form">
        </div>
        <form class="form-detail" action="validateUser" method="post">
            @csrf
            <h2>Login Form</h2>

            <div class="form-row">
                <input type="text" name="email" id="email" class="input-text" placeholder="Email Address" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
            </div>
            <div class="form-row">
                <input type="password" name="password" id="password" class="input-text" placeholder="Password" required>
            </div>

            <div class="form-row-last">
                <input type="submit" name="login" class="login" value="login">
            </div>
        </form>
    </div>
</div>
<script src="{{asset('js/app.js')}}" ></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
