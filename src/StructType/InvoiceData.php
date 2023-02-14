<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $InvoiceNumber;
    /**
     * The ProviderReservationInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Provider reservation reference key. | Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $ProviderReservationInfoRef;
    /**
     * The BookingTravelerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 9
     * - ref: BookingTravelerInformation
     * @var \StructType\BookingTravelerInformation[]
     */
    protected ?array $BookingTravelerInformation = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - documentation: Invoice issue date
     * @var string|null
     */
    protected ?string $IssueDate = null;
    /**
     * Constructor method for InvoiceData
     * @uses InvoiceData::setInvoiceNumber()
     * @uses InvoiceData::setProviderReservationInfoRef()
     * @uses InvoiceData::setBookingTravelerInformation()
     * @uses InvoiceData::setKey()
     * @uses InvoiceData::setIssueDate()
     * @param string $invoiceNumber
     * @param string $providerReservationInfoRef
     * @param \StructType\BookingTravelerInformation[] $bookingTravelerInformation
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
     * @return \StructType\InvoiceData
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
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
     * @return \StructType\InvoiceData
     */
    public function setProviderReservationInfoRef(string $providerReservationInfoRef): self
    {
        // validation for constraint: string
        if (!is_null($providerReservationInfoRef) && !is_string($providerReservationInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerReservationInfoRef, true), gettype($providerReservationInfoRef)), __LINE__);
        }
        $this->ProviderReservationInfoRef = $providerReservationInfoRef;
        
        return $this;
    }
    /**
     * Get BookingTravelerInformation value
     * @return \StructType\BookingTravelerInformation[]
     */
    public function getBookingTravelerInformation(): ?array
    {
        return $this->BookingTravelerInformation;
    }
    /**
     * This method is responsible for validating the values passed to the setBookingTravelerInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerInformationForArrayConstraintsFromSetBookingTravelerInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $invoiceDataBookingTravelerInformationItem) {
            // validation for constraint: itemType
            if (!$invoiceDataBookingTravelerInformationItem instanceof \StructType\BookingTravelerInformation) {
                $invalidValues[] = is_object($invoiceDataBookingTravelerInformationItem) ? get_class($invoiceDataBookingTravelerInformationItem) : sprintf('%s(%s)', gettype($invoiceDataBookingTravelerInformationItem), var_export($invoiceDataBookingTravelerInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerInformation property can only contain items of type \StructType\BookingTravelerInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerInformation value
     * @throws InvalidArgumentException
     * @param \StructType\BookingTravelerInformation[] $bookingTravelerInformation
     * @return \StructType\InvoiceData
     */
    public function setBookingTravelerInformation(?array $bookingTravelerInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerInformationArrayErrorMessage = self::validateBookingTravelerInformationForArrayConstraintsFromSetBookingTravelerInformation($bookingTravelerInformation))) {
            throw new InvalidArgumentException($bookingTravelerInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($bookingTravelerInformation) && count($bookingTravelerInformation) > 9) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 9', count($bookingTravelerInformation)), __LINE__);
        }
        $this->BookingTravelerInformation = $bookingTravelerInformation;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerInformation value
     * @throws InvalidArgumentException
     * @param \StructType\BookingTravelerInformation $item
     * @return \StructType\InvoiceData
     */
    public function addToBookingTravelerInformation(\StructType\BookingTravelerInformation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BookingTravelerInformation) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerInformation property can only contain items of type \StructType\BookingTravelerInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(9)
        if (is_array($this->BookingTravelerInformation) && count($this->BookingTravelerInformation) >= 9) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 9', count($this->BookingTravelerInformation)), __LINE__);
        }
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
     * @return \StructType\InvoiceData
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \StructType\InvoiceData
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->IssueDate = $issueDate;
        
        return $this;
    }
}
