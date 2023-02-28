<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeBundleTotal StructType
 * Meta information extracted from the WSDL
 * - documentation: Only used within an AirExchangeQuoteRsp | Total exchange and penalty information for one ticket number
 * @subpackage Structs
 */
class AirExchangeBundleTotal extends AbstractStructBase
{
    /**
     * The AirExchangeInfo
     * Meta information extracted from the WSDL
     * - ref: common:AirExchangeInfo
     * @var \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirExchangeInfo $AirExchangeInfo = null;
    /**
     * The Penalty
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Penalty
     * @var \Travelport\UniversalRecord\StructType\Penalty[]
     */
    protected ?array $Penalty = null;
    /**
     * Constructor method for AirExchangeBundleTotal
     * @uses AirExchangeBundleTotal::setAirExchangeInfo()
     * @uses AirExchangeBundleTotal::setPenalty()
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null, ?array $penalty = null)
    {
        $this
            ->setAirExchangeInfo($airExchangeInfo)
            ->setPenalty($penalty);
    }
    /**
     * Get AirExchangeInfo value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    public function getAirExchangeInfo(): ?\Travelport\UniversalRecord\StructType\AirExchangeInfo
    {
        return $this->AirExchangeInfo;
    }
    /**
     * Set AirExchangeInfo value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
     */
    public function setAirExchangeInfo(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null): self
    {
        $this->AirExchangeInfo = $airExchangeInfo;
        
        return $this;
    }
    /**
     * Get Penalty value
     * @return \Travelport\UniversalRecord\StructType\Penalty[]
     */
    public function getPenalty(): ?array
    {
        return $this->Penalty;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPenalty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPenalty method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePenaltyForArrayConstraintFromSetPenalty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeBundleTotalPenaltyItem) {
            // validation for constraint: itemType
            if (!$airExchangeBundleTotalPenaltyItem instanceof \Travelport\UniversalRecord\StructType\Penalty) {
                $invalidValues[] = is_object($airExchangeBundleTotalPenaltyItem) ? get_class($airExchangeBundleTotalPenaltyItem) : sprintf('%s(%s)', gettype($airExchangeBundleTotalPenaltyItem), var_export($airExchangeBundleTotalPenaltyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Penalty property can only contain items of type \Travelport\UniversalRecord\StructType\Penalty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Penalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
     */
    public function setPenalty(?array $penalty = null): self
    {
        // validation for constraint: array
        if ('' !== ($penaltyArrayErrorMessage = self::validatePenaltyForArrayConstraintFromSetPenalty($penalty))) {
            throw new InvalidArgumentException($penaltyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($penalty) && count($penalty) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($penalty)), __LINE__);
        }
        $this->Penalty = $penalty;
        
        return $this;
    }
    /**
     * Add item to Penalty value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Penalty $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundleTotal
     */
    public function addToPenalty(\Travelport\UniversalRecord\StructType\Penalty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Penalty) {
            throw new InvalidArgumentException(sprintf('The Penalty property can only contain items of type \Travelport\UniversalRecord\StructType\Penalty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Penalty) && count($this->Penalty) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Penalty)), __LINE__);
        }
        $this->Penalty[] = $item;
        
        return $this;
    }
}
