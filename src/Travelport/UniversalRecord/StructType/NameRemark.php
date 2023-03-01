<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: Tagging provider reservation info with NameRemark. | Text that support Name Remarks.
 * @subpackage Structs
 */
class NameRemark extends AbstractStructBase
{
    /**
     * The RemarkData
     * Meta information extracted from the WSDL
     * - documentation: Actual remarks data.
     * @var string|null
     */
    public ?string $RemarkData = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ProviderReservationInfoRef
     * @var \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public ?array $ProviderReservationInfoRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: A category to group and organize the various remarks. This is not required, but it is recommended.
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
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
     * Constructor method for NameRemark
     * @uses NameRemark::setRemarkData()
     * @uses NameRemark::setProviderReservationInfoRef()
     * @uses NameRemark::setKey()
     * @uses NameRemark::setCategory()
     * @uses NameRemark::setElStat()
     * @uses NameRemark::setKeyOverride()
     * @param string $remarkData
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @param string $key
     * @param string $category
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $remarkData = null, ?array $providerReservationInfoRef = null, ?string $key = null, ?string $category = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setRemarkData($remarkData)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setKey($key)
            ->setCategory($category)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get RemarkData value
     * @return string|null
     */
    public function getRemarkData(): ?string
    {
        return $this->RemarkData;
    }
    /**
     * Set RemarkData value
     * @param string $remarkData
     * @return \Travelport\UniversalRecord\StructType\NameRemark
     */
    public function setRemarkData(?string $remarkData = null): self
    {
        $this->RemarkData = $remarkData;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[]
     */
    public function getProviderReservationInfoRef(): ?array
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef[] $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\NameRemark
     */
    public function setProviderReservationInfoRef(?array $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Add item to ProviderReservationInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\NameRemark
     */
    public function addToProviderReservationInfoRef(\Travelport\UniversalRecord\StructType\ProviderReservationInfoRef $item): self
    {
        $this->ProviderReservationInfoRef[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\NameRemark
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\NameRemark
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
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
     * @return \Travelport\UniversalRecord\StructType\NameRemark
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
     * @return \Travelport\UniversalRecord\StructType\NameRemark
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
