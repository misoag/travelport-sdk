<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePassengerType StructType
 * Meta information extracted from the WSDL
 * - documentation: Passenger personal geography detail to be sent to Host for accessing location specific fares | Optional passenger Name with associated LoyaltyCard may provide benefit when pricing itineraries using Low Cost Carriers. In general, most
 * carriers do not consider passenger LoyalyCard information when initially pricing itineraries. | Passenger type code with optional age information
 * @subpackage Structs
 */
class TypePassengerType extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The 3-char IATA passenger type code | Passenger Type Code (ADT, A2B5)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 3
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Name
     * @var \Travelport\Util\StructType\Name|null
     */
    protected ?\Travelport\Util\StructType\Name $Name = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LoyaltyCard
     * @var \Travelport\Util\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: DiscountCard
     * @var \Travelport\Util\StructType\DiscountCard[]
     */
    protected ?array $DiscountCard = null;
    /**
     * The PersonalGeography
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PersonalGeography
     * @var \Travelport\Util\StructType\PersonalGeography|null
     */
    protected ?\Travelport\Util\StructType\PersonalGeography $PersonalGeography = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - documentation: Passenger Date of Birth
     * - use: optional
     * @var string|null
     */
    protected ?string $DOB = null;
    /**
     * The Gender
     * Meta information extracted from the WSDL
     * - documentation: The passenger gender type | The gender of a person. Data is defined in Ref Pub
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Gender = null;
    /**
     * The PricePTCOnly
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PricePTCOnly = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: This value should be set for Multiple Passengers in the request.
     * - use: optional
     * @var string|null
     */
    protected ?string $BookingTravelerRef = null;
    /**
     * The AccompaniedPassenger
     * Meta information extracted from the WSDL
     * - documentation: Container to identify accompanied passenger. Set true means this passenger is accompanied
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AccompaniedPassenger = null;
    /**
     * The ResidencyType
     * Meta information extracted from the WSDL
     * - documentation: The passenger residence type.
     * - use: optional
     * @var string|null
     */
    protected ?string $ResidencyType = null;
    /**
     * Constructor method for typePassengerType
     * @uses TypePassengerType::setCode()
     * @uses TypePassengerType::setName()
     * @uses TypePassengerType::setLoyaltyCard()
     * @uses TypePassengerType::setDiscountCard()
     * @uses TypePassengerType::setPersonalGeography()
     * @uses TypePassengerType::setAge()
     * @uses TypePassengerType::setDOB()
     * @uses TypePassengerType::setGender()
     * @uses TypePassengerType::setPricePTCOnly()
     * @uses TypePassengerType::setBookingTravelerRef()
     * @uses TypePassengerType::setAccompaniedPassenger()
     * @uses TypePassengerType::setResidencyType()
     * @param string $code
     * @param \Travelport\Util\StructType\Name $name
     * @param \Travelport\Util\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\Util\StructType\DiscountCard[] $discountCard
     * @param \Travelport\Util\StructType\PersonalGeography $personalGeography
     * @param int $age
     * @param string $dOB
     * @param string $gender
     * @param bool $pricePTCOnly
     * @param string $bookingTravelerRef
     * @param bool $accompaniedPassenger
     * @param string $residencyType
     */
    public function __construct(string $code, ?\Travelport\Util\StructType\Name $name = null, ?array $loyaltyCard = null, ?array $discountCard = null, ?\Travelport\Util\StructType\PersonalGeography $personalGeography = null, ?int $age = null, ?string $dOB = null, ?string $gender = null, ?bool $pricePTCOnly = null, ?string $bookingTravelerRef = null, ?bool $accompaniedPassenger = false, ?string $residencyType = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setLoyaltyCard($loyaltyCard)
            ->setDiscountCard($discountCard)
            ->setPersonalGeography($personalGeography)
            ->setAge($age)
            ->setDOB($dOB)
            ->setGender($gender)
            ->setPricePTCOnly($pricePTCOnly)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setAccompaniedPassenger($accompaniedPassenger)
            ->setResidencyType($residencyType);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($code) && mb_strlen((string) $code) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $code)), __LINE__);
        }
        // validation for constraint: minLength(3)
        if (!is_null($code) && mb_strlen((string) $code) < 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 3', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Util\StructType\Name|null
     */
    public function getName(): ?\Travelport\Util\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Util\StructType\Name $name
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setName(?\Travelport\Util\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Util\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typePassengerTypeLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$typePassengerTypeLoyaltyCardItem instanceof \Travelport\Util\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($typePassengerTypeLoyaltyCardItem) ? get_class($typePassengerTypeLoyaltyCardItem) : sprintf('%s(%s)', gettype($typePassengerTypeLoyaltyCardItem), var_export($typePassengerTypeLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\Util\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($loyaltyCard)), __LINE__);
        }
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LoyaltyCard $item
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function addToLoyaltyCard(\Travelport\Util\StructType\LoyaltyCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\Util\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->LoyaltyCard)), __LINE__);
        }
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Util\StructType\DiscountCard[]
     */
    public function getDiscountCard(): ?array
    {
        return $this->DiscountCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDiscountCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountCardForArrayConstraintFromSetDiscountCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typePassengerTypeDiscountCardItem) {
            // validation for constraint: itemType
            if (!$typePassengerTypeDiscountCardItem instanceof \Travelport\Util\StructType\DiscountCard) {
                $invalidValues[] = is_object($typePassengerTypeDiscountCardItem) ? get_class($typePassengerTypeDiscountCardItem) : sprintf('%s(%s)', gettype($typePassengerTypeDiscountCardItem), var_export($typePassengerTypeDiscountCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DiscountCard property can only contain items of type \Travelport\Util\StructType\DiscountCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\DiscountCard[] $discountCard
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setDiscountCard(?array $discountCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($discountCardArrayErrorMessage = self::validateDiscountCardForArrayConstraintFromSetDiscountCard($discountCard))) {
            throw new InvalidArgumentException($discountCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($discountCard) && count($discountCard) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($discountCard)), __LINE__);
        }
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\DiscountCard $item
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function addToDiscountCard(\Travelport\Util\StructType\DiscountCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\DiscountCard) {
            throw new InvalidArgumentException(sprintf('The DiscountCard property can only contain items of type \Travelport\Util\StructType\DiscountCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->DiscountCard) && count($this->DiscountCard) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->DiscountCard)), __LINE__);
        }
        $this->DiscountCard[] = $item;
        
        return $this;
    }
    /**
     * Get PersonalGeography value
     * @return \Travelport\Util\StructType\PersonalGeography|null
     */
    public function getPersonalGeography(): ?\Travelport\Util\StructType\PersonalGeography
    {
        return $this->PersonalGeography;
    }
    /**
     * Set PersonalGeography value
     * @param \Travelport\Util\StructType\PersonalGeography $personalGeography
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setPersonalGeography(?\Travelport\Util\StructType\PersonalGeography $personalGeography = null): self
    {
        $this->PersonalGeography = $personalGeography;
        
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
     * @return \Travelport\Util\StructType\TypePassengerType
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
     * @return \Travelport\Util\StructType\TypePassengerType
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
     * @return \Travelport\Util\StructType\TypePassengerType
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
     * Get PricePTCOnly value
     * @return bool|null
     */
    public function getPricePTCOnly(): ?bool
    {
        return $this->PricePTCOnly;
    }
    /**
     * Set PricePTCOnly value
     * @param bool $pricePTCOnly
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setPricePTCOnly(?bool $pricePTCOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($pricePTCOnly) && !is_bool($pricePTCOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pricePTCOnly, true), gettype($pricePTCOnly)), __LINE__);
        }
        $this->PricePTCOnly = $pricePTCOnly;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return string|null
     */
    public function getBookingTravelerRef(): ?string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get AccompaniedPassenger value
     * @return bool|null
     */
    public function getAccompaniedPassenger(): ?bool
    {
        return $this->AccompaniedPassenger;
    }
    /**
     * Set AccompaniedPassenger value
     * @param bool $accompaniedPassenger
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setAccompaniedPassenger(?bool $accompaniedPassenger = false): self
    {
        // validation for constraint: boolean
        if (!is_null($accompaniedPassenger) && !is_bool($accompaniedPassenger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($accompaniedPassenger, true), gettype($accompaniedPassenger)), __LINE__);
        }
        $this->AccompaniedPassenger = $accompaniedPassenger;
        
        return $this;
    }
    /**
     * Get ResidencyType value
     * @return string|null
     */
    public function getResidencyType(): ?string
    {
        return $this->ResidencyType;
    }
    /**
     * Set ResidencyType value
     * @uses \Travelport\Util\EnumType\TypeResidency::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeResidency::getValidValues()
     * @throws InvalidArgumentException
     * @param string $residencyType
     * @return \Travelport\Util\StructType\TypePassengerType
     */
    public function setResidencyType(?string $residencyType = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeResidency::valueIsValid($residencyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeResidency', is_array($residencyType) ? implode(', ', $residencyType) : var_export($residencyType, true), implode(', ', \Travelport\Util\EnumType\TypeResidency::getValidValues())), __LINE__);
        }
        $this->ResidencyType = $residencyType;
        
        return $this;
    }
}
