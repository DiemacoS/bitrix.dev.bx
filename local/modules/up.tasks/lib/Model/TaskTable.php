<?php

namespace Up\Tasks\Model;

use Bitrix\Main\Entity;

class TaskTable extends Entity\DataManager
{
	public static function getTableName()
	{
		return 'up_tasks_task';
	}

	public static function getMap()
	{
		return [
			new Entity\IntegerField('id', [
				'primary' => true,
				'autocomplete' => true,
			]),
			new Entity\StringField('task_name', [
				'required' => true,
			]),
			new Entity\StringField('task_description', [
				'required' => false,
			]),
		];
	}
}