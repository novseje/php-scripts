<?
require($_SERVER['DOCUMENT_ROOT']."/bitrix/header.php");

$user_id = empty($_GET['id']) ? 1 : $_GET['id'];

echo $USER->Authorize($user_id);

echo $USER->LAST_ERROR;

require($_SERVER['DOCUMENT_ROOT']."/bitrix/footer.php");
?>