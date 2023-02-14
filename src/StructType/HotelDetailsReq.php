<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\HostToken|null
     */
    protected ?\StructType\HostToken $HostToken = null;
    /**
     * The NextResultReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:NextResultReference
     * @var \StructType\NextResultReference|null
     */
    protected ?\StructType\NextResultReference $NextResultReference = null;
    /**
     * The ReturnMediaLinks
     * Meta information extracted from the WSDL
     * - documentation: If true, return the media links. Not supported by all providers
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnMediaLinks = null;
    /**
     * The ReturnGuestReviews
     * Meta information extracted from the WSDL
     * - documentation: If true, return reviews and comments for the hotel property. Not supported by all providers
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ReturnGuestReviews = null;
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
    protected ?string $PolicyReference = null;
    /**
     * Constructor method for HotelDetailsReq
     * @uses HotelDetailsReq::setHostToken()
     * @uses HotelDetailsReq::setNextResultReference()
     * @uses HotelDetailsReq::setReturnMediaLinks()
     * @uses HotelDetailsReq::setReturnGuestReviews()
     * @uses HotelDetailsReq::setPolicyReference()
     * @param \StructType\HostToken $hostToken
     * @param \StructType\NextResultReference $nextResultReference
     * @param bool $returnMediaLinks
     * @param bool $returnGuestReviews
     * @param string $policyReference
     */
    public function __construct(?\StructType\HostToken $hostToken = null, ?\StructType\NextResultReference $nextResultReference = null, ?bool $returnMediaLinks = false, ?bool $returnGuestReviews = false, ?string $policyReference = null)
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
     * @return \StructType\HostToken|null
     */
    public function getHostToken(): ?\StructType\HostToken
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \StructType\HostToken $hostToken
     * @return \StructType\HotelDetailsReq
     */
    public function setHostToken(?\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Get NextResultReference value
     * @return \StructType\NextResultReference|null
     */
    public function getNextResultReference(): ?\StructType\NextResultReference
    {
        return $this->NextResultReference;
    }
    /**
     * Set NextResultReference value
     * @param \StructType\NextResultReference $nextResultReference
     * @return \StructType\HotelDetailsReq
     */
    public function setNextResultReference(?\StructType\NextResultReference $nextResultReference = null): self
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
     * @return \StructType\HotelDetailsReq
     */
    public function setReturnMediaLinks(?bool $returnMediaLinks = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnMediaLinks) && !is_bool($returnMediaLinks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnMediaLinks, true), gettype($returnMediaLinks)), __LINE__);
        }
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
     * @return \StructType\HotelDetailsReq
     */
    public function setReturnGuestReviews(?bool $returnGuestReviews = false): self
    {
        // validation for constraint: boolean
        if (!is_null($returnGuestReviews) && !is_bool($returnGuestReviews)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnGuestReviews, true), gettype($returnGuestReviews)), __LINE__);
        }
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
     * @return \StructType\HotelDetailsReq
     */
    public function setPolicyReference(?string $policyReference = null): self
    {
        // validation for constraint: string
        if (!is_null($policyReference) && !is_string($policyReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyReference, true), gettype($policyReference)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($policyReference) && mb_strlen((string) $policyReference) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $policyReference)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($policyReference) && mb_strlen((string) $policyReference) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $policyReference)), __LINE__);
        }
        $this->PolicyReference = $policyReference;
        
        return $this;
    }
}
