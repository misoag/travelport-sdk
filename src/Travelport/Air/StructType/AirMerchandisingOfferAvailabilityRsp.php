<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirMerchandisingOfferAvailabilityRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the merchandising offerings for the given passenger and itinerary.
 * @subpackage Structs
 */
class AirMerchandisingOfferAvailabilityRsp extends BaseRsp
{
    /**
     * The AirSolution
     * Meta information extracted from the WSDL
     * - ref: AirSolution
     * @var \Travelport\Air\StructType\AirSolution|null
     */
    public ?\Travelport\Air\StructType\AirSolution $AirSolution = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\Air\StructType\Remark|null
     */
    public ?\Travelport\Air\StructType\Remark $Remark = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The EmbargoList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: EmbargoList
     * @var \Travelport\Air\StructType\EmbargoList|null
     */
    public ?\Travelport\Air\StructType\EmbargoList $EmbargoList = null;
    /**
     * Constructor method for AirMerchandisingOfferAvailabilityRsp
     * @uses AirMerchandisingOfferAvailabilityRsp::setAirSolution()
     * @uses AirMerchandisingOfferAvailabilityRsp::setRemark()
     * @uses AirMerchandisingOfferAvailabilityRsp::setOptionalServices()
     * @uses AirMerchandisingOfferAvailabilityRsp::setEmbargoList()
     * @param \Travelport\Air\StructType\AirSolution $airSolution
     * @param \Travelport\Air\StructType\Remark $remark
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\EmbargoList $embargoList
     */
    public function __construct(?\Travelport\Air\StructType\AirSolution $airSolution = null, ?\Travelport\Air\StructType\Remark $remark = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?\Travelport\Air\StructType\EmbargoList $embargoList = null)
    {
        $this
            ->setAirSolution($airSolution)
            ->setRemark($remark)
            ->setOptionalServices($optionalServices)
            ->setEmbargoList($embargoList);
    }
    /**
     * Get AirSolution value
     * @return \Travelport\Air\StructType\AirSolution|null
     */
    public function getAirSolution(): ?\Travelport\Air\StructType\AirSolution
    {
        return $this->AirSolution;
    }
    /**
     * Set AirSolution value
     * @param \Travelport\Air\StructType\AirSolution $airSolution
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityRsp
     */
    public function setAirSolution(?\Travelport\Air\StructType\AirSolution $airSolution = null): self
    {
        $this->AirSolution = $airSolution;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\Air\StructType\Remark|null
     */
    public function getRemark(): ?\Travelport\Air\StructType\Remark
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\Air\StructType\Remark $remark
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityRsp
     */
    public function setRemark(?\Travelport\Air\StructType\Remark $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityRsp
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get EmbargoList value
     * @return \Travelport\Air\StructType\EmbargoList|null
     */
    public function getEmbargoList(): ?\Travelport\Air\StructType\EmbargoList
    {
        return $this->EmbargoList;
    }
    /**
     * Set EmbargoList value
     * @param \Travelport\Air\StructType\EmbargoList $embargoList
     * @return \Travelport\Air\StructType\AirMerchandisingOfferAvailabilityRsp
     */
    public function setEmbargoList(?\Travelport\Air\StructType\EmbargoList $embargoList = null): self
    {
        $this->EmbargoList = $embargoList;
        
        return $this;
    }
}
