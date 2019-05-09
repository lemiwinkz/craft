<?php

use craft\test\TestSetup;

ini_set('date.timezone', 'UTC');

$dirnameDir = dirname(__DIR__);

// Use the current installation of Craft
define('CRAFT_STORAGE_PATH', __DIR__ . '/_craft/storage');
define('CRAFT_TEMPLATES_PATH', $dirnameDir . '/templates');
define('CRAFT_CONFIG_PATH', __DIR__ . '/_craft/config');
define('CRAFT_VENDOR_PATH', $dirnameDir.'/vendor');
define('CRAFT_FOLDER_PATH', __DIR__ . '/_craft');
define('CRAFT_SRC_PATH', $dirnameDir . '/vendor/craftcms/src');
define('CRAFT_MIGRATIONS_PATH', $dirnameDir . '/migrations');
define('CRAFT_TRANSLATIONS_PATH', $dirnameDir . '/translations');

define('ENV_PATH', __DIR__);
$devMode = true;

TestSetup::configureCraft();
