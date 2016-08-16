<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

require_once realpath(__DIR__ . '/../../../') . '/app/bootstrap.php';
restore_error_handler();

defined('MTF_BOOT_FILE') || define('MTF_BOOT_FILE', __FILE__);
defined('MTF_BP') || define('MTF_BP', BP . '/dev/tests/functional');
defined('MTF_TESTS_PATH') || define('MTF_TESTS_PATH', BP . '/dev/tests/functional/tests/app/');
defined('MTF_STATES_PATH') || define('MTF_STATES_PATH', BP . '/dev/tests/functional/lib/Magento/Mtf/App/State/');

defined('MTF_DMT_BP') || define('MTF_DMT_BP', __DIR__);

require_once BP . '/dev/tests/functional/vendor/autoload.php';
