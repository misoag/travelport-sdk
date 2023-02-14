<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $Status;
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
    protected string $Start;
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
    protected string $End;
    /**
     * The Low
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: required
     * @var string
     */
    protected string $Low;
    /**
     * The High
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: common:typeMoney
     * - use: required
     * @var string
     */
    protected string $High;
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
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($start) && !preg_match('/[^:Z].*/', $start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($start, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($end) && !preg_match('/[^:Z].*/', $end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($end, true)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($low) && !is_string($low)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($low, true), gettype($low)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($high) && !is_string($high)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($high, true), gettype($high)), __LINE__);
        }
        $this->High = $high;
        
        return $this;
    }
}
