<?php

namespace Tkotosz\ExtensionAttributeTest\ExtensionAttribute\AdminProductForm;

use Tkotosz\ExtensionAttributeManager\Api\ProductExtensionAttribute\AdminProductForm\FieldSetProviderInterface;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\FieldSet;

class CustomFieldSecondFieldSetProvider implements FieldSetProviderInterface
{
    public const CUSTOM_FIELD_SECOND_FIELDSET_ID = 'custom_field_second';

    public function getFieldSet(): FieldSet
    {
        return new FieldSet(self::CUSTOM_FIELD_SECOND_FIELDSET_ID, 'Custom Field Second');
    }
}
