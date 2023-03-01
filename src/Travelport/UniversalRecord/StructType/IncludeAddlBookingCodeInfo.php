<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludeAddlBookingCodeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to include primary or secondary carrier's booking code details
 * @subpackage Structs
 */
class IncludeAddlBookingCodeInfo extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type defines that the booking code info is for primary or secondary carrier.
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The SecondaryCarrier
     * Meta information extracted from the WSDL
     * - documentation: The secondary carrier code is required when type is secondary . | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $SecondaryCarrier = null;
    /**
     * Constructor method for IncludeAddlBookingCodeInfo
     * @uses IncludeAddlBookingCodeInfo::setType()
     * @uses IncludeAddlBookingCodeInfo::setSecondaryCarrier()
     * @param string $type
     * @param string $secondaryCarrier
     */
    public function __construct(string $type, ?string $secondaryCarrier = null)
    {
        $this
            ->setType($type)
            ->setSecondaryCarrier($secondaryCarrier);
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
     * @return \Travelport\UniversalRecord\StructType\IncludeAddlBookingCodeInfo
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get SecondaryCarrier value
     * @return string|null
     */
    public function getSecondaryCarrier(): ?string
    {
        return $this->SecondaryCarrier;
    }
    /**
     * Set SecondaryCarrier value
     * @param string $secondaryCarrier
     * @return \Travelport\UniversalRecord\StructType\IncludeAddlBookingCodeInfo
     */
    public function setSecondaryCarrier(?string $secondaryCarrier = null): self
    {
        $this->SecondaryCarrier = $secondaryCarrier;
        
        return $this;
    }
}
