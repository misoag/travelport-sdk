<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CHGType StructType
 * Meta information extracted from the WSDL
 * - documentation: PenFee list will be populated
 * @subpackage Structs
 */
class CHGType extends AbstractStructBase
{
    /**
     * The PenFee
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\PenFeeType[]
     */
    protected ?array $PenFee = null;
    /**
     * Constructor method for CHGType
     * @uses CHGType::setPenFee()
     * @param \Travelport\Util\StructType\PenFeeType[] $penFee
     */
    public function __construct(?array $penFee = null)
    {
        $this
            ->setPenFee($penFee);
    }
    /**
     * Get PenFee value
     * @return \Travelport\Util\StructType\PenFeeType[]
     */
    public function getPenFee(): ?array
    {
        return $this->PenFee;
    }
    /**
     * This method is responsible for validating the values passed to the setPenFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPenFee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePenFeeForArrayConstraintsFromSetPenFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cHGTypePenFeeItem) {
            // validation for constraint: itemType
            if (!$cHGTypePenFeeItem instanceof \Travelport\Util\StructType\PenFeeType) {
                $invalidValues[] = is_object($cHGTypePenFeeItem) ? get_class($cHGTypePenFeeItem) : sprintf('%s(%s)', gettype($cHGTypePenFeeItem), var_export($cHGTypePenFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PenFee property can only contain items of type \Travelport\Util\StructType\PenFeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PenFee value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PenFeeType[] $penFee
     * @return \Travelport\Util\StructType\CHGType
     */
    public function setPenFee(?array $penFee = null): self
    {
        // validation for constraint: array
        if ('' !== ($penFeeArrayErrorMessage = self::validatePenFeeForArrayConstraintsFromSetPenFee($penFee))) {
            throw new InvalidArgumentException($penFeeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($penFee) && count($penFee) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($penFee)), __LINE__);
        }
        $this->PenFee = $penFee;
        
        return $this;
    }
    /**
     * Add item to PenFee value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\PenFeeType $item
     * @return \Travelport\Util\StructType\CHGType
     */
    public function addToPenFee(\Travelport\Util\StructType\PenFeeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\PenFeeType) {
            throw new InvalidArgumentException(sprintf('The PenFee property can only contain items of type \Travelport\Util\StructType\PenFeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->PenFee) && count($this->PenFee) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->PenFee)), __LINE__);
        }
        $this->PenFee[] = $item;
        
        return $this;
    }
}
