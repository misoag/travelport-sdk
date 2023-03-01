<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfoMessage StructType
 * Meta information extracted from the WSDL
 * - documentation: A simple textual fare information message.Providers supported : 1G/1V/1P
 * @subpackage Structs
 */
class FareInfoMessage extends AbstractStructBase
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
     * Constructor method for FareInfoMessage
     * @uses FareInfoMessage::setKey()
     * @uses FareInfoMessage::set_()
     * @param string $key
     * @param string $_
     */
    public function __construct(string $key, ?string $_ = null)
    {
        $this
            ->setKey($key)
            ->set_($_);
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
     * @return \Travelport\Air\StructType\FareInfoMessage
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
     * @return \Travelport\Air\StructType\FareInfoMessage
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
