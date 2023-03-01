<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Alliance StructType
 * Meta information extracted from the WSDL
 * - documentation: Alliance Code
 * @subpackage Structs
 */
class Alliance extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The possible values are *A for Star Alliance,*O for One world,*S for Sky team etc.
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for Alliance
     * @uses Alliance::setCode()
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Air\StructType\Alliance
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
