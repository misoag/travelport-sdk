<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapRsp StructType
 * @subpackage Structs
 */
class SeatMapRsp extends BaseRsp
{
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CabinClass
     * @var \Travelport\Air\StructType\CabinClass|null
     */
    public ?\Travelport\Air\StructType\CabinClass $CabinClass = null;
    /**
     * The AirSegment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AirSegment
     * @var \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public ?array $AirSegment = null;
    /**
     * The SearchTraveler
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SearchTraveler
     * @var \Travelport\Air\StructType\SearchTraveler[]
     */
    public ?array $SearchTraveler = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\Air\StructType\Remark|null
     */
    public ?\Travelport\Air\StructType\Remark $Remark = null;
    /**
     * The Rows
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: Rows
     * @var \Travelport\Air\StructType\Rows[]
     */
    public ?array $Rows = null;
    /**
     * The PaymentRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:PaymentRestriction
     * @var \Travelport\Air\StructType\PaymentRestriction[]
     */
    public ?array $PaymentRestriction = null;
    /**
     * The SeatInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SeatInformation
     * @var \Travelport\Air\StructType\SeatInformation[]
     */
    public ?array $SeatInformation = null;
    /**
     * The Copyright
     * Meta information extracted from the WSDL
     * - documentation: Copyright text applicable for some seat content. Providers: 1G, 1V, 1P,ACH
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $Copyright = null;
    /**
     * The GroupSeatPrice
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V-Seat price for the all passengers traveling together only when supplier provides group flat fee. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $GroupSeatPrice = null;
    /**
     * Constructor method for SeatMapRsp
     * @uses SeatMapRsp::setHostToken()
     * @uses SeatMapRsp::setCabinClass()
     * @uses SeatMapRsp::setAirSegment()
     * @uses SeatMapRsp::setSearchTraveler()
     * @uses SeatMapRsp::setOptionalServices()
     * @uses SeatMapRsp::setRemark()
     * @uses SeatMapRsp::setRows()
     * @uses SeatMapRsp::setPaymentRestriction()
     * @uses SeatMapRsp::setSeatInformation()
     * @uses SeatMapRsp::setCopyright()
     * @uses SeatMapRsp::setGroupSeatPrice()
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @param \Travelport\Air\StructType\SearchTraveler[] $searchTraveler
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\Remark $remark
     * @param \Travelport\Air\StructType\Rows[] $rows
     * @param \Travelport\Air\StructType\PaymentRestriction[] $paymentRestriction
     * @param \Travelport\Air\StructType\SeatInformation[] $seatInformation
     * @param string $copyright
     * @param string $groupSeatPrice
     */
    public function __construct(?array $hostToken = null, ?\Travelport\Air\StructType\CabinClass $cabinClass = null, ?array $airSegment = null, ?array $searchTraveler = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?\Travelport\Air\StructType\Remark $remark = null, ?array $rows = null, ?array $paymentRestriction = null, ?array $seatInformation = null, ?string $copyright = null, ?string $groupSeatPrice = null)
    {
        $this
            ->setHostToken($hostToken)
            ->setCabinClass($cabinClass)
            ->setAirSegment($airSegment)
            ->setSearchTraveler($searchTraveler)
            ->setOptionalServices($optionalServices)
            ->setRemark($remark)
            ->setRows($rows)
            ->setPaymentRestriction($paymentRestriction)
            ->setSeatInformation($seatInformation)
            ->setCopyright($copyright)
            ->setGroupSeatPrice($groupSeatPrice);
    }
    /**
     * Get HostToken value
     * @return \Travelport\Air\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\HostToken $item
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\Air\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\Air\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\Air\StructType\CabinClass $cabinClass
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setCabinClass(?\Travelport\Air\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get AirSegment value
     * @return \Travelport\Air\StructType\TypeBaseAirSegment[]
     */
    public function getAirSegment(): ?array
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param \Travelport\Air\StructType\TypeBaseAirSegment[] $airSegment
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setAirSegment(?array $airSegment = null): self
    {
        $this->AirSegment = $airSegment;
        
        return $this;
    }
    /**
     * Add item to AirSegment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeBaseAirSegment $item
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function addToAirSegment(\Travelport\Air\StructType\TypeBaseAirSegment $item): self
    {
        $this->AirSegment[] = $item;
        
        return $this;
    }
    /**
     * Get SearchTraveler value
     * @return \Travelport\Air\StructType\SearchTraveler[]
     */
    public function getSearchTraveler(): ?array
    {
        return $this->SearchTraveler;
    }
    /**
     * Set SearchTraveler value
     * @param \Travelport\Air\StructType\SearchTraveler[] $searchTraveler
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setSearchTraveler(?array $searchTraveler = null): self
    {
        $this->SearchTraveler = $searchTraveler;
        
        return $this;
    }
    /**
     * Add item to SearchTraveler value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SearchTraveler $item
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function addToSearchTraveler(\Travelport\Air\StructType\SearchTraveler $item): self
    {
        $this->SearchTraveler[] = $item;
        
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
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
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
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setRemark(?\Travelport\Air\StructType\Remark $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Get Rows value
     * @return \Travelport\Air\StructType\Rows[]
     */
    public function getRows(): ?array
    {
        return $this->Rows;
    }
    /**
     * Set Rows value
     * @param \Travelport\Air\StructType\Rows[] $rows
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setRows(?array $rows = null): self
    {
        $this->Rows = $rows;
        
        return $this;
    }
    /**
     * Add item to Rows value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Rows $item
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function addToRows(\Travelport\Air\StructType\Rows $item): self
    {
        $this->Rows[] = $item;
        
        return $this;
    }
    /**
     * Get PaymentRestriction value
     * @return \Travelport\Air\StructType\PaymentRestriction[]
     */
    public function getPaymentRestriction(): ?array
    {
        return $this->PaymentRestriction;
    }
    /**
     * Set PaymentRestriction value
     * @param \Travelport\Air\StructType\PaymentRestriction[] $paymentRestriction
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setPaymentRestriction(?array $paymentRestriction = null): self
    {
        $this->PaymentRestriction = $paymentRestriction;
        
        return $this;
    }
    /**
     * Add item to PaymentRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PaymentRestriction $item
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function addToPaymentRestriction(\Travelport\Air\StructType\PaymentRestriction $item): self
    {
        $this->PaymentRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get SeatInformation value
     * @return \Travelport\Air\StructType\SeatInformation[]
     */
    public function getSeatInformation(): ?array
    {
        return $this->SeatInformation;
    }
    /**
     * Set SeatInformation value
     * @param \Travelport\Air\StructType\SeatInformation[] $seatInformation
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setSeatInformation(?array $seatInformation = null): self
    {
        $this->SeatInformation = $seatInformation;
        
        return $this;
    }
    /**
     * Add item to SeatInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SeatInformation $item
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function addToSeatInformation(\Travelport\Air\StructType\SeatInformation $item): self
    {
        $this->SeatInformation[] = $item;
        
        return $this;
    }
    /**
     * Get Copyright value
     * @return string|null
     */
    public function getCopyright(): ?string
    {
        return $this->Copyright;
    }
    /**
     * Set Copyright value
     * @param string $copyright
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setCopyright(?string $copyright = null): self
    {
        $this->Copyright = $copyright;
        
        return $this;
    }
    /**
     * Get GroupSeatPrice value
     * @return string|null
     */
    public function getGroupSeatPrice(): ?string
    {
        return $this->GroupSeatPrice;
    }
    /**
     * Set GroupSeatPrice value
     * @param string $groupSeatPrice
     * @return \Travelport\Air\StructType\SeatMapRsp
     */
    public function setGroupSeatPrice(?string $groupSeatPrice = null): self
    {
        $this->GroupSeatPrice = $groupSeatPrice;
        
        return $this;
    }
}
