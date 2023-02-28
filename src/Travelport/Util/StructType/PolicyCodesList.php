<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyCodesList StructType
 * @subpackage Structs
 */
class PolicyCodesList extends AbstractStructBase
{
    /**
     * The PolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why an item was determined to be ‘out of policy’. | Type for PolicyCode attribute.
     * - base: xs:int
     * - maxInclusive: 9999
     * - maxOccurs: 10
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int[]
     */
    protected array $PolicyCode;
    /**
     * Constructor method for PolicyCodesList
     * @uses PolicyCodesList::setPolicyCode()
     * @param int[] $policyCode
     */
    public function __construct(array $policyCode)
    {
        $this
            ->setPolicyCode($policyCode);
    }
    /**
     * Get PolicyCode value
     * @return int[]
     */
    public function getPolicyCode(): array
    {
        return $this->PolicyCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPolicyCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyCodeForArrayConstraintFromSetPolicyCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $policyCodesListPolicyCodeItem) {
            // validation for constraint: itemType
            if (!(is_int($policyCodesListPolicyCodeItem) || ctype_digit($policyCodesListPolicyCodeItem))) {
                $invalidValues[] = is_object($policyCodesListPolicyCodeItem) ? get_class($policyCodesListPolicyCodeItem) : sprintf('%s(%s)', gettype($policyCodesListPolicyCodeItem), var_export($policyCodesListPolicyCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyCode property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PolicyCode value
     * @throws InvalidArgumentException
     * @param int[] $policyCode
     * @return \Travelport\Util\StructType\PolicyCodesList
     */
    public function setPolicyCode(array $policyCode): self
    {
        // validation for constraint: array
        if ('' !== ($policyCodeArrayErrorMessage = self::validatePolicyCodeForArrayConstraintFromSetPolicyCode($policyCode))) {
            throw new InvalidArgumentException($policyCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if (!is_null($policyCode) && $policyCode > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($policyCode, true)), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($policyCode) && count($policyCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($policyCode)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($policyCode) && $policyCode < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($policyCode, true)), __LINE__);
        }
        $this->PolicyCode = $policyCode;
        
        return $this;
    }
    /**
     * Add item to PolicyCode value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Util\StructType\PolicyCodesList
     */
    public function addToPolicyCode(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The PolicyCode property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxInclusive(9999)
        if ($item > 9999) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 9999', var_export($item, true)), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->PolicyCode) && count($this->PolicyCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->PolicyCode)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if ($item < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($item, true)), __LINE__);
        }
        $this->PolicyCode[] = $item;
        
        return $this;
    }
}
