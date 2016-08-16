<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\DataMigrationTool\Test\Constraint;

//use Magento\Catalog\Test\Page\Adminhtml\CatalogProductEdit;
//use Magento\Catalog\Test\Page\Adminhtml\CatalogProductIndex;
//use Magento\Mtf\Fixture\FixtureInterface;

//use Magento\DataMigrationTool\Test\Page\Adminhtml\MigrationProductEdit;
use Magento\Catalog\Test\Constraint\AssertProductForm as AsertProductFormCatalog;

/**
 * Class AssertProductForm
 */
class AssertProductForm extends AsertProductFormCatalog
{
    /**
     * @var MigrationProductEdit
     */
    protected $migrationProductEdit;
//
//    public function __construct(MigrationProductEdit $migrationProductEdit) {
//        $this->migrationProductEdit = $migrationProductEdit;
//    }

    /**
     * Assert form data equals fixture data
     *
     * @param FixtureInterface $product
     * @param CatalogProductIndex $productGrid
     * @param CatalogProductEdit $productPage
     * @param MigrationProductEdit $migrationProductEdit
     * @return void
     */
//    public function processAssert(
//        FixtureInterface $product,
//        CatalogProductIndex $productGrid,
//        CatalogProductEdit $productPage,
//        MigrationProductEdit $migrationProductEdit
//    ) {
//        $filter = ['sku' => $product->getSku()];
//
//        $productGrid->open();
//        $productGrid->getProductGrid()->searchAndOpen($filter);
//
//        $productData = $product->getData();
//        if ($product->hasData('custom_options')) {
//            $customOptionsSource = $product->getDataFieldConfig('custom_options')['source'];
//            $productData['custom_options'] = $customOptionsSource->getCustomOptions();
//        }
//        $fixtureData = $this->prepareFixtureData($productData, $this->sortFields);
//        // inject MigrationProductEdit instead of CatalogProductEdit for using not Default attribute set
//        $formData = $this->prepareFormData(
//            $migrationProductEdit->getProductForm()->getData($product),
//            $this->sortFields
//        );
//        $error = $this->verifyData($fixtureData, $formData);
//        \PHPUnit_Framework_Assert::assertTrue(empty($error), $error);
//    }

    /**
     * @return MigrationProductEdit
     */
//    private function getMigrationProductEdit(MigrationProductEdit $migrationProductEdit)
//    {
//        $this->migrationProductEdit = $migrationProductEdit;
//        return $this->migrationProductEdit;
//    }
}
