<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRate StructType
 * Meta information extracted from the WSDL
 * - documentation: Rate summary
 * @subpackage Structs
 */
class VehicleRate extends AbstractStructBase
{
    /**
     * The SupplierRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SupplierRate
     * @var \Travelport\UniversalRecord\StructType\SupplierRate|null
     */
    protected ?\Travelport\UniversalRecord\StructType\SupplierRate $SupplierRate = null;
    /**
     * The RateVariance
     * Meta information extracted from the WSDL
     * - documentation: Used on VehicleCreateReservationReq ONLY. @MandatoryRateMatch ='true' is required for this element to be applied. 1P.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateVariance|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRateVariance $RateVariance = null;
    /**
     * The ApproximateRate
     * Meta information extracted from the WSDL
     * - documentation: Monetary amounts expressed in another currency
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleRates|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeVehicleRates $ApproximateRate = null;
    /**
     * The VehicleCharge
     * Meta information extracted from the WSDL
     * - documentation: Charges associated with the vehicle rental.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleCharge[]
     */
    protected ?array $VehicleCharge = null;
    /**
     * The VehicleRateDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription[]
     */
    protected ?array $VehicleRateDescription = null;
    /**
     * The RateHostIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateHostIndicator|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $RateHostIndicator = null;
    /**
     * The HourlyLateCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRateInfo $HourlyLateCharge = null;
    /**
     * The DailyLateCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRateInfo $DailyLateCharge = null;
    /**
     * The PricedEquip
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PricedEquip
     * @var \Travelport\UniversalRecord\StructType\PricedEquip[]
     */
    protected ?array $PricedEquip = null;
    /**
     * The RateInclusions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RateInclusions
     * @var \Travelport\UniversalRecord\StructType\RateInclusions|null
     */
    protected ?\Travelport\UniversalRecord\StructType\RateInclusions $RateInclusions = null;
    /**
     * The WeeklyLateCharge
     * Meta information extracted from the WSDL
     * - documentation: Extra Week Charges information. Supported providers:1P only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRateInfo $WeeklyLateCharge = null;
    /**
     * The PrintText
     * Meta information extracted from the WSDL
     * - documentation: Informational text provided by the supplier that may be related to the reservation. This is applicable in response messages only, 1p only.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PrintText = null;
    /**
     * The RatePeriod
     * Meta information extracted from the WSDL
     * - documentation: The period for the rate (daily, weekly, etc)
     * - use: optional
     * @var string|null
     */
    protected ?string $RatePeriod = null;
    /**
     * The NumberOfPeriods
     * Meta information extracted from the WSDL
     * - documentation: Define how many periods (e.g. number of days or weeks)
     * @var int|null
     */
    protected ?int $NumberOfPeriods = null;
    /**
     * The UnlimitedMileage
     * Meta information extracted from the WSDL
     * - documentation: True if unlimited miles for rate
     * - use: optional
     * @var bool|null
     */
    protected ?bool $UnlimitedMileage = null;
    /**
     * The MileageAllowance
     * Meta information extracted from the WSDL
     * - documentation: Only set if UnlimitedMileage is false. Number of miles allowed for rate
     * - use: optional
     * @var int|null
     */
    protected ?int $MileageAllowance = null;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - documentation: Describes distance units for MileageAllowance or ExtraMileageCharge
     * - use: optional
     * @var string|null
     */
    protected ?string $Units = null;
    /**
     * The RateSource
     * Meta information extracted from the WSDL
     * - documentation: The rate source indicator for GWS
     * - use: optional
     * @var string|null
     */
    protected ?string $RateSource = null;
    /**
     * The RateAvailability
     * Meta information extracted from the WSDL
     * - documentation: Rate is available to sell, Need to Call or Closed
     * - use: optional
     * @var string|null
     */
    protected ?string $RateAvailability = null;
    /**
     * The RequiredCharges
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $RequiredCharges = null;
    /**
     * The RateCode
     * Meta information extracted from the WSDL
     * - documentation: Rate Code of the vehicle. Supported Providers 1P,1G,1V. | The code of this rate.
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $RateCode = null;
    /**
     * The RequestedRateCodeApplied
     * Meta information extracted from the WSDL
     * - documentation: The requested Rate Code applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $RequestedRateCodeApplied = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: The category of this rate (Best, etc)
     * - use: optional
     * @var string|null
     */
    protected ?string $RateCategory = null;
    /**
     * The DiscountNumber
     * Meta information extracted from the WSDL
     * - documentation: Corporate Discount number used to request a specified discount. Supported Providers Requests: 1P,1G,1V, Responses only 1P. | A supplier-specific number which may identify a special rate associated with a traveler's organization
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountNumber = null;
    /**
     * The DiscountNumberApplied
     * Meta information extracted from the WSDL
     * - documentation: Discount Number has been applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $DiscountNumberApplied = null;
    /**
     * The VendorCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $VendorCode = null;
    /**
     * The RateGuaranteed
     * Meta information extracted from the WSDL
     * - documentation: Guarantee indicator for vehicle rate.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RateGuaranteed = null;
    /**
     * The RateCodePeriod
     * Meta information extracted from the WSDL
     * - documentation: RateCodePeriod
     * - use: optional
     * @var string|null
     */
    protected ?string $RateCodePeriod = null;
    /**
     * The PromotionalCode
     * Meta information extracted from the WSDL
     * - documentation: Specific coupon or promotion code. Providers 1P,1V,1G.
     * - use: optional
     * @var string|null
     */
    protected ?string $PromotionalCode = null;
    /**
     * The PromotionalCodeApplied
     * Meta information extracted from the WSDL
     * - documentation: Promotional/Coupon Number has been applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $PromotionalCodeApplied = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour Number for the Vehicle Booking
     * - use: optional
     * @var string|null
     */
    protected ?string $TourCode = null;
    /**
     * The TourCodeApplied
     * Meta information extracted from the WSDL
     * - documentation: Tour Code Number has been applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $TourCodeApplied = null;
    /**
     * The RateGuaranteeType
     * Meta information extracted from the WSDL
     * - documentation: To identify whether rate is already guaranteed or rate quoted or agent entered
     * - use: optional
     * @var string|null
     */
    protected ?string $RateGuaranteeType = null;
    /**
     * The RequiredPayment
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $RequiredPayment = null;
    /**
     * The DropOffChargesIncluded
     * Meta information extracted from the WSDL
     * - documentation: If true: Drop off charges are included. If false, not included. If not specified, additional drop off charges MAY apply (but this has not been confirmed by vendor)
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DropOffChargesIncluded = null;
    /**
     * The CorporateRate
     * Meta information extracted from the WSDL
     * - documentation: If "true" a Corporate Discount has been applied to the rate. Applicable to 1P
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CorporateRate = null;
    /**
     * The AdvancedBooking
     * Meta information extracted from the WSDL
     * - documentation: Indicates the number of Hours or Days a rate must be booked in advance. Values are for Days = number followed by “D” e.g., "002D" and Hours = number followed by “H” e.g., 002H” 1P/1G/1V only.
     * - use: optional
     * @var string|null
     */
    protected ?string $AdvancedBooking = null;
    /**
     * The RentalRestriction
     * Meta information extracted from the WSDL
     * - documentation: RentalRestriction attribute value is true if vehicle rate has rental restrictions. Rental restrictions can be obtained from the Vehicle Rules. 1P only.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RentalRestriction = null;
    /**
     * The FlightRestriction
     * Meta information extracted from the WSDL
     * - documentation: Flight restriction indicator is true if flight information is required at booking. 1P/1G/1V only.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FlightRestriction = null;
    /**
     * The CardNumber
     * Meta information extracted from the WSDL
     * - documentation: Vehicle Loyalty Card Number. Supported Provider 1P. | Loyalty Card number with maximum length as 36.
     * - base: xs:string
     * - maxLength: 36
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $CardNumber = null;
    /**
     * The CardNumberApplied
     * Meta information extracted from the WSDL
     * - documentation: Loyalty Card Number has been applied to the Rate. Values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $CardNumberApplied = null;
    /**
     * The RateQualifierInd
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether rates comply with CD, ID, or Drop Off requested. 1 is fully qualified, 2 is partly qualified, and 3 is other rates. 1G, 1V only.
     * - use: optional
     * @var int|null
     */
    protected ?int $RateQualifierInd = null;
    /**
     * Constructor method for VehicleRate
     * @uses VehicleRate::setSupplierRate()
     * @uses VehicleRate::setRateVariance()
     * @uses VehicleRate::setApproximateRate()
     * @uses VehicleRate::setVehicleCharge()
     * @uses VehicleRate::setVehicleRateDescription()
     * @uses VehicleRate::setRateHostIndicator()
     * @uses VehicleRate::setHourlyLateCharge()
     * @uses VehicleRate::setDailyLateCharge()
     * @uses VehicleRate::setPricedEquip()
     * @uses VehicleRate::setRateInclusions()
     * @uses VehicleRate::setWeeklyLateCharge()
     * @uses VehicleRate::setPrintText()
     * @uses VehicleRate::setRatePeriod()
     * @uses VehicleRate::setNumberOfPeriods()
     * @uses VehicleRate::setUnlimitedMileage()
     * @uses VehicleRate::setMileageAllowance()
     * @uses VehicleRate::setUnits()
     * @uses VehicleRate::setRateSource()
     * @uses VehicleRate::setRateAvailability()
     * @uses VehicleRate::setRequiredCharges()
     * @uses VehicleRate::setRateCode()
     * @uses VehicleRate::setRequestedRateCodeApplied()
     * @uses VehicleRate::setRateCategory()
     * @uses VehicleRate::setDiscountNumber()
     * @uses VehicleRate::setDiscountNumberApplied()
     * @uses VehicleRate::setVendorCode()
     * @uses VehicleRate::setRateGuaranteed()
     * @uses VehicleRate::setRateCodePeriod()
     * @uses VehicleRate::setPromotionalCode()
     * @uses VehicleRate::setPromotionalCodeApplied()
     * @uses VehicleRate::setTourCode()
     * @uses VehicleRate::setTourCodeApplied()
     * @uses VehicleRate::setRateGuaranteeType()
     * @uses VehicleRate::setRequiredPayment()
     * @uses VehicleRate::setDropOffChargesIncluded()
     * @uses VehicleRate::setCorporateRate()
     * @uses VehicleRate::setAdvancedBooking()
     * @uses VehicleRate::setRentalRestriction()
     * @uses VehicleRate::setFlightRestriction()
     * @uses VehicleRate::setCardNumber()
     * @uses VehicleRate::setCardNumberApplied()
     * @uses VehicleRate::setRateQualifierInd()
     * @param \Travelport\UniversalRecord\StructType\SupplierRate $supplierRate
     * @param \Travelport\UniversalRecord\StructType\TypeRateVariance $rateVariance
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleRates $approximateRate
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleCharge[] $vehicleCharge
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription[] $vehicleRateDescription
     * @param \Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator
     * @param \Travelport\UniversalRecord\StructType\TypeRateInfo $hourlyLateCharge
     * @param \Travelport\UniversalRecord\StructType\TypeRateInfo $dailyLateCharge
     * @param \Travelport\UniversalRecord\StructType\PricedEquip[] $pricedEquip
     * @param \Travelport\UniversalRecord\StructType\RateInclusions $rateInclusions
     * @param \Travelport\UniversalRecord\StructType\TypeRateInfo $weeklyLateCharge
     * @param string $printText
     * @param string $ratePeriod
     * @param int $numberOfPeriods
     * @param bool $unlimitedMileage
     * @param int $mileageAllowance
     * @param string $units
     * @param string $rateSource
     * @param string $rateAvailability
     * @param string $requiredCharges
     * @param string $rateCode
     * @param string $requestedRateCodeApplied
     * @param string $rateCategory
     * @param string $discountNumber
     * @param string $discountNumberApplied
     * @param string $vendorCode
     * @param bool $rateGuaranteed
     * @param string $rateCodePeriod
     * @param string $promotionalCode
     * @param string $promotionalCodeApplied
     * @param string $tourCode
     * @param string $tourCodeApplied
     * @param string $rateGuaranteeType
     * @param string $requiredPayment
     * @param bool $dropOffChargesIncluded
     * @param bool $corporateRate
     * @param string $advancedBooking
     * @param bool $rentalRestriction
     * @param bool $flightRestriction
     * @param string $cardNumber
     * @param string $cardNumberApplied
     * @param int $rateQualifierInd
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\SupplierRate $supplierRate = null, ?\Travelport\UniversalRecord\StructType\TypeRateVariance $rateVariance = null, ?\Travelport\UniversalRecord\StructType\TypeVehicleRates $approximateRate = null, ?array $vehicleCharge = null, ?array $vehicleRateDescription = null, ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator = null, ?\Travelport\UniversalRecord\StructType\TypeRateInfo $hourlyLateCharge = null, ?\Travelport\UniversalRecord\StructType\TypeRateInfo $dailyLateCharge = null, ?array $pricedEquip = null, ?\Travelport\UniversalRecord\StructType\RateInclusions $rateInclusions = null, ?\Travelport\UniversalRecord\StructType\TypeRateInfo $weeklyLateCharge = null, ?string $printText = null, ?string $ratePeriod = null, ?int $numberOfPeriods = null, ?bool $unlimitedMileage = null, ?int $mileageAllowance = null, ?string $units = null, ?string $rateSource = null, ?string $rateAvailability = null, ?string $requiredCharges = null, ?string $rateCode = null, ?string $requestedRateCodeApplied = null, ?string $rateCategory = null, ?string $discountNumber = null, ?string $discountNumberApplied = null, ?string $vendorCode = null, ?bool $rateGuaranteed = false, ?string $rateCodePeriod = null, ?string $promotionalCode = null, ?string $promotionalCodeApplied = null, ?string $tourCode = null, ?string $tourCodeApplied = null, ?string $rateGuaranteeType = null, ?string $requiredPayment = null, ?bool $dropOffChargesIncluded = null, ?bool $corporateRate = null, ?string $advancedBooking = null, ?bool $rentalRestriction = null, ?bool $flightRestriction = null, ?string $cardNumber = null, ?string $cardNumberApplied = null, ?int $rateQualifierInd = null)
    {
        $this
            ->setSupplierRate($supplierRate)
            ->setRateVariance($rateVariance)
            ->setApproximateRate($approximateRate)
            ->setVehicleCharge($vehicleCharge)
            ->setVehicleRateDescription($vehicleRateDescription)
            ->setRateHostIndicator($rateHostIndicator)
            ->setHourlyLateCharge($hourlyLateCharge)
            ->setDailyLateCharge($dailyLateCharge)
            ->setPricedEquip($pricedEquip)
            ->setRateInclusions($rateInclusions)
            ->setWeeklyLateCharge($weeklyLateCharge)
            ->setPrintText($printText)
            ->setRatePeriod($ratePeriod)
            ->setNumberOfPeriods($numberOfPeriods)
            ->setUnlimitedMileage($unlimitedMileage)
            ->setMileageAllowance($mileageAllowance)
            ->setUnits($units)
            ->setRateSource($rateSource)
            ->setRateAvailability($rateAvailability)
            ->setRequiredCharges($requiredCharges)
            ->setRateCode($rateCode)
            ->setRequestedRateCodeApplied($requestedRateCodeApplied)
            ->setRateCategory($rateCategory)
            ->setDiscountNumber($discountNumber)
            ->setDiscountNumberApplied($discountNumberApplied)
            ->setVendorCode($vendorCode)
            ->setRateGuaranteed($rateGuaranteed)
            ->setRateCodePeriod($rateCodePeriod)
            ->setPromotionalCode($promotionalCode)
            ->setPromotionalCodeApplied($promotionalCodeApplied)
            ->setTourCode($tourCode)
            ->setTourCodeApplied($tourCodeApplied)
            ->setRateGuaranteeType($rateGuaranteeType)
            ->setRequiredPayment($requiredPayment)
            ->setDropOffChargesIncluded($dropOffChargesIncluded)
            ->setCorporateRate($corporateRate)
            ->setAdvancedBooking($advancedBooking)
            ->setRentalRestriction($rentalRestriction)
            ->setFlightRestriction($flightRestriction)
            ->setCardNumber($cardNumber)
            ->setCardNumberApplied($cardNumberApplied)
            ->setRateQualifierInd($rateQualifierInd);
    }
    /**
     * Get SupplierRate value
     * @return \Travelport\UniversalRecord\StructType\SupplierRate|null
     */
    public function getSupplierRate(): ?\Travelport\UniversalRecord\StructType\SupplierRate
    {
        return $this->SupplierRate;
    }
    /**
     * Set SupplierRate value
     * @param \Travelport\UniversalRecord\StructType\SupplierRate $supplierRate
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setSupplierRate(?\Travelport\UniversalRecord\StructType\SupplierRate $supplierRate = null): self
    {
        $this->SupplierRate = $supplierRate;
        
        return $this;
    }
    /**
     * Get RateVariance value
     * @return \Travelport\UniversalRecord\StructType\TypeRateVariance|null
     */
    public function getRateVariance(): ?\Travelport\UniversalRecord\StructType\TypeRateVariance
    {
        return $this->RateVariance;
    }
    /**
     * Set RateVariance value
     * @param \Travelport\UniversalRecord\StructType\TypeRateVariance $rateVariance
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateVariance(?\Travelport\UniversalRecord\StructType\TypeRateVariance $rateVariance = null): self
    {
        $this->RateVariance = $rateVariance;
        
        return $this;
    }
    /**
     * Get ApproximateRate value
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRates|null
     */
    public function getApproximateRate(): ?\Travelport\UniversalRecord\StructType\TypeVehicleRates
    {
        return $this->ApproximateRate;
    }
    /**
     * Set ApproximateRate value
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleRates $approximateRate
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setApproximateRate(?\Travelport\UniversalRecord\StructType\TypeVehicleRates $approximateRate = null): self
    {
        $this->ApproximateRate = $approximateRate;
        
        return $this;
    }
    /**
     * Get VehicleCharge value
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleCharge[]
     */
    public function getVehicleCharge(): ?array
    {
        return $this->VehicleCharge;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleCharge method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleChargeForArrayConstraintFromSetVehicleCharge(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleRateVehicleChargeItem) {
            // validation for constraint: itemType
            if (!$vehicleRateVehicleChargeItem instanceof \Travelport\UniversalRecord\StructType\TypeVehicleCharge) {
                $invalidValues[] = is_object($vehicleRateVehicleChargeItem) ? get_class($vehicleRateVehicleChargeItem) : sprintf('%s(%s)', gettype($vehicleRateVehicleChargeItem), var_export($vehicleRateVehicleChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleCharge property can only contain items of type \Travelport\UniversalRecord\StructType\TypeVehicleCharge, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleCharge value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleCharge[] $vehicleCharge
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setVehicleCharge(?array $vehicleCharge = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleChargeArrayErrorMessage = self::validateVehicleChargeForArrayConstraintFromSetVehicleCharge($vehicleCharge))) {
            throw new InvalidArgumentException($vehicleChargeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($vehicleCharge) && count($vehicleCharge) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($vehicleCharge)), __LINE__);
        }
        $this->VehicleCharge = $vehicleCharge;
        
        return $this;
    }
    /**
     * Add item to VehicleCharge value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleCharge $item
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function addToVehicleCharge(\Travelport\UniversalRecord\StructType\TypeVehicleCharge $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeVehicleCharge) {
            throw new InvalidArgumentException(sprintf('The VehicleCharge property can only contain items of type \Travelport\UniversalRecord\StructType\TypeVehicleCharge, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->VehicleCharge) && count($this->VehicleCharge) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->VehicleCharge)), __LINE__);
        }
        $this->VehicleCharge[] = $item;
        
        return $this;
    }
    /**
     * Get VehicleRateDescription value
     * @return \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription[]
     */
    public function getVehicleRateDescription(): ?array
    {
        return $this->VehicleRateDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVehicleRateDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVehicleRateDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVehicleRateDescriptionForArrayConstraintFromSetVehicleRateDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleRateVehicleRateDescriptionItem) {
            // validation for constraint: itemType
            if (!$vehicleRateVehicleRateDescriptionItem instanceof \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription) {
                $invalidValues[] = is_object($vehicleRateVehicleRateDescriptionItem) ? get_class($vehicleRateVehicleRateDescriptionItem) : sprintf('%s(%s)', gettype($vehicleRateVehicleRateDescriptionItem), var_export($vehicleRateVehicleRateDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VehicleRateDescription property can only contain items of type \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VehicleRateDescription value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription[] $vehicleRateDescription
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setVehicleRateDescription(?array $vehicleRateDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($vehicleRateDescriptionArrayErrorMessage = self::validateVehicleRateDescriptionForArrayConstraintFromSetVehicleRateDescription($vehicleRateDescription))) {
            throw new InvalidArgumentException($vehicleRateDescriptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($vehicleRateDescription) && count($vehicleRateDescription) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($vehicleRateDescription)), __LINE__);
        }
        $this->VehicleRateDescription = $vehicleRateDescription;
        
        return $this;
    }
    /**
     * Add item to VehicleRateDescription value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription $item
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function addToVehicleRateDescription(\Travelport\UniversalRecord\StructType\TypeVehicleRateDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription) {
            throw new InvalidArgumentException(sprintf('The VehicleRateDescription property can only contain items of type \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->VehicleRateDescription) && count($this->VehicleRateDescription) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->VehicleRateDescription)), __LINE__);
        }
        $this->VehicleRateDescription[] = $item;
        
        return $this;
    }
    /**
     * Get RateHostIndicator value
     * @return \Travelport\UniversalRecord\StructType\TypeRateHostIndicator|null
     */
    public function getRateHostIndicator(): ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator
    {
        return $this->RateHostIndicator;
    }
    /**
     * Set RateHostIndicator value
     * @param \Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateHostIndicator(?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $rateHostIndicator = null): self
    {
        $this->RateHostIndicator = $rateHostIndicator;
        
        return $this;
    }
    /**
     * Get HourlyLateCharge value
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    public function getHourlyLateCharge(): ?\Travelport\UniversalRecord\StructType\TypeRateInfo
    {
        return $this->HourlyLateCharge;
    }
    /**
     * Set HourlyLateCharge value
     * @param \Travelport\UniversalRecord\StructType\TypeRateInfo $hourlyLateCharge
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setHourlyLateCharge(?\Travelport\UniversalRecord\StructType\TypeRateInfo $hourlyLateCharge = null): self
    {
        $this->HourlyLateCharge = $hourlyLateCharge;
        
        return $this;
    }
    /**
     * Get DailyLateCharge value
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    public function getDailyLateCharge(): ?\Travelport\UniversalRecord\StructType\TypeRateInfo
    {
        return $this->DailyLateCharge;
    }
    /**
     * Set DailyLateCharge value
     * @param \Travelport\UniversalRecord\StructType\TypeRateInfo $dailyLateCharge
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setDailyLateCharge(?\Travelport\UniversalRecord\StructType\TypeRateInfo $dailyLateCharge = null): self
    {
        $this->DailyLateCharge = $dailyLateCharge;
        
        return $this;
    }
    /**
     * Get PricedEquip value
     * @return \Travelport\UniversalRecord\StructType\PricedEquip[]
     */
    public function getPricedEquip(): ?array
    {
        return $this->PricedEquip;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPricedEquip method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPricedEquip method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePricedEquipForArrayConstraintFromSetPricedEquip(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vehicleRatePricedEquipItem) {
            // validation for constraint: itemType
            if (!$vehicleRatePricedEquipItem instanceof \Travelport\UniversalRecord\StructType\PricedEquip) {
                $invalidValues[] = is_object($vehicleRatePricedEquipItem) ? get_class($vehicleRatePricedEquipItem) : sprintf('%s(%s)', gettype($vehicleRatePricedEquipItem), var_export($vehicleRatePricedEquipItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PricedEquip property can only contain items of type \Travelport\UniversalRecord\StructType\PricedEquip, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PricedEquip value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PricedEquip[] $pricedEquip
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setPricedEquip(?array $pricedEquip = null): self
    {
        // validation for constraint: array
        if ('' !== ($pricedEquipArrayErrorMessage = self::validatePricedEquipForArrayConstraintFromSetPricedEquip($pricedEquip))) {
            throw new InvalidArgumentException($pricedEquipArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($pricedEquip) && count($pricedEquip) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($pricedEquip)), __LINE__);
        }
        $this->PricedEquip = $pricedEquip;
        
        return $this;
    }
    /**
     * Add item to PricedEquip value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PricedEquip $item
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function addToPricedEquip(\Travelport\UniversalRecord\StructType\PricedEquip $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PricedEquip) {
            throw new InvalidArgumentException(sprintf('The PricedEquip property can only contain items of type \Travelport\UniversalRecord\StructType\PricedEquip, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PricedEquip) && count($this->PricedEquip) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PricedEquip)), __LINE__);
        }
        $this->PricedEquip[] = $item;
        
        return $this;
    }
    /**
     * Get RateInclusions value
     * @return \Travelport\UniversalRecord\StructType\RateInclusions|null
     */
    public function getRateInclusions(): ?\Travelport\UniversalRecord\StructType\RateInclusions
    {
        return $this->RateInclusions;
    }
    /**
     * Set RateInclusions value
     * @param \Travelport\UniversalRecord\StructType\RateInclusions $rateInclusions
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateInclusions(?\Travelport\UniversalRecord\StructType\RateInclusions $rateInclusions = null): self
    {
        $this->RateInclusions = $rateInclusions;
        
        return $this;
    }
    /**
     * Get WeeklyLateCharge value
     * @return \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    public function getWeeklyLateCharge(): ?\Travelport\UniversalRecord\StructType\TypeRateInfo
    {
        return $this->WeeklyLateCharge;
    }
    /**
     * Set WeeklyLateCharge value
     * @param \Travelport\UniversalRecord\StructType\TypeRateInfo $weeklyLateCharge
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setWeeklyLateCharge(?\Travelport\UniversalRecord\StructType\TypeRateInfo $weeklyLateCharge = null): self
    {
        $this->WeeklyLateCharge = $weeklyLateCharge;
        
        return $this;
    }
    /**
     * Get PrintText value
     * @return string|null
     */
    public function getPrintText(): ?string
    {
        return $this->PrintText;
    }
    /**
     * Set PrintText value
     * @param string $printText
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setPrintText(?string $printText = null): self
    {
        // validation for constraint: string
        if (!is_null($printText) && !is_string($printText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printText, true), gettype($printText)), __LINE__);
        }
        $this->PrintText = $printText;
        
        return $this;
    }
    /**
     * Get RatePeriod value
     * @return string|null
     */
    public function getRatePeriod(): ?string
    {
        return $this->RatePeriod;
    }
    /**
     * Set RatePeriod value
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ratePeriod
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRatePeriod(?string $ratePeriod = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::valueIsValid($ratePeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod', is_array($ratePeriod) ? implode(', ', $ratePeriod) : var_export($ratePeriod, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRateTimePeriod::getValidValues())), __LINE__);
        }
        $this->RatePeriod = $ratePeriod;
        
        return $this;
    }
    /**
     * Get NumberOfPeriods value
     * @return int|null
     */
    public function getNumberOfPeriods(): ?int
    {
        return $this->NumberOfPeriods;
    }
    /**
     * Set NumberOfPeriods value
     * @param int $numberOfPeriods
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setNumberOfPeriods(?int $numberOfPeriods = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfPeriods) && !(is_int($numberOfPeriods) || ctype_digit($numberOfPeriods))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPeriods, true), gettype($numberOfPeriods)), __LINE__);
        }
        $this->NumberOfPeriods = $numberOfPeriods;
        
        return $this;
    }
    /**
     * Get UnlimitedMileage value
     * @return bool|null
     */
    public function getUnlimitedMileage(): ?bool
    {
        return $this->UnlimitedMileage;
    }
    /**
     * Set UnlimitedMileage value
     * @param bool $unlimitedMileage
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setUnlimitedMileage(?bool $unlimitedMileage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($unlimitedMileage) && !is_bool($unlimitedMileage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unlimitedMileage, true), gettype($unlimitedMileage)), __LINE__);
        }
        $this->UnlimitedMileage = $unlimitedMileage;
        
        return $this;
    }
    /**
     * Get MileageAllowance value
     * @return int|null
     */
    public function getMileageAllowance(): ?int
    {
        return $this->MileageAllowance;
    }
    /**
     * Set MileageAllowance value
     * @param int $mileageAllowance
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setMileageAllowance(?int $mileageAllowance = null): self
    {
        // validation for constraint: int
        if (!is_null($mileageAllowance) && !(is_int($mileageAllowance) || ctype_digit($mileageAllowance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mileageAllowance, true), gettype($mileageAllowance)), __LINE__);
        }
        $this->MileageAllowance = $mileageAllowance;
        
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits(): ?string
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @uses \Travelport\UniversalRecord\EnumType\TypeDistance::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeDistance::getValidValues()
     * @throws InvalidArgumentException
     * @param string $units
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setUnits(?string $units = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeDistance::valueIsValid($units)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeDistance', is_array($units) ? implode(', ', $units) : var_export($units, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeDistance::getValidValues())), __LINE__);
        }
        $this->Units = $units;
        
        return $this;
    }
    /**
     * Get RateSource value
     * @return string|null
     */
    public function getRateSource(): ?string
    {
        return $this->RateSource;
    }
    /**
     * Set RateSource value
     * @param string $rateSource
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateSource(?string $rateSource = null): self
    {
        // validation for constraint: string
        if (!is_null($rateSource) && !is_string($rateSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateSource, true), gettype($rateSource)), __LINE__);
        }
        $this->RateSource = $rateSource;
        
        return $this;
    }
    /**
     * Get RateAvailability value
     * @return string|null
     */
    public function getRateAvailability(): ?string
    {
        return $this->RateAvailability;
    }
    /**
     * Set RateAvailability value
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateAvailability::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateAvailability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateAvailability
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateAvailability(?string $rateAvailability = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRateAvailability::valueIsValid($rateAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRateAvailability', is_array($rateAvailability) ? implode(', ', $rateAvailability) : var_export($rateAvailability, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRateAvailability::getValidValues())), __LINE__);
        }
        $this->RateAvailability = $rateAvailability;
        
        return $this;
    }
    /**
     * Get RequiredCharges value
     * @return string|null
     */
    public function getRequiredCharges(): ?string
    {
        return $this->RequiredCharges;
    }
    /**
     * Set RequiredCharges value
     * @param string $requiredCharges
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRequiredCharges(?string $requiredCharges = null): self
    {
        // validation for constraint: string
        if (!is_null($requiredCharges) && !is_string($requiredCharges)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requiredCharges, true), gettype($requiredCharges)), __LINE__);
        }
        $this->RequiredCharges = $requiredCharges;
        
        return $this;
    }
    /**
     * Get RateCode value
     * @return string|null
     */
    public function getRateCode(): ?string
    {
        return $this->RateCode;
    }
    /**
     * Set RateCode value
     * @param string $rateCode
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateCode(?string $rateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($rateCode) && !is_string($rateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateCode, true), gettype($rateCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($rateCode) && mb_strlen((string) $rateCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $rateCode)), __LINE__);
        }
        $this->RateCode = $rateCode;
        
        return $this;
    }
    /**
     * Get RequestedRateCodeApplied value
     * @return string|null
     */
    public function getRequestedRateCodeApplied(): ?string
    {
        return $this->RequestedRateCodeApplied;
    }
    /**
     * Set RequestedRateCodeApplied value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestedRateCodeApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRequestedRateCodeApplied(?string $requestedRateCodeApplied = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($requestedRateCodeApplied)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($requestedRateCodeApplied) ? implode(', ', $requestedRateCodeApplied) : var_export($requestedRateCodeApplied, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->RequestedRateCodeApplied = $requestedRateCodeApplied;
        
        return $this;
    }
    /**
     * Get RateCategory value
     * @return string|null
     */
    public function getRateCategory(): ?string
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateCategory::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateCategory::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateCategory
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateCategory(?string $rateCategory = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRateCategory::valueIsValid($rateCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRateCategory', is_array($rateCategory) ? implode(', ', $rateCategory) : var_export($rateCategory, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRateCategory::getValidValues())), __LINE__);
        }
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Get DiscountNumber value
     * @return string|null
     */
    public function getDiscountNumber(): ?string
    {
        return $this->DiscountNumber;
    }
    /**
     * Set DiscountNumber value
     * @param string $discountNumber
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setDiscountNumber(?string $discountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($discountNumber) && !is_string($discountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountNumber, true), gettype($discountNumber)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($discountNumber) && mb_strlen((string) $discountNumber) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $discountNumber)), __LINE__);
        }
        $this->DiscountNumber = $discountNumber;
        
        return $this;
    }
    /**
     * Get DiscountNumberApplied value
     * @return string|null
     */
    public function getDiscountNumberApplied(): ?string
    {
        return $this->DiscountNumberApplied;
    }
    /**
     * Set DiscountNumberApplied value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $discountNumberApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setDiscountNumberApplied(?string $discountNumberApplied = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($discountNumberApplied)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($discountNumberApplied) ? implode(', ', $discountNumberApplied) : var_export($discountNumberApplied, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->DiscountNumberApplied = $discountNumberApplied;
        
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setVendorCode(?string $vendorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorCode, true), gettype($vendorCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $vendorCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($vendorCode) && mb_strlen((string) $vendorCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        
        return $this;
    }
    /**
     * Get RateGuaranteed value
     * @return bool|null
     */
    public function getRateGuaranteed(): ?bool
    {
        return $this->RateGuaranteed;
    }
    /**
     * Set RateGuaranteed value
     * @param bool $rateGuaranteed
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateGuaranteed(?bool $rateGuaranteed = false): self
    {
        // validation for constraint: boolean
        if (!is_null($rateGuaranteed) && !is_bool($rateGuaranteed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rateGuaranteed, true), gettype($rateGuaranteed)), __LINE__);
        }
        $this->RateGuaranteed = $rateGuaranteed;
        
        return $this;
    }
    /**
     * Get RateCodePeriod value
     * @return string|null
     */
    public function getRateCodePeriod(): ?string
    {
        return $this->RateCodePeriod;
    }
    /**
     * Set RateCodePeriod value
     * @param string $rateCodePeriod
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateCodePeriod(?string $rateCodePeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($rateCodePeriod) && !is_string($rateCodePeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateCodePeriod, true), gettype($rateCodePeriod)), __LINE__);
        }
        $this->RateCodePeriod = $rateCodePeriod;
        
        return $this;
    }
    /**
     * Get PromotionalCode value
     * @return string|null
     */
    public function getPromotionalCode(): ?string
    {
        return $this->PromotionalCode;
    }
    /**
     * Set PromotionalCode value
     * @param string $promotionalCode
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setPromotionalCode(?string $promotionalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($promotionalCode) && !is_string($promotionalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($promotionalCode, true), gettype($promotionalCode)), __LINE__);
        }
        $this->PromotionalCode = $promotionalCode;
        
        return $this;
    }
    /**
     * Get PromotionalCodeApplied value
     * @return string|null
     */
    public function getPromotionalCodeApplied(): ?string
    {
        return $this->PromotionalCodeApplied;
    }
    /**
     * Set PromotionalCodeApplied value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $promotionalCodeApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setPromotionalCodeApplied(?string $promotionalCodeApplied = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($promotionalCodeApplied)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($promotionalCodeApplied) ? implode(', ', $promotionalCodeApplied) : var_export($promotionalCodeApplied, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->PromotionalCodeApplied = $promotionalCodeApplied;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get TourCodeApplied value
     * @return string|null
     */
    public function getTourCodeApplied(): ?string
    {
        return $this->TourCodeApplied;
    }
    /**
     * Set TourCodeApplied value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $tourCodeApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setTourCodeApplied(?string $tourCodeApplied = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($tourCodeApplied)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($tourCodeApplied) ? implode(', ', $tourCodeApplied) : var_export($tourCodeApplied, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->TourCodeApplied = $tourCodeApplied;
        
        return $this;
    }
    /**
     * Get RateGuaranteeType value
     * @return string|null
     */
    public function getRateGuaranteeType(): ?string
    {
        return $this->RateGuaranteeType;
    }
    /**
     * Set RateGuaranteeType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateGuarantee::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRateGuarantee::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateGuaranteeType
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateGuaranteeType(?string $rateGuaranteeType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRateGuarantee::valueIsValid($rateGuaranteeType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRateGuarantee', is_array($rateGuaranteeType) ? implode(', ', $rateGuaranteeType) : var_export($rateGuaranteeType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRateGuarantee::getValidValues())), __LINE__);
        }
        $this->RateGuaranteeType = $rateGuaranteeType;
        
        return $this;
    }
    /**
     * Get RequiredPayment value
     * @return string|null
     */
    public function getRequiredPayment(): ?string
    {
        return $this->RequiredPayment;
    }
    /**
     * Set RequiredPayment value
     * @param string $requiredPayment
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRequiredPayment(?string $requiredPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($requiredPayment) && !is_string($requiredPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requiredPayment, true), gettype($requiredPayment)), __LINE__);
        }
        $this->RequiredPayment = $requiredPayment;
        
        return $this;
    }
    /**
     * Get DropOffChargesIncluded value
     * @return bool|null
     */
    public function getDropOffChargesIncluded(): ?bool
    {
        return $this->DropOffChargesIncluded;
    }
    /**
     * Set DropOffChargesIncluded value
     * @param bool $dropOffChargesIncluded
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setDropOffChargesIncluded(?bool $dropOffChargesIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dropOffChargesIncluded) && !is_bool($dropOffChargesIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dropOffChargesIncluded, true), gettype($dropOffChargesIncluded)), __LINE__);
        }
        $this->DropOffChargesIncluded = $dropOffChargesIncluded;
        
        return $this;
    }
    /**
     * Get CorporateRate value
     * @return bool|null
     */
    public function getCorporateRate(): ?bool
    {
        return $this->CorporateRate;
    }
    /**
     * Set CorporateRate value
     * @param bool $corporateRate
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setCorporateRate(?bool $corporateRate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($corporateRate) && !is_bool($corporateRate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($corporateRate, true), gettype($corporateRate)), __LINE__);
        }
        $this->CorporateRate = $corporateRate;
        
        return $this;
    }
    /**
     * Get AdvancedBooking value
     * @return string|null
     */
    public function getAdvancedBooking(): ?string
    {
        return $this->AdvancedBooking;
    }
    /**
     * Set AdvancedBooking value
     * @param string $advancedBooking
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setAdvancedBooking(?string $advancedBooking = null): self
    {
        // validation for constraint: string
        if (!is_null($advancedBooking) && !is_string($advancedBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advancedBooking, true), gettype($advancedBooking)), __LINE__);
        }
        $this->AdvancedBooking = $advancedBooking;
        
        return $this;
    }
    /**
     * Get RentalRestriction value
     * @return bool|null
     */
    public function getRentalRestriction(): ?bool
    {
        return $this->RentalRestriction;
    }
    /**
     * Set RentalRestriction value
     * @param bool $rentalRestriction
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRentalRestriction(?bool $rentalRestriction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($rentalRestriction) && !is_bool($rentalRestriction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rentalRestriction, true), gettype($rentalRestriction)), __LINE__);
        }
        $this->RentalRestriction = $rentalRestriction;
        
        return $this;
    }
    /**
     * Get FlightRestriction value
     * @return bool|null
     */
    public function getFlightRestriction(): ?bool
    {
        return $this->FlightRestriction;
    }
    /**
     * Set FlightRestriction value
     * @param bool $flightRestriction
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setFlightRestriction(?bool $flightRestriction = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flightRestriction) && !is_bool($flightRestriction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flightRestriction, true), gettype($flightRestriction)), __LINE__);
        }
        $this->FlightRestriction = $flightRestriction;
        
        return $this;
    }
    /**
     * Get CardNumber value
     * @return string|null
     */
    public function getCardNumber(): ?string
    {
        return $this->CardNumber;
    }
    /**
     * Set CardNumber value
     * @param string $cardNumber
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setCardNumber(?string $cardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNumber) && !is_string($cardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNumber, true), gettype($cardNumber)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($cardNumber) && mb_strlen((string) $cardNumber) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $cardNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($cardNumber) && mb_strlen((string) $cardNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $cardNumber)), __LINE__);
        }
        $this->CardNumber = $cardNumber;
        
        return $this;
    }
    /**
     * Get CardNumberApplied value
     * @return string|null
     */
    public function getCardNumberApplied(): ?string
    {
        return $this->CardNumberApplied;
    }
    /**
     * Set CardNumberApplied value
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $cardNumberApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setCardNumberApplied(?string $cardNumberApplied = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeTrinary::valueIsValid($cardNumberApplied)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeTrinary', is_array($cardNumberApplied) ? implode(', ', $cardNumberApplied) : var_export($cardNumberApplied, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
        $this->CardNumberApplied = $cardNumberApplied;
        
        return $this;
    }
    /**
     * Get RateQualifierInd value
     * @return int|null
     */
    public function getRateQualifierInd(): ?int
    {
        return $this->RateQualifierInd;
    }
    /**
     * Set RateQualifierInd value
     * @param int $rateQualifierInd
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateQualifierInd(?int $rateQualifierInd = null): self
    {
        // validation for constraint: int
        if (!is_null($rateQualifierInd) && !(is_int($rateQualifierInd) || ctype_digit($rateQualifierInd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rateQualifierInd, true), gettype($rateQualifierInd)), __LINE__);
        }
        $this->RateQualifierInd = $rateQualifierInd;
        
        return $this;
    }
}
