<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to lookup a specific reference data item
 * @subpackage Structs
 */
class ReferenceDataSearchReq extends BaseReq
{
    /**
     * The ReferenceDataSearchItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: ReferenceDataSearchItem
     * @var \Travelport\Util\StructType\ReferenceDataSearchItem[]
     */
    protected array $ReferenceDataSearchItem;
    /**
     * The ReferenceDataSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ReferenceDataSearchModifiers
     * @var \Travelport\Util\StructType\ReferenceDataSearchModifiers|null
     */
    protected ?\Travelport\Util\StructType\ReferenceDataSearchModifiers $ReferenceDataSearchModifiers = null;
    /**
     * Constructor method for ReferenceDataSearchReq
     * @uses ReferenceDataSearchReq::setReferenceDataSearchItem()
     * @uses ReferenceDataSearchReq::setReferenceDataSearchModifiers()
     * @param \Travelport\Util\StructType\ReferenceDataSearchItem[] $referenceDataSearchItem
     * @param \Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers
     */
    public function __construct(array $referenceDataSearchItem, ?\Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers = null)
    {
        $this
            ->setReferenceDataSearchItem($referenceDataSearchItem)
            ->setReferenceDataSearchModifiers($referenceDataSearchModifiers);
    }
    /**
     * Get ReferenceDataSearchItem value
     * @return \Travelport\Util\StructType\ReferenceDataSearchItem[]
     */
    public function getReferenceDataSearchItem(): array
    {
        return $this->ReferenceDataSearchItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReferenceDataSearchItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReferenceDataSearchItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReferenceDataSearchItemForArrayConstraintFromSetReferenceDataSearchItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataSearchReqReferenceDataSearchItemItem) {
            // validation for constraint: itemType
            if (!$referenceDataSearchReqReferenceDataSearchItemItem instanceof \Travelport\Util\StructType\ReferenceDataSearchItem) {
                $invalidValues[] = is_object($referenceDataSearchReqReferenceDataSearchItemItem) ? get_class($referenceDataSearchReqReferenceDataSearchItemItem) : sprintf('%s(%s)', gettype($referenceDataSearchReqReferenceDataSearchItemItem), var_export($referenceDataSearchReqReferenceDataSearchItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReferenceDataSearchItem property can only contain items of type \Travelport\Util\StructType\ReferenceDataSearchItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReferenceDataSearchItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ReferenceDataSearchItem[] $referenceDataSearchItem
     * @return \Travelport\Util\StructType\ReferenceDataSearchReq
     */
    public function setReferenceDataSearchItem(array $referenceDataSearchItem): self
    {
        // validation for constraint: array
        if ('' !== ($referenceDataSearchItemArrayErrorMessage = self::validateReferenceDataSearchItemForArrayConstraintFromSetReferenceDataSearchItem($referenceDataSearchItem))) {
            throw new InvalidArgumentException($referenceDataSearchItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($referenceDataSearchItem) && count($referenceDataSearchItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($referenceDataSearchItem)), __LINE__);
        }
        $this->ReferenceDataSearchItem = $referenceDataSearchItem;
        
        return $this;
    }
    /**
     * Add item to ReferenceDataSearchItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ReferenceDataSearchItem $item
     * @return \Travelport\Util\StructType\ReferenceDataSearchReq
     */
    public function addToReferenceDataSearchItem(\Travelport\Util\StructType\ReferenceDataSearchItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ReferenceDataSearchItem) {
            throw new InvalidArgumentException(sprintf('The ReferenceDataSearchItem property can only contain items of type \Travelport\Util\StructType\ReferenceDataSearchItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ReferenceDataSearchItem) && count($this->ReferenceDataSearchItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ReferenceDataSearchItem)), __LINE__);
        }
        $this->ReferenceDataSearchItem[] = $item;
        
        return $this;
    }
    /**
     * Get ReferenceDataSearchModifiers value
     * @return \Travelport\Util\StructType\ReferenceDataSearchModifiers|null
     */
    public function getReferenceDataSearchModifiers(): ?\Travelport\Util\StructType\ReferenceDataSearchModifiers
    {
        return $this->ReferenceDataSearchModifiers;
    }
    /**
     * Set ReferenceDataSearchModifiers value
     * @param \Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers
     * @return \Travelport\Util\StructType\ReferenceDataSearchReq
     */
    public function setReferenceDataSearchModifiers(?\Travelport\Util\StructType\ReferenceDataSearchModifiers $referenceDataSearchModifiers = null): self
    {
        $this->ReferenceDataSearchModifiers = $referenceDataSearchModifiers;
        
        return $this;
    }
}
