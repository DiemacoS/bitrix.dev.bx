<?php

namespace Up\Tasks;

use Bitrix\Main\ModuleManager;
use Bitrix\Main\Config\Option;

function __projectorMigrate(int $nextVersion, callable $callback)
{
	global $DB;
	$moduleId = 'up.tasks';

	if (!ModuleManager::isModuleInstalled($moduleId))
	{
		return;
	}

	$currentVersion = intval(Option::get($moduleId, '~database_schema_version', 0));

	if ($currentVersion < $nextVersion)
	{
		include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/update_class.php');
		$updater = new \CUpdater();
		$updater->Init('', 'mysql', '', '', $moduleId, 'DB');

		$callback($updater, $DB, 'mysql');
		Option::set($moduleId, '~database_schema_version', $nextVersion);
	}
}

__projectorMigrate(3, function($updater, $DB)
{
	if ($updater->CanUpdateDatabase() && !$updater->TableExists('up_tasks_task'))
	{
		$DB->query('CREATE TABLE IF NOT EXISTS up_tasks_task (
		   id INT AUTO_INCREMENT,
		   task_name VARCHAR(255) NOT NULL,
		   task_description VARCHAR(255),
		   PRIMARY KEY(ID)
	);');
	}
});