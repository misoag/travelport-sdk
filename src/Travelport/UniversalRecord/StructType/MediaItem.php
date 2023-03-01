<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediaItem StructType
 * Meta information extracted from the WSDL
 * - documentation: Photos and other media urls for the property referenced above.
 * @subpackage Structs
 */
class MediaItem extends AbstractStructBase
{
    /**
     * The caption
     * @var string|null
     */
    public ?string $caption = null;
    /**
     * The height
     * @var int|null
     */
    public ?int $height = null;
    /**
     * The width
     * @var int|null
     */
    public ?int $width = null;
    /**
     * The type
     * @var string|null
     */
    public ?string $type = null;
    /**
     * The url
     * @var string|null
     */
    public ?string $url = null;
    /**
     * The icon
     * @var string|null
     */
    public ?string $icon = null;
    /**
     * The sizeCode
     * Meta information extracted from the WSDL
     * - documentation: Allowable images sizes in response
     * - union: typeImageSize | typeOtherImageSize
     * @var string|null
     */
    public ?string $sizeCode = null;
    /**
     * Constructor method for MediaItem
     * @uses MediaItem::setCaption()
     * @uses MediaItem::setHeight()
     * @uses MediaItem::setWidth()
     * @uses MediaItem::setType()
     * @uses MediaItem::setUrl()
     * @uses MediaItem::setIcon()
     * @uses MediaItem::setSizeCode()
     * @param string $caption
     * @param int $height
     * @param int $width
     * @param string $type
     * @param string $url
     * @param string $icon
     * @param string $sizeCode
     */
    public function __construct(?string $caption = null, ?int $height = null, ?int $width = null, ?string $type = null, ?string $url = null, ?string $icon = null, ?string $sizeCode = null)
    {
        $this
            ->setCaption($caption)
            ->setHeight($height)
            ->setWidth($width)
            ->setType($type)
            ->setUrl($url)
            ->setIcon($icon)
            ->setSizeCode($sizeCode);
    }
    /**
     * Get caption value
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }
    /**
     * Set caption value
     * @param string $caption
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setCaption(?string $caption = null): self
    {
        $this->caption = $caption;
        
        return $this;
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $height
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setHeight(?int $height = null): self
    {
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $width
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setWidth(?int $width = null): self
    {
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setType(?string $type = null): self
    {
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setUrl(?string $url = null): self
    {
        $this->url = $url;
        
        return $this;
    }
    /**
     * Get icon value
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }
    /**
     * Set icon value
     * @param string $icon
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setIcon(?string $icon = null): self
    {
        $this->icon = $icon;
        
        return $this;
    }
    /**
     * Get sizeCode value
     * @return string|null
     */
    public function getSizeCode(): ?string
    {
        return $this->sizeCode;
    }
    /**
     * Set sizeCode value
     * @param string $sizeCode
     * @return \Travelport\UniversalRecord\StructType\MediaItem
     */
    public function setSizeCode(?string $sizeCode = null): self
    {
        $this->sizeCode = $sizeCode;
        
        return $this;
    }
}
