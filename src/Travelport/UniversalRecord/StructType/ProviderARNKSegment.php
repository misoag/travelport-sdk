<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderARNKSegment StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents host ARNK segments.
 * @subpackage Structs
 */
class ProviderARNKSegment extends AbstractStructBase
{
    /**
     * The PreviousSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PreviousSegment|null
     */
    public ?\Travelport\UniversalRecord\StructType\PreviousSegment $PreviousSegment = null;
    /**
     * The NextSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\NextSegment|null
     */
    public ?\Travelport\UniversalRecord\StructType\NextSegment $NextSegment = null;
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
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderSegmentOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - use: optional
     * @var int|null
     */
    public ?int $ProviderSegmentOrder = null;
    /**
     * Constructor method for ProviderARNKSegment
     * @uses ProviderARNKSegment::setPreviousSegment()
     * @uses ProviderARNKSegment::setNextSegment()
     * @uses ProviderARNKSegment::setKey()
     * @uses ProviderARNKSegment::setProviderReservationInfoRef()
     * @uses ProviderARNKSegment::setProviderSegmentOrder()
     * @param \Travelport\UniversalRecord\StructType\PreviousSegment $previousSegment
     * @param \Travelport\UniversalRecord\StructType\NextSegment $nextSegment
     * @param string $key
     * @param string $providerReservationInfoRef
     * @param int $providerSegmentOrder
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PreviousSegment $previousSegment = null, ?\Travelport\UniversalRecord\StructType\NextSegment $nextSegment = null, ?string $key = null, ?string $providerReservationInfoRef = null, ?int $providerSegmentOrder = null)
    {
        $this
            ->setPreviousSegment($previousSegment)
            ->setNextSegment($nextSegment)
            ->setKey($key)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderSegmentOrder($providerSegmentOrder);
    }
    /**
     * Get PreviousSegment value
     * @return \Travelport\UniversalRecord\StructType\PreviousSegment|null
     */
    public function getPreviousSegment(): ?\Travelport\UniversalRecord\StructType\PreviousSegment
    {
        return $this->PreviousSegment;
    }
    /**
     * Set PreviousSegment value
     * @param \Travelport\UniversalRecord\StructType\PreviousSegment $previousSegment
     * @return \Travelport\UniversalRecord\StructType\ProviderARNKSegment
     */
    public function setPreviousSegment(?\Travelport\UniversalRecord\StructType\PreviousSegment $previousSegment = null): self
    {
        $this->PreviousSegment = $previousSegment;
        
        return $this;
    }
    /**
     * Get NextSegment value
     * @return \Travelport\UniversalRecord\StructType\NextSegment|null
     */
    public function getNextSegment(): ?\Travelport\UniversalRecord\StructType\NextSegment
    {
        return $this->NextSegment;
    }
    /**
     * Set NextSegment value
     * @param \Travelport\UniversalRecord\StructType\NextSegment $nextSegment
     * @return \Travelport\UniversalRecord\StructType\ProviderARNKSegment
     */
    public function setNextSegment(?\Travelport\UniversalRecord\StructType\NextSegment $nextSegment = null): self
    {
        $this->NextSegment = $nextSegment;
        
        return $this;
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
     * @return \Travelport\UniversalRecord\StructType\ProviderARNKSegment
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\ProviderARNKSegment
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get ProviderSegmentOrder value
     * @return int|null
     */
    public function getProviderSegmentOrder(): ?int
    {
        return $this->ProviderSegmentOrder;
    }
    /**
     * Set ProviderSegmentOrder value
     * @param int $providerSegmentOrder
     * @return \Travelport\UniversalRecord\StructType\ProviderARNKSegment
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
        return $this;
    }
}
