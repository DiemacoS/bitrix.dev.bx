<?php

namespace Up\Tasks;

use Up\Tasks\Model\TaskTable;

class TaskActions
{
	public static function getTaskList()
	{
		return TaskTable::getList(['select' => ['*']])->fetchAll();
	}

	public static function addTask($title, $description)
	{
		$result = TaskTable::add([
			'task_name' => $title,
			'task_description' => $description,
		]);

		return $result;
	}

	public static function deleteTask($id)
	{
		return TaskTable::delete($id);
	}
}