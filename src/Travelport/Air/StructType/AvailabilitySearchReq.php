<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailabilitySearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Availability Search request.
 * @subpackage Structs
 */
class AvailabilitySearchReq extends AirSearchReq
{
    /**
     * The SearchPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: 18
     * - minOccurs: 0
     * - ref: common:SearchPassenger
     * @var \Travelport\Air\StructType\SearchPassenger[]
     */
    public ?array $SearchPassenger = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Air\StructType\PointOfSale[]
     */
    public ?array $PointOfSale = null;
    /**
     * The ReturnBrandIndicator
     * Meta information extracted from the WSDL
     * - documentation: When set to “true”, the Brand Indicator can be returned in the availability search response. Provider: 1G, 1V, 1P, ACH
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnBrandIndicator = null;
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ChannelId = null;
    /**
     * The NSCC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $NSCC = null;
    /**
     * Constructor method for AvailabilitySearchReq
     * @uses AvailabilitySearchReq::setSearchPassenger()
     * @uses AvailabilitySearchReq::setPointOfSale()
     * @uses AvailabilitySearchReq::setReturnBrandIndicator()
     * @uses AvailabilitySearchReq::setChannelId()
     * @uses AvailabilitySearchReq::setNSCC()
     * @param \Travelport\Air\StructType\SearchPassenger[] $searchPassenger
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @param bool $returnBrandIndicator
     * @param string $channelId
     * @param string $nSCC
     */
    public function __construct(?array $searchPassenger = null, ?array $pointOfSale = null, ?bool $returnBrandIndicator = false, ?string $channelId = null, ?string $nSCC = null)
    {
        $this
            ->setSearchPassenger($searchPassenger)
            ->setPointOfSale($pointOfSale)
            ->setReturnBrandIndicator($returnBrandIndicator)
            ->setChannelId($channelId)
            ->setNSCC($nSCC);
    }
    /**
     * Get SearchPassenger value
     * @return \Travelport\Air\StructType\SearchPassenger[]
     */
    public function getSearchPassenger(): ?array
    {
        return $this->SearchPassenger;
    }
    /**
     * Set SearchPassenger value
     * @param \Travelport\Air\StructType\SearchPassenger[] $searchPassenger
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function setSearchPassenger(?array $searchPassenger = null): self
    {
        $this->SearchPassenger = $searchPassenger;
        
        return $this;
    }
    /**
     * Add item to SearchPassenger value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchPassenger $item
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function addToSearchPassenger(\Travelport\Air\StructType\SearchPassenger $item): self
    {
        $this->SearchPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Air\StructType\PointOfSale[]
     */
    public function getPointOfSale(): ?array
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Air\StructType\PointOfSale[] $pointOfSale
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function setPointOfSale(?array $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Add item to PointOfSale value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PointOfSale $item
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function addToPointOfSale(\Travelport\Air\StructType\PointOfSale $item): self
    {
        $this->PointOfSale[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnBrandIndicator value
     * @return bool|null
     */
    public function getReturnBrandIndicator(): ?bool
    {
        return $this->ReturnBrandIndicator;
    }
    /**
     * Set ReturnBrandIndicator value
     * @param bool $returnBrandIndicator
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function setReturnBrandIndicator(?bool $returnBrandIndicator = false): self
    {
        $this->ReturnBrandIndicator = $returnBrandIndicator;
        
        return $this;
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId(): ?string
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function setChannelId(?string $channelId = null): self
    {
        $this->ChannelId = $channelId;
        
        return $this;
    }
    /**
     * Get NSCC value
     * @return string|null
     */
    public function getNSCC(): ?string
    {
        return $this->NSCC;
    }
    /**
     * Set NSCC value
     * @param string $nSCC
     * @return \Travelport\Air\StructType\AvailabilitySearchReq
     */
    public function setNSCC(?string $nSCC = null): self
    {
        $this->NSCC = $nSCC;
        
        return $this;
    }
}
