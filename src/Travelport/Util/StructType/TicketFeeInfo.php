<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $Base = null;
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Tax = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Total = null;
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
     * @return \Travelport\Util\StructType\TicketFeeInfo
     */
    public function setBase(?string $base = null): self
    {
        // validation for constraint: string
        if (!is_null($base) && !is_string($base)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($base, true), gettype($base)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketFeeInfo
     */
    public function setTax(?string $tax = null): self
    {
        // validation for constraint: string
        if (!is_null($tax) && !is_string($tax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax, true), gettype($tax)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketFeeInfo
     */
    public function setTotal(?string $total = null): self
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->Total = $total;
        
        return $this;
    }
}
