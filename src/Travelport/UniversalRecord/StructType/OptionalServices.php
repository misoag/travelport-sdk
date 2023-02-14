<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServices StructType
 * Meta information extracted from the WSDL
 * - documentation: Details about an unselected or "other" option when optional services are grouped together. | A wrapper for all the information regarding each of the Optional services
 * @subpackage Structs
 */
class OptionalServices extends AbstractStructBase
{
    /**
     * The OptionalServicesTotal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\OptionalServicesTotal|null
     */
    protected ?\Travelport\UniversalRecord\StructType\OptionalServicesTotal $OptionalServicesTotal = null;
    /**
     * The OptionalService
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: OptionalService
     * @var \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    protected ?array $OptionalService = null;
    /**
     * The GroupedOptionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GroupedOptionInfo
     * @var \Travelport\UniversalRecord\StructType\GroupedOptionInfo[]
     */
    protected ?array $GroupedOptionInfo = null;
    /**
     * The OptionalServiceRules
     * Meta information extracted from the WSDL
     * - documentation: Holds the rules for selecting the optional service in the itinerary
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\ServiceRuleType[]
     */
    protected ?array $OptionalServiceRules = null;
    /**
     * Constructor method for OptionalServices
     * @uses OptionalServices::setOptionalServicesTotal()
     * @uses OptionalServices::setOptionalService()
     * @uses OptionalServices::setGroupedOptionInfo()
     * @uses OptionalServices::setOptionalServiceRules()
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @param \Travelport\UniversalRecord\StructType\GroupedOptionInfo[] $groupedOptionInfo
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType[] $optionalServiceRules
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal = null, ?array $optionalService = null, ?array $groupedOptionInfo = null, ?array $optionalServiceRules = null)
    {
        $this
            ->setOptionalServicesTotal($optionalServicesTotal)
            ->setOptionalService($optionalService)
            ->setGroupedOptionInfo($groupedOptionInfo)
            ->setOptionalServiceRules($optionalServiceRules);
    }
    /**
     * Get OptionalServicesTotal value
     * @return \Travelport\UniversalRecord\StructType\OptionalServicesTotal|null
     */
    public function getOptionalServicesTotal(): ?\Travelport\UniversalRecord\StructType\OptionalServicesTotal
    {
        return $this->OptionalServicesTotal;
    }
    /**
     * Set OptionalServicesTotal value
     * @param \Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setOptionalServicesTotal(?\Travelport\UniversalRecord\StructType\OptionalServicesTotal $optionalServicesTotal = null): self
    {
        $this->OptionalServicesTotal = $optionalServicesTotal;
        
        return $this;
    }
    /**
     * Get OptionalService value
     * @return \Travelport\UniversalRecord\StructType\OptionalService[]
     */
    public function getOptionalService(): ?array
    {
        return $this->OptionalService;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionalService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalService method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionalServiceForArrayConstraintsFromSetOptionalService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServicesOptionalServiceItem) {
            // validation for constraint: itemType
            if (!$optionalServicesOptionalServiceItem instanceof \Travelport\UniversalRecord\StructType\OptionalService) {
                $invalidValues[] = is_object($optionalServicesOptionalServiceItem) ? get_class($optionalServicesOptionalServiceItem) : sprintf('%s(%s)', gettype($optionalServicesOptionalServiceItem), var_export($optionalServicesOptionalServiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionalService property can only contain items of type \Travelport\UniversalRecord\StructType\OptionalService, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionalService value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalService[] $optionalService
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setOptionalService(?array $optionalService = null): self
    {
        // validation for constraint: array
        if ('' !== ($optionalServiceArrayErrorMessage = self::validateOptionalServiceForArrayConstraintsFromSetOptionalService($optionalService))) {
            throw new InvalidArgumentException($optionalServiceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($optionalService) && count($optionalService) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($optionalService)), __LINE__);
        }
        $this->OptionalService = $optionalService;
        
        return $this;
    }
    /**
     * Add item to OptionalService value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\OptionalService $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function addToOptionalService(\Travelport\UniversalRecord\StructType\OptionalService $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\OptionalService) {
            throw new InvalidArgumentException(sprintf('The OptionalService property can only contain items of type \Travelport\UniversalRecord\StructType\OptionalService, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OptionalService) && count($this->OptionalService) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OptionalService)), __LINE__);
        }
        $this->OptionalService[] = $item;
        
        return $this;
    }
    /**
     * Get GroupedOptionInfo value
     * @return \Travelport\UniversalRecord\StructType\GroupedOptionInfo[]
     */
    public function getGroupedOptionInfo(): ?array
    {
        return $this->GroupedOptionInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupedOptionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupedOptionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupedOptionInfoForArrayConstraintsFromSetGroupedOptionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServicesGroupedOptionInfoItem) {
            // validation for constraint: itemType
            if (!$optionalServicesGroupedOptionInfoItem instanceof \Travelport\UniversalRecord\StructType\GroupedOptionInfo) {
                $invalidValues[] = is_object($optionalServicesGroupedOptionInfoItem) ? get_class($optionalServicesGroupedOptionInfoItem) : sprintf('%s(%s)', gettype($optionalServicesGroupedOptionInfoItem), var_export($optionalServicesGroupedOptionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupedOptionInfo property can only contain items of type \Travelport\UniversalRecord\StructType\GroupedOptionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GroupedOptionInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GroupedOptionInfo[] $groupedOptionInfo
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setGroupedOptionInfo(?array $groupedOptionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupedOptionInfoArrayErrorMessage = self::validateGroupedOptionInfoForArrayConstraintsFromSetGroupedOptionInfo($groupedOptionInfo))) {
            throw new InvalidArgumentException($groupedOptionInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($groupedOptionInfo) && count($groupedOptionInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($groupedOptionInfo)), __LINE__);
        }
        $this->GroupedOptionInfo = $groupedOptionInfo;
        
        return $this;
    }
    /**
     * Add item to GroupedOptionInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\GroupedOptionInfo $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function addToGroupedOptionInfo(\Travelport\UniversalRecord\StructType\GroupedOptionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\GroupedOptionInfo) {
            throw new InvalidArgumentException(sprintf('The GroupedOptionInfo property can only contain items of type \Travelport\UniversalRecord\StructType\GroupedOptionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GroupedOptionInfo) && count($this->GroupedOptionInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GroupedOptionInfo)), __LINE__);
        }
        $this->GroupedOptionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get OptionalServiceRules value
     * @return \Travelport\UniversalRecord\StructType\ServiceRuleType[]
     */
    public function getOptionalServiceRules(): ?array
    {
        return $this->OptionalServiceRules;
    }
    /**
     * This method is responsible for validating the values passed to the setOptionalServiceRules method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOptionalServiceRules method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOptionalServiceRulesForArrayConstraintsFromSetOptionalServiceRules(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $optionalServicesOptionalServiceRulesItem) {
            // validation for constraint: itemType
            if (!$optionalServicesOptionalServiceRulesItem instanceof \Travelport\UniversalRecord\StructType\ServiceRuleType) {
                $invalidValues[] = is_object($optionalServicesOptionalServiceRulesItem) ? get_class($optionalServicesOptionalServiceRulesItem) : sprintf('%s(%s)', gettype($optionalServicesOptionalServiceRulesItem), var_export($optionalServicesOptionalServiceRulesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OptionalServiceRules property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceRuleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OptionalServiceRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType[] $optionalServiceRules
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function setOptionalServiceRules(?array $optionalServiceRules = null): self
    {
        // validation for constraint: array
        if ('' !== ($optionalServiceRulesArrayErrorMessage = self::validateOptionalServiceRulesForArrayConstraintsFromSetOptionalServiceRules($optionalServiceRules))) {
            throw new InvalidArgumentException($optionalServiceRulesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($optionalServiceRules) && count($optionalServiceRules) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($optionalServiceRules)), __LINE__);
        }
        $this->OptionalServiceRules = $optionalServiceRules;
        
        return $this;
    }
    /**
     * Add item to OptionalServiceRules value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceRuleType $item
     * @return \Travelport\UniversalRecord\StructType\OptionalServices
     */
    public function addToOptionalServiceRules(\Travelport\UniversalRecord\StructType\ServiceRuleType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceRuleType) {
            throw new InvalidArgumentException(sprintf('The OptionalServiceRules property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceRuleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OptionalServiceRules) && count($this->OptionalServiceRules) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OptionalServiceRules)), __LINE__);
        }
        $this->OptionalServiceRules[] = $item;
        
        return $this;
    }
}
