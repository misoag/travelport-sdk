<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseSearchReq StructType
 * @subpackage Structs
 */
class BaseSearchReq extends BaseReq
{
    /**
     * The NextResultReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: NextResultReference
     * @var \Travelport\Util\StructType\NextResultReference[]
     */
    protected ?array $NextResultReference = null;
    /**
     * Constructor method for BaseSearchReq
     * @uses BaseSearchReq::setNextResultReference()
     * @param \Travelport\Util\StructType\NextResultReference[] $nextResultReference
     */
    public function __construct(?array $nextResultReference = null)
    {
        $this
            ->setNextResultReference($nextResultReference);
    }
    /**
     * Get NextResultReference value
     * @return \Travelport\Util\StructType\NextResultReference[]
     */
    public function getNextResultReference(): ?array
    {
        return $this->NextResultReference;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNextResultReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNextResultReference method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNextResultReferenceForArrayConstraintFromSetNextResultReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseSearchReqNextResultReferenceItem) {
            // validation for constraint: itemType
            if (!$baseSearchReqNextResultReferenceItem instanceof \Travelport\Util\StructType\NextResultReference) {
                $invalidValues[] = is_object($baseSearchReqNextResultReferenceItem) ? get_class($baseSearchReqNextResultReferenceItem) : sprintf('%s(%s)', gettype($baseSearchReqNextResultReferenceItem), var_export($baseSearchReqNextResultReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NextResultReference property can only contain items of type \Travelport\Util\StructType\NextResultReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NextResultReference value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\NextResultReference[] $nextResultReference
     * @return \Travelport\Util\StructType\BaseSearchReq
     */
    public function setNextResultReference(?array $nextResultReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($nextResultReferenceArrayErrorMessage = self::validateNextResultReferenceForArrayConstraintFromSetNextResultReference($nextResultReference))) {
            throw new InvalidArgumentException($nextResultReferenceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($nextResultReference) && count($nextResultReference) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($nextResultReference)), __LINE__);
        }
        $this->NextResultReference = $nextResultReference;
        
        return $this;
    }
    /**
     * Add item to NextResultReference value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\NextResultReference $item
     * @return \Travelport\Util\StructType\BaseSearchReq
     */
    public function addToNextResultReference(\Travelport\Util\StructType\NextResultReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\NextResultReference) {
            throw new InvalidArgumentException(sprintf('The NextResultReference property can only contain items of type \Travelport\Util\StructType\NextResultReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->NextResultReference) && count($this->NextResultReference) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->NextResultReference)), __LINE__);
        }
        $this->NextResultReference[] = $item;
        
        return $this;
    }
}
