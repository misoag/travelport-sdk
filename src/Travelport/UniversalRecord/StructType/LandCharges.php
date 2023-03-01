<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LandCharges StructType
 * Meta information extracted from the WSDL
 * - documentation: Prints non-air charges on a document.
 * @subpackage Structs
 */
class LandCharges extends AbstractStructBase
{
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: Tax
     * @var \Travelport\UniversalRecord\StructType\Tax[]
     */
    public ?array $Tax = null;
    /**
     * The Base
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Base = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Total = null;
    /**
     * The Miscellaneous
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Miscellaneous = null;
    /**
     * The PrePaid
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $PrePaid = null;
    /**
     * The Deposit
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Deposit = null;
    /**
     * Constructor method for LandCharges
     * @uses LandCharges::setTax()
     * @uses LandCharges::setBase()
     * @uses LandCharges::setTotal()
     * @uses LandCharges::setMiscellaneous()
     * @uses LandCharges::setPrePaid()
     * @uses LandCharges::setDeposit()
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     * @param string $base
     * @param string $total
     * @param string $miscellaneous
     * @param string $prePaid
     * @param string $deposit
     */
    public function __construct(?array $tax = null, ?string $base = null, ?string $total = null, ?string $miscellaneous = null, ?string $prePaid = null, ?string $deposit = null)
    {
        $this
            ->setTax($tax)
            ->setBase($base)
            ->setTotal($total)
            ->setMiscellaneous($miscellaneous)
            ->setPrePaid($prePaid)
            ->setDeposit($deposit);
    }
    /**
     * Get Tax value
     * @return \Travelport\UniversalRecord\StructType\Tax[]
     */
    public function getTax(): ?array
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setTax(?array $tax = null): self
    {
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Tax $item
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function addToTax(\Travelport\UniversalRecord\StructType\Tax $item): self
    {
        $this->Tax[] = $item;
        
        return $this;
    }
    /**
     * Get Base value
     * @return string|null
     */
    public function getBase(): ?string
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param string $base
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setBase(?string $base = null): self
    {
        $this->Base = $base;
        
        return $this;
    }
    /**
     * Get Total value
     * @return string|null
     */
    public function getTotal(): ?string
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setTotal(?string $total = null): self
    {
        $this->Total = $total;
        
        return $this;
    }
    /**
     * Get Miscellaneous value
     * @return string|null
     */
    public function getMiscellaneous(): ?string
    {
        return $this->Miscellaneous;
    }
    /**
     * Set Miscellaneous value
     * @param string $miscellaneous
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setMiscellaneous(?string $miscellaneous = null): self
    {
        $this->Miscellaneous = $miscellaneous;
        
        return $this;
    }
    /**
     * Get PrePaid value
     * @return string|null
     */
    public function getPrePaid(): ?string
    {
        return $this->PrePaid;
    }
    /**
     * Set PrePaid value
     * @param string $prePaid
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setPrePaid(?string $prePaid = null): self
    {
        $this->PrePaid = $prePaid;
        
        return $this;
    }
    /**
     * Get Deposit value
     * @return string|null
     */
    public function getDeposit(): ?string
    {
        return $this->Deposit;
    }
    /**
     * Set Deposit value
     * @param string $deposit
     * @return \Travelport\UniversalRecord\StructType\LandCharges
     */
    public function setDeposit(?string $deposit = null): self
    {
        $this->Deposit = $deposit;
        
        return $this;
    }
}
