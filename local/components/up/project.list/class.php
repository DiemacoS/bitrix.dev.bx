<?php


use Bitrix\Main\Application;
use Up\Tasks\TaskActions;

class ProjectListComponent extends CBitrixComponent
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
//		$request = Application::getInstance()->getContext()->getRequest()->getPostList();
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