<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeMulitQuoteList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of AirExchangeMultiQuotes
 * @subpackage Structs
 */
class AirExchangeMulitQuoteList extends AbstractStructBase
{
    /**
     * The AirExchangeMultiQuoteOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirExchangeMultiQuoteOption
     * @var \Travelport\Util\StructType\AirExchangeMultiQuoteOption[]
     */
    protected ?array $AirExchangeMultiQuoteOption = null;
    /**
     * Constructor method for AirExchangeMulitQuoteList
     * @uses AirExchangeMulitQuoteList::setAirExchangeMultiQuoteOption()
     * @param \Travelport\Util\StructType\AirExchangeMultiQuoteOption[] $airExchangeMultiQuoteOption
     */
    public function __construct(?array $airExchangeMultiQuoteOption = null)
    {
        $this
            ->setAirExchangeMultiQuoteOption($airExchangeMultiQuoteOption);
    }
    /**
     * Get AirExchangeMultiQuoteOption value
     * @return \Travelport\Util\StructType\AirExchangeMultiQuoteOption[]
     */
    public function getAirExchangeMultiQuoteOption(): ?array
    {
        return $this->AirExchangeMultiQuoteOption;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirExchangeMultiQuoteOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirExchangeMultiQuoteOption method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirExchangeMultiQuoteOptionForArrayConstraintFromSetAirExchangeMultiQuoteOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airExchangeMulitQuoteListAirExchangeMultiQuoteOptionItem) {
            // validation for constraint: itemType
            if (!$airExchangeMulitQuoteListAirExchangeMultiQuoteOptionItem instanceof \Travelport\Util\StructType\AirExchangeMultiQuoteOption) {
                $invalidValues[] = is_object($airExchangeMulitQuoteListAirExchangeMultiQuoteOptionItem) ? get_class($airExchangeMulitQuoteListAirExchangeMultiQuoteOptionItem) : sprintf('%s(%s)', gettype($airExchangeMulitQuoteListAirExchangeMultiQuoteOptionItem), var_export($airExchangeMulitQuoteListAirExchangeMultiQuoteOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirExchangeMultiQuoteOption property can only contain items of type \Travelport\Util\StructType\AirExchangeMultiQuoteOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirExchangeMultiQuoteOption value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirExchangeMultiQuoteOption[] $airExchangeMultiQuoteOption
     * @return \Travelport\Util\StructType\AirExchangeMulitQuoteList
     */
    public function setAirExchangeMultiQuoteOption(?array $airExchangeMultiQuoteOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($airExchangeMultiQuoteOptionArrayErrorMessage = self::validateAirExchangeMultiQuoteOptionForArrayConstraintFromSetAirExchangeMultiQuoteOption($airExchangeMultiQuoteOption))) {
            throw new InvalidArgumentException($airExchangeMultiQuoteOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airExchangeMultiQuoteOption) && count($airExchangeMultiQuoteOption) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airExchangeMultiQuoteOption)), __LINE__);
        }
        $this->AirExchangeMultiQuoteOption = $airExchangeMultiQuoteOption;
        
        return $this;
    }
    /**
     * Add item to AirExchangeMultiQuoteOption value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirExchangeMultiQuoteOption $item
     * @return \Travelport\Util\StructType\AirExchangeMulitQuoteList
     */
    public function addToAirExchangeMultiQuoteOption(\Travelport\Util\StructType\AirExchangeMultiQuoteOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirExchangeMultiQuoteOption) {
            throw new InvalidArgumentException(sprintf('The AirExchangeMultiQuoteOption property can only contain items of type \Travelport\Util\StructType\AirExchangeMultiQuoteOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirExchangeMultiQuoteOption) && count($this->AirExchangeMultiQuoteOption) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirExchangeMultiQuoteOption)), __LINE__);
        }
        $this->AirExchangeMultiQuoteOption[] = $item;
        
        return $this;
    }
}
