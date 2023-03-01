<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Name information of the EMD traveler.
 * @subpackage Structs
 */
class NameInfo extends AbstractStructBase
{
    /**
     * The Prefix
     * @var string|null
     */
    public ?string $Prefix = null;
    /**
     * The First
     * @var string|null
     */
    public ?string $First = null;
    /**
     * The Middle
     * @var string|null
     */
    public ?string $Middle = null;
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - documentation: Type for Traveler Last Name.
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * @var string|null
     */
    public ?string $Last = null;
    /**
     * The Suffix
     * @var string|null
     */
    public ?string $Suffix = null;
    /**
     * Constructor method for NameInfo
     * @uses NameInfo::setPrefix()
     * @uses NameInfo::setFirst()
     * @uses NameInfo::setMiddle()
     * @uses NameInfo::setLast()
     * @uses NameInfo::setSuffix()
     * @param string $prefix
     * @param string $first
     * @param string $middle
     * @param string $last
     * @param string $suffix
     */
    public function __construct(?string $prefix = null, ?string $first = null, ?string $middle = null, ?string $last = null, ?string $suffix = null)
    {
        $this
            ->setPrefix($prefix)
            ->setFirst($first)
            ->setMiddle($middle)
            ->setLast($last)
            ->setSuffix($suffix);
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
     * @return \Travelport\Air\StructType\NameInfo
     */
    public function setPrefix(?string $prefix = null): self
    {
        $this->Prefix = $prefix;
        
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
     * @return \Travelport\Air\StructType\NameInfo
     */
    public function setFirst(?string $first = null): self
    {
        $this->First = $first;
        
        return $this;
    }
    /**
     * Get Middle value
     * @return string|null
     */
    public function getMiddle(): ?string
    {
        return $this->Middle;
    }
    /**
     * Set Middle value
     * @param string $middle
     * @return \Travelport\Air\StructType\NameInfo
     */
    public function setMiddle(?string $middle = null): self
    {
        $this->Middle = $middle;
        
        return $this;
    }
    /**
     * Get Last value
     * @return string|null
     */
    public function getLast(): ?string
    {
        return $this->Last;
    }
    /**
     * Set Last value
     * @param string $last
     * @return \Travelport\Air\StructType\NameInfo
     */
    public function setLast(?string $last = null): self
    {
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \Travelport\Air\StructType\NameInfo
     */
    public function setSuffix(?string $suffix = null): self
    {
        $this->Suffix = $suffix;
        
        return $this;
    }
}
