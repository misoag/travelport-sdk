<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Key;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Precedence
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $Precedence = null;
    /**
     * The NoteName
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $NoteName = null;
    /**
     * The FareInfoMessageRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoMessageRef = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
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
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\FareNote
     */
    public function setElStat(?string $elStat = null): self
    {
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
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
