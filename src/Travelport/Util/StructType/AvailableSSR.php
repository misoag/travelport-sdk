<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableSSR StructType
 * Meta information extracted from the WSDL
 * - documentation: A wrapper for all the information regarding each of the available SSR
 * @subpackage Structs
 */
class AvailableSSR extends AbstractStructBase
{
    /**
     * The SSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:SSR
     * @var \Travelport\Util\StructType\SSR[]
     */
    protected ?array $SSR = null;
    /**
     * The SSRRules
     * Meta information extracted from the WSDL
     * - documentation: Holds the rules for selecting the SSR in the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\ServiceRuleType[]
     */
    protected ?array $SSRRules = null;
    /**
     * The IndustryStandardSSR
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:IndustryStandardSSR
     * @var \Travelport\Util\StructType\IndustryStandardSSR[]
     */
    protected ?array $IndustryStandardSSR = null;
    /**
     * Constructor method for AvailableSSR
     * @uses AvailableSSR::setSSR()
     * @uses AvailableSSR::setSSRRules()
     * @uses AvailableSSR::setIndustryStandardSSR()
     * @param \Travelport\Util\StructType\SSR[] $sSR
     * @param \Travelport\Util\StructType\ServiceRuleType[] $sSRRules
     * @param \Travelport\Util\StructType\IndustryStandardSSR[] $industryStandardSSR
     */
    public function __construct(?array $sSR = null, ?array $sSRRules = null, ?array $industryStandardSSR = null)
    {
        $this
            ->setSSR($sSR)
            ->setSSRRules($sSRRules)
            ->setIndustryStandardSSR($industryStandardSSR);
    }
    /**
     * Get SSR value
     * @return \Travelport\Util\StructType\SSR[]
     */
    public function getSSR(): ?array
    {
        return $this->SSR;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRForArrayConstraintFromSetSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $availableSSRSSRItem) {
            // validation for constraint: itemType
            if (!$availableSSRSSRItem instanceof \Travelport\Util\StructType\SSR) {
                $invalidValues[] = is_object($availableSSRSSRItem) ? get_class($availableSSRSSRItem) : sprintf('%s(%s)', gettype($availableSSRSSRItem), var_export($availableSSRSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSR property can only contain items of type \Travelport\Util\StructType\SSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SSR[] $sSR
     * @return \Travelport\Util\StructType\AvailableSSR
     */
    public function setSSR(?array $sSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRArrayErrorMessage = self::validateSSRForArrayConstraintFromSetSSR($sSR))) {
            throw new InvalidArgumentException($sSRArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSR) && count($sSR) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSR)), __LINE__);
        }
        $this->SSR = $sSR;
        
        return $this;
    }
    /**
     * Add item to SSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SSR $item
     * @return \Travelport\Util\StructType\AvailableSSR
     */
    public function addToSSR(\Travelport\Util\StructType\SSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SSR) {
            throw new InvalidArgumentException(sprintf('The SSR property can only contain items of type \Travelport\Util\StructType\SSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSR) && count($this->SSR) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSR)), __LINE__);
        }
        $this->SSR[] = $item;
        
        return $this;
    }
    /**
     * Get SSRRules value
     * @return \Travelport\Util\StructType\ServiceRuleType[]
     */
    public function getSSRRules(): ?array
    {
        return $this->SSRRules;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSSRRules method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSSRRules method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSSRRulesForArrayConstraintFromSetSSRRules(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $availableSSRSSRRulesItem) {
            // validation for constraint: itemType
            if (!$availableSSRSSRRulesItem instanceof \Travelport\Util\StructType\ServiceRuleType) {
                $invalidValues[] = is_object($availableSSRSSRRulesItem) ? get_class($availableSSRSSRRulesItem) : sprintf('%s(%s)', gettype($availableSSRSSRRulesItem), var_export($availableSSRSSRRulesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SSRRules property can only contain items of type \Travelport\Util\StructType\ServiceRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SSRRules value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ServiceRuleType[] $sSRRules
     * @return \Travelport\Util\StructType\AvailableSSR
     */
    public function setSSRRules(?array $sSRRules = null): self
    {
        // validation for constraint: array
        if ('' !== ($sSRRulesArrayErrorMessage = self::validateSSRRulesForArrayConstraintFromSetSSRRules($sSRRules))) {
            throw new InvalidArgumentException($sSRRulesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($sSRRules) && count($sSRRules) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($sSRRules)), __LINE__);
        }
        $this->SSRRules = $sSRRules;
        
        return $this;
    }
    /**
     * Add item to SSRRules value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ServiceRuleType $item
     * @return \Travelport\Util\StructType\AvailableSSR
     */
    public function addToSSRRules(\Travelport\Util\StructType\ServiceRuleType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ServiceRuleType) {
            throw new InvalidArgumentException(sprintf('The SSRRules property can only contain items of type \Travelport\Util\StructType\ServiceRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SSRRules) && count($this->SSRRules) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SSRRules)), __LINE__);
        }
        $this->SSRRules[] = $item;
        
        return $this;
    }
    /**
     * Get IndustryStandardSSR value
     * @return \Travelport\Util\StructType\IndustryStandardSSR[]
     */
    public function getIndustryStandardSSR(): ?array
    {
        return $this->IndustryStandardSSR;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setIndustryStandardSSR method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIndustryStandardSSR method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIndustryStandardSSRForArrayConstraintFromSetIndustryStandardSSR(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $availableSSRIndustryStandardSSRItem) {
            // validation for constraint: itemType
            if (!$availableSSRIndustryStandardSSRItem instanceof \Travelport\Util\StructType\IndustryStandardSSR) {
                $invalidValues[] = is_object($availableSSRIndustryStandardSSRItem) ? get_class($availableSSRIndustryStandardSSRItem) : sprintf('%s(%s)', gettype($availableSSRIndustryStandardSSRItem), var_export($availableSSRIndustryStandardSSRItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IndustryStandardSSR property can only contain items of type \Travelport\Util\StructType\IndustryStandardSSR, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IndustryStandardSSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\IndustryStandardSSR[] $industryStandardSSR
     * @return \Travelport\Util\StructType\AvailableSSR
     */
    public function setIndustryStandardSSR(?array $industryStandardSSR = null): self
    {
        // validation for constraint: array
        if ('' !== ($industryStandardSSRArrayErrorMessage = self::validateIndustryStandardSSRForArrayConstraintFromSetIndustryStandardSSR($industryStandardSSR))) {
            throw new InvalidArgumentException($industryStandardSSRArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($industryStandardSSR) && count($industryStandardSSR) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($industryStandardSSR)), __LINE__);
        }
        $this->IndustryStandardSSR = $industryStandardSSR;
        
        return $this;
    }
    /**
     * Add item to IndustryStandardSSR value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\IndustryStandardSSR $item
     * @return \Travelport\Util\StructType\AvailableSSR
     */
    public function addToIndustryStandardSSR(\Travelport\Util\StructType\IndustryStandardSSR $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\IndustryStandardSSR) {
            throw new InvalidArgumentException(sprintf('The IndustryStandardSSR property can only contain items of type \Travelport\Util\StructType\IndustryStandardSSR, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->IndustryStandardSSR) && count($this->IndustryStandardSSR) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->IndustryStandardSSR)), __LINE__);
        }
        $this->IndustryStandardSSR[] = $item;
        
        return $this;
    }
}
