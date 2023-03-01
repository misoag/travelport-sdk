<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRateDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: Guarantee, deposit, and prepayment information | Returns "Match" Indicators for certain request parameters for Hotel Rate returned in response. | Commission associated with the Rate Plan, as a percentage or flat amount. | Form of
 * payment accepted by the hotel supplier (chain or property). For credit cards, the two-character code for the credit card type is used. | Corporate Discount IDs and Negotiate rate codes associated with this rate | Returns hotel rate details during the
 * stay if rates are available for requested property.
 * @subpackage Structs
 */
class HotelRateDetail extends AbstractStructBase
{
    /**
     * The RatePlanType
     * Meta information extracted from the WSDL
     * - documentation: Represents the rate plan code of room type for specified hotel property.
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $RatePlanType;
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - documentation: A list of codes that indicate why an item was determined to be ‘out of policy’.
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $PolicyCodesList = null;
    /**
     * The RoomRateDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeHotelRateDescription[]
     */
    public ?array $RoomRateDescription = null;
    /**
     * The HotelRateByDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateByDate
     * @var \Travelport\UniversalRecord\StructType\HotelRateByDate[]
     */
    public ?array $HotelRateByDate = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    public ?array $CorporateDiscountID = null;
    /**
     * The AcceptedPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AcceptedPayment
     * @var \Travelport\UniversalRecord\StructType\AcceptedPayment[]
     */
    public ?array $AcceptedPayment = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Commission
     * @var \Travelport\UniversalRecord\StructType\Commission|null
     */
    public ?\Travelport\UniversalRecord\StructType\Commission $Commission = null;
    /**
     * The RateMatchIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateMatchIndicator
     * @var \Travelport\UniversalRecord\StructType\RateMatchIndicator[]
     */
    public ?array $RateMatchIndicator = null;
    /**
     * The TaxDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TaxDetails
     * @var \Travelport\UniversalRecord\StructType\TaxDetails|null
     */
    public ?\Travelport\UniversalRecord\StructType\TaxDetails $TaxDetails = null;
    /**
     * The CancelInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CancelInfo
     * @var \Travelport\UniversalRecord\StructType\CancelInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\CancelInfo $CancelInfo = null;
    /**
     * The GuaranteeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: GuaranteeInfo
     * @var \Travelport\UniversalRecord\StructType\GuaranteeInfo|null
     */
    public ?\Travelport\UniversalRecord\StructType\GuaranteeInfo $GuaranteeInfo = null;
    /**
     * The SupplementalRateInfo
     * Meta information extracted from the WSDL
     * - documentation: Supplemental rate information provided by the aggregator.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $SupplementalRateInfo = null;
    /**
     * The RoomCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\RoomCapacity|null
     */
    public ?\Travelport\UniversalRecord\StructType\RoomCapacity $RoomCapacity = null;
    /**
     * The ExtraCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ExtraCharges|null
     */
    public ?\Travelport\UniversalRecord\StructType\ExtraCharges $ExtraCharges = null;
    /**
     * The Inclusions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\Inclusions|null
     */
    public ?\Travelport\UniversalRecord\StructType\Inclusions $Inclusions = null;
    /**
     * The ApproximateBase
     * Meta information extracted from the WSDL
     * - documentation: Hotel base rate expressed in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateBase = null;
    /**
     * The ApproximateTax
     * Meta information extracted from the WSDL
     * - documentation: Taxes expressed in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateTax = null;
    /**
     * The ApproximateTotal
     * Meta information extracted from the WSDL
     * - documentation: Hotel total rate expressed in another currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateTotal = null;
    /**
     * The ApproximateSurcharge
     * Meta information extracted from the WSDL
     * - documentation: Surcharge associated with the room expressed in another currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateSurcharge = null;
    /**
     * The RateGuaranteed
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $RateGuaranteed = null;
    /**
     * The ApproximateRateGuaranteed
     * Meta information extracted from the WSDL
     * - documentation: If true, approximate rate is guaranteed by vendor. Supported Providers: 1G,1V
     * - use: optional
     * @var bool|null
     */
    public ?bool $ApproximateRateGuaranteed = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT). Encode/decode data in Util
     * ReferenceDataRetrieveReq TypeCode=“HotelRateCategory". | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    public ?int $RateCategory = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The RateSupplier
     * Meta information extracted from the WSDL
     * - documentation: Indicates the source of the rate. | Third Party Content Provider name.
     * - base: xs:string
     * - maxLength: 64
     * - use: optional
     * @var string|null
     */
    public ?string $RateSupplier = null;
    /**
     * The BookableQuantity
     * Meta information extracted from the WSDL
     * - documentation: The number of rooms which can be booked on the rate returned in HotelRateDetails. When the aggregator responds ‘IsPackage’= true (pricing for all rooms together), the BookableQuantity value will be ‘1’.
     * - use: optional
     * @var int|null
     */
    public ?int $BookableQuantity = null;
    /**
     * The RateOfferId
     * Meta information extracted from the WSDL
     * - documentation: Offer Identifier. Maybe required for hotels provided by aggregators. | Indicates the supplier of the rate. Maybe required for hotels provided by aggregators.
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RateOfferId = null;
    /**
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to indicate if a fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
     * - use: optional
     * @var bool|null
     */
    public ?bool $InPolicy = null;
    /**
     * The RateChangeIndicator
     * Meta information extracted from the WSDL
     * - documentation: Determines if the rate changes during the length of stay. Enumerated values are true, false, and unknown.
     * - use: optional
     * @var string|null
     */
    public ?string $RateChangeIndicator = null;
    /**
     * The ExtraFeesIncluded
     * Meta information extracted from the WSDL
     * - documentation: When true, total amounts includes additional fees or charges." Enumerated values are true, false, and unknown
     * - use: optional
     * @var string|null
     */
    public ?string $ExtraFeesIncluded = null;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to describe the Hotel Supplier Base Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Base = null;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Tax associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Tax = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Hotel Supplier Total Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Total = null;
    /**
     * The Surcharge
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Surcharge associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    public ?string $Surcharge = null;
    /**
     * Constructor method for HotelRateDetail
     * @uses HotelRateDetail::setRatePlanType()
     * @uses HotelRateDetail::setPolicyCodesList()
     * @uses HotelRateDetail::setRoomRateDescription()
     * @uses HotelRateDetail::setHotelRateByDate()
     * @uses HotelRateDetail::setCorporateDiscountID()
     * @uses HotelRateDetail::setAcceptedPayment()
     * @uses HotelRateDetail::setCommission()
     * @uses HotelRateDetail::setRateMatchIndicator()
     * @uses HotelRateDetail::setTaxDetails()
     * @uses HotelRateDetail::setCancelInfo()
     * @uses HotelRateDetail::setGuaranteeInfo()
     * @uses HotelRateDetail::setSupplementalRateInfo()
     * @uses HotelRateDetail::setRoomCapacity()
     * @uses HotelRateDetail::setExtraCharges()
     * @uses HotelRateDetail::setInclusions()
     * @uses HotelRateDetail::setApproximateBase()
     * @uses HotelRateDetail::setApproximateTax()
     * @uses HotelRateDetail::setApproximateTotal()
     * @uses HotelRateDetail::setApproximateSurcharge()
     * @uses HotelRateDetail::setRateGuaranteed()
     * @uses HotelRateDetail::setApproximateRateGuaranteed()
     * @uses HotelRateDetail::setRateCategory()
     * @uses HotelRateDetail::setKey()
     * @uses HotelRateDetail::setRateSupplier()
     * @uses HotelRateDetail::setBookableQuantity()
     * @uses HotelRateDetail::setRateOfferId()
     * @uses HotelRateDetail::setInPolicy()
     * @uses HotelRateDetail::setRateChangeIndicator()
     * @uses HotelRateDetail::setExtraFeesIncluded()
     * @uses HotelRateDetail::setBase()
     * @uses HotelRateDetail::setTax()
     * @uses HotelRateDetail::setTotal()
     * @uses HotelRateDetail::setSurcharge()
     * @param string $ratePlanType
     * @param \Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList
     * @param \Travelport\UniversalRecord\StructType\TypeHotelRateDescription[] $roomRateDescription
     * @param \Travelport\UniversalRecord\StructType\HotelRateByDate[] $hotelRateByDate
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @param \Travelport\UniversalRecord\StructType\AcceptedPayment[] $acceptedPayment
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @param \Travelport\UniversalRecord\StructType\RateMatchIndicator[] $rateMatchIndicator
     * @param \Travelport\UniversalRecord\StructType\TaxDetails $taxDetails
     * @param \Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo
     * @param \Travelport\UniversalRecord\StructType\GuaranteeInfo $guaranteeInfo
     * @param string $supplementalRateInfo
     * @param \Travelport\UniversalRecord\StructType\RoomCapacity $roomCapacity
     * @param \Travelport\UniversalRecord\StructType\ExtraCharges $extraCharges
     * @param \Travelport\UniversalRecord\StructType\Inclusions $inclusions
     * @param string $approximateBase
     * @param string $approximateTax
     * @param string $approximateTotal
     * @param string $approximateSurcharge
     * @param bool $rateGuaranteed
     * @param bool $approximateRateGuaranteed
     * @param int $rateCategory
     * @param string $key
     * @param string $rateSupplier
     * @param int $bookableQuantity
     * @param string $rateOfferId
     * @param bool $inPolicy
     * @param string $rateChangeIndicator
     * @param string $extraFeesIncluded
     * @param string $base
     * @param string $tax
     * @param string $total
     * @param string $surcharge
     */
    public function __construct(string $ratePlanType, ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList = null, ?array $roomRateDescription = null, ?array $hotelRateByDate = null, ?array $corporateDiscountID = null, ?array $acceptedPayment = null, ?\Travelport\UniversalRecord\StructType\Commission $commission = null, ?array $rateMatchIndicator = null, ?\Travelport\UniversalRecord\StructType\TaxDetails $taxDetails = null, ?\Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo = null, ?\Travelport\UniversalRecord\StructType\GuaranteeInfo $guaranteeInfo = null, ?string $supplementalRateInfo = null, ?\Travelport\UniversalRecord\StructType\RoomCapacity $roomCapacity = null, ?\Travelport\UniversalRecord\StructType\ExtraCharges $extraCharges = null, ?\Travelport\UniversalRecord\StructType\Inclusions $inclusions = null, ?string $approximateBase = null, ?string $approximateTax = null, ?string $approximateTotal = null, ?string $approximateSurcharge = null, ?bool $rateGuaranteed = null, ?bool $approximateRateGuaranteed = null, ?int $rateCategory = null, ?string $key = null, ?string $rateSupplier = null, ?int $bookableQuantity = null, ?string $rateOfferId = null, ?bool $inPolicy = null, ?string $rateChangeIndicator = null, ?string $extraFeesIncluded = null, ?string $base = null, ?string $tax = null, ?string $total = null, ?string $surcharge = null)
    {
        $this
            ->setRatePlanType($ratePlanType)
            ->setPolicyCodesList($policyCodesList)
            ->setRoomRateDescription($roomRateDescription)
            ->setHotelRateByDate($hotelRateByDate)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setAcceptedPayment($acceptedPayment)
            ->setCommission($commission)
            ->setRateMatchIndicator($rateMatchIndicator)
            ->setTaxDetails($taxDetails)
            ->setCancelInfo($cancelInfo)
            ->setGuaranteeInfo($guaranteeInfo)
            ->setSupplementalRateInfo($supplementalRateInfo)
            ->setRoomCapacity($roomCapacity)
            ->setExtraCharges($extraCharges)
            ->setInclusions($inclusions)
            ->setApproximateBase($approximateBase)
            ->setApproximateTax($approximateTax)
            ->setApproximateTotal($approximateTotal)
            ->setApproximateSurcharge($approximateSurcharge)
            ->setRateGuaranteed($rateGuaranteed)
            ->setApproximateRateGuaranteed($approximateRateGuaranteed)
            ->setRateCategory($rateCategory)
            ->setKey($key)
            ->setRateSupplier($rateSupplier)
            ->setBookableQuantity($bookableQuantity)
            ->setRateOfferId($rateOfferId)
            ->setInPolicy($inPolicy)
            ->setRateChangeIndicator($rateChangeIndicator)
            ->setExtraFeesIncluded($extraFeesIncluded)
            ->setBase($base)
            ->setTax($tax)
            ->setTotal($total)
            ->setSurcharge($surcharge);
    }
    /**
     * Get RatePlanType value
     * @return string
     */
    public function getRatePlanType(): string
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRatePlanType(string $ratePlanType): self
    {
        $this->RatePlanType = $ratePlanType;
        
        return $this;
    }
    /**
     * Get PolicyCodesList value
     * @return \Travelport\UniversalRecord\StructType\TypePolicyCodesList|null
     */
    public function getPolicyCodesList(): ?\Travelport\UniversalRecord\StructType\TypePolicyCodesList
    {
        return $this->PolicyCodesList;
    }
    /**
     * Set PolicyCodesList value
     * @param \Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setPolicyCodesList(?\Travelport\UniversalRecord\StructType\TypePolicyCodesList $policyCodesList = null): self
    {
        $this->PolicyCodesList = $policyCodesList;
        
        return $this;
    }
    /**
     * Get RoomRateDescription value
     * @return \Travelport\UniversalRecord\StructType\TypeHotelRateDescription[]
     */
    public function getRoomRateDescription(): ?array
    {
        return $this->RoomRateDescription;
    }
    /**
     * Set RoomRateDescription value
     * @param \Travelport\UniversalRecord\StructType\TypeHotelRateDescription[] $roomRateDescription
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRoomRateDescription(?array $roomRateDescription = null): self
    {
        $this->RoomRateDescription = $roomRateDescription;
        
        return $this;
    }
    /**
     * Add item to RoomRateDescription value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeHotelRateDescription $item
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function addToRoomRateDescription(\Travelport\UniversalRecord\StructType\TypeHotelRateDescription $item): self
    {
        $this->RoomRateDescription[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateByDate value
     * @return \Travelport\UniversalRecord\StructType\HotelRateByDate[]
     */
    public function getHotelRateByDate(): ?array
    {
        return $this->HotelRateByDate;
    }
    /**
     * Set HotelRateByDate value
     * @param \Travelport\UniversalRecord\StructType\HotelRateByDate[] $hotelRateByDate
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setHotelRateByDate(?array $hotelRateByDate = null): self
    {
        $this->HotelRateByDate = $hotelRateByDate;
        
        return $this;
    }
    /**
     * Add item to HotelRateByDate value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelRateByDate $item
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function addToHotelRateByDate(\Travelport\UniversalRecord\StructType\HotelRateByDate $item): self
    {
        $this->HotelRateByDate[] = $item;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID $item
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function addToCorporateDiscountID(\Travelport\UniversalRecord\StructType\CorporateDiscountID $item): self
    {
        $this->CorporateDiscountID[] = $item;
        
        return $this;
    }
    /**
     * Get AcceptedPayment value
     * @return \Travelport\UniversalRecord\StructType\AcceptedPayment[]
     */
    public function getAcceptedPayment(): ?array
    {
        return $this->AcceptedPayment;
    }
    /**
     * Set AcceptedPayment value
     * @param \Travelport\UniversalRecord\StructType\AcceptedPayment[] $acceptedPayment
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setAcceptedPayment(?array $acceptedPayment = null): self
    {
        $this->AcceptedPayment = $acceptedPayment;
        
        return $this;
    }
    /**
     * Add item to AcceptedPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AcceptedPayment $item
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function addToAcceptedPayment(\Travelport\UniversalRecord\StructType\AcceptedPayment $item): self
    {
        $this->AcceptedPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\UniversalRecord\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\UniversalRecord\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setCommission(?\Travelport\UniversalRecord\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get RateMatchIndicator value
     * @return \Travelport\UniversalRecord\StructType\RateMatchIndicator[]
     */
    public function getRateMatchIndicator(): ?array
    {
        return $this->RateMatchIndicator;
    }
    /**
     * Set RateMatchIndicator value
     * @param \Travelport\UniversalRecord\StructType\RateMatchIndicator[] $rateMatchIndicator
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRateMatchIndicator(?array $rateMatchIndicator = null): self
    {
        $this->RateMatchIndicator = $rateMatchIndicator;
        
        return $this;
    }
    /**
     * Add item to RateMatchIndicator value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RateMatchIndicator $item
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function addToRateMatchIndicator(\Travelport\UniversalRecord\StructType\RateMatchIndicator $item): self
    {
        $this->RateMatchIndicator[] = $item;
        
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \Travelport\UniversalRecord\StructType\TaxDetails|null
     */
    public function getTaxDetails(): ?\Travelport\UniversalRecord\StructType\TaxDetails
    {
        return $this->TaxDetails;
    }
    /**
     * Set TaxDetails value
     * @param \Travelport\UniversalRecord\StructType\TaxDetails $taxDetails
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setTaxDetails(?\Travelport\UniversalRecord\StructType\TaxDetails $taxDetails = null): self
    {
        $this->TaxDetails = $taxDetails;
        
        return $this;
    }
    /**
     * Get CancelInfo value
     * @return \Travelport\UniversalRecord\StructType\CancelInfo|null
     */
    public function getCancelInfo(): ?\Travelport\UniversalRecord\StructType\CancelInfo
    {
        return $this->CancelInfo;
    }
    /**
     * Set CancelInfo value
     * @param \Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setCancelInfo(?\Travelport\UniversalRecord\StructType\CancelInfo $cancelInfo = null): self
    {
        $this->CancelInfo = $cancelInfo;
        
        return $this;
    }
    /**
     * Get GuaranteeInfo value
     * @return \Travelport\UniversalRecord\StructType\GuaranteeInfo|null
     */
    public function getGuaranteeInfo(): ?\Travelport\UniversalRecord\StructType\GuaranteeInfo
    {
        return $this->GuaranteeInfo;
    }
    /**
     * Set GuaranteeInfo value
     * @param \Travelport\UniversalRecord\StructType\GuaranteeInfo $guaranteeInfo
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setGuaranteeInfo(?\Travelport\UniversalRecord\StructType\GuaranteeInfo $guaranteeInfo = null): self
    {
        $this->GuaranteeInfo = $guaranteeInfo;
        
        return $this;
    }
    /**
     * Get SupplementalRateInfo value
     * @return string|null
     */
    public function getSupplementalRateInfo(): ?string
    {
        return $this->SupplementalRateInfo;
    }
    /**
     * Set SupplementalRateInfo value
     * @param string $supplementalRateInfo
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setSupplementalRateInfo(?string $supplementalRateInfo = null): self
    {
        $this->SupplementalRateInfo = $supplementalRateInfo;
        
        return $this;
    }
    /**
     * Get RoomCapacity value
     * @return \Travelport\UniversalRecord\StructType\RoomCapacity|null
     */
    public function getRoomCapacity(): ?\Travelport\UniversalRecord\StructType\RoomCapacity
    {
        return $this->RoomCapacity;
    }
    /**
     * Set RoomCapacity value
     * @param \Travelport\UniversalRecord\StructType\RoomCapacity $roomCapacity
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRoomCapacity(?\Travelport\UniversalRecord\StructType\RoomCapacity $roomCapacity = null): self
    {
        $this->RoomCapacity = $roomCapacity;
        
        return $this;
    }
    /**
     * Get ExtraCharges value
     * @return \Travelport\UniversalRecord\StructType\ExtraCharges|null
     */
    public function getExtraCharges(): ?\Travelport\UniversalRecord\StructType\ExtraCharges
    {
        return $this->ExtraCharges;
    }
    /**
     * Set ExtraCharges value
     * @param \Travelport\UniversalRecord\StructType\ExtraCharges $extraCharges
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setExtraCharges(?\Travelport\UniversalRecord\StructType\ExtraCharges $extraCharges = null): self
    {
        $this->ExtraCharges = $extraCharges;
        
        return $this;
    }
    /**
     * Get Inclusions value
     * @return \Travelport\UniversalRecord\StructType\Inclusions|null
     */
    public function getInclusions(): ?\Travelport\UniversalRecord\StructType\Inclusions
    {
        return $this->Inclusions;
    }
    /**
     * Set Inclusions value
     * @param \Travelport\UniversalRecord\StructType\Inclusions $inclusions
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setInclusions(?\Travelport\UniversalRecord\StructType\Inclusions $inclusions = null): self
    {
        $this->Inclusions = $inclusions;
        
        return $this;
    }
    /**
     * Get ApproximateBase value
     * @return string|null
     */
    public function getApproximateBase(): ?string
    {
        return $this->ApproximateBase;
    }
    /**
     * Set ApproximateBase value
     * @param string $approximateBase
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setApproximateBase(?string $approximateBase = null): self
    {
        $this->ApproximateBase = $approximateBase;
        
        return $this;
    }
    /**
     * Get ApproximateTax value
     * @return string|null
     */
    public function getApproximateTax(): ?string
    {
        return $this->ApproximateTax;
    }
    /**
     * Set ApproximateTax value
     * @param string $approximateTax
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setApproximateTax(?string $approximateTax = null): self
    {
        $this->ApproximateTax = $approximateTax;
        
        return $this;
    }
    /**
     * Get ApproximateTotal value
     * @return string|null
     */
    public function getApproximateTotal(): ?string
    {
        return $this->ApproximateTotal;
    }
    /**
     * Set ApproximateTotal value
     * @param string $approximateTotal
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setApproximateTotal(?string $approximateTotal = null): self
    {
        $this->ApproximateTotal = $approximateTotal;
        
        return $this;
    }
    /**
     * Get ApproximateSurcharge value
     * @return string|null
     */
    public function getApproximateSurcharge(): ?string
    {
        return $this->ApproximateSurcharge;
    }
    /**
     * Set ApproximateSurcharge value
     * @param string $approximateSurcharge
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setApproximateSurcharge(?string $approximateSurcharge = null): self
    {
        $this->ApproximateSurcharge = $approximateSurcharge;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRateGuaranteed(?bool $rateGuaranteed = null): self
    {
        $this->RateGuaranteed = $rateGuaranteed;
        
        return $this;
    }
    /**
     * Get ApproximateRateGuaranteed value
     * @return bool|null
     */
    public function getApproximateRateGuaranteed(): ?bool
    {
        return $this->ApproximateRateGuaranteed;
    }
    /**
     * Set ApproximateRateGuaranteed value
     * @param bool $approximateRateGuaranteed
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setApproximateRateGuaranteed(?bool $approximateRateGuaranteed = null): self
    {
        $this->ApproximateRateGuaranteed = $approximateRateGuaranteed;
        
        return $this;
    }
    /**
     * Get RateCategory value
     * @return int|null
     */
    public function getRateCategory(): ?int
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param int $rateCategory
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRateCategory(?int $rateCategory = null): self
    {
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get RateSupplier value
     * @return string|null
     */
    public function getRateSupplier(): ?string
    {
        return $this->RateSupplier;
    }
    /**
     * Set RateSupplier value
     * @param string $rateSupplier
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRateSupplier(?string $rateSupplier = null): self
    {
        $this->RateSupplier = $rateSupplier;
        
        return $this;
    }
    /**
     * Get BookableQuantity value
     * @return int|null
     */
    public function getBookableQuantity(): ?int
    {
        return $this->BookableQuantity;
    }
    /**
     * Set BookableQuantity value
     * @param int $bookableQuantity
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setBookableQuantity(?int $bookableQuantity = null): self
    {
        $this->BookableQuantity = $bookableQuantity;
        
        return $this;
    }
    /**
     * Get RateOfferId value
     * @return string|null
     */
    public function getRateOfferId(): ?string
    {
        return $this->RateOfferId;
    }
    /**
     * Set RateOfferId value
     * @param string $rateOfferId
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRateOfferId(?string $rateOfferId = null): self
    {
        $this->RateOfferId = $rateOfferId;
        
        return $this;
    }
    /**
     * Get InPolicy value
     * @return bool|null
     */
    public function getInPolicy(): ?bool
    {
        return $this->InPolicy;
    }
    /**
     * Set InPolicy value
     * @param bool $inPolicy
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setInPolicy(?bool $inPolicy = null): self
    {
        $this->InPolicy = $inPolicy;
        
        return $this;
    }
    /**
     * Get RateChangeIndicator value
     * @return string|null
     */
    public function getRateChangeIndicator(): ?string
    {
        return $this->RateChangeIndicator;
    }
    /**
     * Set RateChangeIndicator value
     * @param string $rateChangeIndicator
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setRateChangeIndicator(?string $rateChangeIndicator = null): self
    {
        $this->RateChangeIndicator = $rateChangeIndicator;
        
        return $this;
    }
    /**
     * Get ExtraFeesIncluded value
     * @return string|null
     */
    public function getExtraFeesIncluded(): ?string
    {
        return $this->ExtraFeesIncluded;
    }
    /**
     * Set ExtraFeesIncluded value
     * @param string $extraFeesIncluded
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setExtraFeesIncluded(?string $extraFeesIncluded = null): self
    {
        $this->ExtraFeesIncluded = $extraFeesIncluded;
        
        return $this;
    }
    /**
     * Get Base value
     * @return string|null
     */
    public function getBase(): ?string
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param string $base
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setBase(?string $base = null): self
    {
        $this->Base = $base;
        
        return $this;
    }
    /**
     * Get Tax value
     * @return string|null
     */
    public function getTax(): ?string
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param string $tax
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setTax(?string $tax = null): self
    {
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Get Total value
     * @return string|null
     */
    public function getTotal(): ?string
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setTotal(?string $total = null): self
    {
        $this->Total = $total;
        
        return $this;
    }
    /**
     * Get Surcharge value
     * @return string|null
     */
    public function getSurcharge(): ?string
    {
        return $this->Surcharge;
    }
    /**
     * Set Surcharge value
     * @param string $surcharge
     * @return \Travelport\UniversalRecord\StructType\HotelRateDetail
     */
    public function setSurcharge(?string $surcharge = null): self
    {
        $this->Surcharge = $surcharge;
        
        return $this;
    }
}
