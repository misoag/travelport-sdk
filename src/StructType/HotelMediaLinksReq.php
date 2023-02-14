<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelMediaLinksReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves all image links from the Galileo Web Services Image Viewer eBL for up to 20 properties. Only the attributes of the HotelProperty are used in this request.
 * @subpackage Structs
 */
class HotelMediaLinksReq extends BaseReq
{
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \StructType\PermittedProviders|null
     */
    protected ?\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: 20
     * - ref: HotelProperty
     * @var \StructType\HotelProperty[]
     */
    protected ?array $HotelProperty = null;
    /**
     * The SecureLinks
     * Meta information extracted from the WSDL
     * - documentation: Request URLs returned use secured site (https) references. Default is true
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SecureLinks = null;
    /**
     * The SizeCode
     * Meta information extracted from the WSDL
     * - documentation: Requested image size. Default is to get ALL images
     * - default: A
     * - union: typeImageSize | typeAllImageSize
     * - use: optional
     * @var string|null
     */
    protected ?string $SizeCode = null;
    /**
     * The RichMedia
     * Meta information extracted from the WSDL
     * - documentation: Request the Rich Media link. Default is true
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RichMedia = null;
    /**
     * The Gallery
     * Meta information extracted from the WSDL
     * - documentation: Request the Image Gallery link. Default is true
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Gallery = null;
    /**
     * Constructor method for HotelMediaLinksReq
     * @uses HotelMediaLinksReq::setPermittedProviders()
     * @uses HotelMediaLinksReq::setHotelProperty()
     * @uses HotelMediaLinksReq::setSecureLinks()
     * @uses HotelMediaLinksReq::setSizeCode()
     * @uses HotelMediaLinksReq::setRichMedia()
     * @uses HotelMediaLinksReq::setGallery()
     * @param \StructType\PermittedProviders $permittedProviders
     * @param \StructType\HotelProperty[] $hotelProperty
     * @param bool $secureLinks
     * @param string $sizeCode
     * @param bool $richMedia
     * @param bool $gallery
     */
    public function __construct(?\StructType\PermittedProviders $permittedProviders = null, ?array $hotelProperty = null, ?bool $secureLinks = true, ?string $sizeCode = 'A', ?bool $richMedia = true, ?bool $gallery = true)
    {
        $this
            ->setPermittedProviders($permittedProviders)
            ->setHotelProperty($hotelProperty)
            ->setSecureLinks($secureLinks)
            ->setSizeCode($sizeCode)
            ->setRichMedia($richMedia)
            ->setGallery($gallery);
    }
    /**
     * Get PermittedProviders value
     * @return \StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \StructType\PermittedProviders $permittedProviders
     * @return \StructType\HotelMediaLinksReq
     */
    public function setPermittedProviders(?\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \StructType\HotelProperty[]
     */
    public function getHotelProperty(): ?array
    {
        return $this->HotelProperty;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelPropertyForArrayConstraintsFromSetHotelProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelMediaLinksReqHotelPropertyItem) {
            // validation for constraint: itemType
            if (!$hotelMediaLinksReqHotelPropertyItem instanceof \StructType\HotelProperty) {
                $invalidValues[] = is_object($hotelMediaLinksReqHotelPropertyItem) ? get_class($hotelMediaLinksReqHotelPropertyItem) : sprintf('%s(%s)', gettype($hotelMediaLinksReqHotelPropertyItem), var_export($hotelMediaLinksReqHotelPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelProperty property can only contain items of type \StructType\HotelProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelProperty value
     * @throws InvalidArgumentException
     * @param \StructType\HotelProperty[] $hotelProperty
     * @return \StructType\HotelMediaLinksReq
     */
    public function setHotelProperty(?array $hotelProperty = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelPropertyArrayErrorMessage = self::validateHotelPropertyForArrayConstraintsFromSetHotelProperty($hotelProperty))) {
            throw new InvalidArgumentException($hotelPropertyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($hotelProperty) && count($hotelProperty) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 20', count($hotelProperty)), __LINE__);
        }
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \StructType\HotelProperty $item
     * @return \StructType\HotelMediaLinksReq
     */
    public function addToHotelProperty(\StructType\HotelProperty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelProperty) {
            throw new InvalidArgumentException(sprintf('The HotelProperty property can only contain items of type \StructType\HotelProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(20)
        if (is_array($this->HotelProperty) && count($this->HotelProperty) >= 20) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 20', count($this->HotelProperty)), __LINE__);
        }
        $this->HotelProperty[] = $item;
        
        return $this;
    }
    /**
     * Get SecureLinks value
     * @return bool|null
     */
    public function getSecureLinks(): ?bool
    {
        return $this->SecureLinks;
    }
    /**
     * Set SecureLinks value
     * @param bool $secureLinks
     * @return \StructType\HotelMediaLinksReq
     */
    public function setSecureLinks(?bool $secureLinks = true): self
    {
        // validation for constraint: boolean
        if (!is_null($secureLinks) && !is_bool($secureLinks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($secureLinks, true), gettype($secureLinks)), __LINE__);
        }
        $this->SecureLinks = $secureLinks;
        
        return $this;
    }
    /**
     * Get SizeCode value
     * @return string|null
     */
    public function getSizeCode(): ?string
    {
        return $this->SizeCode;
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
        if (!\EnumType\TypeImageSize::valueIsValid($value)) {
            $exception0 = new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeImageSize', is_array($value) ? implode(', ', $value) : var_export($value, true), implode(', ', \EnumType\TypeImageSize::getValidValues())), __LINE__);
        }
        // validation for constraint: enumeration
        if (!\EnumType\TypeAllImageSize::valueIsValid($value)) {
            $exception1 = new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeAllImageSize', is_array($value) ? implode(', ', $value) : var_export($value, true), implode(', ', \EnumType\TypeAllImageSize::getValidValues())), __LINE__);
        }
        if (isset($exception0) && isset($exception1)) {
            $message = sprintf("The value %s does not match any of the union rules: typeImageSize, typeAllImageSize. See following errors:\n%s", var_export($value, true), implode("\n", array_map(function(InvalidArgumentException $e) { return sprintf(' - %s', $e->getMessage()); }, [$exception0, $exception1])));
        }
        unset($exception0, $exception1);
        
        return $message;
    }
    /**
     * Set SizeCode value
     * @param string $sizeCode
     * @return \StructType\HotelMediaLinksReq
     */
    public function setSizeCode(?string $sizeCode = 'A'): self
    {
        // validation for constraint: string
        if (!is_null($sizeCode) && !is_string($sizeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sizeCode, true), gettype($sizeCode)), __LINE__);
        }
        // validation for constraint: union(typeImageSize, typeAllImageSize)
        if ('' !== ($sizeCodeUnionErrorMessage = self::validateSizeCodeForUnionConstraintsFromSetSizeCode($sizeCode))) {
            throw new InvalidArgumentException($sizeCodeUnionErrorMessage, __LINE__);
        }
        $this->SizeCode = $sizeCode;
        
        return $this;
    }
    /**
     * Get RichMedia value
     * @return bool|null
     */
    public function getRichMedia(): ?bool
    {
        return $this->RichMedia;
    }
    /**
     * Set RichMedia value
     * @param bool $richMedia
     * @return \StructType\HotelMediaLinksReq
     */
    public function setRichMedia(?bool $richMedia = true): self
    {
        // validation for constraint: boolean
        if (!is_null($richMedia) && !is_bool($richMedia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($richMedia, true), gettype($richMedia)), __LINE__);
        }
        $this->RichMedia = $richMedia;
        
        return $this;
    }
    /**
     * Get Gallery value
     * @return bool|null
     */
    public function getGallery(): ?bool
    {
        return $this->Gallery;
    }
    /**
     * Set Gallery value
     * @param bool $gallery
     * @return \StructType\HotelMediaLinksReq
     */
    public function setGallery(?bool $gallery = true): self
    {
        // validation for constraint: boolean
        if (!is_null($gallery) && !is_bool($gallery)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($gallery, true), gettype($gallery)), __LINE__);
        }
        $this->Gallery = $gallery;
        
        return $this;
    }
}
