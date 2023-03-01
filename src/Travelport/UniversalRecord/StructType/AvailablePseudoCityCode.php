<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailablePseudoCityCode StructType
 * @subpackage Structs
 */
class AvailablePseudoCityCode extends AbstractStructBase
{
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PseudoCityCode used to connect to the host. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PseudoCityCode = null;
    /**
     * Constructor method for AvailablePseudoCityCode
     * @uses AvailablePseudoCityCode::setPseudoCityCode()
     * @param string $pseudoCityCode
     */
    public function __construct(?string $pseudoCityCode = null)
    {
        $this
            ->setPseudoCityCode($pseudoCityCode);
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\UniversalRecord\StructType\AvailablePseudoCityCode
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
}
