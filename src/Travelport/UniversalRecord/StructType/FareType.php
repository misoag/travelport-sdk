<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareType StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to request fares based on the ATPCO type code
 * @subpackage Structs
 */
class FareType extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: ATPCO fare type code (e.g. XPN)
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Code;
    /**
     * Constructor method for FareType
     * @uses FareType::setCode()
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
     * @return \Travelport\UniversalRecord\StructType\FareType
     */
    public function setCode(string $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
}
