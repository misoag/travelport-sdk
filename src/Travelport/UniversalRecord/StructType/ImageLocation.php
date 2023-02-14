<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageLocation StructType
 * @subpackage Structs
 */
class ImageLocation extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of Image Location. E.g., "Agent", "Consumer".
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The ImageWidth
     * Meta information extracted from the WSDL
     * - documentation: The width of the image
     * - use: required
     * @var int
     */
    protected int $ImageWidth;
    /**
     * The ImageHeight
     * Meta information extracted from the WSDL
     * - documentation: The height of the image
     * - use: required
     * @var int
     */
    protected int $ImageHeight;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for ImageLocation
     * @uses ImageLocation::setType()
     * @uses ImageLocation::setImageWidth()
     * @uses ImageLocation::setImageHeight()
     * @uses ImageLocation::set_()
     * @param string $type
     * @param int $imageWidth
     * @param int $imageHeight
     * @param string $_
     */
    public function __construct(string $type, int $imageWidth, int $imageHeight, ?string $_ = null)
    {
        $this
            ->setType($type)
            ->setImageWidth($imageWidth)
            ->setImageHeight($imageHeight)
            ->set_($_);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\ImageLocation
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get ImageWidth value
     * @return int
     */
    public function getImageWidth(): int
    {
        return $this->ImageWidth;
    }
    /**
     * Set ImageWidth value
     * @param int $imageWidth
     * @return \Travelport\UniversalRecord\StructType\ImageLocation
     */
    public function setImageWidth(int $imageWidth): self
    {
        // validation for constraint: int
        if (!is_null($imageWidth) && !(is_int($imageWidth) || ctype_digit($imageWidth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($imageWidth, true), gettype($imageWidth)), __LINE__);
        }
        $this->ImageWidth = $imageWidth;
        
        return $this;
    }
    /**
     * Get ImageHeight value
     * @return int
     */
    public function getImageHeight(): int
    {
        return $this->ImageHeight;
    }
    /**
     * Set ImageHeight value
     * @param int $imageHeight
     * @return \Travelport\UniversalRecord\StructType\ImageLocation
     */
    public function setImageHeight(int $imageHeight): self
    {
        // validation for constraint: int
        if (!is_null($imageHeight) && !(is_int($imageHeight) || ctype_digit($imageHeight))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($imageHeight, true), gettype($imageHeight)), __LINE__);
        }
        $this->ImageHeight = $imageHeight;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\ImageLocation
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
