<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludedItem StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides details of included item.
 * @subpackage Structs
 */
class IncludedItem extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Code for included item.
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Description of included item.
     * - use: required
     * @var string
     */
    protected string $Description;
    /**
     * Constructor method for IncludedItem
     * @uses IncludedItem::setCode()
     * @uses IncludedItem::setDescription()
     * @param string $code
     * @param string $description
     */
    public function __construct(string $code, string $description)
    {
        $this
            ->setCode($code)
            ->setDescription($description);
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
     * @return \Travelport\UniversalRecord\StructType\IncludedItem
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\IncludedItem
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
