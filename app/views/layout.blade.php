<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/metro.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery-2.1.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/metro.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@yield('script')
@yield('title')
</head>
<body>
    <div class="app-bar" data-role="appbar">
        <a class="app-bar-element" href="...">LAG Volunteer</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>

    
@yield('content')
<div class="side-content">
	@if (Auth::check())
		{{{Auth::user()->username}}}
	@endif
</div>
</body>
</html>