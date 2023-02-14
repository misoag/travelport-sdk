<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniversalDelete StructType
 * @subpackage Structs
 */
class UniversalDelete extends AbstractStructBase
{
    /**
     * The Element
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Element;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for UniversalDelete
     * @uses UniversalDelete::setElement()
     * @uses UniversalDelete::setKey()
     * @param string $element
     * @param string $key
     */
    public function __construct(string $element, ?string $key = null)
    {
        $this
            ->setElement($element)
            ->setKey($key);
    }
    /**
     * Get Element value
     * @return string
     */
    public function getElement(): string
    {
        return $this->Element;
    }
    /**
     * Set Element value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElement::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElement::getValidValues()
     * @throws InvalidArgumentException
     * @param string $element
     * @return \Travelport\UniversalRecord\StructType\UniversalDelete
     */
    public function setElement(string $element): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElement::valueIsValid($element)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElement', is_array($element) ? implode(', ', $element) : var_export($element, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElement::getValidValues())), __LINE__);
        }
        $this->Element = $element;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\UniversalDelete
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
}
