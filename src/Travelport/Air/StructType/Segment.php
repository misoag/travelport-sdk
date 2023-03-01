<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Segment StructType
 * Meta information extracted from the WSDL
 * - documentation: The base segment type
 * @subpackage Structs
 */
class Segment extends AbstractStructBase
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
     * The SegmentRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SegmentRemark
     * @var \Travelport\Air\StructType\SegmentRemark[]
     */
    public ?array $SegmentRemark = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of this segment.
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $Passive = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel segments/reservations based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    public ?int $TravelOrder = null;
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
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for Segment
     * @uses Segment::setKey()
     * @uses Segment::setSegmentRemark()
     * @uses Segment::setStatus()
     * @uses Segment::setPassive()
     * @uses Segment::setTravelOrder()
     * @uses Segment::setProviderSegmentOrder()
     * @uses Segment::setElStat()
     * @uses Segment::setKeyOverride()
     * @param string $key
     * @param \Travelport\Air\StructType\SegmentRemark[] $segmentRemark
     * @param string $status
     * @param bool $passive
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?array $segmentRemark = null, ?string $status = null, ?bool $passive = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setSegmentRemark($segmentRemark)
            ->setStatus($status)
            ->setPassive($passive)
            ->setTravelOrder($travelOrder)
            ->setProviderSegmentOrder($providerSegmentOrder)
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
     * @return \Travelport\Air\StructType\Segment
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get SegmentRemark value
     * @return \Travelport\Air\StructType\SegmentRemark[]
     */
    public function getSegmentRemark(): ?array
    {
        return $this->SegmentRemark;
    }
    /**
     * Set SegmentRemark value
     * @param \Travelport\Air\StructType\SegmentRemark[] $segmentRemark
     * @return \Travelport\Air\StructType\Segment
     */
    public function setSegmentRemark(?array $segmentRemark = null): self
    {
        $this->SegmentRemark = $segmentRemark;
        
        return $this;
    }
    /**
     * Add item to SegmentRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SegmentRemark $item
     * @return \Travelport\Air\StructType\Segment
     */
    public function addToSegmentRemark(\Travelport\Air\StructType\SegmentRemark $item): self
    {
        $this->SegmentRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Air\StructType\Segment
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return bool|null
     */
    public function getPassive(): ?bool
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param bool $passive
     * @return \Travelport\Air\StructType\Segment
     */
    public function setPassive(?bool $passive = null): self
    {
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \Travelport\Air\StructType\Segment
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        $this->TravelOrder = $travelOrder;
        
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
     * @return \Travelport\Air\StructType\Segment
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
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
     * @return \Travelport\Air\StructType\Segment
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
     * @return \Travelport\Air\StructType\Segment
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
