<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?array $ProviderReservationStatus = null;
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
     * Set ProviderReservationStatus value
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationStatus[] $providerReservationStatus
     * @return \Travelport\UniversalRecord\StructType\UniversalRecordCancelRsp
     */
    public function setProviderReservationStatus(?array $providerReservationStatus = null): self
    {
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
        $this->ProviderReservationStatus[] = $item;
        
        return $this;
    }
}
