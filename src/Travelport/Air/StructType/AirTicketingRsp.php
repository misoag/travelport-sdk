<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTicketingRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to ticket a previously stored reservation.
 * @subpackage Structs
 */
class AirTicketingRsp extends BaseRsp
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
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ETR
     * @var \Travelport\Air\StructType\ETR[]
     */
    public ?array $ETR = null;
    /**
     * The TicketFailureInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TicketFailureInfo
     * @var \Travelport\Air\StructType\TicketFailureInfo[]
     */
    public ?array $TicketFailureInfo = null;
    /**
     * The DetailedBillingInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: DetailedBillingInformation
     * @var \Travelport\Air\StructType\DetailedBillingInformation[]
     */
    public ?array $DetailedBillingInformation = null;
    /**
     * Constructor method for AirTicketingRsp
     * @uses AirTicketingRsp::setAirSolutionChangedInfo()
     * @uses AirTicketingRsp::setETR()
     * @uses AirTicketingRsp::setTicketFailureInfo()
     * @uses AirTicketingRsp::setDetailedBillingInformation()
     * @param \Travelport\Air\StructType\AirSolutionChangedInfo $airSolutionChangedInfo
     * @param \Travelport\Air\StructType\ETR[] $eTR
     * @param \Travelport\Air\StructType\TicketFailureInfo[] $ticketFailureInfo
     * @param \Travelport\Air\StructType\DetailedBillingInformation[] $detailedBillingInformation
     */
    public function __construct(?\Travelport\Air\StructType\AirSolutionChangedInfo $airSolutionChangedInfo = null, ?array $eTR = null, ?array $ticketFailureInfo = null, ?array $detailedBillingInformation = null)
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
     * @return \Travelport\Air\StructType\AirTicketingRsp
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
     * @return \Travelport\Air\StructType\ETR[]
     */
    public function getETR(): ?array
    {
        return $this->ETR;
    }
    /**
     * Set ETR value
     * @param \Travelport\Air\StructType\ETR[] $eTR
     * @return \Travelport\Air\StructType\AirTicketingRsp
     */
    public function setETR(?array $eTR = null): self
    {
        $this->ETR = $eTR;
        
        return $this;
    }
    /**
     * Add item to ETR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ETR $item
     * @return \Travelport\Air\StructType\AirTicketingRsp
     */
    public function addToETR(\Travelport\Air\StructType\ETR $item): self
    {
        $this->ETR[] = $item;
        
        return $this;
    }
    /**
     * Get TicketFailureInfo value
     * @return \Travelport\Air\StructType\TicketFailureInfo[]
     */
    public function getTicketFailureInfo(): ?array
    {
        return $this->TicketFailureInfo;
    }
    /**
     * Set TicketFailureInfo value
     * @param \Travelport\Air\StructType\TicketFailureInfo[] $ticketFailureInfo
     * @return \Travelport\Air\StructType\AirTicketingRsp
     */
    public function setTicketFailureInfo(?array $ticketFailureInfo = null): self
    {
        $this->TicketFailureInfo = $ticketFailureInfo;
        
        return $this;
    }
    /**
     * Add item to TicketFailureInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketFailureInfo $item
     * @return \Travelport\Air\StructType\AirTicketingRsp
     */
    public function addToTicketFailureInfo(\Travelport\Air\StructType\TicketFailureInfo $item): self
    {
        $this->TicketFailureInfo[] = $item;
        
        return $this;
    }
    /**
     * Get DetailedBillingInformation value
     * @return \Travelport\Air\StructType\DetailedBillingInformation[]
     */
    public function getDetailedBillingInformation(): ?array
    {
        return $this->DetailedBillingInformation;
    }
    /**
     * Set DetailedBillingInformation value
     * @param \Travelport\Air\StructType\DetailedBillingInformation[] $detailedBillingInformation
     * @return \Travelport\Air\StructType\AirTicketingRsp
     */
    public function setDetailedBillingInformation(?array $detailedBillingInformation = null): self
    {
        $this->DetailedBillingInformation = $detailedBillingInformation;
        
        return $this;
    }
    /**
     * Add item to DetailedBillingInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DetailedBillingInformation $item
     * @return \Travelport\Air\StructType\AirTicketingRsp
     */
    public function addToDetailedBillingInformation(\Travelport\Air\StructType\DetailedBillingInformation $item): self
    {
        $this->DetailedBillingInformation[] = $item;
        
        return $this;
    }
}
