<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\ApplicationRules|null
     */
    public ?\Travelport\Hotel\StructType\ApplicationRules $ApplicationRules = null;
    /**
     * The ApplicationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ApplicationLevel|null
     */
    public ?\Travelport\Hotel\StructType\ApplicationLevel $ApplicationLevel = null;
    /**
     * The ModifyRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\ModifyRules|null
     */
    public ?\Travelport\Hotel\StructType\ModifyRules $ModifyRules = null;
    /**
     * The SecondaryTypeRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\SecondaryTypeRules|null
     */
    public ?\Travelport\Hotel\StructType\SecondaryTypeRules $SecondaryTypeRules = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - documentation: Adds text remarks / rules for the optional / additional service
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\FormattedTextTextType[]
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
     * @param \Travelport\Hotel\StructType\ApplicationRules $applicationRules
     * @param \Travelport\Hotel\StructType\ApplicationLevel $applicationLevel
     * @param \Travelport\Hotel\StructType\ModifyRules $modifyRules
     * @param \Travelport\Hotel\StructType\SecondaryTypeRules $secondaryTypeRules
     * @param \Travelport\Hotel\StructType\FormattedTextTextType[] $remarks
     */
    public function __construct(string $key, ?\Travelport\Hotel\StructType\ApplicationRules $applicationRules = null, ?\Travelport\Hotel\StructType\ApplicationLevel $applicationLevel = null, ?\Travelport\Hotel\StructType\ModifyRules $modifyRules = null, ?\Travelport\Hotel\StructType\SecondaryTypeRules $secondaryTypeRules = null, ?array $remarks = null)
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
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ApplicationRules value
     * @return \Travelport\Hotel\StructType\ApplicationRules|null
     */
    public function getApplicationRules(): ?\Travelport\Hotel\StructType\ApplicationRules
    {
        return $this->ApplicationRules;
    }
    /**
     * Set ApplicationRules value
     * @param \Travelport\Hotel\StructType\ApplicationRules $applicationRules
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function setApplicationRules(?\Travelport\Hotel\StructType\ApplicationRules $applicationRules = null): self
    {
        $this->ApplicationRules = $applicationRules;
        
        return $this;
    }
    /**
     * Get ApplicationLevel value
     * @return \Travelport\Hotel\StructType\ApplicationLevel|null
     */
    public function getApplicationLevel(): ?\Travelport\Hotel\StructType\ApplicationLevel
    {
        return $this->ApplicationLevel;
    }
    /**
     * Set ApplicationLevel value
     * @param \Travelport\Hotel\StructType\ApplicationLevel $applicationLevel
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function setApplicationLevel(?\Travelport\Hotel\StructType\ApplicationLevel $applicationLevel = null): self
    {
        $this->ApplicationLevel = $applicationLevel;
        
        return $this;
    }
    /**
     * Get ModifyRules value
     * @return \Travelport\Hotel\StructType\ModifyRules|null
     */
    public function getModifyRules(): ?\Travelport\Hotel\StructType\ModifyRules
    {
        return $this->ModifyRules;
    }
    /**
     * Set ModifyRules value
     * @param \Travelport\Hotel\StructType\ModifyRules $modifyRules
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function setModifyRules(?\Travelport\Hotel\StructType\ModifyRules $modifyRules = null): self
    {
        $this->ModifyRules = $modifyRules;
        
        return $this;
    }
    /**
     * Get SecondaryTypeRules value
     * @return \Travelport\Hotel\StructType\SecondaryTypeRules|null
     */
    public function getSecondaryTypeRules(): ?\Travelport\Hotel\StructType\SecondaryTypeRules
    {
        return $this->SecondaryTypeRules;
    }
    /**
     * Set SecondaryTypeRules value
     * @param \Travelport\Hotel\StructType\SecondaryTypeRules $secondaryTypeRules
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function setSecondaryTypeRules(?\Travelport\Hotel\StructType\SecondaryTypeRules $secondaryTypeRules = null): self
    {
        $this->SecondaryTypeRules = $secondaryTypeRules;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Travelport\Hotel\StructType\FormattedTextTextType[]
     */
    public function getRemarks(): ?array
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Travelport\Hotel\StructType\FormattedTextTextType[] $remarks
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function setRemarks(?array $remarks = null): self
    {
        $this->Remarks = $remarks;
        
        return $this;
    }
    /**
     * Add item to Remarks value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\FormattedTextTextType $item
     * @return \Travelport\Hotel\StructType\ServiceRuleType
     */
    public function addToRemarks(\Travelport\Hotel\StructType\FormattedTextTextType $item): self
    {
        $this->Remarks[] = $item;
        
        return $this;
    }
}
