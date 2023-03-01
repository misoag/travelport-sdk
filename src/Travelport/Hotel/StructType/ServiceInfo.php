<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceInfo StructType
 * @subpackage Structs
 */
class ServiceInfo extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Description of the Service. Usually used in tandem with one or more media items.
     * - maxOccurs: 999
     * @var string[]
     */
    public ?array $Description = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: MediaItem
     * @var \Travelport\Hotel\StructType\MediaItem[]
     */
    public ?array $MediaItem = null;
    /**
     * Constructor method for ServiceInfo
     * @uses ServiceInfo::setDescription()
     * @uses ServiceInfo::setMediaItem()
     * @param string[] $description
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     */
    public function __construct(?array $description = null, ?array $mediaItem = null)
    {
        $this
            ->setDescription($description)
            ->setMediaItem($mediaItem);
    }
    /**
     * Get Description value
     * @return string[]
     */
    public function getDescription(): ?array
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string[] $description
     * @return \Travelport\Hotel\StructType\ServiceInfo
     */
    public function setDescription(?array $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Add item to Description value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\ServiceInfo
     */
    public function addToDescription(string $item): self
    {
        $this->Description[] = $item;
        
        return $this;
    }
    /**
     * Get MediaItem value
     * @return \Travelport\Hotel\StructType\MediaItem[]
     */
    public function getMediaItem(): ?array
    {
        return $this->MediaItem;
    }
    /**
     * Set MediaItem value
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     * @return \Travelport\Hotel\StructType\ServiceInfo
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
        $this->MediaItem = $mediaItem;
        
        return $this;
    }
    /**
     * Add item to MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MediaItem $item
     * @return \Travelport\Hotel\StructType\ServiceInfo
     */
    public function addToMediaItem(\Travelport\Hotel\StructType\MediaItem $item): self
    {
        $this->MediaItem[] = $item;
        
        return $this;
    }
}
