<?php
/*
 * Основной загрузчик системы
 *
 * @package   This file is part of the Kit.cms
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Kit.team <http://www.kit.team>
 * @link      Kit.cms <http://www.kitcms.ru>
 */

// Определение константы, содержащей разделитель директорий
define('DS', DIRECTORY_SEPARATOR);
// Определение константы, содержащей разделитель пространства имен
define('NS', '\\');

// Изменение текущего каталога PHP на системную директорию
$dir = dirname(__FILE__);
chdir($dir);

// Нахождение ключевых функций, конфигурационных файлов и их подключение
$files = glob('*/*.{function,config}.php', GLOB_BRACE);
foreach ($files as $file) {
    if (is_file($file)) {
        require_once $file;
    }
}
