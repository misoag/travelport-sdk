<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelDetailsModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about requested rooms and allocation of guests per room. | Search with corporate discount IDs or negotiated rate codes. 1G/1V allows a max of 4. 1P/1J allows a max of 1 corporate discount ID and up to 30 negotiated rate
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
    protected ?\Travelport\Hotel\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The LoyaltyCard
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: common:LoyaltyCard
     * @var \Travelport\Hotel\StructType\LoyaltyCard[]
     */
    protected ?array $LoyaltyCard = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Hotel\StructType\CorporateDiscountID[]
     */
    protected ?array $CorporateDiscountID = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \Travelport\Hotel\StructType\HotelStay|null
     */
    protected ?\Travelport\Hotel\StructType\HotelStay $HotelStay = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\Hotel\StructType\NumberOfChildren|null
     */
    protected ?\Travelport\Hotel\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \Travelport\Hotel\StructType\HotelBedding[]
     */
    protected ?array $HotelBedding = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: Specify Rate Category | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $RateCategory = null;
    /**
     * The BookingGuestInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: BookingGuestInformation
     * @var \Travelport\Hotel\StructType\BookingGuestInformation|null
     */
    protected ?\Travelport\Hotel\StructType\BookingGuestInformation $BookingGuestInformation = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: The total number of adult guests per booking. Defaults to ‘1’. GDS Providers: 1G, 1V, 1P, 1J.
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfAdults = null;
    /**
     * The RateRuleDetail
     * Meta information extracted from the WSDL
     * - documentation: 'None' returns hotel property descriptive information-supported for 1p/1j,1g/1v. 'Complete' returns the complete hotel and room rate information-supported for 1p/1j,1g/1v, 'RatePlansOnly' returns hotel rate information only -
     * supported for 1p/1j, 1g/1v.
     * - default: None
     * @var string|null
     */
    protected ?string $RateRuleDetail = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - documentation: The number of rooms per booking. Defaults to ‘1’. GDS Providers 1G, 1V, 1P, 1J.
     * - default: 1
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfRooms = null;
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
     * The PreferredCurrency
     * Meta information extracted from the WSDL
     * - documentation: Alternate currency | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $PreferredCurrency = null;
    /**
     * The TotalOccupants
     * Meta information extracted from the WSDL
     * - documentation: Number of guests for the room. Supported Providers: 1P/1J
     * - use: optional
     * @var int|null
     */
    protected ?int $TotalOccupants = null;
    /**
     * The ProcessAllNegoRatesInd
     * Meta information extracted from the WSDL
     * - documentation: When false, we will process the request with all the provided negotiated rates in a single request. The request will fail when the number of negotiated rates have exceeded for that hotel chain. When true, this allows to process a
     * request for all provided negotiated rates that may exceed the hotel chain limit. Supported for 1P only.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ProcessAllNegoRatesInd = null;
    /**
     * The MaxWait
     * Meta information extracted from the WSDL
     * - documentation: Maximum wait time in milliseconds for hotel detail results.
     * @var int|null
     */
    protected ?int $MaxWait = null;
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
     * This method is responsible for validating the values passed to the setLoyaltyCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLoyaltyCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelDetailsModifiersLoyaltyCardItem) {
            // validation for constraint: itemType
            if (!$hotelDetailsModifiersLoyaltyCardItem instanceof \Travelport\Hotel\StructType\LoyaltyCard) {
                $invalidValues[] = is_object($hotelDetailsModifiersLoyaltyCardItem) ? get_class($hotelDetailsModifiersLoyaltyCardItem) : sprintf('%s(%s)', gettype($hotelDetailsModifiersLoyaltyCardItem), var_export($hotelDetailsModifiersLoyaltyCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LoyaltyCard property can only contain items of type \Travelport\Hotel\StructType\LoyaltyCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LoyaltyCard value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\LoyaltyCard[] $loyaltyCard
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setLoyaltyCard(?array $loyaltyCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($loyaltyCardArrayErrorMessage = self::validateLoyaltyCardForArrayConstraintsFromSetLoyaltyCard($loyaltyCard))) {
            throw new InvalidArgumentException($loyaltyCardArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($loyaltyCard) && count($loyaltyCard) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($loyaltyCard)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\LoyaltyCard) {
            throw new InvalidArgumentException(sprintf('The LoyaltyCard property can only contain items of type \Travelport\Hotel\StructType\LoyaltyCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->LoyaltyCard) && count($this->LoyaltyCard) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->LoyaltyCard)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCorporateDiscountID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCorporateDiscountID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelDetailsModifiersCorporateDiscountIDItem) {
            // validation for constraint: itemType
            if (!$hotelDetailsModifiersCorporateDiscountIDItem instanceof \Travelport\Hotel\StructType\CorporateDiscountID) {
                $invalidValues[] = is_object($hotelDetailsModifiersCorporateDiscountIDItem) ? get_class($hotelDetailsModifiersCorporateDiscountIDItem) : sprintf('%s(%s)', gettype($hotelDetailsModifiersCorporateDiscountIDItem), var_export($hotelDetailsModifiersCorporateDiscountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CorporateDiscountID property can only contain items of type \Travelport\Hotel\StructType\CorporateDiscountID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($corporateDiscountIDArrayErrorMessage = self::validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID($corporateDiscountID))) {
            throw new InvalidArgumentException($corporateDiscountIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($corporateDiscountID) && count($corporateDiscountID) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($corporateDiscountID)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\CorporateDiscountID) {
            throw new InvalidArgumentException(sprintf('The CorporateDiscountID property can only contain items of type \Travelport\Hotel\StructType\CorporateDiscountID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CorporateDiscountID) && count($this->CorporateDiscountID) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CorporateDiscountID)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setHotelBedding method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelBedding method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelBeddingForArrayConstraintsFromSetHotelBedding(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelDetailsModifiersHotelBeddingItem) {
            // validation for constraint: itemType
            if (!$hotelDetailsModifiersHotelBeddingItem instanceof \Travelport\Hotel\StructType\HotelBedding) {
                $invalidValues[] = is_object($hotelDetailsModifiersHotelBeddingItem) ? get_class($hotelDetailsModifiersHotelBeddingItem) : sprintf('%s(%s)', gettype($hotelDetailsModifiersHotelBeddingItem), var_export($hotelDetailsModifiersHotelBeddingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBedding property can only contain items of type \Travelport\Hotel\StructType\HotelBedding, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelBeddingArrayErrorMessage = self::validateHotelBeddingForArrayConstraintsFromSetHotelBedding($hotelBedding))) {
            throw new InvalidArgumentException($hotelBeddingArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($hotelBedding) && count($hotelBedding) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($hotelBedding)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\HotelBedding) {
            throw new InvalidArgumentException(sprintf('The HotelBedding property can only contain items of type \Travelport\Hotel\StructType\HotelBedding, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->HotelBedding) && count($this->HotelBedding) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->HotelBedding)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRateCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRateCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRateCategoryForArrayConstraintsFromSetRateCategory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelDetailsModifiersRateCategoryItem) {
            // validation for constraint: itemType
            if (!(is_int($hotelDetailsModifiersRateCategoryItem) || ctype_digit($hotelDetailsModifiersRateCategoryItem))) {
                $invalidValues[] = is_object($hotelDetailsModifiersRateCategoryItem) ? get_class($hotelDetailsModifiersRateCategoryItem) : sprintf('%s(%s)', gettype($hotelDetailsModifiersRateCategoryItem), var_export($hotelDetailsModifiersRateCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RateCategory property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RateCategory value
     * @throws InvalidArgumentException
     * @param int[] $rateCategory
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setRateCategory(?array $rateCategory = null): self
    {
        // validation for constraint: array
        if ('' !== ($rateCategoryArrayErrorMessage = self::validateRateCategoryForArrayConstraintsFromSetRateCategory($rateCategory))) {
            throw new InvalidArgumentException($rateCategoryArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($rateCategory) && count($rateCategory) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 8', count($rateCategory)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The RateCategory property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($this->RateCategory) && count($this->RateCategory) >= 8) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 8', count($this->RateCategory)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($numberOfAdults) && !(is_int($numberOfAdults) || ctype_digit($numberOfAdults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfAdults, true), gettype($numberOfAdults)), __LINE__);
        }
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
     * @uses \Travelport\Hotel\EnumType\TypeRateRuleDetail::valueIsValid()
     * @uses \Travelport\Hotel\EnumType\TypeRateRuleDetail::getValidValues()
     * @throws InvalidArgumentException
     * @param string $rateRuleDetail
     * @return \Travelport\Hotel\StructType\HotelDetailsModifiers
     */
    public function setRateRuleDetail(?string $rateRuleDetail = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Hotel\EnumType\TypeRateRuleDetail::valueIsValid($rateRuleDetail)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Hotel\EnumType\TypeRateRuleDetail', is_array($rateRuleDetail) ? implode(', ', $rateRuleDetail) : var_export($rateRuleDetail, true), implode(', ', \Travelport\Hotel\EnumType\TypeRateRuleDetail::getValidValues())), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($numberOfRooms) && !(is_int($numberOfRooms) || ctype_digit($numberOfRooms))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfRooms, true), gettype($numberOfRooms)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($preferredCurrency) && !is_string($preferredCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredCurrency, true), gettype($preferredCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($preferredCurrency) && mb_strlen((string) $preferredCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $preferredCurrency)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($totalOccupants) && !(is_int($totalOccupants) || ctype_digit($totalOccupants))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalOccupants, true), gettype($totalOccupants)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($processAllNegoRatesInd) && !is_bool($processAllNegoRatesInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processAllNegoRatesInd, true), gettype($processAllNegoRatesInd)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($maxWait) && !(is_int($maxWait) || ctype_digit($maxWait))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxWait, true), gettype($maxWait)), __LINE__);
        }
        $this->MaxWait = $maxWait;
        
        return $this;
    }
}
