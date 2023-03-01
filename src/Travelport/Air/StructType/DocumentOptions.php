<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentOptions StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to set different document options for the itinerary.
 * @subpackage Structs
 */
class DocumentOptions extends AbstractStructBase
{
    /**
     * The PassengerReceiptOverride
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PassengerReceiptOverride
     * @var \Travelport\Air\StructType\PassengerReceiptOverride|null
     */
    public ?\Travelport\Air\StructType\PassengerReceiptOverride $PassengerReceiptOverride = null;
    /**
     * The OverrideOption
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to override print options for documents during document generation. | Allows an agency to override print options for documents options during document generation. | Below mentioned values are only supported in
     * schema. "SuppressItineraryInvoicePrinting" - Suppress sending itinerary/invoice document to a printer. The itinerary/invoice can be sent to a printer at a future time using duplicate itinerary/invoice. This is used by Worldspan. "PrintTerminalCodes"
     * - Produces an itinerary/invoice or pocket itinerary that includes departure and /or arrival terminal codes. This is used by Worldspan. "PrintDirectAccessRecordLocator" - Print record locator for direct access carriers. This option prints the record
     * locator below the segmnet information. This option can be used along with PrintProviderReservationRecordLocator as well. This is used by Worldspan. "PrintProviderReservationRecordLocator" - Print PNR record locator on documents. This option can be
     * used along with PrintDirectAccessRecordLocator as well. This is used by Worldspan. "ReIssueTicketedStoredFare" - This modifier is used to issue a ticket against a ticket record that was previously issued. This is used by Worldspan.
     * "PrintFrequentTravelerNumber" - This modifier is used to print frequent traveller number. This is used by Worldspan. "SuppressInvoiceNumberPrinting" - This modifier prevents the invoice number from printing on documents. This is used by Worldspan.
     * "PrintItineraryInvoicePerTraveler" - Issues itinerary/invoice for per traveler. This is used by Worldspan. "PrintItineraryInvoicePerSurname" - Issues itinerary/invoice for per surname. This is used by Worldspan. "PrintMultipleCustomizedNameData" -
     * Prints names individually with associated customized name data on documents. This is used by Worldspan. "PrintInvoiceRemarkOnly" - Prints invoice remark only. overrides the system remarks and directs only specific remarks selected to print on
     * documents. This is used by Worldspan. "PrintItineraryRemarkOnly" - Prints itinerary remark only. This is used by Worldspan. "PrintBaggageAllowance" - Print the baggage allowance field with the autoprice or stored in the ticket record on credit
     * memos/pocket Itineraries or itinerary invoices issued in conjunction with a non electronic ticket. This is used by Worldspan.
     * - base: xs:string
     * - maxLength: 50
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $OverrideOption = null;
    /**
     * The SuppressItineraryRemarks
     * Meta information extracted from the WSDL
     * - documentation: True when itinerary remarks are suppressed.
     * - use: optional
     * @var bool|null
     */
    public ?bool $SuppressItineraryRemarks = null;
    /**
     * The GenerateItinNumbers
     * Meta information extracted from the WSDL
     * - documentation: True when itinerary numbers are system generated.
     * - use: optional
     * @var bool|null
     */
    public ?bool $GenerateItinNumbers = null;
    /**
     * Constructor method for DocumentOptions
     * @uses DocumentOptions::setPassengerReceiptOverride()
     * @uses DocumentOptions::setOverrideOption()
     * @uses DocumentOptions::setSuppressItineraryRemarks()
     * @uses DocumentOptions::setGenerateItinNumbers()
     * @param \Travelport\Air\StructType\PassengerReceiptOverride $passengerReceiptOverride
     * @param string[] $overrideOption
     * @param bool $suppressItineraryRemarks
     * @param bool $generateItinNumbers
     */
    public function __construct(?\Travelport\Air\StructType\PassengerReceiptOverride $passengerReceiptOverride = null, ?array $overrideOption = null, ?bool $suppressItineraryRemarks = null, ?bool $generateItinNumbers = null)
    {
        $this
            ->setPassengerReceiptOverride($passengerReceiptOverride)
            ->setOverrideOption($overrideOption)
            ->setSuppressItineraryRemarks($suppressItineraryRemarks)
            ->setGenerateItinNumbers($generateItinNumbers);
    }
    /**
     * Get PassengerReceiptOverride value
     * @return \Travelport\Air\StructType\PassengerReceiptOverride|null
     */
    public function getPassengerReceiptOverride(): ?\Travelport\Air\StructType\PassengerReceiptOverride
    {
        return $this->PassengerReceiptOverride;
    }
    /**
     * Set PassengerReceiptOverride value
     * @param \Travelport\Air\StructType\PassengerReceiptOverride $passengerReceiptOverride
     * @return \Travelport\Air\StructType\DocumentOptions
     */
    public function setPassengerReceiptOverride(?\Travelport\Air\StructType\PassengerReceiptOverride $passengerReceiptOverride = null): self
    {
        $this->PassengerReceiptOverride = $passengerReceiptOverride;
        
        return $this;
    }
    /**
     * Get OverrideOption value
     * @return string[]
     */
    public function getOverrideOption(): ?array
    {
        return $this->OverrideOption;
    }
    /**
     * Set OverrideOption value
     * @param string[] $overrideOption
     * @return \Travelport\Air\StructType\DocumentOptions
     */
    public function setOverrideOption(?array $overrideOption = null): self
    {
        $this->OverrideOption = $overrideOption;
        
        return $this;
    }
    /**
     * Add item to OverrideOption value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\DocumentOptions
     */
    public function addToOverrideOption(string $item): self
    {
        $this->OverrideOption[] = $item;
        
        return $this;
    }
    /**
     * Get SuppressItineraryRemarks value
     * @return bool|null
     */
    public function getSuppressItineraryRemarks(): ?bool
    {
        return $this->SuppressItineraryRemarks;
    }
    /**
     * Set SuppressItineraryRemarks value
     * @param bool $suppressItineraryRemarks
     * @return \Travelport\Air\StructType\DocumentOptions
     */
    public function setSuppressItineraryRemarks(?bool $suppressItineraryRemarks = null): self
    {
        $this->SuppressItineraryRemarks = $suppressItineraryRemarks;
        
        return $this;
    }
    /**
     * Get GenerateItinNumbers value
     * @return bool|null
     */
    public function getGenerateItinNumbers(): ?bool
    {
        return $this->GenerateItinNumbers;
    }
    /**
     * Set GenerateItinNumbers value
     * @param bool $generateItinNumbers
     * @return \Travelport\Air\StructType\DocumentOptions
     */
    public function setGenerateItinNumbers(?bool $generateItinNumbers = null): self
    {
        $this->GenerateItinNumbers = $generateItinNumbers;
        
        return $this;
    }
}
