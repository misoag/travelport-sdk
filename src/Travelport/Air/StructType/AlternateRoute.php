<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternateRoute StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about this Alternate Route component
 * @subpackage Structs
 */
class AlternateRoute extends AbstractStructBase
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
     * The Leg
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: Leg
     * @var \Travelport\Air\StructType\Leg[]
     */
    public ?array $Leg = null;
    /**
     * Constructor method for AlternateRoute
     * @uses AlternateRoute::setKey()
     * @uses AlternateRoute::setLeg()
     * @param string $key
     * @param \Travelport\Air\StructType\Leg[] $leg
     */
    public function __construct(string $key, ?array $leg = null)
    {
        $this
            ->setKey($key)
            ->setLeg($leg);
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
     * @return \Travelport\Air\StructType\AlternateRoute
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Leg value
     * @return \Travelport\Air\StructType\Leg[]
     */
    public function getLeg(): ?array
    {
        return $this->Leg;
    }
    /**
     * Set Leg value
     * @param \Travelport\Air\StructType\Leg[] $leg
     * @return \Travelport\Air\StructType\AlternateRoute
     */
    public function setLeg(?array $leg = null): self
    {
        $this->Leg = $leg;
        
        return $this;
    }
    /**
     * Add item to Leg value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Leg $item
     * @return \Travelport\Air\StructType\AlternateRoute
     */
    public function addToLeg(\Travelport\Air\StructType\Leg $item): self
    {
        $this->Leg[] = $item;
        
        return $this;
    }
}
