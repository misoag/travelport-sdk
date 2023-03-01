<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchEvent StructType
 * Meta information extracted from the WSDL
 * - documentation: Search for various reservation events
 * @subpackage Structs
 */
class SearchEvent extends TypeTimeRange
{
    /**
     * The Type
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for SearchEvent
     * @uses SearchEvent::setType()
     * @param string $type
     */
    public function __construct(?string $type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\SearchEvent
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
