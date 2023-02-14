<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareNote StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple textual fare note. Used within several other objects.
 * @subpackage Structs
 */
class FareNote extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Precedence
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Precedence = null;
    /**
     * The NoteName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $NoteName = null;
    /**
     * The FareInfoMessageRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoMessageRef = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for FareNote
     * @uses FareNote::setKey()
     * @uses FareNote::set_()
     * @uses FareNote::setPrecedence()
     * @uses FareNote::setNoteName()
     * @uses FareNote::setFareInfoMessageRef()
     * @uses FareNote::setElStat()
     * @uses FareNote::setKeyOverride()
     * @param string $key
     * @param string $_
     * @param int $precedence
     * @param string $noteName
     * @param string $fareInfoMessageRef
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?string $_ = null, ?int $precedence = null, ?string $noteName = null, ?string $fareInfoMessageRef = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->set_($_)
            ->setPrecedence($precedence)
            ->setNoteName($noteName)
            ->setFareInfoMessageRef($fareInfoMessageRef)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Precedence value
     * @return int|null
     */
    public function getPrecedence(): ?int
    {
        return $this->Precedence;
    }
    /**
     * Set Precedence value
     * @param int $precedence
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setPrecedence(?int $precedence = null): self
    {
        // validation for constraint: int
        if (!is_null($precedence) && !(is_int($precedence) || ctype_digit($precedence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($precedence, true), gettype($precedence)), __LINE__);
        }
        $this->Precedence = $precedence;
        
        return $this;
    }
    /**
     * Get NoteName value
     * @return string|null
     */
    public function getNoteName(): ?string
    {
        return $this->NoteName;
    }
    /**
     * Set NoteName value
     * @param string $noteName
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setNoteName(?string $noteName = null): self
    {
        // validation for constraint: string
        if (!is_null($noteName) && !is_string($noteName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteName, true), gettype($noteName)), __LINE__);
        }
        $this->NoteName = $noteName;
        
        return $this;
    }
    /**
     * Get FareInfoMessageRef value
     * @return string|null
     */
    public function getFareInfoMessageRef(): ?string
    {
        return $this->FareInfoMessageRef;
    }
    /**
     * Set FareInfoMessageRef value
     * @param string $fareInfoMessageRef
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setFareInfoMessageRef(?string $fareInfoMessageRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoMessageRef) && !is_string($fareInfoMessageRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoMessageRef, true), gettype($fareInfoMessageRef)), __LINE__);
        }
        $this->FareInfoMessageRef = $fareInfoMessageRef;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
