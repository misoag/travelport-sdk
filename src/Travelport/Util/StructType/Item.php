<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 */
class Item extends TypeReferenceData
{
    /**
     * The AdditionalElement
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AdditionalElement
     * @var \Travelport\Util\StructType\AdditionalElement[]
     */
    protected ?array $AdditionalElement = null;
    /**
     * Constructor method for Item
     * @uses Item::setAdditionalElement()
     * @param \Travelport\Util\StructType\AdditionalElement[] $additionalElement
     */
    public function __construct(?array $additionalElement = null)
    {
        $this
            ->setAdditionalElement($additionalElement);
    }
    /**
     * Get AdditionalElement value
     * @return \Travelport\Util\StructType\AdditionalElement[]
     */
    public function getAdditionalElement(): ?array
    {
        return $this->AdditionalElement;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAdditionalElement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalElement method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalElementForArrayConstraintFromSetAdditionalElement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemAdditionalElementItem) {
            // validation for constraint: itemType
            if (!$itemAdditionalElementItem instanceof \Travelport\Util\StructType\AdditionalElement) {
                $invalidValues[] = is_object($itemAdditionalElementItem) ? get_class($itemAdditionalElementItem) : sprintf('%s(%s)', gettype($itemAdditionalElementItem), var_export($itemAdditionalElementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalElement property can only contain items of type \Travelport\Util\StructType\AdditionalElement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalElement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AdditionalElement[] $additionalElement
     * @return \Travelport\Util\StructType\Item
     */
    public function setAdditionalElement(?array $additionalElement = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalElementArrayErrorMessage = self::validateAdditionalElementForArrayConstraintFromSetAdditionalElement($additionalElement))) {
            throw new InvalidArgumentException($additionalElementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($additionalElement) && count($additionalElement) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($additionalElement)), __LINE__);
        }
        $this->AdditionalElement = $additionalElement;
        
        return $this;
    }
    /**
     * Add item to AdditionalElement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AdditionalElement $item
     * @return \Travelport\Util\StructType\Item
     */
    public function addToAdditionalElement(\Travelport\Util\StructType\AdditionalElement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AdditionalElement) {
            throw new InvalidArgumentException(sprintf('The AdditionalElement property can only contain items of type \Travelport\Util\StructType\AdditionalElement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AdditionalElement) && count($this->AdditionalElement) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AdditionalElement)), __LINE__);
        }
        $this->AdditionalElement[] = $item;
        
        return $this;
    }
}
