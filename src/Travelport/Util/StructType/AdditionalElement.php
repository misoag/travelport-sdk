<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalElement StructType
 * Meta information extracted from the WSDL
 * - documentation: To add or update reference data master records.
 * @subpackage Structs
 */
class AdditionalElement extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Please provide other column names. This should match with exact database column name
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Please provide corresponding value of the Name field
     * - use: required
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for AdditionalElement
     * @uses AdditionalElement::setName()
     * @uses AdditionalElement::setValue()
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
     * @return \Travelport\Util\StructType\AdditionalElement
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \Travelport\Util\StructType\AdditionalElement
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