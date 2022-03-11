<?php
$arr = str_split("310");
$status_no = $arr[0];
$temparr = array();
for ($i = 1; $i < sizeof($arr);$i++){
    $val = $arr[$i];
    array_push($temparr,$val);
}
$app_id = implode("",$temparr);
print($status_no);
print("\n");
print($app_id);
?>