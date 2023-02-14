<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Currency StructType
 * @subpackage Structs
 */
class Currency extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The Decimal
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Decimal = null;
    /**
     * Constructor method for Currency
     * @uses Currency::setCode()
     * @uses Currency::setName()
     * @uses Currency::setDecimal()
     * @param string $code
     * @param string $name
     * @param string $decimal
     */
    public function __construct(string $code, string $name, ?string $decimal = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setDecimal($decimal);
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
     * @return \Travelport\Util\StructType\Currency
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($code) && mb_strlen((string) $code) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Util\StructType\Currency
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Decimal value
     * @return string|null
     */
    public function getDecimal(): ?string
    {
        return $this->Decimal;
    }
    /**
     * Set Decimal value
     * @param string $decimal
     * @return \Travelport\Util\StructType\Currency
     */
    public function setDecimal(?string $decimal = null): self
    {
        // validation for constraint: string
        if (!is_null($decimal) && !is_string($decimal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimal, true), gettype($decimal)), __LINE__);
        }
        $this->Decimal = $decimal;
        
        return $this;
    }
}
