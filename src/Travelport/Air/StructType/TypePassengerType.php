<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Name
     * @var \Travelport\Air\StructType\Name|null
     */
    public ?\Travelport\Air\StructType\Name $Name = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: LoyaltyCard
     * @var \Travelport\Air\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The DiscountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * - ref: DiscountCard
     * @var \Travelport\Air\StructType\DiscountCard[]
     */
    public ?array $DiscountCard = null;
    /**
     * The PersonalGeography
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PersonalGeography
     * @var \Travelport\Air\StructType\PersonalGeography|null
     */
    public ?\Travelport\Air\StructType\PersonalGeography $PersonalGeography = null;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    public ?int $Age = null;
    /**
     * The DOB
     * Meta information extracted from the WSDL
     * - documentation: Passenger Date of Birth
     * - use: optional
     * @var string|null
     */
    public ?string $DOB = null;
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
    public ?string $Gender = null;
    /**
     * The PricePTCOnly
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $PricePTCOnly = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: This value should be set for Multiple Passengers in the request.
     * - use: optional
     * @var string|null
     */
    public ?string $BookingTravelerRef = null;
    /**
     * The AccompaniedPassenger
     * Meta information extracted from the WSDL
     * - documentation: Container to identify accompanied passenger. Set true means this passenger is accompanied
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $AccompaniedPassenger = null;
    /**
     * The ResidencyType
     * Meta information extracted from the WSDL
     * - documentation: The passenger residence type.
     * - use: optional
     * @var string|null
     */
    public ?string $ResidencyType = null;
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
     * @param \Travelport\Air\StructType\Name $name
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\Air\StructType\DiscountCard[] $discountCard
     * @param \Travelport\Air\StructType\PersonalGeography $personalGeography
     * @param int $age
     * @param string $dOB
     * @param string $gender
     * @param bool $pricePTCOnly
     * @param string $bookingTravelerRef
     * @param bool $accompaniedPassenger
     * @param string $residencyType
     */
    public function __construct(string $code, ?\Travelport\Air\StructType\Name $name = null, ?array $loyaltyCard = null, ?array $discountCard = null, ?\Travelport\Air\StructType\PersonalGeography $personalGeography = null, ?int $age = null, ?string $dOB = null, ?string $gender = null, ?bool $pricePTCOnly = null, ?string $bookingTravelerRef = null, ?bool $accompaniedPassenger = false, ?string $residencyType = null)
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
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return \Travelport\Air\StructType\Name|null
     */
    public function getName(): ?\Travelport\Air\StructType\Name
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param \Travelport\Air\StructType\Name $name
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setName(?\Travelport\Air\StructType\Name $name = null): self
    {
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Air\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Air\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\LoyaltyCard $item
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function addToLoyaltyCard(\Travelport\Air\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get DiscountCard value
     * @return \Travelport\Air\StructType\DiscountCard[]
     */
    public function getDiscountCard(): ?array
    {
        return $this->DiscountCard;
    }
    /**
     * Set DiscountCard value
     * @param \Travelport\Air\StructType\DiscountCard[] $discountCard
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setDiscountCard(?array $discountCard = null): self
    {
        $this->DiscountCard = $discountCard;
        
        return $this;
    }
    /**
     * Add item to DiscountCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\DiscountCard $item
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function addToDiscountCard(\Travelport\Air\StructType\DiscountCard $item): self
    {
        $this->DiscountCard[] = $item;
        
        return $this;
    }
    /**
     * Get PersonalGeography value
     * @return \Travelport\Air\StructType\PersonalGeography|null
     */
    public function getPersonalGeography(): ?\Travelport\Air\StructType\PersonalGeography
    {
        return $this->PersonalGeography;
    }
    /**
     * Set PersonalGeography value
     * @param \Travelport\Air\StructType\PersonalGeography $personalGeography
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setPersonalGeography(?\Travelport\Air\StructType\PersonalGeography $personalGeography = null): self
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
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setAge(?int $age = null): self
    {
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
     * @return \Travelport\Air\StructType\TypePassengerType
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
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setGender(?string $gender = null): self
    {
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
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setPricePTCOnly(?bool $pricePTCOnly = null): self
    {
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
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setBookingTravelerRef(?string $bookingTravelerRef = null): self
    {
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
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setAccompaniedPassenger(?bool $accompaniedPassenger = false): self
    {
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
     * @param string $residencyType
     * @return \Travelport\Air\StructType\TypePassengerType
     */
    public function setResidencyType(?string $residencyType = null): self
    {
        $this->ResidencyType = $residencyType;
        
        return $this;
    }
}
