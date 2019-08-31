<?php
$moduleName = basename(dirname(__DIR__, 1));
Route::namespace (buildControllerNamespace($moduleName))->middleware('check')->group(function () use ($moduleName) {
    Route::prefix(buildPrefix($moduleName))->namespace('Backend')->group(function () {
        require 'backend.php';
    });

    Route::prefix(buildPrefix($moduleName, 'frontend'))->namespace('Frontend')->group(function () {
        require 'frontend.php';
    });
});
