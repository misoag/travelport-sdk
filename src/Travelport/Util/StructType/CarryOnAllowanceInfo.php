<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarryOnAllowanceInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Carry-On allowance like URL, pricing etc
 * @subpackage Structs
 */
class CarryOnAllowanceInfo extends BaseBaggageAllowanceInfo
{
    /**
     * The CarryOnDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\CarryOnDetails[]
     */
    protected ?array $CarryOnDetails = null;
    /**
     * Constructor method for CarryOnAllowanceInfo
     * @uses CarryOnAllowanceInfo::setCarryOnDetails()
     * @param \Travelport\Util\StructType\CarryOnDetails[] $carryOnDetails
     */
    public function __construct(?array $carryOnDetails = null)
    {
        $this
            ->setCarryOnDetails($carryOnDetails);
    }
    /**
     * Get CarryOnDetails value
     * @return \Travelport\Util\StructType\CarryOnDetails[]
     */
    public function getCarryOnDetails(): ?array
    {
        return $this->CarryOnDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setCarryOnDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarryOnDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarryOnDetailsForArrayConstraintsFromSetCarryOnDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $carryOnAllowanceInfoCarryOnDetailsItem) {
            // validation for constraint: itemType
            if (!$carryOnAllowanceInfoCarryOnDetailsItem instanceof \Travelport\Util\StructType\CarryOnDetails) {
                $invalidValues[] = is_object($carryOnAllowanceInfoCarryOnDetailsItem) ? get_class($carryOnAllowanceInfoCarryOnDetailsItem) : sprintf('%s(%s)', gettype($carryOnAllowanceInfoCarryOnDetailsItem), var_export($carryOnAllowanceInfoCarryOnDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CarryOnDetails property can only contain items of type \Travelport\Util\StructType\CarryOnDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CarryOnDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CarryOnDetails[] $carryOnDetails
     * @return \Travelport\Util\StructType\CarryOnAllowanceInfo
     */
    public function setCarryOnDetails(?array $carryOnDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($carryOnDetailsArrayErrorMessage = self::validateCarryOnDetailsForArrayConstraintsFromSetCarryOnDetails($carryOnDetails))) {
            throw new InvalidArgumentException($carryOnDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($carryOnDetails) && count($carryOnDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($carryOnDetails)), __LINE__);
        }
        $this->CarryOnDetails = $carryOnDetails;
        
        return $this;
    }
    /**
     * Add item to CarryOnDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CarryOnDetails $item
     * @return \Travelport\Util\StructType\CarryOnAllowanceInfo
     */
    public function addToCarryOnDetails(\Travelport\Util\StructType\CarryOnDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CarryOnDetails) {
            throw new InvalidArgumentException(sprintf('The CarryOnDetails property can only contain items of type \Travelport\Util\StructType\CarryOnDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CarryOnDetails) && count($this->CarryOnDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CarryOnDetails)), __LINE__);
        }
        $this->CarryOnDetails[] = $item;
        
        return $this;
    }
}
