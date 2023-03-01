<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDetailsReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve the details of a hotel property
 * @subpackage Structs
 */
class HotelDetailsReq extends BaseHotelDetailsReq
{
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Hotel\StructType\HostToken|null
     */
    public ?\Travelport\Hotel\StructType\HostToken $HostToken = null;
    /**
     * The NextResultReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:NextResultReference
     * @var \Travelport\Hotel\StructType\NextResultReference|null
     */
    public ?\Travelport\Hotel\StructType\NextResultReference $NextResultReference = null;
    /**
     * The ReturnMediaLinks
     * Meta information extracted from the WSDL
     * - documentation: If true, return the media links. Not supported by all providers
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnMediaLinks = null;
    /**
     * The ReturnGuestReviews
     * Meta information extracted from the WSDL
     * - documentation: If true, return reviews and comments for the hotel property. Not supported by all providers
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnGuestReviews = null;
    /**
     * The PolicyReference
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to pass in a value on the request which would be used to link to a ‘Policy Group’ in a policy engine external to UAPI. | Type for PolicyReference attribute.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PolicyReference = null;
    /**
     * Constructor method for HotelDetailsReq
     * @uses HotelDetailsReq::setHostToken()
     * @uses HotelDetailsReq::setNextResultReference()
     * @uses HotelDetailsReq::setReturnMediaLinks()
     * @uses HotelDetailsReq::setReturnGuestReviews()
     * @uses HotelDetailsReq::setPolicyReference()
     * @param \Travelport\Hotel\StructType\HostToken $hostToken
     * @param \Travelport\Hotel\StructType\NextResultReference $nextResultReference
     * @param bool $returnMediaLinks
     * @param bool $returnGuestReviews
     * @param string $policyReference
     */
    public function __construct(?\Travelport\Hotel\StructType\HostToken $hostToken = null, ?\Travelport\Hotel\StructType\NextResultReference $nextResultReference = null, ?bool $returnMediaLinks = false, ?bool $returnGuestReviews = false, ?string $policyReference = null)
    {
        $this
            ->setHostToken($hostToken)
            ->setNextResultReference($nextResultReference)
            ->setReturnMediaLinks($returnMediaLinks)
            ->setReturnGuestReviews($returnGuestReviews)
            ->setPolicyReference($policyReference);
    }
    /**
     * Get HostToken value
     * @return \Travelport\Hotel\StructType\HostToken|null
     */
    public function getHostToken(): ?\Travelport\Hotel\StructType\HostToken
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Hotel\StructType\HostToken $hostToken
     * @return \Travelport\Hotel\StructType\HotelDetailsReq
     */
    public function setHostToken(?\Travelport\Hotel\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Get NextResultReference value
     * @return \Travelport\Hotel\StructType\NextResultReference|null
     */
    public function getNextResultReference(): ?\Travelport\Hotel\StructType\NextResultReference
    {
        return $this->NextResultReference;
    }
    /**
     * Set NextResultReference value
     * @param \Travelport\Hotel\StructType\NextResultReference $nextResultReference
     * @return \Travelport\Hotel\StructType\HotelDetailsReq
     */
    public function setNextResultReference(?\Travelport\Hotel\StructType\NextResultReference $nextResultReference = null): self
    {
        $this->NextResultReference = $nextResultReference;
        
        return $this;
    }
    /**
     * Get ReturnMediaLinks value
     * @return bool|null
     */
    public function getReturnMediaLinks(): ?bool
    {
        return $this->ReturnMediaLinks;
    }
    /**
     * Set ReturnMediaLinks value
     * @param bool $returnMediaLinks
     * @return \Travelport\Hotel\StructType\HotelDetailsReq
     */
    public function setReturnMediaLinks(?bool $returnMediaLinks = false): self
    {
        $this->ReturnMediaLinks = $returnMediaLinks;
        
        return $this;
    }
    /**
     * Get ReturnGuestReviews value
     * @return bool|null
     */
    public function getReturnGuestReviews(): ?bool
    {
        return $this->ReturnGuestReviews;
    }
    /**
     * Set ReturnGuestReviews value
     * @param bool $returnGuestReviews
     * @return \Travelport\Hotel\StructType\HotelDetailsReq
     */
    public function setReturnGuestReviews(?bool $returnGuestReviews = false): self
    {
        $this->ReturnGuestReviews = $returnGuestReviews;
        
        return $this;
    }
    /**
     * Get PolicyReference value
     * @return string|null
     */
    public function getPolicyReference(): ?string
    {
        return $this->PolicyReference;
    }
    /**
     * Set PolicyReference value
     * @param string $policyReference
     * @return \Travelport\Hotel\StructType\HotelDetailsReq
     */
    public function setPolicyReference(?string $policyReference = null): self
    {
        $this->PolicyReference = $policyReference;
        
        return $this;
    }
}
