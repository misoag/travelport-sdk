<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeSpecificTime StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify exact times. System will automatically convert to a range according to agency configuration.
 * @subpackage Structs
 */
class TypeSpecificTime extends AbstractStructBase
{
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Time;
    /**
     * Constructor method for typeSpecificTime
     * @uses TypeSpecificTime::setTime()
     * @param string $time
     */
    public function __construct(string $time)
    {
        $this
            ->setTime($time);
    }
    /**
     * Get Time value
     * @return string
     */
    public function getTime(): string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Travelport\Util\StructType\TypeSpecificTime
     */
    public function setTime(string $time): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
}
