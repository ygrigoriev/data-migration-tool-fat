<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\DataMigrationTool\Test\TestCase\Product;

use Magento\Mtf\TestCase\Injectable;
use Magento\Catalog\Test\Fixture\CatalogProductSimple as Product;

/**
 * @ZephyrId MAGETWO-33559
 * @group Sample_Data_(MX)
 */
class NavigateSimpleProductEntityTest extends Injectable
{
    /* tags */
    const TEST_TYPE = 'migration_tool';
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
