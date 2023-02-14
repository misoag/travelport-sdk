<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $RefundDate = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountCode = null;
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
    protected ?string $TicketDesignator = null;
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
     * @return \Travelport\Util\StructType\AirRefundModifiers
     */
    public function setRefundDate(?string $refundDate = null): self
    {
        // validation for constraint: string
        if (!is_null($refundDate) && !is_string($refundDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundDate, true), gettype($refundDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirRefundModifiers
     */
    public function setAccountCode(?string $accountCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCode, true), gettype($accountCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\AirRefundModifiers
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($ticketDesignator) && mb_strlen((string) $ticketDesignator) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $ticketDesignator)), __LINE__);
        }
        $this->TicketDesignator = $ticketDesignator;
        
        return $this;
    }
}
