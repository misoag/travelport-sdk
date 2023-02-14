<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?bool $BookingEnabled = null;
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
     * @return \Travelport\Util\StructType\TypeBookingTransactionsAllowed
     */
    public function setBookingEnabled(?bool $bookingEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingEnabled) && !is_bool($bookingEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingEnabled, true), gettype($bookingEnabled)), __LINE__);
        }
        $this->BookingEnabled = $bookingEnabled;
        
        return $this;
    }
}
