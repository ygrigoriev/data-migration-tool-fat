<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

defined('MTF_BOOT_FILE') || define('MTF_BOOT_FILE', __FILE__);
//defined('MTF_BP') || define('MTF_BP', 'C:/Projects/magento2ce/vendor/magento/data-migration-tool-fat');
defined('MTF_BP') || define('MTF_BP', 'C:\Projects\magento2ce\dev\tests\functional');
defined('MTF_TESTS_PATH') || define('MTF_TESTS_PATH', 'C:/Projects/magento2ce/dev/tests/functional/tests/app/');
defined('MTF_STATES_PATH') || define('MTF_STATES_PATH', 'C:/Projects/magento2ce/dev/tests/functional/lib/Magento/Mtf/App/State/');

require_once __DIR__ . '/../../../app/bootstrap.php';
restore_error_handler();
require_once __DIR__ . '/../../../vendor/autoload.php';
