<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDetailsModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about requested rooms and allocation of guests per room. | Search with corporate discount IDs or negotiated rate codes. 1G/1V allows a max of 4. 1P allows a max of 1 corporate discount ID and up to 30 negotiated rate
 * codes. Support for this function is hotel supplier dependent. | Controls and switches for the Hotel Details request
 * @subpackage Structs
 */
class HotelDetailsModifiers extends AbstractStructBase
{
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\Hotel\StructType\LoyaltyCard[]
     */
    public ?array $LoyaltyCard = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    public ?array $CorporateDiscountID = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \Travelport\Hotel\StructType\HotelStay|null
     */
    public ?\Travelport\Hotel\StructType\HotelStay $HotelStay = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    public ?\Travelport\Hotel\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \Travelport\Hotel\StructType\HotelBedding[]
     */
    public ?array $HotelBedding = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: Specify Rate Category | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var int[]
     */
    public ?array $RateCategory = null;
    /**
     * The BookingGuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BookingGuestInformation
     * @var \Travelport\Hotel\StructType\BookingGuestInformation|null
     */
    public ?\Travelport\Hotel\StructType\BookingGuestInformation $BookingGuestInformation = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: The total number of adult guests per booking. Defaults to ‘1’. GDS Providers: 1G, 1V, 1P.
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfAdults = null;
    /**
     * The RateRuleDetail
     * Meta information extracted from the WSDL
     * - documentation: 'None' returns hotel property descriptive information-supported for 1p,1g/1v. 'Complete' returns the complete hotel and room rate information-supported for 1p,1g/1v, 'RatePlansOnly' returns hotel rate information only - supported for
     * 1p, 1g/1v.
     * - default: None
     * @var string|null
     */
    public ?string $RateRuleDetail = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - documentation: The number of rooms per booking. Defaults to ‘1’. GDS Providers 1G, 1V, 1P.
     * - default: 1
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfRooms = null;
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
     * The PreferredCurrency
     * Meta information extracted from the WSDL
     * - documentation: Alternate currency | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $PreferredCurrency = null;
    /**
     * The TotalOccupants
     * Meta information extracted from the WSDL
     * - documentation: Number of guests for the room. Supported Providers: 1P
     * - use: optional
     * @var int|null
     */
    public ?int $TotalOccupants = null;
    /**
     * The ProcessAllNegoRatesInd
     * Meta information extracted from the WSDL
     * - documentation: When false, we will process the request with all the provided negotiated rates in a single request. The request will fail when the number of negotiated rates have exceeded for that hotel chain. When true, this allows to process a
     * request for all provided negotiated rates that may exceed the hotel chain limit. Supported for 1P only.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ProcessAllNegoRatesInd = null;
    /**
     * The MaxWait
     * Meta information extracted from the WSDL
     * - documentation: Maximum wait time in milliseconds for hotel detail results.
     * @var int|null
     */
    public ?int $MaxWait = null;
    /**
     * Constructor method for HotelDetailsModifiers
     * @uses HotelDetailsModifiers::setPermittedProviders()
     * @uses HotelDetailsModifiers::setLoyaltyCard()
     * @uses HotelDetailsModifiers::setCorporateDiscountID()
     * @uses HotelDetailsModifiers::setHotelStay()
     * @uses HotelDetailsModifiers::setNumberOfChildren()
     * @uses HotelDetailsModifiers::setHotelBedding()
     * @uses HotelDetailsModifiers::setRateCategory()
     * @uses HotelDetailsModifiers::setBookingGuestInformation()
     * @uses HotelDetailsModifiers::setNumberOfAdults()
     * @uses HotelDetailsModifiers::setRateRuleDetail()
     * @uses HotelDetailsModifiers::setNumberOfRooms()
     * @uses HotelDetailsModifiers::setKey()
     * @uses HotelDetailsModifiers::setPreferredCurrency()
     * @uses HotelDetailsModifiers::setTotalOccupants()
     * @uses HotelDetailsModifiers::setProcessAllNegoRatesInd()
     * @uses HotelDetailsModifiers::setMaxWait()
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @param \Travelport\Hotel\StructType\LoyaltyCard[] $loyaltyCard
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @param \Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren
     * @param \Travelport\Hotel\StructType\HotelBedding[] $hotelBedding
     * @param int[] $rateCategory
     * @param \Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation
     * @param int $numberOfAdults
     * @param string $rateRuleDetail
     * @param int $numberOfRooms
     * @param string $key
     * @param string $preferredCurrency
     * @param int $totalOccupants
     * @param bool $processAllNegoRatesInd
     * @param int $maxWait
     */
    public function __construct(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null, ?array $loyaltyCard = null, ?array $corporateDiscountID = null, ?\Travelport\Hotel\StructType\HotelStay $hotelStay = null, ?\Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren = null, ?array $hotelBedding = null, ?array $rateCategory = null, ?\Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation = null, ?int $numberOfAdults = null, ?string $rateRuleDetail = null, ?int $numberOfRooms = 1, ?string $key = null, ?string $preferredCurrency = null, ?int $totalOccupants = null, ?bool $processAllNegoRatesInd = false, ?int $maxWait = null)
    {
        $this
            ->setPermittedProviders($permittedProviders)
            ->setLoyaltyCard($loyaltyCard)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setHotelStay($hotelStay)
            ->setNumberOfChildren($numberOfChildren)
            ->setHotelBedding($hotelBedding)
            ->setRateCategory($rateCategory)
            ->setBookingGuestInformation($bookingGuestInformation)
            ->setNumberOfAdults($numberOfAdults)
            ->setRateRuleDetail($rateRuleDetail)
            ->setNumberOfRooms($numberOfRooms)
            ->setKey($key)
            ->setPreferredCurrency($preferredCurrency)
            ->setTotalOccupants($totalOccupants)
            ->setProcessAllNegoRatesInd($processAllNegoRatesInd)
            ->setMaxWait($maxWait);
    }
    /**
     * Get PermittedProviders value
     * @return \Travelport\Hotel\StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\Travelport\Hotel\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \Travelport\Hotel\StructType\PermittedProviders $permittedProviders
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setPermittedProviders(?\Travelport\Hotel\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get LoyaltyCard value
     * @return \Travelport\Hotel\StructType\LoyaltyCard[]
     */
    public function getLoyaltyCard(): ?array
    {
        return $this->LoyaltyCard;
    }
    /**
     * Set LoyaltyCard value
     * @param \Travelport\Hotel\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        $this->LoyaltyCard = $loyaltyCard;
        
        return $this;
    }
    /**
     * Add item to LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\LoyaltyCard $item
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function addToLoyaltyCard(\Travelport\Hotel\StructType\LoyaltyCard $item): self
    {
        $this->LoyaltyCard[] = $item;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CorporateDiscountID $item
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function addToCorporateDiscountID(\Travelport\Hotel\StructType\CorporateDiscountID $item): self
    {
        $this->CorporateDiscountID[] = $item;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\Hotel\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\Hotel\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setHotelStay(?\Travelport\Hotel\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\Travelport\Hotel\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setNumberOfChildren(?\Travelport\Hotel\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get HotelBedding value
     * @return \Travelport\Hotel\StructType\HotelBedding[]
     */
    public function getHotelBedding(): ?array
    {
        return $this->HotelBedding;
    }
    /**
     * Set HotelBedding value
     * @param \Travelport\Hotel\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        $this->HotelBedding = $hotelBedding;
        
        return $this;
    }
    /**
     * Add item to HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelBedding $item
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function addToHotelBedding(\Travelport\Hotel\StructType\HotelBedding $item): self
    {
        $this->HotelBedding[] = $item;
        
        return $this;
    }
    /**
     * Get RateCategory value
     * @return int[]
     */
    public function getRateCategory(): ?array
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param int[] $rateCategory
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setRateCategory(?array $rateCategory = null): self
    {
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Add item to RateCategory value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function addToRateCategory(int $item): self
    {
        $this->RateCategory[] = $item;
        
        return $this;
    }
    /**
     * Get BookingGuestInformation value
     * @return \Travelport\Hotel\StructType\BookingGuestInformation|null
     */
    public function getBookingGuestInformation(): ?\Travelport\Hotel\StructType\BookingGuestInformation
    {
        return $this->BookingGuestInformation;
    }
    /**
     * Set BookingGuestInformation value
     * @param \Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setBookingGuestInformation(?\Travelport\Hotel\StructType\BookingGuestInformation $bookingGuestInformation = null): self
    {
        $this->BookingGuestInformation = $bookingGuestInformation;
        
        return $this;
    }
    /**
     * Get NumberOfAdults value
     * @return int|null
     */
    public function getNumberOfAdults(): ?int
    {
        return $this->NumberOfAdults;
    }
    /**
     * Set NumberOfAdults value
     * @param int $numberOfAdults
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setNumberOfAdults(?int $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
        return $this;
    }
    /**
     * Get RateRuleDetail value
     * @return string|null
     */
    public function getRateRuleDetail(): ?string
    {
        return $this->RateRuleDetail;
    }
    /**
     * Set RateRuleDetail value
     * @param string $rateRuleDetail
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setRateRuleDetail(?string $rateRuleDetail = null): self
    {
        $this->RateRuleDetail = $rateRuleDetail;
        
        return $this;
    }
    /**
     * Get NumberOfRooms value
     * @return int|null
     */
    public function getNumberOfRooms(): ?int
    {
        return $this->NumberOfRooms;
    }
    /**
     * Set NumberOfRooms value
     * @param int $numberOfRooms
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setNumberOfRooms(?int $numberOfRooms = 1): self
    {
        $this->NumberOfRooms = $numberOfRooms;
        
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
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PreferredCurrency value
     * @return string|null
     */
    public function getPreferredCurrency(): ?string
    {
        return $this->PreferredCurrency;
    }
    /**
     * Set PreferredCurrency value
     * @param string $preferredCurrency
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setPreferredCurrency(?string $preferredCurrency = null): self
    {
        $this->PreferredCurrency = $preferredCurrency;
        
        return $this;
    }
    /**
     * Get TotalOccupants value
     * @return int|null
     */
    public function getTotalOccupants(): ?int
    {
        return $this->TotalOccupants;
    }
    /**
     * Set TotalOccupants value
     * @param int $totalOccupants
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setTotalOccupants(?int $totalOccupants = null): self
    {
        $this->TotalOccupants = $totalOccupants;
        
        return $this;
    }
    /**
     * Get ProcessAllNegoRatesInd value
     * @return bool|null
     */
    public function getProcessAllNegoRatesInd(): ?bool
    {
        return $this->ProcessAllNegoRatesInd;
    }
    /**
     * Set ProcessAllNegoRatesInd value
     * @param bool $processAllNegoRatesInd
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setProcessAllNegoRatesInd(?bool $processAllNegoRatesInd = false): self
    {
        $this->ProcessAllNegoRatesInd = $processAllNegoRatesInd;
        
        return $this;
    }
    /**
     * Get MaxWait value
     * @return int|null
     */
    public function getMaxWait(): ?int
    {
        return $this->MaxWait;
    }
    /**
     * Set MaxWait value
     * @param int $maxWait
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setMaxWait(?int $maxWait = null): self
    {
        $this->MaxWait = $maxWait;
        
        return $this;
    }
}
