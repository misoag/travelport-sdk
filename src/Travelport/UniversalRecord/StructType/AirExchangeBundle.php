<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeBundle StructType
 * Meta information extracted from the WSDL
 * - documentation: Only used within an AirExchangeQuoteRsp | Used both in request and response | Bundle exchange, pricing, and penalty information for one ticket number
 * @subpackage Structs
 */
class AirExchangeBundle extends AbstractStructBase
{
    /**
     * The AirExchangeInfo
     * Meta information extracted from the WSDL
     * - ref: common:AirExchangeInfo
     * @var \Travelport\UniversalRecord\StructType\AirExchangeInfo|null
     */
    protected ?\Travelport\UniversalRecord\StructType\AirExchangeInfo $AirExchangeInfo = null;
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    protected ?array $AirPricingInfoRef = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
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
     * Constructor method for AirExchangeBundle
     * @uses AirExchangeBundle::setAirExchangeInfo()
     * @uses AirExchangeBundle::setAirPricingInfoRef()
     * @uses AirExchangeBundle::setTaxInfo()
     * @uses AirExchangeBundle::setPenalty()
     * @param \Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\Penalty[] $penalty
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null, ?array $airPricingInfoRef = null, ?array $taxInfo = null, ?array $penalty = null)
    {
        $this
            ->setAirExchangeInfo($airExchangeInfo)
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setTaxInfo($taxInfo)
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setAirExchangeInfo(?\Travelport\UniversalRecord\StructType\AirExchangeInfo $airExchangeInfo = null): self
    {
        $this->AirExchangeInfo = $airExchangeInfo;
        
        return $this;
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): ?array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeBundleAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$airExchangeBundleAirPricingInfoRefItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($airExchangeBundleAirPricingInfoRefItem) ? get_class($airExchangeBundleAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($airExchangeBundleAirPricingInfoRefItem), var_export($airExchangeBundleAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setAirPricingInfoRef(?array $airPricingInfoRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeBundleTaxInfoItem) {
            // validation for constraint: itemType
            if (!$airExchangeBundleTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($airExchangeBundleTaxInfoItem) ? get_class($airExchangeBundleTaxInfoItem) : sprintf('%s(%s)', gettype($airExchangeBundleTaxInfoItem), var_export($airExchangeBundleTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
        $this->TaxInfo[] = $item;
        
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
     * This method is responsible for validating the values passed to the setPenalty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPenalty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePenaltyForArrayConstraintsFromSetPenalty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeBundlePenaltyItem) {
            // validation for constraint: itemType
            if (!$airExchangeBundlePenaltyItem instanceof \Travelport\UniversalRecord\StructType\Penalty) {
                $invalidValues[] = is_object($airExchangeBundlePenaltyItem) ? get_class($airExchangeBundlePenaltyItem) : sprintf('%s(%s)', gettype($airExchangeBundlePenaltyItem), var_export($airExchangeBundlePenaltyItem, true));
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
     */
    public function setPenalty(?array $penalty = null): self
    {
        // validation for constraint: array
        if ('' !== ($penaltyArrayErrorMessage = self::validatePenaltyForArrayConstraintsFromSetPenalty($penalty))) {
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
     * @return \Travelport\UniversalRecord\StructType\AirExchangeBundle
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
