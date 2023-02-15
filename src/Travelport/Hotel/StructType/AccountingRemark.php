<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountingRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: An accounting remark container to hold any printable text.
 * @subpackage Structs
 */
class AccountingRemark extends AbstractStructBase
{
    /**
     * The RemarkData
     * Meta information extracted from the WSDL
     * - documentation: Actual remarks data.
     * @var string|null
     */
    protected ?string $RemarkData = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $BookingTravelerRef = null;
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
     * The Category
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 14
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The TypeInGds
     * Meta information extracted from the WSDL
     * - documentation: Defines the GDS Accounting remark types | Only below mentioned values are Supported as typeGdsAccountingRemark Fare Canned Ticket Account Other InvoiceLayout ServiceFee AgentSign TourCode (1P) Endorsement (1P) CorporateTrackingId
     * (1P) ItineraryInvoicePerTraveler (1P) ItineraryInvoicePerSurname (1P) DividerCard (1P) NetFare/VC/CAR (1P/1J) MarketCode (1V) BranchLocationOverride (1V) BookingAgentOverride (1V) SellingAgentOverride (1V) ProductTypeOverride (1V) TicketingAgent (1V)
     * Sort (1V) PurchaseOrder (1V) ItineraryWithFare (1V) ItineraryWithoutFare (1V) ItineraryWithAmount (1V)
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    protected ?string $TypeInGds = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderReservationInfoRef = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider for which this accounting remark is used | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The UseProviderNativeMode
     * Meta information extracted from the WSDL
     * - documentation: Will be true when terminal process required, else false
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $UseProviderNativeMode = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for AccountingRemark
     * @uses AccountingRemark::setRemarkData()
     * @uses AccountingRemark::setBookingTravelerRef()
     * @uses AccountingRemark::setKey()
     * @uses AccountingRemark::setCategory()
     * @uses AccountingRemark::setTypeInGds()
     * @uses AccountingRemark::setProviderReservationInfoRef()
     * @uses AccountingRemark::setProviderCode()
     * @uses AccountingRemark::setUseProviderNativeMode()
     * @uses AccountingRemark::setElStat()
     * @uses AccountingRemark::setKeyOverride()
     * @param string $remarkData
     * @param string[] $bookingTravelerRef
     * @param string $key
     * @param string $category
     * @param string $typeInGds
     * @param string $providerReservationInfoRef
     * @param string $providerCode
     * @param bool $useProviderNativeMode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $remarkData = null, ?array $bookingTravelerRef = null, ?string $key = null, ?string $category = null, ?string $typeInGds = null, ?string $providerReservationInfoRef = null, ?string $providerCode = null, ?bool $useProviderNativeMode = false, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setRemarkData($remarkData)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setKey($key)
            ->setCategory($category)
            ->setTypeInGds($typeInGds)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setProviderCode($providerCode)
            ->setUseProviderNativeMode($useProviderNativeMode)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get RemarkData value
     * @return string|null
     */
    public function getRemarkData(): ?string
    {
        return $this->RemarkData;
    }
    /**
     * Set RemarkData value
     * @param string $remarkData
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setRemarkData(?string $remarkData = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkData) && !is_string($remarkData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkData, true), gettype($remarkData)), __LINE__);
        }
        $this->RemarkData = $remarkData;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $accountingRemarkBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!is_string($accountingRemarkBookingTravelerRefItem)) {
                $invalidValues[] = is_object($accountingRemarkBookingTravelerRefItem) ? get_class($accountingRemarkBookingTravelerRefItem) : sprintf('%s(%s)', gettype($accountingRemarkBookingTravelerRefItem), var_export($accountingRemarkBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string[] $bookingTravelerRef
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function addToBookingTravelerRef(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
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
     * @return \Travelport\Hotel\StructType\AccountingRemark
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
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxLength(14)
        if (!is_null($category) && mb_strlen((string) $category) > 14) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 14', mb_strlen((string) $category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get TypeInGds value
     * @return string|null
     */
    public function getTypeInGds(): ?string
    {
        return $this->TypeInGds;
    }
    /**
     * Set TypeInGds value
     * @param string $typeInGds
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setTypeInGds(?string $typeInGds = null): self
    {
        // validation for constraint: string
        if (!is_null($typeInGds) && !is_string($typeInGds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeInGds, true), gettype($typeInGds)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($typeInGds) && mb_strlen((string) $typeInGds) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $typeInGds)), __LINE__);
        }
        $this->TypeInGds = $typeInGds;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string|null
     */
    public function getProviderReservationInfoRef(): ?string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get UseProviderNativeMode value
     * @return bool|null
     */
    public function getUseProviderNativeMode(): ?bool
    {
        return $this->UseProviderNativeMode;
    }
    /**
     * Set UseProviderNativeMode value
     * @param bool $useProviderNativeMode
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setUseProviderNativeMode(?bool $useProviderNativeMode = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useProviderNativeMode) && !is_bool($useProviderNativeMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useProviderNativeMode, true), gettype($useProviderNativeMode)), __LINE__);
        }
        $this->UseProviderNativeMode = $useProviderNativeMode;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Hotel\StructType\AccountingRemark
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
