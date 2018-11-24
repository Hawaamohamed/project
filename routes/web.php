<?php


Route::get('/home', function() 
{
    return view('home') ;
});

Route::get('/login', function() 
{
    return view('/login_register/login') ;
});

Route::get('/register', function() 
{
    return view('/login_register/register') ;
});

Route::get('/persons', function() 
{
    return view('/persons') ;
});

Route::get('/about_us', function() 
{
    return view('/about_us') ;
});


Route::get('/', function () {
    return view('welcome');
});
