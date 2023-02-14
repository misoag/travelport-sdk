<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowances StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of Baggage allowance
 * @subpackage Structs
 */
class BaggageAllowances extends AbstractStructBase
{
    /**
     * The BaggageAllowanceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: BaggageAllowanceInfo
     * @var \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[]
     */
    protected array $BaggageAllowanceInfo;
    /**
     * The CarryOnAllowanceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: CarryOnAllowanceInfo
     * @var \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[]
     */
    protected ?array $CarryOnAllowanceInfo = null;
    /**
     * The EmbargoInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: EmbargoInfo
     * @var \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[]
     */
    protected ?array $EmbargoInfo = null;
    /**
     * Constructor method for BaggageAllowances
     * @uses BaggageAllowances::setBaggageAllowanceInfo()
     * @uses BaggageAllowances::setCarryOnAllowanceInfo()
     * @uses BaggageAllowances::setEmbargoInfo()
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[] $baggageAllowanceInfo
     * @param \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[] $carryOnAllowanceInfo
     * @param \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[] $embargoInfo
     */
    public function __construct(array $baggageAllowanceInfo, ?array $carryOnAllowanceInfo = null, ?array $embargoInfo = null)
    {
        $this
            ->setBaggageAllowanceInfo($baggageAllowanceInfo)
            ->setCarryOnAllowanceInfo($carryOnAllowanceInfo)
            ->setEmbargoInfo($embargoInfo);
    }
    /**
     * Get BaggageAllowanceInfo value
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[]
     */
    public function getBaggageAllowanceInfo(): array
    {
        return $this->BaggageAllowanceInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setBaggageAllowanceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBaggageAllowanceInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBaggageAllowanceInfoForArrayConstraintsFromSetBaggageAllowanceInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageAllowancesBaggageAllowanceInfoItem) {
            // validation for constraint: itemType
            if (!$baggageAllowancesBaggageAllowanceInfoItem instanceof \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo) {
                $invalidValues[] = is_object($baggageAllowancesBaggageAllowanceInfoItem) ? get_class($baggageAllowancesBaggageAllowanceInfoItem) : sprintf('%s(%s)', gettype($baggageAllowancesBaggageAllowanceInfoItem), var_export($baggageAllowancesBaggageAllowanceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BaggageAllowanceInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BaggageAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo[] $baggageAllowanceInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function setBaggageAllowanceInfo(array $baggageAllowanceInfo): self
    {
        // validation for constraint: array
        if ('' !== ($baggageAllowanceInfoArrayErrorMessage = self::validateBaggageAllowanceInfoForArrayConstraintsFromSetBaggageAllowanceInfo($baggageAllowanceInfo))) {
            throw new InvalidArgumentException($baggageAllowanceInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($baggageAllowanceInfo) && count($baggageAllowanceInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($baggageAllowanceInfo)), __LINE__);
        }
        $this->BaggageAllowanceInfo = $baggageAllowanceInfo;
        
        return $this;
    }
    /**
     * Add item to BaggageAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function addToBaggageAllowanceInfo(\Travelport\UniversalRecord\StructType\BaggageAllowanceInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo) {
            throw new InvalidArgumentException(sprintf('The BaggageAllowanceInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BaggageAllowanceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BaggageAllowanceInfo) && count($this->BaggageAllowanceInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BaggageAllowanceInfo)), __LINE__);
        }
        $this->BaggageAllowanceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get CarryOnAllowanceInfo value
     * @return \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[]
     */
    public function getCarryOnAllowanceInfo(): ?array
    {
        return $this->CarryOnAllowanceInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCarryOnAllowanceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarryOnAllowanceInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarryOnAllowanceInfoForArrayConstraintsFromSetCarryOnAllowanceInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageAllowancesCarryOnAllowanceInfoItem) {
            // validation for constraint: itemType
            if (!$baggageAllowancesCarryOnAllowanceInfoItem instanceof \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo) {
                $invalidValues[] = is_object($baggageAllowancesCarryOnAllowanceInfoItem) ? get_class($baggageAllowancesCarryOnAllowanceInfoItem) : sprintf('%s(%s)', gettype($baggageAllowancesCarryOnAllowanceInfoItem), var_export($baggageAllowancesCarryOnAllowanceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CarryOnAllowanceInfo property can only contain items of type \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CarryOnAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo[] $carryOnAllowanceInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function setCarryOnAllowanceInfo(?array $carryOnAllowanceInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($carryOnAllowanceInfoArrayErrorMessage = self::validateCarryOnAllowanceInfoForArrayConstraintsFromSetCarryOnAllowanceInfo($carryOnAllowanceInfo))) {
            throw new InvalidArgumentException($carryOnAllowanceInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($carryOnAllowanceInfo) && count($carryOnAllowanceInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($carryOnAllowanceInfo)), __LINE__);
        }
        $this->CarryOnAllowanceInfo = $carryOnAllowanceInfo;
        
        return $this;
    }
    /**
     * Add item to CarryOnAllowanceInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function addToCarryOnAllowanceInfo(\Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo) {
            throw new InvalidArgumentException(sprintf('The CarryOnAllowanceInfo property can only contain items of type \Travelport\UniversalRecord\StructType\CarryOnAllowanceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CarryOnAllowanceInfo) && count($this->CarryOnAllowanceInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CarryOnAllowanceInfo)), __LINE__);
        }
        $this->CarryOnAllowanceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EmbargoInfo value
     * @return \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[]
     */
    public function getEmbargoInfo(): ?array
    {
        return $this->EmbargoInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setEmbargoInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmbargoInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmbargoInfoForArrayConstraintsFromSetEmbargoInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baggageAllowancesEmbargoInfoItem) {
            // validation for constraint: itemType
            if (!$baggageAllowancesEmbargoInfoItem instanceof \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo) {
                $invalidValues[] = is_object($baggageAllowancesEmbargoInfoItem) ? get_class($baggageAllowancesEmbargoInfoItem) : sprintf('%s(%s)', gettype($baggageAllowancesEmbargoInfoItem), var_export($baggageAllowancesEmbargoInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmbargoInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmbargoInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo[] $embargoInfo
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function setEmbargoInfo(?array $embargoInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($embargoInfoArrayErrorMessage = self::validateEmbargoInfoForArrayConstraintsFromSetEmbargoInfo($embargoInfo))) {
            throw new InvalidArgumentException($embargoInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($embargoInfo) && count($embargoInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($embargoInfo)), __LINE__);
        }
        $this->EmbargoInfo = $embargoInfo;
        
        return $this;
    }
    /**
     * Add item to EmbargoInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo $item
     * @return \Travelport\UniversalRecord\StructType\BaggageAllowances
     */
    public function addToEmbargoInfo(\Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo) {
            throw new InvalidArgumentException(sprintf('The EmbargoInfo property can only contain items of type \Travelport\UniversalRecord\StructType\BaseBaggageAllowanceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EmbargoInfo) && count($this->EmbargoInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EmbargoInfo)), __LINE__);
        }
        $this->EmbargoInfo[] = $item;
        
        return $this;
    }
}
