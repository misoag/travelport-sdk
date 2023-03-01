<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingTravelerInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container that will allow modifying Universal record data that is not product specific.
 * @subpackage Structs
 */
class BookingTravelerInfo extends AbstractStructBase
{
    /**
     * The BookingTravelerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BookingTravelerName
     * @var \Travelport\Hotel\StructType\BookingTravelerName|null
     */
    public ?\Travelport\Hotel\StructType\BookingTravelerName $BookingTravelerName = null;
    /**
     * The NameRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: NameRemark
     * @var \Travelport\Hotel\StructType\NameRemark|null
     */
    public ?\Travelport\Hotel\StructType\NameRemark $NameRemark = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - documentation: Traveler Date of Birth
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $DOB = null;
    /**
     * The TravelInfo
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: TravelInfo
     * @var \Travelport\Hotel\StructType\TravelInfo|null
     */
    public ?\Travelport\Hotel\StructType\TravelInfo $TravelInfo = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Email
     * @var \Travelport\Hotel\StructType\Email|null
     */
    public ?\Travelport\Hotel\StructType\Email $Email = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $Address = null;
    /**
     * The EmergencyInfo
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $EmergencyInfo = null;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DeliveryInfo
     * @var \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    public ?\Travelport\Hotel\StructType\DeliveryInfo $DeliveryInfo = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * The CustomizedNameData
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: CustomizedNameData
     * @var \Travelport\Hotel\StructType\CustomizedNameData|null
     */
    public ?\Travelport\Hotel\StructType\CustomizedNameData $CustomizedNameData = null;
    /**
     * The AppliedProfile
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AppliedProfile
     * @var \Travelport\Hotel\StructType\AppliedProfile|null
     */
    public ?\Travelport\Hotel\StructType\AppliedProfile $AppliedProfile = null;
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
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $TravelerType = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - documentation: The gender of a person. Data is defined in Ref Pub
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Gender = null;
    /**
     * Constructor method for BookingTravelerInfo
     * @uses BookingTravelerInfo::setBookingTravelerName()
     * @uses BookingTravelerInfo::setNameRemark()
     * @uses BookingTravelerInfo::setDOB()
     * @uses BookingTravelerInfo::setTravelInfo()
     * @uses BookingTravelerInfo::setEmail()
     * @uses BookingTravelerInfo::setPhoneNumber()
     * @uses BookingTravelerInfo::setAddress()
     * @uses BookingTravelerInfo::setEmergencyInfo()
     * @uses BookingTravelerInfo::setDeliveryInfo()
     * @uses BookingTravelerInfo::setAge()
     * @uses BookingTravelerInfo::setCustomizedNameData()
     * @uses BookingTravelerInfo::setAppliedProfile()
     * @uses BookingTravelerInfo::setKey()
     * @uses BookingTravelerInfo::setTravelerType()
     * @uses BookingTravelerInfo::setGender()
     * @param \Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName
     * @param \Travelport\Hotel\StructType\NameRemark $nameRemark
     * @param string $dOB
     * @param \Travelport\Hotel\StructType\TravelInfo $travelInfo
     * @param \Travelport\Hotel\StructType\Email $email
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @param string $emergencyInfo
     * @param \Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo
     * @param int $age
     * @param \Travelport\Hotel\StructType\CustomizedNameData $customizedNameData
     * @param \Travelport\Hotel\StructType\AppliedProfile $appliedProfile
     * @param string $key
     * @param string $travelerType
     * @param string $gender
     */
    public function __construct(?\Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName = null, ?\Travelport\Hotel\StructType\NameRemark $nameRemark = null, ?string $dOB = null, ?\Travelport\Hotel\StructType\TravelInfo $travelInfo = null, ?\Travelport\Hotel\StructType\Email $email = null, ?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null, ?string $emergencyInfo = null, ?\Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo = null, ?int $age = null, ?\Travelport\Hotel\StructType\CustomizedNameData $customizedNameData = null, ?\Travelport\Hotel\StructType\AppliedProfile $appliedProfile = null, ?string $key = null, ?string $travelerType = null, ?string $gender = null)
    {
        $this
            ->setBookingTravelerName($bookingTravelerName)
            ->setNameRemark($nameRemark)
            ->setDOB($dOB)
            ->setTravelInfo($travelInfo)
            ->setEmail($email)
            ->setPhoneNumber($phoneNumber)
            ->setAddress($address)
            ->setEmergencyInfo($emergencyInfo)
            ->setDeliveryInfo($deliveryInfo)
            ->setAge($age)
            ->setCustomizedNameData($customizedNameData)
            ->setAppliedProfile($appliedProfile)
            ->setKey($key)
            ->setTravelerType($travelerType)
            ->setGender($gender);
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
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setBookingTravelerName(?\Travelport\Hotel\StructType\BookingTravelerName $bookingTravelerName = null): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Get NameRemark value
     * @return \Travelport\Hotel\StructType\NameRemark|null
     */
    public function getNameRemark(): ?\Travelport\Hotel\StructType\NameRemark
    {
        return $this->NameRemark;
    }
    /**
     * Set NameRemark value
     * @param \Travelport\Hotel\StructType\NameRemark $nameRemark
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setNameRemark(?\Travelport\Hotel\StructType\NameRemark $nameRemark = null): self
    {
        $this->NameRemark = $nameRemark;
        
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
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setDOB(?string $dOB = null): self
    {
        $this->DOB = $dOB;
        
        return $this;
    }
    /**
     * Get TravelInfo value
     * @return \Travelport\Hotel\StructType\TravelInfo|null
     */
    public function getTravelInfo(): ?\Travelport\Hotel\StructType\TravelInfo
    {
        return $this->TravelInfo ?? null;
    }
    /**
     * Set TravelInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\TravelInfo $travelInfo
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setTravelInfo(?\Travelport\Hotel\StructType\TravelInfo $travelInfo = null): self
    {
        if (is_null($travelInfo) || (is_array($travelInfo) && empty($travelInfo))) {
            unset($this->TravelInfo);
        } else {
            $this->TravelInfo = $travelInfo;
        }
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Hotel\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Hotel\StructType\Email
    {
        return $this->Email ?? null;
    }
    /**
     * Set Email value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\Email $email
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setEmail(?\Travelport\Hotel\StructType\Email $email = null): self
    {
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Hotel\StructType\PhoneNumber
    {
        return $this->PhoneNumber ?? null;
    }
    /**
     * Set PhoneNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setPhoneNumber(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null): self
    {
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->Address ?? null;
    }
    /**
     * Set Address value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $address
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $address = null): self
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->Address);
        } else {
            $this->Address = $address;
        }
        
        return $this;
    }
    /**
     * Get EmergencyInfo value
     * @return string|null
     */
    public function getEmergencyInfo(): ?string
    {
        return $this->EmergencyInfo ?? null;
    }
    /**
     * Set EmergencyInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $emergencyInfo
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setEmergencyInfo(?string $emergencyInfo = null): self
    {
        if (is_null($emergencyInfo) || (is_array($emergencyInfo) && empty($emergencyInfo))) {
            unset($this->EmergencyInfo);
        } else {
            $this->EmergencyInfo = $emergencyInfo;
        }
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\Hotel\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\Hotel\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo ?? null;
    }
    /**
     * Set DeliveryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setDeliveryInfo(?\Travelport\Hotel\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        if (is_null($deliveryInfo) || (is_array($deliveryInfo) && empty($deliveryInfo))) {
            unset($this->DeliveryInfo);
        } else {
            $this->DeliveryInfo = $deliveryInfo;
        }
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age ?? null;
    }
    /**
     * Set Age value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param int $age
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setAge(?int $age = null): self
    {
        if (is_null($age) || (is_array($age) && empty($age))) {
            unset($this->Age);
        } else {
            $this->Age = $age;
        }
        
        return $this;
    }
    /**
     * Get CustomizedNameData value
     * @return \Travelport\Hotel\StructType\CustomizedNameData|null
     */
    public function getCustomizedNameData(): ?\Travelport\Hotel\StructType\CustomizedNameData
    {
        return $this->CustomizedNameData ?? null;
    }
    /**
     * Set CustomizedNameData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\CustomizedNameData $customizedNameData
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setCustomizedNameData(?\Travelport\Hotel\StructType\CustomizedNameData $customizedNameData = null): self
    {
        if (is_null($customizedNameData) || (is_array($customizedNameData) && empty($customizedNameData))) {
            unset($this->CustomizedNameData);
        } else {
            $this->CustomizedNameData = $customizedNameData;
        }
        
        return $this;
    }
    /**
     * Get AppliedProfile value
     * @return \Travelport\Hotel\StructType\AppliedProfile|null
     */
    public function getAppliedProfile(): ?\Travelport\Hotel\StructType\AppliedProfile
    {
        return $this->AppliedProfile ?? null;
    }
    /**
     * Set AppliedProfile value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Hotel\StructType\AppliedProfile $appliedProfile
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setAppliedProfile(?\Travelport\Hotel\StructType\AppliedProfile $appliedProfile = null): self
    {
        if (is_null($appliedProfile) || (is_array($appliedProfile) && empty($appliedProfile))) {
            unset($this->AppliedProfile);
        } else {
            $this->AppliedProfile = $appliedProfile;
        }
        
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
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
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
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        $this->TravelerType = $travelerType;
        
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
     * @return \Travelport\Hotel\StructType\BookingTravelerInfo
     */
    public function setGender(?string $gender = null): self
    {
        $this->Gender = $gender;
        
        return $this;
    }
}
