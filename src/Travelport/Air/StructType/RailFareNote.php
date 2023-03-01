<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailFareNote StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple textual fare note. Used within several other objects.
 * @subpackage Structs
 */
class RailFareNote extends AbstractStructBase
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
     * The NoteName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $NoteName;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
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
     * Constructor method for RailFareNote
     * @uses RailFareNote::setKey()
     * @uses RailFareNote::setNoteName()
     * @uses RailFareNote::set_()
     * @uses RailFareNote::setElStat()
     * @uses RailFareNote::setKeyOverride()
     * @param string $key
     * @param string $noteName
     * @param string $_
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, string $noteName, ?string $_ = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setNoteName($noteName)
            ->set_($_)
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
     * @return \Travelport\Air\StructType\RailFareNote
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get NoteName value
     * @return string
     */
    public function getNoteName(): string
    {
        return $this->NoteName;
    }
    /**
     * Set NoteName value
     * @param string $noteName
     * @return \Travelport\Air\StructType\RailFareNote
     */
    public function setNoteName(string $noteName): self
    {
        $this->NoteName = $noteName;
        
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
     * @return \Travelport\Air\StructType\RailFareNote
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\Air\StructType\RailFareNote
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
     * @return \Travelport\Air\StructType\RailFareNote
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
