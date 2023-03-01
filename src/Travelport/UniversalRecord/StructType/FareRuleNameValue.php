<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleNameValue StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Rule Name Value Pair, used in Short Rules
 * @subpackage Structs
 */
class FareRuleNameValue extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * Constructor method for FareRuleNameValue
     * @uses FareRuleNameValue::setName()
     * @uses FareRuleNameValue::setValue()
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this
            ->setName($name)
            ->setValue($value);
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
     * @return \Travelport\UniversalRecord\StructType\FareRuleNameValue
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\UniversalRecord\StructType\FareRuleNameValue
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
