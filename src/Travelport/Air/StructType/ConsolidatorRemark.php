<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsolidatorRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: Authorization remark for Consolidator access to a PNR . Contains PCC information created by retail agent to allow a consolidator to service their PNR. PROVIDER SUPPORTED: Worldspan.
 * @subpackage Structs
 */
class ConsolidatorRemark extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 1
     * - ref: PseudoCityCode
     * @var \Travelport\Air\StructType\PseudoCityCode[]
     */
    public array $PseudoCityCode;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Key to be used for internal processing. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider for which this element is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
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
     * Constructor method for ConsolidatorRemark
     * @uses ConsolidatorRemark::setPseudoCityCode()
     * @uses ConsolidatorRemark::setKey()
     * @uses ConsolidatorRemark::setProviderReservationInfoRef()
     * @uses ConsolidatorRemark::setProviderCode()
     * @uses ConsolidatorRemark::setElStat()
     * @uses ConsolidatorRemark::setKeyOverride()
     * @param \Travelport\Air\StructType\PseudoCityCode[] $pseudoCityCode
     * @param string $key
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(array $pseudoCityCode, ?string $key = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode)
            ->setKey($key)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get PseudoCityCode value
     * @return \Travelport\Air\StructType\PseudoCityCode[]
     */
    public function getPseudoCityCode(): array
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param \Travelport\Air\StructType\PseudoCityCode[] $pseudoCityCode
     * @return \Travelport\Air\StructType\ConsolidatorRemark
     */
    public function setPseudoCityCode(array $pseudoCityCode): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Add item to PseudoCityCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PseudoCityCode $item
     * @return \Travelport\Air\StructType\ConsolidatorRemark
     */
    public function addToPseudoCityCode(\Travelport\Air\StructType\PseudoCityCode $item): self
    {
        $this->PseudoCityCode[] = $item;
        
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
     * @return \Travelport\Air\StructType\ConsolidatorRemark
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Air\StructType\ConsolidatorRemark
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Air\StructType\ConsolidatorRemark
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
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
     * @return \Travelport\Air\StructType\ConsolidatorRemark
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
     * @return \Travelport\Air\StructType\ConsolidatorRemark
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
