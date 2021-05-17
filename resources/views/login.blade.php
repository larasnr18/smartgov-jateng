<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IDSG Pemprov Jateng</title>
  <meta name="description" content="IDSG Pemprov Jateng">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- STYLE -->
  @include('includes.style')
  <style>
    .bg-overlay {
        background: url("images/login-bg.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        height: 100vh;
    }
    .login-box{
        background: rgba(246, 245, 251, 0.6);
    }
  </style>
  
</head>

<body>
<div class="bg-overlay vh-100">
    <div class="row mx-0">
        <div id="login-box" class="col-4 offset-8 px-3 login-box vh-100">
            <div id="login-content" class="login-content p-5 border rounded text-center">
                <img class="img" src="images/logoJateng.png" alt="" width="25%" height="auto">
                <form class="mt-5">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email Anda">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password Anda">
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Login</button>
                    <div class="row mx-0 mt-2">
                        <div class="w-50 text-left text-white">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
                            </div>
                        </div>
                        <div class="w-50 text-right">
                            <a href="" class="text-white">Lupa Password?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="font-12 font-weight-bold text-center pt-2">Copyright 2021 Provinsi Jawa Tengah</div>

        </div>
        <div class="clearfix"></div>
    </div>
</div>

  <!-- SCRIPT -->
  @include('includes.script')
  <script>
        $(document).ready(function() {
            var boxHeight = document.getElementById('login-box').offsetHeight;
            var contentHeight = document.getElementById('login-content').offsetHeight;
            var content= document.getElementById('login-content');
            var margin = (boxHeight - contentHeight) / 2;
            content.style.marginTop = margin + "px";

        });
  </script>

</body>

</html>