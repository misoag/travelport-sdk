<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestReferenceDataItem StructType
 * Meta information extracted from the WSDL
 * - documentation: Limits the responses to the requested subcategories for a specific Reference Data Type, Currently supported only for @TypeCode="HotelAmenities".
 * @subpackage Structs
 */
class RequestReferenceDataItem extends AbstractStructBase
{
    /**
     * The RequestAmenity
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\RequestAmenity[]
     */
    protected ?array $RequestAmenity = null;
    /**
     * Constructor method for RequestReferenceDataItem
     * @uses RequestReferenceDataItem::setRequestAmenity()
     * @param \Travelport\Util\StructType\RequestAmenity[] $requestAmenity
     */
    public function __construct(?array $requestAmenity = null)
    {
        $this
            ->setRequestAmenity($requestAmenity);
    }
    /**
     * Get RequestAmenity value
     * @return \Travelport\Util\StructType\RequestAmenity[]
     */
    public function getRequestAmenity(): ?array
    {
        return $this->RequestAmenity;
    }
    /**
     * This method is responsible for validating the values passed to the setRequestAmenity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRequestAmenity method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRequestAmenityForArrayConstraintsFromSetRequestAmenity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $requestReferenceDataItemRequestAmenityItem) {
            // validation for constraint: itemType
            if (!$requestReferenceDataItemRequestAmenityItem instanceof \Travelport\Util\StructType\RequestAmenity) {
                $invalidValues[] = is_object($requestReferenceDataItemRequestAmenityItem) ? get_class($requestReferenceDataItemRequestAmenityItem) : sprintf('%s(%s)', gettype($requestReferenceDataItemRequestAmenityItem), var_export($requestReferenceDataItemRequestAmenityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RequestAmenity property can only contain items of type \Travelport\Util\StructType\RequestAmenity, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RequestAmenity value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\RequestAmenity[] $requestAmenity
     * @return \Travelport\Util\StructType\RequestReferenceDataItem
     */
    public function setRequestAmenity(?array $requestAmenity = null): self
    {
        // validation for constraint: array
        if ('' !== ($requestAmenityArrayErrorMessage = self::validateRequestAmenityForArrayConstraintsFromSetRequestAmenity($requestAmenity))) {
            throw new InvalidArgumentException($requestAmenityArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($requestAmenity) && count($requestAmenity) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($requestAmenity)), __LINE__);
        }
        $this->RequestAmenity = $requestAmenity;
        
        return $this;
    }
    /**
     * Add item to RequestAmenity value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\RequestAmenity $item
     * @return \Travelport\Util\StructType\RequestReferenceDataItem
     */
    public function addToRequestAmenity(\Travelport\Util\StructType\RequestAmenity $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\RequestAmenity) {
            throw new InvalidArgumentException(sprintf('The RequestAmenity property can only contain items of type \Travelport\Util\StructType\RequestAmenity, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->RequestAmenity) && count($this->RequestAmenity) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->RequestAmenity)), __LINE__);
        }
        $this->RequestAmenity[] = $item;
        
        return $this;
    }
}
