<?php

function DS()
{
    return DIRECTORY_SEPARATOR;
}

function loadModulePath($moduleName)
{
    return app_path('modules' . DS() . $moduleName . DS());
}

function loadConfigFile($fileName, $moduleName)
{
    return loadModulePath($moduleName) . "config" . DS() . $fileName . ".php";
}

function loadRoutes($fileName, $moduleName)
{
    return loadModulePath($moduleName) . "routes" . DS() . $fileName . ".php";
}

function loadViews($moduleName)
{
    return loadModulePath($moduleName) . "resources" . DS() . "views";
}

function loadLang($moduleName)
{
    return loadModulePath($moduleName) . "resources" . DS() . "lang";
}
function loadMigrations($moduleName)
{
    return loadModulePath($moduleName) . "database" . DS() . "migrations";
}
