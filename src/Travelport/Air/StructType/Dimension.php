<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $type = null;
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
     * @return \Travelport\Air\StructType\Dimension
     */
    public function setType(?string $type = null): self
    {
        $this->type = $type;
        
        return $this;
    }
}
