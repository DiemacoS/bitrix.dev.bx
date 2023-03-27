<?php

/**
 * @var array $arResult
 * @var array $arParams
 */


if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="container">
    <form method="post" action="/tasks/create/">
        <div class="form-group">
            <label for="taskName">Название задачи</label>
            <input type="text" class="form-control" id="taskName" name="taskName">
        </div>
        <div class="form-group">
            <label for="taskDescription">Описание задачи</label>
            <textarea class="form-control" id="taskDescription" name="taskDescription"></textarea>
        </div>
        <button type="submit" class="btn mt-2 btn-primary">Добавить</button>
    </form>

    <h1>Список задач</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название задачи</th>
            <th>Описание</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
		<?php foreach ($arResult['TASKS'] as $task) : ?>
            <tr>
                <td><?= $task['id'] ?></td>
                <td><?= $task['task_name'] ?></td>
                <td><?= $task['task_description'] ?></td>
                <td>
                <form method="post" action="/tasks/<?= $task['id'] ?>/delete/">
                    <input type="hidden" name="method" value="delete">
                    <input type="hidden" name="id" value="<?= $task['id'] ?>">
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
                </td>
		<?php endforeach; ?>
        </tbody>
    </table>


</div>