<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValueDetails StructType
 * @subpackage Structs
 */
class ValueDetails extends AbstractStructBase
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
     * Constructor method for ValueDetails
     * @uses ValueDetails::setName()
     * @uses ValueDetails::setValue()
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
     * @return \Travelport\Air\StructType\ValueDetails
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
     * @return \Travelport\Air\StructType\ValueDetails
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
