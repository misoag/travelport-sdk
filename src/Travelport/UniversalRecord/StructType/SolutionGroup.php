<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SolutionGroup StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifies the trip type and diversity of all or a subset of the result solutions.
 * @subpackage Structs
 */
class SolutionGroup extends AbstractStructBase
{
    /**
     * The TripType
     * Meta information extracted from the WSDL
     * - documentation: Specifies the trip type for this group of results. Allows targeting a result set to a particular set of characterists.
     * - use: required
     * @var string
     */
    public string $TripType;
    /**
     * The PermittedAccountCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PermittedAccountCodes|null
     */
    public ?\Travelport\UniversalRecord\StructType\PermittedAccountCodes $PermittedAccountCodes = null;
    /**
     * The PreferredAccountCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PreferredAccountCodes|null
     */
    public ?\Travelport\UniversalRecord\StructType\PreferredAccountCodes $PreferredAccountCodes = null;
    /**
     * The ProhibitedAccountCodes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedAccountCodes|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProhibitedAccountCodes $ProhibitedAccountCodes = null;
    /**
     * The PermittedPointOfSales
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\PermittedPointOfSales|null
     */
    public ?\Travelport\UniversalRecord\StructType\PermittedPointOfSales $PermittedPointOfSales = null;
    /**
     * The ProhibitedPointOfSales
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ProhibitedPointOfSales|null
     */
    public ?\Travelport\UniversalRecord\StructType\ProhibitedPointOfSales $ProhibitedPointOfSales = null;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: The number of solution to include in this group. If only one group specified, this can be left blank. If multiple groups specified, all counts must add up to the MaxResults of the request.
     * - use: optional
     * @var int|null
     */
    public ?int $Count = null;
    /**
     * The Diversification
     * Meta information extracted from the WSDL
     * - documentation: Specifies the diversification of this group of results, if specified. Allows targeting a result set to ensure they contain more unique results.
     * - use: optional
     * @var string|null
     */
    public ?string $Diversification = null;
    /**
     * The Tag
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - use: optional
     * @var string|null
     */
    public ?string $Tag = null;
    /**
     * The Primary
     * Meta information extracted from the WSDL
     * - documentation: Indicates that this is a primary SolutionGroup when using alternate pricing concepts
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $Primary = null;
    /**
     * Constructor method for SolutionGroup
     * @uses SolutionGroup::setTripType()
     * @uses SolutionGroup::setPermittedAccountCodes()
     * @uses SolutionGroup::setPreferredAccountCodes()
     * @uses SolutionGroup::setProhibitedAccountCodes()
     * @uses SolutionGroup::setPermittedPointOfSales()
     * @uses SolutionGroup::setProhibitedPointOfSales()
     * @uses SolutionGroup::setCount()
     * @uses SolutionGroup::setDiversification()
     * @uses SolutionGroup::setTag()
     * @uses SolutionGroup::setPrimary()
     * @param string $tripType
     * @param \Travelport\UniversalRecord\StructType\PermittedAccountCodes $permittedAccountCodes
     * @param \Travelport\UniversalRecord\StructType\PreferredAccountCodes $preferredAccountCodes
     * @param \Travelport\UniversalRecord\StructType\ProhibitedAccountCodes $prohibitedAccountCodes
     * @param \Travelport\UniversalRecord\StructType\PermittedPointOfSales $permittedPointOfSales
     * @param \Travelport\UniversalRecord\StructType\ProhibitedPointOfSales $prohibitedPointOfSales
     * @param int $count
     * @param string $diversification
     * @param string $tag
     * @param bool $primary
     */
    public function __construct(string $tripType, ?\Travelport\UniversalRecord\StructType\PermittedAccountCodes $permittedAccountCodes = null, ?\Travelport\UniversalRecord\StructType\PreferredAccountCodes $preferredAccountCodes = null, ?\Travelport\UniversalRecord\StructType\ProhibitedAccountCodes $prohibitedAccountCodes = null, ?\Travelport\UniversalRecord\StructType\PermittedPointOfSales $permittedPointOfSales = null, ?\Travelport\UniversalRecord\StructType\ProhibitedPointOfSales $prohibitedPointOfSales = null, ?int $count = null, ?string $diversification = null, ?string $tag = null, ?bool $primary = false)
    {
        $this
            ->setTripType($tripType)
            ->setPermittedAccountCodes($permittedAccountCodes)
            ->setPreferredAccountCodes($preferredAccountCodes)
            ->setProhibitedAccountCodes($prohibitedAccountCodes)
            ->setPermittedPointOfSales($permittedPointOfSales)
            ->setProhibitedPointOfSales($prohibitedPointOfSales)
            ->setCount($count)
            ->setDiversification($diversification)
            ->setTag($tag)
            ->setPrimary($primary);
    }
    /**
     * Get TripType value
     * @return string
     */
    public function getTripType(): string
    {
        return $this->TripType;
    }
    /**
     * Set TripType value
     * @param string $tripType
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setTripType(string $tripType): self
    {
        $this->TripType = $tripType;
        
        return $this;
    }
    /**
     * Get PermittedAccountCodes value
     * @return \Travelport\UniversalRecord\StructType\PermittedAccountCodes|null
     */
    public function getPermittedAccountCodes(): ?\Travelport\UniversalRecord\StructType\PermittedAccountCodes
    {
        return $this->PermittedAccountCodes;
    }
    /**
     * Set PermittedAccountCodes value
     * @param \Travelport\UniversalRecord\StructType\PermittedAccountCodes $permittedAccountCodes
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setPermittedAccountCodes(?\Travelport\UniversalRecord\StructType\PermittedAccountCodes $permittedAccountCodes = null): self
    {
        $this->PermittedAccountCodes = $permittedAccountCodes;
        
        return $this;
    }
    /**
     * Get PreferredAccountCodes value
     * @return \Travelport\UniversalRecord\StructType\PreferredAccountCodes|null
     */
    public function getPreferredAccountCodes(): ?\Travelport\UniversalRecord\StructType\PreferredAccountCodes
    {
        return $this->PreferredAccountCodes;
    }
    /**
     * Set PreferredAccountCodes value
     * @param \Travelport\UniversalRecord\StructType\PreferredAccountCodes $preferredAccountCodes
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setPreferredAccountCodes(?\Travelport\UniversalRecord\StructType\PreferredAccountCodes $preferredAccountCodes = null): self
    {
        $this->PreferredAccountCodes = $preferredAccountCodes;
        
        return $this;
    }
    /**
     * Get ProhibitedAccountCodes value
     * @return \Travelport\UniversalRecord\StructType\ProhibitedAccountCodes|null
     */
    public function getProhibitedAccountCodes(): ?\Travelport\UniversalRecord\StructType\ProhibitedAccountCodes
    {
        return $this->ProhibitedAccountCodes;
    }
    /**
     * Set ProhibitedAccountCodes value
     * @param \Travelport\UniversalRecord\StructType\ProhibitedAccountCodes $prohibitedAccountCodes
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setProhibitedAccountCodes(?\Travelport\UniversalRecord\StructType\ProhibitedAccountCodes $prohibitedAccountCodes = null): self
    {
        $this->ProhibitedAccountCodes = $prohibitedAccountCodes;
        
        return $this;
    }
    /**
     * Get PermittedPointOfSales value
     * @return \Travelport\UniversalRecord\StructType\PermittedPointOfSales|null
     */
    public function getPermittedPointOfSales(): ?\Travelport\UniversalRecord\StructType\PermittedPointOfSales
    {
        return $this->PermittedPointOfSales;
    }
    /**
     * Set PermittedPointOfSales value
     * @param \Travelport\UniversalRecord\StructType\PermittedPointOfSales $permittedPointOfSales
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setPermittedPointOfSales(?\Travelport\UniversalRecord\StructType\PermittedPointOfSales $permittedPointOfSales = null): self
    {
        $this->PermittedPointOfSales = $permittedPointOfSales;
        
        return $this;
    }
    /**
     * Get ProhibitedPointOfSales value
     * @return \Travelport\UniversalRecord\StructType\ProhibitedPointOfSales|null
     */
    public function getProhibitedPointOfSales(): ?\Travelport\UniversalRecord\StructType\ProhibitedPointOfSales
    {
        return $this->ProhibitedPointOfSales;
    }
    /**
     * Set ProhibitedPointOfSales value
     * @param \Travelport\UniversalRecord\StructType\ProhibitedPointOfSales $prohibitedPointOfSales
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setProhibitedPointOfSales(?\Travelport\UniversalRecord\StructType\ProhibitedPointOfSales $prohibitedPointOfSales = null): self
    {
        $this->ProhibitedPointOfSales = $prohibitedPointOfSales;
        
        return $this;
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setCount(?int $count = null): self
    {
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Diversification value
     * @return string|null
     */
    public function getDiversification(): ?string
    {
        return $this->Diversification;
    }
    /**
     * Set Diversification value
     * @param string $diversification
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setDiversification(?string $diversification = null): self
    {
        $this->Diversification = $diversification;
        
        return $this;
    }
    /**
     * Get Tag value
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->Tag;
    }
    /**
     * Set Tag value
     * @param string $tag
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setTag(?string $tag = null): self
    {
        $this->Tag = $tag;
        
        return $this;
    }
    /**
     * Get Primary value
     * @return bool|null
     */
    public function getPrimary(): ?bool
    {
        return $this->Primary;
    }
    /**
     * Set Primary value
     * @param bool $primary
     * @return \Travelport\UniversalRecord\StructType\SolutionGroup
     */
    public function setPrimary(?bool $primary = false): self
    {
        $this->Primary = $primary;
        
        return $this;
    }
}
