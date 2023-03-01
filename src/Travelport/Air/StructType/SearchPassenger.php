<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPassenger StructType
 * Meta information extracted from the WSDL
 * - documentation: Passenger type with code and optional age information
 * @subpackage Structs
 */
class SearchPassenger extends TypePassengerType
{
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
     * Constructor method for SearchPassenger
     * @uses SearchPassenger::setKey()
     * @param string $key
     */
    public function __construct(?string $key = null)
    {
        $this
            ->setKey($key);
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
     * @return \Travelport\Air\StructType\SearchPassenger
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
