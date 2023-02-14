<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContractCodes StructType
 * @subpackage Structs
 */
class ContractCodes extends AbstractStructBase
{
    /**
     * The ContractCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: ContractCode
     * @var \Travelport\UniversalRecord\StructType\ContractCode[]
     */
    protected ?array $ContractCode = null;
    /**
     * Constructor method for ContractCodes
     * @uses ContractCodes::setContractCode()
     * @param \Travelport\UniversalRecord\StructType\ContractCode[] $contractCode
     */
    public function __construct(?array $contractCode = null)
    {
        $this
            ->setContractCode($contractCode);
    }
    /**
     * Get ContractCode value
     * @return \Travelport\UniversalRecord\StructType\ContractCode[]
     */
    public function getContractCode(): ?array
    {
        return $this->ContractCode;
    }
    /**
     * This method is responsible for validating the values passed to the setContractCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContractCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContractCodeForArrayConstraintsFromSetContractCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $contractCodesContractCodeItem) {
            // validation for constraint: itemType
            if (!$contractCodesContractCodeItem instanceof \Travelport\UniversalRecord\StructType\ContractCode) {
                $invalidValues[] = is_object($contractCodesContractCodeItem) ? get_class($contractCodesContractCodeItem) : sprintf('%s(%s)', gettype($contractCodesContractCodeItem), var_export($contractCodesContractCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ContractCode property can only contain items of type \Travelport\UniversalRecord\StructType\ContractCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ContractCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContractCode[] $contractCode
     * @return \Travelport\UniversalRecord\StructType\ContractCodes
     */
    public function setContractCode(?array $contractCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($contractCodeArrayErrorMessage = self::validateContractCodeForArrayConstraintsFromSetContractCode($contractCode))) {
            throw new InvalidArgumentException($contractCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($contractCode) && count($contractCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($contractCode)), __LINE__);
        }
        $this->ContractCode = $contractCode;
        
        return $this;
    }
    /**
     * Add item to ContractCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ContractCode $item
     * @return \Travelport\UniversalRecord\StructType\ContractCodes
     */
    public function addToContractCode(\Travelport\UniversalRecord\StructType\ContractCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ContractCode) {
            throw new InvalidArgumentException(sprintf('The ContractCode property can only contain items of type \Travelport\UniversalRecord\StructType\ContractCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ContractCode) && count($this->ContractCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ContractCode)), __LINE__);
        }
        $this->ContractCode[] = $item;
        
        return $this;
    }
}
