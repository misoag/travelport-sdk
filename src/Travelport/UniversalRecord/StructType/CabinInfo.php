<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $Category = null;
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
    public ?string $Number = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Cabin Category , can be of the following values : ''I' - Inside Cabins, 'O' - Outside Cabins, 'M' - Inside and Outside Cabins (mixed) | Used for Character Strings, length 1.
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Location = null;
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
    public ?string $RelativeLocation = null;
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
    public ?string $DeckName = null;
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
    public ?string $BedConfiguration = null;
    /**
     * The SmokingIndicator
     * Meta information extracted from the WSDL
     * - documentation: Whether user has specified his smoking preference.Can be of the following values : true' - Smoking' 'false' - Non-smoking
     * - use: optional
     * @var bool|null
     */
    public ?bool $SmokingIndicator = null;
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
        $this->SmokingIndicator = $smokingIndicator;
        
        return $this;
    }
}
