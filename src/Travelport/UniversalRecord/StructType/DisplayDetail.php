<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Display the contents for requested MCO,Cruise etc. details
 * @subpackage Structs
 */
class DisplayDetail extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for DisplayDetail
     * @uses DisplayDetail::setName()
     * @uses DisplayDetail::setValue()
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeDisplayDetailName::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeDisplayDetailName::getValidValues()
     * @throws InvalidArgumentException
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\DisplayDetail
     */
    public function setName(string $name): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeDisplayDetailName::valueIsValid($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeDisplayDetailName', is_array($name) ? implode(', ', $name) : var_export($name, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeDisplayDetailName::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetail
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
