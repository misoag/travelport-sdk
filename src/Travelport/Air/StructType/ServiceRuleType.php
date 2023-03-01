<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\ApplicationRules|null
     */
    public ?\Travelport\Air\StructType\ApplicationRules $ApplicationRules = null;
    /**
     * The ApplicationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ApplicationLevel|null
     */
    public ?\Travelport\Air\StructType\ApplicationLevel $ApplicationLevel = null;
    /**
     * The ModifyRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\ModifyRules|null
     */
    public ?\Travelport\Air\StructType\ModifyRules $ModifyRules = null;
    /**
     * The SecondaryTypeRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\SecondaryTypeRules|null
     */
    public ?\Travelport\Air\StructType\SecondaryTypeRules $SecondaryTypeRules = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - documentation: Adds text remarks / rules for the optional / additional service
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\FormattedTextTextType[]
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
     * @param \Travelport\Air\StructType\ApplicationRules $applicationRules
     * @param \Travelport\Air\StructType\ApplicationLevel $applicationLevel
     * @param \Travelport\Air\StructType\ModifyRules $modifyRules
     * @param \Travelport\Air\StructType\SecondaryTypeRules $secondaryTypeRules
     * @param \Travelport\Air\StructType\FormattedTextTextType[] $remarks
     */
    public function __construct(string $key, ?\Travelport\Air\StructType\ApplicationRules $applicationRules = null, ?\Travelport\Air\StructType\ApplicationLevel $applicationLevel = null, ?\Travelport\Air\StructType\ModifyRules $modifyRules = null, ?\Travelport\Air\StructType\SecondaryTypeRules $secondaryTypeRules = null, ?array $remarks = null)
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
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ApplicationRules value
     * @return \Travelport\Air\StructType\ApplicationRules|null
     */
    public function getApplicationRules(): ?\Travelport\Air\StructType\ApplicationRules
    {
        return $this->ApplicationRules;
    }
    /**
     * Set ApplicationRules value
     * @param \Travelport\Air\StructType\ApplicationRules $applicationRules
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function setApplicationRules(?\Travelport\Air\StructType\ApplicationRules $applicationRules = null): self
    {
        $this->ApplicationRules = $applicationRules;
        
        return $this;
    }
    /**
     * Get ApplicationLevel value
     * @return \Travelport\Air\StructType\ApplicationLevel|null
     */
    public function getApplicationLevel(): ?\Travelport\Air\StructType\ApplicationLevel
    {
        return $this->ApplicationLevel;
    }
    /**
     * Set ApplicationLevel value
     * @param \Travelport\Air\StructType\ApplicationLevel $applicationLevel
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function setApplicationLevel(?\Travelport\Air\StructType\ApplicationLevel $applicationLevel = null): self
    {
        $this->ApplicationLevel = $applicationLevel;
        
        return $this;
    }
    /**
     * Get ModifyRules value
     * @return \Travelport\Air\StructType\ModifyRules|null
     */
    public function getModifyRules(): ?\Travelport\Air\StructType\ModifyRules
    {
        return $this->ModifyRules;
    }
    /**
     * Set ModifyRules value
     * @param \Travelport\Air\StructType\ModifyRules $modifyRules
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function setModifyRules(?\Travelport\Air\StructType\ModifyRules $modifyRules = null): self
    {
        $this->ModifyRules = $modifyRules;
        
        return $this;
    }
    /**
     * Get SecondaryTypeRules value
     * @return \Travelport\Air\StructType\SecondaryTypeRules|null
     */
    public function getSecondaryTypeRules(): ?\Travelport\Air\StructType\SecondaryTypeRules
    {
        return $this->SecondaryTypeRules;
    }
    /**
     * Set SecondaryTypeRules value
     * @param \Travelport\Air\StructType\SecondaryTypeRules $secondaryTypeRules
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function setSecondaryTypeRules(?\Travelport\Air\StructType\SecondaryTypeRules $secondaryTypeRules = null): self
    {
        $this->SecondaryTypeRules = $secondaryTypeRules;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return \Travelport\Air\StructType\FormattedTextTextType[]
     */
    public function getRemarks(): ?array
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param \Travelport\Air\StructType\FormattedTextTextType[] $remarks
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function setRemarks(?array $remarks = null): self
    {
        $this->Remarks = $remarks;
        
        return $this;
    }
    /**
     * Add item to Remarks value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormattedTextTextType $item
     * @return \Travelport\Air\StructType\ServiceRuleType
     */
    public function addToRemarks(\Travelport\Air\StructType\FormattedTextTextType $item): self
    {
        $this->Remarks[] = $item;
        
        return $this;
    }
}
