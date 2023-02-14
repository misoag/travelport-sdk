<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
     * @var \StructType\PermittedProviders|null
     */
    protected ?\StructType\PermittedProviders $PermittedProviders = null;
    /**
     * The NumberOfChildren
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: NumberOfChildren
     * @var \StructType\NumberOfChildren|null
     */
    protected ?\StructType\NumberOfChildren $NumberOfChildren = null;
    /**
     * The HotelBedding
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: HotelBedding
     * @var \StructType\HotelBedding[]
     */
    protected ?array $HotelBedding = null;
    /**
     * The RateCategory
     * Meta information extracted from the WSDL
     * - documentation: Specify Rate Category | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $RateCategory = null;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \StructType\CorporateDiscountID[]
     */
    protected ?array $CorporateDiscountID = null;
    /**
     * The NumberOfAdults
     * Meta information extracted from the WSDL
     * - documentation: Defaults to 1 if not specified
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfAdults = null;
    /**
     * The NumberOfRooms
     * Meta information extracted from the WSDL
     * - documentation: The numbers of rooms,defaults to 1 if not specified
     * - default: 1
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfRooms = null;
    /**
     * The TotalOccupants
     * Meta information extracted from the WSDL
     * - documentation: Number of guests for the room. Supported Providers: 1P
     * - use: optional
     * @var int|null
     */
    protected ?int $TotalOccupants = null;
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
     * @param \StructType\PermittedProviders $permittedProviders
     * @param \StructType\NumberOfChildren $numberOfChildren
     * @param \StructType\HotelBedding[] $hotelBedding
     * @param int $rateCategory
     * @param \StructType\CorporateDiscountID[] $corporateDiscountID
     * @param int $numberOfAdults
     * @param int $numberOfRooms
     * @param int $totalOccupants
     * @param string $key
     */
    public function __construct(?\StructType\PermittedProviders $permittedProviders = null, ?\StructType\NumberOfChildren $numberOfChildren = null, ?array $hotelBedding = null, ?int $rateCategory = null, ?array $corporateDiscountID = null, ?int $numberOfAdults = null, ?int $numberOfRooms = 1, ?int $totalOccupants = null, ?string $key = null)
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
     * @return \StructType\PermittedProviders|null
     */
    public function getPermittedProviders(): ?\StructType\PermittedProviders
    {
        return $this->PermittedProviders;
    }
    /**
     * Set PermittedProviders value
     * @param \StructType\PermittedProviders $permittedProviders
     * @return \StructType\HotelRulesModifiers
     */
    public function setPermittedProviders(?\StructType\PermittedProviders $permittedProviders = null): self
    {
        $this->PermittedProviders = $permittedProviders;
        
        return $this;
    }
    /**
     * Get NumberOfChildren value
     * @return \StructType\NumberOfChildren|null
     */
    public function getNumberOfChildren(): ?\StructType\NumberOfChildren
    {
        return $this->NumberOfChildren;
    }
    /**
     * Set NumberOfChildren value
     * @param \StructType\NumberOfChildren $numberOfChildren
     * @return \StructType\HotelRulesModifiers
     */
    public function setNumberOfChildren(?\StructType\NumberOfChildren $numberOfChildren = null): self
    {
        $this->NumberOfChildren = $numberOfChildren;
        
        return $this;
    }
    /**
     * Get HotelBedding value
     * @return \StructType\HotelBedding[]
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
        foreach ($values as $hotelRulesModifiersHotelBeddingItem) {
            // validation for constraint: itemType
            if (!$hotelRulesModifiersHotelBeddingItem instanceof \StructType\HotelBedding) {
                $invalidValues[] = is_object($hotelRulesModifiersHotelBeddingItem) ? get_class($hotelRulesModifiersHotelBeddingItem) : sprintf('%s(%s)', gettype($hotelRulesModifiersHotelBeddingItem), var_export($hotelRulesModifiersHotelBeddingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelBedding property can only contain items of type \StructType\HotelBedding, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelBedding value
     * @throws InvalidArgumentException
     * @param \StructType\HotelBedding[] $hotelBedding
     * @return \StructType\HotelRulesModifiers
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
     * @param \StructType\HotelBedding $item
     * @return \StructType\HotelRulesModifiers
     */
    public function addToHotelBedding(\StructType\HotelBedding $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HotelBedding) {
            throw new InvalidArgumentException(sprintf('The HotelBedding property can only contain items of type \StructType\HotelBedding, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return int|null
     */
    public function getRateCategory(): ?int
    {
        return $this->RateCategory;
    }
    /**
     * Set RateCategory value
     * @param int $rateCategory
     * @return \StructType\HotelRulesModifiers
     */
    public function setRateCategory(?int $rateCategory = null): self
    {
        // validation for constraint: int
        if (!is_null($rateCategory) && !(is_int($rateCategory) || ctype_digit($rateCategory))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rateCategory, true), gettype($rateCategory)), __LINE__);
        }
        $this->RateCategory = $rateCategory;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \StructType\CorporateDiscountID[]
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
        foreach ($values as $hotelRulesModifiersCorporateDiscountIDItem) {
            // validation for constraint: itemType
            if (!$hotelRulesModifiersCorporateDiscountIDItem instanceof \StructType\CorporateDiscountID) {
                $invalidValues[] = is_object($hotelRulesModifiersCorporateDiscountIDItem) ? get_class($hotelRulesModifiersCorporateDiscountIDItem) : sprintf('%s(%s)', gettype($hotelRulesModifiersCorporateDiscountIDItem), var_export($hotelRulesModifiersCorporateDiscountIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CorporateDiscountID property can only contain items of type \StructType\CorporateDiscountID, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \StructType\CorporateDiscountID[] $corporateDiscountID
     * @return \StructType\HotelRulesModifiers
     */
    public function setCorporateDiscountID(?array $corporateDiscountID = null): self
    {
        // validation for constraint: array
        if ('' !== ($corporateDiscountIDArrayErrorMessage = self::validateCorporateDiscountIDForArrayConstraintsFromSetCorporateDiscountID($corporateDiscountID))) {
            throw new InvalidArgumentException($corporateDiscountIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($corporateDiscountID) && count($corporateDiscountID) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($corporateDiscountID)), __LINE__);
        }
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
    /**
     * Add item to CorporateDiscountID value
     * @throws InvalidArgumentException
     * @param \StructType\CorporateDiscountID $item
     * @return \StructType\HotelRulesModifiers
     */
    public function addToCorporateDiscountID(\StructType\CorporateDiscountID $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CorporateDiscountID) {
            throw new InvalidArgumentException(sprintf('The CorporateDiscountID property can only contain items of type \StructType\CorporateDiscountID, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->CorporateDiscountID) && count($this->CorporateDiscountID) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->CorporateDiscountID)), __LINE__);
        }
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
     * @return \StructType\HotelRulesModifiers
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
     * @return \StructType\HotelRulesModifiers
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
     * @return \StructType\HotelRulesModifiers
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
     * @return \StructType\HotelRulesModifiers
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
}
