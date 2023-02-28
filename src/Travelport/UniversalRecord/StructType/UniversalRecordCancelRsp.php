<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalRecordCancelRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Return status for each provider reservation
 * @subpackage Structs
 */
class UniversalRecordCancelRsp extends BaseRsp
{
    /**
     * The ProviderReservationStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationStatus
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationStatus[]
     */
    protected ?array $ProviderReservationStatus = null;
    /**
     * Constructor method for UniversalRecordCancelRsp
     * @uses UniversalRecordCancelRsp::setProviderReservationStatus()
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationStatus[] $providerReservationStatus
     */
    public function __construct(?array $providerReservationStatus = null)
    {
        $this
            ->setProviderReservationStatus($providerReservationStatus);
    }
    /**
     * Get ProviderReservationStatus value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationStatus[]
     */
    public function getProviderReservationStatus(): ?array
    {
        return $this->ProviderReservationStatus;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProviderReservationStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProviderReservationStatusForArrayConstraintFromSetProviderReservationStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $universalRecordCancelRspProviderReservationStatusItem) {
            // validation for constraint: itemType
            if (!$universalRecordCancelRspProviderReservationStatusItem instanceof \Travelport\UniversalRecord\StructType\ProviderReservationStatus) {
                $invalidValues[] = is_object($universalRecordCancelRspProviderReservationStatusItem) ? get_class($universalRecordCancelRspProviderReservationStatusItem) : sprintf('%s(%s)', gettype($universalRecordCancelRspProviderReservationStatusItem), var_export($universalRecordCancelRspProviderReservationStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProviderReservationStatus property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderReservationStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ProviderReservationStatus value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationStatus[] $providerReservationStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelRsp
     */
    public function setProviderReservationStatus(?array $providerReservationStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($providerReservationStatusArrayErrorMessage = self::validateProviderReservationStatusForArrayConstraintFromSetProviderReservationStatus($providerReservationStatus))) {
            throw new InvalidArgumentException($providerReservationStatusArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($providerReservationStatus) && count($providerReservationStatus) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($providerReservationStatus)), __LINE__);
        }
        $this->ProviderReservationStatus = $providerReservationStatus;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationStatus value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationStatus $item
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelRsp
     */
    public function addToProviderReservationStatus(\Travelport\UniversalRecord\StructType\ProviderReservationStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ProviderReservationStatus) {
            throw new InvalidArgumentException(sprintf('The ProviderReservationStatus property can only contain items of type \Travelport\UniversalRecord\StructType\ProviderReservationStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ProviderReservationStatus) && count($this->ProviderReservationStatus) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ProviderReservationStatus)), __LINE__);
        }
        $this->ProviderReservationStatus[] = $item;
        
        return $this;
    }
}
