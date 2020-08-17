<?php

$arr = str_split($_POST['binario']); 

// n*2^7 + n*2^6 + n*2^5 + n*2^4 + n*2^3 + n*2^2 + n*2^1 + n*2^0

$decimal = 0;
$bin = array_reverse($arr);
foreach ($bin as $key => $value) {
    # code...
    echo $value . '*2^' . $key. "<br/>";
    $decimal += $value*(2**$key);
}
echo $decimal;

return 0;
