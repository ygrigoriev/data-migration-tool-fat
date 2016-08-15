<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
umask(0);

//$mtfRoot = dirname(dirname(__FILE__));
//$mtfRoot = str_replace('\\', '/', $mtfRoot);
$appRoot = __DIR__ . '/../../../../';
define('MTF_BP', $appRoot . 'dev/tests/functional');
define('MTF_TESTS_PATH', MTF_BP . 'vendor/magento/data-migration-tool-fat/tests/app/');

$appRoot = __DIR__ . '/../../../../';
require $appRoot . 'app/bootstrap.php';
require $appRoot . 'vendor/autoload.php';

$objectManager = \Magento\Mtf\ObjectManagerFactory::getObjectManager();
\Magento\Mtf\ObjectManagerFactory::configure($objectManager);

$magentoObjectManagerFactory = \Magento\Framework\App\Bootstrap::createObjectManagerFactory(BP, $_SERVER);
$magentoObjectManager = $magentoObjectManagerFactory->create($_SERVER);
