<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $RemarkData = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to Booking Traveler. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $BookingTravelerRef = null;
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
     * The Category
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 14
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * The TypeInGds
     * Meta information extracted from the WSDL
     * - documentation: Defines the GDS Accounting remark types | Only below mentioned values are Supported as typeGdsAccountingRemark Fare Canned Ticket Account Other InvoiceLayout ServiceFee AgentSign TourCode (1P) Endorsement (1P) CorporateTrackingId
     * (1P) ItineraryInvoicePerTraveler (1P) ItineraryInvoicePerSurname (1P) DividerCard (1P) NetFare/VC/CAR (1P) MarketCode (1V) BranchLocationOverride (1V) BookingAgentOverride (1V) SellingAgentOverride (1V) ProductTypeOverride (1V) TicketingAgent (1V)
     * Sort (1V) PurchaseOrder (1V) ItineraryWithFare (1V) ItineraryWithoutFare (1V) ItineraryWithAmount (1V)
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    public ?string $TypeInGds = null;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderReservationInfoRef = null;
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
    public ?string $ProviderCode = null;
    /**
     * The UseProviderNativeMode
     * Meta information extracted from the WSDL
     * - documentation: Will be true when terminal process required, else false
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $UseProviderNativeMode = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setRemarkData(?string $remarkData = null): self
    {
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
     * Set BookingTravelerRef value
     * @param string[] $bookingTravelerRef
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function addToBookingTravelerRef(string $item): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setCategory(?string $category = null): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setTypeInGds(?string $typeInGds = null): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setUseProviderNativeMode(?bool $useProviderNativeMode = false): self
    {
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
     * @param string $elStat
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\Air\StructType\AccountingRemark
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
