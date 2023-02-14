<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?array $AdvisoryMessage = null;
    /**
     * The EndorsementText
     * Meta information extracted from the WSDL
     * - documentation: Endorsement text returned from the host.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $EndorsementText = null;
    /**
     * The WaiverText
     * Meta information extracted from the WSDL
     * - documentation: Waiver text returned from the host.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $WaiverText = null;
    /**
     * The LowFarePricing
     * Meta information extracted from the WSDL
     * - documentation: This tells if Low Fare Finder was used.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $LowFarePricing = null;
    /**
     * The LowFareFound
     * Meta information extracted from the WSDL
     * - documentation: This tells if the lowest fare was found.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $LowFareFound = null;
    /**
     * The PenaltyApplies
     * Meta information extracted from the WSDL
     * - documentation: This tells if penalties apply.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PenaltyApplies = null;
    /**
     * The DiscountApplies
     * Meta information extracted from the WSDL
     * - documentation: This tells if a discount applies.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DiscountApplies = null;
    /**
     * The ItineraryType
     * Meta information extracted from the WSDL
     * - documentation: Values allowed are International or Domestic. This tells if the itinerary is international or domestic.
     * - use: optional
     * @var string|null
     */
    protected ?string $ItineraryType = null;
    /**
     * The ValidatingVendorCode
     * Meta information extracted from the WSDL
     * - documentation: The vendor code of the validating carrier. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ValidatingVendorCode = null;
    /**
     * The ForTicketingOnDate
     * Meta information extracted from the WSDL
     * - documentation: The ticketing date of the itinerary.
     * - use: optional
     * @var string|null
     */
    protected ?string $ForTicketingOnDate = null;
    /**
     * The LastDateToTicket
     * Meta information extracted from the WSDL
     * - documentation: The last date to issue the ticket.
     * - use: optional
     * @var string|null
     */
    protected ?string $LastDateToTicket = null;
    /**
     * The FormOfRefund
     * Meta information extracted from the WSDL
     * - documentation: How the refund will be issued. Values will be MCO or FormOfPayment
     * - use: optional
     * @var string|null
     */
    protected ?string $FormOfRefund = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountCode = null;
    /**
     * The BankersSellingRate
     * Meta information extracted from the WSDL
     * - documentation: The selling rate at time of quote.
     * - use: optional
     * @var float|null
     */
    protected ?float $BankersSellingRate = null;
    /**
     * The PricingType
     * Meta information extracted from the WSDL
     * - documentation: Ties with the RepricingModifiers sent in the request and tells how the itinerary was priced.
     * - use: optional
     * @var string|null
     */
    protected ?string $PricingType = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: The conversion rate at the time of quote.
     * - use: optional
     * @var float|null
     */
    protected ?float $ConversionRate = null;
    /**
     * The RateOfExchange
     * Meta information extracted from the WSDL
     * - documentation: The exchange rate at time of quote.
     * - use: optional
     * @var float|null
     */
    protected ?float $RateOfExchange = null;
    /**
     * The OriginalTicketCurrency
     * Meta information extracted from the WSDL
     * - documentation: The currency of the original ticket. | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalTicketCurrency = null;
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
     * This method is responsible for validating the values passed to the setAdvisoryMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdvisoryMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdvisoryMessageForArrayConstraintsFromSetAdvisoryMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricingDetailsAdvisoryMessageItem) {
            // validation for constraint: itemType
            if (!is_string($pricingDetailsAdvisoryMessageItem)) {
                $invalidValues[] = is_object($pricingDetailsAdvisoryMessageItem) ? get_class($pricingDetailsAdvisoryMessageItem) : sprintf('%s(%s)', gettype($pricingDetailsAdvisoryMessageItem), var_export($pricingDetailsAdvisoryMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdvisoryMessage property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdvisoryMessage value
     * @throws InvalidArgumentException
     * @param string[] $advisoryMessage
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setAdvisoryMessage(?array $advisoryMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($advisoryMessageArrayErrorMessage = self::validateAdvisoryMessageForArrayConstraintsFromSetAdvisoryMessage($advisoryMessage))) {
            throw new InvalidArgumentException($advisoryMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($advisoryMessage) && count($advisoryMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($advisoryMessage)), __LINE__);
        }
        $this->AdvisoryMessage = $advisoryMessage;
        
        return $this;
    }
    /**
     * Add item to AdvisoryMessage value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function addToAdvisoryMessage(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The AdvisoryMessage property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AdvisoryMessage) && count($this->AdvisoryMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AdvisoryMessage)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setEndorsementText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEndorsementText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEndorsementTextForArrayConstraintsFromSetEndorsementText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricingDetailsEndorsementTextItem) {
            // validation for constraint: itemType
            if (!is_string($pricingDetailsEndorsementTextItem)) {
                $invalidValues[] = is_object($pricingDetailsEndorsementTextItem) ? get_class($pricingDetailsEndorsementTextItem) : sprintf('%s(%s)', gettype($pricingDetailsEndorsementTextItem), var_export($pricingDetailsEndorsementTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EndorsementText property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EndorsementText value
     * @throws InvalidArgumentException
     * @param string[] $endorsementText
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setEndorsementText(?array $endorsementText = null): self
    {
        // validation for constraint: array
        if ('' !== ($endorsementTextArrayErrorMessage = self::validateEndorsementTextForArrayConstraintsFromSetEndorsementText($endorsementText))) {
            throw new InvalidArgumentException($endorsementTextArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($endorsementText) && count($endorsementText) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($endorsementText)), __LINE__);
        }
        $this->EndorsementText = $endorsementText;
        
        return $this;
    }
    /**
     * Add item to EndorsementText value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function addToEndorsementText(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The EndorsementText property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EndorsementText) && count($this->EndorsementText) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EndorsementText)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setWaiverText(?string $waiverText = null): self
    {
        // validation for constraint: string
        if (!is_null($waiverText) && !is_string($waiverText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($waiverText, true), gettype($waiverText)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setLowFarePricing(?bool $lowFarePricing = false): self
    {
        // validation for constraint: boolean
        if (!is_null($lowFarePricing) && !is_bool($lowFarePricing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lowFarePricing, true), gettype($lowFarePricing)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setLowFareFound(?bool $lowFareFound = false): self
    {
        // validation for constraint: boolean
        if (!is_null($lowFareFound) && !is_bool($lowFareFound)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lowFareFound, true), gettype($lowFareFound)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setPenaltyApplies(?bool $penaltyApplies = false): self
    {
        // validation for constraint: boolean
        if (!is_null($penaltyApplies) && !is_bool($penaltyApplies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($penaltyApplies, true), gettype($penaltyApplies)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setDiscountApplies(?bool $discountApplies = false): self
    {
        // validation for constraint: boolean
        if (!is_null($discountApplies) && !is_bool($discountApplies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($discountApplies, true), gettype($discountApplies)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeItineraryCode::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeItineraryCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $itineraryType
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setItineraryType(?string $itineraryType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeItineraryCode::valueIsValid($itineraryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeItineraryCode', is_array($itineraryType) ? implode(', ', $itineraryType) : var_export($itineraryType, true), implode(', ', \Travelport\Util\EnumType\TypeItineraryCode::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setValidatingVendorCode(?string $validatingVendorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($validatingVendorCode) && !is_string($validatingVendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validatingVendorCode, true), gettype($validatingVendorCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($validatingVendorCode) && mb_strlen((string) $validatingVendorCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $validatingVendorCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setForTicketingOnDate(?string $forTicketingOnDate = null): self
    {
        // validation for constraint: string
        if (!is_null($forTicketingOnDate) && !is_string($forTicketingOnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forTicketingOnDate, true), gettype($forTicketingOnDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setLastDateToTicket(?string $lastDateToTicket = null): self
    {
        // validation for constraint: string
        if (!is_null($lastDateToTicket) && !is_string($lastDateToTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastDateToTicket, true), gettype($lastDateToTicket)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeFormOfRefund::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFormOfRefund::getValidValues()
     * @throws InvalidArgumentException
     * @param string $formOfRefund
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setFormOfRefund(?string $formOfRefund = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFormOfRefund::valueIsValid($formOfRefund)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFormOfRefund', is_array($formOfRefund) ? implode(', ', $formOfRefund) : var_export($formOfRefund, true), implode(', ', \Travelport\Util\EnumType\TypeFormOfRefund::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setBankersSellingRate(?float $bankersSellingRate = null): self
    {
        // validation for constraint: float
        if (!is_null($bankersSellingRate) && !(is_float($bankersSellingRate) || is_numeric($bankersSellingRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bankersSellingRate, true), gettype($bankersSellingRate)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypePricingType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypePricingType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $pricingType
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setPricingType(?string $pricingType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypePricingType::valueIsValid($pricingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypePricingType', is_array($pricingType) ? implode(', ', $pricingType) : var_export($pricingType, true), implode(', ', \Travelport\Util\EnumType\TypePricingType::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        // validation for constraint: float
        if (!is_null($conversionRate) && !(is_float($conversionRate) || is_numeric($conversionRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($conversionRate, true), gettype($conversionRate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setRateOfExchange(?float $rateOfExchange = null): self
    {
        // validation for constraint: float
        if (!is_null($rateOfExchange) && !(is_float($rateOfExchange) || is_numeric($rateOfExchange))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rateOfExchange, true), gettype($rateOfExchange)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PricingDetails
     */
    public function setOriginalTicketCurrency(?string $originalTicketCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalTicketCurrency) && !is_string($originalTicketCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalTicketCurrency, true), gettype($originalTicketCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($originalTicketCurrency) && mb_strlen((string) $originalTicketCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $originalTicketCurrency)), __LINE__);
        }
        $this->OriginalTicketCurrency = $originalTicketCurrency;
        
        return $this;
    }
}
