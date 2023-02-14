<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $TrainNumber;
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
    protected string $ProviderCode;
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
    protected string $SupplierCode;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity departs. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: required
     * @var string
     */
    protected string $DepartureTime;
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
    protected ?string $Origin = null;
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
    protected ?string $RailLocOrigin = null;
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
    protected ?string $Destination = null;
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
    protected ?string $RailLocDestination = null;
    /**
     * The ArrivalTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time at which this entity arrives at the destination. This does not include time zone information since it can be derived from the origin location.
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ArrivalTime = null;
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setTrainNumber(string $trainNumber): self
    {
        // validation for constraint: string
        if (!is_null($trainNumber) && !is_string($trainNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trainNumber, true), gettype($trainNumber)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($trainNumber) && mb_strlen((string) $trainNumber) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $trainNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($trainNumber) && mb_strlen((string) $trainNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $trainNumber)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setSupplierCode(string $supplierCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setDepartureTime(string $departureTime): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setRailLocOrigin(?string $railLocOrigin = null): self
    {
        // validation for constraint: string
        if (!is_null($railLocOrigin) && !is_string($railLocOrigin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railLocOrigin, true), gettype($railLocOrigin)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($railLocOrigin) && mb_strlen((string) $railLocOrigin) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $railLocOrigin)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($railLocOrigin) && mb_strlen((string) $railLocOrigin) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $railLocOrigin)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setRailLocDestination(?string $railLocDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($railLocDestination) && !is_string($railLocDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railLocDestination, true), gettype($railLocDestination)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($railLocDestination) && mb_strlen((string) $railLocDestination) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $railLocDestination)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($railLocDestination) && mb_strlen((string) $railLocDestination) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $railLocDestination)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailInfo
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        
        return $this;
    }
}
