<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeTicketingRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to reissue a ticket.
 * @subpackage Structs
 */
class AirExchangeTicketingRsp extends BaseRsp
{
    /**
     * The AirSolutionChangedInfo
     * Meta information extracted from the WSDL
     * - choice: AirSolutionChangedInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirSolutionChangedInfo
     * @var \Travelport\Air\StructType\AirSolutionChangedInfo|null
     */
    public ?\Travelport\Air\StructType\AirSolutionChangedInfo $AirSolutionChangedInfo = null;
    /**
     * The ETR
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ETR
     * @var \Travelport\Air\StructType\ETR|null
     */
    public ?\Travelport\Air\StructType\ETR $ETR = null;
    /**
     * The TicketFailureInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: TicketFailureInfo
     * @var \Travelport\Air\StructType\TicketFailureInfo|null
     */
    public ?\Travelport\Air\StructType\TicketFailureInfo $TicketFailureInfo = null;
    /**
     * The DetailedBillingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DetailedBillingInformation
     * @var \Travelport\Air\StructType\DetailedBillingInformation|null
     */
    public ?\Travelport\Air\StructType\DetailedBillingInformation $DetailedBillingInformation = null;
    /**
     * Constructor method for AirExchangeTicketingRsp
     * @uses AirExchangeTicketingRsp::setAirSolutionChangedInfo()
     * @uses AirExchangeTicketingRsp::setETR()
     * @uses AirExchangeTicketingRsp::setTicketFailureInfo()
     * @uses AirExchangeTicketingRsp::setDetailedBillingInformation()
     * @param \Travelport\Air\StructType\AirSolutionChangedInfo $airSolutionChangedInfo
     * @param \Travelport\Air\StructType\ETR $eTR
     * @param \Travelport\Air\StructType\TicketFailureInfo $ticketFailureInfo
     * @param \Travelport\Air\StructType\DetailedBillingInformation $detailedBillingInformation
     */
    public function __construct(?\Travelport\Air\StructType\AirSolutionChangedInfo $airSolutionChangedInfo = null, ?\Travelport\Air\StructType\ETR $eTR = null, ?\Travelport\Air\StructType\TicketFailureInfo $ticketFailureInfo = null, ?\Travelport\Air\StructType\DetailedBillingInformation $detailedBillingInformation = null)
    {
        $this
            ->setAirSolutionChangedInfo($airSolutionChangedInfo)
            ->setETR($eTR)
            ->setTicketFailureInfo($ticketFailureInfo)
            ->setDetailedBillingInformation($detailedBillingInformation);
    }
    /**
     * Get AirSolutionChangedInfo value
     * @return \Travelport\Air\StructType\AirSolutionChangedInfo|null
     */
    public function getAirSolutionChangedInfo(): ?\Travelport\Air\StructType\AirSolutionChangedInfo
    {
        return $this->AirSolutionChangedInfo ?? null;
    }
    /**
     * Set AirSolutionChangedInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\AirSolutionChangedInfo $airSolutionChangedInfo
     * @return \Travelport\Air\StructType\AirExchangeTicketingRsp
     */
    public function setAirSolutionChangedInfo(?\Travelport\Air\StructType\AirSolutionChangedInfo $airSolutionChangedInfo = null): self
    {
        if (is_null($airSolutionChangedInfo) || (is_array($airSolutionChangedInfo) && empty($airSolutionChangedInfo))) {
            unset($this->AirSolutionChangedInfo);
        } else {
            $this->AirSolutionChangedInfo = $airSolutionChangedInfo;
        }
        
        return $this;
    }
    /**
     * Get ETR value
     * @return \Travelport\Air\StructType\ETR|null
     */
    public function getETR(): ?\Travelport\Air\StructType\ETR
    {
        return $this->ETR;
    }
    /**
     * Set ETR value
     * @param \Travelport\Air\StructType\ETR $eTR
     * @return \Travelport\Air\StructType\AirExchangeTicketingRsp
     */
    public function setETR(?\Travelport\Air\StructType\ETR $eTR = null): self
    {
        $this->ETR = $eTR;
        
        return $this;
    }
    /**
     * Get TicketFailureInfo value
     * @return \Travelport\Air\StructType\TicketFailureInfo|null
     */
    public function getTicketFailureInfo(): ?\Travelport\Air\StructType\TicketFailureInfo
    {
        return $this->TicketFailureInfo;
    }
    /**
     * Set TicketFailureInfo value
     * @param \Travelport\Air\StructType\TicketFailureInfo $ticketFailureInfo
     * @return \Travelport\Air\StructType\AirExchangeTicketingRsp
     */
    public function setTicketFailureInfo(?\Travelport\Air\StructType\TicketFailureInfo $ticketFailureInfo = null): self
    {
        $this->TicketFailureInfo = $ticketFailureInfo;
        
        return $this;
    }
    /**
     * Get DetailedBillingInformation value
     * @return \Travelport\Air\StructType\DetailedBillingInformation|null
     */
    public function getDetailedBillingInformation(): ?\Travelport\Air\StructType\DetailedBillingInformation
    {
        return $this->DetailedBillingInformation;
    }
    /**
     * Set DetailedBillingInformation value
     * @param \Travelport\Air\StructType\DetailedBillingInformation $detailedBillingInformation
     * @return \Travelport\Air\StructType\AirExchangeTicketingRsp
     */
    public function setDetailedBillingInformation(?\Travelport\Air\StructType\DetailedBillingInformation $detailedBillingInformation = null): self
    {
        $this->DetailedBillingInformation = $detailedBillingInformation;
        
        return $this;
    }
}
