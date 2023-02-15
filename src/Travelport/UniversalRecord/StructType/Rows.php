<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rows StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P,1J,ACH,MCH. | A wrapper for all the information regarding each of the rows. Providers: ACH, 1G, 1V, 1P, 1J
 * @subpackage Structs
 */
class Rows extends AbstractStructBase
{
    /**
     * The Row
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Row
     * @var \Travelport\UniversalRecord\StructType\Row[]
     */
    protected ?array $Row = null;
    /**
     * The SegmentRef
     * Meta information extracted from the WSDL
     * - documentation: Specifies the AirSegment the seat map is for. Providers: ACH, 1G, 1V, 1P, 1J | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SegmentRef = null;
    /**
     * Constructor method for Rows
     * @uses Rows::setRow()
     * @uses Rows::setSegmentRef()
     * @param \Travelport\UniversalRecord\StructType\Row[] $row
     * @param string $segmentRef
     */
    public function __construct(?array $row = null, ?string $segmentRef = null)
    {
        $this
            ->setRow($row)
            ->setSegmentRef($segmentRef);
    }
    /**
     * Get Row value
     * @return \Travelport\UniversalRecord\StructType\Row[]
     */
    public function getRow(): ?array
    {
        return $this->Row;
    }
    /**
     * This method is responsible for validating the values passed to the setRow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRowForArrayConstraintsFromSetRow(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rowsRowItem) {
            // validation for constraint: itemType
            if (!$rowsRowItem instanceof \Travelport\UniversalRecord\StructType\Row) {
                $invalidValues[] = is_object($rowsRowItem) ? get_class($rowsRowItem) : sprintf('%s(%s)', gettype($rowsRowItem), var_export($rowsRowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Row property can only contain items of type \Travelport\UniversalRecord\StructType\Row, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Row value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Row[] $row
     * @return \Travelport\UniversalRecord\StructType\Rows
     */
    public function setRow(?array $row = null): self
    {
        // validation for constraint: array
        if ('' !== ($rowArrayErrorMessage = self::validateRowForArrayConstraintsFromSetRow($row))) {
            throw new InvalidArgumentException($rowArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($row) && count($row) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($row)), __LINE__);
        }
        $this->Row = $row;
        
        return $this;
    }
    /**
     * Add item to Row value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Row $item
     * @return \Travelport\UniversalRecord\StructType\Rows
     */
    public function addToRow(\Travelport\UniversalRecord\StructType\Row $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Row) {
            throw new InvalidArgumentException(sprintf('The Row property can only contain items of type \Travelport\UniversalRecord\StructType\Row, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Row) && count($this->Row) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Row)), __LINE__);
        }
        $this->Row[] = $item;
        
        return $this;
    }
    /**
     * Get SegmentRef value
     * @return string|null
     */
    public function getSegmentRef(): ?string
    {
        return $this->SegmentRef;
    }
    /**
     * Set SegmentRef value
     * @param string $segmentRef
     * @return \Travelport\UniversalRecord\StructType\Rows
     */
    public function setSegmentRef(?string $segmentRef = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentRef) && !is_string($segmentRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentRef, true), gettype($segmentRef)), __LINE__);
        }
        $this->SegmentRef = $segmentRef;
        
        return $this;
    }
}
