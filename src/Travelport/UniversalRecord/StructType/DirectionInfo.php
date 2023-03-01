<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectionInfo StructType
 * @subpackage Structs
 */
class DirectionInfo extends AbstractStructBase
{
    /**
     * The LocationCode
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $LocationCode = null;
    /**
     * The Direction
     * @var string|null
     */
    public ?string $Direction = null;
    /**
     * Constructor method for DirectionInfo
     * @uses DirectionInfo::setLocationCode()
     * @uses DirectionInfo::setDirection()
     * @param string $locationCode
     * @param string $direction
     */
    public function __construct(?string $locationCode = null, ?string $direction = null)
    {
        $this
            ->setLocationCode($locationCode)
            ->setDirection($direction);
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Travelport\UniversalRecord\StructType\DirectionInfo
     */
    public function setLocationCode(?string $locationCode = null): self
    {
        $this->LocationCode = $locationCode;
        
        return $this;
    }
    /**
     * Get Direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @param string $direction
     * @return \Travelport\UniversalRecord\StructType\DirectionInfo
     */
    public function setDirection(?string $direction = null): self
    {
        $this->Direction = $direction;
        
        return $this;
    }
}
