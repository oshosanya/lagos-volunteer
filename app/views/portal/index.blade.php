@extends('layout')

@section('title')
<title>Volunteer Portal | LAG Volunteer</title>
@stop

@section('content')
<ul class="v-menu">
    <li class="menu-title">Applications</li>
    <li><a href="/applications/create"><span class="mif-home icon"></span>New Application</a></li>
    <li><a href="/applications"><span class="mif-home icon"></span>Manage Applications</a></li>
    <li class="divider"></li>
    <li class="menu-title">My Profile</li>
    <li><a href="#"><span class="mif-user icon"></span>Profile</a></li>
    <li><a href="#"><span class="mif-calendar icon"></span>Edit Profile</a></li>
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

{{{$location["city"]}}}
@stop