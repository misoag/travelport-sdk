<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Name StructType
 * Meta information extracted from the WSDL
 * - documentation: Name of the group in group booking. | The keyword name. | Name of Emergency Contact Person | Policy Name | Agent's role name | Complete name fields | The name as it appears on the card. | Possible value for restriction name
 * "Non-Refundable","Non-Changeable","Cancellation","Changes", "Non-Refundable marked with No Show","No Show","Non-Changeable marked with No Show" | The commercial name of the optional service on which the embargo applies. Provider: 1G, 1V, 1P | At
 * least one character data in Next Result Reference
 * - base: xs:string
 * - minLength: 1
 * - type: xs:string
 * - use: optional
 * - whiteSpace: collapse
 * @subpackage Structs
 */
class Name extends AbstractStructBase
{
    /**
     * The First
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $First;
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Last;
    /**
     * The Prefix
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Prefix = null;
    /**
     * The Middle
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Middle = null;
    /**
     * The Suffix
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Suffix = null;
    /**
     * The TravelerProfileId
     * Meta information extracted from the WSDL
     * - documentation: Traveler Applied Profile ID. | A type for unique party identifiers of any party role.
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    public ?int $TravelerProfileId = null;
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: At least one character data in Next Result Reference
     * - base: xs:string
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * Constructor method for Name
     * @uses Name::setFirst()
     * @uses Name::setLast()
     * @uses Name::setPrefix()
     * @uses Name::setMiddle()
     * @uses Name::setSuffix()
     * @uses Name::setTravelerProfileId()
     * @uses Name::set_()
     * @param string $first
     * @param string $last
     * @param string $prefix
     * @param string $middle
     * @param string $suffix
     * @param int $travelerProfileId
     * @param string $_
     */
    public function __construct(string $first, string $last, ?string $prefix = null, ?string $middle = null, ?string $suffix = null, ?int $travelerProfileId = null, ?string $_ = null)
    {
        $this
            ->setFirst($first)
            ->setLast($last)
            ->setPrefix($prefix)
            ->setMiddle($middle)
            ->setSuffix($suffix)
            ->setTravelerProfileId($travelerProfileId)
            ->set_($_);
    }
    /**
     * Get First value
     * @return string
     */
    public function getFirst(): string
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param string $first
     * @return \Travelport\Air\StructType\Name
     */
    public function setFirst(string $first): self
    {
        $this->First = $first;
        
        return $this;
    }
    /**
     * Get Last value
     * @return string
     */
    public function getLast(): string
    {
        return $this->Last;
    }
    /**
     * Set Last value
     * @param string $last
     * @return \Travelport\Air\StructType\Name
     */
    public function setLast(string $last): self
    {
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Travelport\Air\StructType\Name
     */
    public function setPrefix(?string $prefix = null): self
    {
        $this->Prefix = $prefix;
        
        return $this;
    }
    /**
     * Get Middle value
     * @return string|null
     */
    public function getMiddle(): ?string
    {
        return $this->Middle;
    }
    /**
     * Set Middle value
     * @param string $middle
     * @return \Travelport\Air\StructType\Name
     */
    public function setMiddle(?string $middle = null): self
    {
        $this->Middle = $middle;
        
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix(): ?string
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \Travelport\Air\StructType\Name
     */
    public function setSuffix(?string $suffix = null): self
    {
        $this->Suffix = $suffix;
        
        return $this;
    }
    /**
     * Get TravelerProfileId value
     * @return int|null
     */
    public function getTravelerProfileId(): ?int
    {
        return $this->TravelerProfileId;
    }
    /**
     * Set TravelerProfileId value
     * @param int $travelerProfileId
     * @return \Travelport\Air\StructType\Name
     */
    public function setTravelerProfileId(?int $travelerProfileId = null): self
    {
        $this->TravelerProfileId = $travelerProfileId;
        
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\Air\StructType\Name
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
}
