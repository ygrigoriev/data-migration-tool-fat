<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\DataMigrationTool\Test\Constraint;

use Magento\DataMigrationTool\Test\Fixture\CatalogProductAttribute;
use Magento\DataMigrationTool\Test\Page\Adminhtml\CatalogProductAttributeIndex;
use Magento\DataMigrationTool\Test\Page\Adminhtml\CatalogProductAttributeNew;
use Magento\Mtf\Constraint\AbstractAssertForm;

/**
 * Assert that displayed attribute data on edit page equals passed from fixture.
 */
class AssertAttributeForm extends AbstractAssertForm
{
    /**
     * Assert that displayed attribute data on edit page equals passed from fixture.
     *
     * @param CatalogProductAttributeIndex $catalogProductAttributeIndex
     * @param CatalogProductAttributeNew $catalogProductAttributeNew
     * @param CatalogProductAttribute $attribute
     * @throws \Exception
     * @return void
     */
    public function processAssert(
        CatalogProductAttributeIndex $catalogProductAttributeIndex,
        CatalogProductAttributeNew $catalogProductAttributeNew,
        CatalogProductAttribute $attribute
    ) {
        $filter = ['attribute_code' => $attribute->getAttributeCode()];
        $catalogProductAttributeIndex->open()->getGrid()->searchAndOpen($filter);

        $errors = $this->verifyData(
            $attribute->getData(),
            $catalogProductAttributeNew->getAttributeForm()->getData($attribute)
        );
        \PHPUnit_Framework_Assert::assertEmpty($errors, $errors);
    }

    /**
     * Returns string representation of object.
     *
     * @return string
     */
    public function toString()
    {
        return 'Displayed attribute data on edit page equals passed from fixture.';
    }
}
