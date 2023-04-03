<?php

namespace Up\Tasks;

use Up\Tasks\Model\TaskTable;

class TaskActions
{
	public static function getTaskList(): array
	{
		return TaskTable::getList(['select' => ['*']])->fetchAll();
	}

	public static function addTask(string $title, string $description): \Bitrix\Main\ORM\Data\AddResult
	{
		$result = TaskTable::add([
			'task_name' => $title,
			'task_description' => $description,
		]);

		return $result;
	}

	public static function deleteTask(int $id):  \Bitrix\Main\ORM\Data\DeleteResult
	{
		return TaskTable::delete($id);
	}
}