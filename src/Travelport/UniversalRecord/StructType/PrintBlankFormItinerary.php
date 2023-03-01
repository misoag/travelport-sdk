<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintBlankFormItinerary StructType
 * Meta information extracted from the WSDL
 * - documentation: Produce a customized itinerary/Invoice document in blank form format.
 * @subpackage Structs
 */
class PrintBlankFormItinerary extends AbstractStructBase
{
    /**
     * The IncludeDescription
     * Meta information extracted from the WSDL
     * - documentation: If it is true then document will be printed including descriptions.
     * - use: required
     * @var bool
     */
    public bool $IncludeDescription;
    /**
     * The IncludeHeader
     * Meta information extracted from the WSDL
     * - documentation: If it is true then document will be printed including it's header.
     * - use: required
     * @var bool
     */
    public bool $IncludeHeader;
    /**
     * Constructor method for PrintBlankFormItinerary
     * @uses PrintBlankFormItinerary::setIncludeDescription()
     * @uses PrintBlankFormItinerary::setIncludeHeader()
     * @param bool $includeDescription
     * @param bool $includeHeader
     */
    public function __construct(bool $includeDescription, bool $includeHeader)
    {
        $this
            ->setIncludeDescription($includeDescription)
            ->setIncludeHeader($includeHeader);
    }
    /**
     * Get IncludeDescription value
     * @return bool
     */
    public function getIncludeDescription(): bool
    {
        return $this->IncludeDescription;
    }
    /**
     * Set IncludeDescription value
     * @param bool $includeDescription
     * @return \Travelport\UniversalRecord\StructType\PrintBlankFormItinerary
     */
    public function setIncludeDescription(bool $includeDescription): self
    {
        $this->IncludeDescription = $includeDescription;
        
        return $this;
    }
    /**
     * Get IncludeHeader value
     * @return bool
     */
    public function getIncludeHeader(): bool
    {
        return $this->IncludeHeader;
    }
    /**
     * Set IncludeHeader value
     * @param bool $includeHeader
     * @return \Travelport\UniversalRecord\StructType\PrintBlankFormItinerary
     */
    public function setIncludeHeader(bool $includeHeader): self
    {
        $this->IncludeHeader = $includeHeader;
        
        return $this;
    }
}
