<?php

use Bitrix\Main\Routing\Controllers\PublicPageController;
use Bitrix\Main\Routing\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

	$routes->get('/', new PublicPageController('/local/modules/up.tasks/views/project-list.php'));
	$routes->get('/tasks/', new PublicPageController('/local/modules/up.tasks/views/project-list.php'));
//	$routes->post('/tasks/create/', new PublicPageController('/local/modules/up.tasks/views/project-list.php'));
//	$routes->post('/tasks/{id}/delete/',  new PublicPageController('/local/modules/up.tasks/views/project-list.php'));
	$routes->post('/tasks/{id}/delete/', new PublicPageController('/local/modules/up.tasks/views/task-delete.php'));
	$routes->post('/tasks/create/', new PublicPageController('/local/modules/up.tasks/views/task-add.php'));
};