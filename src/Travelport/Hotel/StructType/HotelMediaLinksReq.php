<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The HotelProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: 20
     * - ref: HotelProperty
     * @var \Travelport\Hotel\StructType\HotelProperty[]
     */
    public ?array $HotelProperty = null;
    /**
     * The SecureLinks
     * Meta information extracted from the WSDL
     * - documentation: Request URLs returned use secured site (https) references. Default is true
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $SecureLinks = null;
    /**
     * The SizeCode
     * Meta information extracted from the WSDL
     * - documentation: Requested image size. Default is to get ALL images
     * - default: A
     * - union: typeImageSize | typeAllImageSize
     * - use: optional
     * @var string|null
     */
    public ?string $SizeCode = null;
    /**
     * The RichMedia
     * Meta information extracted from the WSDL
     * - documentation: Request the Rich Media link. Default is true
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $RichMedia = null;
    /**
     * The Gallery
     * Meta information extracted from the WSDL
     * - documentation: Request the Image Gallery link. Default is true
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $Gallery = null;
    /**
     * Constructor method for HotelMediaLinksReq
     * @uses HotelMediaLinksReq::setPermittedProviders()
     * @uses HotelMediaLinksReq::setHotelProperty()
     * @uses HotelMediaLinksReq::setSecureLinks()
     * @uses HotelMediaLinksReq::setSizeCode()
     * @uses HotelMediaLinksReq::setRichMedia()
     * @uses HotelMediaLinksReq::setGallery()
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @param \Travelport\Hotel\StructType\HotelProperty[] $hotelProperty
     * @param bool $secureLinks
     * @param string $sizeCode
     * @param bool $richMedia
     * @param bool $gallery
     */
    public function __construct(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null, ?array $hotelProperty = null, ?bool $secureLinks = true, ?string $sizeCode = 'A', ?bool $richMedia = true, ?bool $gallery = true)
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
     * @return \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\Travelport\Hotel\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function setPermittedProviders(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get HotelProperty value
     * @return \Travelport\Hotel\StructType\HotelProperty[]
     */
    public function getHotelProperty(): ?array
    {
        return $this->HotelProperty;
    }
    /**
     * Set HotelProperty value
     * @param \Travelport\Hotel\StructType\HotelProperty[] $hotelProperty
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function setHotelProperty(?array $hotelProperty = null): self
    {
        $this->HotelProperty = $hotelProperty;
        
        return $this;
    }
    /**
     * Add item to HotelProperty value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelProperty $item
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function addToHotelProperty(\Travelport\Hotel\StructType\HotelProperty $item): self
    {
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
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function setSecureLinks(?bool $secureLinks = true): self
    {
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
     * Set SizeCode value
     * @param string $sizeCode
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function setSizeCode(?string $sizeCode = 'A'): self
    {
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
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function setRichMedia(?bool $richMedia = true): self
    {
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
     * @return \Travelport\Hotel\StructType\HotelMediaLinksReq
     */
    public function setGallery(?bool $gallery = true): self
    {
        $this->Gallery = $gallery;
        
        return $this;
    }
}
