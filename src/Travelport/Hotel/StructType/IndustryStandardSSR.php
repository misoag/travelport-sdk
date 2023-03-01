<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndustryStandardSSR StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates Carrier Supports this industry standard.
 * @subpackage Structs
 */
class IndustryStandardSSR extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: This code indicates which Standard of SSR's they support. Sucha as the 'AIRIMP' standard identified by 'IATA.org'
     * - use: optional
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * Constructor method for IndustryStandardSSR
     * @uses IndustryStandardSSR::setCode()
     * @param string $code
     */
    public function __construct(?string $code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Hotel\StructType\IndustryStandardSSR
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
