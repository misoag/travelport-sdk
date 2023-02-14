<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProhibitedAccountCodes StructType
 * @subpackage Structs
 */
class ProhibitedAccountCodes extends AbstractStructBase
{
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    protected ?array $AccountCode = null;
    /**
     * Constructor method for ProhibitedAccountCodes
     * @uses ProhibitedAccountCodes::setAccountCode()
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     */
    public function __construct(?array $accountCode = null)
    {
        $this
            ->setAccountCode($accountCode);
    }
    /**
     * Get AccountCode value
     * @return \Travelport\UniversalRecord\StructType\AccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->AccountCode;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountCodeForArrayConstraintsFromSetAccountCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prohibitedAccountCodesAccountCodeItem) {
            // validation for constraint: itemType
            if (!$prohibitedAccountCodesAccountCodeItem instanceof \Travelport\UniversalRecord\StructType\AccountCode) {
                $invalidValues[] = is_object($prohibitedAccountCodesAccountCodeItem) ? get_class($prohibitedAccountCodesAccountCodeItem) : sprintf('%s(%s)', gettype($prohibitedAccountCodesAccountCodeItem), var_export($prohibitedAccountCodesAccountCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountCode property can only contain items of type \Travelport\UniversalRecord\StructType\AccountCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode[] $accountCode
     * @return \Travelport\UniversalRecord\StructType\ProhibitedAccountCodes
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountCodeArrayErrorMessage = self::validateAccountCodeForArrayConstraintsFromSetAccountCode($accountCode))) {
            throw new InvalidArgumentException($accountCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountCode) && count($accountCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AccountCode $item
     * @return \Travelport\UniversalRecord\StructType\ProhibitedAccountCodes
     */
    public function addToAccountCode(\Travelport\UniversalRecord\StructType\AccountCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AccountCode) {
            throw new InvalidArgumentException(sprintf('The AccountCode property can only contain items of type \Travelport\UniversalRecord\StructType\AccountCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountCode) && count($this->AccountCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountCode)), __LINE__);
        }
        $this->AccountCode[] = $item;
        
        return $this;
    }
}
