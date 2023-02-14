<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $caption = null;
    /**
     * The height
     * @var int|null
     */
    protected ?int $height = null;
    /**
     * The width
     * @var int|null
     */
    protected ?int $width = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The icon
     * @var string|null
     */
    protected ?string $icon = null;
    /**
     * The sizeCode
     * Meta information extracted from the WSDL
     * - documentation: Allowable images sizes in response
     * - union: typeImageSize | typeOtherImageSize
     * @var string|null
     */
    protected ?string $sizeCode = null;
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
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setCaption(?string $caption = null): self
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($caption, true), gettype($caption)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setHeight(?int $height = null): self
    {
        // validation for constraint: int
        if (!is_null($height) && !(is_int($height) || ctype_digit($height))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setWidth(?int $width = null): self
    {
        // validation for constraint: int
        if (!is_null($width) && !(is_int($width) || ctype_digit($width))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setIcon(?string $icon = null): self
    {
        // validation for constraint: string
        if (!is_null($icon) && !is_string($icon)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($icon, true), gettype($icon)), __LINE__);
        }
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
     * This method is responsible for validating the value passed to the setSizeCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSizeCode method
     * This is a set of validation rules based on the union types associated to the property being set by the setSizeCode method
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSizeCodeForUnionConstraintsFromSetSizeCode($value): string
    {
        $message = '';
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeImageSize::valueIsValid($value)) {
            $exception0 = new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeImageSize', is_array($value) ? implode(', ', $value) : var_export($value, true), implode(', ', \Travelport\Util\EnumType\TypeImageSize::getValidValues())), __LINE__);
        }
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeOtherImageSize::valueIsValid($value)) {
            $exception1 = new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeOtherImageSize', is_array($value) ? implode(', ', $value) : var_export($value, true), implode(', ', \Travelport\Util\EnumType\TypeOtherImageSize::getValidValues())), __LINE__);
        }
        if (isset($exception0) && isset($exception1)) {
            $message = sprintf("The value %s does not match any of the union rules: typeImageSize, typeOtherImageSize. See following errors:\n%s", var_export($value, true), implode("\n", array_map(function(InvalidArgumentException $e) { return sprintf(' - %s', $e->getMessage()); }, [$exception0, $exception1])));
        }
        unset($exception0, $exception1);
        
        return $message;
    }
    /**
     * Set sizeCode value
     * @param string $sizeCode
     * @return \Travelport\Util\StructType\MediaItem
     */
    public function setSizeCode(?string $sizeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($sizeCode) && !is_string($sizeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sizeCode, true), gettype($sizeCode)), __LINE__);
        }
        // validation for constraint: union(typeImageSize, typeOtherImageSize)
        if ('' !== ($sizeCodeUnionErrorMessage = self::validateSizeCodeForUnionConstraintsFromSetSizeCode($sizeCode))) {
            throw new InvalidArgumentException($sizeCodeUnionErrorMessage, __LINE__);
        }
        $this->sizeCode = $sizeCode;
        
        return $this;
    }
}
