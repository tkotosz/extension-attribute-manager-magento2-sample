<?php

namespace Tkotosz\ExtensionAttributeTest\ExtensionAttribute\AdminProductForm;

use Magento\Catalog\Api\Data\ProductInterface;
use Tkotosz\ExtensionAttributeManager\Api\ProductExtensionAttribute\AdminProductForm\FieldListProviderInterface;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field\CheckboxField;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field\MultiSelectField;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field\SelectField;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field\TextareaField;
use Tkotosz\ExtensionAttributeManager\Model\Product\Form\Field\TextField;

class CustomFieldSecondFieldListProvider implements FieldListProviderInterface
{
    const FIELD_ID_PROPERTY_FIRST = 'propery_first';
    const FIELD_ID_PROPERTY_SECOND = 'propery_second';
    const FIELD_ID_PROPERTY_THIRD = 'propery_third';
    const FIELD_ID_PROPERTY_FOURTH = 'propery_forth';
    const FIELD_ID_PROPERTY_FIFTH = 'propery_fifth';

    /**
     * @return string
     */
    public function getFieldSetId(): string
    {
        return CustomFieldSecondFieldSetProvider::CUSTOM_FIELD_SECOND_FIELDSET_ID;
    }

    /**
     * @return Field[]
     */
    public function getFieldList(): array
    {
        $secondPropertyOptions = [
            ['value' => 'a', 'label' => 'A'],
            ['value' => 'b', 'label' => 'B'],
            ['value' => 'c', 'label' => 'C']
        ];

        $fourthPropertyOptions = [
            ['value' => 'foo', 'label' => 'Foo'],
            ['value' => 'bar', 'label' => 'Bar'],
            ['value' => 'baz', 'label' => 'Baz']
        ];

        return [
            new TextField(self::FIELD_ID_PROPERTY_FIRST, 'First Property', 10, 'This is the first property!'),
            new SelectField(self::FIELD_ID_PROPERTY_SECOND, 'Second Property', $secondPropertyOptions, 20),
            new TextareaField(self::FIELD_ID_PROPERTY_THIRD, 'Third Property', 30),
            new MultiSelectField(self::FIELD_ID_PROPERTY_FOURTH, 'Fourth Property', $fourthPropertyOptions, 40),
            new CheckboxField(self::FIELD_ID_PROPERTY_FIFTH, 'Fifth Property', 50),
        ];
    }

    /**
     * @param ProductInterface $product
     *
     * @return array field id - value pairs
     */
    public function getFieldValues(ProductInterface $product): array
    {
        $customFieldSecond = $product->getExtensionAttributes()->getCustomFieldSecond();

        if ($customFieldSecond === null) {
            return [];
        }

        return [
            self::FIELD_ID_PROPERTY_FIRST => $customFieldSecond->getFirstProperty(),
            self::FIELD_ID_PROPERTY_SECOND => $customFieldSecond->getSecondProperty(),
            self::FIELD_ID_PROPERTY_THIRD => $customFieldSecond->getThirdProperty(),
            self::FIELD_ID_PROPERTY_FOURTH => $customFieldSecond->getFourthProperty(),
            self::FIELD_ID_PROPERTY_FIFTH => (int) $customFieldSecond->getFifthProperty()
        ];
    }
}
