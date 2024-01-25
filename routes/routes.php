<?php

// Routes for web
$route[] = ['GET', '/', 'ShortenerUrlController@index'];
$route[] = ['GET', '/api', 'WelcomeController@apiIndex'];
$route[] = ['POST', '/login', 'AuthController@login'];
$route[] = ['POST', '/logout', 'AuthController@logout'];
$route[] = ['POST', '/shortener', 'ShortenerUrlController@create'];



return $route;
