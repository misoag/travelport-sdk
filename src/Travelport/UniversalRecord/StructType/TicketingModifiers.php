<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to add user defined ticketing endorsements the ticket | Allows an agency to modify the tour code information on the ticket | Allows an agency to update the commission to a new or different commission rate which will
 * be applied at time of ticketing. The commission Modifier allows the user specify how the commission change is to applied | A container to identify individual ticketing modifiers.
 * @subpackage Structs
 */
class TicketingModifiers extends AbstractStructBase
{
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - documentation: Reference to a booking traveler for which ticketing modifier is applied. | Reference type
     * - base: xs:string
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The NetRemit
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to override the net remittance amount - varies by BSP agreement
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $NetRemit = null;
    /**
     * The NetFare
     * Meta information extracted from the WSDL
     * - documentation: Net Fare amount for a ticketed fare
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $NetFare = null;
    /**
     * The ActualSellingFare
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to report an Actual Selling Fare as part of the net remittance BSP agreement
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $ActualSellingFare = null;
    /**
     * The InvoiceFare
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to report an Invoice Fare as part of the net remittance BSP agreement
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $InvoiceFare = null;
    /**
     * The CorporateDiscount
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to add a corporate discount to the itinerary to be ticketed
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $CorporateDiscount = null;
    /**
     * The AccountingInfo
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to report Accounting Information as part of the net remittance BSP agreement
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $AccountingInfo = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\BulkTicket|null
     */
    public ?\Travelport\UniversalRecord\StructType\BulkTicket $BulkTicket = null;
    /**
     * The GroupTour
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to update the fare as a Group Tour (inclusive tour) ticket - Optional SuppressOnFareCalc attribute will control how fare calculation is printed on the ticket
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType $GroupTour = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\UniversalRecord\StructType\Commission|null
     */
    public ?\Travelport\UniversalRecord\StructType\Commission $Commission = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\UniversalRecord\StructType\TourCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\TourCode $TourCode = null;
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: TicketEndorsement
     * @var \Travelport\UniversalRecord\StructType\TicketEndorsement[]
     */
    public ?array $TicketEndorsement = null;
    /**
     * The ValueModifier
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to modify value or commission of the ticket. The modifier is generic and depends on the specific GDS and BSP implementation
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeTicketModifierValueType|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeTicketModifierValueType $ValueModifier = null;
    /**
     * The DocumentSelect
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentSelect
     * @var \Travelport\UniversalRecord\StructType\DocumentSelect|null
     */
    public ?\Travelport\UniversalRecord\StructType\DocumentSelect $DocumentSelect = null;
    /**
     * The DocumentOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentOptions
     * @var \Travelport\UniversalRecord\StructType\DocumentOptions|null
     */
    public ?\Travelport\UniversalRecord\StructType\DocumentOptions $DocumentOptions = null;
    /**
     * The SegmentSelect
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SegmentSelect
     * @var \Travelport\UniversalRecord\StructType\SegmentSelect|null
     */
    public ?\Travelport\UniversalRecord\StructType\SegmentSelect $SegmentSelect = null;
    /**
     * The SegmentModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SegmentModifiers
     * @var \Travelport\UniversalRecord\StructType\SegmentModifiers[]
     */
    public ?array $SegmentModifiers = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\UniversalRecord\StructType\SupplierLocator|null
     */
    public ?\Travelport\UniversalRecord\StructType\SupplierLocator $SupplierLocator = null;
    /**
     * The DestinationPurposeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DestinationPurposeCode
     * @var \Travelport\UniversalRecord\StructType\DestinationPurposeCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\DestinationPurposeCode $DestinationPurposeCode = null;
    /**
     * The LanguageOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: LanguageOption
     * @var \Travelport\UniversalRecord\StructType\LanguageOption[]
     */
    public ?array $LanguageOption = null;
    /**
     * The LandCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: LandCharges
     * @var \Travelport\UniversalRecord\StructType\LandCharges|null
     */
    public ?\Travelport\UniversalRecord\StructType\LandCharges $LandCharges = null;
    /**
     * The PrintBlankFormItinerary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrintBlankFormItinerary
     * @var \Travelport\UniversalRecord\StructType\PrintBlankFormItinerary|null
     */
    public ?\Travelport\UniversalRecord\StructType\PrintBlankFormItinerary $PrintBlankFormItinerary = null;
    /**
     * The ExemptOBFee
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ExemptOBFee
     * @var \Travelport\UniversalRecord\StructType\ExemptOBFee|null
     */
    public ?\Travelport\UniversalRecord\StructType\ExemptOBFee $ExemptOBFee = null;
    /**
     * The IsPrimaryDI
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the DI is Primary DI. 1P only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $IsPrimaryDI = null;
    /**
     * The DocumentInstructionNumber
     * Meta information extracted from the WSDL
     * - documentation: The Document Instruction line number. 1P only
     * - use: optional
     * @var string|null
     */
    public ?string $DocumentInstructionNumber = null;
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - documentation: Identifies if TicketingModifiers contains DI line information. 1P only. | Used for Character Strings, length 1 to 30.
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $Reference = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The FreeText
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 756
     * - use: optional
     * @var string|null
     */
    public ?string $FreeText = null;
    /**
     * The NameNumber
     * Meta information extracted from the WSDL
     * - documentation: Host Name Number
     * - use: optional
     * @var string|null
     */
    public ?string $NameNumber = null;
    /**
     * The TicketRecord
     * Meta information extracted from the WSDL
     * - documentation: Ticket Record Number
     * - use: optional
     * @var string|null
     */
    public ?string $TicketRecord = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to specify the Plating Carrier for ticketing | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The ExemptVAT
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to update if VAT is Exemtped on the fare.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ExemptVAT = null;
    /**
     * The NetRemitApplied
     * Meta information extracted from the WSDL
     * - documentation: Indicator to the BSP net remittance scheme applies to ticketed fare.
     * - use: optional
     * @var bool|null
     */
    public ?bool $NetRemitApplied = null;
    /**
     * The FreeTicket
     * Meta information extracted from the WSDL
     * - documentation: Indicates free ticket.
     * - use: optional
     * @var bool|null
     */
    public ?bool $FreeTicket = null;
    /**
     * The CurrencyOverrideCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    public ?string $CurrencyOverrideCode = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for TicketingModifiers
     * @uses TicketingModifiers::setBookingTravelerRef()
     * @uses TicketingModifiers::setNetRemit()
     * @uses TicketingModifiers::setNetFare()
     * @uses TicketingModifiers::setActualSellingFare()
     * @uses TicketingModifiers::setInvoiceFare()
     * @uses TicketingModifiers::setCorporateDiscount()
     * @uses TicketingModifiers::setAccountingInfo()
     * @uses TicketingModifiers::setBulkTicket()
     * @uses TicketingModifiers::setGroupTour()
     * @uses TicketingModifiers::setCommission()
     * @uses TicketingModifiers::setTourCode()
     * @uses TicketingModifiers::setTicketEndorsement()
     * @uses TicketingModifiers::setValueModifier()
     * @uses TicketingModifiers::setDocumentSelect()
     * @uses TicketingModifiers::setDocumentOptions()
     * @uses TicketingModifiers::setSegmentSelect()
     * @uses TicketingModifiers::setSegmentModifiers()
     * @uses TicketingModifiers::setSupplierLocator()
     * @uses TicketingModifiers::setDestinationPurposeCode()
     * @uses TicketingModifiers::setLanguageOption()
     * @uses TicketingModifiers::setLandCharges()
     * @uses TicketingModifiers::setPrintBlankFormItinerary()
     * @uses TicketingModifiers::setExemptOBFee()
     * @uses TicketingModifiers::setIsPrimaryDI()
     * @uses TicketingModifiers::setDocumentInstructionNumber()
     * @uses TicketingModifiers::setReference()
     * @uses TicketingModifiers::setStatus()
     * @uses TicketingModifiers::setFreeText()
     * @uses TicketingModifiers::setNameNumber()
     * @uses TicketingModifiers::setTicketRecord()
     * @uses TicketingModifiers::setPlatingCarrier()
     * @uses TicketingModifiers::setExemptVAT()
     * @uses TicketingModifiers::setNetRemitApplied()
     * @uses TicketingModifiers::setFreeTicket()
     * @uses TicketingModifiers::setCurrencyOverrideCode()
     * @uses TicketingModifiers::setKey()
     * @uses TicketingModifiers::setElStat()
     * @uses TicketingModifiers::setKeyOverride()
     * @param string[] $bookingTravelerRef
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netRemit
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netFare
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $actualSellingFare
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $invoiceFare
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $corporateDiscount
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $accountingInfo
     * @param \Travelport\UniversalRecord\StructType\BulkTicket $bulkTicket
     * @param \Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType $groupTour
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @param \Travelport\UniversalRecord\StructType\TourCode $tourCode
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement[] $ticketEndorsement
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierValueType $valueModifier
     * @param \Travelport\UniversalRecord\StructType\DocumentSelect $documentSelect
     * @param \Travelport\UniversalRecord\StructType\DocumentOptions $documentOptions
     * @param \Travelport\UniversalRecord\StructType\SegmentSelect $segmentSelect
     * @param \Travelport\UniversalRecord\StructType\SegmentModifiers[] $segmentModifiers
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $supplierLocator
     * @param \Travelport\UniversalRecord\StructType\DestinationPurposeCode $destinationPurposeCode
     * @param \Travelport\UniversalRecord\StructType\LanguageOption[] $languageOption
     * @param \Travelport\UniversalRecord\StructType\LandCharges $landCharges
     * @param \Travelport\UniversalRecord\StructType\PrintBlankFormItinerary $printBlankFormItinerary
     * @param \Travelport\UniversalRecord\StructType\ExemptOBFee $exemptOBFee
     * @param bool $isPrimaryDI
     * @param string $documentInstructionNumber
     * @param string $reference
     * @param string $status
     * @param string $freeText
     * @param string $nameNumber
     * @param string $ticketRecord
     * @param string $platingCarrier
     * @param bool $exemptVAT
     * @param bool $netRemitApplied
     * @param bool $freeTicket
     * @param string $currencyOverrideCode
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(?array $bookingTravelerRef = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netRemit = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netFare = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $actualSellingFare = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $invoiceFare = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $corporateDiscount = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $accountingInfo = null, ?\Travelport\UniversalRecord\StructType\BulkTicket $bulkTicket = null, ?\Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType $groupTour = null, ?\Travelport\UniversalRecord\StructType\Commission $commission = null, ?\Travelport\UniversalRecord\StructType\TourCode $tourCode = null, ?array $ticketEndorsement = null, ?\Travelport\UniversalRecord\StructType\TypeTicketModifierValueType $valueModifier = null, ?\Travelport\UniversalRecord\StructType\DocumentSelect $documentSelect = null, ?\Travelport\UniversalRecord\StructType\DocumentOptions $documentOptions = null, ?\Travelport\UniversalRecord\StructType\SegmentSelect $segmentSelect = null, ?array $segmentModifiers = null, ?\Travelport\UniversalRecord\StructType\SupplierLocator $supplierLocator = null, ?\Travelport\UniversalRecord\StructType\DestinationPurposeCode $destinationPurposeCode = null, ?array $languageOption = null, ?\Travelport\UniversalRecord\StructType\LandCharges $landCharges = null, ?\Travelport\UniversalRecord\StructType\PrintBlankFormItinerary $printBlankFormItinerary = null, ?\Travelport\UniversalRecord\StructType\ExemptOBFee $exemptOBFee = null, ?bool $isPrimaryDI = false, ?string $documentInstructionNumber = null, ?string $reference = null, ?string $status = null, ?string $freeText = null, ?string $nameNumber = null, ?string $ticketRecord = null, ?string $platingCarrier = null, ?bool $exemptVAT = null, ?bool $netRemitApplied = null, ?bool $freeTicket = null, ?string $currencyOverrideCode = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setNetRemit($netRemit)
            ->setNetFare($netFare)
            ->setActualSellingFare($actualSellingFare)
            ->setInvoiceFare($invoiceFare)
            ->setCorporateDiscount($corporateDiscount)
            ->setAccountingInfo($accountingInfo)
            ->setBulkTicket($bulkTicket)
            ->setGroupTour($groupTour)
            ->setCommission($commission)
            ->setTourCode($tourCode)
            ->setTicketEndorsement($ticketEndorsement)
            ->setValueModifier($valueModifier)
            ->setDocumentSelect($documentSelect)
            ->setDocumentOptions($documentOptions)
            ->setSegmentSelect($segmentSelect)
            ->setSegmentModifiers($segmentModifiers)
            ->setSupplierLocator($supplierLocator)
            ->setDestinationPurposeCode($destinationPurposeCode)
            ->setLanguageOption($languageOption)
            ->setLandCharges($landCharges)
            ->setPrintBlankFormItinerary($printBlankFormItinerary)
            ->setExemptOBFee($exemptOBFee)
            ->setIsPrimaryDI($isPrimaryDI)
            ->setDocumentInstructionNumber($documentInstructionNumber)
            ->setReference($reference)
            ->setStatus($status)
            ->setFreeText($freeText)
            ->setNameNumber($nameNumber)
            ->setTicketRecord($ticketRecord)
            ->setPlatingCarrier($platingCarrier)
            ->setExemptVAT($exemptVAT)
            ->setNetRemitApplied($netRemitApplied)
            ->setFreeTicket($freeTicket)
            ->setCurrencyOverrideCode($currencyOverrideCode)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get BookingTravelerRef value
     * @return string[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param string[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function addToBookingTravelerRef(string $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get NetRemit value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType|null
     */
    public function getNetRemit(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType
    {
        return $this->NetRemit;
    }
    /**
     * Set NetRemit value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netRemit
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setNetRemit(?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netRemit = null): self
    {
        $this->NetRemit = $netRemit;
        
        return $this;
    }
    /**
     * Get NetFare value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType|null
     */
    public function getNetFare(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType
    {
        return $this->NetFare;
    }
    /**
     * Set NetFare value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netFare
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setNetFare(?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $netFare = null): self
    {
        $this->NetFare = $netFare;
        
        return $this;
    }
    /**
     * Get ActualSellingFare value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType|null
     */
    public function getActualSellingFare(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType
    {
        return $this->ActualSellingFare;
    }
    /**
     * Set ActualSellingFare value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $actualSellingFare
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setActualSellingFare(?\Travelport\UniversalRecord\StructType\TypeTicketModifierAmountType $actualSellingFare = null): self
    {
        $this->ActualSellingFare = $actualSellingFare;
        
        return $this;
    }
    /**
     * Get InvoiceFare value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType|null
     */
    public function getInvoiceFare(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType
    {
        return $this->InvoiceFare;
    }
    /**
     * Set InvoiceFare value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $invoiceFare
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setInvoiceFare(?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $invoiceFare = null): self
    {
        $this->InvoiceFare = $invoiceFare;
        
        return $this;
    }
    /**
     * Get CorporateDiscount value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType|null
     */
    public function getCorporateDiscount(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType
    {
        return $this->CorporateDiscount;
    }
    /**
     * Set CorporateDiscount value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $corporateDiscount
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setCorporateDiscount(?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $corporateDiscount = null): self
    {
        $this->CorporateDiscount = $corporateDiscount;
        
        return $this;
    }
    /**
     * Get AccountingInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType|null
     */
    public function getAccountingInfo(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType
    {
        return $this->AccountingInfo;
    }
    /**
     * Set AccountingInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $accountingInfo
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setAccountingInfo(?\Travelport\UniversalRecord\StructType\TypeTicketModifierAccountingType $accountingInfo = null): self
    {
        $this->AccountingInfo = $accountingInfo;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return \Travelport\UniversalRecord\StructType\BulkTicket|null
     */
    public function getBulkTicket(): ?\Travelport\UniversalRecord\StructType\BulkTicket
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param \Travelport\UniversalRecord\StructType\BulkTicket $bulkTicket
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setBulkTicket(?\Travelport\UniversalRecord\StructType\BulkTicket $bulkTicket = null): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get GroupTour value
     * @return \Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType|null
     */
    public function getGroupTour(): ?\Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType
    {
        return $this->GroupTour;
    }
    /**
     * Set GroupTour value
     * @param \Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType $groupTour
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setGroupTour(?\Travelport\UniversalRecord\StructType\TypeBulkTicketModifierType $groupTour = null): self
    {
        $this->GroupTour = $groupTour;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\UniversalRecord\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\UniversalRecord\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\UniversalRecord\StructType\Commission $commission
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setCommission(?\Travelport\UniversalRecord\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\UniversalRecord\StructType\TourCode|null
     */
    public function getTourCode(): ?\Travelport\UniversalRecord\StructType\TourCode
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\UniversalRecord\StructType\TourCode $tourCode
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setTourCode(?\Travelport\UniversalRecord\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\UniversalRecord\StructType\TicketEndorsement[]
     */
    public function getTicketEndorsement(): ?array
    {
        return $this->TicketEndorsement;
    }
    /**
     * Set TicketEndorsement value
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement[] $ticketEndorsement
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setTicketEndorsement(?array $ticketEndorsement = null): self
    {
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
    /**
     * Add item to TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TicketEndorsement $item
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function addToTicketEndorsement(\Travelport\UniversalRecord\StructType\TicketEndorsement $item): self
    {
        $this->TicketEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get ValueModifier value
     * @return \Travelport\UniversalRecord\StructType\TypeTicketModifierValueType|null
     */
    public function getValueModifier(): ?\Travelport\UniversalRecord\StructType\TypeTicketModifierValueType
    {
        return $this->ValueModifier;
    }
    /**
     * Set ValueModifier value
     * @param \Travelport\UniversalRecord\StructType\TypeTicketModifierValueType $valueModifier
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setValueModifier(?\Travelport\UniversalRecord\StructType\TypeTicketModifierValueType $valueModifier = null): self
    {
        $this->ValueModifier = $valueModifier;
        
        return $this;
    }
    /**
     * Get DocumentSelect value
     * @return \Travelport\UniversalRecord\StructType\DocumentSelect|null
     */
    public function getDocumentSelect(): ?\Travelport\UniversalRecord\StructType\DocumentSelect
    {
        return $this->DocumentSelect;
    }
    /**
     * Set DocumentSelect value
     * @param \Travelport\UniversalRecord\StructType\DocumentSelect $documentSelect
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setDocumentSelect(?\Travelport\UniversalRecord\StructType\DocumentSelect $documentSelect = null): self
    {
        $this->DocumentSelect = $documentSelect;
        
        return $this;
    }
    /**
     * Get DocumentOptions value
     * @return \Travelport\UniversalRecord\StructType\DocumentOptions|null
     */
    public function getDocumentOptions(): ?\Travelport\UniversalRecord\StructType\DocumentOptions
    {
        return $this->DocumentOptions;
    }
    /**
     * Set DocumentOptions value
     * @param \Travelport\UniversalRecord\StructType\DocumentOptions $documentOptions
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setDocumentOptions(?\Travelport\UniversalRecord\StructType\DocumentOptions $documentOptions = null): self
    {
        $this->DocumentOptions = $documentOptions;
        
        return $this;
    }
    /**
     * Get SegmentSelect value
     * @return \Travelport\UniversalRecord\StructType\SegmentSelect|null
     */
    public function getSegmentSelect(): ?\Travelport\UniversalRecord\StructType\SegmentSelect
    {
        return $this->SegmentSelect;
    }
    /**
     * Set SegmentSelect value
     * @param \Travelport\UniversalRecord\StructType\SegmentSelect $segmentSelect
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setSegmentSelect(?\Travelport\UniversalRecord\StructType\SegmentSelect $segmentSelect = null): self
    {
        $this->SegmentSelect = $segmentSelect;
        
        return $this;
    }
    /**
     * Get SegmentModifiers value
     * @return \Travelport\UniversalRecord\StructType\SegmentModifiers[]
     */
    public function getSegmentModifiers(): ?array
    {
        return $this->SegmentModifiers;
    }
    /**
     * Set SegmentModifiers value
     * @param \Travelport\UniversalRecord\StructType\SegmentModifiers[] $segmentModifiers
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setSegmentModifiers(?array $segmentModifiers = null): self
    {
        $this->SegmentModifiers = $segmentModifiers;
        
        return $this;
    }
    /**
     * Add item to SegmentModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\SegmentModifiers $item
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function addToSegmentModifiers(\Travelport\UniversalRecord\StructType\SegmentModifiers $item): self
    {
        $this->SegmentModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\UniversalRecord\StructType\SupplierLocator|null
     */
    public function getSupplierLocator(): ?\Travelport\UniversalRecord\StructType\SupplierLocator
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\UniversalRecord\StructType\SupplierLocator $supplierLocator
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setSupplierLocator(?\Travelport\UniversalRecord\StructType\SupplierLocator $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Get DestinationPurposeCode value
     * @return \Travelport\UniversalRecord\StructType\DestinationPurposeCode|null
     */
    public function getDestinationPurposeCode(): ?\Travelport\UniversalRecord\StructType\DestinationPurposeCode
    {
        return $this->DestinationPurposeCode;
    }
    /**
     * Set DestinationPurposeCode value
     * @param \Travelport\UniversalRecord\StructType\DestinationPurposeCode $destinationPurposeCode
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setDestinationPurposeCode(?\Travelport\UniversalRecord\StructType\DestinationPurposeCode $destinationPurposeCode = null): self
    {
        $this->DestinationPurposeCode = $destinationPurposeCode;
        
        return $this;
    }
    /**
     * Get LanguageOption value
     * @return \Travelport\UniversalRecord\StructType\LanguageOption[]
     */
    public function getLanguageOption(): ?array
    {
        return $this->LanguageOption;
    }
    /**
     * Set LanguageOption value
     * @param \Travelport\UniversalRecord\StructType\LanguageOption[] $languageOption
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setLanguageOption(?array $languageOption = null): self
    {
        $this->LanguageOption = $languageOption;
        
        return $this;
    }
    /**
     * Add item to LanguageOption value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\LanguageOption $item
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function addToLanguageOption(\Travelport\UniversalRecord\StructType\LanguageOption $item): self
    {
        $this->LanguageOption[] = $item;
        
        return $this;
    }
    /**
     * Get LandCharges value
     * @return \Travelport\UniversalRecord\StructType\LandCharges|null
     */
    public function getLandCharges(): ?\Travelport\UniversalRecord\StructType\LandCharges
    {
        return $this->LandCharges;
    }
    /**
     * Set LandCharges value
     * @param \Travelport\UniversalRecord\StructType\LandCharges $landCharges
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setLandCharges(?\Travelport\UniversalRecord\StructType\LandCharges $landCharges = null): self
    {
        $this->LandCharges = $landCharges;
        
        return $this;
    }
    /**
     * Get PrintBlankFormItinerary value
     * @return \Travelport\UniversalRecord\StructType\PrintBlankFormItinerary|null
     */
    public function getPrintBlankFormItinerary(): ?\Travelport\UniversalRecord\StructType\PrintBlankFormItinerary
    {
        return $this->PrintBlankFormItinerary;
    }
    /**
     * Set PrintBlankFormItinerary value
     * @param \Travelport\UniversalRecord\StructType\PrintBlankFormItinerary $printBlankFormItinerary
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setPrintBlankFormItinerary(?\Travelport\UniversalRecord\StructType\PrintBlankFormItinerary $printBlankFormItinerary = null): self
    {
        $this->PrintBlankFormItinerary = $printBlankFormItinerary;
        
        return $this;
    }
    /**
     * Get ExemptOBFee value
     * @return \Travelport\UniversalRecord\StructType\ExemptOBFee|null
     */
    public function getExemptOBFee(): ?\Travelport\UniversalRecord\StructType\ExemptOBFee
    {
        return $this->ExemptOBFee;
    }
    /**
     * Set ExemptOBFee value
     * @param \Travelport\UniversalRecord\StructType\ExemptOBFee $exemptOBFee
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setExemptOBFee(?\Travelport\UniversalRecord\StructType\ExemptOBFee $exemptOBFee = null): self
    {
        $this->ExemptOBFee = $exemptOBFee;
        
        return $this;
    }
    /**
     * Get IsPrimaryDI value
     * @return bool|null
     */
    public function getIsPrimaryDI(): ?bool
    {
        return $this->IsPrimaryDI;
    }
    /**
     * Set IsPrimaryDI value
     * @param bool $isPrimaryDI
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setIsPrimaryDI(?bool $isPrimaryDI = false): self
    {
        $this->IsPrimaryDI = $isPrimaryDI;
        
        return $this;
    }
    /**
     * Get DocumentInstructionNumber value
     * @return string|null
     */
    public function getDocumentInstructionNumber(): ?string
    {
        return $this->DocumentInstructionNumber;
    }
    /**
     * Set DocumentInstructionNumber value
     * @param string $documentInstructionNumber
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setDocumentInstructionNumber(?string $documentInstructionNumber = null): self
    {
        $this->DocumentInstructionNumber = $documentInstructionNumber;
        
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setReference(?string $reference = null): self
    {
        $this->Reference = $reference;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText(): ?string
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setFreeText(?string $freeText = null): self
    {
        $this->FreeText = $freeText;
        
        return $this;
    }
    /**
     * Get NameNumber value
     * @return string|null
     */
    public function getNameNumber(): ?string
    {
        return $this->NameNumber;
    }
    /**
     * Set NameNumber value
     * @param string $nameNumber
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setNameNumber(?string $nameNumber = null): self
    {
        $this->NameNumber = $nameNumber;
        
        return $this;
    }
    /**
     * Get TicketRecord value
     * @return string|null
     */
    public function getTicketRecord(): ?string
    {
        return $this->TicketRecord;
    }
    /**
     * Set TicketRecord value
     * @param string $ticketRecord
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setTicketRecord(?string $ticketRecord = null): self
    {
        $this->TicketRecord = $ticketRecord;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get ExemptVAT value
     * @return bool|null
     */
    public function getExemptVAT(): ?bool
    {
        return $this->ExemptVAT;
    }
    /**
     * Set ExemptVAT value
     * @param bool $exemptVAT
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setExemptVAT(?bool $exemptVAT = null): self
    {
        $this->ExemptVAT = $exemptVAT;
        
        return $this;
    }
    /**
     * Get NetRemitApplied value
     * @return bool|null
     */
    public function getNetRemitApplied(): ?bool
    {
        return $this->NetRemitApplied;
    }
    /**
     * Set NetRemitApplied value
     * @param bool $netRemitApplied
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setNetRemitApplied(?bool $netRemitApplied = null): self
    {
        $this->NetRemitApplied = $netRemitApplied;
        
        return $this;
    }
    /**
     * Get FreeTicket value
     * @return bool|null
     */
    public function getFreeTicket(): ?bool
    {
        return $this->FreeTicket;
    }
    /**
     * Set FreeTicket value
     * @param bool $freeTicket
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setFreeTicket(?bool $freeTicket = null): self
    {
        $this->FreeTicket = $freeTicket;
        
        return $this;
    }
    /**
     * Get CurrencyOverrideCode value
     * @return string|null
     */
    public function getCurrencyOverrideCode(): ?string
    {
        return $this->CurrencyOverrideCode;
    }
    /**
     * Set CurrencyOverrideCode value
     * @param string $currencyOverrideCode
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setCurrencyOverrideCode(?string $currencyOverrideCode = null): self
    {
        $this->CurrencyOverrideCode = $currencyOverrideCode;
        
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
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\UniversalRecord\StructType\TicketingModifiers
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
