<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelTransportation StructType
 * Meta information extracted from the WSDL
 * - documentation: OTA Transportation code. Search for specific transportation. Supported providers: 1G/1V. Only CourtesyBus '7' supported by 1P/1J.
 * @subpackage Structs
 */
class HotelTransportation extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Transportation type code | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: required
     * @var int
     */
    protected int $Type;
    /**
     * Constructor method for HotelTransportation
     * @uses HotelTransportation::setType()
     * @param int $type
     */
    public function __construct(int $type)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return int
     */
    public function getType(): int
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \Travelport\UniversalRecord\StructType\HotelTransportation
     */
    public function setType(int $type): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
