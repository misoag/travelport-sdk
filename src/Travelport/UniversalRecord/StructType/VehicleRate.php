<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?\Travelport\UniversalRecord\StructType\SupplierRate $SupplierRate = null;
    /**
     * The RateVariance
     * Meta information extracted from the WSDL
     * - documentation: Used on VehicleCreateReservationReq ONLY. @MandatoryRateMatch ='true' is required for this element to be applied. 1P.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateVariance|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeRateVariance $RateVariance = null;
    /**
     * The ApproximateRate
     * Meta information extracted from the WSDL
     * - documentation: Monetary amounts expressed in another currency
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleRates|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeVehicleRates $ApproximateRate = null;
    /**
     * The VehicleCharge
     * Meta information extracted from the WSDL
     * - documentation: Charges associated with the vehicle rental.
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleCharge[]
     */
    public ?array $VehicleCharge = null;
    /**
     * The VehicleRateDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription[]
     */
    public ?array $VehicleRateDescription = null;
    /**
     * The RateHostIndicator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateHostIndicator|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeRateHostIndicator $RateHostIndicator = null;
    /**
     * The HourlyLateCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeRateInfo $HourlyLateCharge = null;
    /**
     * The DailyLateCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeRateInfo $DailyLateCharge = null;
    /**
     * The PricedEquip
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PricedEquip
     * @var \Travelport\UniversalRecord\StructType\PricedEquip[]
     */
    public ?array $PricedEquip = null;
    /**
     * The RateInclusions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RateInclusions
     * @var \Travelport\UniversalRecord\StructType\RateInclusions|null
     */
    public ?\Travelport\UniversalRecord\StructType\RateInclusions $RateInclusions = null;
    /**
     * The WeeklyLateCharge
     * Meta information extracted from the WSDL
     * - documentation: Extra Week Charges information. Supported providers:1P only
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRateInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeRateInfo $WeeklyLateCharge = null;
    /**
     * The PrintText
     * Meta information extracted from the WSDL
     * - documentation: Informational text provided by the supplier that may be related to the reservation. This is applicable in response messages only, 1p only.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $PrintText = null;
    /**
     * The RatePeriod
     * Meta information extracted from the WSDL
     * - documentation: The period for the rate (daily, weekly, etc)
     * - use: optional
     * @var string|null
     */
    public ?string $RatePeriod = null;
    /**
     * The NumberOfPeriods
     * Meta information extracted from the WSDL
     * - documentation: Define how many periods (e.g. number of days or weeks)
     * @var int|null
     */
    public ?int $NumberOfPeriods = null;
    /**
     * The UnlimitedMileage
     * Meta information extracted from the WSDL
     * - documentation: True if unlimited miles for rate
     * - use: optional
     * @var bool|null
     */
    public ?bool $UnlimitedMileage = null;
    /**
     * The MileageAllowance
     * Meta information extracted from the WSDL
     * - documentation: Only set if UnlimitedMileage is false. Number of miles allowed for rate
     * - use: optional
     * @var int|null
     */
    public ?int $MileageAllowance = null;
    /**
     * The Units
     * Meta information extracted from the WSDL
     * - documentation: Describes distance units for MileageAllowance or ExtraMileageCharge
     * - use: optional
     * @var string|null
     */
    public ?string $Units = null;
    /**
     * The RateSource
     * Meta information extracted from the WSDL
     * - documentation: The rate source indicator for GWS
     * - use: optional
     * @var string|null
     */
    public ?string $RateSource = null;
    /**
     * The RateAvailability
     * Meta information extracted from the WSDL
     * - documentation: Rate is available to sell, Need to Call or Closed
     * - use: optional
     * @var string|null
     */
    public ?string $RateAvailability = null;
    /**
     * The RequiredCharges
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $RequiredCharges = null;
    /**
     * The RateCode
     * Meta information extracted from the WSDL
     * - documentation: Rate Code of the vehicle. Supported Providers 1P,1G,1V. | The code of this rate.
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $RateCode = null;
    /**
     * The RequestedRateCodeApplied
     * Meta information extracted from the WSDL
     * - documentation: The requested Rate Code applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $RequestedRateCodeApplied = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: The category of this rate (Best, etc)
     * - use: optional
     * @var string|null
     */
    public ?string $RateCategory = null;
    /**
     * The DiscountNumber
     * Meta information extracted from the WSDL
     * - documentation: Corporate Discount number used to request a specified discount. Supported Providers Requests: 1P,1G,1V, Responses only 1P. | A supplier-specific number which may identify a special rate associated with a traveler's organization
     * - base: xs:string
     * - maxLength: 25
     * - use: optional
     * @var string|null
     */
    public ?string $DiscountNumber = null;
    /**
     * The DiscountNumberApplied
     * Meta information extracted from the WSDL
     * - documentation: Discount Number has been applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $DiscountNumberApplied = null;
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
    public ?string $VendorCode = null;
    /**
     * The RateGuaranteed
     * Meta information extracted from the WSDL
     * - documentation: Guarantee indicator for vehicle rate.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $RateGuaranteed = null;
    /**
     * The RateCodePeriod
     * Meta information extracted from the WSDL
     * - documentation: RateCodePeriod
     * - use: optional
     * @var string|null
     */
    public ?string $RateCodePeriod = null;
    /**
     * The PromotionalCode
     * Meta information extracted from the WSDL
     * - documentation: Specific coupon or promotion code. Providers 1P,1V,1G.
     * - use: optional
     * @var string|null
     */
    public ?string $PromotionalCode = null;
    /**
     * The PromotionalCodeApplied
     * Meta information extracted from the WSDL
     * - documentation: Promotional/Coupon Number has been applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $PromotionalCodeApplied = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: Tour Number for the Vehicle Booking
     * - use: optional
     * @var string|null
     */
    public ?string $TourCode = null;
    /**
     * The TourCodeApplied
     * Meta information extracted from the WSDL
     * - documentation: Tour Code Number has been applied to the Rate. Valid values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $TourCodeApplied = null;
    /**
     * The RateGuaranteeType
     * Meta information extracted from the WSDL
     * - documentation: To identify whether rate is already guaranteed or rate quoted or agent entered
     * - use: optional
     * @var string|null
     */
    public ?string $RateGuaranteeType = null;
    /**
     * The RequiredPayment
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $RequiredPayment = null;
    /**
     * The DropOffChargesIncluded
     * Meta information extracted from the WSDL
     * - documentation: If true: Drop off charges are included. If false, not included. If not specified, additional drop off charges MAY apply (but this has not been confirmed by vendor)
     * - use: optional
     * @var bool|null
     */
    public ?bool $DropOffChargesIncluded = null;
    /**
     * The CorporateRate
     * Meta information extracted from the WSDL
     * - documentation: If "true" a Corporate Discount has been applied to the rate. Applicable to 1P
     * - use: optional
     * @var bool|null
     */
    public ?bool $CorporateRate = null;
    /**
     * The AdvancedBooking
     * Meta information extracted from the WSDL
     * - documentation: Indicates the number of Hours or Days a rate must be booked in advance. Values are for Days = number followed by “D” e.g., "002D" and Hours = number followed by “H” e.g., 002H” 1P/1G/1V only.
     * - use: optional
     * @var string|null
     */
    public ?string $AdvancedBooking = null;
    /**
     * The RentalRestriction
     * Meta information extracted from the WSDL
     * - documentation: RentalRestriction attribute value is true if vehicle rate has rental restrictions. Rental restrictions can be obtained from the Vehicle Rules. 1P only.
     * - use: optional
     * @var bool|null
     */
    public ?bool $RentalRestriction = null;
    /**
     * The FlightRestriction
     * Meta information extracted from the WSDL
     * - documentation: Flight restriction indicator is true if flight information is required at booking. 1P/1G/1V only.
     * - use: optional
     * @var bool|null
     */
    public ?bool $FlightRestriction = null;
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
    public ?string $CardNumber = null;
    /**
     * The CardNumberApplied
     * Meta information extracted from the WSDL
     * - documentation: Loyalty Card Number has been applied to the Rate. Values: "true", "false", "unknown". Supported Providers 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $CardNumberApplied = null;
    /**
     * The RateQualifierInd
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether rates comply with CD, ID, or Drop Off requested. 1 is fully qualified, 2 is partly qualified, and 3 is other rates. 1G, 1V only.
     * - use: optional
     * @var int|null
     */
    public ?int $RateQualifierInd = null;
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
     * Set VehicleCharge value
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleCharge[] $vehicleCharge
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setVehicleCharge(?array $vehicleCharge = null): self
    {
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
     * Set VehicleRateDescription value
     * @param \Travelport\UniversalRecord\StructType\TypeVehicleRateDescription[] $vehicleRateDescription
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setVehicleRateDescription(?array $vehicleRateDescription = null): self
    {
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
     * Set PricedEquip value
     * @param \Travelport\UniversalRecord\StructType\PricedEquip[] $pricedEquip
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setPricedEquip(?array $pricedEquip = null): self
    {
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
     * @param string $ratePeriod
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRatePeriod(?string $ratePeriod = null): self
    {
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
     * @param string $units
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setUnits(?string $units = null): self
    {
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
     * @param string $rateAvailability
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateAvailability(?string $rateAvailability = null): self
    {
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
     * @param string $requestedRateCodeApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRequestedRateCodeApplied(?string $requestedRateCodeApplied = null): self
    {
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
     * @param string $rateCategory
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateCategory(?string $rateCategory = null): self
    {
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
     * @param string $discountNumberApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setDiscountNumberApplied(?string $discountNumberApplied = null): self
    {
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
     * @param string $promotionalCodeApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setPromotionalCodeApplied(?string $promotionalCodeApplied = null): self
    {
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
     * @param string $tourCodeApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setTourCodeApplied(?string $tourCodeApplied = null): self
    {
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
     * @param string $rateGuaranteeType
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setRateGuaranteeType(?string $rateGuaranteeType = null): self
    {
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
     * @param string $cardNumberApplied
     * @return \Travelport\UniversalRecord\StructType\VehicleRate
     */
    public function setCardNumberApplied(?string $cardNumberApplied = null): self
    {
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
        $this->RateQualifierInd = $rateQualifierInd;
        
        return $this;
    }
}
