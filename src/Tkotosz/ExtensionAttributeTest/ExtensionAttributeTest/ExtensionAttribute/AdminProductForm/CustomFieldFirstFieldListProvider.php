<?php

namespace Tkotosz\ExtensionAttributeTest\ExtensionAttribute\AdminProductForm;

use Magento\Catalog\Api\Data\ProductInterface;
use Tkotosz\ExtensionAttributeManager\Api\ProductExtensionAttribute\AdminProductForm\FieldListProviderInterface;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field\TextField;

class CustomFieldFirstFieldListProvider implements FieldListProviderInterface
{
    const FIELD_ID_CUSTOM_FIELD_FIRST =  'custom_field_first';

    /**
     * @return string
     */
    public function getFieldSetId(): string
    {
        return self::DEFAULT_GENERAL_PANEL;
    }

    /**
     * @return Field[]
     */
    public function getFieldList(): array
    {
        return [
            new TextField(
                self::FIELD_ID_CUSTOM_FIELD_FIRST,
                (string) __('Custom Field First'),
                1000
            )
        ];
    }

    /**
     * @param ProductInterface $product
     *
     * @return array field id - value pairs
     */
    public function getFieldValues(ProductInterface $product): array
    {
        return [
            self::FIELD_ID_CUSTOM_FIELD_FIRST => $product->getExtensionAttributes()->getCustomFieldFirst()
        ];
    }
}
