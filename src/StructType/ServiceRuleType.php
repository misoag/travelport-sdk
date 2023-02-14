<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\ApplicationRules|null
     */
    protected ?\StructType\ApplicationRules $ApplicationRules = null;
    /**
     * The ApplicationLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ApplicationLevel|null
     */
    protected ?\StructType\ApplicationLevel $ApplicationLevel = null;
    /**
     * The ModifyRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ModifyRules|null
     */
    protected ?\StructType\ModifyRules $ModifyRules = null;
    /**
     * The SecondaryTypeRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SecondaryTypeRules|null
     */
    protected ?\StructType\SecondaryTypeRules $SecondaryTypeRules = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - documentation: Adds text remarks / rules for the optional / additional service
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \StructType\FormattedTextTextType[]
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
     * @param \StructType\ApplicationRules $applicationRules
     * @param \StructType\ApplicationLevel $applicationLevel
     * @param \StructType\ModifyRules $modifyRules
     * @param \StructType\SecondaryTypeRules $secondaryTypeRules
     * @param \StructType\FormattedTextTextType[] $remarks
     */
    public function __construct(string $key, ?\StructType\ApplicationRules $applicationRules = null, ?\StructType\ApplicationLevel $applicationLevel = null, ?\StructType\ModifyRules $modifyRules = null, ?\StructType\SecondaryTypeRules $secondaryTypeRules = null, ?array $remarks = null)
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
     * @return \StructType\ServiceRuleType
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
     * @return \StructType\ApplicationRules|null
     */
    public function getApplicationRules(): ?\StructType\ApplicationRules
    {
        return $this->ApplicationRules;
    }
    /**
     * Set ApplicationRules value
     * @param \StructType\ApplicationRules $applicationRules
     * @return \StructType\ServiceRuleType
     */
    public function setApplicationRules(?\StructType\ApplicationRules $applicationRules = null): self
    {
        $this->ApplicationRules = $applicationRules;
        
        return $this;
    }
    /**
     * Get ApplicationLevel value
     * @return \StructType\ApplicationLevel|null
     */
    public function getApplicationLevel(): ?\StructType\ApplicationLevel
    {
        return $this->ApplicationLevel;
    }
    /**
     * Set ApplicationLevel value
     * @param \StructType\ApplicationLevel $applicationLevel
     * @return \StructType\ServiceRuleType
     */
    public function setApplicationLevel(?\StructType\ApplicationLevel $applicationLevel = null): self
    {
        $this->ApplicationLevel = $applicationLevel;
        
        return $this;
    }
    /**
     * Get ModifyRules value
     * @return \StructType\ModifyRules|null
     */
    public function getModifyRules(): ?\StructType\ModifyRules
    {
        return $this->ModifyRules;
    }
    /**
     * Set ModifyRules value
     * @param \StructType\ModifyRules $modifyRules
     * @return \StructType\ServiceRuleType
     */
    public function setModifyRules(?\StructType\ModifyRules $modifyRules = null): self
    {
        $this->ModifyRules = $modifyRules;
        
        return $this;
    }
    /**
     * Get SecondaryTypeRules value
     * @return \StructType\SecondaryTypeRules|null
     */
    public function getSecondaryTypeRules(): ?\StructType\SecondaryTypeRules
    {
        return $this->SecondaryTypeRules;
    }
    /**
     * Set SecondaryTypeRules value
     * @param \StructType\SecondaryTypeRules $secondaryTypeRules
     * @return \StructType\ServiceRuleType
     */
    public function setSecondaryTypeRules(?\StructType\SecondaryTypeRules $secondaryTypeRules = null): self
    {
        $this->SecondaryTypeRules = $secondaryTypeRules;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return \StructType\FormattedTextTextType[]
     */
    public function getRemarks(): ?array
    {
        return $this->Remarks;
    }
    /**
     * This method is responsible for validating the values passed to the setRemarks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemarks method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarksForArrayConstraintsFromSetRemarks(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceRuleTypeRemarksItem) {
            // validation for constraint: itemType
            if (!$serviceRuleTypeRemarksItem instanceof \StructType\FormattedTextTextType) {
                $invalidValues[] = is_object($serviceRuleTypeRemarksItem) ? get_class($serviceRuleTypeRemarksItem) : sprintf('%s(%s)', gettype($serviceRuleTypeRemarksItem), var_export($serviceRuleTypeRemarksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Remarks property can only contain items of type \StructType\FormattedTextTextType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Remarks value
     * @throws InvalidArgumentException
     * @param \StructType\FormattedTextTextType[] $remarks
     * @return \StructType\ServiceRuleType
     */
    public function setRemarks(?array $remarks = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarksArrayErrorMessage = self::validateRemarksForArrayConstraintsFromSetRemarks($remarks))) {
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
     * @param \StructType\FormattedTextTextType $item
     * @return \StructType\ServiceRuleType
     */
    public function addToRemarks(\StructType\FormattedTextTextType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FormattedTextTextType) {
            throw new InvalidArgumentException(sprintf('The Remarks property can only contain items of type \StructType\FormattedTextTextType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->Remarks) && count($this->Remarks) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->Remarks)), __LINE__);
        }
        $this->Remarks[] = $item;
        
        return $this;
    }
}
