<?php
    $file = 'example.txt';

    if($handle = fopen($file, 'w')) {
        fwrite($handle, 'Php is pretty cool.');
        fclose($handle);
    } else {
        echo 'The files could not be written';
    }
?>