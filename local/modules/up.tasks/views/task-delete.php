<?php

/// пример обработчика views/task-add.php

use Bitrix\Main\Loader;
use Up\Tasks\TaskActions;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

Loader::includeModule('up.tasks');

if(check_bitrix_sessid())
{
	$request = request()->getPostList();
	$result = TaskActions::deleteTask($request['id']);

	if(!$result->isSuccess())
	{
		print_r($result->getErrors());
	}
}

//LocalRedirect("/tasks/");

// сделать редирект на /tasks