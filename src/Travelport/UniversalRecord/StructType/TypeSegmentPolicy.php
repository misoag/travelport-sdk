<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSegmentPolicy StructType
 * @subpackage Structs
 */
class TypeSegmentPolicy extends AbstractStructBase
{
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the original segment. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $SegmentRef;
    /**
     * The Preference
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Preference
     * @var \Travelport\UniversalRecord\StructType\Preference[]
     */
    protected ?array $Preference = null;
    /**
     * The InPolicy
     * Meta information extracted from the WSDL
     * - documentation: Determine if this segment is In or Out of policy. By default it is InPolicy.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InPolicy = null;
    /**
     * The InContract
     * Meta information extracted from the WSDL
     * - documentation: Determine if this segment is In or Out of contract. By default it is InContract.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InContract = null;
    /**
     * Constructor method for typeSegmentPolicy
     * @uses TypeSegmentPolicy::setSegmentRef()
     * @uses TypeSegmentPolicy::setPreference()
     * @uses TypeSegmentPolicy::setInPolicy()
     * @uses TypeSegmentPolicy::setInContract()
     * @param string $segmentRef
     * @param \Travelport\UniversalRecord\StructType\Preference[] $preference
     * @param bool $inPolicy
     * @param bool $inContract
     */
    public function __construct(string $segmentRef, ?array $preference = null, ?bool $inPolicy = true, ?bool $inContract = true)
    {
        $this
            ->setSegmentRef($segmentRef)
            ->setPreference($preference)
            ->setInPolicy($inPolicy)
            ->setInContract($inContract);
    }
    /**
     * Get SegmentRef value
     * @return string
     */
    public function getSegmentRef(): string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setSegmentRef(string $segmentRef): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
    /**
     * Get Preference value
     * @return \Travelport\UniversalRecord\StructType\Preference[]
     */
    public function getPreference(): ?array
    {
        return $this->Preference;
    }
    /**
     * This method is responsible for validating the values passed to the setPreference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreferenceForArrayConstraintsFromSetPreference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeSegmentPolicyPreferenceItem) {
            // validation for constraint: itemType
            if (!$typeSegmentPolicyPreferenceItem instanceof \Travelport\UniversalRecord\StructType\Preference) {
                $invalidValues[] = is_object($typeSegmentPolicyPreferenceItem) ? get_class($typeSegmentPolicyPreferenceItem) : sprintf('%s(%s)', gettype($typeSegmentPolicyPreferenceItem), var_export($typeSegmentPolicyPreferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Preference property can only contain items of type \Travelport\UniversalRecord\StructType\Preference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Preference value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Preference[] $preference
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setPreference(?array $preference = null): self
    {
        // validation for constraint: array
        if ('' !== ($preferenceArrayErrorMessage = self::validatePreferenceForArrayConstraintsFromSetPreference($preference))) {
            throw new InvalidArgumentException($preferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($preference) && count($preference) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($preference)), __LINE__);
        }
        $this->Preference = $preference;
        
        return $this;
    }
    /**
     * Add item to Preference value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Preference $item
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function addToPreference(\Travelport\UniversalRecord\StructType\Preference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Preference) {
            throw new InvalidArgumentException(sprintf('The Preference property can only contain items of type \Travelport\UniversalRecord\StructType\Preference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Preference) && count($this->Preference) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Preference)), __LINE__);
        }
        $this->Preference[] = $item;
        
        return $this;
    }
    /**
     * Get InPolicy value
     * @return bool|null
     */
    public function getInPolicy(): ?bool
    {
        return $this->InPolicy;
    }
    /**
     * Set InPolicy value
     * @param bool $inPolicy
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setInPolicy(?bool $inPolicy = true): self
    {
        // validation for constraint: boolean
        if (!is_null($inPolicy) && !is_bool($inPolicy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inPolicy, true), gettype($inPolicy)), __LINE__);
        }
        $this->InPolicy = $inPolicy;
        
        return $this;
    }
    /**
     * Get InContract value
     * @return bool|null
     */
    public function getInContract(): ?bool
    {
        return $this->InContract;
    }
    /**
     * Set InContract value
     * @param bool $inContract
     * @return \Travelport\UniversalRecord\StructType\TypeSegmentPolicy
     */
    public function setInContract(?bool $inContract = true): self
    {
        // validation for constraint: boolean
        if (!is_null($inContract) && !is_bool($inContract)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inContract, true), gettype($inContract)), __LINE__);
        }
        $this->InContract = $inContract;
        
        return $this;
    }
}
