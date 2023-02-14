<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\NextResultReference[]
     */
    protected ?array $NextResultReference = null;
    /**
     * Constructor method for BaseSearchReq
     * @uses BaseSearchReq::setNextResultReference()
     * @param \StructType\NextResultReference[] $nextResultReference
     */
    public function __construct(?array $nextResultReference = null)
    {
        $this
            ->setNextResultReference($nextResultReference);
    }
    /**
     * Get NextResultReference value
     * @return \StructType\NextResultReference[]
     */
    public function getNextResultReference(): ?array
    {
        return $this->NextResultReference;
    }
    /**
     * This method is responsible for validating the values passed to the setNextResultReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNextResultReference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNextResultReferenceForArrayConstraintsFromSetNextResultReference(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseSearchReqNextResultReferenceItem) {
            // validation for constraint: itemType
            if (!$baseSearchReqNextResultReferenceItem instanceof \StructType\NextResultReference) {
                $invalidValues[] = is_object($baseSearchReqNextResultReferenceItem) ? get_class($baseSearchReqNextResultReferenceItem) : sprintf('%s(%s)', gettype($baseSearchReqNextResultReferenceItem), var_export($baseSearchReqNextResultReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NextResultReference property can only contain items of type \StructType\NextResultReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NextResultReference value
     * @throws InvalidArgumentException
     * @param \StructType\NextResultReference[] $nextResultReference
     * @return \StructType\BaseSearchReq
     */
    public function setNextResultReference(?array $nextResultReference = null): self
    {
        // validation for constraint: array
        if ('' !== ($nextResultReferenceArrayErrorMessage = self::validateNextResultReferenceForArrayConstraintsFromSetNextResultReference($nextResultReference))) {
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
     * @param \StructType\NextResultReference $item
     * @return \StructType\BaseSearchReq
     */
    public function addToNextResultReference(\StructType\NextResultReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NextResultReference) {
            throw new InvalidArgumentException(sprintf('The NextResultReference property can only contain items of type \StructType\NextResultReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->NextResultReference) && count($this->NextResultReference) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->NextResultReference)), __LINE__);
        }
        $this->NextResultReference[] = $item;
        
        return $this;
    }
}
