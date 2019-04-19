<?php

namespace Tkotosz\ExtensionAttributeTest\ExtensionAttribute;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Tkotosz\ExtensionAttributeManager\Api\ProductExtensionAttribute\ManagerInterface;
use Tkotosz\ExtensionAttributeTest\Model\CustomFieldSecond;

class CustomFieldSecondManager implements ManagerInterface
{
    public function onGetProduct(ProductInterface $product)
    {
        // TODO: Implement onGetProduct() method.
        $customFieldSecond = CustomFieldSecond::create(
            'some text',
            'b',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ['foo', 'baz'],
            true
        );

        $product->getExtensionAttributes()->setCustomFieldSecond($customFieldSecond);
    }

    public function onGetProductList(SearchResultsInterface $productSearchResults)
    {
        // TODO: Implement onGetProductList() method.
    }

    public function onSaveProduct(ProductInterface $product)
    {
        // TODO: Implement onSaveProduct() method.
    }

    public function onDeleteProduct(ProductInterface $product)
    {
        // TODO: Implement onDeleteProduct() method.
    }

    public function onSaveProductInAdmin(ProductInterface $product, array $formData)
    {
        // TODO: Implement onSaveProductInAdmin() method.
        var_dump($formData); die;
    }
}
