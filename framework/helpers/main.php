<?php

if(!function_exists('view')) {
    function view($view, $data = []) {
        extract($data);
        include __DIR__ . "/../../resources/views/{$view}.php";
    }
}

if(!function_exists('redirect')) {
    function redirect($url) {
        header("Location: {$url}");
    }
}

if (!function_exists('base_path')) {
    function base_path($path = '') {
        return dirname(__DIR__, 2) . ($path ? "/{$path}" : '');
    }
}

if (!function_exists('config')) {
    function config(?string $file = null) {
        if (is_null($file)) {
            return '';
        }

        $separate = explode('.', $file);
        if (!empty($separate)) {
            $filePath = base_path('config/' . $separate[0] . '.php');
            
            if (file_exists($filePath)) {
                $configData = include $filePath;
                
                
                $value = $configData;
                for ($i = 1; $i < count($separate); $i++) {
                    if (isset($value[$separate[$i]])) {
                        $value = $value[$separate[$i]];
                    } else {
                        return null; 
                    }
                }
                return $value;
            }
        }
        
        return null;
    }
}
