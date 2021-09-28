<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Floating labels example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/floating-labels.css') }}" rel="stylesheet">
</head>

<body>
    <form class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Hamza Testing Project</h1>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
        </div>
        <div>
        <label class="form-label">User Type</label></div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="check" id="Admin">
            <label class="form-check-label" for="Admin">
                Admin
            </label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="check" id="User" checked >
            <label class="form-check-label" for="User">
                User </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">No Account ? <a href="{{ route('register') }}">Register</a></p>

    </form>
</body>

</html>