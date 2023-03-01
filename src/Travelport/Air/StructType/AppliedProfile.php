<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppliedProfile StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple container to specify the profiles that were applied to a reservation.
 * @subpackage Structs
 */
class AppliedProfile extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key for update/delete of the element | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The TravelerID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the TravelerProfile that was applied
     * @var string|null
     */
    public ?string $TravelerID = null;
    /**
     * The TravelerName
     * Meta information extracted from the WSDL
     * - documentation: The name from the TravelerProfile that was applied
     * @var string|null
     */
    public ?string $TravelerName = null;
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the AccountProfile that was applied
     * @var string|null
     */
    public ?string $AccountID = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - documentation: The name from the AccountProfile that was applied
     * @var string|null
     */
    public ?string $AccountName = null;
    /**
     * The ImmediateParentID
     * Meta information extracted from the WSDL
     * - documentation: The ID of the immediate parent that was applied
     * - use: optional
     * @var string|null
     */
    public ?string $ImmediateParentID = null;
    /**
     * The ImmediateParentName
     * Meta information extracted from the WSDL
     * - documentation: The name of the immediate parent that was applied
     * - use: optional
     * @var string|null
     */
    public ?string $ImmediateParentName = null;
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
     * Constructor method for AppliedProfile
     * @uses AppliedProfile::setKey()
     * @uses AppliedProfile::setTravelerID()
     * @uses AppliedProfile::setTravelerName()
     * @uses AppliedProfile::setAccountID()
     * @uses AppliedProfile::setAccountName()
     * @uses AppliedProfile::setImmediateParentID()
     * @uses AppliedProfile::setImmediateParentName()
     * @uses AppliedProfile::setElStat()
     * @uses AppliedProfile::setKeyOverride()
     * @param string $key
     * @param string $travelerID
     * @param string $travelerName
     * @param string $accountID
     * @param string $accountName
     * @param string $immediateParentID
     * @param string $immediateParentName
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $key = null, ?string $travelerID = null, ?string $travelerName = null, ?string $accountID = null, ?string $accountName = null, ?string $immediateParentID = null, ?string $immediateParentName = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setTravelerID($travelerID)
            ->setTravelerName($travelerName)
            ->setAccountID($accountID)
            ->setAccountName($accountName)
            ->setImmediateParentID($immediateParentID)
            ->setImmediateParentName($immediateParentName)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get TravelerID value
     * @return string|null
     */
    public function getTravelerID(): ?string
    {
        return $this->TravelerID;
    }
    /**
     * Set TravelerID value
     * @param string $travelerID
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setTravelerID(?string $travelerID = null): self
    {
        $this->TravelerID = $travelerID;
        
        return $this;
    }
    /**
     * Get TravelerName value
     * @return string|null
     */
    public function getTravelerName(): ?string
    {
        return $this->TravelerName;
    }
    /**
     * Set TravelerName value
     * @param string $travelerName
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setTravelerName(?string $travelerName = null): self
    {
        $this->TravelerName = $travelerName;
        
        return $this;
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID(): ?string
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setAccountID(?string $accountID = null): self
    {
        $this->AccountID = $accountID;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setAccountName(?string $accountName = null): self
    {
        $this->AccountName = $accountName;
        
        return $this;
    }
    /**
     * Get ImmediateParentID value
     * @return string|null
     */
    public function getImmediateParentID(): ?string
    {
        return $this->ImmediateParentID;
    }
    /**
     * Set ImmediateParentID value
     * @param string $immediateParentID
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setImmediateParentID(?string $immediateParentID = null): self
    {
        $this->ImmediateParentID = $immediateParentID;
        
        return $this;
    }
    /**
     * Get ImmediateParentName value
     * @return string|null
     */
    public function getImmediateParentName(): ?string
    {
        return $this->ImmediateParentName;
    }
    /**
     * Set ImmediateParentName value
     * @param string $immediateParentName
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setImmediateParentName(?string $immediateParentName = null): self
    {
        $this->ImmediateParentName = $immediateParentName;
        
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
     * @return \Travelport\Air\StructType\AppliedProfile
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
     * @return \Travelport\Air\StructType\AppliedProfile
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
