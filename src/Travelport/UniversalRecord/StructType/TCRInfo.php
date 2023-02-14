<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Status;
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $TCRNumber;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $ProviderReservationInfoRef;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Date = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeTCRStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTCRStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\TCRInfo
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTCRStatus::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTCRStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTCRStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TCRInfo
     */
    public function setTCRNumber(string $tCRNumber): self
    {
        // validation for constraint: string
        if (!is_null($tCRNumber) && !is_string($tCRNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tCRNumber, true), gettype($tCRNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TCRInfo
     */
    public function setProviderReservationInfoRef(string $providerReservationInfoRef): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TCRInfo
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
}
