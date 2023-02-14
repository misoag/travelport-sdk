<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise Cabin Details
 * @subpackage Structs
 */
class CabinInfo extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Vendor defined Cabin category | Used for Character Strings, length 1 to 3.
     * - base: xs:string
     * - maxLength: 3
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Vendor defined cabin designator Or Cabin Number | Used for Character Strings, length 1 to 5.
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Cabin Category , can be of the following values : ''I' - Inside Cabins, 'O' - Outside Cabins, 'M' - Inside and Outside Cabins (mixed) | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The RelativeLocation
     * Meta information extracted from the WSDL
     * - documentation: Position of the cabin relative to the layout of the ship, e.g. OUT,AFT,PORT | Used for Character Strings, length 1 to 12.
     * - base: xs:string
     * - maxLength: 12
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $RelativeLocation = null;
    /**
     * The DeckName
     * Meta information extracted from the WSDL
     * - documentation: Ship's deck on which cabin resides. | Used for Character Strings, length 1 to 15.
     * - base: xs:string
     * - maxLength: 15
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $DeckName = null;
    /**
     * The BedConfiguration
     * Meta information extracted from the WSDL
     * - documentation: Description of the cabin bed configuration e.g. TWIN BEDS | Used for Character Strings, length 1 to 10.
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $BedConfiguration = null;
    /**
     * The SmokingIndicator
     * Meta information extracted from the WSDL
     * - documentation: Whether user has specified his smoking preference.Can be of the following values : true' - Smoking' 'false' - Non-smoking
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SmokingIndicator = null;
    /**
     * Constructor method for CabinInfo
     * @uses CabinInfo::setCategory()
     * @uses CabinInfo::setNumber()
     * @uses CabinInfo::setLocation()
     * @uses CabinInfo::setRelativeLocation()
     * @uses CabinInfo::setDeckName()
     * @uses CabinInfo::setBedConfiguration()
     * @uses CabinInfo::setSmokingIndicator()
     * @param string $category
     * @param string $number
     * @param string $location
     * @param string $relativeLocation
     * @param string $deckName
     * @param string $bedConfiguration
     * @param bool $smokingIndicator
     */
    public function __construct(?string $category = null, ?string $number = null, ?string $location = null, ?string $relativeLocation = null, ?string $deckName = null, ?string $bedConfiguration = null, ?bool $smokingIndicator = null)
    {
        $this
            ->setCategory($category)
            ->setNumber($number)
            ->setLocation($location)
            ->setRelativeLocation($relativeLocation)
            ->setDeckName($deckName)
            ->setBedConfiguration($bedConfiguration)
            ->setSmokingIndicator($smokingIndicator);
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($category) && mb_strlen((string) $category) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $category)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($category) && mb_strlen((string) $category) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($number) && mb_strlen((string) $number) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($number) && mb_strlen((string) $number) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($location) && mb_strlen((string) $location) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get RelativeLocation value
     * @return string|null
     */
    public function getRelativeLocation(): ?string
    {
        return $this->RelativeLocation;
    }
    /**
     * Set RelativeLocation value
     * @param string $relativeLocation
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setRelativeLocation(?string $relativeLocation = null): self
    {
        // validation for constraint: string
        if (!is_null($relativeLocation) && !is_string($relativeLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relativeLocation, true), gettype($relativeLocation)), __LINE__);
        }
        // validation for constraint: maxLength(12)
        if (!is_null($relativeLocation) && mb_strlen((string) $relativeLocation) > 12) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 12', mb_strlen((string) $relativeLocation)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($relativeLocation) && mb_strlen((string) $relativeLocation) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $relativeLocation)), __LINE__);
        }
        $this->RelativeLocation = $relativeLocation;
        
        return $this;
    }
    /**
     * Get DeckName value
     * @return string|null
     */
    public function getDeckName(): ?string
    {
        return $this->DeckName;
    }
    /**
     * Set DeckName value
     * @param string $deckName
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setDeckName(?string $deckName = null): self
    {
        // validation for constraint: string
        if (!is_null($deckName) && !is_string($deckName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deckName, true), gettype($deckName)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($deckName) && mb_strlen((string) $deckName) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $deckName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($deckName) && mb_strlen((string) $deckName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $deckName)), __LINE__);
        }
        $this->DeckName = $deckName;
        
        return $this;
    }
    /**
     * Get BedConfiguration value
     * @return string|null
     */
    public function getBedConfiguration(): ?string
    {
        return $this->BedConfiguration;
    }
    /**
     * Set BedConfiguration value
     * @param string $bedConfiguration
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setBedConfiguration(?string $bedConfiguration = null): self
    {
        // validation for constraint: string
        if (!is_null($bedConfiguration) && !is_string($bedConfiguration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bedConfiguration, true), gettype($bedConfiguration)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($bedConfiguration) && mb_strlen((string) $bedConfiguration) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $bedConfiguration)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($bedConfiguration) && mb_strlen((string) $bedConfiguration) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $bedConfiguration)), __LINE__);
        }
        $this->BedConfiguration = $bedConfiguration;
        
        return $this;
    }
    /**
     * Get SmokingIndicator value
     * @return bool|null
     */
    public function getSmokingIndicator(): ?bool
    {
        return $this->SmokingIndicator;
    }
    /**
     * Set SmokingIndicator value
     * @param bool $smokingIndicator
     * @return \Travelport\UniversalRecord\StructType\CabinInfo
     */
    public function setSmokingIndicator(?bool $smokingIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($smokingIndicator) && !is_bool($smokingIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smokingIndicator, true), gettype($smokingIndicator)), __LINE__);
        }
        $this->SmokingIndicator = $smokingIndicator;
        
        return $this;
    }
}
