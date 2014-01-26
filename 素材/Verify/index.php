<?php

//setcookie('Uname', $_POST['Uname']);
$array = array();
$Domain = $_POST['Domain'];
$Code = $_POST['Code'];
$String = file_get_contents('CODE');
$StringArray = explode("\r\n", $String);
if (in_array("{$Code}:{$Domain}", $StringArray)) {
    $array['Y'] = 1;
    $array['INFO'] = '您已通过商业授权！';
} else {
    $array['Y'] = 0;
    $array['INFO'] = '您还不是正版授权用户！';
}
echo json_encode($array);
?>