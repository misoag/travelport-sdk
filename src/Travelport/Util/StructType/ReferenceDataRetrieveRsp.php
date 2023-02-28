<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataRetrieveRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to retrieve code, name and description for a specific reference data type.
 * @subpackage Structs
 */
class ReferenceDataRetrieveRsp extends BaseRsp
{
    /**
     * The MoreResults
     * Meta information extracted from the WSDL
     * - documentation: Used to browse beyond the maximum number of results specified with the MaxResults parameter. Acts as an offset to skip the specified number of PNRs from the begining of the result set.
     * - base: xs:boolean
     * - use: required
     * @var bool
     */
    protected bool $MoreResults;
    /**
     * The ReferenceDataItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ReferenceDataItem
     * @var \Travelport\Util\StructType\ReferenceDataItem[]
     */
    protected ?array $ReferenceDataItem = null;
    /**
     * Constructor method for ReferenceDataRetrieveRsp
     * @uses ReferenceDataRetrieveRsp::setMoreResults()
     * @uses ReferenceDataRetrieveRsp::setReferenceDataItem()
     * @param bool $moreResults
     * @param \Travelport\Util\StructType\ReferenceDataItem[] $referenceDataItem
     */
    public function __construct(bool $moreResults, ?array $referenceDataItem = null)
    {
        $this
            ->setMoreResults($moreResults)
            ->setReferenceDataItem($referenceDataItem);
    }
    /**
     * Get MoreResults value
     * @return bool
     */
    public function getMoreResults(): bool
    {
        return $this->MoreResults;
    }
    /**
     * Set MoreResults value
     * @param bool $moreResults
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveRsp
     */
    public function setMoreResults(bool $moreResults): self
    {
        // validation for constraint: boolean
        if (!is_null($moreResults) && !is_bool($moreResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreResults, true), gettype($moreResults)), __LINE__);
        }
        $this->MoreResults = $moreResults;
        
        return $this;
    }
    /**
     * Get ReferenceDataItem value
     * @return \Travelport\Util\StructType\ReferenceDataItem[]
     */
    public function getReferenceDataItem(): ?array
    {
        return $this->ReferenceDataItem;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReferenceDataItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReferenceDataItem method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReferenceDataItemForArrayConstraintFromSetReferenceDataItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataRetrieveRspReferenceDataItemItem) {
            // validation for constraint: itemType
            if (!$referenceDataRetrieveRspReferenceDataItemItem instanceof \Travelport\Util\StructType\ReferenceDataItem) {
                $invalidValues[] = is_object($referenceDataRetrieveRspReferenceDataItemItem) ? get_class($referenceDataRetrieveRspReferenceDataItemItem) : sprintf('%s(%s)', gettype($referenceDataRetrieveRspReferenceDataItemItem), var_export($referenceDataRetrieveRspReferenceDataItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReferenceDataItem property can only contain items of type \Travelport\Util\StructType\ReferenceDataItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReferenceDataItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ReferenceDataItem[] $referenceDataItem
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveRsp
     */
    public function setReferenceDataItem(?array $referenceDataItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($referenceDataItemArrayErrorMessage = self::validateReferenceDataItemForArrayConstraintFromSetReferenceDataItem($referenceDataItem))) {
            throw new InvalidArgumentException($referenceDataItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($referenceDataItem) && count($referenceDataItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($referenceDataItem)), __LINE__);
        }
        $this->ReferenceDataItem = $referenceDataItem;
        
        return $this;
    }
    /**
     * Add item to ReferenceDataItem value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ReferenceDataItem $item
     * @return \Travelport\Util\StructType\ReferenceDataRetrieveRsp
     */
    public function addToReferenceDataItem(\Travelport\Util\StructType\ReferenceDataItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ReferenceDataItem) {
            throw new InvalidArgumentException(sprintf('The ReferenceDataItem property can only contain items of type \Travelport\Util\StructType\ReferenceDataItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ReferenceDataItem) && count($this->ReferenceDataItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ReferenceDataItem)), __LINE__);
        }
        $this->ReferenceDataItem[] = $item;
        
        return $this;
    }
}
