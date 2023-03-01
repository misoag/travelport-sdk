<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\OperatedBy[]
     */
    public ?array $OperatedBy = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\Hotel\StructType\ProviderReservationInfoRef|null
     */
    public ?\Travelport\Hotel\StructType\ProviderReservationInfoRef $ProviderReservationInfoRef = null;
    /**
     * The ProviderReservationLevel
     * Meta information extracted from the WSDL
     * - documentation: If true means Loyalty card is applied at ProviderReservation level.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProviderReservationLevel = null;
    /**
     * The ReservationLevel
     * Meta information extracted from the WSDL
     * - documentation: If true means Loyalty card is applied at Universal Record Reservation level e.g. Hotel Reservation, Vehicle Reservation etc.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReservationLevel = null;
    /**
     * Constructor method for typeProviderReservationSpecificInfo
     * @uses TypeProviderReservationSpecificInfo::setOperatedBy()
     * @uses TypeProviderReservationSpecificInfo::setProviderReservationInfoRef()
     * @uses TypeProviderReservationSpecificInfo::setProviderReservationLevel()
     * @uses TypeProviderReservationSpecificInfo::setReservationLevel()
     * @param \Travelport\Hotel\StructType\OperatedBy[] $operatedBy
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef $providerReservationInfoRef
     * @param bool $providerReservationLevel
     * @param bool $reservationLevel
     */
    public function __construct(?array $operatedBy = null, ?\Travelport\Hotel\StructType\ProviderReservationInfoRef $providerReservationInfoRef = null, ?bool $providerReservationLevel = null, ?bool $reservationLevel = null)
    {
        $this
            ->setOperatedBy($operatedBy)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderReservationLevel($providerReservationLevel)
            ->setReservationLevel($reservationLevel);
    }
    /**
     * Get OperatedBy value
     * @return \Travelport\Hotel\StructType\OperatedBy[]
     */
    public function getOperatedBy(): ?array
    {
        return $this->OperatedBy;
    }
    /**
     * Set OperatedBy value
     * @param \Travelport\Hotel\StructType\OperatedBy[] $operatedBy
     * @return \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo
     */
    public function setOperatedBy(?array $operatedBy = null): self
    {
        $this->OperatedBy = $operatedBy;
        
        return $this;
    }
    /**
     * Add item to OperatedBy value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\OperatedBy $item
     * @return \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo
     */
    public function addToOperatedBy(\Travelport\Hotel\StructType\OperatedBy $item): self
    {
        $this->OperatedBy[] = $item;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\Hotel\StructType\ProviderReservationInfoRef|null
     */
    public function getProviderReservationInfoRef(): ?\Travelport\Hotel\StructType\ProviderReservationInfoRef
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\Hotel\StructType\ProviderReservationInfoRef $providerReservationInfoRef
     * @return \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo
     */
    public function setProviderReservationInfoRef(?\Travelport\Hotel\StructType\ProviderReservationInfoRef $providerReservationInfoRef = null): self
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
     * @return \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo
     */
    public function setProviderReservationLevel(?bool $providerReservationLevel = null): self
    {
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
     * @return \Travelport\Hotel\StructType\TypeProviderReservationSpecificInfo
     */
    public function setReservationLevel(?bool $reservationLevel = null): self
    {
        $this->ReservationLevel = $reservationLevel;
        
        return $this;
    }
}
