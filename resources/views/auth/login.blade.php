<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đăng nhập để vào trang web</title>

        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Video of Santo</h1>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="display:block; float:none; margin:20px auto;">
                    <div class="panel panel-info">
                          <div class="panel-heading">
                                <h3 class="panel-title">Login</h3>
                          </div>
                          <div class="panel-body">

                            <form method="POST" action="/auth/login">
                                {!! csrf_field() !!}
                                <div>
                                    Email
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                <div>
                                    Password
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>

                                <div>
                                    <input type="checkbox" name="remember"> Remember Me
                                </div>

                                <div>
                                    <button class="btn btn-block btn-primary" type="submit">Login</button>
                                </div>
                            </form>
                          </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </body>
</html>