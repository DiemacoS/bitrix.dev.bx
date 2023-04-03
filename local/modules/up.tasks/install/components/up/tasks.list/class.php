<?php

use lib\TaskActions;
use Bitrix\Main\Application;

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

		//		if(request()->getServer()->getRequestMethod() === "POST")
		//		{
		//			$request = request()->getPostList();
		//			if($request['method']){
		//				TaskActions::deleteTask($request['id']);
		//				LocalRedirect("/tasks/");
		//			} else {
		//				TaskActions::addTask($request['taskName'], $request["taskDescription"]);
		//				LocalRedirect("/tasks/");
		//			}
		//		}

		$this->arResult['TASKS'] = $tasks;
	}
}