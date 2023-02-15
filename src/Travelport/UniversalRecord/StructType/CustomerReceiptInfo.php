<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerReceiptInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about customer receipt via email. Supported providers are 1V/1G/1P/1J
 * @subpackage Structs
 */
class CustomerReceiptInfo extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Refererence of the Booking Traveler related to the email. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $BookingTravelerRef;
    /**
     * The EmailRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the email address used for receipt of EMD. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $EmailRef;
    /**
     * Constructor method for CustomerReceiptInfo
     * @uses CustomerReceiptInfo::setBookingTravelerRef()
     * @uses CustomerReceiptInfo::setEmailRef()
     * @param string $bookingTravelerRef
     * @param string $emailRef
     */
    public function __construct(string $bookingTravelerRef, string $emailRef)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setEmailRef($emailRef);
    }
    /**
     * Get BookingTravelerRef value
     * @return string
     */
    public function getBookingTravelerRef(): string
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\CustomerReceiptInfo
     */
    public function setBookingTravelerRef(string $bookingTravelerRef): self
    {
        // validation for constraint: string
        if (!is_null($bookingTravelerRef) && !is_string($bookingTravelerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingTravelerRef, true), gettype($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Get EmailRef value
     * @return string
     */
    public function getEmailRef(): string
    {
        return $this->EmailRef;
    }
    /**
     * Set EmailRef value
     * @param string $emailRef
     * @return \Travelport\UniversalRecord\StructType\CustomerReceiptInfo
     */
    public function setEmailRef(string $emailRef): self
    {
        // validation for constraint: string
        if (!is_null($emailRef) && !is_string($emailRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailRef, true), gettype($emailRef)), __LINE__);
        }
        $this->EmailRef = $emailRef;
        
        return $this;
    }
}
