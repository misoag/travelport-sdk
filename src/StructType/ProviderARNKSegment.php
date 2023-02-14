<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\PreviousSegment|null
     */
    protected ?\StructType\PreviousSegment $PreviousSegment = null;
    /**
     * The NextSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\NextSegment|null
     */
    protected ?\StructType\NextSegment $NextSegment = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderSegmentOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - use: optional
     * @var int|null
     */
    protected ?int $ProviderSegmentOrder = null;
    /**
     * Constructor method for ProviderARNKSegment
     * @uses ProviderARNKSegment::setPreviousSegment()
     * @uses ProviderARNKSegment::setNextSegment()
     * @uses ProviderARNKSegment::setKey()
     * @uses ProviderARNKSegment::setProviderReservationInfoRef()
     * @uses ProviderARNKSegment::setProviderSegmentOrder()
     * @param \StructType\PreviousSegment $previousSegment
     * @param \StructType\NextSegment $nextSegment
     * @param string $key
     * @param string $providerReservationInfoRef
     * @param int $providerSegmentOrder
     */
    public function __construct(?\StructType\PreviousSegment $previousSegment = null, ?\StructType\NextSegment $nextSegment = null, ?string $key = null, ?string $providerReservationInfoRef = null, ?int $providerSegmentOrder = null)
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
     * @return \StructType\PreviousSegment|null
     */
    public function getPreviousSegment(): ?\StructType\PreviousSegment
    {
        return $this->PreviousSegment;
    }
    /**
     * Set PreviousSegment value
     * @param \StructType\PreviousSegment $previousSegment
     * @return \StructType\ProviderARNKSegment
     */
    public function setPreviousSegment(?\StructType\PreviousSegment $previousSegment = null): self
    {
        $this->PreviousSegment = $previousSegment;
        
        return $this;
    }
    /**
     * Get NextSegment value
     * @return \StructType\NextSegment|null
     */
    public function getNextSegment(): ?\StructType\NextSegment
    {
        return $this->NextSegment;
    }
    /**
     * Set NextSegment value
     * @param \StructType\NextSegment $nextSegment
     * @return \StructType\ProviderARNKSegment
     */
    public function setNextSegment(?\StructType\NextSegment $nextSegment = null): self
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
     * @return \StructType\ProviderARNKSegment
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \StructType\ProviderARNKSegment
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
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
     * @return \StructType\ProviderARNKSegment
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($providerSegmentOrder) && !(is_int($providerSegmentOrder) || ctype_digit($providerSegmentOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($providerSegmentOrder, true), gettype($providerSegmentOrder)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($providerSegmentOrder) && $providerSegmentOrder > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($providerSegmentOrder, true)), __LINE__);
        }
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
        return $this;
    }
}
