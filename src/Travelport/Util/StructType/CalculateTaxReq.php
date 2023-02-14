<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateTaxReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to calculate US taxes based on a series of segments
 * @subpackage Structs
 */
class CalculateTaxReq extends BaseReq
{
    /**
     * The TaxCalcInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxCalcInfo
     * @var \Travelport\Util\StructType\TaxCalcInfo[]
     */
    protected ?array $TaxCalcInfo = null;
    /**
     * Constructor method for CalculateTaxReq
     * @uses CalculateTaxReq::setTaxCalcInfo()
     * @param \Travelport\Util\StructType\TaxCalcInfo[] $taxCalcInfo
     */
    public function __construct(?array $taxCalcInfo = null)
    {
        $this
            ->setTaxCalcInfo($taxCalcInfo);
    }
    /**
     * Get TaxCalcInfo value
     * @return \Travelport\Util\StructType\TaxCalcInfo[]
     */
    public function getTaxCalcInfo(): ?array
    {
        return $this->TaxCalcInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxCalcInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxCalcInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxCalcInfoForArrayConstraintsFromSetTaxCalcInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $calculateTaxReqTaxCalcInfoItem) {
            // validation for constraint: itemType
            if (!$calculateTaxReqTaxCalcInfoItem instanceof \Travelport\Util\StructType\TaxCalcInfo) {
                $invalidValues[] = is_object($calculateTaxReqTaxCalcInfoItem) ? get_class($calculateTaxReqTaxCalcInfoItem) : sprintf('%s(%s)', gettype($calculateTaxReqTaxCalcInfoItem), var_export($calculateTaxReqTaxCalcInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxCalcInfo property can only contain items of type \Travelport\Util\StructType\TaxCalcInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxCalcInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TaxCalcInfo[] $taxCalcInfo
     * @return \Travelport\Util\StructType\CalculateTaxReq
     */
    public function setTaxCalcInfo(?array $taxCalcInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxCalcInfoArrayErrorMessage = self::validateTaxCalcInfoForArrayConstraintsFromSetTaxCalcInfo($taxCalcInfo))) {
            throw new InvalidArgumentException($taxCalcInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxCalcInfo) && count($taxCalcInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxCalcInfo)), __LINE__);
        }
        $this->TaxCalcInfo = $taxCalcInfo;
        
        return $this;
    }
    /**
     * Add item to TaxCalcInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TaxCalcInfo $item
     * @return \Travelport\Util\StructType\CalculateTaxReq
     */
    public function addToTaxCalcInfo(\Travelport\Util\StructType\TaxCalcInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TaxCalcInfo) {
            throw new InvalidArgumentException(sprintf('The TaxCalcInfo property can only contain items of type \Travelport\Util\StructType\TaxCalcInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxCalcInfo) && count($this->TaxCalcInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxCalcInfo)), __LINE__);
        }
        $this->TaxCalcInfo[] = $item;
        
        return $this;
    }
}
