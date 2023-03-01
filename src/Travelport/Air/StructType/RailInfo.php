<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Journey Origin/Destination/Date-Time. | Container for rail-related information required for retrieving a rail seat map/coach map
 * @subpackage Structs
 */
class RailInfo extends AbstractStructBase
{
    /**
     * The TrainNumber
     * Meta information extracted from the WSDL
     * - documentation: The number that this train route operates under
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $TrainNumber;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $SupplierCode;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: required
     * @var string
     */
    public string $DepartureTime;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this origination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - type: common:typeIATACode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Origin = null;
    /**
     * The RailLocOrigin
     * Meta information extracted from the WSDL
     * - documentation: RCH specific origin code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - type: common:typeRailLocationCode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $RailLocOrigin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: The IATA location code for this destination of this entity. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - type: common:typeIATACode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $Destination = null;
    /**
     * The RailLocDestination
     * Meta information extracted from the WSDL
     * - documentation: RCH specific destination code (a.k.a UCodes) which uniquely identifies a train station. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - type: common:typeRailLocationCode
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $RailLocDestination = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ArrivalTime = null;
    /**
     * Constructor method for RailInfo
     * @uses RailInfo::setTrainNumber()
     * @uses RailInfo::setProviderCode()
     * @uses RailInfo::setSupplierCode()
     * @uses RailInfo::setDepartureTime()
     * @uses RailInfo::setOrigin()
     * @uses RailInfo::setRailLocOrigin()
     * @uses RailInfo::setDestination()
     * @uses RailInfo::setRailLocDestination()
     * @uses RailInfo::setArrivalTime()
     * @param string $trainNumber
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $departureTime
     * @param string $origin
     * @param string $railLocOrigin
     * @param string $destination
     * @param string $railLocDestination
     * @param string $arrivalTime
     */
    public function __construct(string $trainNumber, string $providerCode, string $supplierCode, string $departureTime, ?string $origin = null, ?string $railLocOrigin = null, ?string $destination = null, ?string $railLocDestination = null, ?string $arrivalTime = null)
    {
        $this
            ->setTrainNumber($trainNumber)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setDepartureTime($departureTime)
            ->setOrigin($origin)
            ->setRailLocOrigin($railLocOrigin)
            ->setDestination($destination)
            ->setRailLocDestination($railLocDestination)
            ->setArrivalTime($arrivalTime);
    }
    /**
     * Get TrainNumber value
     * @return string
     */
    public function getTrainNumber(): string
    {
        return $this->TrainNumber;
    }
    /**
     * Set TrainNumber value
     * @param string $trainNumber
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setTrainNumber(string $trainNumber): self
    {
        $this->TrainNumber = $trainNumber;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string
     */
    public function getDepartureTime(): string
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setDepartureTime(string $departureTime): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setOrigin(?string $origin = null): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get RailLocOrigin value
     * @return string|null
     */
    public function getRailLocOrigin(): ?string
    {
        return $this->RailLocOrigin;
    }
    /**
     * Set RailLocOrigin value
     * @param string $railLocOrigin
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setRailLocOrigin(?string $railLocOrigin = null): self
    {
        $this->RailLocOrigin = $railLocOrigin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setDestination(?string $destination = null): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get RailLocDestination value
     * @return string|null
     */
    public function getRailLocDestination(): ?string
    {
        return $this->RailLocDestination;
    }
    /**
     * Set RailLocDestination value
     * @param string $railLocDestination
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setRailLocDestination(?string $railLocDestination = null): self
    {
        $this->RailLocDestination = $railLocDestination;
        
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Travelport\Air\StructType\RailInfo
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
}
