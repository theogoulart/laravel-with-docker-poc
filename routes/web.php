<?php

Route::get('/', 'Controller@home');

Route::get('/{category}', 'Product@list');

Route::get('/{brand}/{product}', 'Product@show');
