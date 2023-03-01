<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceData StructType
 * Meta information extracted from the WSDL
 * - documentation: List of invoices only for 1G/1V
 * @subpackage Structs
 */
class InvoiceData extends AbstractStructBase
{
    /**
     * The InvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: Invoice number
     * - use: required
     * @var string
     */
    public string $InvoiceNumber;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $ProviderReservationInfoRef;
    /**
     * The BookingTravelerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - ref: BookingTravelerInformation
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerInformation[]
     */
    public ?array $BookingTravelerInformation = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - documentation: Invoice issue date
     * @var string|null
     */
    public ?string $IssueDate = null;
    /**
     * Constructor method for InvoiceData
     * @uses InvoiceData::setInvoiceNumber()
     * @uses InvoiceData::setProviderReservationInfoRef()
     * @uses InvoiceData::setBookingTravelerInformation()
     * @uses InvoiceData::setKey()
     * @uses InvoiceData::setIssueDate()
     * @param string $invoiceNumber
     * @param string $providerReservationInfoRef
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerInformation[] $bookingTravelerInformation
     * @param string $key
     * @param string $issueDate
     */
    public function __construct(string $invoiceNumber, string $providerReservationInfoRef, ?array $bookingTravelerInformation = null, ?string $key = null, ?string $issueDate = null)
    {
        $this
            ->setInvoiceNumber($invoiceNumber)
            ->setProviderReservationInfoRef($providerReservationInfoRef)
            ->setBookingTravelerInformation($bookingTravelerInformation)
            ->setKey($key)
            ->setIssueDate($issueDate);
    }
    /**
     * Get InvoiceNumber value
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param string $invoiceNumber
     * @return \Travelport\UniversalRecord\StructType\InvoiceData
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->InvoiceNumber = $invoiceNumber;
        
        return $this;
    }
    /**
     * Get ProviderReservationInfoRef value
     * @return string
     */
    public function getProviderReservationInfoRef(): string
    {
        return $this->ProviderReservationInfoRef;
    }
    /**
     * Set ProviderReservationInfoRef value
     * @param string $providerReservationInfoRef
     * @return \Travelport\UniversalRecord\StructType\InvoiceData
     */
    public function setProviderReservationInfoRef(string $providerReservationInfoRef): self
    {
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get BookingTravelerInformation value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerInformation[]
     */
    public function getBookingTravelerInformation(): ?array
    {
        return $this->BookingTravelerInformation;
    }
    /**
     * Set BookingTravelerInformation value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerInformation[] $bookingTravelerInformation
     * @return \Travelport\UniversalRecord\StructType\InvoiceData
     */
    public function setBookingTravelerInformation(?array $bookingTravelerInformation = null): self
    {
        $this->BookingTravelerInformation = $bookingTravelerInformation;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerInformation $item
     * @return \Travelport\UniversalRecord\StructType\InvoiceData
     */
    public function addToBookingTravelerInformation(\Travelport\UniversalRecord\StructType\BookingTravelerInformation $item): self
    {
        $this->BookingTravelerInformation[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\InvoiceData
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get IssueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->IssueDate;
    }
    /**
     * Set IssueDate value
     * @param string $issueDate
     * @return \Travelport\UniversalRecord\StructType\InvoiceData
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        $this->IssueDate = $issueDate;
        
        return $this;
    }
}
