<?php
    $myfile = fopen("webdictionary.txt", "r")
                or die("Unable to open file")
            echo fread($mylife, filesize("webdictionary"));
            fclose($myfile);
            ?>