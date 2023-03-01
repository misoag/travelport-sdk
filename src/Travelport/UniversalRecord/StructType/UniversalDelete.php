<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Element;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
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
     * @param string $element
     * @return \Travelport\UniversalRecord\StructType\UniversalDelete
     */
    public function setElement(string $element): self
    {
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
        $this->Key = $key;
        
        return $this;
    }
}
