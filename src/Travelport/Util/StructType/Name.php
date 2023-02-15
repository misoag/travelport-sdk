<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Name StructType
 * Meta information extracted from the WSDL
 * - documentation: Possible value for restriction name "Non-Refundable","Non-Changeable","Cancellation","Changes", "Non-Refundable marked with No Show","No Show","Non-Changeable marked with No Show" | The commercial name of the optional service on
 * which the embargo applies. Provider: 1G, 1V, 1P, 1J | Name of the group in group booking. | The keyword name. | Name of Emergency Contact Person | Policy Name | Agent's role name | Complete name fields | The name as it appears on the card. | Value of
 * the reference data item that may not uniquely identify a single Reference Data item (e.g. Chicago for Airport would return ORD and MDW). | At least one character data in Next Result Reference
 * - base: xs:string
 * - minLength: 1
 * - type: common:StringLength1to128 | xs:string
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
    protected string $First;
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Last;
    /**
     * The Prefix
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Prefix = null;
    /**
     * The Middle
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Middle = null;
    /**
     * The Suffix
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Suffix = null;
    /**
     * The TravelerProfileId
     * Meta information extracted from the WSDL
     * - documentation: Traveler Applied Profile ID. | A type for unique party identifiers of any party role.
     * - base: xs:integer
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelerProfileId = null;
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: At least one character data in Next Result Reference
     * - base: xs:string
     * - minLength: 1
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $_ = null;
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
     * @return \Travelport\Util\StructType\Name
     */
    public function setFirst(string $first): self
    {
        // validation for constraint: string
        if (!is_null($first) && !is_string($first)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first, true), gettype($first)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($first) && mb_strlen((string) $first) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $first)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($first) && mb_strlen((string) $first) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $first)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Name
     */
    public function setLast(string $last): self
    {
        // validation for constraint: string
        if (!is_null($last) && !is_string($last)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last, true), gettype($last)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($last) && mb_strlen((string) $last) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $last)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($last) && mb_strlen((string) $last) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $last)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Name
     */
    public function setPrefix(?string $prefix = null): self
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefix, true), gettype($prefix)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($prefix) && mb_strlen((string) $prefix) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $prefix)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($prefix) && mb_strlen((string) $prefix) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $prefix)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Name
     */
    public function setMiddle(?string $middle = null): self
    {
        // validation for constraint: string
        if (!is_null($middle) && !is_string($middle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middle, true), gettype($middle)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($middle) && mb_strlen((string) $middle) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $middle)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($middle) && mb_strlen((string) $middle) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $middle)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Name
     */
    public function setSuffix(?string $suffix = null): self
    {
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suffix, true), gettype($suffix)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($suffix) && mb_strlen((string) $suffix) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $suffix)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($suffix) && mb_strlen((string) $suffix) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $suffix)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Name
     */
    public function setTravelerProfileId(?int $travelerProfileId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelerProfileId) && !(is_int($travelerProfileId) || ctype_digit($travelerProfileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelerProfileId, true), gettype($travelerProfileId)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\Name
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($_) && mb_strlen((string) $_) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
