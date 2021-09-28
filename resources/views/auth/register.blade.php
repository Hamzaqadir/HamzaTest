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
    <form action="{{ route('register') }}" method="post" class="form-signin">
        @csrf
        <div class="text-center mb-4">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Hamza Testing Project</h1>
        </div>

        <div class="form-label-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="First Name" required autofocus>
            <label for="name">First Name</label>
        </div>

        <div class="form-label-group">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required >
            <label for="email">Email address</label>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group ">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                           class="form-control" placeholder="Confirm Password" required>
                </div>
            </div>
        </div>

        <div class="mt-0">
            <label class="form-label text-strong">User Type</label>
        </div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="radio" name="role_id" id="Admin" value="A">
            <label class="form-check-label" for="Admin">Admin</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role_id" id="User" value="U" checked>
            <label class="form-check-label" for="User">User</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
        <p class="mt-5 mb-3 text-muted text-center">No Account ? <a href="{{ route('login') }}">Login</a></p>

    </form>
</body>

</html>
