<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $Code = null;
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
     * @return \Travelport\Util\StructType\ServiceSubGroup
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
