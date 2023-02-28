<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?array $Description = null;
    /**
     * The MediaItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: MediaItem
     * @var \Travelport\Hotel\StructType\MediaItem[]
     */
    protected ?array $MediaItem = null;
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
     * This method is responsible for validating the value(s) passed to the setDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDescriptionForArrayConstraintFromSetDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceInfoDescriptionItem) {
            // validation for constraint: itemType
            if (!is_string($serviceInfoDescriptionItem)) {
                $invalidValues[] = is_object($serviceInfoDescriptionItem) ? get_class($serviceInfoDescriptionItem) : sprintf('%s(%s)', gettype($serviceInfoDescriptionItem), var_export($serviceInfoDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Description property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Description value
     * @throws InvalidArgumentException
     * @param string[] $description
     * @return \Travelport\Hotel\StructType\ServiceInfo
     */
    public function setDescription(?array $description = null): self
    {
        // validation for constraint: array
        if ('' !== ($descriptionArrayErrorMessage = self::validateDescriptionForArrayConstraintFromSetDescription($description))) {
            throw new InvalidArgumentException($descriptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($description) && count($description) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($description)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Description property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Description) && count($this->Description) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Description)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setMediaItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediaItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediaItemForArrayConstraintFromSetMediaItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $serviceInfoMediaItemItem) {
            // validation for constraint: itemType
            if (!$serviceInfoMediaItemItem instanceof \Travelport\Hotel\StructType\MediaItem) {
                $invalidValues[] = is_object($serviceInfoMediaItemItem) ? get_class($serviceInfoMediaItemItem) : sprintf('%s(%s)', gettype($serviceInfoMediaItemItem), var_export($serviceInfoMediaItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediaItem property can only contain items of type \Travelport\Hotel\StructType\MediaItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediaItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MediaItem[] $mediaItem
     * @return \Travelport\Hotel\StructType\ServiceInfo
     */
    public function setMediaItem(?array $mediaItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediaItemArrayErrorMessage = self::validateMediaItemForArrayConstraintFromSetMediaItem($mediaItem))) {
            throw new InvalidArgumentException($mediaItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($mediaItem) && count($mediaItem) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($mediaItem)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\MediaItem) {
            throw new InvalidArgumentException(sprintf('The MediaItem property can only contain items of type \Travelport\Hotel\StructType\MediaItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->MediaItem) && count($this->MediaItem) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->MediaItem)), __LINE__);
        }
        $this->MediaItem[] = $item;
        
        return $this;
    }
}
