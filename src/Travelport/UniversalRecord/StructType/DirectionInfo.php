<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $LocationCode = null;
    /**
     * The Direction
     * @var string|null
     */
    protected ?string $Direction = null;
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
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationCode, true), gettype($locationCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($locationCode) && mb_strlen((string) $locationCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $locationCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->Direction = $direction;
        
        return $this;
    }
}
