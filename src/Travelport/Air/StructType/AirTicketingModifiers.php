<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTicketingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Provide Payment for FOP. Providers supported: Galileo, Apollo, Worldspan. | CreditCardAuth information to be used as ticketing modifier at the time of ticketing. Providers supported: Galileo, Apollo, Worldspan. | FormOfPayment
 * information to be used as ticketing modifier at the time of ticketing. Providers supported: Galileo, Apollo, Worldspan. | Allows an agency to add the commission to a new or different commission rate which will be applied at time of ticketing. The
 * commission Modifier allows the user specify how the commission change is to applied. Providers supported: Worldspan. | Allows an agency to add user defined ticketing endorsements in the ticket. Providers supported: Worldspan. | Allows an agency to
 * modify the tour code information during ticket issuance. Providers supported: Worldspan. | Modifiers used during ticketing
 * @subpackage Structs
 */
class AirTicketingModifiers extends AbstractStructBase
{
    /**
     * The DocumentModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentModifiers
     * @var \Travelport\Air\StructType\DocumentModifiers|null
     */
    public ?\Travelport\Air\StructType\DocumentModifiers $DocumentModifiers = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\Air\StructType\AirPricingInfoRef[]
     */
    public ?array $AirPricingInfoRef = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\Air\StructType\TourCode|null
     */
    public ?\Travelport\Air\StructType\TourCode $TourCode = null;
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: TicketEndorsement
     * @var \Travelport\Air\StructType\TicketEndorsement[]
     */
    public ?array $TicketEndorsement = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Air\StructType\Commission|null
     */
    public ?\Travelport\Air\StructType\Commission $Commission = null;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:FormOfPayment
     * @var \Travelport\Air\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The CreditCardAuth
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CreditCardAuth
     * @var \Travelport\Air\StructType\CreditCardAuth[]
     */
    public ?array $CreditCardAuth = null;
    /**
     * The Payment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Payment
     * @var \Travelport\Air\StructType\Payment[]
     */
    public ?array $Payment = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier used for this ticket | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The TicketedFareOverride
     * Meta information extracted from the WSDL
     * - documentation: It is a modifier to allow re-issuance of tickets for stored fares which are already ticketed. Providers supported are 1P
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $TicketedFareOverride = null;
    /**
     * The SuppressTaxAndFee
     * Meta information extracted from the WSDL
     * - documentation: Allow to suppress Taxand Fee in ticketing response.Providers supported: Worldspan.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $SuppressTaxAndFee = null;
    /**
     * The NoComparisonSFQ
     * Meta information extracted from the WSDL
     * - documentation: 1P - Set to "true" to include the no comparison overide #NC to override the existing SFQ and issue the ticket. Only valid for AirTicketingReq, not valid for AirExchangeTicketingReq.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $NoComparisonSFQ = null;
    /**
     * Constructor method for AirTicketingModifiers
     * @uses AirTicketingModifiers::setDocumentModifiers()
     * @uses AirTicketingModifiers::setAirPricingInfoRef()
     * @uses AirTicketingModifiers::setTourCode()
     * @uses AirTicketingModifiers::setTicketEndorsement()
     * @uses AirTicketingModifiers::setCommission()
     * @uses AirTicketingModifiers::setFormOfPayment()
     * @uses AirTicketingModifiers::setCreditCardAuth()
     * @uses AirTicketingModifiers::setPayment()
     * @uses AirTicketingModifiers::setPlatingCarrier()
     * @uses AirTicketingModifiers::setTicketedFareOverride()
     * @uses AirTicketingModifiers::setSuppressTaxAndFee()
     * @uses AirTicketingModifiers::setNoComparisonSFQ()
     * @param \Travelport\Air\StructType\DocumentModifiers $documentModifiers
     * @param \Travelport\Air\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\Air\StructType\TourCode $tourCode
     * @param \Travelport\Air\StructType\TicketEndorsement[] $ticketEndorsement
     * @param \Travelport\Air\StructType\Commission $commission
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Air\StructType\CreditCardAuth[] $creditCardAuth
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @param string $platingCarrier
     * @param bool $ticketedFareOverride
     * @param bool $suppressTaxAndFee
     * @param bool $noComparisonSFQ
     */
    public function __construct(?\Travelport\Air\StructType\DocumentModifiers $documentModifiers = null, ?array $airPricingInfoRef = null, ?\Travelport\Air\StructType\TourCode $tourCode = null, ?array $ticketEndorsement = null, ?\Travelport\Air\StructType\Commission $commission = null, ?array $formOfPayment = null, ?array $creditCardAuth = null, ?array $payment = null, ?string $platingCarrier = null, ?bool $ticketedFareOverride = false, ?bool $suppressTaxAndFee = false, ?bool $noComparisonSFQ = false)
    {
        $this
            ->setDocumentModifiers($documentModifiers)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTourCode($tourCode)
            ->setTicketEndorsement($ticketEndorsement)
            ->setCommission($commission)
            ->setFormOfPayment($formOfPayment)
            ->setCreditCardAuth($creditCardAuth)
            ->setPayment($payment)
            ->setPlatingCarrier($platingCarrier)
            ->setTicketedFareOverride($ticketedFareOverride)
            ->setSuppressTaxAndFee($suppressTaxAndFee)
            ->setNoComparisonSFQ($noComparisonSFQ);
    }
    /**
     * Get DocumentModifiers value
     * @return \Travelport\Air\StructType\DocumentModifiers|null
     */
    public function getDocumentModifiers(): ?\Travelport\Air\StructType\DocumentModifiers
    {
        return $this->DocumentModifiers;
    }
    /**
     * Set DocumentModifiers value
     * @param \Travelport\Air\StructType\DocumentModifiers $documentModifiers
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setDocumentModifiers(?\Travelport\Air\StructType\DocumentModifiers $documentModifiers = null): self
    {
        $this->DocumentModifiers = $documentModifiers;
        
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
     * @return \Travelport\Air\StructType\AirTicketingModifiers
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
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function addToAirPricingInfoRef(\Travelport\Air\StructType\AirPricingInfoRef $item): self
    {
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\Air\StructType\TourCode|null
     */
    public function getTourCode(): ?\Travelport\Air\StructType\TourCode
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\Air\StructType\TourCode $tourCode
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setTourCode(?\Travelport\Air\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\Air\StructType\TicketEndorsement[]
     */
    public function getTicketEndorsement(): ?array
    {
        return $this->TicketEndorsement;
    }
    /**
     * Set TicketEndorsement value
     * @param \Travelport\Air\StructType\TicketEndorsement[] $ticketEndorsement
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setTicketEndorsement(?array $ticketEndorsement = null): self
    {
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
    /**
     * Add item to TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketEndorsement $item
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function addToTicketEndorsement(\Travelport\Air\StructType\TicketEndorsement $item): self
    {
        $this->TicketEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Air\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Air\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Air\StructType\Commission $commission
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setCommission(?\Travelport\Air\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Air\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Air\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FormOfPayment $item
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function addToFormOfPayment(\Travelport\Air\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardAuth value
     * @return \Travelport\Air\StructType\CreditCardAuth[]
     */
    public function getCreditCardAuth(): ?array
    {
        return $this->CreditCardAuth;
    }
    /**
     * Set CreditCardAuth value
     * @param \Travelport\Air\StructType\CreditCardAuth[] $creditCardAuth
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setCreditCardAuth(?array $creditCardAuth = null): self
    {
        $this->CreditCardAuth = $creditCardAuth;
        
        return $this;
    }
    /**
     * Add item to CreditCardAuth value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\CreditCardAuth $item
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function addToCreditCardAuth(\Travelport\Air\StructType\CreditCardAuth $item): self
    {
        $this->CreditCardAuth[] = $item;
        
        return $this;
    }
    /**
     * Get Payment value
     * @return \Travelport\Air\StructType\Payment[]
     */
    public function getPayment(): ?array
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @param \Travelport\Air\StructType\Payment[] $payment
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setPayment(?array $payment = null): self
    {
        $this->Payment = $payment;
        
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Payment $item
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function addToPayment(\Travelport\Air\StructType\Payment $item): self
    {
        $this->Payment[] = $item;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get TicketedFareOverride value
     * @return bool|null
     */
    public function getTicketedFareOverride(): ?bool
    {
        return $this->TicketedFareOverride;
    }
    /**
     * Set TicketedFareOverride value
     * @param bool $ticketedFareOverride
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setTicketedFareOverride(?bool $ticketedFareOverride = false): self
    {
        $this->TicketedFareOverride = $ticketedFareOverride;
        
        return $this;
    }
    /**
     * Get SuppressTaxAndFee value
     * @return bool|null
     */
    public function getSuppressTaxAndFee(): ?bool
    {
        return $this->SuppressTaxAndFee;
    }
    /**
     * Set SuppressTaxAndFee value
     * @param bool $suppressTaxAndFee
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setSuppressTaxAndFee(?bool $suppressTaxAndFee = false): self
    {
        $this->SuppressTaxAndFee = $suppressTaxAndFee;
        
        return $this;
    }
    /**
     * Get NoComparisonSFQ value
     * @return bool|null
     */
    public function getNoComparisonSFQ(): ?bool
    {
        return $this->NoComparisonSFQ;
    }
    /**
     * Set NoComparisonSFQ value
     * @param bool $noComparisonSFQ
     * @return \Travelport\Air\StructType\AirTicketingModifiers
     */
    public function setNoComparisonSFQ(?bool $noComparisonSFQ = false): self
    {
        $this->NoComparisonSFQ = $noComparisonSFQ;
        
        return $this;
    }
}
