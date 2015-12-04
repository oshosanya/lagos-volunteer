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
            <li class="profile-info dropdown-toggle"><a href="">
            @if (Auth::check())
            {{{Auth::user()->username}}}
            @endif
            </a>
            <ul class="d-menu" data-role="dropdown">
            <li><a href="/logout">Logout</a></li>
            </ul>
            </li>
            
        </ul>
    </div>
   

    @if (Auth::check())
   <ul class="v-menu">
   <li class="menu-title">Portal</li>
    <li><a href="/portal"><span class="mif-home icon"></span>Portal Home</a></li>
    <li class="divider"></li>
    <li class="menu-title">Applications</li>
    <li><a href="/applications/create"><span class="mif-home icon"></span>New Application</a></li>
    <li><a href="/applications"><span class="mif-home icon"></span>Manage Applications</a></li>
    <li class="divider"></li>
    <li class="menu-title">My Profile</li>
    <li><a href="/user/profile"><span class="mif-user icon"></span>Profile</a></li>
    <li><a href="/user/profile/edit"><span class="mif-calendar icon"></span>Edit Profile</a></li>
    <li class="divider"></li>
    <li class="menu-title">Third Title</li>
    <li>
        <a href="#" class="dropdown-toggle"><span class="mif-my-location icon"></span> Location</a>
        <ul class="d-menu" data-role="dropdown">
            <li class="menu-title">Title for dropdown</li>
            <li><a href="#">Коллеги</a></li>
            <li><a href="#">Интересно</a></li>
            <li>
                <div class="item-block text-center">
                    <button class="square-button"><img class="icon" src="images/round.png"></button>
                    <button class="square-button"><img class="icon" src="images/location.png"></button>
                    <button class="square-button"><img class="icon" src="images/group.png"></button>
                </div>
            </li>
            <li>
                <a href="#" class="dropdown-toggle">Еще...</a>
                <ul  class="d-menu" data-role="dropdown">
                    <li><a href="#">Коллеги</a></li>
                    <li><a href="#">Интересно</a></li>
                    <li>
                        <div class="item-block text-center bg-grayLighter">
                            <button class="round-button"><img class="icon" src="images/round.png"></button>
                            <button class="round-button"><img class="icon" src="images/location.png"></button>
                            <button class="round-button"><img class="icon" src="images/group.png"></button>
                            <button class="round-button"><img class="icon" src="images/power.png"></button>
                        </div>
                    </li>
                    <li class="divider"></li>
                </ul>
            </li>
        </ul>
    </li>
    <li><a href="#"><span class="mif-bubbles icon"></span> Community</a></li>
</ul>
@endif


<div class="m-content">
@yield('content')
</div>
</body>
</html>