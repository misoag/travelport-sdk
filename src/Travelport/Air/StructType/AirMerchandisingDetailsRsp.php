<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirMerchandisingDetailsRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response for retrieved brand details and optional services included in them
 * @subpackage Structs
 */
class AirMerchandisingDetailsRsp extends BaseRsp
{
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Brand
     * @var \Travelport\Air\StructType\Brand[]
     */
    public ?array $Brand = null;
    /**
     * The UnassociatedBookingCodeList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\UnassociatedBookingCodeList|null
     */
    public ?\Travelport\Air\StructType\UnassociatedBookingCodeList $UnassociatedBookingCodeList = null;
    /**
     * Constructor method for AirMerchandisingDetailsRsp
     * @uses AirMerchandisingDetailsRsp::setOptionalServices()
     * @uses AirMerchandisingDetailsRsp::setBrand()
     * @uses AirMerchandisingDetailsRsp::setUnassociatedBookingCodeList()
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\Brand[] $brand
     * @param \Travelport\Air\StructType\UnassociatedBookingCodeList $unassociatedBookingCodeList
     */
    public function __construct(?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?array $brand = null, ?\Travelport\Air\StructType\UnassociatedBookingCodeList $unassociatedBookingCodeList = null)
    {
        $this
            ->setOptionalServices($optionalServices)
            ->setBrand($brand)
            ->setUnassociatedBookingCodeList($unassociatedBookingCodeList);
    }
    /**
     * Get OptionalServices value
     * @return \Travelport\Air\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\Air\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsRsp
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get Brand value
     * @return \Travelport\Air\StructType\Brand[]
     */
    public function getBrand(): ?array
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @param \Travelport\Air\StructType\Brand[] $brand
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsRsp
     */
    public function setBrand(?array $brand = null): self
    {
        $this->Brand = $brand;
        
        return $this;
    }
    /**
     * Add item to Brand value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Brand $item
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsRsp
     */
    public function addToBrand(\Travelport\Air\StructType\Brand $item): self
    {
        $this->Brand[] = $item;
        
        return $this;
    }
    /**
     * Get UnassociatedBookingCodeList value
     * @return \Travelport\Air\StructType\UnassociatedBookingCodeList|null
     */
    public function getUnassociatedBookingCodeList(): ?\Travelport\Air\StructType\UnassociatedBookingCodeList
    {
        return $this->UnassociatedBookingCodeList;
    }
    /**
     * Set UnassociatedBookingCodeList value
     * @param \Travelport\Air\StructType\UnassociatedBookingCodeList $unassociatedBookingCodeList
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsRsp
     */
    public function setUnassociatedBookingCodeList(?\Travelport\Air\StructType\UnassociatedBookingCodeList $unassociatedBookingCodeList = null): self
    {
        $this->UnassociatedBookingCodeList = $unassociatedBookingCodeList;
        
        return $this;
    }
}
