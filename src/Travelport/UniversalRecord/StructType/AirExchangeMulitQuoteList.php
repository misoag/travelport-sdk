<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption[]
     */
    public ?array $AirExchangeMultiQuoteOption = null;
    /**
     * Constructor method for AirExchangeMulitQuoteList
     * @uses AirExchangeMulitQuoteList::setAirExchangeMultiQuoteOption()
     * @param \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption[] $airExchangeMultiQuoteOption
     */
    public function __construct(?array $airExchangeMultiQuoteOption = null)
    {
        $this
            ->setAirExchangeMultiQuoteOption($airExchangeMultiQuoteOption);
    }
    /**
     * Get AirExchangeMultiQuoteOption value
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption[]
     */
    public function getAirExchangeMultiQuoteOption(): ?array
    {
        return $this->AirExchangeMultiQuoteOption;
    }
    /**
     * Set AirExchangeMultiQuoteOption value
     * @param \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption[] $airExchangeMultiQuoteOption
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMulitQuoteList
     */
    public function setAirExchangeMultiQuoteOption(?array $airExchangeMultiQuoteOption = null): self
    {
        $this->AirExchangeMultiQuoteOption = $airExchangeMultiQuoteOption;
        
        return $this;
    }
    /**
     * Add item to AirExchangeMultiQuoteOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption $item
     * @return \Travelport\UniversalRecord\StructType\AirExchangeMulitQuoteList
     */
    public function addToAirExchangeMultiQuoteOption(\Travelport\UniversalRecord\StructType\AirExchangeMultiQuoteOption $item): self
    {
        $this->AirExchangeMultiQuoteOption[] = $item;
        
        return $this;
    }
}
