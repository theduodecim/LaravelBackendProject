
<!-- HEADER FOOTER AND NAVEGATIONS LINKS -->


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LaravelProject')</title>
</head>
<body>
 <!--<h1> Home page </h1>   -->
    @yield('content')

    <a href="/">Home Page</a> <br>
    <a href="/project">Go to projects</a>  <br>
    <a href="/contact">Go to contact</a>  <br>
    <a href="/about">About Us</a> <br> <br>
    <a href="/laravel">Laravel Main Page</a> <br>
</body>
</html>
