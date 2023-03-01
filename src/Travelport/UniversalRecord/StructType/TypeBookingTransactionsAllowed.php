<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeBookingTransactionsAllowed StructType
 * @subpackage Structs
 */
class TypeBookingTransactionsAllowed extends AbstractStructBase
{
    /**
     * The BookingEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit booking transaction for the given product type on this Provider/Supplier. Inheritable.
     * - use: optional
     * @var bool|null
     */
    public ?bool $BookingEnabled = null;
    /**
     * Constructor method for typeBookingTransactionsAllowed
     * @uses TypeBookingTransactionsAllowed::setBookingEnabled()
     * @param bool $bookingEnabled
     */
    public function __construct(?bool $bookingEnabled = null)
    {
        $this
            ->setBookingEnabled($bookingEnabled);
    }
    /**
     * Get BookingEnabled value
     * @return bool|null
     */
    public function getBookingEnabled(): ?bool
    {
        return $this->BookingEnabled;
    }
    /**
     * Set BookingEnabled value
     * @param bool $bookingEnabled
     * @return \Travelport\UniversalRecord\StructType\TypeBookingTransactionsAllowed
     */
    public function setBookingEnabled(?bool $bookingEnabled = null): self
    {
        $this->BookingEnabled = $bookingEnabled;
        
        return $this;
    }
}
