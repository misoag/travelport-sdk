<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonName StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer name field
 * @subpackage Structs
 */
class PersonName extends AbstractStructBase
{
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - documentation: Person Last Name. | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Last;
    /**
     * The First
     * Meta information extracted from the WSDL
     * - documentation: Person First Name. | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $First = null;
    /**
     * The Prefix
     * Meta information extracted from the WSDL
     * - documentation: Person Name prefix. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Prefix = null;
    /**
     * Constructor method for PersonName
     * @uses PersonName::setLast()
     * @uses PersonName::setFirst()
     * @uses PersonName::setPrefix()
     * @param string $last
     * @param string $first
     * @param string $prefix
     */
    public function __construct(string $last, ?string $first = null, ?string $prefix = null)
    {
        $this
            ->setLast($last)
            ->setFirst($first)
            ->setPrefix($prefix);
    }
    /**
     * Get Last value
     * @return string
     */
    public function getLast(): string
    {
        return $this->Last;
    }
    /**
     * Set Last value
     * @param string $last
     * @return \Travelport\UniversalRecord\StructType\PersonName
     */
    public function setLast(string $last): self
    {
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get First value
     * @return string|null
     */
    public function getFirst(): ?string
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param string $first
     * @return \Travelport\UniversalRecord\StructType\PersonName
     */
    public function setFirst(?string $first = null): self
    {
        $this->First = $first;
        
        return $this;
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Travelport\UniversalRecord\StructType\PersonName
     */
    public function setPrefix(?string $prefix = null): self
    {
        $this->Prefix = $prefix;
        
        return $this;
    }
}
