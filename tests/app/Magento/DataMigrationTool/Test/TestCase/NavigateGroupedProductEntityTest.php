<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\DataMigrationTool\Test\TestCase;

use Magento\Mtf\TestCase\Injectable;
use Magento\GroupedProduct\Test\Fixture\GroupedProduct as Product;

/**
 * @ZephyrId MAGETWO-57191
 * @group Migation_Tool_(FAT)
 */
class NavigateGroupedProductEntityTest extends Injectable
{
    /* tags */
    const TEST_TYPE = 'data_migration_tool';
    /* end tags */

    /**
     * Run test navigate products
     *
     * @param Product $product
     * @return array
     */
    public function test(Product $product)
    {
        return ['product' => $product];
    }
}
