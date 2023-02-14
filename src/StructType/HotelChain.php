<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelChain StructType
 * Meta information extracted from the WSDL
 * - documentation: The hotel chain code
 * @subpackage Structs
 */
class HotelChain extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Hotel Chain Code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * Constructor method for HotelChain
     * @uses HotelChain::setCode()
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
     * @return \StructType\HotelChain
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($code) && mb_strlen((string) $code) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
}