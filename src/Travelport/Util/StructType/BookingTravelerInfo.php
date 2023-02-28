<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\BookingTravelerName|null
     */
    protected ?\Travelport\Util\StructType\BookingTravelerName $BookingTravelerName = null;
    /**
     * The NameRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: NameRemark
     * @var \Travelport\Util\StructType\NameRemark|null
     */
    protected ?\Travelport\Util\StructType\NameRemark $NameRemark = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - documentation: Traveler Date of Birth
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DOB = null;
    /**
     * The TravelInfo
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: TravelInfo
     * @var \Travelport\Util\StructType\TravelInfo|null
     */
    protected ?\Travelport\Util\StructType\TravelInfo $TravelInfo = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Email
     * @var \Travelport\Util\StructType\Email|null
     */
    protected ?\Travelport\Util\StructType\Email $Email = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Util\StructType\PhoneNumber|null
     */
    protected ?\Travelport\Util\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\Util\StructType\TypeStructuredAddress $Address = null;
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
    protected ?string $EmergencyInfo = null;
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: DeliveryInfo
     * @var \Travelport\Util\StructType\DeliveryInfo|null
     */
    protected ?\Travelport\Util\StructType\DeliveryInfo $DeliveryInfo = null;
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
    protected ?int $Age = null;
    /**
     * The CustomizedNameData
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: CustomizedNameData
     * @var \Travelport\Util\StructType\CustomizedNameData|null
     */
    protected ?\Travelport\Util\StructType\CustomizedNameData $CustomizedNameData = null;
    /**
     * The AppliedProfile
     * Meta information extracted from the WSDL
     * - choice: TravelInfo | Email | PhoneNumber | Address | EmergencyInfo | DeliveryInfo | Age | CustomizedNameData | AppliedProfile
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: AppliedProfile
     * @var \Travelport\Util\StructType\AppliedProfile|null
     */
    protected ?\Travelport\Util\StructType\AppliedProfile $AppliedProfile = null;
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
     * The TravelerType
     * Meta information extracted from the WSDL
     * - documentation: Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $TravelerType = null;
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
    protected ?string $Gender = null;
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
     * @param \Travelport\Util\StructType\BookingTravelerName $bookingTravelerName
     * @param \Travelport\Util\StructType\NameRemark $nameRemark
     * @param string $dOB
     * @param \Travelport\Util\StructType\TravelInfo $travelInfo
     * @param \Travelport\Util\StructType\Email $email
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Util\StructType\TypeStructuredAddress $address
     * @param string $emergencyInfo
     * @param \Travelport\Util\StructType\DeliveryInfo $deliveryInfo
     * @param int $age
     * @param \Travelport\Util\StructType\CustomizedNameData $customizedNameData
     * @param \Travelport\Util\StructType\AppliedProfile $appliedProfile
     * @param string $key
     * @param string $travelerType
     * @param string $gender
     */
    public function __construct(?\Travelport\Util\StructType\BookingTravelerName $bookingTravelerName = null, ?\Travelport\Util\StructType\NameRemark $nameRemark = null, ?string $dOB = null, ?\Travelport\Util\StructType\TravelInfo $travelInfo = null, ?\Travelport\Util\StructType\Email $email = null, ?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Util\StructType\TypeStructuredAddress $address = null, ?string $emergencyInfo = null, ?\Travelport\Util\StructType\DeliveryInfo $deliveryInfo = null, ?int $age = null, ?\Travelport\Util\StructType\CustomizedNameData $customizedNameData = null, ?\Travelport\Util\StructType\AppliedProfile $appliedProfile = null, ?string $key = null, ?string $travelerType = null, ?string $gender = null)
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
     * @return \Travelport\Util\StructType\BookingTravelerName|null
     */
    public function getBookingTravelerName(): ?\Travelport\Util\StructType\BookingTravelerName
    {
        return $this->BookingTravelerName;
    }
    /**
     * Set BookingTravelerName value
     * @param \Travelport\Util\StructType\BookingTravelerName $bookingTravelerName
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setBookingTravelerName(?\Travelport\Util\StructType\BookingTravelerName $bookingTravelerName = null): self
    {
        $this->BookingTravelerName = $bookingTravelerName;
        
        return $this;
    }
    /**
     * Get NameRemark value
     * @return \Travelport\Util\StructType\NameRemark|null
     */
    public function getNameRemark(): ?\Travelport\Util\StructType\NameRemark
    {
        return $this->NameRemark;
    }
    /**
     * Set NameRemark value
     * @param \Travelport\Util\StructType\NameRemark $nameRemark
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setNameRemark(?\Travelport\Util\StructType\NameRemark $nameRemark = null): self
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
     * @return \Travelport\Util\StructType\BookingTravelerInfo
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
     * Get TravelInfo value
     * @return \Travelport\Util\StructType\TravelInfo|null
     */
    public function getTravelInfo(): ?\Travelport\Util\StructType\TravelInfo
    {
        return $this->TravelInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setTravelInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTravelInfoForChoiceConstraintFromSetTravelInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Email',
            'PhoneNumber',
            'Address',
            'EmergencyInfo',
            'DeliveryInfo',
            'Age',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TravelInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: TravelInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TravelInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TravelInfo $travelInfo
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setTravelInfo(?\Travelport\Util\StructType\TravelInfo $travelInfo = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($travelInfoChoiceErrorMessage = self::validateTravelInfoForChoiceConstraintFromSetTravelInfo($travelInfo))) {
            throw new InvalidArgumentException($travelInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($travelInfo) || (is_array($travelInfo) && empty($travelInfo))) {
            unset($this->TravelInfo);
        } else {
            $this->TravelInfo = $travelInfo;
        }
        
        return $this;
    }
    /**
     * Get Email value
     * @return \Travelport\Util\StructType\Email|null
     */
    public function getEmail(): ?\Travelport\Util\StructType\Email
    {
        return $this->Email ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmail method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmailForChoiceConstraintFromSetEmail($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'PhoneNumber',
            'Address',
            'EmergencyInfo',
            'DeliveryInfo',
            'Age',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Email can\'t be set as the property %s is already set. Only one property must be set among these properties: Email, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Email value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Email $email
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setEmail(?\Travelport\Util\StructType\Email $email = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($emailChoiceErrorMessage = self::validateEmailForChoiceConstraintFromSetEmail($email))) {
            throw new InvalidArgumentException($emailChoiceErrorMessage, __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        
        return $this;
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Util\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Util\StructType\PhoneNumber
    {
        return $this->PhoneNumber ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPhoneNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumber method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePhoneNumberForChoiceConstraintFromSetPhoneNumber($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'Address',
            'EmergencyInfo',
            'DeliveryInfo',
            'Age',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property PhoneNumber can\'t be set as the property %s is already set. Only one property must be set among these properties: PhoneNumber, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set PhoneNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setPhoneNumber(?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($phoneNumberChoiceErrorMessage = self::validatePhoneNumberForChoiceConstraintFromSetPhoneNumber($phoneNumber))) {
            throw new InvalidArgumentException($phoneNumberChoiceErrorMessage, __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber;
        }
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Travelport\Util\StructType\TypeStructuredAddress|null
     */
    public function getAddress(): ?\Travelport\Util\StructType\TypeStructuredAddress
    {
        return $this->Address ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAddressForChoiceConstraintFromSetAddress($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'PhoneNumber',
            'EmergencyInfo',
            'DeliveryInfo',
            'Age',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Address can\'t be set as the property %s is already set. Only one property must be set among these properties: Address, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Address value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeStructuredAddress $address
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setAddress(?\Travelport\Util\StructType\TypeStructuredAddress $address = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($addressChoiceErrorMessage = self::validateAddressForChoiceConstraintFromSetAddress($address))) {
            throw new InvalidArgumentException($addressChoiceErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setEmergencyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmergencyInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEmergencyInfoForChoiceConstraintFromSetEmergencyInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'PhoneNumber',
            'Address',
            'DeliveryInfo',
            'Age',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property EmergencyInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: EmergencyInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set EmergencyInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $emergencyInfo
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setEmergencyInfo(?string $emergencyInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($emergencyInfo) && !is_string($emergencyInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emergencyInfo, true), gettype($emergencyInfo)), __LINE__);
        }
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($emergencyInfoChoiceErrorMessage = self::validateEmergencyInfoForChoiceConstraintFromSetEmergencyInfo($emergencyInfo))) {
            throw new InvalidArgumentException($emergencyInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($emergencyInfo) || (is_array($emergencyInfo) && empty($emergencyInfo))) {
            unset($this->EmergencyInfo);
        } else {
            $this->EmergencyInfo = $emergencyInfo;
        }
        
        return $this;
    }
    /**
     * Get DeliveryInfo value
     * @return \Travelport\Util\StructType\DeliveryInfo|null
     */
    public function getDeliveryInfo(): ?\Travelport\Util\StructType\DeliveryInfo
    {
        return $this->DeliveryInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDeliveryInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeliveryInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeliveryInfoForChoiceConstraintFromSetDeliveryInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'PhoneNumber',
            'Address',
            'EmergencyInfo',
            'Age',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DeliveryInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: DeliveryInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeliveryInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\DeliveryInfo $deliveryInfo
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setDeliveryInfo(?\Travelport\Util\StructType\DeliveryInfo $deliveryInfo = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($deliveryInfoChoiceErrorMessage = self::validateDeliveryInfoForChoiceConstraintFromSetDeliveryInfo($deliveryInfo))) {
            throw new InvalidArgumentException($deliveryInfoChoiceErrorMessage, __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setAge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAge method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAgeForChoiceConstraintFromSetAge($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'PhoneNumber',
            'Address',
            'EmergencyInfo',
            'DeliveryInfo',
            'CustomizedNameData',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Age can\'t be set as the property %s is already set. Only one property must be set among these properties: Age, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Age value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $age
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($ageChoiceErrorMessage = self::validateAgeForChoiceConstraintFromSetAge($age))) {
            throw new InvalidArgumentException($ageChoiceErrorMessage, __LINE__);
        }
        if (is_null($age) || (is_array($age) && empty($age))) {
            unset($this->Age);
        } else {
            $this->Age = $age;
        }
        
        return $this;
    }
    /**
     * Get CustomizedNameData value
     * @return \Travelport\Util\StructType\CustomizedNameData|null
     */
    public function getCustomizedNameData(): ?\Travelport\Util\StructType\CustomizedNameData
    {
        return $this->CustomizedNameData ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCustomizedNameData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomizedNameData method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCustomizedNameDataForChoiceConstraintFromSetCustomizedNameData($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'PhoneNumber',
            'Address',
            'EmergencyInfo',
            'DeliveryInfo',
            'Age',
            'AppliedProfile',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CustomizedNameData can\'t be set as the property %s is already set. Only one property must be set among these properties: CustomizedNameData, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CustomizedNameData value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CustomizedNameData $customizedNameData
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setCustomizedNameData(?\Travelport\Util\StructType\CustomizedNameData $customizedNameData = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($customizedNameDataChoiceErrorMessage = self::validateCustomizedNameDataForChoiceConstraintFromSetCustomizedNameData($customizedNameData))) {
            throw new InvalidArgumentException($customizedNameDataChoiceErrorMessage, __LINE__);
        }
        if (is_null($customizedNameData) || (is_array($customizedNameData) && empty($customizedNameData))) {
            unset($this->CustomizedNameData);
        } else {
            $this->CustomizedNameData = $customizedNameData;
        }
        
        return $this;
    }
    /**
     * Get AppliedProfile value
     * @return \Travelport\Util\StructType\AppliedProfile|null
     */
    public function getAppliedProfile(): ?\Travelport\Util\StructType\AppliedProfile
    {
        return $this->AppliedProfile ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAppliedProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppliedProfile method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAppliedProfileForChoiceConstraintFromSetAppliedProfile($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TravelInfo',
            'Email',
            'PhoneNumber',
            'Address',
            'EmergencyInfo',
            'DeliveryInfo',
            'Age',
            'CustomizedNameData',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property AppliedProfile can\'t be set as the property %s is already set. Only one property must be set among these properties: AppliedProfile, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AppliedProfile value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AppliedProfile $appliedProfile
     * @return \Travelport\Util\StructType\BookingTravelerInfo
     */
    public function setAppliedProfile(?\Travelport\Util\StructType\AppliedProfile $appliedProfile = null): self
    {
        // validation for constraint: choice(TravelInfo, Email, PhoneNumber, Address, EmergencyInfo, DeliveryInfo, Age, CustomizedNameData, AppliedProfile)
        if ('' !== ($appliedProfileChoiceErrorMessage = self::validateAppliedProfileForChoiceConstraintFromSetAppliedProfile($appliedProfile))) {
            throw new InvalidArgumentException($appliedProfileChoiceErrorMessage, __LINE__);
        }
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
     * @return \Travelport\Util\StructType\BookingTravelerInfo
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
     * @return \Travelport\Util\StructType\BookingTravelerInfo
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
     * @return \Travelport\Util\StructType\BookingTravelerInfo
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
}
