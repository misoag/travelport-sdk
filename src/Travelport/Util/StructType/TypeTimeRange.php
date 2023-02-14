<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTimeRange StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify a range of times.
 * @subpackage Structs
 */
class TypeTimeRange extends AbstractStructBase
{
    /**
     * The EarliestTime
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $EarliestTime;
    /**
     * The LatestTime
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $LatestTime;
    /**
     * Constructor method for typeTimeRange
     * @uses TypeTimeRange::setEarliestTime()
     * @uses TypeTimeRange::setLatestTime()
     * @param string $earliestTime
     * @param string $latestTime
     */
    public function __construct(string $earliestTime, string $latestTime)
    {
        $this
            ->setEarliestTime($earliestTime)
            ->setLatestTime($latestTime);
    }
    /**
     * Get EarliestTime value
     * @return string
     */
    public function getEarliestTime(): string
    {
        return $this->EarliestTime;
    }
    /**
     * Set EarliestTime value
     * @param string $earliestTime
     * @return \Travelport\Util\StructType\TypeTimeRange
     */
    public function setEarliestTime(string $earliestTime): self
    {
        // validation for constraint: string
        if (!is_null($earliestTime) && !is_string($earliestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestTime, true), gettype($earliestTime)), __LINE__);
        }
        $this->EarliestTime = $earliestTime;
        
        return $this;
    }
    /**
     * Get LatestTime value
     * @return string
     */
    public function getLatestTime(): string
    {
        return $this->LatestTime;
    }
    /**
     * Set LatestTime value
     * @param string $latestTime
     * @return \Travelport\Util\StructType\TypeTimeRange
     */
    public function setLatestTime(string $latestTime): self
    {
        // validation for constraint: string
        if (!is_null($latestTime) && !is_string($latestTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestTime, true), gettype($latestTime)), __LINE__);
        }
        $this->LatestTime = $latestTime;
        
        return $this;
    }
}
