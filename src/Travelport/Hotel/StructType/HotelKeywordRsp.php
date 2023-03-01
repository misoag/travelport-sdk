<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelKeywordRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response showing keyword details of a given hotel chain or property
 * @subpackage Structs
 */
class HotelKeywordRsp extends BaseRsp
{
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
     * The Keyword
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Keyword
     * @var \Travelport\Hotel\StructType\Keyword[]
     */
    public ?array $Keyword = null;
    /**
     * Constructor method for HotelKeywordRsp
     * @uses HotelKeywordRsp::setMarketingInformation()
     * @uses HotelKeywordRsp::setKeyword()
     * @param \Travelport\Hotel\StructType\MarketingInformation $marketingInformation
     * @param \Travelport\Hotel\StructType\Keyword[] $keyword
     */
    public function __construct(?\Travelport\Hotel\StructType\MarketingInformation $marketingInformation = null, ?array $keyword = null)
    {
        $this
            ->setMarketingInformation($marketingInformation)
            ->setKeyword($keyword);
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
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp
     */
    public function setMarketingInformation(?\Travelport\Hotel\StructType\MarketingInformation $marketingInformation = null): self
    {
        $this->MarketingInformation = $marketingInformation;
        
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
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp
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
     * @return \Travelport\Hotel\StructType\HotelKeywordRsp
     */
    public function addToKeyword(\Travelport\Hotel\StructType\Keyword $item): self
    {
        $this->Keyword[] = $item;
        
        return $this;
    }
}
