<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $RatePlanType;
    /**
     * The PolicyCodesList
     * Meta information extracted from the WSDL
     * - documentation: A list of codes that indicate why an item was determined to be ‘out of policy’.
     * - minOccurs: 0
     * @var \StructType\TypePolicyCodesList|null
     */
    protected ?\StructType\TypePolicyCodesList $PolicyCodesList = null;
    /**
     * The RoomRateDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \StructType\TypeHotelRateDescription[]
     */
    protected ?array $RoomRateDescription = null;
    /**
     * The HotelRateByDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: HotelRateByDate
     * @var \StructType\HotelRateByDate[]
     */
    protected ?array $HotelRateByDate = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \StructType\CorporateDiscountID[]
     */
    protected ?array $CorporateDiscountID = null;
    /**
     * The AcceptedPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AcceptedPayment
     * @var \StructType\AcceptedPayment[]
     */
    protected ?array $AcceptedPayment = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Commission
     * @var \StructType\Commission|null
     */
    protected ?\StructType\Commission $Commission = null;
    /**
     * The RateMatchIndicator
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RateMatchIndicator
     * @var \StructType\RateMatchIndicator[]
     */
    protected ?array $RateMatchIndicator = null;
    /**
     * The TaxDetails
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TaxDetails
     * @var \StructType\TaxDetails|null
     */
    protected ?\StructType\TaxDetails $TaxDetails = null;
    /**
     * The CancelInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CancelInfo
     * @var \StructType\CancelInfo|null
     */
    protected ?\StructType\CancelInfo $CancelInfo = null;
    /**
     * The GuaranteeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: GuaranteeInfo
     * @var \StructType\GuaranteeInfo|null
     */
    protected ?\StructType\GuaranteeInfo $GuaranteeInfo = null;
    /**
     * The SupplementalRateInfo
     * Meta information extracted from the WSDL
     * - documentation: Supplemental rate information provided by the aggregator.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SupplementalRateInfo = null;
    /**
     * The RoomCapacity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\RoomCapacity|null
     */
    protected ?\StructType\RoomCapacity $RoomCapacity = null;
    /**
     * The ExtraCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExtraCharges|null
     */
    protected ?\StructType\ExtraCharges $ExtraCharges = null;
    /**
     * The Inclusions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Inclusions|null
     */
    protected ?\StructType\Inclusions $Inclusions = null;
    /**
     * The ApproximateBase
     * Meta information extracted from the WSDL
     * - documentation: Hotel base rate expressed in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateBase = null;
    /**
     * The ApproximateTax
     * Meta information extracted from the WSDL
     * - documentation: Taxes expressed in another currency | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateTax = null;
    /**
     * The ApproximateTotal
     * Meta information extracted from the WSDL
     * - documentation: Hotel total rate expressed in another currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateTotal = null;
    /**
     * The ApproximateSurcharge
     * Meta information extracted from the WSDL
     * - documentation: Surcharge associated with the room expressed in another currency. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ApproximateSurcharge = null;
    /**
     * The RateGuaranteed
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $RateGuaranteed = null;
    /**
     * The ApproximateRateGuaranteed
     * Meta information extracted from the WSDL
     * - documentation: If true, approximate rate is guaranteed by vendor. Supported Providers: 1G,1V
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ApproximateRateGuaranteed = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT). Encode/decode data in Util
     * ReferenceDataRetrieveReq TypeCode=“HotelRateCategory". | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    protected ?int $RateCategory = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The RateSupplier
     * Meta information extracted from the WSDL
     * - documentation: Indicates the source of the rate. | Third Party Content Provider name.
     * - base: xs:string
     * - maxLength: 64
     * - use: optional
     * @var string|null
     */
    protected ?string $RateSupplier = null;
    /**
     * The BookableQuantity
     * Meta information extracted from the WSDL
     * - documentation: The number of rooms which can be booked on the rate returned in HotelRateDetails. When the aggregator responds ‘IsPackage’= true (pricing for all rooms together), the BookableQuantity value will be ‘1’.
     * - use: optional
     * @var int|null
     */
    protected ?int $BookableQuantity = null;
    /**
     * The RateOfferId
     * Meta information extracted from the WSDL
     * - documentation: Offer Identifier. Maybe required for hotels provided by aggregators. | Indicates the supplier of the rate. Maybe required for hotels provided by aggregators.
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RateOfferId = null;
    /**
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to indicate if a fare or rate has been determined to be ‘in policy’ based on the associated policy settings.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InPolicy = null;
    /**
     * The RateChangeIndicator
     * Meta information extracted from the WSDL
     * - documentation: Determines if the rate changes during the length of stay. Enumerated values are true, false, and unknown.
     * - use: optional
     * @var string|null
     */
    protected ?string $RateChangeIndicator = null;
    /**
     * The ExtraFeesIncluded
     * Meta information extracted from the WSDL
     * - documentation: When true, total amounts includes additional fees or charges." Enumerated values are true, false, and unknown
     * - use: optional
     * @var string|null
     */
    protected ?string $ExtraFeesIncluded = null;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to describe the Hotel Supplier Base Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Base = null;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Tax associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Tax = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Hotel Supplier Total Rate | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Total = null;
    /**
     * The Surcharge
     * Meta information extracted from the WSDL
     * - documentation: This attribute used to describe Surcharge associated with the room | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: optional
     * @var string|null
     */
    protected ?string $Surcharge = null;
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
     * @param \StructType\TypePolicyCodesList $policyCodesList
     * @param \StructType\TypeHotelRateDescription[] $roomRateDescription
     * @param \StructType\HotelRateByDate[] $hotelRateByDate
     * @param \StructType\CorporateDiscountID[] $corporateDiscountID
     * @param \StructType\AcceptedPayment[] $acceptedPayment
     * @param \StructType\Commission $commission
     * @param \StructType\RateMatchIndicator[] $rateMatchIndicator
     * @param \StructType\TaxDetails $taxDetails
     * @param \StructType\CancelInfo $cancelInfo
     * @param \StructType\GuaranteeInfo $guaranteeInfo
     * @param string $supplementalRateInfo
     * @param \StructType\RoomCapacity $roomCapacity
     * @param \StructType\ExtraCharges $extraCharges
     * @param \StructType\Inclusions $inclusions
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
    public function __construct(string $ratePlanType, ?\StructType\TypePolicyCodesList $policyCodesList = null, ?array $roomRateDescription = null, ?array $hotelRateByDate = null, ?array $corporateDiscountID = null, ?array $acceptedPayment = null, ?\StructType\Commission $commission = null, ?array $rateMatchIndicator = null, ?\StructType\TaxDetails $taxDetails = null, ?\StructType\CancelInfo $cancelInfo = null, ?\StructType\GuaranteeInfo $guaranteeInfo = null, ?string $supplementalRateInfo = null, ?\StructType\RoomCapacity $roomCapacity = null, ?\StructType\ExtraCharges $extraCharges = null, ?\StructType\Inclusions $inclusions = null, ?string $approximateBase = null, ?string $approximateTax = null, ?string $approximateTotal = null, ?string $approximateSurcharge = null, ?bool $rateGuaranteed = null, ?bool $approximateRateGuaranteed = null, ?int $rateCategory = null, ?string $key = null, ?string $rateSupplier = null, ?int $bookableQuantity = null, ?string $rateOfferId = null, ?bool $inPolicy = null, ?string $rateChangeIndicator = null, ?string $extraFeesIncluded = null, ?string $base = null, ?string $tax = null, ?string $total = null, ?string $surcharge = null)
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
     * @return \StructType\HotelRateDetail
     */
    public function setRatePlanType(string $ratePlanType): self
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratePlanType, true), gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        
        return $this;
    }
    /**
     * Get PolicyCodesList value
     * @return \StructType\TypePolicyCodesList|null
     */
    public function getPolicyCodesList(): ?\StructType\TypePolicyCodesList
    {
        return $this->PolicyCodesList;
    }
    /**
     * Set PolicyCodesList value
     * @param \StructType\TypePolicyCodesList $policyCodesList
     * @return \StructType\HotelRateDetail
     */
    public function setPolicyCodesList(?\StructType\TypePolicyCodesList $policyCodesList = null): self
    {
        $this->PolicyCodesList = $policyCodesList;
        
        return $this;
    }
    /**
     * Get RoomRateDescription value
     * @return \StructType\TypeHotelRateDescription[]
     */
    public function getRoomRateDescription(): ?array
    {
        return $this->RoomRateDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setRoomRateDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRoomRateDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRoomRateDescriptionForArrayConstraintsFromSetRoomRateDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRateDetailRoomRateDescriptionItem) {
            // validation for constraint: itemType
            if (!$hotelRateDetailRoomRateDescriptionItem instanceof \StructType\TypeHotelRateDescription) {
                $invalidValues[] = is_object($hotelRateDetailRoomRateDescriptionItem) ? get_class($hotelRateDetailRoomRateDescriptionItem) : sprintf('%s(%s)', gettype($hotelRateDetailRoomRateDescriptionItem), var_export($hotelRateDetailRoomRateDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RoomRateDescription property can only contain items of type \StructType\TypeHotelRateDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RoomRateDescription value
     * @throws InvalidArgumentException
     * @param \StructType\TypeHotelRateDescription[] $roomRateDescription
     * @return \StructType\HotelRateDetail
     */
    public function setRoomRateDescription(?array $roomRateDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($roomRateDescriptionArrayErrorMessage = self::validateRoomRateDescriptionForArrayConstraintsFromSetRoomRateDescription($roomRateDescription))) {
            throw new InvalidArgumentException($roomRateDescriptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($roomRateDescription) && count($roomRateDescription) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($roomRateDescription)), __LINE__);
        }
        $this->RoomRateDescription = $roomRateDescription;
        
        return $this;
    }
    /**
     * Add item to RoomRateDescription value
     * @throws InvalidArgumentException
     * @param \StructType\TypeHotelRateDescription $item
     * @return \StructType\HotelRateDetail
     */
    public function addToRoomRateDescription(\StructType\TypeHotelRateDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TypeHotelRateDescription) {
            throw new InvalidArgumentException(sprintf('The RoomRateDescription property can only contain items of type \StructType\TypeHotelRateDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RoomRateDescription) && count($this->RoomRateDescription) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RoomRateDescription)), __LINE__);
        }
        $this->RoomRateDescription[] = $item;
        
        return $this;
    }
    /**
     * Get HotelRateByDate value
     * @return \StructType\HotelRateByDate[]
     */
    public function getHotelRateByDate(): ?array
    {
        return $this->HotelRateByDate;
    }
    /**
     * This method is responsible for validating the values passed to the setHotelRateByDate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelRateByDate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelRateByDateForArrayConstraintsFromSetHotelRateByDate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRateDetailHotelRateByDateItem) {
            // validation for constraint: itemType
            if (!$hotelRateDetailHotelRateByDateItem instanceof \StructType\HotelRateByDate) {
                $invalidValues[] = is_object($hotelRateDetailHotelRateByDateItem) ? get_class($hotelRateDetailHotelRateByDateItem) : sprintf('%s(%s)', gettype($hotelRateDetailHotelRateByDateItem), var_export($hotelRateDetailHotelRateByDateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelRateByDate property can only contain items of type \StructType\HotelRateByDate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelRateByDate value
     * @throws InvalidArgumentException
     * @param \StructType\HotelRateByDate[] $hotelRateByDate
     * @return \StructType\HotelRateDetail
     */
    public function setHotelRateByDate(?array $hotelRateByDate = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelRateByDateArrayErrorMessage = self::validateHotelRateByDateForArrayConstraintsFromSetHotelRateByDate($hotelRateByDate))) {
            throw new InvalidArgumentException($hotelRateByDateArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelRateByDate) && count($hotelRateByDate) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelRateByDate)), __LINE__);
        }
        $this->HotelRateByDate = $hotelRateByDate;
        
        return $this;
    }
    /**
     * Add item to HotelRateByDate value
     * @throws InvalidArgumentException
     * @param \StructType\HotelRateByDate $item
     * @return \StructType\HotelRateDetail
     */
    public function addToHotelRateByDate(\StructType\HotelRateByDate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelRateByDate) {
            throw new InvalidArgumentException(sprintf('The HotelRateByDate property can only contain items of type \StructType\HotelRateByDate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelRateByDate) && count($this->HotelRateByDate) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelRateByDate)), __LINE__);
        }
        $this->HotelRateByDate[] = $item;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * This method is responsible for validating the values passed to the setCorporateDiscountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorporateDiscountID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRateDetailCorporateDiscountIDItem) {
            // validation for constraint: itemType
            if (!$hotelRateDetailCorporateDiscountIDItem instanceof \StructType\CorporateDiscountID) {
                $invalidValues[] = is_object($hotelRateDetailCorporateDiscountIDItem) ? get_class($hotelRateDetailCorporateDiscountIDItem) : sprintf('%s(%s)', gettype($hotelRateDetailCorporateDiscountIDItem), var_export($hotelRateDetailCorporateDiscountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CorporateDiscountID property can only contain items of type \StructType\CorporateDiscountID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \StructType\HotelRateDetail
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($corporateDiscountIDArrayErrorMessage = self::validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID($corporateDiscountID))) {
            throw new InvalidArgumentException($corporateDiscountIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($corporateDiscountID) && count($corporateDiscountID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($corporateDiscountID)), __LINE__);
        }
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \StructType\CorporateDiscountID $item
     * @return \StructType\HotelRateDetail
     */
    public function addToCorporateDiscountID(\StructType\CorporateDiscountID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CorporateDiscountID) {
            throw new InvalidArgumentException(sprintf('The CorporateDiscountID property can only contain items of type \StructType\CorporateDiscountID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CorporateDiscountID) && count($this->CorporateDiscountID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CorporateDiscountID)), __LINE__);
        }
        $this->CorporateDiscountID[] = $item;
        
        return $this;
    }
    /**
     * Get AcceptedPayment value
     * @return \StructType\AcceptedPayment[]
     */
    public function getAcceptedPayment(): ?array
    {
        return $this->AcceptedPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setAcceptedPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcceptedPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcceptedPaymentForArrayConstraintsFromSetAcceptedPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRateDetailAcceptedPaymentItem) {
            // validation for constraint: itemType
            if (!$hotelRateDetailAcceptedPaymentItem instanceof \StructType\AcceptedPayment) {
                $invalidValues[] = is_object($hotelRateDetailAcceptedPaymentItem) ? get_class($hotelRateDetailAcceptedPaymentItem) : sprintf('%s(%s)', gettype($hotelRateDetailAcceptedPaymentItem), var_export($hotelRateDetailAcceptedPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcceptedPayment property can only contain items of type \StructType\AcceptedPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcceptedPayment value
     * @throws InvalidArgumentException
     * @param \StructType\AcceptedPayment[] $acceptedPayment
     * @return \StructType\HotelRateDetail
     */
    public function setAcceptedPayment(?array $acceptedPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($acceptedPaymentArrayErrorMessage = self::validateAcceptedPaymentForArrayConstraintsFromSetAcceptedPayment($acceptedPayment))) {
            throw new InvalidArgumentException($acceptedPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($acceptedPayment) && count($acceptedPayment) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($acceptedPayment)), __LINE__);
        }
        $this->AcceptedPayment = $acceptedPayment;
        
        return $this;
    }
    /**
     * Add item to AcceptedPayment value
     * @throws InvalidArgumentException
     * @param \StructType\AcceptedPayment $item
     * @return \StructType\HotelRateDetail
     */
    public function addToAcceptedPayment(\StructType\AcceptedPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcceptedPayment) {
            throw new InvalidArgumentException(sprintf('The AcceptedPayment property can only contain items of type \StructType\AcceptedPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AcceptedPayment) && count($this->AcceptedPayment) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AcceptedPayment)), __LINE__);
        }
        $this->AcceptedPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \StructType\Commission|null
     */
    public function getCommission(): ?\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \StructType\Commission $commission
     * @return \StructType\HotelRateDetail
     */
    public function setCommission(?\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get RateMatchIndicator value
     * @return \StructType\RateMatchIndicator[]
     */
    public function getRateMatchIndicator(): ?array
    {
        return $this->RateMatchIndicator;
    }
    /**
     * This method is responsible for validating the values passed to the setRateMatchIndicator method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRateMatchIndicator method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRateMatchIndicatorForArrayConstraintsFromSetRateMatchIndicator(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelRateDetailRateMatchIndicatorItem) {
            // validation for constraint: itemType
            if (!$hotelRateDetailRateMatchIndicatorItem instanceof \StructType\RateMatchIndicator) {
                $invalidValues[] = is_object($hotelRateDetailRateMatchIndicatorItem) ? get_class($hotelRateDetailRateMatchIndicatorItem) : sprintf('%s(%s)', gettype($hotelRateDetailRateMatchIndicatorItem), var_export($hotelRateDetailRateMatchIndicatorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RateMatchIndicator property can only contain items of type \StructType\RateMatchIndicator, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RateMatchIndicator value
     * @throws InvalidArgumentException
     * @param \StructType\RateMatchIndicator[] $rateMatchIndicator
     * @return \StructType\HotelRateDetail
     */
    public function setRateMatchIndicator(?array $rateMatchIndicator = null): self
    {
        // validation for constraint: array
        if ('' !== ($rateMatchIndicatorArrayErrorMessage = self::validateRateMatchIndicatorForArrayConstraintsFromSetRateMatchIndicator($rateMatchIndicator))) {
            throw new InvalidArgumentException($rateMatchIndicatorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($rateMatchIndicator) && count($rateMatchIndicator) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($rateMatchIndicator)), __LINE__);
        }
        $this->RateMatchIndicator = $rateMatchIndicator;
        
        return $this;
    }
    /**
     * Add item to RateMatchIndicator value
     * @throws InvalidArgumentException
     * @param \StructType\RateMatchIndicator $item
     * @return \StructType\HotelRateDetail
     */
    public function addToRateMatchIndicator(\StructType\RateMatchIndicator $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RateMatchIndicator) {
            throw new InvalidArgumentException(sprintf('The RateMatchIndicator property can only contain items of type \StructType\RateMatchIndicator, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RateMatchIndicator) && count($this->RateMatchIndicator) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RateMatchIndicator)), __LINE__);
        }
        $this->RateMatchIndicator[] = $item;
        
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \StructType\TaxDetails|null
     */
    public function getTaxDetails(): ?\StructType\TaxDetails
    {
        return $this->TaxDetails;
    }
    /**
     * Set TaxDetails value
     * @param \StructType\TaxDetails $taxDetails
     * @return \StructType\HotelRateDetail
     */
    public function setTaxDetails(?\StructType\TaxDetails $taxDetails = null): self
    {
        $this->TaxDetails = $taxDetails;
        
        return $this;
    }
    /**
     * Get CancelInfo value
     * @return \StructType\CancelInfo|null
     */
    public function getCancelInfo(): ?\StructType\CancelInfo
    {
        return $this->CancelInfo;
    }
    /**
     * Set CancelInfo value
     * @param \StructType\CancelInfo $cancelInfo
     * @return \StructType\HotelRateDetail
     */
    public function setCancelInfo(?\StructType\CancelInfo $cancelInfo = null): self
    {
        $this->CancelInfo = $cancelInfo;
        
        return $this;
    }
    /**
     * Get GuaranteeInfo value
     * @return \StructType\GuaranteeInfo|null
     */
    public function getGuaranteeInfo(): ?\StructType\GuaranteeInfo
    {
        return $this->GuaranteeInfo;
    }
    /**
     * Set GuaranteeInfo value
     * @param \StructType\GuaranteeInfo $guaranteeInfo
     * @return \StructType\HotelRateDetail
     */
    public function setGuaranteeInfo(?\StructType\GuaranteeInfo $guaranteeInfo = null): self
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
     * @return \StructType\HotelRateDetail
     */
    public function setSupplementalRateInfo(?string $supplementalRateInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($supplementalRateInfo) && !is_string($supplementalRateInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplementalRateInfo, true), gettype($supplementalRateInfo)), __LINE__);
        }
        $this->SupplementalRateInfo = $supplementalRateInfo;
        
        return $this;
    }
    /**
     * Get RoomCapacity value
     * @return \StructType\RoomCapacity|null
     */
    public function getRoomCapacity(): ?\StructType\RoomCapacity
    {
        return $this->RoomCapacity;
    }
    /**
     * Set RoomCapacity value
     * @param \StructType\RoomCapacity $roomCapacity
     * @return \StructType\HotelRateDetail
     */
    public function setRoomCapacity(?\StructType\RoomCapacity $roomCapacity = null): self
    {
        $this->RoomCapacity = $roomCapacity;
        
        return $this;
    }
    /**
     * Get ExtraCharges value
     * @return \StructType\ExtraCharges|null
     */
    public function getExtraCharges(): ?\StructType\ExtraCharges
    {
        return $this->ExtraCharges;
    }
    /**
     * Set ExtraCharges value
     * @param \StructType\ExtraCharges $extraCharges
     * @return \StructType\HotelRateDetail
     */
    public function setExtraCharges(?\StructType\ExtraCharges $extraCharges = null): self
    {
        $this->ExtraCharges = $extraCharges;
        
        return $this;
    }
    /**
     * Get Inclusions value
     * @return \StructType\Inclusions|null
     */
    public function getInclusions(): ?\StructType\Inclusions
    {
        return $this->Inclusions;
    }
    /**
     * Set Inclusions value
     * @param \StructType\Inclusions $inclusions
     * @return \StructType\HotelRateDetail
     */
    public function setInclusions(?\StructType\Inclusions $inclusions = null): self
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
     * @return \StructType\HotelRateDetail
     */
    public function setApproximateBase(?string $approximateBase = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBase) && !is_string($approximateBase)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBase, true), gettype($approximateBase)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setApproximateTax(?string $approximateTax = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTax) && !is_string($approximateTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTax, true), gettype($approximateTax)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setApproximateTotal(?string $approximateTotal = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotal) && !is_string($approximateTotal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotal, true), gettype($approximateTotal)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setApproximateSurcharge(?string $approximateSurcharge = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateSurcharge) && !is_string($approximateSurcharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateSurcharge, true), gettype($approximateSurcharge)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setRateGuaranteed(?bool $rateGuaranteed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($rateGuaranteed) && !is_bool($rateGuaranteed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rateGuaranteed, true), gettype($rateGuaranteed)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setApproximateRateGuaranteed(?bool $approximateRateGuaranteed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($approximateRateGuaranteed) && !is_bool($approximateRateGuaranteed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($approximateRateGuaranteed, true), gettype($approximateRateGuaranteed)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setRateCategory(?int $rateCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($rateCategory) && !(is_int($rateCategory) || ctype_digit($rateCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rateCategory, true), gettype($rateCategory)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setRateSupplier(?string $rateSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($rateSupplier) && !is_string($rateSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateSupplier, true), gettype($rateSupplier)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($rateSupplier) && mb_strlen((string) $rateSupplier) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $rateSupplier)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setBookableQuantity(?int $bookableQuantity = null): self
    {
        // validation for constraint: int
        if (!is_null($bookableQuantity) && !(is_int($bookableQuantity) || ctype_digit($bookableQuantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookableQuantity, true), gettype($bookableQuantity)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setRateOfferId(?string $rateOfferId = null): self
    {
        // validation for constraint: string
        if (!is_null($rateOfferId) && !is_string($rateOfferId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rateOfferId, true), gettype($rateOfferId)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setInPolicy(?bool $inPolicy = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inPolicy) && !is_bool($inPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPolicy, true), gettype($inPolicy)), __LINE__);
        }
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
     * @uses \EnumType\TypeTrinary::valueIsValid()
     * @uses \EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateChangeIndicator
     * @return \StructType\HotelRateDetail
     */
    public function setRateChangeIndicator(?string $rateChangeIndicator = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeTrinary::valueIsValid($rateChangeIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeTrinary', is_array($rateChangeIndicator) ? implode(', ', $rateChangeIndicator) : var_export($rateChangeIndicator, true), implode(', ', \EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
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
     * @uses \EnumType\TypeTrinary::valueIsValid()
     * @uses \EnumType\TypeTrinary::getValidValues()
     * @throws InvalidArgumentException
     * @param string $extraFeesIncluded
     * @return \StructType\HotelRateDetail
     */
    public function setExtraFeesIncluded(?string $extraFeesIncluded = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeTrinary::valueIsValid($extraFeesIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeTrinary', is_array($extraFeesIncluded) ? implode(', ', $extraFeesIncluded) : var_export($extraFeesIncluded, true), implode(', ', \EnumType\TypeTrinary::getValidValues())), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setBase(?string $base = null): self
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setTax(?string $tax = null): self
    {
        // validation for constraint: string
        if (!is_null($tax) && !is_string($tax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setTotal(?string $total = null): self
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
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
     * @return \StructType\HotelRateDetail
     */
    public function setSurcharge(?string $surcharge = null): self
    {
        // validation for constraint: string
        if (!is_null($surcharge) && !is_string($surcharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($surcharge, true), gettype($surcharge)), __LINE__);
        }
        $this->Surcharge = $surcharge;
        
        return $this;
    }
}
