<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePolicyCodesList StructType
 * @subpackage Structs
 */
class TypePolicyCodesList extends AbstractStructBase
{
    /**
     * The PolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why an item was determined to be ‘out of policy’.
     * - base: xs:string
     * - maxOccurs: 10
     * - minOccurs: 0
     * - type: typePolicyCode
     * - use: optional
     * @var string[]
     */
    public ?array $PolicyCode = null;
    /**
     * The MinPolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why the minimum fare or rate was determined to be ‘out of policy’.
     * - base: xs:string
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $MinPolicyCode = null;
    /**
     * The MaxPolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why the maximum fare or rate was determined to be ‘out of policy’.
     * - base: xs:string
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $MaxPolicyCode = null;
    /**
     * Constructor method for typePolicyCodesList
     * @uses TypePolicyCodesList::setPolicyCode()
     * @uses TypePolicyCodesList::setMinPolicyCode()
     * @uses TypePolicyCodesList::setMaxPolicyCode()
     * @param string[] $policyCode
     * @param string[] $minPolicyCode
     * @param string[] $maxPolicyCode
     */
    public function __construct(?array $policyCode = null, ?array $minPolicyCode = null, ?array $maxPolicyCode = null)
    {
        $this
            ->setPolicyCode($policyCode)
            ->setMinPolicyCode($minPolicyCode)
            ->setMaxPolicyCode($maxPolicyCode);
    }
    /**
     * Get PolicyCode value
     * @return string[]
     */
    public function getPolicyCode(): ?array
    {
        return $this->PolicyCode;
    }
    /**
     * Set PolicyCode value
     * @param string[] $policyCode
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList
     */
    public function setPolicyCode(?array $policyCode = null): self
    {
        $this->PolicyCode = $policyCode;
        
        return $this;
    }
    /**
     * Add item to PolicyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList
     */
    public function addToPolicyCode(string $item): self
    {
        $this->PolicyCode[] = $item;
        
        return $this;
    }
    /**
     * Get MinPolicyCode value
     * @return string[]
     */
    public function getMinPolicyCode(): ?array
    {
        return $this->MinPolicyCode;
    }
    /**
     * Set MinPolicyCode value
     * @param string[] $minPolicyCode
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList
     */
    public function setMinPolicyCode(?array $minPolicyCode = null): self
    {
        $this->MinPolicyCode = $minPolicyCode;
        
        return $this;
    }
    /**
     * Add item to MinPolicyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList
     */
    public function addToMinPolicyCode(string $item): self
    {
        $this->MinPolicyCode[] = $item;
        
        return $this;
    }
    /**
     * Get MaxPolicyCode value
     * @return string[]
     */
    public function getMaxPolicyCode(): ?array
    {
        return $this->MaxPolicyCode;
    }
    /**
     * Set MaxPolicyCode value
     * @param string[] $maxPolicyCode
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList
     */
    public function setMaxPolicyCode(?array $maxPolicyCode = null): self
    {
        $this->MaxPolicyCode = $maxPolicyCode;
        
        return $this;
    }
    /**
     * Add item to MaxPolicyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList
     */
    public function addToMaxPolicyCode(string $item): self
    {
        $this->MaxPolicyCode[] = $item;
        
        return $this;
    }
}
