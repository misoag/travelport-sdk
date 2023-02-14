<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareDisplayModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Request Fares with specific Penalty Information.
 * @subpackage Structs
 */
class AirFareDisplayModifiers extends AbstractStructBase
{
    /**
     * The TripType
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $TripType = null;
    /**
     * The CabinClass
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CabinClass
     * @var \Travelport\UniversalRecord\StructType\CabinClass|null
     */
    protected ?\Travelport\UniversalRecord\StructType\CabinClass $CabinClass = null;
    /**
     * The PenaltyFareInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PenaltyFareInformation
     * @var \Travelport\UniversalRecord\StructType\PenaltyFareInformation|null
     */
    protected ?\Travelport\UniversalRecord\StructType\PenaltyFareInformation $PenaltyFareInformation = null;
    /**
     * The FareSearchOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $FareSearchOption = null;
    /**
     * The MaxResponses
     * Meta information extracted from the WSDL
     * - default: 200
     * - use: optional
     * @var int|null
     */
    protected ?int $MaxResponses = null;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartureDate = null;
    /**
     * The TicketingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingDate = null;
    /**
     * The ReturnDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReturnDate = null;
    /**
     * The BaseFareOnly
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $BaseFareOnly = null;
    /**
     * The UnrestrictedFaresOnly
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $UnrestrictedFaresOnly = null;
    /**
     * The FaresIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether only public fares should be returned or specific type of private fares
     * - use: optional
     * @var string|null
     */
    protected ?string $FaresIndicator = null;
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyType = null;
    /**
     * The IncludeTaxes
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeTaxes = null;
    /**
     * The IncludeEstimatedTaxes
     * Meta information extracted from the WSDL
     * - documentation: Indicates to include estimated taxes i.e. if set to true estimated total fare,base fare and taxes would be returned.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeEstimatedTaxes = null;
    /**
     * The IncludeSurcharges
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeSurcharges = null;
    /**
     * The GlobalIndicator
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $GlobalIndicator = null;
    /**
     * The ProhibitMinStayFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitMinStayFares = null;
    /**
     * The ProhibitMaxStayFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitMaxStayFares = null;
    /**
     * The ProhibitAdvancePurchaseFares
     * Meta information extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitAdvancePurchaseFares = null;
    /**
     * The ProhibitNonRefundableFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether it prohibits NonRefundable Fares.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitNonRefundableFares = null;
    /**
     * The ValidatedFaresOnly
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the requested Fares should be Validated Fares only. If set to true, then only valid fares will be returned. If set to false, both valid and non valid fares will be returned. If not sent, then no validation will be
     * done. All fares will be returned.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ValidatedFaresOnly = null;
    /**
     * The ProhibitTravelRestrictedFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates that the Fares not complying Travel Restrictions and Seasonality fare rules are prohibited
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProhibitTravelRestrictedFares = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: Represents the filed currency of the fare | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $FiledCurrency = null;
    /**
     * Constructor method for AirFareDisplayModifiers
     * @uses AirFareDisplayModifiers::setTripType()
     * @uses AirFareDisplayModifiers::setCabinClass()
     * @uses AirFareDisplayModifiers::setPenaltyFareInformation()
     * @uses AirFareDisplayModifiers::setFareSearchOption()
     * @uses AirFareDisplayModifiers::setMaxResponses()
     * @uses AirFareDisplayModifiers::setDepartureDate()
     * @uses AirFareDisplayModifiers::setTicketingDate()
     * @uses AirFareDisplayModifiers::setReturnDate()
     * @uses AirFareDisplayModifiers::setBaseFareOnly()
     * @uses AirFareDisplayModifiers::setUnrestrictedFaresOnly()
     * @uses AirFareDisplayModifiers::setFaresIndicator()
     * @uses AirFareDisplayModifiers::setCurrencyType()
     * @uses AirFareDisplayModifiers::setIncludeTaxes()
     * @uses AirFareDisplayModifiers::setIncludeEstimatedTaxes()
     * @uses AirFareDisplayModifiers::setIncludeSurcharges()
     * @uses AirFareDisplayModifiers::setGlobalIndicator()
     * @uses AirFareDisplayModifiers::setProhibitMinStayFares()
     * @uses AirFareDisplayModifiers::setProhibitMaxStayFares()
     * @uses AirFareDisplayModifiers::setProhibitAdvancePurchaseFares()
     * @uses AirFareDisplayModifiers::setProhibitNonRefundableFares()
     * @uses AirFareDisplayModifiers::setValidatedFaresOnly()
     * @uses AirFareDisplayModifiers::setProhibitTravelRestrictedFares()
     * @uses AirFareDisplayModifiers::setFiledCurrency()
     * @param string[] $tripType
     * @param \Travelport\UniversalRecord\StructType\CabinClass $cabinClass
     * @param \Travelport\UniversalRecord\StructType\PenaltyFareInformation $penaltyFareInformation
     * @param string[] $fareSearchOption
     * @param int $maxResponses
     * @param string $departureDate
     * @param string $ticketingDate
     * @param string $returnDate
     * @param bool $baseFareOnly
     * @param bool $unrestrictedFaresOnly
     * @param string $faresIndicator
     * @param string $currencyType
     * @param bool $includeTaxes
     * @param bool $includeEstimatedTaxes
     * @param bool $includeSurcharges
     * @param string $globalIndicator
     * @param bool $prohibitMinStayFares
     * @param bool $prohibitMaxStayFares
     * @param bool $prohibitAdvancePurchaseFares
     * @param bool $prohibitNonRefundableFares
     * @param bool $validatedFaresOnly
     * @param bool $prohibitTravelRestrictedFares
     * @param string $filedCurrency
     */
    public function __construct(?array $tripType = null, ?\Travelport\UniversalRecord\StructType\CabinClass $cabinClass = null, ?\Travelport\UniversalRecord\StructType\PenaltyFareInformation $penaltyFareInformation = null, ?array $fareSearchOption = null, ?int $maxResponses = 200, ?string $departureDate = null, ?string $ticketingDate = null, ?string $returnDate = null, ?bool $baseFareOnly = false, ?bool $unrestrictedFaresOnly = false, ?string $faresIndicator = null, ?string $currencyType = null, ?bool $includeTaxes = null, ?bool $includeEstimatedTaxes = null, ?bool $includeSurcharges = null, ?string $globalIndicator = null, ?bool $prohibitMinStayFares = false, ?bool $prohibitMaxStayFares = false, ?bool $prohibitAdvancePurchaseFares = false, ?bool $prohibitNonRefundableFares = false, ?bool $validatedFaresOnly = null, ?bool $prohibitTravelRestrictedFares = true, ?string $filedCurrency = null)
    {
        $this
            ->setTripType($tripType)
            ->setCabinClass($cabinClass)
            ->setPenaltyFareInformation($penaltyFareInformation)
            ->setFareSearchOption($fareSearchOption)
            ->setMaxResponses($maxResponses)
            ->setDepartureDate($departureDate)
            ->setTicketingDate($ticketingDate)
            ->setReturnDate($returnDate)
            ->setBaseFareOnly($baseFareOnly)
            ->setUnrestrictedFaresOnly($unrestrictedFaresOnly)
            ->setFaresIndicator($faresIndicator)
            ->setCurrencyType($currencyType)
            ->setIncludeTaxes($includeTaxes)
            ->setIncludeEstimatedTaxes($includeEstimatedTaxes)
            ->setIncludeSurcharges($includeSurcharges)
            ->setGlobalIndicator($globalIndicator)
            ->setProhibitMinStayFares($prohibitMinStayFares)
            ->setProhibitMaxStayFares($prohibitMaxStayFares)
            ->setProhibitAdvancePurchaseFares($prohibitAdvancePurchaseFares)
            ->setProhibitNonRefundableFares($prohibitNonRefundableFares)
            ->setValidatedFaresOnly($validatedFaresOnly)
            ->setProhibitTravelRestrictedFares($prohibitTravelRestrictedFares)
            ->setFiledCurrency($filedCurrency);
    }
    /**
     * Get TripType value
     * @return string[]
     */
    public function getTripType(): ?array
    {
        return $this->TripType;
    }
    /**
     * This method is responsible for validating the values passed to the setTripType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTripType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTripTypeForArrayConstraintsFromSetTripType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airFareDisplayModifiersTripTypeItem) {
            // validation for constraint: enumeration
            if (!\Travelport\UniversalRecord\EnumType\TypeFareTripType::valueIsValid($airFareDisplayModifiersTripTypeItem)) {
                $invalidValues[] = is_object($airFareDisplayModifiersTripTypeItem) ? get_class($airFareDisplayModifiersTripTypeItem) : sprintf('%s(%s)', gettype($airFareDisplayModifiersTripTypeItem), var_export($airFareDisplayModifiersTripTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareTripType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareTripType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TripType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareTripType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareTripType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $tripType
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setTripType(?array $tripType = null): self
    {
        // validation for constraint: array
        if ('' !== ($tripTypeArrayErrorMessage = self::validateTripTypeForArrayConstraintsFromSetTripType($tripType))) {
            throw new InvalidArgumentException($tripTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($tripType) && count($tripType) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($tripType)), __LINE__);
        }
        $this->TripType = $tripType;
        
        return $this;
    }
    /**
     * Add item to TripType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareTripType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareTripType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function addToTripType(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareTripType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareTripType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareTripType::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->TripType) && count($this->TripType) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->TripType)), __LINE__);
        }
        $this->TripType[] = $item;
        
        return $this;
    }
    /**
     * Get CabinClass value
     * @return \Travelport\UniversalRecord\StructType\CabinClass|null
     */
    public function getCabinClass(): ?\Travelport\UniversalRecord\StructType\CabinClass
    {
        return $this->CabinClass;
    }
    /**
     * Set CabinClass value
     * @param \Travelport\UniversalRecord\StructType\CabinClass $cabinClass
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setCabinClass(?\Travelport\UniversalRecord\StructType\CabinClass $cabinClass = null): self
    {
        $this->CabinClass = $cabinClass;
        
        return $this;
    }
    /**
     * Get PenaltyFareInformation value
     * @return \Travelport\UniversalRecord\StructType\PenaltyFareInformation|null
     */
    public function getPenaltyFareInformation(): ?\Travelport\UniversalRecord\StructType\PenaltyFareInformation
    {
        return $this->PenaltyFareInformation;
    }
    /**
     * Set PenaltyFareInformation value
     * @param \Travelport\UniversalRecord\StructType\PenaltyFareInformation $penaltyFareInformation
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setPenaltyFareInformation(?\Travelport\UniversalRecord\StructType\PenaltyFareInformation $penaltyFareInformation = null): self
    {
        $this->PenaltyFareInformation = $penaltyFareInformation;
        
        return $this;
    }
    /**
     * Get FareSearchOption value
     * @return string[]
     */
    public function getFareSearchOption(): ?array
    {
        return $this->FareSearchOption;
    }
    /**
     * This method is responsible for validating the values passed to the setFareSearchOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareSearchOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareSearchOptionForArrayConstraintsFromSetFareSearchOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airFareDisplayModifiersFareSearchOptionItem) {
            // validation for constraint: enumeration
            if (!\Travelport\UniversalRecord\EnumType\TypeFareSearchOption::valueIsValid($airFareDisplayModifiersFareSearchOptionItem)) {
                $invalidValues[] = is_object($airFareDisplayModifiersFareSearchOptionItem) ? get_class($airFareDisplayModifiersFareSearchOptionItem) : sprintf('%s(%s)', gettype($airFareDisplayModifiersFareSearchOptionItem), var_export($airFareDisplayModifiersFareSearchOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareSearchOption', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareSearchOption::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareSearchOption value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareSearchOption::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareSearchOption::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $fareSearchOption
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setFareSearchOption(?array $fareSearchOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareSearchOptionArrayErrorMessage = self::validateFareSearchOptionForArrayConstraintsFromSetFareSearchOption($fareSearchOption))) {
            throw new InvalidArgumentException($fareSearchOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($fareSearchOption) && count($fareSearchOption) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($fareSearchOption)), __LINE__);
        }
        $this->FareSearchOption = $fareSearchOption;
        
        return $this;
    }
    /**
     * Add item to FareSearchOption value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareSearchOption::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFareSearchOption::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function addToFareSearchOption(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFareSearchOption::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFareSearchOption', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFareSearchOption::getValidValues())), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->FareSearchOption) && count($this->FareSearchOption) >= 5) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->FareSearchOption)), __LINE__);
        }
        $this->FareSearchOption[] = $item;
        
        return $this;
    }
    /**
     * Get MaxResponses value
     * @return int|null
     */
    public function getMaxResponses(): ?int
    {
        return $this->MaxResponses;
    }
    /**
     * Set MaxResponses value
     * @param int $maxResponses
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setMaxResponses(?int $maxResponses = 200): self
    {
        // validation for constraint: int
        if (!is_null($maxResponses) && !(is_int($maxResponses) || ctype_digit($maxResponses))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxResponses, true), gettype($maxResponses)), __LINE__);
        }
        $this->MaxResponses = $maxResponses;
        
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get TicketingDate value
     * @return string|null
     */
    public function getTicketingDate(): ?string
    {
        return $this->TicketingDate;
    }
    /**
     * Set TicketingDate value
     * @param string $ticketingDate
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingDate, true), gettype($ticketingDate)), __LINE__);
        }
        $this->TicketingDate = $ticketingDate;
        
        return $this;
    }
    /**
     * Get ReturnDate value
     * @return string|null
     */
    public function getReturnDate(): ?string
    {
        return $this->ReturnDate;
    }
    /**
     * Set ReturnDate value
     * @param string $returnDate
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setReturnDate(?string $returnDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDate) && !is_string($returnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDate, true), gettype($returnDate)), __LINE__);
        }
        $this->ReturnDate = $returnDate;
        
        return $this;
    }
    /**
     * Get BaseFareOnly value
     * @return bool|null
     */
    public function getBaseFareOnly(): ?bool
    {
        return $this->BaseFareOnly;
    }
    /**
     * Set BaseFareOnly value
     * @param bool $baseFareOnly
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setBaseFareOnly(?bool $baseFareOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($baseFareOnly) && !is_bool($baseFareOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($baseFareOnly, true), gettype($baseFareOnly)), __LINE__);
        }
        $this->BaseFareOnly = $baseFareOnly;
        
        return $this;
    }
    /**
     * Get UnrestrictedFaresOnly value
     * @return bool|null
     */
    public function getUnrestrictedFaresOnly(): ?bool
    {
        return $this->UnrestrictedFaresOnly;
    }
    /**
     * Set UnrestrictedFaresOnly value
     * @param bool $unrestrictedFaresOnly
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setUnrestrictedFaresOnly(?bool $unrestrictedFaresOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($unrestrictedFaresOnly) && !is_bool($unrestrictedFaresOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unrestrictedFaresOnly, true), gettype($unrestrictedFaresOnly)), __LINE__);
        }
        $this->UnrestrictedFaresOnly = $unrestrictedFaresOnly;
        
        return $this;
    }
    /**
     * Get FaresIndicator value
     * @return string|null
     */
    public function getFaresIndicator(): ?string
    {
        return $this->FaresIndicator;
    }
    /**
     * Set FaresIndicator value
     * @uses \Travelport\UniversalRecord\EnumType\TypeFaresIndicator::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFaresIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $faresIndicator
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setFaresIndicator(?string $faresIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFaresIndicator::valueIsValid($faresIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFaresIndicator', is_array($faresIndicator) ? implode(', ', $faresIndicator) : var_export($faresIndicator, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFaresIndicator::getValidValues())), __LINE__);
        }
        $this->FaresIndicator = $faresIndicator;
        
        return $this;
    }
    /**
     * Get CurrencyType value
     * @return string|null
     */
    public function getCurrencyType(): ?string
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param string $currencyType
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setCurrencyType(?string $currencyType = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyType) && !is_string($currencyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyType, true), gettype($currencyType)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currencyType) && mb_strlen((string) $currencyType) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currencyType)), __LINE__);
        }
        $this->CurrencyType = $currencyType;
        
        return $this;
    }
    /**
     * Get IncludeTaxes value
     * @return bool|null
     */
    public function getIncludeTaxes(): ?bool
    {
        return $this->IncludeTaxes;
    }
    /**
     * Set IncludeTaxes value
     * @param bool $includeTaxes
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setIncludeTaxes(?bool $includeTaxes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeTaxes) && !is_bool($includeTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeTaxes, true), gettype($includeTaxes)), __LINE__);
        }
        $this->IncludeTaxes = $includeTaxes;
        
        return $this;
    }
    /**
     * Get IncludeEstimatedTaxes value
     * @return bool|null
     */
    public function getIncludeEstimatedTaxes(): ?bool
    {
        return $this->IncludeEstimatedTaxes;
    }
    /**
     * Set IncludeEstimatedTaxes value
     * @param bool $includeEstimatedTaxes
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setIncludeEstimatedTaxes(?bool $includeEstimatedTaxes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeEstimatedTaxes) && !is_bool($includeEstimatedTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeEstimatedTaxes, true), gettype($includeEstimatedTaxes)), __LINE__);
        }
        $this->IncludeEstimatedTaxes = $includeEstimatedTaxes;
        
        return $this;
    }
    /**
     * Get IncludeSurcharges value
     * @return bool|null
     */
    public function getIncludeSurcharges(): ?bool
    {
        return $this->IncludeSurcharges;
    }
    /**
     * Set IncludeSurcharges value
     * @param bool $includeSurcharges
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setIncludeSurcharges(?bool $includeSurcharges = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeSurcharges) && !is_bool($includeSurcharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeSurcharges, true), gettype($includeSurcharges)), __LINE__);
        }
        $this->IncludeSurcharges = $includeSurcharges;
        
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeATPCOGlobalIndicator::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeATPCOGlobalIndicator::getValidValues()
     * @throws InvalidArgumentException
     * @param string $globalIndicator
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setGlobalIndicator(?string $globalIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeATPCOGlobalIndicator::valueIsValid($globalIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeATPCOGlobalIndicator', is_array($globalIndicator) ? implode(', ', $globalIndicator) : var_export($globalIndicator, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeATPCOGlobalIndicator::getValidValues())), __LINE__);
        }
        $this->GlobalIndicator = $globalIndicator;
        
        return $this;
    }
    /**
     * Get ProhibitMinStayFares value
     * @return bool|null
     */
    public function getProhibitMinStayFares(): ?bool
    {
        return $this->ProhibitMinStayFares;
    }
    /**
     * Set ProhibitMinStayFares value
     * @param bool $prohibitMinStayFares
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setProhibitMinStayFares(?bool $prohibitMinStayFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitMinStayFares) && !is_bool($prohibitMinStayFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitMinStayFares, true), gettype($prohibitMinStayFares)), __LINE__);
        }
        $this->ProhibitMinStayFares = $prohibitMinStayFares;
        
        return $this;
    }
    /**
     * Get ProhibitMaxStayFares value
     * @return bool|null
     */
    public function getProhibitMaxStayFares(): ?bool
    {
        return $this->ProhibitMaxStayFares;
    }
    /**
     * Set ProhibitMaxStayFares value
     * @param bool $prohibitMaxStayFares
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setProhibitMaxStayFares(?bool $prohibitMaxStayFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitMaxStayFares) && !is_bool($prohibitMaxStayFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitMaxStayFares, true), gettype($prohibitMaxStayFares)), __LINE__);
        }
        $this->ProhibitMaxStayFares = $prohibitMaxStayFares;
        
        return $this;
    }
    /**
     * Get ProhibitAdvancePurchaseFares value
     * @return bool|null
     */
    public function getProhibitAdvancePurchaseFares(): ?bool
    {
        return $this->ProhibitAdvancePurchaseFares;
    }
    /**
     * Set ProhibitAdvancePurchaseFares value
     * @param bool $prohibitAdvancePurchaseFares
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setProhibitAdvancePurchaseFares(?bool $prohibitAdvancePurchaseFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitAdvancePurchaseFares) && !is_bool($prohibitAdvancePurchaseFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitAdvancePurchaseFares, true), gettype($prohibitAdvancePurchaseFares)), __LINE__);
        }
        $this->ProhibitAdvancePurchaseFares = $prohibitAdvancePurchaseFares;
        
        return $this;
    }
    /**
     * Get ProhibitNonRefundableFares value
     * @return bool|null
     */
    public function getProhibitNonRefundableFares(): ?bool
    {
        return $this->ProhibitNonRefundableFares;
    }
    /**
     * Set ProhibitNonRefundableFares value
     * @param bool $prohibitNonRefundableFares
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setProhibitNonRefundableFares(?bool $prohibitNonRefundableFares = false): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitNonRefundableFares) && !is_bool($prohibitNonRefundableFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitNonRefundableFares, true), gettype($prohibitNonRefundableFares)), __LINE__);
        }
        $this->ProhibitNonRefundableFares = $prohibitNonRefundableFares;
        
        return $this;
    }
    /**
     * Get ValidatedFaresOnly value
     * @return bool|null
     */
    public function getValidatedFaresOnly(): ?bool
    {
        return $this->ValidatedFaresOnly;
    }
    /**
     * Set ValidatedFaresOnly value
     * @param bool $validatedFaresOnly
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setValidatedFaresOnly(?bool $validatedFaresOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validatedFaresOnly) && !is_bool($validatedFaresOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validatedFaresOnly, true), gettype($validatedFaresOnly)), __LINE__);
        }
        $this->ValidatedFaresOnly = $validatedFaresOnly;
        
        return $this;
    }
    /**
     * Get ProhibitTravelRestrictedFares value
     * @return bool|null
     */
    public function getProhibitTravelRestrictedFares(): ?bool
    {
        return $this->ProhibitTravelRestrictedFares;
    }
    /**
     * Set ProhibitTravelRestrictedFares value
     * @param bool $prohibitTravelRestrictedFares
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setProhibitTravelRestrictedFares(?bool $prohibitTravelRestrictedFares = true): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitTravelRestrictedFares) && !is_bool($prohibitTravelRestrictedFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitTravelRestrictedFares, true), gettype($prohibitTravelRestrictedFares)), __LINE__);
        }
        $this->ProhibitTravelRestrictedFares = $prohibitTravelRestrictedFares;
        
        return $this;
    }
    /**
     * Get FiledCurrency value
     * @return string|null
     */
    public function getFiledCurrency(): ?string
    {
        return $this->FiledCurrency;
    }
    /**
     * Set FiledCurrency value
     * @param string $filedCurrency
     * @return \Travelport\UniversalRecord\StructType\AirFareDisplayModifiers
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($filedCurrency) && !is_string($filedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filedCurrency, true), gettype($filedCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($filedCurrency) && mb_strlen((string) $filedCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $filedCurrency)), __LINE__);
        }
        $this->FiledCurrency = $filedCurrency;
        
        return $this;
    }
}
