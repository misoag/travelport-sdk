<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MerchandisingPricingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: The account code is used to get corporate discounted pricing on paid seats. Provider:ACH
 * @subpackage Structs
 */
class MerchandisingPricingModifiers extends AbstractStructBase
{
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode[]
     */
    protected ?array $AccountCode = null;
    /**
     * Constructor method for MerchandisingPricingModifiers
     * @uses MerchandisingPricingModifiers::setAccountCode()
     * @param \Travelport\Util\StructType\AccountCode[] $accountCode
     */
    public function __construct(?array $accountCode = null)
    {
        $this
            ->setAccountCode($accountCode);
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Util\StructType\AccountCode[]
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
        foreach ($values as $merchandisingPricingModifiersAccountCodeItem) {
            // validation for constraint: itemType
            if (!$merchandisingPricingModifiersAccountCodeItem instanceof \Travelport\Util\StructType\AccountCode) {
                $invalidValues[] = is_object($merchandisingPricingModifiersAccountCodeItem) ? get_class($merchandisingPricingModifiersAccountCodeItem) : sprintf('%s(%s)', gettype($merchandisingPricingModifiersAccountCodeItem), var_export($merchandisingPricingModifiersAccountCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountCode property can only contain items of type \Travelport\Util\StructType\AccountCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountCode[] $accountCode
     * @return \Travelport\Util\StructType\MerchandisingPricingModifiers
     */
    public function setAccountCode(?array $accountCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountCodeArrayErrorMessage = self::validateAccountCodeForArrayConstraintsFromSetAccountCode($accountCode))) {
            throw new InvalidArgumentException($accountCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($accountCode) && count($accountCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10', count($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Add item to AccountCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AccountCode $item
     * @return \Travelport\Util\StructType\MerchandisingPricingModifiers
     */
    public function addToAccountCode(\Travelport\Util\StructType\AccountCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AccountCode) {
            throw new InvalidArgumentException(sprintf('The AccountCode property can only contain items of type \Travelport\Util\StructType\AccountCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10)
        if (is_array($this->AccountCode) && count($this->AccountCode) >= 10) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10', count($this->AccountCode)), __LINE__);
        }
        $this->AccountCode[] = $item;
        
        return $this;
    }
}