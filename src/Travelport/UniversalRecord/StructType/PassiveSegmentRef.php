<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassiveSegmentRef StructType
 * @subpackage Structs
 */
class PassiveSegmentRef extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The Key of Passive Segment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * Constructor method for PassiveSegmentRef
     * @uses PassiveSegmentRef::setKey()
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
     * @return \Travelport\UniversalRecord\StructType\PassiveSegmentRef
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
