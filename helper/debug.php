<?php
if (!function_exists('dd')) {
    function dd($variable) {
        try {
            highlight_string("<?php\n" . 'object' . " =\n" . var_export($variable, true) . ";\n?>");
        } catch (Exception $exception) {
            echo "<pre>";
            var_dump($variable);
            echo "</pre>";
        }
        die();
    }
}

if (!function_exists('dump')) {
    function dump($variable) {
        highlight_string("<?php\n" . $variable . " =\n" . var_export($variable, true) . ";\n?>");
    }
}
