<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestAmenity StructType
 * Meta information extracted from the WSDL
 * - documentation: Requested decoded values only for the specified Hotel Amenity codes.
 * @subpackage Structs
 */
class RequestAmenity extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * Constructor method for RequestAmenity
     * @uses RequestAmenity::setType()
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this
            ->setType($type);
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
     * @param string $type
     * @return \Travelport\Util\StructType\RequestAmenity
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($type) && mb_strlen((string) $type) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
