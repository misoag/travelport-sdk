<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleWithMediaItems StructType
 * Meta information extracted from the WSDL
 * - documentation: Photos and other media urls for the item referenced above. | A container for displaying vehicle details,media urls and errors
 * @subpackage Structs
 */
class VehicleWithMediaItems extends AbstractStructBase
{
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - ref: Vehicle
     * @var \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public ?\Travelport\UniversalRecord\StructType\Vehicle $Vehicle = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:MediaItem
     * @var \Travelport\UniversalRecord\StructType\MediaItem[]
     */
    public ?array $MediaItem = null;
    /**
     * The MediaResultMessage
     * Meta information extracted from the WSDL
     * - documentation: Errors, Warnings and informational messages for the property referenced above.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public ?array $MediaResultMessage = null;
    /**
     * Constructor method for VehicleWithMediaItems
     * @uses VehicleWithMediaItems::setVehicle()
     * @uses VehicleWithMediaItems::setMediaItem()
     * @uses VehicleWithMediaItems::setMediaResultMessage()
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @param \Travelport\UniversalRecord\StructType\MediaItem[] $mediaItem
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $mediaResultMessage
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null, ?array $mediaItem = null, ?array $mediaResultMessage = null)
    {
        $this
            ->setVehicle($vehicle)
            ->setMediaItem($mediaItem)
            ->setMediaResultMessage($mediaResultMessage);
    }
    /**
     * Get Vehicle value
     * @return \Travelport\UniversalRecord\StructType\Vehicle|null
     */
    public function getVehicle(): ?\Travelport\UniversalRecord\StructType\Vehicle
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param \Travelport\UniversalRecord\StructType\Vehicle $vehicle
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function setVehicle(?\Travelport\UniversalRecord\StructType\Vehicle $vehicle = null): self
    {
        $this->Vehicle = $vehicle;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \Travelport\UniversalRecord\StructType\MediaItem[]
     */
    public function getMediaItem(): ?array
    {
        return $this->MediaItem;
    }
    /**
     * Set MediaItem value
     * @param \Travelport\UniversalRecord\StructType\MediaItem[] $mediaItem
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
        $this->MediaItem = $mediaItem;
        
        return $this;
    }
    /**
     * Add item to MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\MediaItem $item
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function addToMediaItem(\Travelport\UniversalRecord\StructType\MediaItem $item): self
    {
        $this->MediaItem[] = $item;
        
        return $this;
    }
    /**
     * Get MediaResultMessage value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public function getMediaResultMessage(): ?array
    {
        return $this->MediaResultMessage;
    }
    /**
     * Set MediaResultMessage value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $mediaResultMessage
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function setMediaResultMessage(?array $mediaResultMessage = null): self
    {
        $this->MediaResultMessage = $mediaResultMessage;
        
        return $this;
    }
    /**
     * Add item to MediaResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $item
     * @return \Travelport\UniversalRecord\StructType\VehicleWithMediaItems
     */
    public function addToMediaResultMessage(\Travelport\UniversalRecord\StructType\TypeResultMessage $item): self
    {
        $this->MediaResultMessage[] = $item;
        
        return $this;
    }
}
