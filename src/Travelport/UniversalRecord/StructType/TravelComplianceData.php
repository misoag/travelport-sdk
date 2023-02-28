<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\PolicyCompliance[]
     */
    protected ?array $PolicyCompliance = null;
    /**
     * The ContractCompliance
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ContractCompliance[]
     */
    protected ?array $ContractCompliance = null;
    /**
     * The PreferredSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PreferredSupplier[]
     */
    protected ?array $PreferredSupplier = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated key, returned back in the response. This can be used to modify or delete a saved TravelComplianceData. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The AirSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Refers to Air Segment. Applicable only for Air. Ignored for others. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $AirSegmentRef = null;
    /**
     * The PassiveSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Refers to Passive Segment. Applicable only for Passive. Ignored for others. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $PassiveSegmentRef = null;
    /**
     * The RailSegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Refers to Rail Segment. Applicable only for Rail. Ignored for others. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RailSegmentRef = null;
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
    protected ?string $ReservationLocatorRef = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\UniversalRecord\StructType\PolicyCompliance[] $policyCompliance
     * @param \Travelport\UniversalRecord\StructType\ContractCompliance[] $contractCompliance
     * @param \Travelport\UniversalRecord\StructType\PreferredSupplier[] $preferredSupplier
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
     * @return \Travelport\UniversalRecord\StructType\PolicyCompliance[]
     */
    public function getPolicyCompliance(): ?array
    {
        return $this->PolicyCompliance;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPolicyCompliance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyCompliance method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyComplianceForArrayConstraintFromSetPolicyCompliance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $travelComplianceDataPolicyComplianceItem) {
            // validation for constraint: itemType
            if (!$travelComplianceDataPolicyComplianceItem instanceof \Travelport\UniversalRecord\StructType\PolicyCompliance) {
                $invalidValues[] = is_object($travelComplianceDataPolicyComplianceItem) ? get_class($travelComplianceDataPolicyComplianceItem) : sprintf('%s(%s)', gettype($travelComplianceDataPolicyComplianceItem), var_export($travelComplianceDataPolicyComplianceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyCompliance property can only contain items of type \Travelport\UniversalRecord\StructType\PolicyCompliance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PolicyCompliance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PolicyCompliance[] $policyCompliance
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setPolicyCompliance(?array $policyCompliance = null): self
    {
        // validation for constraint: array
        if ('' !== ($policyComplianceArrayErrorMessage = self::validatePolicyComplianceForArrayConstraintFromSetPolicyCompliance($policyCompliance))) {
            throw new InvalidArgumentException($policyComplianceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($policyCompliance) && count($policyCompliance) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($policyCompliance)), __LINE__);
        }
        $this->PolicyCompliance = $policyCompliance;
        
        return $this;
    }
    /**
     * Add item to PolicyCompliance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PolicyCompliance $item
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function addToPolicyCompliance(\Travelport\UniversalRecord\StructType\PolicyCompliance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PolicyCompliance) {
            throw new InvalidArgumentException(sprintf('The PolicyCompliance property can only contain items of type \Travelport\UniversalRecord\StructType\PolicyCompliance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->PolicyCompliance) && count($this->PolicyCompliance) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->PolicyCompliance)), __LINE__);
        }
        $this->PolicyCompliance[] = $item;
        
        return $this;
    }
    /**
     * Get ContractCompliance value
     * @return \Travelport\UniversalRecord\StructType\ContractCompliance[]
     */
    public function getContractCompliance(): ?array
    {
        return $this->ContractCompliance;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setContractCompliance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContractCompliance method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContractComplianceForArrayConstraintFromSetContractCompliance(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $travelComplianceDataContractComplianceItem) {
            // validation for constraint: itemType
            if (!$travelComplianceDataContractComplianceItem instanceof \Travelport\UniversalRecord\StructType\ContractCompliance) {
                $invalidValues[] = is_object($travelComplianceDataContractComplianceItem) ? get_class($travelComplianceDataContractComplianceItem) : sprintf('%s(%s)', gettype($travelComplianceDataContractComplianceItem), var_export($travelComplianceDataContractComplianceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContractCompliance property can only contain items of type \Travelport\UniversalRecord\StructType\ContractCompliance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContractCompliance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContractCompliance[] $contractCompliance
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setContractCompliance(?array $contractCompliance = null): self
    {
        // validation for constraint: array
        if ('' !== ($contractComplianceArrayErrorMessage = self::validateContractComplianceForArrayConstraintFromSetContractCompliance($contractCompliance))) {
            throw new InvalidArgumentException($contractComplianceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($contractCompliance) && count($contractCompliance) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($contractCompliance)), __LINE__);
        }
        $this->ContractCompliance = $contractCompliance;
        
        return $this;
    }
    /**
     * Add item to ContractCompliance value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContractCompliance $item
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function addToContractCompliance(\Travelport\UniversalRecord\StructType\ContractCompliance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ContractCompliance) {
            throw new InvalidArgumentException(sprintf('The ContractCompliance property can only contain items of type \Travelport\UniversalRecord\StructType\ContractCompliance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->ContractCompliance) && count($this->ContractCompliance) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->ContractCompliance)), __LINE__);
        }
        $this->ContractCompliance[] = $item;
        
        return $this;
    }
    /**
     * Get PreferredSupplier value
     * @return \Travelport\UniversalRecord\StructType\PreferredSupplier[]
     */
    public function getPreferredSupplier(): ?array
    {
        return $this->PreferredSupplier;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPreferredSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreferredSupplier method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferredSupplierForArrayConstraintFromSetPreferredSupplier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $travelComplianceDataPreferredSupplierItem) {
            // validation for constraint: itemType
            if (!$travelComplianceDataPreferredSupplierItem instanceof \Travelport\UniversalRecord\StructType\PreferredSupplier) {
                $invalidValues[] = is_object($travelComplianceDataPreferredSupplierItem) ? get_class($travelComplianceDataPreferredSupplierItem) : sprintf('%s(%s)', gettype($travelComplianceDataPreferredSupplierItem), var_export($travelComplianceDataPreferredSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PreferredSupplier property can only contain items of type \Travelport\UniversalRecord\StructType\PreferredSupplier, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PreferredSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PreferredSupplier[] $preferredSupplier
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setPreferredSupplier(?array $preferredSupplier = null): self
    {
        // validation for constraint: array
        if ('' !== ($preferredSupplierArrayErrorMessage = self::validatePreferredSupplierForArrayConstraintFromSetPreferredSupplier($preferredSupplier))) {
            throw new InvalidArgumentException($preferredSupplierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($preferredSupplier) && count($preferredSupplier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($preferredSupplier)), __LINE__);
        }
        $this->PreferredSupplier = $preferredSupplier;
        
        return $this;
    }
    /**
     * Add item to PreferredSupplier value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PreferredSupplier $item
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function addToPreferredSupplier(\Travelport\UniversalRecord\StructType\PreferredSupplier $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PreferredSupplier) {
            throw new InvalidArgumentException(sprintf('The PreferredSupplier property can only contain items of type \Travelport\UniversalRecord\StructType\PreferredSupplier, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PreferredSupplier) && count($this->PreferredSupplier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PreferredSupplier)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setAirSegmentRef(?string $airSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($airSegmentRef) && !is_string($airSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airSegmentRef, true), gettype($airSegmentRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setPassiveSegmentRef(?string $passiveSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($passiveSegmentRef) && !is_string($passiveSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passiveSegmentRef, true), gettype($passiveSegmentRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setRailSegmentRef(?string $railSegmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($railSegmentRef) && !is_string($railSegmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($railSegmentRef, true), gettype($railSegmentRef)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setReservationLocatorRef(?string $reservationLocatorRef = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationLocatorRef) && !is_string($reservationLocatorRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLocatorRef, true), gettype($reservationLocatorRef)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($reservationLocatorRef) && mb_strlen((string) $reservationLocatorRef) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $reservationLocatorRef)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($reservationLocatorRef) && mb_strlen((string) $reservationLocatorRef) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $reservationLocatorRef)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelComplianceData
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
