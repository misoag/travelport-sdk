<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatesAndDates StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the rates that apply over a date range, all with the same status. May represent multiple rooms.
 * @subpackage Structs
 */
class RatesAndDates extends AbstractStructBase
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The Start
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - type: typeDate
     * - use: required
     * @var string
     */
    public string $Start;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - type: typeDate
     * - use: required
     * @var string
     */
    public string $End;
    /**
     * The Low
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: required
     * @var string
     */
    public string $Low;
    /**
     * The High
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: required
     * @var string
     */
    public string $High;
    /**
     * Constructor method for RatesAndDates
     * @uses RatesAndDates::setStatus()
     * @uses RatesAndDates::setStart()
     * @uses RatesAndDates::setEnd()
     * @uses RatesAndDates::setLow()
     * @uses RatesAndDates::setHigh()
     * @param string $status
     * @param string $start
     * @param string $end
     * @param string $low
     * @param string $high
     */
    public function __construct(string $status, string $start, string $end, string $low, string $high)
    {
        $this
            ->setStatus($status)
            ->setStart($start)
            ->setEnd($end)
            ->setLow($low)
            ->setHigh($high);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Hotel\StructType\RatesAndDates
     */
    public function setStatus(string $status): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Start value
     * @return string
     */
    public function getStart(): string
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Travelport\Hotel\StructType\RatesAndDates
     */
    public function setStart(string $start): self
    {
        $this->Start = $start;
        
        return $this;
    }
    /**
     * Get End value
     * @return string
     */
    public function getEnd(): string
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Travelport\Hotel\StructType\RatesAndDates
     */
    public function setEnd(string $end): self
    {
        $this->End = $end;
        
        return $this;
    }
    /**
     * Get Low value
     * @return string
     */
    public function getLow(): string
    {
        return $this->Low;
    }
    /**
     * Set Low value
     * @param string $low
     * @return \Travelport\Hotel\StructType\RatesAndDates
     */
    public function setLow(string $low): self
    {
        $this->Low = $low;
        
        return $this;
    }
    /**
     * Get High value
     * @return string
     */
    public function getHigh(): string
    {
        return $this->High;
    }
    /**
     * Set High value
     * @param string $high
     * @return \Travelport\Hotel\StructType\RatesAndDates
     */
    public function setHigh(string $high): self
    {
        $this->High = $high;
        
        return $this;
    }
}
