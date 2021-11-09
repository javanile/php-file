<?php

if (!function_exists('file_reduce')) {
    function file_reduce($file, $size)
    {
        if (file_exists($file) && filesize($file) > $size) {
            $stream = fopen($file, 'r');
            fseek($stream, -$size, SEEK_END);
            $data = fgets($stream, $size + 1);
            fclose($stream);

            return file_put_contents($file, $data);
        }
    }
}
