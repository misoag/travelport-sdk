<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTraveler StructType
 * Meta information extracted from the WSDL
 * - documentation: A traveler and all their accompanying data.
 * @subpackage Structs
 */
class BookingTraveler extends AbstractStructBase
{
    /**
     * The BookingTravelerName
     * @var \Travelport\Util\StructType\BookingTravelerName|null
     */
    protected ?\Travelport\Util\StructType\BookingTravelerName $BookingTravelerName = null;
    /**
     * The DeliveryInfo
     * @var \Travelport\Util\StructType\DeliveryInfo|null
     */
    protected ?\Travelport\Util\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The PhoneNumber
     * @var \Travelport\Util\StructType\PhoneNumber|null
     */
    protected ?\Travelport\Util\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Email
     * @var \Travelport\Util\StructType\Email|null
     */
    protected ?\Travelport\Util\StructType\Email $Email = null;
    /**
     * The LoyaltyCard
     * @var \Travelport\Util\StructType\LoyaltyCard|null
     */
    protected ?\Travelport\Util\StructType\LoyaltyCard $LoyaltyCard = null;
    /**
     * The DiscountCard
     * @var \Travelport\Util\StructType\DiscountCard|null
     */
    protected ?\Travelport\Util\StructType\DiscountCard $DiscountCard = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SSR
     * @var \Travelport\Util\StructType\SSR[]
     */
    protected ?array $SSR = null;
    /**
     * The NameRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: NameRemark
     * @var \Travelport\Util\StructType\NameRemark[]
     */
    protected ?array $NameRemark = null;
    /**
     * The AirSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSeatAssignment
     * @var \Travelport\Util\StructType\AirSeatAssignment[]
     */
    protected ?array $AirSeatAssignment = null;
    /**
     * The RailSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailSeatAssignment
     * @var \Travelport\Util\StructType\RailSeatAssignment[]
     */
    protected ?array $RailSeatAssignment = null;
    /**
     * The EmergencyInfo
     * @var string|null
     */
    protected ?string $EmergencyInfo = null;
    /**
     * The Address
     * @var \Travelport\Util\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\Util\StructType\TypeStructuredAddress $Address = null;
    /**
     * The DriversLicense
     * @var \Travelport\Util\StructType\DriversLicense|null
     */
    protected ?\Travelport\Util\StructType\DriversLicense $DriversLicense = null;
    /**
     * The AppliedProfile
     * @var \Travelport\Util\StructType\AppliedProfile|null
     */
    protected ?\Travelport\Util\StructType\AppliedProfile $AppliedProfile = null;
    /**
     * The CustomizedNameData
     * @var \Travelport\Util\StructType\CustomizedNameData|null
     */
    protected ?\Travelport\Util\StructType\CustomizedNameData $CustomizedNameData = null;
    /**
     * The TravelComplianceData
     * @var \Travelport\Util\StructType\TravelComplianceData|null
     */
    protected ?\Travelport\Util\StructType\TravelComplianceData $TravelComplianceData = null;
    /**
     * The TravelInfo
     * @var \Travelport\Util\StructType\TravelInfo|null
     */
    protected ?\Travelport\Util\StructType\TravelInfo $TravelInfo = null;
    /**
     * The NameNumber
     * Meta information extracted from the WSDL
     * - documentation: Host Name Number
     * - use: optional
     * @var string|null
     */
    protected ?string $NameNumber = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Defines the type of traveler used for booking which could be a non-defining type (Companion, Web-fare, etc), or a standard type (Adult, Child, etc). | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - type: typePTC
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelerType = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: BookingTraveler age
     * - type: xs:integer
     * - use: optional
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * The VIP
     * Meta information extracted from the WSDL
     * - documentation: When set to True indicates that the Booking Traveler is a VIP based on agency/customer criteria
     * - default: false
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $VIP = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - documentation: Traveler Date of Birth
     * - type: xs:date
     * - use: optional
     * @var string|null
     */
    protected ?string $DOB = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - documentation: The BookingTraveler gender type | The gender of a person. Data is defined in Ref Pub
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - type: typeGender
     * - use: optional
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The Nationality
     * Meta information extracted from the WSDL
     * - documentation: Specify ISO country code for nationality of the Booking Traveler | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - type: typeCountry
     * - use: optional
     * @var string|null
     */
    protected ?string $Nationality = null;
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
     * Constructor method for BookingTraveler
     * @uses BookingTraveler::setBookingTravelerName()
     * @uses BookingTraveler::setDeliveryInfo()
     * @uses BookingTraveler::setPhoneNumber()
     * @uses BookingTraveler::setEmail()
     * @uses BookingTraveler::setLoyaltyCard()
     * @uses BookingTraveler::setDiscountCard()
     * @uses BookingTraveler::setSSR()
     * @uses BookingTraveler::setNameRemark()
     * @uses BookingTraveler::setAirSeatAssignment()
     * @uses BookingTraveler::setRailSeatAssignment()
     * @uses BookingTraveler::setEmergencyInfo()
     * @uses BookingTraveler::setAddress()
     * @uses BookingTraveler::setDriversLicense()
     * @uses BookingTraveler::setAppliedProfile()
     * @uses BookingTraveler::setCustomizedNameData()
     * @uses BookingTraveler::setTravelComplianceData()
     * @uses BookingTraveler::setTravelInfo()
     * @uses BookingTraveler::setNameNumber()
     * @uses BookingTraveler::setKey()
     * @uses BookingTraveler::setTravelerType()
     * @uses BookingTraveler::setAge()
     * @uses BookingTraveler::setVIP()
     * @uses BookingTraveler::setDOB()
     * @uses BookingTraveler::setGender()
     * @uses BookingTraveler::setNationality()
     * @uses BookingTraveler::setElStat()
     * @uses BookingTraveler::setKeyOverride()
     * @param \Travelport\Util\StructType\BookingTravelerName $bookingTravelerName
     * @param \Travelport\Util\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Util\StructType\Email $email
     * @param \Travelport\Util\StructType\LoyaltyCard $loyaltyCard
     * @param \Travelport\Util\StructType\DiscountCard $discountCard
     * @param \Travelport\Util\StructType\SSR[] $sSR
     * @param \Travelport\Util\StructType\NameRemark[] $nameRemark
     * @param \Travelport\Util\StructType\AirSeatAssignment[] $airSeatAssignment
     * @param \Travelport\Util\StructType\RailSeatAssignment[] $railSeatAssignment
     * @param string $emergencyInfo
     * @param \Travelport\Util\StructType\TypeStructuredAddress $address
     * @param \Travelport\Util\StructType\DriversLicense $driversLicense
     * @param \Travelport\Util\StructType\AppliedProfile $appliedProfile
     * @param \Travelport\Util\StructType\CustomizedNameData $customizedNameData
     * @param \Travelport\Util\StructType\TravelComplianceData $travelComplianceData
     * @param \Travelport\Util\StructType\TravelInfo $travelInfo
     * @param string $nameNumber
     * @param string $key
     * @param string $travelerType
     * @param int $age
     * @param bool $vIP
     * @param string $dOB
     * @param string $gender
     * @param string $nationality
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?\Travelport\Util\StructType\BookingTravelerName $bookingTravelerName = null, ?\Travelport\Util\StructType\DeliveryInfo $deliveryInfo = null, ?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Util\StructType\Email $email = null, ?\Travelport\Util\StructType\LoyaltyCard $loyaltyCard = null, ?\Travelport\Util\StructType\DiscountCard $discountCard = null, ?array $sSR = null, ?array $nameRemark = null, ?array $airSeatAssignment = null, ?array $railSeatAssignment = null, ?string $emergencyInfo = null, ?\Travelport\Util\StructType\TypeStructuredAddress $address = null, ?\Travelport\Util\StructType\DriversLicense $driversLicense = null, ?\Travelport\Util\StructType\AppliedProfile $appliedProfile = null, ?\Travelport\Util\StructType\CustomizedNameData $customizedNameData = null, ?\Travelport\Util\StructType\TravelComplianceData $travelComplianceData = null, ?\Travelport\Util\StructType\TravelInfo $travelInfo = null, ?string $nameNumber = null, ?string $key = null, ?string $travelerType = null, ?int $age = null, ?bool $vIP = false, ?string $dOB = null, ?string $gender = null, ?string $nationality = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setBookingTravelerName($bookingTravelerName)
            ->setDeliveryInfo($deliveryInfo)
            ->setPhoneNumber($phoneNumber)
            ->setEmail($email)
            ->setLoyaltyCard($loyaltyCard)
            ->setDiscountCard($discountCard)
            ->setSSR($sSR)
            ->setNameRemark($nameRemark)
            ->setAirSeatAssignment($airSeatAssignment)
            ->setRailSeatAssignment($railSeatAssignment)
            ->setEmergencyInfo($emergencyInfo)
            ->setAddress($address)
            ->setDriversLicense($driversLicense)
            ->setAppliedProfile($appliedProfile)
            ->setCustomizedNameData($customizedNameData)
            ->setTravelComplianceData($travelComplianceData)
            ->setTravelInfo($travelInfo)
            ->setNameNumber($nameNumber)
            ->setKey($key)
            ->setTravelerType($travelerType)
            ->setAge($age)
            ->setVIP($vIP)
            ->setDOB($dOB)
            ->setGender($gender)
            ->setNationality($nationality)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get BookingTravelerName value
     * @return \Travelport\Util\StructType\BookingTravelerName|null
     */
    public function getBookingTravelerName(): ?\Travelport\Util\StructType\BookingTravelerName
    {
        return $this->BookingTravelerName;
    }
    /**
     * Set BookingTravelerName value
     * @param \Travelport\Util\StructType\BookingTravelerName $bookingTravelerName
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setBookingTravelerName(?\Travelport\Util\StructType\BookingTravelerName $bookingTravelerName = null): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\Util\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\Util\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Travelport\Util\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setDeliveryInfo(?\Travelport\Util\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        $this->DeliveryInfo = $deliveryInfo;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Util\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Util\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setPhoneNumber(?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Util\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Util\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Util\StructType\Email $email
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setEmail(?\Travelport\Util\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Util\StructType\LoyaltyCard|null
     */
    public function getLoyaltyCard(): ?\Travelport\Util\StructType\LoyaltyCard
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Util\StructType\LoyaltyCard $loyaltyCard
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setLoyaltyCard(?\Travelport\Util\StructType\LoyaltyCard $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Util\StructType\DiscountCard|null
     */
    public function getDiscountCard(): ?\Travelport\Util\StructType\DiscountCard
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\Util\StructType\DiscountCard $discountCard
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setDiscountCard(?\Travelport\Util\StructType\DiscountCard $discountCard = null): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\Util\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * This method is responsible for validating the values passed to the setSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSR method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRForArrayConstraintsFromSetSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerSSRItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerSSRItem instanceof \Travelport\Util\StructType\SSR) {
                $invalidValues[] = is_object($bookingTravelerSSRItem) ? get_class($bookingTravelerSSRItem) : sprintf('%s(%s)', gettype($bookingTravelerSSRItem), var_export($bookingTravelerSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSR property can only contain items of type \Travelport\Util\StructType\SSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SSR[] $sSR
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setSSR(?array $sSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRArrayErrorMessage = self::validateSSRForArrayConstraintsFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSR) && count($sSR) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSR)), __LINE__);
        }
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SSR $item
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function addToSSR(\Travelport\Util\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \Travelport\Util\StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSR) && count($this->SSR) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSR)), __LINE__);
        }
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get NameRemark value
     * @return \Travelport\Util\StructType\NameRemark[]
     */
    public function getNameRemark(): ?array
    {
        return $this->NameRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setNameRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameRemarkForArrayConstraintsFromSetNameRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerNameRemarkItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerNameRemarkItem instanceof \Travelport\Util\StructType\NameRemark) {
                $invalidValues[] = is_object($bookingTravelerNameRemarkItem) ? get_class($bookingTravelerNameRemarkItem) : sprintf('%s(%s)', gettype($bookingTravelerNameRemarkItem), var_export($bookingTravelerNameRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameRemark property can only contain items of type \Travelport\Util\StructType\NameRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NameRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\NameRemark[] $nameRemark
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setNameRemark(?array $nameRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($nameRemarkArrayErrorMessage = self::validateNameRemarkForArrayConstraintsFromSetNameRemark($nameRemark))) {
            throw new InvalidArgumentException($nameRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($nameRemark) && count($nameRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($nameRemark)), __LINE__);
        }
        $this->NameRemark = $nameRemark;
        
        return $this;
    }
    /**
     * Add item to NameRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\NameRemark $item
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function addToNameRemark(\Travelport\Util\StructType\NameRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\NameRemark) {
            throw new InvalidArgumentException(sprintf('The NameRemark property can only contain items of type \Travelport\Util\StructType\NameRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->NameRemark) && count($this->NameRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->NameRemark)), __LINE__);
        }
        $this->NameRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AirSeatAssignment value
     * @return \Travelport\Util\StructType\AirSeatAssignment[]
     */
    public function getAirSeatAssignment(): ?array
    {
        return $this->AirSeatAssignment;
    }
    /**
     * This method is responsible for validating the values passed to the setAirSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirSeatAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirSeatAssignmentForArrayConstraintsFromSetAirSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerAirSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerAirSeatAssignmentItem instanceof \Travelport\Util\StructType\AirSeatAssignment) {
                $invalidValues[] = is_object($bookingTravelerAirSeatAssignmentItem) ? get_class($bookingTravelerAirSeatAssignmentItem) : sprintf('%s(%s)', gettype($bookingTravelerAirSeatAssignmentItem), var_export($bookingTravelerAirSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirSeatAssignment property can only contain items of type \Travelport\Util\StructType\AirSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSeatAssignment[] $airSeatAssignment
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setAirSeatAssignment(?array $airSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($airSeatAssignmentArrayErrorMessage = self::validateAirSeatAssignmentForArrayConstraintsFromSetAirSeatAssignment($airSeatAssignment))) {
            throw new InvalidArgumentException($airSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airSeatAssignment) && count($airSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airSeatAssignment)), __LINE__);
        }
        $this->AirSeatAssignment = $airSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirSeatAssignment $item
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function addToAirSeatAssignment(\Travelport\Util\StructType\AirSeatAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The AirSeatAssignment property can only contain items of type \Travelport\Util\StructType\AirSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirSeatAssignment) && count($this->AirSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirSeatAssignment)), __LINE__);
        }
        $this->AirSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get RailSeatAssignment value
     * @return \Travelport\Util\StructType\RailSeatAssignment[]
     */
    public function getRailSeatAssignment(): ?array
    {
        return $this->RailSeatAssignment;
    }
    /**
     * This method is responsible for validating the values passed to the setRailSeatAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSeatAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSeatAssignmentForArrayConstraintsFromSetRailSeatAssignment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingTravelerRailSeatAssignmentItem) {
            // validation for constraint: itemType
            if (!$bookingTravelerRailSeatAssignmentItem instanceof \Travelport\Util\StructType\RailSeatAssignment) {
                $invalidValues[] = is_object($bookingTravelerRailSeatAssignmentItem) ? get_class($bookingTravelerRailSeatAssignmentItem) : sprintf('%s(%s)', gettype($bookingTravelerRailSeatAssignmentItem), var_export($bookingTravelerRailSeatAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSeatAssignment property can only contain items of type \Travelport\Util\StructType\RailSeatAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\RailSeatAssignment[] $railSeatAssignment
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setRailSeatAssignment(?array $railSeatAssignment = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSeatAssignmentArrayErrorMessage = self::validateRailSeatAssignmentForArrayConstraintsFromSetRailSeatAssignment($railSeatAssignment))) {
            throw new InvalidArgumentException($railSeatAssignmentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSeatAssignment) && count($railSeatAssignment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSeatAssignment)), __LINE__);
        }
        $this->RailSeatAssignment = $railSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to RailSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\RailSeatAssignment $item
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function addToRailSeatAssignment(\Travelport\Util\StructType\RailSeatAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\RailSeatAssignment) {
            throw new InvalidArgumentException(sprintf('The RailSeatAssignment property can only contain items of type \Travelport\Util\StructType\RailSeatAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSeatAssignment) && count($this->RailSeatAssignment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSeatAssignment)), __LINE__);
        }
        $this->RailSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get EmergencyInfo value
     * @return string|null
     */
    public function getEmergencyInfo(): ?string
    {
        return $this->EmergencyInfo;
    }
    /**
     * Set EmergencyInfo value
     * @param string $emergencyInfo
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setEmergencyInfo(?string $emergencyInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($emergencyInfo) && !is_string($emergencyInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergencyInfo, true), gettype($emergencyInfo)), __LINE__);
        }
        $this->EmergencyInfo = $emergencyInfo;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Util\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Util\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Util\StructType\TypeStructuredAddress $address
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setAddress(?\Travelport\Util\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get DriversLicense value
     * @return \Travelport\Util\StructType\DriversLicense|null
     */
    public function getDriversLicense(): ?\Travelport\Util\StructType\DriversLicense
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param \Travelport\Util\StructType\DriversLicense $driversLicense
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setDriversLicense(?\Travelport\Util\StructType\DriversLicense $driversLicense = null): self
    {
        $this->DriversLicense = $driversLicense;
        
        return $this;
    }
    /**
     * Get AppliedProfile value
     * @return \Travelport\Util\StructType\AppliedProfile|null
     */
    public function getAppliedProfile(): ?\Travelport\Util\StructType\AppliedProfile
    {
        return $this->AppliedProfile;
    }
    /**
     * Set AppliedProfile value
     * @param \Travelport\Util\StructType\AppliedProfile $appliedProfile
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setAppliedProfile(?\Travelport\Util\StructType\AppliedProfile $appliedProfile = null): self
    {
        $this->AppliedProfile = $appliedProfile;
        
        return $this;
    }
    /**
     * Get CustomizedNameData value
     * @return \Travelport\Util\StructType\CustomizedNameData|null
     */
    public function getCustomizedNameData(): ?\Travelport\Util\StructType\CustomizedNameData
    {
        return $this->CustomizedNameData;
    }
    /**
     * Set CustomizedNameData value
     * @param \Travelport\Util\StructType\CustomizedNameData $customizedNameData
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setCustomizedNameData(?\Travelport\Util\StructType\CustomizedNameData $customizedNameData = null): self
    {
        $this->CustomizedNameData = $customizedNameData;
        
        return $this;
    }
    /**
     * Get TravelComplianceData value
     * @return \Travelport\Util\StructType\TravelComplianceData|null
     */
    public function getTravelComplianceData(): ?\Travelport\Util\StructType\TravelComplianceData
    {
        return $this->TravelComplianceData;
    }
    /**
     * Set TravelComplianceData value
     * @param \Travelport\Util\StructType\TravelComplianceData $travelComplianceData
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setTravelComplianceData(?\Travelport\Util\StructType\TravelComplianceData $travelComplianceData = null): self
    {
        $this->TravelComplianceData = $travelComplianceData;
        
        return $this;
    }
    /**
     * Get TravelInfo value
     * @return \Travelport\Util\StructType\TravelInfo|null
     */
    public function getTravelInfo(): ?\Travelport\Util\StructType\TravelInfo
    {
        return $this->TravelInfo;
    }
    /**
     * Set TravelInfo value
     * @param \Travelport\Util\StructType\TravelInfo $travelInfo
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setTravelInfo(?\Travelport\Util\StructType\TravelInfo $travelInfo = null): self
    {
        $this->TravelInfo = $travelInfo;
        
        return $this;
    }
    /**
     * Get NameNumber value
     * @return string|null
     */
    public function getNameNumber(): ?string
    {
        return $this->NameNumber;
    }
    /**
     * Set NameNumber value
     * @param string $nameNumber
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setNameNumber(?string $nameNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($nameNumber) && !is_string($nameNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameNumber, true), gettype($nameNumber)), __LINE__);
        }
        $this->NameNumber = $nameNumber;
        
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
     * @return \Travelport\Util\StructType\BookingTraveler
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
     * Get TravelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->TravelerType;
    }
    /**
     * Set TravelerType value
     * @param string $travelerType
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerType) && !is_string($travelerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerType, true), gettype($travelerType)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $travelerType)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($travelerType) && mb_strlen((string) $travelerType) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $travelerType)), __LINE__);
        }
        $this->TravelerType = $travelerType;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
    /**
     * Get VIP value
     * @return bool|null
     */
    public function getVIP(): ?bool
    {
        return $this->VIP;
    }
    /**
     * Set VIP value
     * @param bool $vIP
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setVIP(?bool $vIP = false): self
    {
        // validation for constraint: boolean
        if (!is_null($vIP) && !is_bool($vIP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vIP, true), gettype($vIP)), __LINE__);
        }
        $this->VIP = $vIP;
        
        return $this;
    }
    /**
     * Get DOB value
     * @return string|null
     */
    public function getDOB(): ?string
    {
        return $this->DOB;
    }
    /**
     * Set DOB value
     * @param string $dOB
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setDOB(?string $dOB = null): self
    {
        // validation for constraint: string
        if (!is_null($dOB) && !is_string($dOB)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dOB, true), gettype($dOB)), __LINE__);
        }
        $this->DOB = $dOB;
        
        return $this;
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setGender(?string $gender = null): self
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($gender) && mb_strlen((string) $gender) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $gender)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($gender) && mb_strlen((string) $gender) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $gender)), __LINE__);
        }
        $this->Gender = $gender;
        
        return $this;
    }
    /**
     * Get Nationality value
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->Nationality;
    }
    /**
     * Set Nationality value
     * @param string $nationality
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setNationality(?string $nationality = null): self
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationality, true), gettype($nationality)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($nationality) && mb_strlen((string) $nationality) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $nationality)), __LINE__);
        }
        $this->Nationality = $nationality;
        
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\BookingTraveler
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
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
     * @return \Travelport\Util\StructType\BookingTraveler
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
