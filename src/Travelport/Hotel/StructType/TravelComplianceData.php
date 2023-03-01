<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelComplianceData StructType
 * Meta information extracted from the WSDL
 * - documentation: Travel Compliance and Preferred Supplier information of the traveler specific to a segment.
 * @subpackage Structs
 */
class TravelComplianceData extends AbstractStructBase
{
    /**
     * The PolicyCompliance
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\PolicyCompliance[]
     */
    public ?array $PolicyCompliance = null;
    /**
     * The ContractCompliance
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ContractCompliance[]
     */
    public ?array $ContractCompliance = null;
    /**
     * The PreferredSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\PreferredSupplier[]
     */
    public ?array $PreferredSupplier = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated key, returned back in the response. This can be used to modify or delete a saved TravelComplianceData. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Refers to Air Segment. Applicable only for Air. Ignored for others. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $AirSegmentRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Refers to Passive Segment. Applicable only for Passive. Ignored for others. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PassiveSegmentRef = null;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Refers to Rail Segment. Applicable only for Rail. Ignored for others. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RailSegmentRef = null;
    /**
     * The ReservationLocatorRef
     * Meta information extracted from the WSDL
     * - documentation: This is returned in the response. Any input will be ignored for this attribute. This represents the association of Travel Compliance Data with the uAPI reservation locator code, mainly relevant to Hotel and Vehicle. | A Locator Code
     * that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $ReservationLocatorRef = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for TravelComplianceData
     * @uses TravelComplianceData::setPolicyCompliance()
     * @uses TravelComplianceData::setContractCompliance()
     * @uses TravelComplianceData::setPreferredSupplier()
     * @uses TravelComplianceData::setKey()
     * @uses TravelComplianceData::setAirSegmentRef()
     * @uses TravelComplianceData::setPassiveSegmentRef()
     * @uses TravelComplianceData::setRailSegmentRef()
     * @uses TravelComplianceData::setReservationLocatorRef()
     * @uses TravelComplianceData::setElStat()
     * @uses TravelComplianceData::setKeyOverride()
     * @param \Travelport\Hotel\StructType\PolicyCompliance[] $policyCompliance
     * @param \Travelport\Hotel\StructType\ContractCompliance[] $contractCompliance
     * @param \Travelport\Hotel\StructType\PreferredSupplier[] $preferredSupplier
     * @param string $key
     * @param string $airSegmentRef
     * @param string $passiveSegmentRef
     * @param string $railSegmentRef
     * @param string $reservationLocatorRef
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?array $policyCompliance = null, ?array $contractCompliance = null, ?array $preferredSupplier = null, ?string $key = null, ?string $airSegmentRef = null, ?string $passiveSegmentRef = null, ?string $railSegmentRef = null, ?string $reservationLocatorRef = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setPolicyCompliance($policyCompliance)
            ->setContractCompliance($contractCompliance)
            ->setPreferredSupplier($preferredSupplier)
            ->setKey($key)
            ->setAirSegmentRef($airSegmentRef)
            ->setPassiveSegmentRef($passiveSegmentRef)
            ->setRailSegmentRef($railSegmentRef)
            ->setReservationLocatorRef($reservationLocatorRef)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get PolicyCompliance value
     * @return \Travelport\Hotel\StructType\PolicyCompliance[]
     */
    public function getPolicyCompliance(): ?array
    {
        return $this->PolicyCompliance;
    }
    /**
     * Set PolicyCompliance value
     * @param \Travelport\Hotel\StructType\PolicyCompliance[] $policyCompliance
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setPolicyCompliance(?array $policyCompliance = null): self
    {
        $this->PolicyCompliance = $policyCompliance;
        
        return $this;
    }
    /**
     * Add item to PolicyCompliance value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PolicyCompliance $item
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function addToPolicyCompliance(\Travelport\Hotel\StructType\PolicyCompliance $item): self
    {
        $this->PolicyCompliance[] = $item;
        
        return $this;
    }
    /**
     * Get ContractCompliance value
     * @return \Travelport\Hotel\StructType\ContractCompliance[]
     */
    public function getContractCompliance(): ?array
    {
        return $this->ContractCompliance;
    }
    /**
     * Set ContractCompliance value
     * @param \Travelport\Hotel\StructType\ContractCompliance[] $contractCompliance
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setContractCompliance(?array $contractCompliance = null): self
    {
        $this->ContractCompliance = $contractCompliance;
        
        return $this;
    }
    /**
     * Add item to ContractCompliance value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ContractCompliance $item
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function addToContractCompliance(\Travelport\Hotel\StructType\ContractCompliance $item): self
    {
        $this->ContractCompliance[] = $item;
        
        return $this;
    }
    /**
     * Get PreferredSupplier value
     * @return \Travelport\Hotel\StructType\PreferredSupplier[]
     */
    public function getPreferredSupplier(): ?array
    {
        return $this->PreferredSupplier;
    }
    /**
     * Set PreferredSupplier value
     * @param \Travelport\Hotel\StructType\PreferredSupplier[] $preferredSupplier
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setPreferredSupplier(?array $preferredSupplier = null): self
    {
        $this->PreferredSupplier = $preferredSupplier;
        
        return $this;
    }
    /**
     * Add item to PreferredSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PreferredSupplier $item
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function addToPreferredSupplier(\Travelport\Hotel\StructType\PreferredSupplier $item): self
    {
        $this->PreferredSupplier[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get AirSegmentRef value
     * @return string|null
     */
    public function getAirSegmentRef(): ?string
    {
        return $this->AirSegmentRef;
    }
    /**
     * Set AirSegmentRef value
     * @param string $airSegmentRef
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        $this->AirSegmentRef = $airSegmentRef;
        
        return $this;
    }
    /**
     * Get PassiveSegmentRef value
     * @return string|null
     */
    public function getPassiveSegmentRef(): ?string
    {
        return $this->PassiveSegmentRef;
    }
    /**
     * Set PassiveSegmentRef value
     * @param string $passiveSegmentRef
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setPassiveSegmentRef(?string $passiveSegmentRef = null): self
    {
        $this->PassiveSegmentRef = $passiveSegmentRef;
        
        return $this;
    }
    /**
     * Get RailSegmentRef value
     * @return string|null
     */
    public function getRailSegmentRef(): ?string
    {
        return $this->RailSegmentRef;
    }
    /**
     * Set RailSegmentRef value
     * @param string $railSegmentRef
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setRailSegmentRef(?string $railSegmentRef = null): self
    {
        $this->RailSegmentRef = $railSegmentRef;
        
        return $this;
    }
    /**
     * Get ReservationLocatorRef value
     * @return string|null
     */
    public function getReservationLocatorRef(): ?string
    {
        return $this->ReservationLocatorRef;
    }
    /**
     * Set ReservationLocatorRef value
     * @param string $reservationLocatorRef
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setReservationLocatorRef(?string $reservationLocatorRef = null): self
    {
        $this->ReservationLocatorRef = $reservationLocatorRef;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Hotel\StructType\TravelComplianceData
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
