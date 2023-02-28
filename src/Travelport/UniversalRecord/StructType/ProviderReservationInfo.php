<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider Reservation informations | Represents a valid Provider Reservation/PNR.
 * @subpackage Structs
 */
class ProviderReservationInfo extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key value of the provider reservation | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the entity housing the actual reservation in the event this is a passive one. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Locator Code of the actual reservation in the event this is a passive reservation. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: required
     * @var string
     */
    protected string $LocatorCode;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: required
     * @var string
     */
    protected string $CreateDate;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was last modified for any reason.
     * - use: required
     * @var string
     */
    protected string $ModifiedDate;
    /**
     * The ProviderReservationDetails
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationDetails | ProviderReservationDisplayDetailsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: ProviderReservationDetails
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationDetails|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProviderReservationDetails $ProviderReservationDetails = null;
    /**
     * The ProviderReservationDisplayDetailsList
     * Meta information extracted from the WSDL
     * - choice: ProviderReservationDetails | ProviderReservationDisplayDetailsList
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * - minOccurs: 0
     * - ref: ProviderReservationDisplayDetailsList
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $ProviderReservationDisplayDetailsList = null;
    /**
     * The HostCreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date that this reservation was created in the host system.
     * - use: optional
     * @var string|null
     */
    protected ?string $HostCreateDate = null;
    /**
     * The HostCreateTime
     * Meta information extracted from the WSDL
     * - documentation: The Time that this reservation was created in the host system for 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $HostCreateTime = null;
    /**
     * The Imported
     * Meta information extracted from the WSDL
     * - documentation: Identifies a reservation that was originally created elsewhere and imported into a Universal Record.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Imported = null;
    /**
     * The TicketingModifiersRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a Ticketing Modifers which is attached to this PNR. Ticketing Modifers referred by this Key is a Primary Ticketing Modifers. Worldspan Primary DI line will be supported using this feature. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingModifiersRef = null;
    /**
     * The InQueueMode
     * Meta information extracted from the WSDL
     * - documentation: Identifies whether the gds pnr is being processed from the GDS queue.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InQueueMode = null;
    /**
     * The GroupRef
     * Meta information extracted from the WSDL
     * - documentation: Represents a traveler group for Group booking and all their accompanying data. SUPPORTED PROVIDER: Worldspan. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $GroupRef = null;
    /**
     * The OwningPCC
     * Meta information extracted from the WSDL
     * - documentation: Indentifies the owning PCC of the PNR. PROVIDER SUPPORTED: Worldspan,Galileo and Apollo | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $OwningPCC = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * The AgentOverride
     * @var string|null
     */
    protected ?string $AgentOverride = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * Constructor method for ProviderReservationInfo
     * @uses ProviderReservationInfo::setKey()
     * @uses ProviderReservationInfo::setProviderCode()
     * @uses ProviderReservationInfo::setLocatorCode()
     * @uses ProviderReservationInfo::setCreateDate()
     * @uses ProviderReservationInfo::setModifiedDate()
     * @uses ProviderReservationInfo::setProviderReservationDetails()
     * @uses ProviderReservationInfo::setProviderReservationDisplayDetailsList()
     * @uses ProviderReservationInfo::setHostCreateDate()
     * @uses ProviderReservationInfo::setHostCreateTime()
     * @uses ProviderReservationInfo::setImported()
     * @uses ProviderReservationInfo::setTicketingModifiersRef()
     * @uses ProviderReservationInfo::setInQueueMode()
     * @uses ProviderReservationInfo::setGroupRef()
     * @uses ProviderReservationInfo::setOwningPCC()
     * @uses ProviderReservationInfo::setElStat()
     * @uses ProviderReservationInfo::setKeyOverride()
     * @uses ProviderReservationInfo::setAgentOverride()
     * @uses ProviderReservationInfo::setProviderLocatorCode()
     * @uses ProviderReservationInfo::setSupplierCode()
     * @param string $key
     * @param string $providerCode
     * @param string $locatorCode
     * @param string $createDate
     * @param string $modifiedDate
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList
     * @param string $hostCreateDate
     * @param string $hostCreateTime
     * @param bool $imported
     * @param string $ticketingModifiersRef
     * @param bool $inQueueMode
     * @param string $groupRef
     * @param string $owningPCC
     * @param string $elStat
     * @param bool $keyOverride
     * @param string $agentOverride
     * @param string $providerLocatorCode
     * @param string $supplierCode
     */
    public function __construct(string $key, string $providerCode, string $locatorCode, string $createDate, string $modifiedDate, ?\Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails = null, ?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList = null, ?string $hostCreateDate = null, ?string $hostCreateTime = null, ?bool $imported = null, ?string $ticketingModifiersRef = null, ?bool $inQueueMode = null, ?string $groupRef = null, ?string $owningPCC = null, ?string $elStat = null, ?bool $keyOverride = null, ?string $agentOverride = null, ?string $providerLocatorCode = null, ?string $supplierCode = null)
    {
        $this
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setLocatorCode($locatorCode)
            ->setCreateDate($createDate)
            ->setModifiedDate($modifiedDate)
            ->setProviderReservationDetails($providerReservationDetails)
            ->setProviderReservationDisplayDetailsList($providerReservationDisplayDetailsList)
            ->setHostCreateDate($hostCreateDate)
            ->setHostCreateTime($hostCreateTime)
            ->setImported($imported)
            ->setTicketingModifiersRef($ticketingModifiersRef)
            ->setInQueueMode($inQueueMode)
            ->setGroupRef($groupRef)
            ->setOwningPCC($owningPCC)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride)
            ->setAgentOverride($agentOverride)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
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
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setLocatorCode(string $locatorCode): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setCreateDate(string $createDate): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get ProviderReservationDetails value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDetails|null
     */
    public function getProviderReservationDetails(): ?\Travelport\UniversalRecord\StructType\ProviderReservationDetails
    {
        return $this->ProviderReservationDetails ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProviderReservationDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationDetails method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateProviderReservationDetailsForChoiceConstraintFromSetProviderReservationDetails($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ProviderReservationDisplayDetailsList',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ProviderReservationDetails can\'t be set as the property %s is already set. Only one property must be set among these properties: ProviderReservationDetails, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ProviderReservationDetails value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderReservationDetails(?\Travelport\UniversalRecord\StructType\ProviderReservationDetails $providerReservationDetails = null): self
    {
        // validation for constraint: choice(ProviderReservationDetails, ProviderReservationDisplayDetailsList)
        if ('' !== ($providerReservationDetailsChoiceErrorMessage = self::validateProviderReservationDetailsForChoiceConstraintFromSetProviderReservationDetails($providerReservationDetails))) {
            throw new InvalidArgumentException($providerReservationDetailsChoiceErrorMessage, __LINE__);
        }
        if (is_null($providerReservationDetails) || (is_array($providerReservationDetails) && empty($providerReservationDetails))) {
            unset($this->ProviderReservationDetails);
        } else {
            $this->ProviderReservationDetails = $providerReservationDetails;
        }
        
        return $this;
    }
    /**
     * Get ProviderReservationDisplayDetailsList value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList|null
     */
    public function getProviderReservationDisplayDetailsList(): ?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList
    {
        return $this->ProviderReservationDisplayDetailsList ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProviderReservationDisplayDetailsList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProviderReservationDisplayDetailsList method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateProviderReservationDisplayDetailsListForChoiceConstraintFromSetProviderReservationDisplayDetailsList($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ProviderReservationDetails',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ProviderReservationDisplayDetailsList can\'t be set as the property %s is already set. Only one property must be set among these properties: ProviderReservationDisplayDetailsList, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ProviderReservationDisplayDetailsList value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderReservationDisplayDetailsList(?\Travelport\UniversalRecord\StructType\ProviderReservationDisplayDetailsList $providerReservationDisplayDetailsList = null): self
    {
        // validation for constraint: choice(ProviderReservationDetails, ProviderReservationDisplayDetailsList)
        if ('' !== ($providerReservationDisplayDetailsListChoiceErrorMessage = self::validateProviderReservationDisplayDetailsListForChoiceConstraintFromSetProviderReservationDisplayDetailsList($providerReservationDisplayDetailsList))) {
            throw new InvalidArgumentException($providerReservationDisplayDetailsListChoiceErrorMessage, __LINE__);
        }
        if (is_null($providerReservationDisplayDetailsList) || (is_array($providerReservationDisplayDetailsList) && empty($providerReservationDisplayDetailsList))) {
            unset($this->ProviderReservationDisplayDetailsList);
        } else {
            $this->ProviderReservationDisplayDetailsList = $providerReservationDisplayDetailsList;
        }
        
        return $this;
    }
    /**
     * Get HostCreateDate value
     * @return string|null
     */
    public function getHostCreateDate(): ?string
    {
        return $this->HostCreateDate;
    }
    /**
     * Set HostCreateDate value
     * @param string $hostCreateDate
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setHostCreateDate(?string $hostCreateDate = null): self
    {
        // validation for constraint: string
        if (!is_null($hostCreateDate) && !is_string($hostCreateDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostCreateDate, true), gettype($hostCreateDate)), __LINE__);
        }
        $this->HostCreateDate = $hostCreateDate;
        
        return $this;
    }
    /**
     * Get HostCreateTime value
     * @return string|null
     */
    public function getHostCreateTime(): ?string
    {
        return $this->HostCreateTime;
    }
    /**
     * Set HostCreateTime value
     * @param string $hostCreateTime
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setHostCreateTime(?string $hostCreateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($hostCreateTime) && !is_string($hostCreateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostCreateTime, true), gettype($hostCreateTime)), __LINE__);
        }
        $this->HostCreateTime = $hostCreateTime;
        
        return $this;
    }
    /**
     * Get Imported value
     * @return bool|null
     */
    public function getImported(): ?bool
    {
        return $this->Imported;
    }
    /**
     * Set Imported value
     * @param bool $imported
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setImported(?bool $imported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($imported) && !is_bool($imported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($imported, true), gettype($imported)), __LINE__);
        }
        $this->Imported = $imported;
        
        return $this;
    }
    /**
     * Get TicketingModifiersRef value
     * @return string|null
     */
    public function getTicketingModifiersRef(): ?string
    {
        return $this->TicketingModifiersRef;
    }
    /**
     * Set TicketingModifiersRef value
     * @param string $ticketingModifiersRef
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setTicketingModifiersRef(?string $ticketingModifiersRef = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingModifiersRef) && !is_string($ticketingModifiersRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingModifiersRef, true), gettype($ticketingModifiersRef)), __LINE__);
        }
        $this->TicketingModifiersRef = $ticketingModifiersRef;
        
        return $this;
    }
    /**
     * Get InQueueMode value
     * @return bool|null
     */
    public function getInQueueMode(): ?bool
    {
        return $this->InQueueMode;
    }
    /**
     * Set InQueueMode value
     * @param bool $inQueueMode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setInQueueMode(?bool $inQueueMode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inQueueMode) && !is_bool($inQueueMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inQueueMode, true), gettype($inQueueMode)), __LINE__);
        }
        $this->InQueueMode = $inQueueMode;
        
        return $this;
    }
    /**
     * Get GroupRef value
     * @return string|null
     */
    public function getGroupRef(): ?string
    {
        return $this->GroupRef;
    }
    /**
     * Set GroupRef value
     * @param string $groupRef
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setGroupRef(?string $groupRef = null): self
    {
        // validation for constraint: string
        if (!is_null($groupRef) && !is_string($groupRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupRef, true), gettype($groupRef)), __LINE__);
        }
        $this->GroupRef = $groupRef;
        
        return $this;
    }
    /**
     * Get OwningPCC value
     * @return string|null
     */
    public function getOwningPCC(): ?string
    {
        return $this->OwningPCC;
    }
    /**
     * Set OwningPCC value
     * @param string $owningPCC
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setOwningPCC(?string $owningPCC = null): self
    {
        // validation for constraint: string
        if (!is_null($owningPCC) && !is_string($owningPCC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owningPCC, true), gettype($owningPCC)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($owningPCC) && mb_strlen((string) $owningPCC) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $owningPCC)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($owningPCC) && mb_strlen((string) $owningPCC) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $owningPCC)), __LINE__);
        }
        $this->OwningPCC = $owningPCC;
        
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
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
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
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
    /**
     * Get AgentOverride value
     * @return string|null
     */
    public function getAgentOverride(): ?string
    {
        return $this->AgentOverride;
    }
    /**
     * Set AgentOverride value
     * @param string $agentOverride
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setAgentOverride(?string $agentOverride = null): self
    {
        // validation for constraint: string
        if (!is_null($agentOverride) && !is_string($agentOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agentOverride, true), gettype($agentOverride)), __LINE__);
        }
        $this->AgentOverride = $agentOverride;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfo
     */
    public function setSupplierCode(?string $supplierCode = null): self
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
}
