<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BulkTicket StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to update the fare as a Bulk ticket - Optional SuppressOnFareCalc attribute will control how fare calculation is printed on the ticket
 * @subpackage Structs
 */
class BulkTicket extends TypeBulkTicketModifierType
{
    /**
     * The NonRefundable
     * Meta information extracted from the WSDL
     * - documentation: Indicates bulk ticket being non-refundable
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NonRefundable = null;
    /**
     * Constructor method for BulkTicket
     * @uses BulkTicket::setNonRefundable()
     * @param bool $nonRefundable
     */
    public function __construct(?bool $nonRefundable = null)
    {
        $this
            ->setNonRefundable($nonRefundable);
    }
    /**
     * Get NonRefundable value
     * @return bool|null
     */
    public function getNonRefundable(): ?bool
    {
        return $this->NonRefundable;
    }
    /**
     * Set NonRefundable value
     * @param bool $nonRefundable
     * @return \Travelport\UniversalRecord\StructType\BulkTicket
     */
    public function setNonRefundable(?bool $nonRefundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundable) && !is_bool($nonRefundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonRefundable, true), gettype($nonRefundable)), __LINE__);
        }
        $this->NonRefundable = $nonRefundable;
        
        return $this;
    }
}
