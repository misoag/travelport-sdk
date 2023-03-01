<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameOverride StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used if the name is different from booking travelers in the PNR
 * @subpackage Structs
 */
class NameOverride extends AbstractStructBase
{
    /**
     * The First
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $First;
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Last;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Age.
     * - use: optional
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * Constructor method for NameOverride
     * @uses NameOverride::setFirst()
     * @uses NameOverride::setLast()
     * @uses NameOverride::setAge()
     * @param string $first
     * @param string $last
     * @param int $age
     */
    public function __construct(string $first, string $last, ?int $age = null)
    {
        $this
            ->setFirst($first)
            ->setLast($last)
            ->setAge($age);
    }
    /**
     * Get First value
     * @return string
     */
    public function getFirst(): string
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param string $first
     * @return \Travelport\Air\StructType\NameOverride
     */
    public function setFirst(string $first): self
    {
        $this->First = $first;
        
        return $this;
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
     * @return \Travelport\Air\StructType\NameOverride
     */
    public function setLast(string $last): self
    {
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Travelport\Air\StructType\NameOverride
     */
    public function setAge(?int $age = null): self
    {
        $this->Age = $age;
        
        return $this;
    }
}
