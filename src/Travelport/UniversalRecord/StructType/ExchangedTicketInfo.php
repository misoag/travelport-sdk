<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangedTicketInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains Exchanged/Reissued Ticket Information
 * @subpackage Structs
 */
class ExchangedTicketInfo extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Original Ticket that was Exchange/Reissued | Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - use: required
     * @var string
     */
    protected string $Number;
    /**
     * Constructor method for ExchangedTicketInfo
     * @uses ExchangedTicketInfo::setNumber()
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this
            ->setNumber($number);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\UniversalRecord\StructType\ExchangedTicketInfo
     */
    public function setNumber(string $number): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($number) && mb_strlen((string) $number) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
}
