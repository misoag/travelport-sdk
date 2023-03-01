<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRulesModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Hotel Rules request
 * @subpackage Structs
 */
class HotelRulesModifiers extends AbstractStructBase
{
    /**
     * The PermittedProviders
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PermittedProviders
     * @var \Travelport\UniversalRecord\StructType\PermittedProviders|null
     */
    public ?\Travelport\UniversalRecord\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \Travelport\UniversalRecord\StructType\NumberOfChildren|null
     */
    public ?\Travelport\UniversalRecord\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    public ?array $HotelBedding = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: Specify Rate Category | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    public ?int $RateCategory = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    public ?array $CorporateDiscountID = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: Defaults to 1 if not specified
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfAdults = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - documentation: The numbers of rooms,defaults to 1 if not specified
     * - default: 1
     * - use: optional
     * @var int|null
     */
    public ?int $NumberOfRooms = null;
    /**
     * The TotalOccupants
     * Meta information extracted from the WSDL
     * - documentation: Number of guests for the room. Supported Providers: 1P
     * - use: optional
     * @var int|null
     */
    public ?int $TotalOccupants = null;
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
     * Constructor method for HotelRulesModifiers
     * @uses HotelRulesModifiers::setPermittedProviders()
     * @uses HotelRulesModifiers::setNumberOfChildren()
     * @uses HotelRulesModifiers::setHotelBedding()
     * @uses HotelRulesModifiers::setRateCategory()
     * @uses HotelRulesModifiers::setCorporateDiscountID()
     * @uses HotelRulesModifiers::setNumberOfAdults()
     * @uses HotelRulesModifiers::setNumberOfRooms()
     * @uses HotelRulesModifiers::setTotalOccupants()
     * @uses HotelRulesModifiers::setKey()
     * @param \Travelport\UniversalRecord\StructType\PermittedProviders $permittedProviders
     * @param \Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @param int $rateCategory
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @param int $numberOfAdults
     * @param int $numberOfRooms
     * @param int $totalOccupants
     * @param string $key
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\PermittedProviders $permittedProviders = null, ?\Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren = null, ?array $hotelBedding = null, ?int $rateCategory = null, ?array $corporateDiscountID = null, ?int $numberOfAdults = null, ?int $numberOfRooms = 1, ?int $totalOccupants = null, ?string $key = null)
    {
        $this
            ->setPermittedProviders($permittedProviders)
            ->setNumberOfChildren($numberOfChildren)
            ->setHotelBedding($hotelBedding)
            ->setRateCategory($rateCategory)
            ->setCorporateDiscountID($corporateDiscountID)
            ->setNumberOfAdults($numberOfAdults)
            ->setNumberOfRooms($numberOfRooms)
            ->setTotalOccupants($totalOccupants)
            ->setKey($key);
    }
    /**
     * Get PermittedProviders value
     * @return \Travelport\UniversalRecord\StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\Travelport\UniversalRecord\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \Travelport\UniversalRecord\StructType\PermittedProviders $permittedProviders
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setPermittedProviders(?\Travelport\UniversalRecord\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \Travelport\UniversalRecord\StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\Travelport\UniversalRecord\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setNumberOfChildren(?\Travelport\UniversalRecord\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get HotelBedding value
     * @return \Travelport\UniversalRecord\StructType\HotelBedding[]
     */
    public function getHotelBedding(): ?array
    {
        return $this->HotelBedding;
    }
    /**
     * Set HotelBedding value
     * @param \Travelport\UniversalRecord\StructType\HotelBedding[] $hotelBedding
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setHotelBedding(?array $hotelBedding = null): self
    {
        $this->HotelBedding = $hotelBedding;
        
        return $this;
    }
    /**
     * Add item to HotelBedding value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\HotelBedding $item
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function addToHotelBedding(\Travelport\UniversalRecord\StructType\HotelBedding $item): self
    {
        $this->HotelBedding[] = $item;
        
        return $this;
    }
    /**
     * Get RateCategory value
     * @return int|null
     */
    public function getRateCategory(): ?int
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param int $rateCategory
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setRateCategory(?int $rateCategory = null): self
    {
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\UniversalRecord\StructType\CorporateDiscountID[]
     */
    public function getCorporateDiscountID(): ?array
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CorporateDiscountID $item
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function addToCorporateDiscountID(\Travelport\UniversalRecord\StructType\CorporateDiscountID $item): self
    {
        $this->CorporateDiscountID[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setNumberOfAdults(?int $numberOfAdults = null): self
    {
        $this->NumberOfAdults = $numberOfAdults;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setNumberOfRooms(?int $numberOfRooms = 1): self
    {
        $this->NumberOfRooms = $numberOfRooms;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setTotalOccupants(?int $totalOccupants = null): self
    {
        $this->TotalOccupants = $totalOccupants;
        
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
     * @return \Travelport\UniversalRecord\StructType\HotelRulesModifiers
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
}
