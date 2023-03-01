<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseHotelSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Base hotel Search Response
 * @subpackage Structs
 */
class BaseHotelSearchRsp extends BaseSearchRsp
{
    /**
     * The ReferencePoint
     * Meta information extracted from the WSDL
     * - documentation: Hotel reference point. Applicable for 1G,1V,1P.
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeHotelReferencePoint|null
     */
    public ?\Travelport\Hotel\StructType\TypeHotelReferencePoint $ReferencePoint = null;
    /**
     * The HotelSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelSearchResult
     * @var \Travelport\Hotel\StructType\HotelSearchResult[]
     */
    public ?array $HotelSearchResult = null;
    /**
     * The MarketingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:MarketingInformation
     * @var \Travelport\Hotel\StructType\MarketingInformation|null
     */
    public ?\Travelport\Hotel\StructType\MarketingInformation $MarketingInformation = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Hotel\StructType\HostToken|null
     */
    public ?\Travelport\Hotel\StructType\HostToken $HostToken = null;
    /**
     * The AddressSearchQuality
     * Meta information extracted from the WSDL
     * - documentation: Indicates the address matching level success for hotel address or Postal Code searches. Valid values: "1"-"8". Providers 1G, 1V.
     * - use: optional
     * @var int|null
     */
    public ?int $AddressSearchQuality = null;
    /**
     * Constructor method for BaseHotelSearchRsp
     * @uses BaseHotelSearchRsp::setReferencePoint()
     * @uses BaseHotelSearchRsp::setHotelSearchResult()
     * @uses BaseHotelSearchRsp::setMarketingInformation()
     * @uses BaseHotelSearchRsp::setHostToken()
     * @uses BaseHotelSearchRsp::setAddressSearchQuality()
     * @param \Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint
     * @param \Travelport\Hotel\StructType\HotelSearchResult[] $hotelSearchResult
     * @param \Travelport\Hotel\StructType\MarketingInformation $marketingInformation
     * @param \Travelport\Hotel\StructType\HostToken $hostToken
     * @param int $addressSearchQuality
     */
    public function __construct(?\Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint = null, ?array $hotelSearchResult = null, ?\Travelport\Hotel\StructType\MarketingInformation $marketingInformation = null, ?\Travelport\Hotel\StructType\HostToken $hostToken = null, ?int $addressSearchQuality = null)
    {
        $this
            ->setReferencePoint($referencePoint)
            ->setHotelSearchResult($hotelSearchResult)
            ->setMarketingInformation($marketingInformation)
            ->setHostToken($hostToken)
            ->setAddressSearchQuality($addressSearchQuality);
    }
    /**
     * Get ReferencePoint value
     * @return \Travelport\Hotel\StructType\TypeHotelReferencePoint|null
     */
    public function getReferencePoint(): ?\Travelport\Hotel\StructType\TypeHotelReferencePoint
    {
        return $this->ReferencePoint;
    }
    /**
     * Set ReferencePoint value
     * @param \Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function setReferencePoint(?\Travelport\Hotel\StructType\TypeHotelReferencePoint $referencePoint = null): self
    {
        $this->ReferencePoint = $referencePoint;
        
        return $this;
    }
    /**
     * Get HotelSearchResult value
     * @return \Travelport\Hotel\StructType\HotelSearchResult[]
     */
    public function getHotelSearchResult(): ?array
    {
        return $this->HotelSearchResult;
    }
    /**
     * Set HotelSearchResult value
     * @param \Travelport\Hotel\StructType\HotelSearchResult[] $hotelSearchResult
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function setHotelSearchResult(?array $hotelSearchResult = null): self
    {
        $this->HotelSearchResult = $hotelSearchResult;
        
        return $this;
    }
    /**
     * Add item to HotelSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelSearchResult $item
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function addToHotelSearchResult(\Travelport\Hotel\StructType\HotelSearchResult $item): self
    {
        $this->HotelSearchResult[] = $item;
        
        return $this;
    }
    /**
     * Get MarketingInformation value
     * @return \Travelport\Hotel\StructType\MarketingInformation|null
     */
    public function getMarketingInformation(): ?\Travelport\Hotel\StructType\MarketingInformation
    {
        return $this->MarketingInformation;
    }
    /**
     * Set MarketingInformation value
     * @param \Travelport\Hotel\StructType\MarketingInformation $marketingInformation
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function setMarketingInformation(?\Travelport\Hotel\StructType\MarketingInformation $marketingInformation = null): self
    {
        $this->MarketingInformation = $marketingInformation;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function setHostToken(?\Travelport\Hotel\StructType\HostToken $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Get AddressSearchQuality value
     * @return int|null
     */
    public function getAddressSearchQuality(): ?int
    {
        return $this->AddressSearchQuality;
    }
    /**
     * Set AddressSearchQuality value
     * @param int $addressSearchQuality
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function setAddressSearchQuality(?int $addressSearchQuality = null): self
    {
        $this->AddressSearchQuality = $addressSearchQuality;
        
        return $this;
    }
}
