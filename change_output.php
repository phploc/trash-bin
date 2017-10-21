<?php

ob_start();
echo 'изменить вывод не возможно';
$buff_string=ob_get_contents();
$final_string=str_replace('не','',$buff_string);
echo '<br>',$final_string;