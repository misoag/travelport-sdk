<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPricingInfoList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirSegments
 * @subpackage Structs
 */
class AirPricingInfoList extends AbstractStructBase
{
    /**
     * The AirPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfo
     * @var \Travelport\Util\StructType\AirPricingInfo[]
     */
    protected ?array $AirPricingInfo = null;
    /**
     * Constructor method for AirPricingInfoList
     * @uses AirPricingInfoList::setAirPricingInfo()
     * @param \Travelport\Util\StructType\AirPricingInfo[] $airPricingInfo
     */
    public function __construct(?array $airPricingInfo = null)
    {
        $this
            ->setAirPricingInfo($airPricingInfo);
    }
    /**
     * Get AirPricingInfo value
     * @return \Travelport\Util\StructType\AirPricingInfo[]
     */
    public function getAirPricingInfo(): ?array
    {
        return $this->AirPricingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoForArrayConstraintFromSetAirPricingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPricingInfoListAirPricingInfoItem) {
            // validation for constraint: itemType
            if (!$airPricingInfoListAirPricingInfoItem instanceof \Travelport\Util\StructType\AirPricingInfo) {
                $invalidValues[] = is_object($airPricingInfoListAirPricingInfoItem) ? get_class($airPricingInfoListAirPricingInfoItem) : sprintf('%s(%s)', gettype($airPricingInfoListAirPricingInfoItem), var_export($airPricingInfoListAirPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfo property can only contain items of type \Travelport\Util\StructType\AirPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfo[] $airPricingInfo
     * @return \Travelport\Util\StructType\AirPricingInfoList
     */
    public function setAirPricingInfo(?array $airPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoArrayErrorMessage = self::validateAirPricingInfoForArrayConstraintFromSetAirPricingInfo($airPricingInfo))) {
            throw new InvalidArgumentException($airPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfo) && count($airPricingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfo)), __LINE__);
        }
        $this->AirPricingInfo = $airPricingInfo;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirPricingInfo $item
     * @return \Travelport\Util\StructType\AirPricingInfoList
     */
    public function addToAirPricingInfo(\Travelport\Util\StructType\AirPricingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirPricingInfo) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfo property can only contain items of type \Travelport\Util\StructType\AirPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfo) && count($this->AirPricingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfo)), __LINE__);
        }
        $this->AirPricingInfo[] = $item;
        
        return $this;
    }
}
