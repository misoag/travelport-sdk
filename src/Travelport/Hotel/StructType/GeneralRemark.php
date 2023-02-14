<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
     * - maxLength: 20
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The TypeInGds
     * Meta information extracted from the WSDL
     * - documentation: Defines the GDS remark types | Only below mentioned values are Supported as typeGdsRemark Alpha Basic Historical Invoice Itinerary Vendor Confidential FOPComment (Currently this is only used by Worldspan.)
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    protected ?string $TypeInGds = null;
    /**
     * The SupplierType
     * Meta information extracted from the WSDL
     * - documentation: The type of product this reservation is relative to
     * - use: optional
     * @var string|null
     */
    protected ?string $SupplierType = null;
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
     * The Direction
     * Meta information extracted from the WSDL
     * - documentation: Direction Incoming or Outgoing of the GeneralRemark.
     * - use: optional
     * @var string|null
     */
    protected ?string $Direction = null;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this GeneralRemark was created.
     * - use: optional
     * @var string|null
     */
    protected ?string $CreateDate = null;
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
    protected ?string $ProviderCode = null;
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
    protected ?string $SupplierCode = null;
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
        foreach ($values as $generalRemarkBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!is_string($generalRemarkBookingTravelerRefItem)) {
                $invalidValues[] = is_object($generalRemarkBookingTravelerRefItem) ? get_class($generalRemarkBookingTravelerRefItem) : sprintf('%s(%s)', gettype($generalRemarkBookingTravelerRefItem), var_export($generalRemarkBookingTravelerRefItem, true));
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($category) && mb_strlen((string) $category) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $category)), __LINE__);
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * Get SupplierType value
     * @return string|null
     */
    public function getSupplierType(): ?string
    {
        return $this->SupplierType;
    }
    /**
     * Set SupplierType value
     * @uses \Travelport\Hotel\EnumType\TypeProduct::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeProduct::getValidValues()
     * @throws InvalidArgumentException
     * @param string $supplierType
     * @return \Travelport\Hotel\StructType\GeneralRemark
     */
    public function setSupplierType(?string $supplierType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeProduct::valueIsValid($supplierType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeProduct', is_array($supplierType) ? implode(', ', $supplierType) : var_export($supplierType, true), implode(', ', \Travelport\Hotel\EnumType\TypeProduct::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @uses \Travelport\Hotel\EnumType\TypeDirection::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeDirection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $direction
     * @return \Travelport\Hotel\StructType\GeneralRemark
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeDirection::valueIsValid($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeDirection', is_array($direction) ? implode(', ', $direction) : var_export($direction, true), implode(', ', \Travelport\Hotel\EnumType\TypeDirection::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
     */
    public function setCreateDate(?string $createDate = null): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
     * @return \Travelport\Hotel\StructType\GeneralRemark
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
