<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRailCreateReservationRsp StructType
 * @subpackage Structs
 */
abstract class TypeRailCreateReservationRsp extends BaseRsp
{
    /**
     * The UniversalRecord
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: UniversalRecord
     * @var \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    protected ?\Travelport\UniversalRecord\StructType\UniversalRecord $UniversalRecord = null;
    /**
     * The RailSolutionChangedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: rail:RailSolutionChangedInfo
     * @var \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[]
     */
    protected ?array $RailSolutionChangedInfo = null;
    /**
     * Constructor method for typeRailCreateReservationRsp
     * @uses TypeRailCreateReservationRsp::setUniversalRecord()
     * @uses TypeRailCreateReservationRsp::setRailSolutionChangedInfo()
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @param \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[] $railSolutionChangedInfo
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null, ?array $railSolutionChangedInfo = null)
    {
        $this
            ->setUniversalRecord($universalRecord)
            ->setRailSolutionChangedInfo($railSolutionChangedInfo);
    }
    /**
     * Get UniversalRecord value
     * @return \Travelport\UniversalRecord\StructType\UniversalRecord|null
     */
    public function getUniversalRecord(): ?\Travelport\UniversalRecord\StructType\UniversalRecord
    {
        return $this->UniversalRecord;
    }
    /**
     * Set UniversalRecord value
     * @param \Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord
     * @return \Travelport\UniversalRecord\StructType\TypeRailCreateReservationRsp
     */
    public function setUniversalRecord(?\Travelport\UniversalRecord\StructType\UniversalRecord $universalRecord = null): self
    {
        $this->UniversalRecord = $universalRecord;
        
        return $this;
    }
    /**
     * Get RailSolutionChangedInfo value
     * @return \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[]
     */
    public function getRailSolutionChangedInfo(): ?array
    {
        return $this->RailSolutionChangedInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setRailSolutionChangedInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailSolutionChangedInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailSolutionChangedInfoForArrayConstraintsFromSetRailSolutionChangedInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeRailCreateReservationRspRailSolutionChangedInfoItem) {
            // validation for constraint: itemType
            if (!$typeRailCreateReservationRspRailSolutionChangedInfoItem instanceof \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo) {
                $invalidValues[] = is_object($typeRailCreateReservationRspRailSolutionChangedInfoItem) ? get_class($typeRailCreateReservationRspRailSolutionChangedInfoItem) : sprintf('%s(%s)', gettype($typeRailCreateReservationRspRailSolutionChangedInfoItem), var_export($typeRailCreateReservationRspRailSolutionChangedInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailSolutionChangedInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailSolutionChangedInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo[] $railSolutionChangedInfo
     * @return \Travelport\UniversalRecord\StructType\TypeRailCreateReservationRsp
     */
    public function setRailSolutionChangedInfo(?array $railSolutionChangedInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railSolutionChangedInfoArrayErrorMessage = self::validateRailSolutionChangedInfoForArrayConstraintsFromSetRailSolutionChangedInfo($railSolutionChangedInfo))) {
            throw new InvalidArgumentException($railSolutionChangedInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railSolutionChangedInfo) && count($railSolutionChangedInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railSolutionChangedInfo)), __LINE__);
        }
        $this->RailSolutionChangedInfo = $railSolutionChangedInfo;
        
        return $this;
    }
    /**
     * Add item to RailSolutionChangedInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo $item
     * @return \Travelport\UniversalRecord\StructType\TypeRailCreateReservationRsp
     */
    public function addToRailSolutionChangedInfo(\Travelport\UniversalRecord\StructType\RailSolutionChangedInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo) {
            throw new InvalidArgumentException(sprintf('The RailSolutionChangedInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailSolutionChangedInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailSolutionChangedInfo) && count($this->RailSolutionChangedInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailSolutionChangedInfo)), __LINE__);
        }
        $this->RailSolutionChangedInfo[] = $item;
        
        return $this;
    }
}
