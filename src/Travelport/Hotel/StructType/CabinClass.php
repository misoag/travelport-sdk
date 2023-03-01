<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinClass StructType
 * Meta information extracted from the WSDL
 * - documentation: Requests cabin class (First, Business and Economy, etc.) as supported by the provider or supplier.
 * @subpackage Structs
 */
class CabinClass extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * Constructor method for CabinClass
     * @uses CabinClass::setType()
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
     * @return \Travelport\Hotel\StructType\CabinClass
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
