<?php
/*
 * Настройка автоматической загрузки системных классов
 *
 * @package   This file is part of the Kit.cms
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Kit.team <http://www.kit.team>
 * @link      Kit.cms <http://www.kitcms.ru>
 */

if (function_exists('autoload')) {
    // Регистрация функции автозагрузки
    spl_autoload_register('autoload');
}
