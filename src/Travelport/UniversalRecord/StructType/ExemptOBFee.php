<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExemptOBFee StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to specify which OB fees are exempt; if none are listed, it means all should be exempt.
 * @subpackage Structs
 */
class ExemptOBFee extends AbstractStructBase
{
    /**
     * The SubCode
     * Meta information extracted from the WSDL
     * - documentation: Used to specify an OB fee as exempt.
     * - base: xs:string
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $SubCode = null;
    /**
     * Constructor method for ExemptOBFee
     * @uses ExemptOBFee::setSubCode()
     * @param string[] $subCode
     */
    public function __construct(?array $subCode = null)
    {
        $this
            ->setSubCode($subCode);
    }
    /**
     * Get SubCode value
     * @return string[]
     */
    public function getSubCode(): ?array
    {
        return $this->SubCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSubCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubCodeForArrayConstraintFromSetSubCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $exemptOBFeeSubCodeItem) {
            // validation for constraint: itemType
            if (!is_string($exemptOBFeeSubCodeItem)) {
                $invalidValues[] = is_object($exemptOBFeeSubCodeItem) ? get_class($exemptOBFeeSubCodeItem) : sprintf('%s(%s)', gettype($exemptOBFeeSubCodeItem), var_export($exemptOBFeeSubCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SubCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SubCode value
     * @throws InvalidArgumentException
     * @param string[] $subCode
     * @return \Travelport\UniversalRecord\StructType\ExemptOBFee
     */
    public function setSubCode(?array $subCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($subCodeArrayErrorMessage = self::validateSubCodeForArrayConstraintFromSetSubCode($subCode))) {
            throw new InvalidArgumentException($subCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($subCode) && count($subCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 8', count($subCode)), __LINE__);
        }
        $this->SubCode = $subCode;
        
        return $this;
    }
    /**
     * Add item to SubCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\ExemptOBFee
     */
    public function addToSubCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SubCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($this->SubCode) && count($this->SubCode) >= 8) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 8', count($this->SubCode)), __LINE__);
        }
        $this->SubCode[] = $item;
        
        return $this;
    }
}
