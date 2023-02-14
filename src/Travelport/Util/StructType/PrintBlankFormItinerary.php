<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected bool $IncludeDescription;
    /**
     * The IncludeHeader
     * Meta information extracted from the WSDL
     * - documentation: If it is true then document will be printed including it's header.
     * - use: required
     * @var bool
     */
    protected bool $IncludeHeader;
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
     * @return \Travelport\Util\StructType\PrintBlankFormItinerary
     */
    public function setIncludeDescription(bool $includeDescription): self
    {
        // validation for constraint: boolean
        if (!is_null($includeDescription) && !is_bool($includeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDescription, true), gettype($includeDescription)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PrintBlankFormItinerary
     */
    public function setIncludeHeader(bool $includeHeader): self
    {
        // validation for constraint: boolean
        if (!is_null($includeHeader) && !is_bool($includeHeader)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeHeader, true), gettype($includeHeader)), __LINE__);
        }
        $this->IncludeHeader = $includeHeader;
        
        return $this;
    }
}
