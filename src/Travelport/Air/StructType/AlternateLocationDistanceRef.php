<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateLocationDistanceRef StructType
 * Meta information extracted from the WSDL
 * - documentation: Reference to a AlternateLocationDistance
 * @subpackage Structs
 */
class AlternateLocationDistanceRef extends AbstractStructBase
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
     * Constructor method for AlternateLocationDistanceRef
     * @uses AlternateLocationDistanceRef::setKey()
     * @param string $key
     */
    public function __construct(string $key)
    {
        $this
            ->setKey($key);
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
     * @return \Travelport\Air\StructType\AlternateLocationDistanceRef
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
