<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LowFareSearchRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Low Fare Search Response
 * @subpackage Structs
 */
class LowFareSearchRsp extends AirSearchRsp
{
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: required
     * @var string
     */
    public string $CurrencyType;
    /**
     * The BrandList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BrandList
     * @var \Travelport\Air\StructType\BrandList|null
     */
    public ?\Travelport\Air\StructType\BrandList $BrandList = null;
    /**
     * Constructor method for LowFareSearchRsp
     * @uses LowFareSearchRsp::setCurrencyType()
     * @uses LowFareSearchRsp::setBrandList()
     * @param string $currencyType
     * @param \Travelport\Air\StructType\BrandList $brandList
     */
    public function __construct(string $currencyType, ?\Travelport\Air\StructType\BrandList $brandList = null)
    {
        $this
            ->setCurrencyType($currencyType)
            ->setBrandList($brandList);
    }
    /**
     * Get CurrencyType value
     * @return string
     */
    public function getCurrencyType(): string
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param string $currencyType
     * @return \Travelport\Air\StructType\LowFareSearchRsp
     */
    public function setCurrencyType(string $currencyType): self
    {
        $this->CurrencyType = $currencyType;
        
        return $this;
    }
    /**
     * Get BrandList value
     * @return \Travelport\Air\StructType\BrandList|null
     */
    public function getBrandList(): ?\Travelport\Air\StructType\BrandList
    {
        return $this->BrandList;
    }
    /**
     * Set BrandList value
     * @param \Travelport\Air\StructType\BrandList $brandList
     * @return \Travelport\Air\StructType\LowFareSearchRsp
     */
    public function setBrandList(?\Travelport\Air\StructType\BrandList $brandList = null): self
    {
        $this->BrandList = $brandList;
        
        return $this;
    }
}
