<?php

namespace Tkotosz\ExtensionAttributeTest\ExtensionAttribute;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Tkotosz\ExtensionAttributeManager\Api\ProductExtensionAttribute\ManagerInterface;

class CustomFieldFirstManager implements ManagerInterface
{
    public function onGetProduct(ProductInterface $product)
    {
        // TODO: Implement onGetProduct() method.
        $product->getExtensionAttributes()->setCustomFieldFirst('some data');
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
    }
}
