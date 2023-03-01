<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Value;
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
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\DisplayDetail
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
     * @return \Travelport\UniversalRecord\StructType\DisplayDetail
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
