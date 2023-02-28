<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDisplayDetailsRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to display the addtional details of provider reservation information .
 * @subpackage Structs
 */
class ProviderReservationDisplayDetailsRsp extends BaseRsp
{
    /**
     * The DisplayDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: DisplayDetails
     * @var \Travelport\UniversalRecord\StructType\DisplayDetails[]
     */
    protected ?array $DisplayDetails = null;
    /**
     * Constructor method for ProviderReservationDisplayDetailsRsp
     * @uses ProviderReservationDisplayDetailsRsp::setDisplayDetails()
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails[] $displayDetails
     */
    public function __construct(?array $displayDetails = null)
    {
        $this
            ->setDisplayDetails($displayDetails);
    }
    /**
     * Get DisplayDetails value
     * @return \Travelport\UniversalRecord\StructType\DisplayDetails[]
     */
    public function getDisplayDetails(): ?array
    {
        return $this->DisplayDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDisplayDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisplayDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisplayDetailsForArrayConstraintFromSetDisplayDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $providerReservationDisplayDetailsRspDisplayDetailsItem) {
            // validation for constraint: itemType
            if (!$providerReservationDisplayDetailsRspDisplayDetailsItem instanceof \Travelport\UniversalRecord\StructType\DisplayDetails) {
                $invalidValues[] = is_object($providerReservationDisplayDetailsRspDisplayDetailsItem) ? get_class($providerReservationDisplayDetailsRspDisplayDetailsItem) : sprintf('%s(%s)', gettype($providerReservationDisplayDetailsRspDisplayDetailsItem), var_export($providerReservationDisplayDetailsRspDisplayDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisplayDetails property can only contain items of type \Travelport\UniversalRecord\StructType\DisplayDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DisplayDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails[] $displayDetails
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsRsp
     */
    public function setDisplayDetails(?array $displayDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($displayDetailsArrayErrorMessage = self::validateDisplayDetailsForArrayConstraintFromSetDisplayDetails($displayDetails))) {
            throw new InvalidArgumentException($displayDetailsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($displayDetails) && count($displayDetails) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($displayDetails)), __LINE__);
        }
        $this->DisplayDetails = $displayDetails;
        
        return $this;
    }
    /**
     * Add item to DisplayDetails value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\DisplayDetails $item
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsRsp
     */
    public function addToDisplayDetails(\Travelport\UniversalRecord\StructType\DisplayDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\DisplayDetails) {
            throw new InvalidArgumentException(sprintf('The DisplayDetails property can only contain items of type \Travelport\UniversalRecord\StructType\DisplayDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->DisplayDetails) && count($this->DisplayDetails) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->DisplayDetails)), __LINE__);
        }
        $this->DisplayDetails[] = $item;
        
        return $this;
    }
}
