<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTicketingReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to ticket a previously stored reservation.
 * @subpackage Structs
 */
class AirTicketingReq extends AirBaseReq
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The TicketingModifiersRef
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1P-Reference to a shared list of Ticketing Modifiers. This is supported for Worldspan providers only. When AirPricingInfoRef is used along with TicketingModifiersRef means that particular TicketingModifiers will to be
     * applied while ticketing the Stored fare corresponding to the AirPricingInfo. Absence of AirPricingInfoRef means that particular TicketingModifiers will be applied to all Stored fares which are requested to be ticketed.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeTicketingModifiersRef[]
     */
    public ?array $TicketingModifiersRef = null;
    /**
     * The WaiverCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: WaiverCode
     * @var \Travelport\Air\StructType\WaiverCode|null
     */
    public ?\Travelport\Air\StructType\WaiverCode $WaiverCode = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 18
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Air\StructType\Commission[]
     */
    public ?array $Commission = null;
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
     * The FaxDetailsInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FaxDetailsInformation
     * @var \Travelport\Air\StructType\FaxDetailsInformation|null
     */
    public ?\Travelport\Air\StructType\FaxDetailsInformation $FaxDetailsInformation = null;
    /**
     * The AirTicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirTicketingModifiers
     * @var \Travelport\Air\StructType\AirTicketingModifiers[]
     */
    public ?array $AirTicketingModifiers = null;
    /**
     * The AirSegmentTicketingModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSegmentTicketingModifiers
     * @var \Travelport\Air\StructType\AirSegmentTicketingModifiers[]
     */
    public ?array $AirSegmentTicketingModifiers = null;
    /**
     * The ReturnInfoOnFail
     * Meta information extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnInfoOnFail = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $BulkTicket = null;
    /**
     * The ValidateSpanishResidency
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G - If set as true, Spanish Residency will be validated for Provisioned Customers.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ValidateSpanishResidency = null;
    /**
     * Constructor method for AirTicketingReq
     * @uses AirTicketingReq::setAirReservationLocatorCode()
     * @uses AirTicketingReq::setAirPricingInfoRef()
     * @uses AirTicketingReq::setTicketingModifiersRef()
     * @uses AirTicketingReq::setWaiverCode()
     * @uses AirTicketingReq::setCommission()
     * @uses AirTicketingReq::setDetailedBillingInformation()
     * @uses AirTicketingReq::setFaxDetailsInformation()
     * @uses AirTicketingReq::setAirTicketingModifiers()
     * @uses AirTicketingReq::setAirSegmentTicketingModifiers()
     * @uses AirTicketingReq::setReturnInfoOnFail()
     * @uses AirTicketingReq::setBulkTicket()
     * @uses AirTicketingReq::setValidateSpanishResidency()
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\Air\StructType\TypeTicketingModifiersRef[] $ticketingModifiersRef
     * @param \Travelport\Air\StructType\WaiverCode $waiverCode
     * @param \Travelport\Air\StructType\Commission[] $commission
     * @param \Travelport\Air\StructType\DetailedBillingInformation[] $detailedBillingInformation
     * @param \Travelport\Air\StructType\FaxDetailsInformation $faxDetailsInformation
     * @param \Travelport\Air\StructType\AirTicketingModifiers[] $airTicketingModifiers
     * @param \Travelport\Air\StructType\AirSegmentTicketingModifiers[] $airSegmentTicketingModifiers
     * @param bool $returnInfoOnFail
     * @param bool $bulkTicket
     * @param bool $validateSpanishResidency
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $airPricingInfoRef = null, ?array $ticketingModifiersRef = null, ?\Travelport\Air\StructType\WaiverCode $waiverCode = null, ?array $commission = null, ?array $detailedBillingInformation = null, ?\Travelport\Air\StructType\FaxDetailsInformation $faxDetailsInformation = null, ?array $airTicketingModifiers = null, ?array $airSegmentTicketingModifiers = null, ?bool $returnInfoOnFail = true, ?bool $bulkTicket = false, ?bool $validateSpanishResidency = false)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTicketingModifiersRef($ticketingModifiersRef)
            ->setWaiverCode($waiverCode)
            ->setCommission($commission)
            ->setDetailedBillingInformation($detailedBillingInformation)
            ->setFaxDetailsInformation($faxDetailsInformation)
            ->setAirTicketingModifiers($airTicketingModifiers)
            ->setAirSegmentTicketingModifiers($airSegmentTicketingModifiers)
            ->setReturnInfoOnFail($returnInfoOnFail)
            ->setBulkTicket($bulkTicket)
            ->setValidateSpanishResidency($validateSpanishResidency);
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
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * Set AirPricingInfoRef value
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirPricingInfoRef $item
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function addToAirPricingInfoRef(\Travelport\Air\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TicketingModifiersRef value
     * @return \Travelport\Air\StructType\TypeTicketingModifiersRef[]
     */
    public function getTicketingModifiersRef(): ?array
    {
        return $this->TicketingModifiersRef;
    }
    /**
     * Set TicketingModifiersRef value
     * @param \Travelport\Air\StructType\TypeTicketingModifiersRef[] $ticketingModifiersRef
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setTicketingModifiersRef(?array $ticketingModifiersRef = null): self
    {
        $this->TicketingModifiersRef = $ticketingModifiersRef;
        
        return $this;
    }
    /**
     * Add item to TicketingModifiersRef value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TypeTicketingModifiersRef $item
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function addToTicketingModifiersRef(\Travelport\Air\StructType\TypeTicketingModifiersRef $item): self
    {
        $this->TicketingModifiersRef[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverCode value
     * @return \Travelport\Air\StructType\WaiverCode|null
     */
    public function getWaiverCode(): ?\Travelport\Air\StructType\WaiverCode
    {
        return $this->WaiverCode;
    }
    /**
     * Set WaiverCode value
     * @param \Travelport\Air\StructType\WaiverCode $waiverCode
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setWaiverCode(?\Travelport\Air\StructType\WaiverCode $waiverCode = null): self
    {
        $this->WaiverCode = $waiverCode;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Air\StructType\Commission[]
     */
    public function getCommission(): ?array
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Air\StructType\Commission[] $commission
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setCommission(?array $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Add item to Commission value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Commission $item
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function addToCommission(\Travelport\Air\StructType\Commission $item): self
    {
        $this->Commission[] = $item;
        
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
     * @return \Travelport\Air\StructType\AirTicketingReq
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
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function addToDetailedBillingInformation(\Travelport\Air\StructType\DetailedBillingInformation $item): self
    {
        $this->DetailedBillingInformation[] = $item;
        
        return $this;
    }
    /**
     * Get FaxDetailsInformation value
     * @return \Travelport\Air\StructType\FaxDetailsInformation|null
     */
    public function getFaxDetailsInformation(): ?\Travelport\Air\StructType\FaxDetailsInformation
    {
        return $this->FaxDetailsInformation;
    }
    /**
     * Set FaxDetailsInformation value
     * @param \Travelport\Air\StructType\FaxDetailsInformation $faxDetailsInformation
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setFaxDetailsInformation(?\Travelport\Air\StructType\FaxDetailsInformation $faxDetailsInformation = null): self
    {
        $this->FaxDetailsInformation = $faxDetailsInformation;
        
        return $this;
    }
    /**
     * Get AirTicketingModifiers value
     * @return \Travelport\Air\StructType\AirTicketingModifiers[]
     */
    public function getAirTicketingModifiers(): ?array
    {
        return $this->AirTicketingModifiers;
    }
    /**
     * Set AirTicketingModifiers value
     * @param \Travelport\Air\StructType\AirTicketingModifiers[] $airTicketingModifiers
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setAirTicketingModifiers(?array $airTicketingModifiers = null): self
    {
        $this->AirTicketingModifiers = $airTicketingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirTicketingModifiers $item
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function addToAirTicketingModifiers(\Travelport\Air\StructType\AirTicketingModifiers $item): self
    {
        $this->AirTicketingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get AirSegmentTicketingModifiers value
     * @return \Travelport\Air\StructType\AirSegmentTicketingModifiers[]
     */
    public function getAirSegmentTicketingModifiers(): ?array
    {
        return $this->AirSegmentTicketingModifiers;
    }
    /**
     * Set AirSegmentTicketingModifiers value
     * @param \Travelport\Air\StructType\AirSegmentTicketingModifiers[] $airSegmentTicketingModifiers
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setAirSegmentTicketingModifiers(?array $airSegmentTicketingModifiers = null): self
    {
        $this->AirSegmentTicketingModifiers = $airSegmentTicketingModifiers;
        
        return $this;
    }
    /**
     * Add item to AirSegmentTicketingModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSegmentTicketingModifiers $item
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function addToAirSegmentTicketingModifiers(\Travelport\Air\StructType\AirSegmentTicketingModifiers $item): self
    {
        $this->AirSegmentTicketingModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnInfoOnFail value
     * @return bool|null
     */
    public function getReturnInfoOnFail(): ?bool
    {
        return $this->ReturnInfoOnFail;
    }
    /**
     * Set ReturnInfoOnFail value
     * @param bool $returnInfoOnFail
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setReturnInfoOnFail(?bool $returnInfoOnFail = true): self
    {
        $this->ReturnInfoOnFail = $returnInfoOnFail;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return bool|null
     */
    public function getBulkTicket(): ?bool
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param bool $bulkTicket
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setBulkTicket(?bool $bulkTicket = false): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get ValidateSpanishResidency value
     * @return bool|null
     */
    public function getValidateSpanishResidency(): ?bool
    {
        return $this->ValidateSpanishResidency;
    }
    /**
     * Set ValidateSpanishResidency value
     * @param bool $validateSpanishResidency
     * @return \Travelport\Air\StructType\AirTicketingReq
     */
    public function setValidateSpanishResidency(?bool $validateSpanishResidency = false): self
    {
        $this->ValidateSpanishResidency = $validateSpanishResidency;
        
        return $this;
    }
}
