<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Segment StructType
 * Meta information extracted from the WSDL
 * - documentation: The base segment type
 * @subpackage Structs
 */
class Segment extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The SegmentRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SegmentRemark
     * @var \StructType\SegmentRemark[]
     */
    protected ?array $SegmentRemark = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of this segment.
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Passive
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Passive = null;
    /**
     * The TravelOrder
     * Meta information extracted from the WSDL
     * - documentation: To identify the appropriate travel sequence for Air/Car/Hotel segments/reservations based on travel dates. This ordering is applicable across the UR not provider or traveler specific
     * - use: optional
     * @var int|null
     */
    protected ?int $TravelOrder = null;
    /**
     * The ProviderSegmentOrder
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 999
     * - use: optional
     * @var int|null
     */
    protected ?int $ProviderSegmentOrder = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
    /**
     * Constructor method for Segment
     * @uses Segment::setKey()
     * @uses Segment::setSegmentRemark()
     * @uses Segment::setStatus()
     * @uses Segment::setPassive()
     * @uses Segment::setTravelOrder()
     * @uses Segment::setProviderSegmentOrder()
     * @uses Segment::setElStat()
     * @uses Segment::setKeyOverride()
     * @param string $key
     * @param \StructType\SegmentRemark[] $segmentRemark
     * @param string $status
     * @param bool $passive
     * @param int $travelOrder
     * @param int $providerSegmentOrder
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?array $segmentRemark = null, ?string $status = null, ?bool $passive = null, ?int $travelOrder = null, ?int $providerSegmentOrder = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setSegmentRemark($segmentRemark)
            ->setStatus($status)
            ->setPassive($passive)
            ->setTravelOrder($travelOrder)
            ->setProviderSegmentOrder($providerSegmentOrder)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\Segment
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get SegmentRemark value
     * @return \StructType\SegmentRemark[]
     */
    public function getSegmentRemark(): ?array
    {
        return $this->SegmentRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setSegmentRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentRemarkForArrayConstraintsFromSetSegmentRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $segmentSegmentRemarkItem) {
            // validation for constraint: itemType
            if (!$segmentSegmentRemarkItem instanceof \StructType\SegmentRemark) {
                $invalidValues[] = is_object($segmentSegmentRemarkItem) ? get_class($segmentSegmentRemarkItem) : sprintf('%s(%s)', gettype($segmentSegmentRemarkItem), var_export($segmentSegmentRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentRemark property can only contain items of type \StructType\SegmentRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SegmentRemark value
     * @throws InvalidArgumentException
     * @param \StructType\SegmentRemark[] $segmentRemark
     * @return \StructType\Segment
     */
    public function setSegmentRemark(?array $segmentRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentRemarkArrayErrorMessage = self::validateSegmentRemarkForArrayConstraintsFromSetSegmentRemark($segmentRemark))) {
            throw new InvalidArgumentException($segmentRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($segmentRemark) && count($segmentRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($segmentRemark)), __LINE__);
        }
        $this->SegmentRemark = $segmentRemark;
        
        return $this;
    }
    /**
     * Add item to SegmentRemark value
     * @throws InvalidArgumentException
     * @param \StructType\SegmentRemark $item
     * @return \StructType\Segment
     */
    public function addToSegmentRemark(\StructType\SegmentRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SegmentRemark) {
            throw new InvalidArgumentException(sprintf('The SegmentRemark property can only contain items of type \StructType\SegmentRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SegmentRemark) && count($this->SegmentRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SegmentRemark)), __LINE__);
        }
        $this->SegmentRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\Segment
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Passive value
     * @return bool|null
     */
    public function getPassive(): ?bool
    {
        return $this->Passive;
    }
    /**
     * Set Passive value
     * @param bool $passive
     * @return \StructType\Segment
     */
    public function setPassive(?bool $passive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($passive) && !is_bool($passive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($passive, true), gettype($passive)), __LINE__);
        }
        $this->Passive = $passive;
        
        return $this;
    }
    /**
     * Get TravelOrder value
     * @return int|null
     */
    public function getTravelOrder(): ?int
    {
        return $this->TravelOrder;
    }
    /**
     * Set TravelOrder value
     * @param int $travelOrder
     * @return \StructType\Segment
     */
    public function setTravelOrder(?int $travelOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($travelOrder) && !(is_int($travelOrder) || ctype_digit($travelOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelOrder, true), gettype($travelOrder)), __LINE__);
        }
        $this->TravelOrder = $travelOrder;
        
        return $this;
    }
    /**
     * Get ProviderSegmentOrder value
     * @return int|null
     */
    public function getProviderSegmentOrder(): ?int
    {
        return $this->ProviderSegmentOrder;
    }
    /**
     * Set ProviderSegmentOrder value
     * @param int $providerSegmentOrder
     * @return \StructType\Segment
     */
    public function setProviderSegmentOrder(?int $providerSegmentOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($providerSegmentOrder) && !(is_int($providerSegmentOrder) || ctype_digit($providerSegmentOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($providerSegmentOrder, true), gettype($providerSegmentOrder)), __LINE__);
        }
        // validation for constraint: maxInclusive(999)
        if (!is_null($providerSegmentOrder) && $providerSegmentOrder > 999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 999', var_export($providerSegmentOrder, true)), __LINE__);
        }
        $this->ProviderSegmentOrder = $providerSegmentOrder;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \EnumType\TypeElementStatus::valueIsValid()
     * @uses \EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \StructType\Segment
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \StructType\Segment
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}