<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TCRInfo StructType
 * @subpackage Structs
 */
class TCRInfo extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $TCRNumber;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $ProviderReservationInfoRef;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Date = null;
    /**
     * Constructor method for TCRInfo
     * @uses TCRInfo::setStatus()
     * @uses TCRInfo::setTCRNumber()
     * @uses TCRInfo::setProviderReservationInfoRef()
     * @uses TCRInfo::setDate()
     * @param string $status
     * @param string $tCRNumber
     * @param string $providerReservationInfoRef
     * @param string $date
     */
    public function __construct(string $status, string $tCRNumber, string $providerReservationInfoRef, ?string $date = null)
    {
        $this
            ->setStatus($status)
            ->setTCRNumber($tCRNumber)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setDate($date);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Air\StructType\TCRInfo
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get TCRNumber value
     * @return string
     */
    public function getTCRNumber(): string
    {
        return $this->TCRNumber;
    }
    /**
     * Set TCRNumber value
     * @param string $tCRNumber
     * @return \Travelport\Air\StructType\TCRInfo
     */
    public function setTCRNumber(string $tCRNumber): self
    {
        $this->TCRNumber = $tCRNumber;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string
     */
    public function getProviderReservationInfoRef(): string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Air\StructType\TCRInfo
     */
    public function setProviderReservationInfoRef(string $providerReservationInfoRef): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Travelport\Air\StructType\TCRInfo
     */
    public function setDate(?string $date = null): self
    {
        $this->Date = $date;
        
        return $this;
    }
}
