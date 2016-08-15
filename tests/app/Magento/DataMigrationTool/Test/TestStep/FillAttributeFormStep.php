<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\DataMigrationTool\Test\TestStep;

use Magento\DataMigrationTool\Test\Fixture\CatalogProductAttribute;
use Magento\DataMigrationTool\Test\Page\Adminhtml\CatalogProductAttributeNew;
use Magento\Mtf\TestStep\TestStepInterface;

/**
 * Fill attribute form on attribute page.
 */
class FillAttributeFormStep implements TestStepInterface
{
    /**
     * CatalogProductAttribute fixture.
     *
     * @var CatalogProductAttribute
     */
    protected $attribute;

    /**
     * Catalog product attribute edit page.
     *
     * @var CatalogProductAttributeNew
     */
    protected $attributeNew;

    /**
     * @constructor
     * @param CatalogProductAttribute $productAttribute
     * @param CatalogProductAttributeNew $attributeNew
     */
    public function __construct(CatalogProductAttribute $productAttribute, CatalogProductAttributeNew $attributeNew)
    {
        $this->attribute = $productAttribute;
        $this->attributeNew = $attributeNew;
    }

    /**
     * Fill custom attribute form on attribute page.
     *
     * @return array
     */
    public function run()
    {
        $this->attributeNew->getAttributeForm()->fill($this->attribute);
        return ['attribute' => $this->attribute];
    }
}
