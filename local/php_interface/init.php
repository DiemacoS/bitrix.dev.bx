<?php

\Bitrix\Main\Loader::includeModule('up.tasks');

spl_autoload_register(function($className) {
	$path = str_replace('\\', '/', $className);
	if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/modules/up.tasks/'. $path . '.php')) {
		require_once($_SERVER['DOCUMENT_ROOT'].'/local/modules/up.tasks/'. $path . '.php');
	}
});