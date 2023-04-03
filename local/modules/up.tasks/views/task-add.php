<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");


/**
 * @var CMain $APPLICATION
 */

use Bitrix\Main\Application;
use Up\Tasks\TaskActions;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

\Bitrix\Main\Loader::includeModule('up.tasks');

if(check_bitrix_sessid())
{
	$request = Application::getInstance()->getContext()->getRequest()->getPostList();

	$result = TaskActions::addTask($request['taskName'], $request["taskDescription"]);

	if(!$result->isSuccess())
	{
		print_r($result->getErrors());
	}
}

LocalRedirect("/tasks/");