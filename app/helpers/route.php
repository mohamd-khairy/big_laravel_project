<?php
/**
 * string $moduleName
 * string $type default = backend
 * return string
 */
function buildPrefix(string $module, string $type = 'backend')
{
    return config($module . '.moduleName') . '/' . config($module . '.prefix.' . $type, config('module_route.prefix.' . $type));
}

function buildPrefixView(string $module,string $view){
    return "$module::$view";
}

function buildControllerNamespace($moduleName){
    return ucfirst($moduleName).'\Http\Controllers';
}