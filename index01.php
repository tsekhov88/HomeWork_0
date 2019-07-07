<?php
$str = "ffsfsdfsghgfdjghgdfgdfsfgj";
$array = str_split($str);
sort($array);
echo '<pre>';
print_r(array_count_values($array));
echo '</pre>';