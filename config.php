<?php
    function assets($type, $file)
    {
        return "./assets/{$type}/{$file}";
    }

    function components($file)
    {
        return "./components/{$file}";
    }

?>