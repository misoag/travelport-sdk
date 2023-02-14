<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalPenaltyTaxInfo StructType
 * @subpackage Structs
 */
class TotalPenaltyTaxInfo extends AbstractStructBase
{
    /**
     * The PenaltyTaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTax[]
     */
    protected ?array $PenaltyTaxInfo = null;
    /**
     * The TotalPenaltyTax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $TotalPenaltyTax = null;
    /**
     * Constructor method for TotalPenaltyTaxInfo
     * @uses TotalPenaltyTaxInfo::setPenaltyTaxInfo()
     * @uses TotalPenaltyTaxInfo::setTotalPenaltyTax()
     * @param \Travelport\UniversalRecord\StructType\TypeTax[] $penaltyTaxInfo
     * @param string $totalPenaltyTax
     */
    public function __construct(?array $penaltyTaxInfo = null, ?string $totalPenaltyTax = null)
    {
        $this
            ->setPenaltyTaxInfo($penaltyTaxInfo)
            ->setTotalPenaltyTax($totalPenaltyTax);
    }
    /**
     * Get PenaltyTaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTax[]
     */
    public function getPenaltyTaxInfo(): ?array
    {
        return $this->PenaltyTaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setPenaltyTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPenaltyTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePenaltyTaxInfoForArrayConstraintsFromSetPenaltyTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $totalPenaltyTaxInfoPenaltyTaxInfoItem) {
            // validation for constraint: itemType
            if (!$totalPenaltyTaxInfoPenaltyTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeTax) {
                $invalidValues[] = is_object($totalPenaltyTaxInfoPenaltyTaxInfoItem) ? get_class($totalPenaltyTaxInfoPenaltyTaxInfoItem) : sprintf('%s(%s)', gettype($totalPenaltyTaxInfoPenaltyTaxInfoItem), var_export($totalPenaltyTaxInfoPenaltyTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PenaltyTaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTax, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PenaltyTaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTax[] $penaltyTaxInfo
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
     */
    public function setPenaltyTaxInfo(?array $penaltyTaxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($penaltyTaxInfoArrayErrorMessage = self::validatePenaltyTaxInfoForArrayConstraintsFromSetPenaltyTaxInfo($penaltyTaxInfo))) {
            throw new InvalidArgumentException($penaltyTaxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($penaltyTaxInfo) && count($penaltyTaxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($penaltyTaxInfo)), __LINE__);
        }
        $this->PenaltyTaxInfo = $penaltyTaxInfo;
        
        return $this;
    }
    /**
     * Add item to PenaltyTaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTax $item
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
     */
    public function addToPenaltyTaxInfo(\Travelport\UniversalRecord\StructType\TypeTax $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTax) {
            throw new InvalidArgumentException(sprintf('The PenaltyTaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTax, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PenaltyTaxInfo) && count($this->PenaltyTaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PenaltyTaxInfo)), __LINE__);
        }
        $this->PenaltyTaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get TotalPenaltyTax value
     * @return string|null
     */
    public function getTotalPenaltyTax(): ?string
    {
        return $this->TotalPenaltyTax;
    }
    /**
     * Set TotalPenaltyTax value
     * @param string $totalPenaltyTax
     * @return \Travelport\UniversalRecord\StructType\TotalPenaltyTaxInfo
     */
    public function setTotalPenaltyTax(?string $totalPenaltyTax = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPenaltyTax) && !is_string($totalPenaltyTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPenaltyTax, true), gettype($totalPenaltyTax)), __LINE__);
        }
        $this->TotalPenaltyTax = $totalPenaltyTax;
        
        return $this;
    }
}
