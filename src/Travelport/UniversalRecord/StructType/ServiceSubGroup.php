<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceSubGroup StructType
 * Meta information extracted from the WSDL
 * - documentation: The Service Sub Group of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
 * @subpackage Structs
 */
class ServiceSubGroup extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The Service Sub Group Code of the Ancillary Service. Providers: 1G, 1V, 1P, ACH
     * @var string|null
     */
    public ?string $Code = null;
    /**
     * Constructor method for ServiceSubGroup
     * @uses ServiceSubGroup::setCode()
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
     * @return \Travelport\UniversalRecord\StructType\ServiceSubGroup
     */
    public function setCode(?string $code = null): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
