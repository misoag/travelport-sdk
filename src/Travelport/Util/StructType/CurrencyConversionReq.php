<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyConversionReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Performs A Currency Conversion between two Currencies
 * @subpackage Structs
 */
class CurrencyConversionReq extends BaseReq
{
    /**
     * The CurrencyConversion
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: CurrencyConversion
     * @var \Travelport\Util\StructType\CurrencyConversion[]
     */
    protected array $CurrencyConversion;
    /**
     * Constructor method for CurrencyConversionReq
     * @uses CurrencyConversionReq::setCurrencyConversion()
     * @param \Travelport\Util\StructType\CurrencyConversion[] $currencyConversion
     */
    public function __construct(array $currencyConversion)
    {
        $this
            ->setCurrencyConversion($currencyConversion);
    }
    /**
     * Get CurrencyConversion value
     * @return \Travelport\Util\StructType\CurrencyConversion[]
     */
    public function getCurrencyConversion(): array
    {
        return $this->CurrencyConversion;
    }
    /**
     * This method is responsible for validating the values passed to the setCurrencyConversion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrencyConversion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrencyConversionForArrayConstraintsFromSetCurrencyConversion(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $currencyConversionReqCurrencyConversionItem) {
            // validation for constraint: itemType
            if (!$currencyConversionReqCurrencyConversionItem instanceof \Travelport\Util\StructType\CurrencyConversion) {
                $invalidValues[] = is_object($currencyConversionReqCurrencyConversionItem) ? get_class($currencyConversionReqCurrencyConversionItem) : sprintf('%s(%s)', gettype($currencyConversionReqCurrencyConversionItem), var_export($currencyConversionReqCurrencyConversionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CurrencyConversion property can only contain items of type \Travelport\Util\StructType\CurrencyConversion, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CurrencyConversion value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CurrencyConversion[] $currencyConversion
     * @return \Travelport\Util\StructType\CurrencyConversionReq
     */
    public function setCurrencyConversion(array $currencyConversion): self
    {
        // validation for constraint: array
        if ('' !== ($currencyConversionArrayErrorMessage = self::validateCurrencyConversionForArrayConstraintsFromSetCurrencyConversion($currencyConversion))) {
            throw new InvalidArgumentException($currencyConversionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($currencyConversion) && count($currencyConversion) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($currencyConversion)), __LINE__);
        }
        $this->CurrencyConversion = $currencyConversion;
        
        return $this;
    }
    /**
     * Add item to CurrencyConversion value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CurrencyConversion $item
     * @return \Travelport\Util\StructType\CurrencyConversionReq
     */
    public function addToCurrencyConversion(\Travelport\Util\StructType\CurrencyConversion $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CurrencyConversion) {
            throw new InvalidArgumentException(sprintf('The CurrencyConversion property can only contain items of type \Travelport\Util\StructType\CurrencyConversion, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CurrencyConversion) && count($this->CurrencyConversion) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CurrencyConversion)), __LINE__);
        }
        $this->CurrencyConversion[] = $item;
        
        return $this;
    }
}
