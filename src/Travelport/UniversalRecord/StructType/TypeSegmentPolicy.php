<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSegmentPolicy StructType
 * @subpackage Structs
 */
class TypeSegmentPolicy extends AbstractStructBase
{
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the original segment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $SegmentRef;
    /**
     * The Preference
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Preference
     * @var \Travelport\UniversalRecord\StructType\Preference[]
     */
    public ?array $Preference = null;
    /**
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: Determine if this segment is In or Out of policy. By default it is InPolicy.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $InPolicy = null;
    /**
     * The InContract
     * Meta information extracted from the WSDL
     * - documentation: Determine if this segment is In or Out of contract. By default it is InContract.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $InContract = null;
    /**
     * Constructor method for typeSegmentPolicy
     * @uses TypeSegmentPolicy::setSegmentRef()
     * @uses TypeSegmentPolicy::setPreference()
     * @uses TypeSegmentPolicy::setInPolicy()
     * @uses TypeSegmentPolicy::setInContract()
     * @param string $segmentRef
     * @param \Travelport\UniversalRecord\StructType\Preference[] $preference
     * @param bool $inPolicy
     * @param bool $inContract
     */
    public function __construct(string $segmentRef, ?array $preference = null, ?bool $inPolicy = true, ?bool $inContract = true)
    {
        $this
            ->setSegmentRef($segmentRef)
            ->setPreference($preference)
            ->setInPolicy($inPolicy)
            ->setInContract($inContract);
    }
    /**
     * Get SegmentRef value
     * @return string
     */
    public function getSegmentRef(): string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setSegmentRef(string $segmentRef): self
    {
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get Preference value
     * @return \Travelport\UniversalRecord\StructType\Preference[]
     */
    public function getPreference(): ?array
    {
        return $this->Preference;
    }
    /**
     * Set Preference value
     * @param \Travelport\UniversalRecord\StructType\Preference[] $preference
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setPreference(?array $preference = null): self
    {
        $this->Preference = $preference;
        
        return $this;
    }
    /**
     * Add item to Preference value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Preference $item
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function addToPreference(\Travelport\UniversalRecord\StructType\Preference $item): self
    {
        $this->Preference[] = $item;
        
        return $this;
    }
    /**
     * Get InPolicy value
     * @return bool|null
     */
    public function getInPolicy(): ?bool
    {
        return $this->InPolicy;
    }
    /**
     * Set InPolicy value
     * @param bool $inPolicy
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setInPolicy(?bool $inPolicy = true): self
    {
        $this->InPolicy = $inPolicy;
        
        return $this;
    }
    /**
     * Get InContract value
     * @return bool|null
     */
    public function getInContract(): ?bool
    {
        return $this->InContract;
    }
    /**
     * Set InContract value
     * @param bool $inContract
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setInContract(?bool $inContract = true): self
    {
        $this->InContract = $inContract;
        
        return $this;
    }
}
