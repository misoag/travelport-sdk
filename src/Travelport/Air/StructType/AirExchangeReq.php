<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to exchange an itinerary
 * @subpackage Structs
 */
class AirExchangeReq extends BaseReq
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:TicketNumber
     * @var string[]
     */
    public ?array $TicketNumber = null;
    /**
     * The SpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SpecificSeatAssignment
     * @var \Travelport\Air\StructType\SpecificSeatAssignment[]
     */
    public ?array $SpecificSeatAssignment = null;
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirPricingSolution
     * @var \Travelport\Air\StructType\AirPricingSolution[]
     */
    public ?array $AirPricingSolution = null;
    /**
     * The AirExchangeModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirExchangeModifiers
     * @var \Travelport\Air\StructType\AirExchangeModifiers|null
     */
    public ?\Travelport\Air\StructType\AirExchangeModifiers $AirExchangeModifiers = null;
    /**
     * The AirExchangeBundleTotal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AirExchangeBundleTotal
     * @var \Travelport\Air\StructType\AirExchangeBundleTotal|null
     */
    public ?\Travelport\Air\StructType\AirExchangeBundleTotal $AirExchangeBundleTotal = null;
    /**
     * The AirExchangeBundle
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirExchangeBundle
     * @var \Travelport\Air\StructType\AirExchangeBundle[]
     */
    public ?array $AirExchangeBundle = null;
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\Air\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OptionalServices
     * @var \Travelport\Air\StructType\OptionalServices|null
     */
    public ?\Travelport\Air\StructType\OptionalServices $OptionalServices = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment|null
     */
    public ?\Travelport\Air\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\Air\StructType\FormOfPaymentRef|null
     */
    public ?\Travelport\Air\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The SSRInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SSRInfo
     * @var \Travelport\Air\StructType\SSRInfo[]
     */
    public ?array $SSRInfo = null;
    /**
     * The AddSvc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: common:AddSvc
     * @var \Travelport\Air\StructType\AddSvc|null
     */
    public ?\Travelport\Air\StructType\AddSvc $AddSvc = null;
    /**
     * The ReturnReservation
     * Meta information extracted from the WSDL
     * - documentation: Provider: ACH.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnReservation = null;
    /**
     * Constructor method for AirExchangeReq
     * @uses AirExchangeReq::setAirReservationLocatorCode()
     * @uses AirExchangeReq::setTicketNumber()
     * @uses AirExchangeReq::setSpecificSeatAssignment()
     * @uses AirExchangeReq::setAirPricingSolution()
     * @uses AirExchangeReq::setAirExchangeModifiers()
     * @uses AirExchangeReq::setAirExchangeBundleTotal()
     * @uses AirExchangeReq::setAirExchangeBundle()
     * @uses AirExchangeReq::setHostToken()
     * @uses AirExchangeReq::setOptionalServices()
     * @uses AirExchangeReq::setFormOfPayment()
     * @uses AirExchangeReq::setFormOfPaymentRef()
     * @uses AirExchangeReq::setSSRInfo()
     * @uses AirExchangeReq::setAddSvc()
     * @uses AirExchangeReq::setReturnReservation()
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param string[] $ticketNumber
     * @param \Travelport\Air\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     * @param \Travelport\Air\StructType\HostToken[] $hostToken
     * @param \Travelport\Air\StructType\OptionalServices $optionalServices
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\Air\StructType\SSRInfo[] $sSRInfo
     * @param \Travelport\Air\StructType\AddSvc $addSvc
     * @param bool $returnReservation
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $ticketNumber = null, ?array $specificSeatAssignment = null, ?array $airPricingSolution = null, ?\Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers = null, ?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null, ?array $airExchangeBundle = null, ?array $hostToken = null, ?\Travelport\Air\StructType\OptionalServices $optionalServices = null, ?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null, ?\Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $sSRInfo = null, ?\Travelport\Air\StructType\AddSvc $addSvc = null, ?bool $returnReservation = false)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setTicketNumber($ticketNumber)
            ->setSpecificSeatAssignment($specificSeatAssignment)
            ->setAirPricingSolution($airPricingSolution)
            ->setAirExchangeModifiers($airExchangeModifiers)
            ->setAirExchangeBundleTotal($airExchangeBundleTotal)
            ->setAirExchangeBundle($airExchangeBundle)
            ->setHostToken($hostToken)
            ->setOptionalServices($optionalServices)
            ->setFormOfPayment($formOfPayment)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setSSRInfo($sSRInfo)
            ->setAddSvc($addSvc)
            ->setReturnReservation($returnReservation);
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Air\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string[]
     */
    public function getTicketNumber(): ?array
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string[] $ticketNumber
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setTicketNumber(?array $ticketNumber = null): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Add item to TicketNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get SpecificSeatAssignment value
     * @return \Travelport\Air\StructType\SpecificSeatAssignment[]
     */
    public function getSpecificSeatAssignment(): ?array
    {
        return $this->SpecificSeatAssignment;
    }
    /**
     * Set SpecificSeatAssignment value
     * @param \Travelport\Air\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        $this->SpecificSeatAssignment = $specificSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SpecificSeatAssignment $item
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function addToSpecificSeatAssignment(\Travelport\Air\StructType\SpecificSeatAssignment $item): self
    {
        $this->SpecificSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\Air\StructType\AirPricingSolution[]
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution;
    }
    /**
     * Set AirPricingSolution value
     * @param \Travelport\Air\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingSolution $item
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function addToAirPricingSolution(\Travelport\Air\StructType\AirPricingSolution $item): self
    {
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get AirExchangeModifiers value
     * @return \Travelport\Air\StructType\AirExchangeModifiers|null
     */
    public function getAirExchangeModifiers(): ?\Travelport\Air\StructType\AirExchangeModifiers
    {
        return $this->AirExchangeModifiers;
    }
    /**
     * Set AirExchangeModifiers value
     * @param \Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setAirExchangeModifiers(?\Travelport\Air\StructType\AirExchangeModifiers $airExchangeModifiers = null): self
    {
        $this->AirExchangeModifiers = $airExchangeModifiers;
        
        return $this;
    }
    /**
     * Get AirExchangeBundleTotal value
     * @return \Travelport\Air\StructType\AirExchangeBundleTotal|null
     */
    public function getAirExchangeBundleTotal(): ?\Travelport\Air\StructType\AirExchangeBundleTotal
    {
        return $this->AirExchangeBundleTotal;
    }
    /**
     * Set AirExchangeBundleTotal value
     * @param \Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setAirExchangeBundleTotal(?\Travelport\Air\StructType\AirExchangeBundleTotal $airExchangeBundleTotal = null): self
    {
        $this->AirExchangeBundleTotal = $airExchangeBundleTotal;
        
        return $this;
    }
    /**
     * Get AirExchangeBundle value
     * @return \Travelport\Air\StructType\AirExchangeBundle[]
     */
    public function getAirExchangeBundle(): ?array
    {
        return $this->AirExchangeBundle;
    }
    /**
     * Set AirExchangeBundle value
     * @param \Travelport\Air\StructType\AirExchangeBundle[] $airExchangeBundle
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setAirExchangeBundle(?array $airExchangeBundle = null): self
    {
        $this->AirExchangeBundle = $airExchangeBundle;
        
        return $this;
    }
    /**
     * Add item to AirExchangeBundle value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirExchangeBundle $item
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function addToAirExchangeBundle(\Travelport\Air\StructType\AirExchangeBundle $item): self
    {
        $this->AirExchangeBundle[] = $item;
        
        return $this;
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
     * @return \Travelport\Air\StructType\AirExchangeReq
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
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function addToHostToken(\Travelport\Air\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setOptionalServices(?\Travelport\Air\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\Air\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setFormOfPayment(?\Travelport\Air\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\Air\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\Air\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setFormOfPaymentRef(?\Travelport\Air\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get SSRInfo value
     * @return \Travelport\Air\StructType\SSRInfo[]
     */
    public function getSSRInfo(): ?array
    {
        return $this->SSRInfo;
    }
    /**
     * Set SSRInfo value
     * @param \Travelport\Air\StructType\SSRInfo[] $sSRInfo
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setSSRInfo(?array $sSRInfo = null): self
    {
        $this->SSRInfo = $sSRInfo;
        
        return $this;
    }
    /**
     * Add item to SSRInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SSRInfo $item
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function addToSSRInfo(\Travelport\Air\StructType\SSRInfo $item): self
    {
        $this->SSRInfo[] = $item;
        
        return $this;
    }
    /**
     * Get AddSvc value
     * @return \Travelport\Air\StructType\AddSvc|null
     */
    public function getAddSvc(): ?\Travelport\Air\StructType\AddSvc
    {
        return $this->AddSvc;
    }
    /**
     * Set AddSvc value
     * @param \Travelport\Air\StructType\AddSvc $addSvc
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setAddSvc(?\Travelport\Air\StructType\AddSvc $addSvc = null): self
    {
        $this->AddSvc = $addSvc;
        
        return $this;
    }
    /**
     * Get ReturnReservation value
     * @return bool|null
     */
    public function getReturnReservation(): ?bool
    {
        return $this->ReturnReservation;
    }
    /**
     * Set ReturnReservation value
     * @param bool $returnReservation
     * @return \Travelport\Air\StructType\AirExchangeReq
     */
    public function setReturnReservation(?bool $returnReservation = false): self
    {
        $this->ReturnReservation = $returnReservation;
        
        return $this;
    }
}
