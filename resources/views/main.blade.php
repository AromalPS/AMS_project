<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <title>AMS | Welcome</title>
</head>
<body>
<div class="container">
    <div class="row">
        <center><h1>Welcome to <b>AMS</b></h1></center>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <a href="{{ route('login') }}"><button type="submit" class="btn btn-primary btn-lg btn-block">Students login</button></a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <a href="{{ route('teacher.login') }}"><button type="submit" class="btn btn-primary btn-lg btn-block">Teachers login</button></a>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <a href="{{ route('admin.login') }}"><button type="submit" class="btn btn-primary btn-lg btn-block">Admins login</button></a>
        </div>
    </div>
</div>
</body>
</html>
