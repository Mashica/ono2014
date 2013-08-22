<!doctype html>
<html lang="en">
<head><meta charset="UTF-8"><title>Mashica Ciclismo 2014</title>
<style>
*   { /*font: 11px/14px Verdana, Arial, Helvetica, sans-serif;*/
    }
body{
    margin: 0;
    border: 0;
    text-align: center;
    width:802px;
    margin:auto;
    padding-top:10px;
    /*background-color:#311e22;*/
    background-color:#fff;
    color:#333;
    }
p   {
    }
.error {
    color:red;
    }
#wrapper {
    text-align: left;
    }
#header {
    /*background-color:#333;*/
    clear:both;
    }
#nav {
    /*background-color:#333;*/
    clear:both;
    }
#pagebody {
    /*background-color:#666;*/
    clear:both;
    }
#footer {
    /*background-color:#999;*/
    clear:both;
    text-align: center;
    padding-top: 50px; 
    padding-bottom: 25px; 
    }

</style>
</head><body>

<div id="wrapper">

    <div id="header">
        <div><img src="{{ asset('img/no_photo802x146.png') }}" /></div>
        <div>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. </div>

        @yield('header')
    </div>

    <div id="nav">
        <ul>
            <li>{{ HTML::link('/', 'Home') }}</li>
            <li>{{ HTML::link(route('u_new'), 'Regístrate') }}</li>
            <li>{{ HTML::link(route('u'), 'Ciclistas') }}</li>
            <li>{{ HTML::link(route('races'), 'Carreras') }}</li>
            <li>{{ HTML::link(route('race_new'), 'Añadir Carrera') }}</li>
            <!-- <li>{{-- HTML::link('/login', 'Log in') --}}</li> -->
        </ul>

        @yield('nav')
    </div>

    <div id="pagebody">
        @yield('pagebody')
    </div>

    <div id="footer">
        @yield('footer')
        <div style=""><img src="{{ asset('img/footdrom.png') }}" /></div>
    </div>

</div>

</body></html>
