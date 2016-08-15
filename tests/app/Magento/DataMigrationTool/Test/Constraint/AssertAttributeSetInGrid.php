<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\DataMigrationTool\Test\Constraint;

use Magento\DataMigrationTool\Test\Fixture\CatalogAttributeSet;
use Magento\DataMigrationTool\Test\Page\Adminhtml\CatalogProductSetIndex;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Class AssertAttributeSetInGrid
 * Checks present attribute set in Attribute Sets grid
 */
class AssertAttributeSetInGrid extends AbstractConstraint
{
    /**
     * Assert that new attribute set displays in Attribute Sets grid
     *
     * @param CatalogProductSetIndex $productSetPage
     * @param CatalogAttributeSet $attributeSet
     * @return void
     */
    public function processAssert(CatalogProductSetIndex $productSetPage, CatalogAttributeSet $attributeSet)
    {
        $filterAttributeSet = [
            'set_name' => $attributeSet->getAttributeSetName(),
        ];

        $productSetPage->open();
        \PHPUnit_Framework_Assert::assertTrue(
            $productSetPage->getGrid()->isRowVisible($filterAttributeSet),
            'Attribute Set \'' . $filterAttributeSet['set_name'] . '\' is absent in Attribute Set grid.'
        );
    }

    /**
     * Text present new attribute set in grid
     *
     * @return string
     */
    public function toString()
    {
        return 'Attribute set is present in Attribute Sets grid';
    }
}
