<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ورود</title>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
    <style>
    @font-face {
         font-family: sahel;
            src: url('../font/sahel/Sahel-FD.eot');
            src: url('../font/sahel/Sahel-FD.eot?#iefix') format('FontName-opentype'),
                 url('../font/sahel/Sahel-FD.woff') format('woff'),
                 url('../font/sahel/Sahel-FD.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
  
    </style>

</head>
<body>
    <div class="container">
        <div class="card card-container">
            <div class="card-header">{{ __('Login') }}</div>
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="{{ route('login') }}"  class="form-signin">
                @csrf
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputUsername" name="username" class="form-control" placeholder="نام کاربری" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="کلمه عبور" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> مرا به خاطر به سپار
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">ورود</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
              کلمه عبور خود را فراموش کرده اید؟
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('admin/js/app.js')}}"></script>
</body>
</html>