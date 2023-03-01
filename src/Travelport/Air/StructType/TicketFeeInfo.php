<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketFeeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Used for rapid reprice. Providers: 1G/1V/1P/1S/1A
 * @subpackage Structs
 */
class TicketFeeInfo extends AbstractStructBase
{
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
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Tax = null;
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
     * Constructor method for TicketFeeInfo
     * @uses TicketFeeInfo::setBase()
     * @uses TicketFeeInfo::setTax()
     * @uses TicketFeeInfo::setTotal()
     * @param string $base
     * @param string $tax
     * @param string $total
     */
    public function __construct(?string $base = null, ?string $tax = null, ?string $total = null)
    {
        $this
            ->setBase($base)
            ->setTax($tax)
            ->setTotal($total);
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
     * @return \Travelport\Air\StructType\TicketFeeInfo
     */
    public function setBase(?string $base = null): self
    {
        $this->Base = $base;
        
        return $this;
    }
    /**
     * Get Tax value
     * @return string|null
     */
    public function getTax(): ?string
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param string $tax
     * @return \Travelport\Air\StructType\TicketFeeInfo
     */
    public function setTax(?string $tax = null): self
    {
        $this->Tax = $tax;
        
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
     * @return \Travelport\Air\StructType\TicketFeeInfo
     */
    public function setTotal(?string $total = null): self
    {
        $this->Total = $total;
        
        return $this;
    }
}
