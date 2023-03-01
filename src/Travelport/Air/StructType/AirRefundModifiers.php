<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRefundModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Provides controls and switches for the Refund process
 * @subpackage Structs
 */
class AirRefundModifiers extends AbstractStructBase
{
    /**
     * The RefundDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $RefundDate = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AccountCode = null;
    /**
     * The TicketDesignator
     * Meta information extracted from the WSDL
     * - documentation: Ticket Designator type.Size can be up to 20 characters
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    public ?string $TicketDesignator = null;
    /**
     * Constructor method for AirRefundModifiers
     * @uses AirRefundModifiers::setRefundDate()
     * @uses AirRefundModifiers::setAccountCode()
     * @uses AirRefundModifiers::setTicketDesignator()
     * @param string $refundDate
     * @param string $accountCode
     * @param string $ticketDesignator
     */
    public function __construct(?string $refundDate = null, ?string $accountCode = null, ?string $ticketDesignator = null)
    {
        $this
            ->setRefundDate($refundDate)
            ->setAccountCode($accountCode)
            ->setTicketDesignator($ticketDesignator);
    }
    /**
     * Get RefundDate value
     * @return string|null
     */
    public function getRefundDate(): ?string
    {
        return $this->RefundDate;
    }
    /**
     * Set RefundDate value
     * @param string $refundDate
     * @return \Travelport\Air\StructType\AirRefundModifiers
     */
    public function setRefundDate(?string $refundDate = null): self
    {
        $this->RefundDate = $refundDate;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode(): ?string
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Travelport\Air\StructType\AirRefundModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get TicketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->TicketDesignator;
    }
    /**
     * Set TicketDesignator value
     * @param string $ticketDesignator
     * @return \Travelport\Air\StructType\AirRefundModifiers
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
}
