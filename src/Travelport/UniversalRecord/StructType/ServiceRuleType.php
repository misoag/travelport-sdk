<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceRuleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the rules for applying service rules
 * @subpackage Structs
 */
class ServiceRuleType extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Unique ID to identify an optional service rule | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The ApplicationRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ApplicationRules|null
     */
    public ?\Travelport\UniversalRecord\StructType\ApplicationRules $ApplicationRules = null;
    /**
     * The ApplicationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ApplicationLevel|null
     */
    public ?\Travelport\UniversalRecord\StructType\ApplicationLevel $ApplicationLevel = null;
    /**
     * The ModifyRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ModifyRules|null
     */
    public ?\Travelport\UniversalRecord\StructType\ModifyRules $ModifyRules = null;
    /**
     * The SecondaryTypeRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SecondaryTypeRules|null
     */
    public ?\Travelport\UniversalRecord\StructType\SecondaryTypeRules $SecondaryTypeRules = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - documentation: Adds text remarks / rules for the optional / additional service
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FormattedTextTextType[]
     */
    public ?array $Remarks = null;
    /**
     * Constructor method for ServiceRuleType
     * @uses ServiceRuleType::setKey()
     * @uses ServiceRuleType::setApplicationRules()
     * @uses ServiceRuleType::setApplicationLevel()
     * @uses ServiceRuleType::setModifyRules()
     * @uses ServiceRuleType::setSecondaryTypeRules()
     * @uses ServiceRuleType::setRemarks()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\ApplicationRules $applicationRules
     * @param \Travelport\UniversalRecord\StructType\ApplicationLevel $applicationLevel
     * @param \Travelport\UniversalRecord\StructType\ModifyRules $modifyRules
     * @param \Travelport\UniversalRecord\StructType\SecondaryTypeRules $secondaryTypeRules
     * @param \Travelport\UniversalRecord\StructType\FormattedTextTextType[] $remarks
     */
    public function __construct(string $key, ?\Travelport\UniversalRecord\StructType\ApplicationRules $applicationRules = null, ?\Travelport\UniversalRecord\StructType\ApplicationLevel $applicationLevel = null, ?\Travelport\UniversalRecord\StructType\ModifyRules $modifyRules = null, ?\Travelport\UniversalRecord\StructType\SecondaryTypeRules $secondaryTypeRules = null, ?array $remarks = null)
    {
        $this
            ->setKey($key)
            ->setApplicationRules($applicationRules)
            ->setApplicationLevel($applicationLevel)
            ->setModifyRules($modifyRules)
            ->setSecondaryTypeRules($secondaryTypeRules)
            ->setRemarks($remarks);
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
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ApplicationRules value
     * @return \Travelport\UniversalRecord\StructType\ApplicationRules|null
     */
    public function getApplicationRules(): ?\Travelport\UniversalRecord\StructType\ApplicationRules
    {
        return $this->ApplicationRules;
    }
    /**
     * Set ApplicationRules value
     * @param \Travelport\UniversalRecord\StructType\ApplicationRules $applicationRules
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setApplicationRules(?\Travelport\UniversalRecord\StructType\ApplicationRules $applicationRules = null): self
    {
        $this->ApplicationRules = $applicationRules;
        
        return $this;
    }
    /**
     * Get ApplicationLevel value
     * @return \Travelport\UniversalRecord\StructType\ApplicationLevel|null
     */
    public function getApplicationLevel(): ?\Travelport\UniversalRecord\StructType\ApplicationLevel
    {
        return $this->ApplicationLevel;
    }
    /**
     * Set ApplicationLevel value
     * @param \Travelport\UniversalRecord\StructType\ApplicationLevel $applicationLevel
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setApplicationLevel(?\Travelport\UniversalRecord\StructType\ApplicationLevel $applicationLevel = null): self
    {
        $this->ApplicationLevel = $applicationLevel;
        
        return $this;
    }
    /**
     * Get ModifyRules value
     * @return \Travelport\UniversalRecord\StructType\ModifyRules|null
     */
    public function getModifyRules(): ?\Travelport\UniversalRecord\StructType\ModifyRules
    {
        return $this->ModifyRules;
    }
    /**
     * Set ModifyRules value
     * @param \Travelport\UniversalRecord\StructType\ModifyRules $modifyRules
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setModifyRules(?\Travelport\UniversalRecord\StructType\ModifyRules $modifyRules = null): self
    {
        $this->ModifyRules = $modifyRules;
        
        return $this;
    }
    /**
     * Get SecondaryTypeRules value
     * @return \Travelport\UniversalRecord\StructType\SecondaryTypeRules|null
     */
    public function getSecondaryTypeRules(): ?\Travelport\UniversalRecord\StructType\SecondaryTypeRules
    {
        return $this->SecondaryTypeRules;
    }
    /**
     * Set SecondaryTypeRules value
     * @param \Travelport\UniversalRecord\StructType\SecondaryTypeRules $secondaryTypeRules
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setSecondaryTypeRules(?\Travelport\UniversalRecord\StructType\SecondaryTypeRules $secondaryTypeRules = null): self
    {
        $this->SecondaryTypeRules = $secondaryTypeRules;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Travelport\UniversalRecord\StructType\FormattedTextTextType[]
     */
    public function getRemarks(): ?array
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Travelport\UniversalRecord\StructType\FormattedTextTextType[] $remarks
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setRemarks(?array $remarks = null): self
    {
        $this->Remarks = $remarks;
        
        return $this;
    }
    /**
     * Add item to Remarks value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormattedTextTextType $item
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function addToRemarks(\Travelport\UniversalRecord\StructType\FormattedTextTextType $item): self
    {
        $this->Remarks[] = $item;
        
        return $this;
    }
}
