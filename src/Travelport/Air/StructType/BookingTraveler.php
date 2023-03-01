<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\BookingTravelerName|null
     */
    public ?\Travelport\Air\StructType\BookingTravelerName $BookingTravelerName = null;
    /**
     * The DeliveryInfo
     * @var \Travelport\Air\StructType\DeliveryInfo|null
     */
    public ?\Travelport\Air\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The PhoneNumber
     * @var \Travelport\Air\StructType\PhoneNumber|null
     */
    public ?\Travelport\Air\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Email
     * @var \Travelport\Air\StructType\Email|null
     */
    public ?\Travelport\Air\StructType\Email $Email = null;
    /**
     * The LoyaltyCard
     * @var \Travelport\Air\StructType\LoyaltyCard|null
     */
    public ?\Travelport\Air\StructType\LoyaltyCard $LoyaltyCard = null;
    /**
     * The DiscountCard
     * @var \Travelport\Air\StructType\DiscountCard|null
     */
    public ?\Travelport\Air\StructType\DiscountCard $DiscountCard = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SSR
     * @var \Travelport\Air\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The NameRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: NameRemark
     * @var \Travelport\Air\StructType\NameRemark[]
     */
    public ?array $NameRemark = null;
    /**
     * The AirSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSeatAssignment
     * @var \Travelport\Air\StructType\AirSeatAssignment[]
     */
    public ?array $AirSeatAssignment = null;
    /**
     * The RailSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailSeatAssignment
     * @var \Travelport\Air\StructType\RailSeatAssignment[]
     */
    public ?array $RailSeatAssignment = null;
    /**
     * The EmergencyInfo
     * @var string|null
     */
    public ?string $EmergencyInfo = null;
    /**
     * The Address
     * @var \Travelport\Air\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Air\StructType\TypeStructuredAddress $Address = null;
    /**
     * The DriversLicense
     * @var \Travelport\Air\StructType\DriversLicense|null
     */
    public ?\Travelport\Air\StructType\DriversLicense $DriversLicense = null;
    /**
     * The AppliedProfile
     * @var \Travelport\Air\StructType\AppliedProfile|null
     */
    public ?\Travelport\Air\StructType\AppliedProfile $AppliedProfile = null;
    /**
     * The CustomizedNameData
     * @var \Travelport\Air\StructType\CustomizedNameData|null
     */
    public ?\Travelport\Air\StructType\CustomizedNameData $CustomizedNameData = null;
    /**
     * The TravelComplianceData
     * @var \Travelport\Air\StructType\TravelComplianceData|null
     */
    public ?\Travelport\Air\StructType\TravelComplianceData $TravelComplianceData = null;
    /**
     * The TravelInfo
     * @var \Travelport\Air\StructType\TravelInfo|null
     */
    public ?\Travelport\Air\StructType\TravelInfo $TravelInfo = null;
    /**
     * The NameNumber
     * Meta information extracted from the WSDL
     * - documentation: Host Name Number
     * - use: optional
     * @var string|null
     */
    public ?string $NameNumber = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
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
    public ?string $TravelerType = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: BookingTraveler age
     * - type: xs:integer
     * - use: optional
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * The VIP
     * Meta information extracted from the WSDL
     * - documentation: When set to True indicates that the Booking Traveler is a VIP based on agency/customer criteria
     * - default: false
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $VIP = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - documentation: Traveler Date of Birth
     * - type: xs:date
     * - use: optional
     * @var string|null
     */
    public ?string $DOB = null;
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
    public ?string $Gender = null;
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
    public ?string $Nationality = null;
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
     * @param \Travelport\Air\StructType\BookingTravelerName $bookingTravelerName
     * @param \Travelport\Air\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\Air\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Air\StructType\Email $email
     * @param \Travelport\Air\StructType\LoyaltyCard $loyaltyCard
     * @param \Travelport\Air\StructType\DiscountCard $discountCard
     * @param \Travelport\Air\StructType\SSR[] $sSR
     * @param \Travelport\Air\StructType\NameRemark[] $nameRemark
     * @param \Travelport\Air\StructType\AirSeatAssignment[] $airSeatAssignment
     * @param \Travelport\Air\StructType\RailSeatAssignment[] $railSeatAssignment
     * @param string $emergencyInfo
     * @param \Travelport\Air\StructType\TypeStructuredAddress $address
     * @param \Travelport\Air\StructType\DriversLicense $driversLicense
     * @param \Travelport\Air\StructType\AppliedProfile $appliedProfile
     * @param \Travelport\Air\StructType\CustomizedNameData $customizedNameData
     * @param \Travelport\Air\StructType\TravelComplianceData $travelComplianceData
     * @param \Travelport\Air\StructType\TravelInfo $travelInfo
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
    public function __construct(?\Travelport\Air\StructType\BookingTravelerName $bookingTravelerName = null, ?\Travelport\Air\StructType\DeliveryInfo $deliveryInfo = null, ?\Travelport\Air\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Air\StructType\Email $email = null, ?\Travelport\Air\StructType\LoyaltyCard $loyaltyCard = null, ?\Travelport\Air\StructType\DiscountCard $discountCard = null, ?array $sSR = null, ?array $nameRemark = null, ?array $airSeatAssignment = null, ?array $railSeatAssignment = null, ?string $emergencyInfo = null, ?\Travelport\Air\StructType\TypeStructuredAddress $address = null, ?\Travelport\Air\StructType\DriversLicense $driversLicense = null, ?\Travelport\Air\StructType\AppliedProfile $appliedProfile = null, ?\Travelport\Air\StructType\CustomizedNameData $customizedNameData = null, ?\Travelport\Air\StructType\TravelComplianceData $travelComplianceData = null, ?\Travelport\Air\StructType\TravelInfo $travelInfo = null, ?string $nameNumber = null, ?string $key = null, ?string $travelerType = null, ?int $age = null, ?bool $vIP = false, ?string $dOB = null, ?string $gender = null, ?string $nationality = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Air\StructType\BookingTravelerName|null
     */
    public function getBookingTravelerName(): ?\Travelport\Air\StructType\BookingTravelerName
    {
        return $this->BookingTravelerName;
    }
    /**
     * Set BookingTravelerName value
     * @param \Travelport\Air\StructType\BookingTravelerName $bookingTravelerName
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setBookingTravelerName(?\Travelport\Air\StructType\BookingTravelerName $bookingTravelerName = null): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\Air\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\Air\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Travelport\Air\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setDeliveryInfo(?\Travelport\Air\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        $this->DeliveryInfo = $deliveryInfo;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Air\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Air\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Air\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setPhoneNumber(?\Travelport\Air\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Air\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Air\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Air\StructType\Email $email
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setEmail(?\Travelport\Air\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Air\StructType\LoyaltyCard|null
     */
    public function getLoyaltyCard(): ?\Travelport\Air\StructType\LoyaltyCard
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Air\StructType\LoyaltyCard $loyaltyCard
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setLoyaltyCard(?\Travelport\Air\StructType\LoyaltyCard $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Air\StructType\DiscountCard|null
     */
    public function getDiscountCard(): ?\Travelport\Air\StructType\DiscountCard
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\Air\StructType\DiscountCard $discountCard
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setDiscountCard(?\Travelport\Air\StructType\DiscountCard $discountCard = null): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\Air\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\Air\StructType\SSR[] $sSR
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\SSR $item
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function addToSSR(\Travelport\Air\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get NameRemark value
     * @return \Travelport\Air\StructType\NameRemark[]
     */
    public function getNameRemark(): ?array
    {
        return $this->NameRemark;
    }
    /**
     * Set NameRemark value
     * @param \Travelport\Air\StructType\NameRemark[] $nameRemark
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setNameRemark(?array $nameRemark = null): self
    {
        $this->NameRemark = $nameRemark;
        
        return $this;
    }
    /**
     * Add item to NameRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\NameRemark $item
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function addToNameRemark(\Travelport\Air\StructType\NameRemark $item): self
    {
        $this->NameRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AirSeatAssignment value
     * @return \Travelport\Air\StructType\AirSeatAssignment[]
     */
    public function getAirSeatAssignment(): ?array
    {
        return $this->AirSeatAssignment;
    }
    /**
     * Set AirSeatAssignment value
     * @param \Travelport\Air\StructType\AirSeatAssignment[] $airSeatAssignment
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setAirSeatAssignment(?array $airSeatAssignment = null): self
    {
        $this->AirSeatAssignment = $airSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AirSeatAssignment $item
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function addToAirSeatAssignment(\Travelport\Air\StructType\AirSeatAssignment $item): self
    {
        $this->AirSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get RailSeatAssignment value
     * @return \Travelport\Air\StructType\RailSeatAssignment[]
     */
    public function getRailSeatAssignment(): ?array
    {
        return $this->RailSeatAssignment;
    }
    /**
     * Set RailSeatAssignment value
     * @param \Travelport\Air\StructType\RailSeatAssignment[] $railSeatAssignment
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setRailSeatAssignment(?array $railSeatAssignment = null): self
    {
        $this->RailSeatAssignment = $railSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to RailSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\RailSeatAssignment $item
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function addToRailSeatAssignment(\Travelport\Air\StructType\RailSeatAssignment $item): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setEmergencyInfo(?string $emergencyInfo = null): self
    {
        $this->EmergencyInfo = $emergencyInfo;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Air\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Air\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Air\StructType\TypeStructuredAddress $address
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setAddress(?\Travelport\Air\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get DriversLicense value
     * @return \Travelport\Air\StructType\DriversLicense|null
     */
    public function getDriversLicense(): ?\Travelport\Air\StructType\DriversLicense
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param \Travelport\Air\StructType\DriversLicense $driversLicense
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setDriversLicense(?\Travelport\Air\StructType\DriversLicense $driversLicense = null): self
    {
        $this->DriversLicense = $driversLicense;
        
        return $this;
    }
    /**
     * Get AppliedProfile value
     * @return \Travelport\Air\StructType\AppliedProfile|null
     */
    public function getAppliedProfile(): ?\Travelport\Air\StructType\AppliedProfile
    {
        return $this->AppliedProfile;
    }
    /**
     * Set AppliedProfile value
     * @param \Travelport\Air\StructType\AppliedProfile $appliedProfile
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setAppliedProfile(?\Travelport\Air\StructType\AppliedProfile $appliedProfile = null): self
    {
        $this->AppliedProfile = $appliedProfile;
        
        return $this;
    }
    /**
     * Get CustomizedNameData value
     * @return \Travelport\Air\StructType\CustomizedNameData|null
     */
    public function getCustomizedNameData(): ?\Travelport\Air\StructType\CustomizedNameData
    {
        return $this->CustomizedNameData;
    }
    /**
     * Set CustomizedNameData value
     * @param \Travelport\Air\StructType\CustomizedNameData $customizedNameData
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setCustomizedNameData(?\Travelport\Air\StructType\CustomizedNameData $customizedNameData = null): self
    {
        $this->CustomizedNameData = $customizedNameData;
        
        return $this;
    }
    /**
     * Get TravelComplianceData value
     * @return \Travelport\Air\StructType\TravelComplianceData|null
     */
    public function getTravelComplianceData(): ?\Travelport\Air\StructType\TravelComplianceData
    {
        return $this->TravelComplianceData;
    }
    /**
     * Set TravelComplianceData value
     * @param \Travelport\Air\StructType\TravelComplianceData $travelComplianceData
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setTravelComplianceData(?\Travelport\Air\StructType\TravelComplianceData $travelComplianceData = null): self
    {
        $this->TravelComplianceData = $travelComplianceData;
        
        return $this;
    }
    /**
     * Get TravelInfo value
     * @return \Travelport\Air\StructType\TravelInfo|null
     */
    public function getTravelInfo(): ?\Travelport\Air\StructType\TravelInfo
    {
        return $this->TravelInfo;
    }
    /**
     * Set TravelInfo value
     * @param \Travelport\Air\StructType\TravelInfo $travelInfo
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setTravelInfo(?\Travelport\Air\StructType\TravelInfo $travelInfo = null): self
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setNameNumber(?string $nameNumber = null): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setKey(?string $key = null): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setTravelerType(?string $travelerType = null): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setAge(?int $age = null): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setVIP(?bool $vIP = false): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setDOB(?string $dOB = null): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setGender(?string $gender = null): self
    {
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setNationality(?string $nationality = null): self
    {
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
     * @param string $elStat
     * @return \Travelport\Air\StructType\BookingTraveler
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
     * @return \Travelport\Air\StructType\BookingTraveler
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
