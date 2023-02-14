<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctStandard StructType
 * Meta information extracted from the WSDL
 * - documentation: The standard MCT time for the given search criteria
 * @subpackage Structs
 */
class MctStandard extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Time;
    /**
     * Constructor method for MctStandard
     * @uses MctStandard::setType()
     * @uses MctStandard::setTime()
     * @param string $type
     * @param int $time
     */
    public function __construct(string $type, int $time)
    {
        $this
            ->setType($type)
            ->setTime($time);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\Util\EnumType\TypeMctConnection::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeMctConnection::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\MctStandard
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeMctConnection::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeMctConnection', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeMctConnection::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Time value
     * @return int
     */
    public function getTime(): int
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param int $time
     * @return \Travelport\Util\StructType\MctStandard
     */
    public function setTime(int $time): self
    {
        // validation for constraint: int
        if (!is_null($time) && !(is_int($time) || ctype_digit($time))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
}
