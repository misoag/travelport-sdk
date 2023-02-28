<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirPriceResult StructType
 * Meta information extracted from the WSDL
 * - documentation: A solution will be returned if one exists. Otherwise an error will be present
 * @subpackage Structs
 */
class AirPriceResult extends AbstractStructBase
{
    /**
     * The AirPricingSolution
     * Meta information extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AirPricingSolution
     * @var \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    protected ?array $AirPricingSolution = null;
    /**
     * The FareRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRule
     * @var \Travelport\UniversalRecord\StructType\FareRule[]
     */
    protected ?array $FareRule = null;
    /**
     * The AirPriceError
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeResultMessage $AirPriceError = null;
    /**
     * The CommandKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $CommandKey = null;
    /**
     * Constructor method for AirPriceResult
     * @uses AirPriceResult::setAirPricingSolution()
     * @uses AirPriceResult::setFareRule()
     * @uses AirPriceResult::setAirPriceError()
     * @uses AirPriceResult::setCommandKey()
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @param \Travelport\UniversalRecord\StructType\FareRule[] $fareRule
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError
     * @param string $commandKey
     */
    public function __construct(?array $airPricingSolution = null, ?array $fareRule = null, ?\Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError = null, ?string $commandKey = null)
    {
        $this
            ->setAirPricingSolution($airPricingSolution)
            ->setFareRule($fareRule)
            ->setAirPriceError($airPriceError)
            ->setCommandKey($commandKey);
    }
    /**
     * Get AirPricingSolution value
     * @return \Travelport\UniversalRecord\StructType\AirPricingSolution[]
     */
    public function getAirPricingSolution(): ?array
    {
        return $this->AirPricingSolution;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirPricingSolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingSolution method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingSolutionForArrayConstraintFromSetAirPricingSolution(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPriceResultAirPricingSolutionItem) {
            // validation for constraint: itemType
            if (!$airPriceResultAirPricingSolutionItem instanceof \Travelport\UniversalRecord\StructType\AirPricingSolution) {
                $invalidValues[] = is_object($airPriceResultAirPricingSolutionItem) ? get_class($airPriceResultAirPricingSolutionItem) : sprintf('%s(%s)', gettype($airPriceResultAirPricingSolutionItem), var_export($airPriceResultAirPricingSolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolution, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution[] $airPricingSolution
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setAirPricingSolution(?array $airPricingSolution = null): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingSolutionArrayErrorMessage = self::validateAirPricingSolutionForArrayConstraintFromSetAirPricingSolution($airPricingSolution))) {
            throw new InvalidArgumentException($airPricingSolutionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($airPricingSolution) && count($airPricingSolution) > 99) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 99', count($airPricingSolution)), __LINE__);
        }
        $this->AirPricingSolution = $airPricingSolution;
        
        return $this;
    }
    /**
     * Add item to AirPricingSolution value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingSolution $item
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function addToAirPricingSolution(\Travelport\UniversalRecord\StructType\AirPricingSolution $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingSolution) {
            throw new InvalidArgumentException(sprintf('The AirPricingSolution property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingSolution, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(99)
        if (is_array($this->AirPricingSolution) && count($this->AirPricingSolution) >= 99) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 99', count($this->AirPricingSolution)), __LINE__);
        }
        $this->AirPricingSolution[] = $item;
        
        return $this;
    }
    /**
     * Get FareRule value
     * @return \Travelport\UniversalRecord\StructType\FareRule[]
     */
    public function getFareRule(): ?array
    {
        return $this->FareRule;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRule method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleForArrayConstraintFromSetFareRule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airPriceResultFareRuleItem) {
            // validation for constraint: itemType
            if (!$airPriceResultFareRuleItem instanceof \Travelport\UniversalRecord\StructType\FareRule) {
                $invalidValues[] = is_object($airPriceResultFareRuleItem) ? get_class($airPriceResultFareRuleItem) : sprintf('%s(%s)', gettype($airPriceResultFareRuleItem), var_export($airPriceResultFareRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRule property can only contain items of type \Travelport\UniversalRecord\StructType\FareRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRule value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRule[] $fareRule
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setFareRule(?array $fareRule = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleArrayErrorMessage = self::validateFareRuleForArrayConstraintFromSetFareRule($fareRule))) {
            throw new InvalidArgumentException($fareRuleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRule) && count($fareRule) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRule)), __LINE__);
        }
        $this->FareRule = $fareRule;
        
        return $this;
    }
    /**
     * Add item to FareRule value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRule $item
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function addToFareRule(\Travelport\UniversalRecord\StructType\FareRule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\FareRule) {
            throw new InvalidArgumentException(sprintf('The FareRule property can only contain items of type \Travelport\UniversalRecord\StructType\FareRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRule) && count($this->FareRule) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRule)), __LINE__);
        }
        $this->FareRule[] = $item;
        
        return $this;
    }
    /**
     * Get AirPriceError value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage|null
     */
    public function getAirPriceError(): ?\Travelport\UniversalRecord\StructType\TypeResultMessage
    {
        return $this->AirPriceError;
    }
    /**
     * Set AirPriceError value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setAirPriceError(?\Travelport\UniversalRecord\StructType\TypeResultMessage $airPriceError = null): self
    {
        $this->AirPriceError = $airPriceError;
        
        return $this;
    }
    /**
     * Get CommandKey value
     * @return string|null
     */
    public function getCommandKey(): ?string
    {
        return $this->CommandKey;
    }
    /**
     * Set CommandKey value
     * @param string $commandKey
     * @return \Travelport\UniversalRecord\StructType\AirPriceResult
     */
    public function setCommandKey(?string $commandKey = null): self
    {
        // validation for constraint: string
        if (!is_null($commandKey) && !is_string($commandKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commandKey, true), gettype($commandKey)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($commandKey) && mb_strlen((string) $commandKey) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $commandKey)), __LINE__);
        }
        $this->CommandKey = $commandKey;
        
        return $this;
    }
}
