<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirMerchandisingFulfillmentReq StructType
 * Meta information extracted from the WSDL
 * - documentation: This will fulfill the merchandised items as specified in the request. The host PNR will be updated with the services and any required charges will be added.
 * @subpackage Structs
 */
class AirMerchandisingFulfillmentReq extends BaseReq
{
    /**
     * The HostToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:HostToken
     * @var \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public ?array $HostToken = null;
    /**
     * The HostReservation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: air_v52_0:HostReservation
     * @var \Travelport\UniversalRecord\StructType\HostReservation[]
     */
    public ?array $HostReservation = null;
    /**
     * The AgencySellInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencySellInfo
     * @var \Travelport\UniversalRecord\StructType\AgencySellInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencySellInfo $AgencySellInfo = null;
    /**
     * The AirSolution
     * Meta information extracted from the WSDL
     * - ref: air_v52_0:AirSolution
     * @var \Travelport\UniversalRecord\StructType\AirSolution|null
     */
    public ?\Travelport\UniversalRecord\StructType\AirSolution $AirSolution = null;
    /**
     * The CreditCard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CreditCard
     * @var \Travelport\UniversalRecord\StructType\CreditCard|null
     */
    public ?\Travelport\UniversalRecord\StructType\CreditCard $CreditCard = null;
    /**
     * The AgencyPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AgencyPayment
     * @var \Travelport\UniversalRecord\StructType\TypeAgencyPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $AgencyPayment = null;
    /**
     * The OptionalServices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: air_v52_0:OptionalServices
     * @var \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public ?\Travelport\UniversalRecord\StructType\OptionalServices $OptionalServices = null;
    /**
     * The SpecificSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: air_v52_0:SpecificSeatAssignment
     * @var \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    public ?array $SpecificSeatAssignment = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:GeneralRemark
     * @var \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The ConfirmationEmail
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $ConfirmationEmail = null;
    /**
     * The MerchandisingPricingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: air_v52_0:MerchandisingPricingModifiers
     * @var \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers|null
     */
    public ?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $MerchandisingPricingModifiers = null;
    /**
     * Constructor method for AirMerchandisingFulfillmentReq
     * @uses AirMerchandisingFulfillmentReq::setHostToken()
     * @uses AirMerchandisingFulfillmentReq::setHostReservation()
     * @uses AirMerchandisingFulfillmentReq::setAgencySellInfo()
     * @uses AirMerchandisingFulfillmentReq::setAirSolution()
     * @uses AirMerchandisingFulfillmentReq::setCreditCard()
     * @uses AirMerchandisingFulfillmentReq::setAgencyPayment()
     * @uses AirMerchandisingFulfillmentReq::setOptionalServices()
     * @uses AirMerchandisingFulfillmentReq::setSpecificSeatAssignment()
     * @uses AirMerchandisingFulfillmentReq::setGeneralRemark()
     * @uses AirMerchandisingFulfillmentReq::setConfirmationEmail()
     * @uses AirMerchandisingFulfillmentReq::setMerchandisingPricingModifiers()
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @param \Travelport\UniversalRecord\StructType\HostReservation[] $hostReservation
     * @param \Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo
     * @param \Travelport\UniversalRecord\StructType\AirSolution $airSolution
     * @param \Travelport\UniversalRecord\StructType\CreditCard $creditCard
     * @param \Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @param string $confirmationEmail
     * @param \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     */
    public function __construct(?array $hostToken = null, ?array $hostReservation = null, ?\Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo = null, ?\Travelport\UniversalRecord\StructType\AirSolution $airSolution = null, ?\Travelport\UniversalRecord\StructType\CreditCard $creditCard = null, ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment = null, ?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null, ?array $specificSeatAssignment = null, ?array $generalRemark = null, ?string $confirmationEmail = null, ?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null)
    {
        $this
            ->setHostToken($hostToken)
            ->setHostReservation($hostReservation)
            ->setAgencySellInfo($agencySellInfo)
            ->setAirSolution($airSolution)
            ->setCreditCard($creditCard)
            ->setAgencyPayment($agencyPayment)
            ->setOptionalServices($optionalServices)
            ->setSpecificSeatAssignment($specificSeatAssignment)
            ->setGeneralRemark($generalRemark)
            ->setConfirmationEmail($confirmationEmail)
            ->setMerchandisingPricingModifiers($merchandisingPricingModifiers);
    }
    /**
     * Get HostToken value
     * @return \Travelport\UniversalRecord\StructType\HostToken[]
     */
    public function getHostToken(): ?array
    {
        return $this->HostToken;
    }
    /**
     * Set HostToken value
     * @param \Travelport\UniversalRecord\StructType\HostToken[] $hostToken
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setHostToken(?array $hostToken = null): self
    {
        $this->HostToken = $hostToken;
        
        return $this;
    }
    /**
     * Add item to HostToken value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostToken $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToHostToken(\Travelport\UniversalRecord\StructType\HostToken $item): self
    {
        $this->HostToken[] = $item;
        
        return $this;
    }
    /**
     * Get HostReservation value
     * @return \Travelport\UniversalRecord\StructType\HostReservation[]
     */
    public function getHostReservation(): ?array
    {
        return $this->HostReservation;
    }
    /**
     * Set HostReservation value
     * @param \Travelport\UniversalRecord\StructType\HostReservation[] $hostReservation
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setHostReservation(?array $hostReservation = null): self
    {
        $this->HostReservation = $hostReservation;
        
        return $this;
    }
    /**
     * Add item to HostReservation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HostReservation $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToHostReservation(\Travelport\UniversalRecord\StructType\HostReservation $item): self
    {
        $this->HostReservation[] = $item;
        
        return $this;
    }
    /**
     * Get AgencySellInfo value
     * @return \Travelport\UniversalRecord\StructType\AgencySellInfo|null
     */
    public function getAgencySellInfo(): ?\Travelport\UniversalRecord\StructType\AgencySellInfo
    {
        return $this->AgencySellInfo;
    }
    /**
     * Set AgencySellInfo value
     * @param \Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setAgencySellInfo(?\Travelport\UniversalRecord\StructType\AgencySellInfo $agencySellInfo = null): self
    {
        $this->AgencySellInfo = $agencySellInfo;
        
        return $this;
    }
    /**
     * Get AirSolution value
     * @return \Travelport\UniversalRecord\StructType\AirSolution|null
     */
    public function getAirSolution(): ?\Travelport\UniversalRecord\StructType\AirSolution
    {
        return $this->AirSolution;
    }
    /**
     * Set AirSolution value
     * @param \Travelport\UniversalRecord\StructType\AirSolution $airSolution
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setAirSolution(?\Travelport\UniversalRecord\StructType\AirSolution $airSolution = null): self
    {
        $this->AirSolution = $airSolution;
        
        return $this;
    }
    /**
     * Get CreditCard value
     * @return \Travelport\UniversalRecord\StructType\CreditCard|null
     */
    public function getCreditCard(): ?\Travelport\UniversalRecord\StructType\CreditCard
    {
        return $this->CreditCard;
    }
    /**
     * Set CreditCard value
     * @param \Travelport\UniversalRecord\StructType\CreditCard $creditCard
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setCreditCard(?\Travelport\UniversalRecord\StructType\CreditCard $creditCard = null): self
    {
        $this->CreditCard = $creditCard;
        
        return $this;
    }
    /**
     * Get AgencyPayment value
     * @return \Travelport\UniversalRecord\StructType\TypeAgencyPayment|null
     */
    public function getAgencyPayment(): ?\Travelport\UniversalRecord\StructType\TypeAgencyPayment
    {
        return $this->AgencyPayment;
    }
    /**
     * Set AgencyPayment value
     * @param \Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setAgencyPayment(?\Travelport\UniversalRecord\StructType\TypeAgencyPayment $agencyPayment = null): self
    {
        $this->AgencyPayment = $agencyPayment;
        
        return $this;
    }
    /**
     * Get OptionalServices value
     * @return \Travelport\UniversalRecord\StructType\OptionalServices|null
     */
    public function getOptionalServices(): ?\Travelport\UniversalRecord\StructType\OptionalServices
    {
        return $this->OptionalServices;
    }
    /**
     * Set OptionalServices value
     * @param \Travelport\UniversalRecord\StructType\OptionalServices $optionalServices
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setOptionalServices(?\Travelport\UniversalRecord\StructType\OptionalServices $optionalServices = null): self
    {
        $this->OptionalServices = $optionalServices;
        
        return $this;
    }
    /**
     * Get SpecificSeatAssignment value
     * @return \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[]
     */
    public function getSpecificSeatAssignment(): ?array
    {
        return $this->SpecificSeatAssignment;
    }
    /**
     * Set SpecificSeatAssignment value
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment[] $specificSeatAssignment
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setSpecificSeatAssignment(?array $specificSeatAssignment = null): self
    {
        $this->SpecificSeatAssignment = $specificSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to SpecificSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToSpecificSeatAssignment(\Travelport\UniversalRecord\StructType\SpecificSeatAssignment $item): self
    {
        $this->SpecificSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\UniversalRecord\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * Set GeneralRemark value
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GeneralRemark $item
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function addToGeneralRemark(\Travelport\UniversalRecord\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ConfirmationEmail value
     * @return string|null
     */
    public function getConfirmationEmail(): ?string
    {
        return $this->ConfirmationEmail;
    }
    /**
     * Set ConfirmationEmail value
     * @param string $confirmationEmail
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setConfirmationEmail(?string $confirmationEmail = null): self
    {
        $this->ConfirmationEmail = $confirmationEmail;
        
        return $this;
    }
    /**
     * Get MerchandisingPricingModifiers value
     * @return \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers|null
     */
    public function getMerchandisingPricingModifiers(): ?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers
    {
        return $this->MerchandisingPricingModifiers;
    }
    /**
     * Set MerchandisingPricingModifiers value
     * @param \Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers
     * @return \Travelport\UniversalRecord\StructType\AirMerchandisingFulfillmentReq
     */
    public function setMerchandisingPricingModifiers(?\Travelport\UniversalRecord\StructType\MerchandisingPricingModifiers $merchandisingPricingModifiers = null): self
    {
        $this->MerchandisingPricingModifiers = $merchandisingPricingModifiers;
        
        return $this;
    }
}
