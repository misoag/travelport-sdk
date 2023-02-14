<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected ?string $Code = null;
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
     * @return \StructType\IndustryStandardSSR
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
}
