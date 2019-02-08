<?php
/*
 * Фронт-контроллер системы
 *
 * @package   This file is part of the Kit.cms
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Kit.team <http://www.kit.team>
 * @link      Kit.cms <http://www.kitcms.ru>
 */

use Classes\Application;

// Определение системных загрузчиков
$files = glob('application/bootstrap*.php', GLOB_BRACE);
foreach ($files as $file) {
    if (is_file($file)) {
        require_once $file;
    }
}

// Инициализация и запуск приложения
$app = new Application();
$app->run();
