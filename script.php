<?php

$binario = $_POST['binario'];
$arr = str_split($binario);


if(empty($binario))
{
    echo "O campo não pode estar vazio";
    return;
}
if(count($arr) > 8)
{
    echo "O binario deve conter 8 digitos";
    return;
}

$decimal = 0;
$bin = array_reverse($arr);
foreach ($bin as $key => $value)
{
    $decimal += $value*(2**$key);
}
echo $decimal;

return;