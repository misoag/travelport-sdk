<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgentVoucher StructType
 * Meta information extracted from the WSDL
 * - documentation: Agent Voucher Form of Payments
 * @subpackage Structs
 */
class AgentVoucher extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * Constructor method for AgentVoucher
     * @uses AgentVoucher::setNumber()
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this
            ->setNumber($number);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\UniversalRecord\StructType\AgentVoucher
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
}
