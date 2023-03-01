<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerReceiptInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information about customer receipt via email. Supported providers are 1V/1G/1P
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
    public string $BookingTravelerRef;
    /**
     * The EmailRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to the email address used for receipt of EMD. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $EmailRef;
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
        $this->EmailRef = $emailRef;
        
        return $this;
    }
}
