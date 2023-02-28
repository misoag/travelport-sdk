<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeProviderReservationSpecificInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with LoyaltyCard. | Cross accrual carrier info
 * @subpackage Structs
 */
class TypeProviderReservationSpecificInfo extends AbstractStructBase
{
    /**
     * The OperatedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: OperatedBy
     * @var \Travelport\Util\StructType\OperatedBy[]
     */
    protected ?array $OperatedBy = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\Util\StructType\ProviderReservationInfoRef|null
     */
    protected ?\Travelport\Util\StructType\ProviderReservationInfoRef $ProviderReservationInfoRef = null;
    /**
     * The ProviderReservationLevel
     * Meta information extracted from the WSDL
     * - documentation: If true means Loyalty card is applied at ProviderReservation level.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProviderReservationLevel = null;
    /**
     * The ReservationLevel
     * Meta information extracted from the WSDL
     * - documentation: If true means Loyalty card is applied at Universal Record Reservation level e.g. Hotel Reservation, Vehicle Reservation etc.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReservationLevel = null;
    /**
     * Constructor method for typeProviderReservationSpecificInfo
     * @uses TypeProviderReservationSpecificInfo::setOperatedBy()
     * @uses TypeProviderReservationSpecificInfo::setProviderReservationInfoRef()
     * @uses TypeProviderReservationSpecificInfo::setProviderReservationLevel()
     * @uses TypeProviderReservationSpecificInfo::setReservationLevel()
     * @param \Travelport\Util\StructType\OperatedBy[] $operatedBy
     * @param \Travelport\Util\StructType\ProviderReservationInfoRef $providerReservationInfoRef
     * @param bool $providerReservationLevel
     * @param bool $reservationLevel
     */
    public function __construct(?array $operatedBy = null, ?\Travelport\Util\StructType\ProviderReservationInfoRef $providerReservationInfoRef = null, ?bool $providerReservationLevel = null, ?bool $reservationLevel = null)
    {
        $this
            ->setOperatedBy($operatedBy)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderReservationLevel($providerReservationLevel)
            ->setReservationLevel($reservationLevel);
    }
    /**
     * Get OperatedBy value
     * @return \Travelport\Util\StructType\OperatedBy[]
     */
    public function getOperatedBy(): ?array
    {
        return $this->OperatedBy;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOperatedBy method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOperatedBy method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOperatedByForArrayConstraintFromSetOperatedBy(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeProviderReservationSpecificInfoOperatedByItem) {
            // validation for constraint: itemType
            if (!$typeProviderReservationSpecificInfoOperatedByItem instanceof \Travelport\Util\StructType\OperatedBy) {
                $invalidValues[] = is_object($typeProviderReservationSpecificInfoOperatedByItem) ? get_class($typeProviderReservationSpecificInfoOperatedByItem) : sprintf('%s(%s)', gettype($typeProviderReservationSpecificInfoOperatedByItem), var_export($typeProviderReservationSpecificInfoOperatedByItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OperatedBy property can only contain items of type \Travelport\Util\StructType\OperatedBy, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OperatedBy value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\OperatedBy[] $operatedBy
     * @return \Travelport\Util\StructType\TypeProviderReservationSpecificInfo
     */
    public function setOperatedBy(?array $operatedBy = null): self
    {
        // validation for constraint: array
        if ('' !== ($operatedByArrayErrorMessage = self::validateOperatedByForArrayConstraintFromSetOperatedBy($operatedBy))) {
            throw new InvalidArgumentException($operatedByArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($operatedBy) && count($operatedBy) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($operatedBy)), __LINE__);
        }
        $this->OperatedBy = $operatedBy;
        
        return $this;
    }
    /**
     * Add item to OperatedBy value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\OperatedBy $item
     * @return \Travelport\Util\StructType\TypeProviderReservationSpecificInfo
     */
    public function addToOperatedBy(\Travelport\Util\StructType\OperatedBy $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\OperatedBy) {
            throw new InvalidArgumentException(sprintf('The OperatedBy property can only contain items of type \Travelport\Util\StructType\OperatedBy, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OperatedBy) && count($this->OperatedBy) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OperatedBy)), __LINE__);
        }
        $this->OperatedBy[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Util\StructType\ProviderReservationInfoRef|null
     */
    public function getProviderReservationInfoRef(): ?\Travelport\Util\StructType\ProviderReservationInfoRef
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\Util\StructType\ProviderReservationInfoRef $providerReservationInfoRef
     * @return \Travelport\Util\StructType\TypeProviderReservationSpecificInfo
     */
    public function setProviderReservationInfoRef(?\Travelport\Util\StructType\ProviderReservationInfoRef $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get ProviderReservationLevel value
     * @return bool|null
     */
    public function getProviderReservationLevel(): ?bool
    {
        return $this->ProviderReservationLevel;
    }
    /**
     * Set ProviderReservationLevel value
     * @param bool $providerReservationLevel
     * @return \Travelport\Util\StructType\TypeProviderReservationSpecificInfo
     */
    public function setProviderReservationLevel(?bool $providerReservationLevel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($providerReservationLevel) && !is_bool($providerReservationLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($providerReservationLevel, true), gettype($providerReservationLevel)), __LINE__);
        }
        $this->ProviderReservationLevel = $providerReservationLevel;
        
        return $this;
    }
    /**
     * Get ReservationLevel value
     * @return bool|null
     */
    public function getReservationLevel(): ?bool
    {
        return $this->ReservationLevel;
    }
    /**
     * Set ReservationLevel value
     * @param bool $reservationLevel
     * @return \Travelport\Util\StructType\TypeProviderReservationSpecificInfo
     */
    public function setReservationLevel(?bool $reservationLevel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reservationLevel) && !is_bool($reservationLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reservationLevel, true), gettype($reservationLevel)), __LINE__);
        }
        $this->ReservationLevel = $reservationLevel;
        
        return $this;
    }
}
