<?php
/**
 * @var CMain $APPLICATION
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Task Manager");

$APPLICATION->IncludeComponent('up:tasks.list', '', []);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>