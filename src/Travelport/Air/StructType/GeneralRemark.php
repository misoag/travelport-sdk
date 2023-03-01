<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeneralRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: A textual remark container to hold any printable text. (max 512 chars)
 * @subpackage Structs
 */
class GeneralRemark extends AbstractStructBase
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
     * - maxLength: 20
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * The TypeInGds
     * Meta information extracted from the WSDL
     * - documentation: Defines the GDS remark types | Only below mentioned values are Supported as typeGdsRemark Alpha Basic Historical Invoice Itinerary Vendor Confidential FOPComment (Currently this is only used by Worldspan.)
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    public ?string $TypeInGds = null;
    /**
     * The SupplierType
     * Meta information extracted from the WSDL
     * - documentation: The type of product this reservation is relative to
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierType = null;
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
     * The Direction
     * Meta information extracted from the WSDL
     * - documentation: Direction Incoming or Outgoing of the GeneralRemark.
     * - use: optional
     * @var string|null
     */
    public ?string $Direction = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this GeneralRemark was created.
     * - use: optional
     * @var string|null
     */
    public ?string $CreateDate = null;
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
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - type: typeProviderCode
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - type: typeSupplierCode
     * - use: optional
     * @var string|null
     */
    public ?string $SupplierCode = null;
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
     * Constructor method for GeneralRemark
     * @uses GeneralRemark::setRemarkData()
     * @uses GeneralRemark::setBookingTravelerRef()
     * @uses GeneralRemark::setKey()
     * @uses GeneralRemark::setCategory()
     * @uses GeneralRemark::setTypeInGds()
     * @uses GeneralRemark::setSupplierType()
     * @uses GeneralRemark::setProviderReservationInfoRef()
     * @uses GeneralRemark::setDirection()
     * @uses GeneralRemark::setCreateDate()
     * @uses GeneralRemark::setUseProviderNativeMode()
     * @uses GeneralRemark::setProviderCode()
     * @uses GeneralRemark::setSupplierCode()
     * @uses GeneralRemark::setElStat()
     * @uses GeneralRemark::setKeyOverride()
     * @param string $remarkData
     * @param string[] $bookingTravelerRef
     * @param string $key
     * @param string $category
     * @param string $typeInGds
     * @param string $supplierType
     * @param string $providerReservationInfoRef
     * @param string $direction
     * @param string $createDate
     * @param bool $useProviderNativeMode
     * @param string $providerCode
     * @param string $supplierCode
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?string $remarkData = null, ?array $bookingTravelerRef = null, ?string $key = null, ?string $category = null, ?string $typeInGds = null, ?string $supplierType = null, ?string $providerReservationInfoRef = null, ?string $direction = null, ?string $createDate = null, ?bool $useProviderNativeMode = false, ?string $providerCode = null, ?string $supplierCode = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setRemarkData($remarkData)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setKey($key)
            ->setCategory($category)
            ->setTypeInGds($typeInGds)
            ->setSupplierType($supplierType)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setDirection($direction)
            ->setCreateDate($createDate)
            ->setUseProviderNativeMode($useProviderNativeMode)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
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
     * @return \Travelport\Air\StructType\GeneralRemark
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
     * @return \Travelport\Air\StructType\GeneralRemark
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
     * @return \Travelport\Air\StructType\GeneralRemark
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
     * @return \Travelport\Air\StructType\GeneralRemark
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
     * @return \Travelport\Air\StructType\GeneralRemark
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
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setTypeInGds(?string $typeInGds = null): self
    {
        $this->TypeInGds = $typeInGds;
        
        return $this;
    }
    /**
     * Get SupplierType value
     * @return string|null
     */
    public function getSupplierType(): ?string
    {
        return $this->SupplierType;
    }
    /**
     * Set SupplierType value
     * @param string $supplierType
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setSupplierType(?string $supplierType = null): self
    {
        $this->SupplierType = $supplierType;
        
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
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setProviderReservationInfoRef(?string $providerReservationInfoRef = null): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @param string $direction
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setDirection(?string $direction = null): self
    {
        $this->Direction = $direction;
        
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate(): ?string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setCreateDate(?string $createDate = null): self
    {
        $this->CreateDate = $createDate;
        
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
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setUseProviderNativeMode(?bool $useProviderNativeMode = false): self
    {
        $this->UseProviderNativeMode = $useProviderNativeMode;
        
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
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
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
     * @return \Travelport\Air\StructType\GeneralRemark
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
     * @return \Travelport\Air\StructType\GeneralRemark
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
