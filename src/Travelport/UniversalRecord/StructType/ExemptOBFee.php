<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExemptOBFee StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to specify which OB fees are exempt; if none are listed, it means all should be exempt.
 * @subpackage Structs
 */
class ExemptOBFee extends AbstractStructBase
{
    /**
     * The SubCode
     * Meta information extracted from the WSDL
     * - documentation: Used to specify an OB fee as exempt.
     * - base: xs:string
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $SubCode = null;
    /**
     * Constructor method for ExemptOBFee
     * @uses ExemptOBFee::setSubCode()
     * @param string[] $subCode
     */
    public function __construct(?array $subCode = null)
    {
        $this
            ->setSubCode($subCode);
    }
    /**
     * Get SubCode value
     * @return string[]
     */
    public function getSubCode(): ?array
    {
        return $this->SubCode;
    }
    /**
     * Set SubCode value
     * @param string[] $subCode
     * @return \Travelport\UniversalRecord\StructType\ExemptOBFee
     */
    public function setSubCode(?array $subCode = null): self
    {
        $this->SubCode = $subCode;
        
        return $this;
    }
    /**
     * Add item to SubCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\ExemptOBFee
     */
    public function addToSubCode(string $item): self
    {
        $this->SubCode[] = $item;
        
        return $this;
    }
}
