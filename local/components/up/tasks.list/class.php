<?php

use Bitrix\Main\Application;
use Up\Tasks\TaskActions;

class TasksListComponent extends CBitrixComponent
{
	public function executeComponent()
	{
		$this->actionTasks();
		$this->includeComponentTemplate();
	}

	protected function actionTasks()
	{
		$tasks = TaskActions::getTaskList();
		$this->arResult['TASKS'] = $tasks;
	}
}