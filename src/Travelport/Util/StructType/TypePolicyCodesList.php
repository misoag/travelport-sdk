<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePolicyCodesList StructType
 * @subpackage Structs
 */
class TypePolicyCodesList extends AbstractStructBase
{
    /**
     * The PolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why an item was determined to be ‘out of policy’.
     * - base: xs:string
     * - maxOccurs: 10
     * - minOccurs: 0
     * - type: typePolicyCode
     * - use: optional
     * @var string[]
     */
    protected ?array $PolicyCode = null;
    /**
     * The MinPolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why the minimum fare or rate was determined to be ‘out of policy’.
     * - base: xs:string
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MinPolicyCode = null;
    /**
     * The MaxPolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why the maximum fare or rate was determined to be ‘out of policy’.
     * - base: xs:string
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MaxPolicyCode = null;
    /**
     * Constructor method for typePolicyCodesList
     * @uses TypePolicyCodesList::setPolicyCode()
     * @uses TypePolicyCodesList::setMinPolicyCode()
     * @uses TypePolicyCodesList::setMaxPolicyCode()
     * @param string[] $policyCode
     * @param string[] $minPolicyCode
     * @param string[] $maxPolicyCode
     */
    public function __construct(?array $policyCode = null, ?array $minPolicyCode = null, ?array $maxPolicyCode = null)
    {
        $this
            ->setPolicyCode($policyCode)
            ->setMinPolicyCode($minPolicyCode)
            ->setMaxPolicyCode($maxPolicyCode);
    }
    /**
     * Get PolicyCode value
     * @return string[]
     */
    public function getPolicyCode(): ?array
    {
        return $this->PolicyCode;
    }
    /**
     * This method is responsible for validating the values passed to the setPolicyCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyCodeForArrayConstraintsFromSetPolicyCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typePolicyCodesListPolicyCodeItem) {
            // validation for constraint: itemType
            if (!is_string($typePolicyCodesListPolicyCodeItem)) {
                $invalidValues[] = is_object($typePolicyCodesListPolicyCodeItem) ? get_class($typePolicyCodesListPolicyCodeItem) : sprintf('%s(%s)', gettype($typePolicyCodesListPolicyCodeItem), var_export($typePolicyCodesListPolicyCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PolicyCode value
     * @throws InvalidArgumentException
     * @param string[] $policyCode
     * @return \Travelport\Util\StructType\TypePolicyCodesList
     */
    public function setPolicyCode(?array $policyCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($policyCodeArrayErrorMessage = self::validatePolicyCodeForArrayConstraintsFromSetPolicyCode($policyCode))) {
            throw new InvalidArgumentException($policyCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($policyCode) && count($policyCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($policyCode)), __LINE__);
        }
        $this->PolicyCode = $policyCode;
        
        return $this;
    }
    /**
     * Add item to PolicyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\TypePolicyCodesList
     */
    public function addToPolicyCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The PolicyCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PolicyCode) && count($this->PolicyCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PolicyCode)), __LINE__);
        }
        $this->PolicyCode[] = $item;
        
        return $this;
    }
    /**
     * Get MinPolicyCode value
     * @return string[]
     */
    public function getMinPolicyCode(): ?array
    {
        return $this->MinPolicyCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMinPolicyCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMinPolicyCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMinPolicyCodeForArrayConstraintsFromSetMinPolicyCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typePolicyCodesListMinPolicyCodeItem) {
            // validation for constraint: itemType
            if (!is_string($typePolicyCodesListMinPolicyCodeItem)) {
                $invalidValues[] = is_object($typePolicyCodesListMinPolicyCodeItem) ? get_class($typePolicyCodesListMinPolicyCodeItem) : sprintf('%s(%s)', gettype($typePolicyCodesListMinPolicyCodeItem), var_export($typePolicyCodesListMinPolicyCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MinPolicyCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MinPolicyCode value
     * @throws InvalidArgumentException
     * @param string[] $minPolicyCode
     * @return \Travelport\Util\StructType\TypePolicyCodesList
     */
    public function setMinPolicyCode(?array $minPolicyCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($minPolicyCodeArrayErrorMessage = self::validateMinPolicyCodeForArrayConstraintsFromSetMinPolicyCode($minPolicyCode))) {
            throw new InvalidArgumentException($minPolicyCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($minPolicyCode) && count($minPolicyCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($minPolicyCode)), __LINE__);
        }
        $this->MinPolicyCode = $minPolicyCode;
        
        return $this;
    }
    /**
     * Add item to MinPolicyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\TypePolicyCodesList
     */
    public function addToMinPolicyCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MinPolicyCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->MinPolicyCode) && count($this->MinPolicyCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->MinPolicyCode)), __LINE__);
        }
        $this->MinPolicyCode[] = $item;
        
        return $this;
    }
    /**
     * Get MaxPolicyCode value
     * @return string[]
     */
    public function getMaxPolicyCode(): ?array
    {
        return $this->MaxPolicyCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMaxPolicyCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMaxPolicyCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMaxPolicyCodeForArrayConstraintsFromSetMaxPolicyCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typePolicyCodesListMaxPolicyCodeItem) {
            // validation for constraint: itemType
            if (!is_string($typePolicyCodesListMaxPolicyCodeItem)) {
                $invalidValues[] = is_object($typePolicyCodesListMaxPolicyCodeItem) ? get_class($typePolicyCodesListMaxPolicyCodeItem) : sprintf('%s(%s)', gettype($typePolicyCodesListMaxPolicyCodeItem), var_export($typePolicyCodesListMaxPolicyCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MaxPolicyCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MaxPolicyCode value
     * @throws InvalidArgumentException
     * @param string[] $maxPolicyCode
     * @return \Travelport\Util\StructType\TypePolicyCodesList
     */
    public function setMaxPolicyCode(?array $maxPolicyCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($maxPolicyCodeArrayErrorMessage = self::validateMaxPolicyCodeForArrayConstraintsFromSetMaxPolicyCode($maxPolicyCode))) {
            throw new InvalidArgumentException($maxPolicyCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($maxPolicyCode) && count($maxPolicyCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($maxPolicyCode)), __LINE__);
        }
        $this->MaxPolicyCode = $maxPolicyCode;
        
        return $this;
    }
    /**
     * Add item to MaxPolicyCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\TypePolicyCodesList
     */
    public function addToMaxPolicyCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MaxPolicyCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->MaxPolicyCode) && count($this->MaxPolicyCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->MaxPolicyCode)), __LINE__);
        }
        $this->MaxPolicyCode[] = $item;
        
        return $this;
    }
}
