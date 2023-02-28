<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The ApplicationRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ApplicationRules|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ApplicationRules $ApplicationRules = null;
    /**
     * The ApplicationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ApplicationLevel|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ApplicationLevel $ApplicationLevel = null;
    /**
     * The ModifyRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ModifyRules|null
     */
    protected ?\Travelport\UniversalRecord\StructType\ModifyRules $ModifyRules = null;
    /**
     * The SecondaryTypeRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\SecondaryTypeRules|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SecondaryTypeRules $SecondaryTypeRules = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - documentation: Adds text remarks / rules for the optional / additional service
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\FormattedTextTextType[]
     */
    protected ?array $Remarks = null;
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setRemarks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemarks method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarksForArrayConstraintFromSetRemarks(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceRuleTypeRemarksItem) {
            // validation for constraint: itemType
            if (!$serviceRuleTypeRemarksItem instanceof \Travelport\UniversalRecord\StructType\FormattedTextTextType) {
                $invalidValues[] = is_object($serviceRuleTypeRemarksItem) ? get_class($serviceRuleTypeRemarksItem) : sprintf('%s(%s)', gettype($serviceRuleTypeRemarksItem), var_export($serviceRuleTypeRemarksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Remarks property can only contain items of type \Travelport\UniversalRecord\StructType\FormattedTextTextType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Remarks value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FormattedTextTextType[] $remarks
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType
     */
    public function setRemarks(?array $remarks = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarksArrayErrorMessage = self::validateRemarksForArrayConstraintFromSetRemarks($remarks))) {
            throw new InvalidArgumentException($remarksArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($remarks) && count($remarks) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($remarks)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FormattedTextTextType) {
            throw new InvalidArgumentException(sprintf('The Remarks property can only contain items of type \Travelport\UniversalRecord\StructType\FormattedTextTextType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Remarks) && count($this->Remarks) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Remarks)), __LINE__);
        }
        $this->Remarks[] = $item;
        
        return $this;
    }
}
