<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequiredField StructType
 * @subpackage Structs
 */
class RequiredField extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Name;
    /**
     * Constructor method for RequiredField
     * @uses RequiredField::setName()
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this
            ->setName($name);
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
     * @return \Travelport\UniversalRecord\StructType\RequiredField
     */
    public function setName(string $name): self
    {
        $this->Name = $name;
        
        return $this;
    }
}
