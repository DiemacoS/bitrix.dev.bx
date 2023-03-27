<?php

namespace lib;

use lib\Model\TaskTable;

class TaskActions {
	public static function getTaskList()
	{
		$tasks = TaskTable::getList(['select' => ['*']]);
		return $tasks->fetchAll();
	}

	public static function addTask($title, $description) {
		$result = TaskTable::add([
			'task_name' => $title,
			'task_description' => $description,
		]);

		if($result->isSuccess()){
			$movieId = $result->getId();
		}
		else {
			print_r($result->getErrors());
		}
	}

	public static function deleteTask($id){
		$result = TaskTable::delete($id);
		if(!$result->isSuccess())
		{
			$errors = $result->getErrors();
		}
	}
}