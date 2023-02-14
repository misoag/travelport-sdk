<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeMostRestrictivePenalties StructType
 * Meta information extracted from the WSDL
 * - documentation: Most Restrictive Penalties
 * @subpackage Structs
 */
class TypeMostRestrictivePenalties extends AbstractStructBase
{
    /**
     * The RestrictionType
     * Meta information extracted from the WSDL
     * - documentation: Contain the type of restriction applicable
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRestrictionData[]
     */
    protected ?array $RestrictionType = null;
    /**
     * Constructor method for typeMostRestrictivePenalties
     * @uses TypeMostRestrictivePenalties::setRestrictionType()
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionData[] $restrictionType
     */
    public function __construct(?array $restrictionType = null)
    {
        $this
            ->setRestrictionType($restrictionType);
    }
    /**
     * Get RestrictionType value
     * @return \Travelport\UniversalRecord\StructType\TypeRestrictionData[]
     */
    public function getRestrictionType(): ?array
    {
        return $this->RestrictionType;
    }
    /**
     * This method is responsible for validating the values passed to the setRestrictionType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestrictionType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictionTypeForArrayConstraintsFromSetRestrictionType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeMostRestrictivePenaltiesRestrictionTypeItem) {
            // validation for constraint: itemType
            if (!$typeMostRestrictivePenaltiesRestrictionTypeItem instanceof \Travelport\UniversalRecord\StructType\TypeRestrictionData) {
                $invalidValues[] = is_object($typeMostRestrictivePenaltiesRestrictionTypeItem) ? get_class($typeMostRestrictivePenaltiesRestrictionTypeItem) : sprintf('%s(%s)', gettype($typeMostRestrictivePenaltiesRestrictionTypeItem), var_export($typeMostRestrictivePenaltiesRestrictionTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RestrictionType property can only contain items of type \Travelport\UniversalRecord\StructType\TypeRestrictionData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RestrictionType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionData[] $restrictionType
     * @return \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties
     */
    public function setRestrictionType(?array $restrictionType = null): self
    {
        // validation for constraint: array
        if ('' !== ($restrictionTypeArrayErrorMessage = self::validateRestrictionTypeForArrayConstraintsFromSetRestrictionType($restrictionType))) {
            throw new InvalidArgumentException($restrictionTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($restrictionType) && count($restrictionType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($restrictionType)), __LINE__);
        }
        $this->RestrictionType = $restrictionType;
        
        return $this;
    }
    /**
     * Add item to RestrictionType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionData $item
     * @return \Travelport\UniversalRecord\StructType\TypeMostRestrictivePenalties
     */
    public function addToRestrictionType(\Travelport\UniversalRecord\StructType\TypeRestrictionData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeRestrictionData) {
            throw new InvalidArgumentException(sprintf('The RestrictionType property can only contain items of type \Travelport\UniversalRecord\StructType\TypeRestrictionData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RestrictionType) && count($this->RestrictionType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RestrictionType)), __LINE__);
        }
        $this->RestrictionType[] = $item;
        
        return $this;
    }
}
