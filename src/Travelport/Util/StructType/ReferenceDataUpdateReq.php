<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataUpdateReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Specifiy details either to update reference data or reference data master records. | Request to update reference data
 * @subpackage Structs
 */
class ReferenceDataUpdateReq extends BaseReq
{
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Action;
    /**
     * The TypeCode
     * Meta information extracted from the WSDL
     * - documentation: The type code of the reference data to update. | Reference data TypeCode type.
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $TypeCode;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Util\StructType\Item[]
     */
    protected ?array $Item = null;
    /**
     * Constructor method for ReferenceDataUpdateReq
     * @uses ReferenceDataUpdateReq::setAction()
     * @uses ReferenceDataUpdateReq::setTypeCode()
     * @uses ReferenceDataUpdateReq::setItem()
     * @param string $action
     * @param string $typeCode
     * @param \Travelport\Util\StructType\Item[] $item
     */
    public function __construct(string $action, string $typeCode, ?array $item = null)
    {
        $this
            ->setAction($action)
            ->setTypeCode($typeCode)
            ->setItem($item);
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction(): string
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Travelport\Util\StructType\ReferenceDataUpdateReq
     */
    public function setAction(string $action): self
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
        }
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get TypeCode value
     * @return string
     */
    public function getTypeCode(): string
    {
        return $this->TypeCode;
    }
    /**
     * Set TypeCode value
     * @param string $typeCode
     * @return \Travelport\Util\StructType\ReferenceDataUpdateReq
     */
    public function setTypeCode(string $typeCode): self
    {
        // validation for constraint: string
        if (!is_null($typeCode) && !is_string($typeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeCode, true), gettype($typeCode)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($typeCode) && mb_strlen((string) $typeCode) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $typeCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($typeCode) && mb_strlen((string) $typeCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $typeCode)), __LINE__);
        }
        $this->TypeCode = $typeCode;
        
        return $this;
    }
    /**
     * Get Item value
     * @return \Travelport\Util\StructType\Item[]
     */
    public function getItem(): ?array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataUpdateReqItemItem) {
            // validation for constraint: itemType
            if (!$referenceDataUpdateReqItemItem instanceof \Travelport\Util\StructType\Item) {
                $invalidValues[] = is_object($referenceDataUpdateReqItemItem) ? get_class($referenceDataUpdateReqItemItem) : sprintf('%s(%s)', gettype($referenceDataUpdateReqItemItem), var_export($referenceDataUpdateReqItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \Travelport\Util\StructType\Item, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Item[] $item
     * @return \Travelport\Util\StructType\ReferenceDataUpdateReq
     */
    public function setItem(?array $item = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($item) && count($item) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($item)), __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Add item to Item value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Item $item
     * @return \Travelport\Util\StructType\ReferenceDataUpdateReq
     */
    public function addToItem(\Travelport\Util\StructType\Item $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Item) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \Travelport\Util\StructType\Item, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Item) && count($this->Item) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Item)), __LINE__);
        }
        $this->Item[] = $item;
        
        return $this;
    }
}
