<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Time;
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
     * @return \Travelport\Air\StructType\TypeSpecificTime
     */
    public function setTime(string $time): self
    {
        $this->Time = $time;
        
        return $this;
    }
}
