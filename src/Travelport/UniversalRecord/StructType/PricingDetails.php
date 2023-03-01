<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Used for rapid reprice. This is a response element. Additional information about how pricing was obtain, messages, etc. Providers: 1G/1V/1P/1S/1A
 * @subpackage Structs
 */
class PricingDetails extends AbstractStructBase
{
    /**
     * The AdvisoryMessage
     * Meta information extracted from the WSDL
     * - documentation: Advisory messages returned from the host.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $AdvisoryMessage = null;
    /**
     * The EndorsementText
     * Meta information extracted from the WSDL
     * - documentation: Endorsement text returned from the host.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $EndorsementText = null;
    /**
     * The WaiverText
     * Meta information extracted from the WSDL
     * - documentation: Waiver text returned from the host.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $WaiverText = null;
    /**
     * The LowFarePricing
     * Meta information extracted from the WSDL
     * - documentation: This tells if Low Fare Finder was used.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $LowFarePricing = null;
    /**
     * The LowFareFound
     * Meta information extracted from the WSDL
     * - documentation: This tells if the lowest fare was found.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $LowFareFound = null;
    /**
     * The PenaltyApplies
     * Meta information extracted from the WSDL
     * - documentation: This tells if penalties apply.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $PenaltyApplies = null;
    /**
     * The DiscountApplies
     * Meta information extracted from the WSDL
     * - documentation: This tells if a discount applies.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $DiscountApplies = null;
    /**
     * The ItineraryType
     * Meta information extracted from the WSDL
     * - documentation: Values allowed are International or Domestic. This tells if the itinerary is international or domestic.
     * - use: optional
     * @var string|null
     */
    public ?string $ItineraryType = null;
    /**
     * The ValidatingVendorCode
     * Meta information extracted from the WSDL
     * - documentation: The vendor code of the validating carrier. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ValidatingVendorCode = null;
    /**
     * The ForTicketingOnDate
     * Meta information extracted from the WSDL
     * - documentation: The ticketing date of the itinerary.
     * - use: optional
     * @var string|null
     */
    public ?string $ForTicketingOnDate = null;
    /**
     * The LastDateToTicket
     * Meta information extracted from the WSDL
     * - documentation: The last date to issue the ticket.
     * - use: optional
     * @var string|null
     */
    public ?string $LastDateToTicket = null;
    /**
     * The FormOfRefund
     * Meta information extracted from the WSDL
     * - documentation: How the refund will be issued. Values will be MCO or FormOfPayment
     * - use: optional
     * @var string|null
     */
    public ?string $FormOfRefund = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
    /**
     * The BankersSellingRate
     * Meta information extracted from the WSDL
     * - documentation: The selling rate at time of quote.
     * - use: optional
     * @var float|null
     */
    public ?float $BankersSellingRate = null;
    /**
     * The PricingType
     * Meta information extracted from the WSDL
     * - documentation: Ties with the RepricingModifiers sent in the request and tells how the itinerary was priced.
     * - use: optional
     * @var string|null
     */
    public ?string $PricingType = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: The conversion rate at the time of quote.
     * - use: optional
     * @var float|null
     */
    public ?float $ConversionRate = null;
    /**
     * The RateOfExchange
     * Meta information extracted from the WSDL
     * - documentation: The exchange rate at time of quote.
     * - use: optional
     * @var float|null
     */
    public ?float $RateOfExchange = null;
    /**
     * The OriginalTicketCurrency
     * Meta information extracted from the WSDL
     * - documentation: The currency of the original ticket. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalTicketCurrency = null;
    /**
     * Constructor method for PricingDetails
     * @uses PricingDetails::setAdvisoryMessage()
     * @uses PricingDetails::setEndorsementText()
     * @uses PricingDetails::setWaiverText()
     * @uses PricingDetails::setLowFarePricing()
     * @uses PricingDetails::setLowFareFound()
     * @uses PricingDetails::setPenaltyApplies()
     * @uses PricingDetails::setDiscountApplies()
     * @uses PricingDetails::setItineraryType()
     * @uses PricingDetails::setValidatingVendorCode()
     * @uses PricingDetails::setForTicketingOnDate()
     * @uses PricingDetails::setLastDateToTicket()
     * @uses PricingDetails::setFormOfRefund()
     * @uses PricingDetails::setAccountCode()
     * @uses PricingDetails::setBankersSellingRate()
     * @uses PricingDetails::setPricingType()
     * @uses PricingDetails::setConversionRate()
     * @uses PricingDetails::setRateOfExchange()
     * @uses PricingDetails::setOriginalTicketCurrency()
     * @param string[] $advisoryMessage
     * @param string[] $endorsementText
     * @param string $waiverText
     * @param bool $lowFarePricing
     * @param bool $lowFareFound
     * @param bool $penaltyApplies
     * @param bool $discountApplies
     * @param string $itineraryType
     * @param string $validatingVendorCode
     * @param string $forTicketingOnDate
     * @param string $lastDateToTicket
     * @param string $formOfRefund
     * @param string $accountCode
     * @param float $bankersSellingRate
     * @param string $pricingType
     * @param float $conversionRate
     * @param float $rateOfExchange
     * @param string $originalTicketCurrency
     */
    public function __construct(?array $advisoryMessage = null, ?array $endorsementText = null, ?string $waiverText = null, ?bool $lowFarePricing = false, ?bool $lowFareFound = false, ?bool $penaltyApplies = false, ?bool $discountApplies = false, ?string $itineraryType = null, ?string $validatingVendorCode = null, ?string $forTicketingOnDate = null, ?string $lastDateToTicket = null, ?string $formOfRefund = null, ?string $accountCode = null, ?float $bankersSellingRate = null, ?string $pricingType = null, ?float $conversionRate = null, ?float $rateOfExchange = null, ?string $originalTicketCurrency = null)
    {
        $this
            ->setAdvisoryMessage($advisoryMessage)
            ->setEndorsementText($endorsementText)
            ->setWaiverText($waiverText)
            ->setLowFarePricing($lowFarePricing)
            ->setLowFareFound($lowFareFound)
            ->setPenaltyApplies($penaltyApplies)
            ->setDiscountApplies($discountApplies)
            ->setItineraryType($itineraryType)
            ->setValidatingVendorCode($validatingVendorCode)
            ->setForTicketingOnDate($forTicketingOnDate)
            ->setLastDateToTicket($lastDateToTicket)
            ->setFormOfRefund($formOfRefund)
            ->setAccountCode($accountCode)
            ->setBankersSellingRate($bankersSellingRate)
            ->setPricingType($pricingType)
            ->setConversionRate($conversionRate)
            ->setRateOfExchange($rateOfExchange)
            ->setOriginalTicketCurrency($originalTicketCurrency);
    }
    /**
     * Get AdvisoryMessage value
     * @return string[]
     */
    public function getAdvisoryMessage(): ?array
    {
        return $this->AdvisoryMessage;
    }
    /**
     * Set AdvisoryMessage value
     * @param string[] $advisoryMessage
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setAdvisoryMessage(?array $advisoryMessage = null): self
    {
        $this->AdvisoryMessage = $advisoryMessage;
        
        return $this;
    }
    /**
     * Add item to AdvisoryMessage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function addToAdvisoryMessage(string $item): self
    {
        $this->AdvisoryMessage[] = $item;
        
        return $this;
    }
    /**
     * Get EndorsementText value
     * @return string[]
     */
    public function getEndorsementText(): ?array
    {
        return $this->EndorsementText;
    }
    /**
     * Set EndorsementText value
     * @param string[] $endorsementText
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setEndorsementText(?array $endorsementText = null): self
    {
        $this->EndorsementText = $endorsementText;
        
        return $this;
    }
    /**
     * Add item to EndorsementText value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function addToEndorsementText(string $item): self
    {
        $this->EndorsementText[] = $item;
        
        return $this;
    }
    /**
     * Get WaiverText value
     * @return string|null
     */
    public function getWaiverText(): ?string
    {
        return $this->WaiverText;
    }
    /**
     * Set WaiverText value
     * @param string $waiverText
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setWaiverText(?string $waiverText = null): self
    {
        $this->WaiverText = $waiverText;
        
        return $this;
    }
    /**
     * Get LowFarePricing value
     * @return bool|null
     */
    public function getLowFarePricing(): ?bool
    {
        return $this->LowFarePricing;
    }
    /**
     * Set LowFarePricing value
     * @param bool $lowFarePricing
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setLowFarePricing(?bool $lowFarePricing = false): self
    {
        $this->LowFarePricing = $lowFarePricing;
        
        return $this;
    }
    /**
     * Get LowFareFound value
     * @return bool|null
     */
    public function getLowFareFound(): ?bool
    {
        return $this->LowFareFound;
    }
    /**
     * Set LowFareFound value
     * @param bool $lowFareFound
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setLowFareFound(?bool $lowFareFound = false): self
    {
        $this->LowFareFound = $lowFareFound;
        
        return $this;
    }
    /**
     * Get PenaltyApplies value
     * @return bool|null
     */
    public function getPenaltyApplies(): ?bool
    {
        return $this->PenaltyApplies;
    }
    /**
     * Set PenaltyApplies value
     * @param bool $penaltyApplies
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setPenaltyApplies(?bool $penaltyApplies = false): self
    {
        $this->PenaltyApplies = $penaltyApplies;
        
        return $this;
    }
    /**
     * Get DiscountApplies value
     * @return bool|null
     */
    public function getDiscountApplies(): ?bool
    {
        return $this->DiscountApplies;
    }
    /**
     * Set DiscountApplies value
     * @param bool $discountApplies
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setDiscountApplies(?bool $discountApplies = false): self
    {
        $this->DiscountApplies = $discountApplies;
        
        return $this;
    }
    /**
     * Get ItineraryType value
     * @return string|null
     */
    public function getItineraryType(): ?string
    {
        return $this->ItineraryType;
    }
    /**
     * Set ItineraryType value
     * @param string $itineraryType
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setItineraryType(?string $itineraryType = null): self
    {
        $this->ItineraryType = $itineraryType;
        
        return $this;
    }
    /**
     * Get ValidatingVendorCode value
     * @return string|null
     */
    public function getValidatingVendorCode(): ?string
    {
        return $this->ValidatingVendorCode;
    }
    /**
     * Set ValidatingVendorCode value
     * @param string $validatingVendorCode
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setValidatingVendorCode(?string $validatingVendorCode = null): self
    {
        $this->ValidatingVendorCode = $validatingVendorCode;
        
        return $this;
    }
    /**
     * Get ForTicketingOnDate value
     * @return string|null
     */
    public function getForTicketingOnDate(): ?string
    {
        return $this->ForTicketingOnDate;
    }
    /**
     * Set ForTicketingOnDate value
     * @param string $forTicketingOnDate
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setForTicketingOnDate(?string $forTicketingOnDate = null): self
    {
        $this->ForTicketingOnDate = $forTicketingOnDate;
        
        return $this;
    }
    /**
     * Get LastDateToTicket value
     * @return string|null
     */
    public function getLastDateToTicket(): ?string
    {
        return $this->LastDateToTicket;
    }
    /**
     * Set LastDateToTicket value
     * @param string $lastDateToTicket
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setLastDateToTicket(?string $lastDateToTicket = null): self
    {
        $this->LastDateToTicket = $lastDateToTicket;
        
        return $this;
    }
    /**
     * Get FormOfRefund value
     * @return string|null
     */
    public function getFormOfRefund(): ?string
    {
        return $this->FormOfRefund;
    }
    /**
     * Set FormOfRefund value
     * @param string $formOfRefund
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setFormOfRefund(?string $formOfRefund = null): self
    {
        $this->FormOfRefund = $formOfRefund;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get BankersSellingRate value
     * @return float|null
     */
    public function getBankersSellingRate(): ?float
    {
        return $this->BankersSellingRate;
    }
    /**
     * Set BankersSellingRate value
     * @param float $bankersSellingRate
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setBankersSellingRate(?float $bankersSellingRate = null): self
    {
        $this->BankersSellingRate = $bankersSellingRate;
        
        return $this;
    }
    /**
     * Get PricingType value
     * @return string|null
     */
    public function getPricingType(): ?string
    {
        return $this->PricingType;
    }
    /**
     * Set PricingType value
     * @param string $pricingType
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setPricingType(?string $pricingType = null): self
    {
        $this->PricingType = $pricingType;
        
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return float|null
     */
    public function getConversionRate(): ?float
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param float $conversionRate
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        $this->ConversionRate = $conversionRate;
        
        return $this;
    }
    /**
     * Get RateOfExchange value
     * @return float|null
     */
    public function getRateOfExchange(): ?float
    {
        return $this->RateOfExchange;
    }
    /**
     * Set RateOfExchange value
     * @param float $rateOfExchange
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setRateOfExchange(?float $rateOfExchange = null): self
    {
        $this->RateOfExchange = $rateOfExchange;
        
        return $this;
    }
    /**
     * Get OriginalTicketCurrency value
     * @return string|null
     */
    public function getOriginalTicketCurrency(): ?string
    {
        return $this->OriginalTicketCurrency;
    }
    /**
     * Set OriginalTicketCurrency value
     * @param string $originalTicketCurrency
     * @return \Travelport\UniversalRecord\StructType\PricingDetails
     */
    public function setOriginalTicketCurrency(?string $originalTicketCurrency = null): self
    {
        $this->OriginalTicketCurrency = $originalTicketCurrency;
        
        return $this;
    }
}
