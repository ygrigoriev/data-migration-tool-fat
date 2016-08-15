<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\DataMigrationTool\Test\Constraint;

use Magento\DataMigrationTool\Test\Fixture\Category;
use Magento\DataMigrationTool\Test\Page\Adminhtml\CatalogCategoryIndex;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Assert that not displayed category in backend catalog category tree.
 */
class AssertCategoryAbsenceOnBackend extends AbstractConstraint
{
    /**
     * Assert that not displayed category in backend catalog category tree.
     *
     * @param CatalogCategoryIndex $catalogCategoryIndex
     * @param Category $category
     * @return void
     */
    public function processAssert(CatalogCategoryIndex $catalogCategoryIndex, Category $category)
    {
        $catalogCategoryIndex->open();
        \PHPUnit_Framework_Assert::assertFalse(
            $catalogCategoryIndex->getTreeCategories()->isCategoryVisible($category),
            'Category is displayed in backend catalog category tree.'
        );
    }

    /**
     * Returns a string representation of the object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Category not displayed in backend catalog category tree.';
    }
}
