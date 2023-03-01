<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\BookingTravelerName|null
     */
    public ?\Travelport\Hotel\StructType\BookingTravelerName $BookingTravelerName = null;
    /**
     * The DeliveryInfo
     * @var \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    public ?\Travelport\Hotel\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Email
     * @var \Travelport\Hotel\StructType\Email|null
     */
    public ?\Travelport\Hotel\StructType\Email $Email = null;
    /**
     * The LoyaltyCard
     * @var \Travelport\Hotel\StructType\LoyaltyCard|null
     */
    public ?\Travelport\Hotel\StructType\LoyaltyCard $LoyaltyCard = null;
    /**
     * The DiscountCard
     * @var \Travelport\Hotel\StructType\DiscountCard|null
     */
    public ?\Travelport\Hotel\StructType\DiscountCard $DiscountCard = null;
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SSR
     * @var \Travelport\Hotel\StructType\SSR[]
     */
    public ?array $SSR = null;
    /**
     * The NameRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: NameRemark
     * @var \Travelport\Hotel\StructType\NameRemark[]
     */
    public ?array $NameRemark = null;
    /**
     * The AirSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirSeatAssignment
     * @var \Travelport\Hotel\StructType\AirSeatAssignment[]
     */
    public ?array $AirSeatAssignment = null;
    /**
     * The RailSeatAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailSeatAssignment
     * @var \Travelport\Hotel\StructType\RailSeatAssignment[]
     */
    public ?array $RailSeatAssignment = null;
    /**
     * The EmergencyInfo
     * @var string|null
     */
    public ?string $EmergencyInfo = null;
    /**
     * The Address
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
    /**
     * The DriversLicense
     * @var \Travelport\Hotel\StructType\DriversLicense|null
     */
    public ?\Travelport\Hotel\StructType\DriversLicense $DriversLicense = null;
    /**
     * The AppliedProfile
     * @var \Travelport\Hotel\StructType\AppliedProfile|null
     */
    public ?\Travelport\Hotel\StructType\AppliedProfile $AppliedProfile = null;
    /**
     * The CustomizedNameData
     * @var \Travelport\Hotel\StructType\CustomizedNameData|null
     */
    public ?\Travelport\Hotel\StructType\CustomizedNameData $CustomizedNameData = null;
    /**
     * The TravelComplianceData
     * @var \Travelport\Hotel\StructType\TravelComplianceData|null
     */
    public ?\Travelport\Hotel\StructType\TravelComplianceData $TravelComplianceData = null;
    /**
     * The TravelInfo
     * @var \Travelport\Hotel\StructType\TravelInfo|null
     */
    public ?\Travelport\Hotel\StructType\TravelInfo $TravelInfo = null;
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
     * @param \Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName
     * @param \Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Hotel\StructType\Email $email
     * @param \Travelport\Hotel\StructType\LoyaltyCard $loyaltyCard
     * @param \Travelport\Hotel\StructType\DiscountCard $discountCard
     * @param \Travelport\Hotel\StructType\SSR[] $sSR
     * @param \Travelport\Hotel\StructType\NameRemark[] $nameRemark
     * @param \Travelport\Hotel\StructType\AirSeatAssignment[] $airSeatAssignment
     * @param \Travelport\Hotel\StructType\RailSeatAssignment[] $railSeatAssignment
     * @param string $emergencyInfo
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @param \Travelport\Hotel\StructType\DriversLicense $driversLicense
     * @param \Travelport\Hotel\StructType\AppliedProfile $appliedProfile
     * @param \Travelport\Hotel\StructType\CustomizedNameData $customizedNameData
     * @param \Travelport\Hotel\StructType\TravelComplianceData $travelComplianceData
     * @param \Travelport\Hotel\StructType\TravelInfo $travelInfo
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
    public function __construct(?\Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName = null, ?\Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo = null, ?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Hotel\StructType\Email $email = null, ?\Travelport\Hotel\StructType\LoyaltyCard $loyaltyCard = null, ?\Travelport\Hotel\StructType\DiscountCard $discountCard = null, ?array $sSR = null, ?array $nameRemark = null, ?array $airSeatAssignment = null, ?array $railSeatAssignment = null, ?string $emergencyInfo = null, ?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null, ?\Travelport\Hotel\StructType\DriversLicense $driversLicense = null, ?\Travelport\Hotel\StructType\AppliedProfile $appliedProfile = null, ?\Travelport\Hotel\StructType\CustomizedNameData $customizedNameData = null, ?\Travelport\Hotel\StructType\TravelComplianceData $travelComplianceData = null, ?\Travelport\Hotel\StructType\TravelInfo $travelInfo = null, ?string $nameNumber = null, ?string $key = null, ?string $travelerType = null, ?int $age = null, ?bool $vIP = false, ?string $dOB = null, ?string $gender = null, ?string $nationality = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * @return \Travelport\Hotel\StructType\BookingTravelerName|null
     */
    public function getBookingTravelerName(): ?\Travelport\Hotel\StructType\BookingTravelerName
    {
        return $this->BookingTravelerName;
    }
    /**
     * Set BookingTravelerName value
     * @param \Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setBookingTravelerName(?\Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName = null): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\Hotel\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @param \Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setDeliveryInfo(?\Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        $this->DeliveryInfo = $deliveryInfo;
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Hotel\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setPhoneNumber(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Hotel\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Hotel\StructType\Email
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param \Travelport\Hotel\StructType\Email $email
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setEmail(?\Travelport\Hotel\StructType\Email $email = null): self
    {
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Hotel\StructType\LoyaltyCard|null
     */
    public function getLoyaltyCard(): ?\Travelport\Hotel\StructType\LoyaltyCard
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Hotel\StructType\LoyaltyCard $loyaltyCard
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setLoyaltyCard(?\Travelport\Hotel\StructType\LoyaltyCard $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Hotel\StructType\DiscountCard|null
     */
    public function getDiscountCard(): ?\Travelport\Hotel\StructType\DiscountCard
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\Hotel\StructType\DiscountCard $discountCard
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setDiscountCard(?\Travelport\Hotel\StructType\DiscountCard $discountCard = null): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Get SSR value
     * @return \Travelport\Hotel\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * Set SSR value
     * @param \Travelport\Hotel\StructType\SSR[] $sSR
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setSSR(?array $sSR = null): self
    {
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\SSR $item
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function addToSSR(\Travelport\Hotel\StructType\SSR $item): self
    {
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get NameRemark value
     * @return \Travelport\Hotel\StructType\NameRemark[]
     */
    public function getNameRemark(): ?array
    {
        return $this->NameRemark;
    }
    /**
     * Set NameRemark value
     * @param \Travelport\Hotel\StructType\NameRemark[] $nameRemark
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setNameRemark(?array $nameRemark = null): self
    {
        $this->NameRemark = $nameRemark;
        
        return $this;
    }
    /**
     * Add item to NameRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\NameRemark $item
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function addToNameRemark(\Travelport\Hotel\StructType\NameRemark $item): self
    {
        $this->NameRemark[] = $item;
        
        return $this;
    }
    /**
     * Get AirSeatAssignment value
     * @return \Travelport\Hotel\StructType\AirSeatAssignment[]
     */
    public function getAirSeatAssignment(): ?array
    {
        return $this->AirSeatAssignment;
    }
    /**
     * Set AirSeatAssignment value
     * @param \Travelport\Hotel\StructType\AirSeatAssignment[] $airSeatAssignment
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setAirSeatAssignment(?array $airSeatAssignment = null): self
    {
        $this->AirSeatAssignment = $airSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to AirSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\AirSeatAssignment $item
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function addToAirSeatAssignment(\Travelport\Hotel\StructType\AirSeatAssignment $item): self
    {
        $this->AirSeatAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get RailSeatAssignment value
     * @return \Travelport\Hotel\StructType\RailSeatAssignment[]
     */
    public function getRailSeatAssignment(): ?array
    {
        return $this->RailSeatAssignment;
    }
    /**
     * Set RailSeatAssignment value
     * @param \Travelport\Hotel\StructType\RailSeatAssignment[] $railSeatAssignment
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setRailSeatAssignment(?array $railSeatAssignment = null): self
    {
        $this->RailSeatAssignment = $railSeatAssignment;
        
        return $this;
    }
    /**
     * Add item to RailSeatAssignment value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\RailSeatAssignment $item
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function addToRailSeatAssignment(\Travelport\Hotel\StructType\RailSeatAssignment $item): self
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setEmergencyInfo(?string $emergencyInfo = null): self
    {
        $this->EmergencyInfo = $emergencyInfo;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get DriversLicense value
     * @return \Travelport\Hotel\StructType\DriversLicense|null
     */
    public function getDriversLicense(): ?\Travelport\Hotel\StructType\DriversLicense
    {
        return $this->DriversLicense;
    }
    /**
     * Set DriversLicense value
     * @param \Travelport\Hotel\StructType\DriversLicense $driversLicense
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setDriversLicense(?\Travelport\Hotel\StructType\DriversLicense $driversLicense = null): self
    {
        $this->DriversLicense = $driversLicense;
        
        return $this;
    }
    /**
     * Get AppliedProfile value
     * @return \Travelport\Hotel\StructType\AppliedProfile|null
     */
    public function getAppliedProfile(): ?\Travelport\Hotel\StructType\AppliedProfile
    {
        return $this->AppliedProfile;
    }
    /**
     * Set AppliedProfile value
     * @param \Travelport\Hotel\StructType\AppliedProfile $appliedProfile
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setAppliedProfile(?\Travelport\Hotel\StructType\AppliedProfile $appliedProfile = null): self
    {
        $this->AppliedProfile = $appliedProfile;
        
        return $this;
    }
    /**
     * Get CustomizedNameData value
     * @return \Travelport\Hotel\StructType\CustomizedNameData|null
     */
    public function getCustomizedNameData(): ?\Travelport\Hotel\StructType\CustomizedNameData
    {
        return $this->CustomizedNameData;
    }
    /**
     * Set CustomizedNameData value
     * @param \Travelport\Hotel\StructType\CustomizedNameData $customizedNameData
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setCustomizedNameData(?\Travelport\Hotel\StructType\CustomizedNameData $customizedNameData = null): self
    {
        $this->CustomizedNameData = $customizedNameData;
        
        return $this;
    }
    /**
     * Get TravelComplianceData value
     * @return \Travelport\Hotel\StructType\TravelComplianceData|null
     */
    public function getTravelComplianceData(): ?\Travelport\Hotel\StructType\TravelComplianceData
    {
        return $this->TravelComplianceData;
    }
    /**
     * Set TravelComplianceData value
     * @param \Travelport\Hotel\StructType\TravelComplianceData $travelComplianceData
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setTravelComplianceData(?\Travelport\Hotel\StructType\TravelComplianceData $travelComplianceData = null): self
    {
        $this->TravelComplianceData = $travelComplianceData;
        
        return $this;
    }
    /**
     * Get TravelInfo value
     * @return \Travelport\Hotel\StructType\TravelInfo|null
     */
    public function getTravelInfo(): ?\Travelport\Hotel\StructType\TravelInfo
    {
        return $this->TravelInfo;
    }
    /**
     * Set TravelInfo value
     * @param \Travelport\Hotel\StructType\TravelInfo $travelInfo
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setTravelInfo(?\Travelport\Hotel\StructType\TravelInfo $travelInfo = null): self
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
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
     * @return \Travelport\Hotel\StructType\BookingTraveler
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
