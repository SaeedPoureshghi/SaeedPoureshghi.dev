<?php
    
    include '.env';
    include 'init.php';
    
    Route::all();
    Route::add('/','GET');
    Route::add('/en','GET');
    Route::add('/resume','GET');
    
    //Route::auth();
    //*TODO: Routes that need Authentication

    //Route::admin();
    //*TODO: Routes that need Admin Access
    
    
    Route::run();
    
?>