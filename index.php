<?php
define('AAAZZZ', TRUE);
header('Content-Type: text/html; charset=UTF-8');
header('Access-Control-Allow-Origin:*');
$array = file('./content.php');
$id = $_GET['id'];
$id_min = 1;
//一言开始行数
$id_max = 3388;
//一言结束行数
if (!$id == NULL && is_numeric($id))
{
  if ($id >= $id_min && $id <= $id_max)
  {
    $number = $id;
  }
  else
  {
    echo "Error: Exceeded maximum id. ";
    echo "The maximum id is ";
    echo $id_max;
    echo ".";
  }
}
else
{
  $number = rand($id_min,$id_max);
}
$string = $array[$number];
echo trim($string);
?>