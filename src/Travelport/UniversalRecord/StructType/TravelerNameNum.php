<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerNameNum StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for Host Passenger Details.Each TravelerNameNum represents a passenger present in the PNR. This is currently used by JAL(1J) only.
 * @subpackage Structs
 */
class TravelerNameNum extends AbstractStructBase
{
    /**
     * The PaxNum
     * Meta information extracted from the WSDL
     * - documentation: Passenger Name Number in host. Should be in the format SurNameNum.GivenNameNum
     * - use: required
     * @var string
     */
    protected string $PaxNum;
    /**
     * The Prefix
     * @var string|null
     */
    protected ?string $Prefix = null;
    /**
     * The First
     * @var string|null
     */
    protected ?string $First = null;
    /**
     * The Middle
     * @var string|null
     */
    protected ?string $Middle = null;
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - documentation: Type for Traveler Last Name.
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * @var string|null
     */
    protected ?string $Last = null;
    /**
     * The Suffix
     * @var string|null
     */
    protected ?string $Suffix = null;
    /**
     * Constructor method for TravelerNameNum
     * @uses TravelerNameNum::setPaxNum()
     * @uses TravelerNameNum::setPrefix()
     * @uses TravelerNameNum::setFirst()
     * @uses TravelerNameNum::setMiddle()
     * @uses TravelerNameNum::setLast()
     * @uses TravelerNameNum::setSuffix()
     * @param string $paxNum
     * @param string $prefix
     * @param string $first
     * @param string $middle
     * @param string $last
     * @param string $suffix
     */
    public function __construct(string $paxNum, ?string $prefix = null, ?string $first = null, ?string $middle = null, ?string $last = null, ?string $suffix = null)
    {
        $this
            ->setPaxNum($paxNum)
            ->setPrefix($prefix)
            ->setFirst($first)
            ->setMiddle($middle)
            ->setLast($last)
            ->setSuffix($suffix);
    }
    /**
     * Get PaxNum value
     * @return string
     */
    public function getPaxNum(): string
    {
        return $this->PaxNum;
    }
    /**
     * Set PaxNum value
     * @param string $paxNum
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum
     */
    public function setPaxNum(string $paxNum): self
    {
        // validation for constraint: string
        if (!is_null($paxNum) && !is_string($paxNum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paxNum, true), gettype($paxNum)), __LINE__);
        }
        $this->PaxNum = $paxNum;
        
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
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum
     */
    public function setPrefix(?string $prefix = null): self
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefix, true), gettype($prefix)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum
     */
    public function setFirst(?string $first = null): self
    {
        // validation for constraint: string
        if (!is_null($first) && !is_string($first)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first, true), gettype($first)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum
     */
    public function setMiddle(?string $middle = null): self
    {
        // validation for constraint: string
        if (!is_null($middle) && !is_string($middle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middle, true), gettype($middle)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum
     */
    public function setLast(?string $last = null): self
    {
        // validation for constraint: string
        if (!is_null($last) && !is_string($last)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last, true), gettype($last)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($last) && mb_strlen((string) $last) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $last)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($last) && mb_strlen((string) $last) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $last)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\TravelerNameNum
     */
    public function setSuffix(?string $suffix = null): self
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suffix, true), gettype($suffix)), __LINE__);
        }
        $this->Suffix = $suffix;
        
        return $this;
    }
}
