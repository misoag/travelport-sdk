<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelKeywordReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve the hotel keyword details of a hotel chain or property
 * @subpackage Structs
 */
class HotelKeywordReq extends BaseReq
{
    /**
     * The HotelChain
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $HotelChain;
    /**
     * The Keyword
     * Meta information extracted from the WSDL
     * - maxOccurs: 15
     * - minOccurs: 0
     * - ref: common:Keyword
     * @var \Travelport\Hotel\StructType\Keyword[]
     */
    public ?array $Keyword = null;
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The HotelCode
     * Meta information extracted from the WSDL
     * - documentation: Unique hotel identifier for the channel
     * - base: xs:string
     * - maxLength: 32
     * - use: optional
     * @var string|null
     */
    public ?string $HotelCode = null;
    /**
     * The CheckinDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    public ?string $CheckinDate = null;
    /**
     * The ReturnKeywordList
     * Meta information extracted from the WSDL
     * - documentation: When true, a list of keyword names should be returned. If false then list of keyword details should be returned
     * @var bool|null
     */
    public ?bool $ReturnKeywordList = null;
    /**
     * Constructor method for HotelKeywordReq
     * @uses HotelKeywordReq::setHotelChain()
     * @uses HotelKeywordReq::setKeyword()
     * @uses HotelKeywordReq::setPermittedProviders()
     * @uses HotelKeywordReq::setHotelCode()
     * @uses HotelKeywordReq::setCheckinDate()
     * @uses HotelKeywordReq::setReturnKeywordList()
     * @param string $hotelChain
     * @param \Travelport\Hotel\StructType\Keyword[] $keyword
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @param string $hotelCode
     * @param string $checkinDate
     * @param bool $returnKeywordList
     */
    public function __construct(string $hotelChain, ?array $keyword = null, ?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null, ?string $hotelCode = null, ?string $checkinDate = null, ?bool $returnKeywordList = null)
    {
        $this
            ->setHotelChain($hotelChain)
            ->setKeyword($keyword)
            ->setPermittedProviders($permittedProviders)
            ->setHotelCode($hotelCode)
            ->setCheckinDate($checkinDate)
            ->setReturnKeywordList($returnKeywordList);
    }
    /**
     * Get HotelChain value
     * @return string
     */
    public function getHotelChain(): string
    {
        return $this->HotelChain;
    }
    /**
     * Set HotelChain value
     * @param string $hotelChain
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setHotelChain(string $hotelChain): self
    {
        $this->HotelChain = $hotelChain;
        
        return $this;
    }
    /**
     * Get Keyword value
     * @return \Travelport\Hotel\StructType\Keyword[]
     */
    public function getKeyword(): ?array
    {
        return $this->Keyword;
    }
    /**
     * Set Keyword value
     * @param \Travelport\Hotel\StructType\Keyword[] $keyword
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setKeyword(?array $keyword = null): self
    {
        $this->Keyword = $keyword;
        
        return $this;
    }
    /**
     * Add item to Keyword value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Keyword $item
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function addToKeyword(\Travelport\Hotel\StructType\Keyword $item): self
    {
        $this->Keyword[] = $item;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setPermittedProviders(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode(): ?string
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setHotelCode(?string $hotelCode = null): self
    {
        $this->HotelCode = $hotelCode;
        
        return $this;
    }
    /**
     * Get CheckinDate value
     * @return string|null
     */
    public function getCheckinDate(): ?string
    {
        return $this->CheckinDate;
    }
    /**
     * Set CheckinDate value
     * @param string $checkinDate
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setCheckinDate(?string $checkinDate = null): self
    {
        $this->CheckinDate = $checkinDate;
        
        return $this;
    }
    /**
     * Get ReturnKeywordList value
     * @return bool|null
     */
    public function getReturnKeywordList(): ?bool
    {
        return $this->ReturnKeywordList;
    }
    /**
     * Set ReturnKeywordList value
     * @param bool $returnKeywordList
     * @return \Travelport\Hotel\StructType\HotelKeywordReq
     */
    public function setReturnKeywordList(?bool $returnKeywordList = null): self
    {
        $this->ReturnKeywordList = $returnKeywordList;
        
        return $this;
    }
}
