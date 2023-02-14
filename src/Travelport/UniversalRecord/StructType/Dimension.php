<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dimension StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to Length,Height,Width of a baggage.
 * @subpackage Structs
 */
class Dimension extends TypeUnitOfMeasure
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - documentation: Type denotes Length,Height,Width of a baggage.
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for Dimension
     * @uses Dimension::setType()
     * @param string $type
     */
    public function __construct(?string $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Dimension
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
