<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Number;
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
     * @return \Travelport\Air\StructType\ExchangedTicketInfo
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
}
