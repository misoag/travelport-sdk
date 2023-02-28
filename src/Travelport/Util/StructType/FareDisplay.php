<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareDisplay StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns fare rule failure info for Non Valid fares. | Fare/Tariff Display
 * @subpackage Structs
 */
class FareDisplay extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $FareBasis;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Amount;
    /**
     * The FareDisplayRule
     * Meta information extracted from the WSDL
     * - ref: FareDisplayRule
     * @var \Travelport\Util\StructType\FareDisplayRule|null
     */
    protected ?\Travelport\Util\StructType\FareDisplayRule $FareDisplayRule = null;
    /**
     * The FarePricing
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FarePricing
     * @var \Travelport\Util\StructType\FarePricing[]
     */
    protected ?array $FarePricing = null;
    /**
     * The FareRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: FareRestriction
     * @var \Travelport\Util\StructType\FareRestriction[]
     */
    protected ?array $FareRestriction = null;
    /**
     * The FareRoutingInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRoutingInformation
     * @var string|null
     */
    protected ?string $FareRoutingInformation = null;
    /**
     * The FareMileageInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareMileageInformation
     * @var string|null
     */
    protected ?string $FareMileageInformation = null;
    /**
     * The AirFareDisplayRuleKey
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirFareDisplayRuleKey
     * @var \Travelport\Util\StructType\AirFareDisplayRuleKey|null
     */
    protected ?\Travelport\Util\StructType\AirFareDisplayRuleKey $AirFareDisplayRuleKey = null;
    /**
     * The BookingCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: BookingCode
     * @var \Travelport\Util\StructType\BookingCode[]
     */
    protected ?array $BookingCode = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode[]
     */
    protected ?array $AccountCode = null;
    /**
     * The AddlBookingCodeInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AddlBookingCodeInformation
     * @var \Travelport\Util\StructType\AddlBookingCodeInformation|null
     */
    protected ?\Travelport\Util\StructType\AddlBookingCodeInformation $AddlBookingCodeInformation = null;
    /**
     * The FareRuleFailureInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FareRuleFailureInfo
     * @var \Travelport\Util\StructType\FareRuleFailureInfo|null
     */
    protected ?\Travelport\Util\StructType\FareRuleFailureInfo $FareRuleFailureInfo = null;
    /**
     * The PriceChange
     * Meta information extracted from the WSDL
     * - documentation: Indicates a price change is found in Fare Control Manager
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PriceChangeType[]
     */
    protected ?array $PriceChange = null;
    /**
     * The TripType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TripType = null;
    /**
     * The FareTypeCode
     * Meta information extracted from the WSDL
     * - documentation: ATPCO fare type code (e.g. XPN)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $FareTypeCode = null;
    /**
     * The SpecialFare
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SpecialFare = null;
    /**
     * The InstantPurchase
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InstantPurchase = null;
    /**
     * The EligibilityRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $EligibilityRestricted = null;
    /**
     * The FlightRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FlightRestricted = null;
    /**
     * The StopoversRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $StopoversRestricted = null;
    /**
     * The TransfersRestricted
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $TransfersRestricted = null;
    /**
     * The BlackoutsExist
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BlackoutsExist = null;
    /**
     * The AccompaniedTravel
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AccompaniedTravel = null;
    /**
     * The MileOrRouteBasedFare
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $MileOrRouteBasedFare = null;
    /**
     * The GlobalIndicator
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $GlobalIndicator = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Returns the origin airport or city code for which this tariff is applicable. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Returns the destination airport or city code for which this tariff is applicable. | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The FareTicketingCode
     * Meta information extracted from the WSDL
     * - documentation: Returns the ticketing code for which this tariff is applicable.
     * - use: optional
     * @var string|null
     */
    protected ?string $FareTicketingCode = null;
    /**
     * The FareTicketingDesignator
     * Meta information extracted from the WSDL
     * - documentation: Returns the ticketing designator for which this tariff is applicable. | Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $FareTicketingDesignator = null;
    /**
     * Constructor method for FareDisplay
     * @uses FareDisplay::setCarrier()
     * @uses FareDisplay::setFareBasis()
     * @uses FareDisplay::setAmount()
     * @uses FareDisplay::setFareDisplayRule()
     * @uses FareDisplay::setFarePricing()
     * @uses FareDisplay::setFareRestriction()
     * @uses FareDisplay::setFareRoutingInformation()
     * @uses FareDisplay::setFareMileageInformation()
     * @uses FareDisplay::setAirFareDisplayRuleKey()
     * @uses FareDisplay::setBookingCode()
     * @uses FareDisplay::setAccountCode()
     * @uses FareDisplay::setAddlBookingCodeInformation()
     * @uses FareDisplay::setFareRuleFailureInfo()
     * @uses FareDisplay::setPriceChange()
     * @uses FareDisplay::setTripType()
     * @uses FareDisplay::setFareTypeCode()
     * @uses FareDisplay::setSpecialFare()
     * @uses FareDisplay::setInstantPurchase()
     * @uses FareDisplay::setEligibilityRestricted()
     * @uses FareDisplay::setFlightRestricted()
     * @uses FareDisplay::setStopoversRestricted()
     * @uses FareDisplay::setTransfersRestricted()
     * @uses FareDisplay::setBlackoutsExist()
     * @uses FareDisplay::setAccompaniedTravel()
     * @uses FareDisplay::setMileOrRouteBasedFare()
     * @uses FareDisplay::setGlobalIndicator()
     * @uses FareDisplay::setOrigin()
     * @uses FareDisplay::setDestination()
     * @uses FareDisplay::setFareTicketingCode()
     * @uses FareDisplay::setFareTicketingDesignator()
     * @param string $carrier
     * @param string $fareBasis
     * @param string $amount
     * @param \Travelport\Util\StructType\FareDisplayRule $fareDisplayRule
     * @param \Travelport\Util\StructType\FarePricing[] $farePricing
     * @param \Travelport\Util\StructType\FareRestriction[] $fareRestriction
     * @param string $fareRoutingInformation
     * @param string $fareMileageInformation
     * @param \Travelport\Util\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @param \Travelport\Util\StructType\BookingCode[] $bookingCode
     * @param \Travelport\Util\StructType\AccountCode[] $accountCode
     * @param \Travelport\Util\StructType\AddlBookingCodeInformation $addlBookingCodeInformation
     * @param \Travelport\Util\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @param \Travelport\Util\StructType\PriceChangeType[] $priceChange
     * @param string $tripType
     * @param string $fareTypeCode
     * @param bool $specialFare
     * @param bool $instantPurchase
     * @param bool $eligibilityRestricted
     * @param bool $flightRestricted
     * @param bool $stopoversRestricted
     * @param bool $transfersRestricted
     * @param bool $blackoutsExist
     * @param bool $accompaniedTravel
     * @param string $mileOrRouteBasedFare
     * @param string $globalIndicator
     * @param string $origin
     * @param string $destination
     * @param string $fareTicketingCode
     * @param string $fareTicketingDesignator
     */
    public function __construct(string $carrier, string $fareBasis, string $amount, ?\Travelport\Util\StructType\FareDisplayRule $fareDisplayRule = null, ?array $farePricing = null, ?array $fareRestriction = null, ?string $fareRoutingInformation = null, ?string $fareMileageInformation = null, ?\Travelport\Util\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null, ?array $bookingCode = null, ?array $accountCode = null, ?\Travelport\Util\StructType\AddlBookingCodeInformation $addlBookingCodeInformation = null, ?\Travelport\Util\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null, ?array $priceChange = null, ?string $tripType = null, ?string $fareTypeCode = null, ?bool $specialFare = null, ?bool $instantPurchase = null, ?bool $eligibilityRestricted = null, ?bool $flightRestricted = null, ?bool $stopoversRestricted = null, ?bool $transfersRestricted = null, ?bool $blackoutsExist = null, ?bool $accompaniedTravel = null, ?string $mileOrRouteBasedFare = null, ?string $globalIndicator = null, ?string $origin = null, ?string $destination = null, ?string $fareTicketingCode = null, ?string $fareTicketingDesignator = null)
    {
        $this
            ->setCarrier($carrier)
            ->setFareBasis($fareBasis)
            ->setAmount($amount)
            ->setFareDisplayRule($fareDisplayRule)
            ->setFarePricing($farePricing)
            ->setFareRestriction($fareRestriction)
            ->setFareRoutingInformation($fareRoutingInformation)
            ->setFareMileageInformation($fareMileageInformation)
            ->setAirFareDisplayRuleKey($airFareDisplayRuleKey)
            ->setBookingCode($bookingCode)
            ->setAccountCode($accountCode)
            ->setAddlBookingCodeInformation($addlBookingCodeInformation)
            ->setFareRuleFailureInfo($fareRuleFailureInfo)
            ->setPriceChange($priceChange)
            ->setTripType($tripType)
            ->setFareTypeCode($fareTypeCode)
            ->setSpecialFare($specialFare)
            ->setInstantPurchase($instantPurchase)
            ->setEligibilityRestricted($eligibilityRestricted)
            ->setFlightRestricted($flightRestricted)
            ->setStopoversRestricted($stopoversRestricted)
            ->setTransfersRestricted($transfersRestricted)
            ->setBlackoutsExist($blackoutsExist)
            ->setAccompaniedTravel($accompaniedTravel)
            ->setMileOrRouteBasedFare($mileOrRouteBasedFare)
            ->setGlobalIndicator($globalIndicator)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setFareTicketingCode($fareTicketingCode)
            ->setFareTicketingDesignator($fareTicketingDesignator);
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setCarrier(string $carrier): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string
     */
    public function getFareBasis(): string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareBasis(string $fareBasis): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get FareDisplayRule value
     * @return \Travelport\Util\StructType\FareDisplayRule|null
     */
    public function getFareDisplayRule(): ?\Travelport\Util\StructType\FareDisplayRule
    {
        return $this->FareDisplayRule;
    }
    /**
     * Set FareDisplayRule value
     * @param \Travelport\Util\StructType\FareDisplayRule $fareDisplayRule
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareDisplayRule(?\Travelport\Util\StructType\FareDisplayRule $fareDisplayRule = null): self
    {
        $this->FareDisplayRule = $fareDisplayRule;
        
        return $this;
    }
    /**
     * Get FarePricing value
     * @return \Travelport\Util\StructType\FarePricing[]
     */
    public function getFarePricing(): ?array
    {
        return $this->FarePricing;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFarePricing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFarePricing method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFarePricingForArrayConstraintFromSetFarePricing(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareDisplayFarePricingItem) {
            // validation for constraint: itemType
            if (!$fareDisplayFarePricingItem instanceof \Travelport\Util\StructType\FarePricing) {
                $invalidValues[] = is_object($fareDisplayFarePricingItem) ? get_class($fareDisplayFarePricingItem) : sprintf('%s(%s)', gettype($fareDisplayFarePricingItem), var_export($fareDisplayFarePricingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FarePricing property can only contain items of type \Travelport\Util\StructType\FarePricing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FarePricing value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FarePricing[] $farePricing
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFarePricing(?array $farePricing = null): self
    {
        // validation for constraint: array
        if ('' !== ($farePricingArrayErrorMessage = self::validateFarePricingForArrayConstraintFromSetFarePricing($farePricing))) {
            throw new InvalidArgumentException($farePricingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($farePricing) && count($farePricing) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($farePricing)), __LINE__);
        }
        $this->FarePricing = $farePricing;
        
        return $this;
    }
    /**
     * Add item to FarePricing value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FarePricing $item
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function addToFarePricing(\Travelport\Util\StructType\FarePricing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FarePricing) {
            throw new InvalidArgumentException(sprintf('The FarePricing property can only contain items of type \Travelport\Util\StructType\FarePricing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FarePricing) && count($this->FarePricing) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FarePricing)), __LINE__);
        }
        $this->FarePricing[] = $item;
        
        return $this;
    }
    /**
     * Get FareRestriction value
     * @return \Travelport\Util\StructType\FareRestriction[]
     */
    public function getFareRestriction(): ?array
    {
        return $this->FareRestriction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRestriction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRestrictionForArrayConstraintFromSetFareRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareDisplayFareRestrictionItem) {
            // validation for constraint: itemType
            if (!$fareDisplayFareRestrictionItem instanceof \Travelport\Util\StructType\FareRestriction) {
                $invalidValues[] = is_object($fareDisplayFareRestrictionItem) ? get_class($fareDisplayFareRestrictionItem) : sprintf('%s(%s)', gettype($fareDisplayFareRestrictionItem), var_export($fareDisplayFareRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRestriction property can only contain items of type \Travelport\Util\StructType\FareRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestriction[] $fareRestriction
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareRestriction(?array $fareRestriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRestrictionArrayErrorMessage = self::validateFareRestrictionForArrayConstraintFromSetFareRestriction($fareRestriction))) {
            throw new InvalidArgumentException($fareRestrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($fareRestriction) && count($fareRestriction) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($fareRestriction)), __LINE__);
        }
        $this->FareRestriction = $fareRestriction;
        
        return $this;
    }
    /**
     * Add item to FareRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRestriction $item
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function addToFareRestriction(\Travelport\Util\StructType\FareRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRestriction) {
            throw new InvalidArgumentException(sprintf('The FareRestriction property can only contain items of type \Travelport\Util\StructType\FareRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->FareRestriction) && count($this->FareRestriction) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->FareRestriction)), __LINE__);
        }
        $this->FareRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get FareRoutingInformation value
     * @return string|null
     */
    public function getFareRoutingInformation(): ?string
    {
        return $this->FareRoutingInformation;
    }
    /**
     * Set FareRoutingInformation value
     * @param string $fareRoutingInformation
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareRoutingInformation(?string $fareRoutingInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($fareRoutingInformation) && !is_string($fareRoutingInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareRoutingInformation, true), gettype($fareRoutingInformation)), __LINE__);
        }
        $this->FareRoutingInformation = $fareRoutingInformation;
        
        return $this;
    }
    /**
     * Get FareMileageInformation value
     * @return string|null
     */
    public function getFareMileageInformation(): ?string
    {
        return $this->FareMileageInformation;
    }
    /**
     * Set FareMileageInformation value
     * @param string $fareMileageInformation
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareMileageInformation(?string $fareMileageInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($fareMileageInformation) && !is_string($fareMileageInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareMileageInformation, true), gettype($fareMileageInformation)), __LINE__);
        }
        $this->FareMileageInformation = $fareMileageInformation;
        
        return $this;
    }
    /**
     * Get AirFareDisplayRuleKey value
     * @return \Travelport\Util\StructType\AirFareDisplayRuleKey|null
     */
    public function getAirFareDisplayRuleKey(): ?\Travelport\Util\StructType\AirFareDisplayRuleKey
    {
        return $this->AirFareDisplayRuleKey;
    }
    /**
     * Set AirFareDisplayRuleKey value
     * @param \Travelport\Util\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setAirFareDisplayRuleKey(?\Travelport\Util\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null): self
    {
        $this->AirFareDisplayRuleKey = $airFareDisplayRuleKey;
        
        return $this;
    }
    /**
     * Get BookingCode value
     * @return \Travelport\Util\StructType\BookingCode[]
     */
    public function getBookingCode(): ?array
    {
        return $this->BookingCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBookingCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingCodeForArrayConstraintFromSetBookingCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareDisplayBookingCodeItem) {
            // validation for constraint: itemType
            if (!$fareDisplayBookingCodeItem instanceof \Travelport\Util\StructType\BookingCode) {
                $invalidValues[] = is_object($fareDisplayBookingCodeItem) ? get_class($fareDisplayBookingCodeItem) : sprintf('%s(%s)', gettype($fareDisplayBookingCodeItem), var_export($fareDisplayBookingCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingCode property can only contain items of type \Travelport\Util\StructType\BookingCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingCode[] $bookingCode
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setBookingCode(?array $bookingCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingCodeArrayErrorMessage = self::validateBookingCodeForArrayConstraintFromSetBookingCode($bookingCode))) {
            throw new InvalidArgumentException($bookingCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingCode) && count($bookingCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
        
        return $this;
    }
    /**
     * Add item to BookingCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\BookingCode $item
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function addToBookingCode(\Travelport\Util\StructType\BookingCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\BookingCode) {
            throw new InvalidArgumentException(sprintf('The BookingCode property can only contain items of type \Travelport\Util\StructType\BookingCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingCode) && count($this->BookingCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingCode)), __LINE__);
        }
        $this->BookingCode[] = $item;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Util\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAccountCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountCodeForArrayConstraintFromSetAccountCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareDisplayAccountCodeItem) {
            // validation for constraint: itemType
            if (!$fareDisplayAccountCodeItem instanceof \Travelport\Util\StructType\AccountCode) {
                $invalidValues[] = is_object($fareDisplayAccountCodeItem) ? get_class($fareDisplayAccountCodeItem) : sprintf('%s(%s)', gettype($fareDisplayAccountCodeItem), var_export($fareDisplayAccountCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountCode property can only contain items of type \Travelport\Util\StructType\AccountCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountCode[] $accountCode
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountCodeArrayErrorMessage = self::validateAccountCodeForArrayConstraintFromSetAccountCode($accountCode))) {
            throw new InvalidArgumentException($accountCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountCode) && count($accountCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountCode $item
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function addToAccountCode(\Travelport\Util\StructType\AccountCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AccountCode) {
            throw new InvalidArgumentException(sprintf('The AccountCode property can only contain items of type \Travelport\Util\StructType\AccountCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountCode) && count($this->AccountCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountCode)), __LINE__);
        }
        $this->AccountCode[] = $item;
        
        return $this;
    }
    /**
     * Get AddlBookingCodeInformation value
     * @return \Travelport\Util\StructType\AddlBookingCodeInformation|null
     */
    public function getAddlBookingCodeInformation(): ?\Travelport\Util\StructType\AddlBookingCodeInformation
    {
        return $this->AddlBookingCodeInformation;
    }
    /**
     * Set AddlBookingCodeInformation value
     * @param \Travelport\Util\StructType\AddlBookingCodeInformation $addlBookingCodeInformation
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setAddlBookingCodeInformation(?\Travelport\Util\StructType\AddlBookingCodeInformation $addlBookingCodeInformation = null): self
    {
        $this->AddlBookingCodeInformation = $addlBookingCodeInformation;
        
        return $this;
    }
    /**
     * Get FareRuleFailureInfo value
     * @return \Travelport\Util\StructType\FareRuleFailureInfo|null
     */
    public function getFareRuleFailureInfo(): ?\Travelport\Util\StructType\FareRuleFailureInfo
    {
        return $this->FareRuleFailureInfo;
    }
    /**
     * Set FareRuleFailureInfo value
     * @param \Travelport\Util\StructType\FareRuleFailureInfo $fareRuleFailureInfo
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareRuleFailureInfo(?\Travelport\Util\StructType\FareRuleFailureInfo $fareRuleFailureInfo = null): self
    {
        $this->FareRuleFailureInfo = $fareRuleFailureInfo;
        
        return $this;
    }
    /**
     * Get PriceChange value
     * @return \Travelport\Util\StructType\PriceChangeType[]
     */
    public function getPriceChange(): ?array
    {
        return $this->PriceChange;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPriceChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPriceChange method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePriceChangeForArrayConstraintFromSetPriceChange(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareDisplayPriceChangeItem) {
            // validation for constraint: itemType
            if (!$fareDisplayPriceChangeItem instanceof \Travelport\Util\StructType\PriceChangeType) {
                $invalidValues[] = is_object($fareDisplayPriceChangeItem) ? get_class($fareDisplayPriceChangeItem) : sprintf('%s(%s)', gettype($fareDisplayPriceChangeItem), var_export($fareDisplayPriceChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PriceChange property can only contain items of type \Travelport\Util\StructType\PriceChangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PriceChange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceChangeType[] $priceChange
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setPriceChange(?array $priceChange = null): self
    {
        // validation for constraint: array
        if ('' !== ($priceChangeArrayErrorMessage = self::validatePriceChangeForArrayConstraintFromSetPriceChange($priceChange))) {
            throw new InvalidArgumentException($priceChangeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($priceChange) && count($priceChange) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($priceChange)), __LINE__);
        }
        $this->PriceChange = $priceChange;
        
        return $this;
    }
    /**
     * Add item to PriceChange value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PriceChangeType $item
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function addToPriceChange(\Travelport\Util\StructType\PriceChangeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PriceChangeType) {
            throw new InvalidArgumentException(sprintf('The PriceChange property can only contain items of type \Travelport\Util\StructType\PriceChangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->PriceChange) && count($this->PriceChange) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->PriceChange)), __LINE__);
        }
        $this->PriceChange[] = $item;
        
        return $this;
    }
    /**
     * Get TripType value
     * @return string|null
     */
    public function getTripType(): ?string
    {
        return $this->TripType;
    }
    /**
     * Set TripType value
     * @uses \Travelport\Util\EnumType\TypeFareTripType::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeFareTripType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tripType
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setTripType(?string $tripType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeFareTripType::valueIsValid($tripType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeFareTripType', is_array($tripType) ? implode(', ', $tripType) : var_export($tripType, true), implode(', ', \Travelport\Util\EnumType\TypeFareTripType::getValidValues())), __LINE__);
        }
        $this->TripType = $tripType;
        
        return $this;
    }
    /**
     * Get FareTypeCode value
     * @return string|null
     */
    public function getFareTypeCode(): ?string
    {
        return $this->FareTypeCode;
    }
    /**
     * Set FareTypeCode value
     * @param string $fareTypeCode
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareTypeCode(?string $fareTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareTypeCode) && !is_string($fareTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareTypeCode, true), gettype($fareTypeCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($fareTypeCode) && mb_strlen((string) $fareTypeCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $fareTypeCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($fareTypeCode) && mb_strlen((string) $fareTypeCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $fareTypeCode)), __LINE__);
        }
        $this->FareTypeCode = $fareTypeCode;
        
        return $this;
    }
    /**
     * Get SpecialFare value
     * @return bool|null
     */
    public function getSpecialFare(): ?bool
    {
        return $this->SpecialFare;
    }
    /**
     * Set SpecialFare value
     * @param bool $specialFare
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setSpecialFare(?bool $specialFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($specialFare) && !is_bool($specialFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($specialFare, true), gettype($specialFare)), __LINE__);
        }
        $this->SpecialFare = $specialFare;
        
        return $this;
    }
    /**
     * Get InstantPurchase value
     * @return bool|null
     */
    public function getInstantPurchase(): ?bool
    {
        return $this->InstantPurchase;
    }
    /**
     * Set InstantPurchase value
     * @param bool $instantPurchase
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setInstantPurchase(?bool $instantPurchase = null): self
    {
        // validation for constraint: boolean
        if (!is_null($instantPurchase) && !is_bool($instantPurchase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($instantPurchase, true), gettype($instantPurchase)), __LINE__);
        }
        $this->InstantPurchase = $instantPurchase;
        
        return $this;
    }
    /**
     * Get EligibilityRestricted value
     * @return bool|null
     */
    public function getEligibilityRestricted(): ?bool
    {
        return $this->EligibilityRestricted;
    }
    /**
     * Set EligibilityRestricted value
     * @param bool $eligibilityRestricted
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setEligibilityRestricted(?bool $eligibilityRestricted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eligibilityRestricted) && !is_bool($eligibilityRestricted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eligibilityRestricted, true), gettype($eligibilityRestricted)), __LINE__);
        }
        $this->EligibilityRestricted = $eligibilityRestricted;
        
        return $this;
    }
    /**
     * Get FlightRestricted value
     * @return bool|null
     */
    public function getFlightRestricted(): ?bool
    {
        return $this->FlightRestricted;
    }
    /**
     * Set FlightRestricted value
     * @param bool $flightRestricted
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFlightRestricted(?bool $flightRestricted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flightRestricted) && !is_bool($flightRestricted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flightRestricted, true), gettype($flightRestricted)), __LINE__);
        }
        $this->FlightRestricted = $flightRestricted;
        
        return $this;
    }
    /**
     * Get StopoversRestricted value
     * @return bool|null
     */
    public function getStopoversRestricted(): ?bool
    {
        return $this->StopoversRestricted;
    }
    /**
     * Set StopoversRestricted value
     * @param bool $stopoversRestricted
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setStopoversRestricted(?bool $stopoversRestricted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stopoversRestricted) && !is_bool($stopoversRestricted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stopoversRestricted, true), gettype($stopoversRestricted)), __LINE__);
        }
        $this->StopoversRestricted = $stopoversRestricted;
        
        return $this;
    }
    /**
     * Get TransfersRestricted value
     * @return bool|null
     */
    public function getTransfersRestricted(): ?bool
    {
        return $this->TransfersRestricted;
    }
    /**
     * Set TransfersRestricted value
     * @param bool $transfersRestricted
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setTransfersRestricted(?bool $transfersRestricted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($transfersRestricted) && !is_bool($transfersRestricted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transfersRestricted, true), gettype($transfersRestricted)), __LINE__);
        }
        $this->TransfersRestricted = $transfersRestricted;
        
        return $this;
    }
    /**
     * Get BlackoutsExist value
     * @return bool|null
     */
    public function getBlackoutsExist(): ?bool
    {
        return $this->BlackoutsExist;
    }
    /**
     * Set BlackoutsExist value
     * @param bool $blackoutsExist
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setBlackoutsExist(?bool $blackoutsExist = null): self
    {
        // validation for constraint: boolean
        if (!is_null($blackoutsExist) && !is_bool($blackoutsExist)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blackoutsExist, true), gettype($blackoutsExist)), __LINE__);
        }
        $this->BlackoutsExist = $blackoutsExist;
        
        return $this;
    }
    /**
     * Get AccompaniedTravel value
     * @return bool|null
     */
    public function getAccompaniedTravel(): ?bool
    {
        return $this->AccompaniedTravel;
    }
    /**
     * Set AccompaniedTravel value
     * @param bool $accompaniedTravel
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setAccompaniedTravel(?bool $accompaniedTravel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($accompaniedTravel) && !is_bool($accompaniedTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accompaniedTravel, true), gettype($accompaniedTravel)), __LINE__);
        }
        $this->AccompaniedTravel = $accompaniedTravel;
        
        return $this;
    }
    /**
     * Get MileOrRouteBasedFare value
     * @return string|null
     */
    public function getMileOrRouteBasedFare(): ?string
    {
        return $this->MileOrRouteBasedFare;
    }
    /**
     * Set MileOrRouteBasedFare value
     * @uses \Travelport\Util\EnumType\TypeMileOrRouteBasedFare::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMileOrRouteBasedFare::getValidValues()
     * @throws InvalidArgumentException
     * @param string $mileOrRouteBasedFare
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setMileOrRouteBasedFare(?string $mileOrRouteBasedFare = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMileOrRouteBasedFare::valueIsValid($mileOrRouteBasedFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMileOrRouteBasedFare', is_array($mileOrRouteBasedFare) ? implode(', ', $mileOrRouteBasedFare) : var_export($mileOrRouteBasedFare, true), implode(', ', \Travelport\Util\EnumType\TypeMileOrRouteBasedFare::getValidValues())), __LINE__);
        }
        $this->MileOrRouteBasedFare = $mileOrRouteBasedFare;
        
        return $this;
    }
    /**
     * Get GlobalIndicator value
     * @return string|null
     */
    public function getGlobalIndicator(): ?string
    {
        return $this->GlobalIndicator;
    }
    /**
     * Set GlobalIndicator value
     * @uses \Travelport\Util\EnumType\TypeATPCOGlobalIndicator::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeATPCOGlobalIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $globalIndicator
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setGlobalIndicator(?string $globalIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeATPCOGlobalIndicator::valueIsValid($globalIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeATPCOGlobalIndicator', is_array($globalIndicator) ? implode(', ', $globalIndicator) : var_export($globalIndicator, true), implode(', ', \Travelport\Util\EnumType\TypeATPCOGlobalIndicator::getValidValues())), __LINE__);
        }
        $this->GlobalIndicator = $globalIndicator;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get FareTicketingCode value
     * @return string|null
     */
    public function getFareTicketingCode(): ?string
    {
        return $this->FareTicketingCode;
    }
    /**
     * Set FareTicketingCode value
     * @param string $fareTicketingCode
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareTicketingCode(?string $fareTicketingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($fareTicketingCode) && !is_string($fareTicketingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareTicketingCode, true), gettype($fareTicketingCode)), __LINE__);
        }
        $this->FareTicketingCode = $fareTicketingCode;
        
        return $this;
    }
    /**
     * Get FareTicketingDesignator value
     * @return string|null
     */
    public function getFareTicketingDesignator(): ?string
    {
        return $this->FareTicketingDesignator;
    }
    /**
     * Set FareTicketingDesignator value
     * @param string $fareTicketingDesignator
     * @return \Travelport\Util\StructType\FareDisplay
     */
    public function setFareTicketingDesignator(?string $fareTicketingDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($fareTicketingDesignator) && !is_string($fareTicketingDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareTicketingDesignator, true), gettype($fareTicketingDesignator)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($fareTicketingDesignator) && mb_strlen((string) $fareTicketingDesignator) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $fareTicketingDesignator)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($fareTicketingDesignator) && mb_strlen((string) $fareTicketingDesignator) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $fareTicketingDesignator)), __LINE__);
        }
        $this->FareTicketingDesignator = $fareTicketingDesignator;
        
        return $this;
    }
}
