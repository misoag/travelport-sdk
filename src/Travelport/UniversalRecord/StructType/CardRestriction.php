<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardRestriction StructType
 * @subpackage Structs
 */
class CardRestriction extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 2 letter Credit/Debit Card merchant type
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Card merchant description
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * The RequiredField
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: RequiredField
     * @var \Travelport\UniversalRecord\StructType\RequiredField[]
     */
    public ?array $RequiredField = null;
    /**
     * Constructor method for CardRestriction
     * @uses CardRestriction::setCode()
     * @uses CardRestriction::setName()
     * @uses CardRestriction::setRequiredField()
     * @param string $code
     * @param string $name
     * @param \Travelport\UniversalRecord\StructType\RequiredField[] $requiredField
     */
    public function __construct(string $code, string $name, ?array $requiredField = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setRequiredField($requiredField);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\CardRestriction
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\CardRestriction
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get RequiredField value
     * @return \Travelport\UniversalRecord\StructType\RequiredField[]
     */
    public function getRequiredField(): ?array
    {
        return $this->RequiredField;
    }
    /**
     * Set RequiredField value
     * @param \Travelport\UniversalRecord\StructType\RequiredField[] $requiredField
     * @return \Travelport\UniversalRecord\StructType\CardRestriction
     */
    public function setRequiredField(?array $requiredField = null): self
    {
        $this->RequiredField = $requiredField;
        
        return $this;
    }
    /**
     * Add item to RequiredField value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RequiredField $item
     * @return \Travelport\UniversalRecord\StructType\CardRestriction
     */
    public function addToRequiredField(\Travelport\UniversalRecord\StructType\RequiredField $item): self
    {
        $this->RequiredField[] = $item;
        
        return $this;
    }
}
