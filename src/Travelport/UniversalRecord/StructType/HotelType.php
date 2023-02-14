<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelType StructType
 * @subpackage Structs
 */
class HotelType extends AbstractStructBase
{
    /**
     * The SourceLink
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether results are returned from the vendor or from the database. If true, vendor results were returned. Supported providers:1G, 1V
     * - base: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SourceLink = null;
    /**
     * Constructor method for HotelType
     * @uses HotelType::setSourceLink()
     * @param bool $sourceLink
     */
    public function __construct(?bool $sourceLink = null)
    {
        $this
            ->setSourceLink($sourceLink);
    }
    /**
     * Get SourceLink value
     * @return bool|null
     */
    public function getSourceLink(): ?bool
    {
        return $this->SourceLink;
    }
    /**
     * Set SourceLink value
     * @param bool $sourceLink
     * @return \Travelport\UniversalRecord\StructType\HotelType
     */
    public function setSourceLink(?bool $sourceLink = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sourceLink) && !is_bool($sourceLink)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sourceLink, true), gettype($sourceLink)), __LINE__);
        }
        $this->SourceLink = $sourceLink;
        
        return $this;
    }
}
