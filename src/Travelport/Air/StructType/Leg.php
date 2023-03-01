<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Leg StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about the journey Leg
 * @subpackage Structs
 */
class Leg extends AbstractStructBase
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
     * The Group
     * Meta information extracted from the WSDL
     * - documentation: Returns the Group Number for the leg.
     * - use: required
     * @var int
     */
    public int $Group;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the origin airport or city code for the leg. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the destination airport or city code for the leg. | Valid 3 to 8 alpha numeric String
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The LegDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LegDetail
     * @var \Travelport\Air\StructType\LegDetail[]
     */
    public ?array $LegDetail = null;
    /**
     * Constructor method for Leg
     * @uses Leg::setKey()
     * @uses Leg::setGroup()
     * @uses Leg::setOrigin()
     * @uses Leg::setDestination()
     * @uses Leg::setLegDetail()
     * @param string $key
     * @param int $group
     * @param string $origin
     * @param string $destination
     * @param \Travelport\Air\StructType\LegDetail[] $legDetail
     */
    public function __construct(string $key, int $group, string $origin, string $destination, ?array $legDetail = null)
    {
        $this
            ->setKey($key)
            ->setGroup($group)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setLegDetail($legDetail);
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
     * @return \Travelport\Air\StructType\Leg
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Group value
     * @return int
     */
    public function getGroup(): int
    {
        return $this->Group;
    }
    /**
     * Set Group value
     * @param int $group
     * @return \Travelport\Air\StructType\Leg
     */
    public function setGroup(int $group): self
    {
        $this->Group = $group;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Air\StructType\Leg
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Air\StructType\Leg
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get LegDetail value
     * @return \Travelport\Air\StructType\LegDetail[]
     */
    public function getLegDetail(): ?array
    {
        return $this->LegDetail;
    }
    /**
     * Set LegDetail value
     * @param \Travelport\Air\StructType\LegDetail[] $legDetail
     * @return \Travelport\Air\StructType\Leg
     */
    public function setLegDetail(?array $legDetail = null): self
    {
        $this->LegDetail = $legDetail;
        
        return $this;
    }
    /**
     * Add item to LegDetail value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LegDetail $item
     * @return \Travelport\Air\StructType\Leg
     */
    public function addToLegDetail(\Travelport\Air\StructType\LegDetail $item): self
    {
        $this->LegDetail[] = $item;
        
        return $this;
    }
}
