<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\Hotel\StructType\TypeHotelReferencePoint $ReferencePoint = null;
    /**
     * The HotelSearchResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelSearchResult
     * @var \Travelport\Hotel\StructType\HotelSearchResult[]
     */
    protected ?array $HotelSearchResult = null;
    /**
     * The MarketingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:MarketingInformation
     * @var \Travelport\Hotel\StructType\MarketingInformation|null
     */
    protected ?\Travelport\Hotel\StructType\MarketingInformation $MarketingInformation = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Hotel\StructType\HostToken|null
     */
    protected ?\Travelport\Hotel\StructType\HostToken $HostToken = null;
    /**
     * The AddressSearchQuality
     * Meta information extracted from the WSDL
     * - documentation: Indicates the address matching level success for hotel address or Postal Code searches. Valid values: "1"-"8". Providers 1G, 1V.
     * - use: optional
     * @var int|null
     */
    protected ?int $AddressSearchQuality = null;
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
     * This method is responsible for validating the value(s) passed to the setHotelSearchResult method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelSearchResult method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelSearchResultForArrayConstraintFromSetHotelSearchResult(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseHotelSearchRspHotelSearchResultItem) {
            // validation for constraint: itemType
            if (!$baseHotelSearchRspHotelSearchResultItem instanceof \Travelport\Hotel\StructType\HotelSearchResult) {
                $invalidValues[] = is_object($baseHotelSearchRspHotelSearchResultItem) ? get_class($baseHotelSearchRspHotelSearchResultItem) : sprintf('%s(%s)', gettype($baseHotelSearchRspHotelSearchResultItem), var_export($baseHotelSearchRspHotelSearchResultItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelSearchResult property can only contain items of type \Travelport\Hotel\StructType\HotelSearchResult, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelSearchResult value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelSearchResult[] $hotelSearchResult
     * @return \Travelport\Hotel\StructType\BaseHotelSearchRsp
     */
    public function setHotelSearchResult(?array $hotelSearchResult = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelSearchResultArrayErrorMessage = self::validateHotelSearchResultForArrayConstraintFromSetHotelSearchResult($hotelSearchResult))) {
            throw new InvalidArgumentException($hotelSearchResultArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelSearchResult) && count($hotelSearchResult) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelSearchResult)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelSearchResult) {
            throw new InvalidArgumentException(sprintf('The HotelSearchResult property can only contain items of type \Travelport\Hotel\StructType\HotelSearchResult, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelSearchResult) && count($this->HotelSearchResult) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelSearchResult)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($addressSearchQuality) && !(is_int($addressSearchQuality) || ctype_digit($addressSearchQuality))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressSearchQuality, true), gettype($addressSearchQuality)), __LINE__);
        }
        $this->AddressSearchQuality = $addressSearchQuality;
        
        return $this;
    }
}
