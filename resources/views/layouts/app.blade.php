<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') - Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/carousel.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Test Project</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ request()->routeIs('home')? 'active':'' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                @if(auth()->user()->role_id == \App\Commons::USER)
                    <li class="nav-item {{ request()->routeIs('user-products.create')? 'active':'' }}">
                        <a class="nav-link" href="{{ route('user-products.create') }}">New Product</a>
                    </li>

                @elseif(auth()->user()->role_id == \App\Commons::ADMIN)
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">All Products</a></li>
                @endif

                <li class="nav-item"><a class="nav-link" href="#"
                                        onclick="document.getElementById('frmLogout').submit();">Logout</a></li>
                <form id="frmLogout" action="{{ route('logout') }}" method="post">@csrf</form>
            </ul>
        </div>
    </nav>
</header>

<main role="main">
    @yield('content')

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/assets/js/jquery-3.2.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/jquery-3.2.1.slim.min.js"><\/script>')</script>
<script src="/assets/js/vendor/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="/assets/js/vendor/holder.min.js"></script>
</body>
</html>
