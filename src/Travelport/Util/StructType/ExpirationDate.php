<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExpirationDate StructType
 * Meta information extracted from the WSDL
 * - documentation: Expiration Date range. For specific date usage set both limits to same value.
 * @subpackage Structs
 */
class ExpirationDate extends AbstractStructBase
{
    /**
     * The EarliestDate
     * Meta information extracted from the WSDL
     * - documentation: Earliest date of the Expiration date | Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $EarliestDate;
    /**
     * The LatestDate
     * Meta information extracted from the WSDL
     * - documentation: Latest date of the Expiration date | Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - default: 9999-12-31
     * - pattern: [^:Z].*
     * @var string|null
     */
    protected ?string $LatestDate = null;
    /**
     * Constructor method for ExpirationDate
     * @uses ExpirationDate::setEarliestDate()
     * @uses ExpirationDate::setLatestDate()
     * @param string $earliestDate
     * @param string $latestDate
     */
    public function __construct(string $earliestDate, ?string $latestDate = '9999-12-31')
    {
        $this
            ->setEarliestDate($earliestDate)
            ->setLatestDate($latestDate);
    }
    /**
     * Get EarliestDate value
     * @return string
     */
    public function getEarliestDate(): string
    {
        return $this->EarliestDate;
    }
    /**
     * Set EarliestDate value
     * @param string $earliestDate
     * @return \Travelport\Util\StructType\ExpirationDate
     */
    public function setEarliestDate(string $earliestDate): self
    {
        // validation for constraint: string
        if (!is_null($earliestDate) && !is_string($earliestDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestDate, true), gettype($earliestDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($earliestDate) && !preg_match('/[^:Z].*/', $earliestDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($earliestDate, true)), __LINE__);
        }
        $this->EarliestDate = $earliestDate;
        
        return $this;
    }
    /**
     * Get LatestDate value
     * @return string|null
     */
    public function getLatestDate(): ?string
    {
        return $this->LatestDate;
    }
    /**
     * Set LatestDate value
     * @param string $latestDate
     * @return \Travelport\Util\StructType\ExpirationDate
     */
    public function setLatestDate(?string $latestDate = '9999-12-31'): self
    {
        // validation for constraint: string
        if (!is_null($latestDate) && !is_string($latestDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestDate, true), gettype($latestDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($latestDate) && !preg_match('/[^:Z].*/', $latestDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($latestDate, true)), __LINE__);
        }
        $this->LatestDate = $latestDate;
        
        return $this;
    }
}
