<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?array $BookingTravelerRef = null;
    /**
     * The NetRemit
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to override the net remittance amount - varies by BSP agreement
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierAmountType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierAmountType $NetRemit = null;
    /**
     * The NetFare
     * Meta information extracted from the WSDL
     * - documentation: Net Fare amount for a ticketed fare
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierAmountType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierAmountType $NetFare = null;
    /**
     * The ActualSellingFare
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to report an Actual Selling Fare as part of the net remittance BSP agreement
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierAmountType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierAmountType $ActualSellingFare = null;
    /**
     * The InvoiceFare
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to report an Invoice Fare as part of the net remittance BSP agreement
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierAccountingType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierAccountingType $InvoiceFare = null;
    /**
     * The CorporateDiscount
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to add a corporate discount to the itinerary to be ticketed
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierAccountingType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierAccountingType $CorporateDiscount = null;
    /**
     * The AccountingInfo
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to report Accounting Information as part of the net remittance BSP agreement
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierAccountingType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierAccountingType $AccountingInfo = null;
    /**
     * The BulkTicket
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\BulkTicket|null
     */
    protected ?\Travelport\Util\StructType\BulkTicket $BulkTicket = null;
    /**
     * The GroupTour
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to update the fare as a Group Tour (inclusive tour) ticket - Optional SuppressOnFareCalc attribute will control how fare calculation is printed on the ticket
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeBulkTicketModifierType|null
     */
    protected ?\Travelport\Util\StructType\TypeBulkTicketModifierType $GroupTour = null;
    /**
     * The Commission
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:Commission
     * @var \Travelport\Util\StructType\Commission|null
     */
    protected ?\Travelport\Util\StructType\Commission $Commission = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\Util\StructType\TourCode|null
     */
    protected ?\Travelport\Util\StructType\TourCode $TourCode = null;
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: TicketEndorsement
     * @var \Travelport\Util\StructType\TicketEndorsement[]
     */
    protected ?array $TicketEndorsement = null;
    /**
     * The ValueModifier
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to modify value or commission of the ticket. The modifier is generic and depends on the specific GDS and BSP implementation
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTicketModifierValueType|null
     */
    protected ?\Travelport\Util\StructType\TypeTicketModifierValueType $ValueModifier = null;
    /**
     * The DocumentSelect
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentSelect
     * @var \Travelport\Util\StructType\DocumentSelect|null
     */
    protected ?\Travelport\Util\StructType\DocumentSelect $DocumentSelect = null;
    /**
     * The DocumentOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DocumentOptions
     * @var \Travelport\Util\StructType\DocumentOptions|null
     */
    protected ?\Travelport\Util\StructType\DocumentOptions $DocumentOptions = null;
    /**
     * The SegmentSelect
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: SegmentSelect
     * @var \Travelport\Util\StructType\SegmentSelect|null
     */
    protected ?\Travelport\Util\StructType\SegmentSelect $SegmentSelect = null;
    /**
     * The SegmentModifiers
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: SegmentModifiers
     * @var \Travelport\Util\StructType\SegmentModifiers[]
     */
    protected ?array $SegmentModifiers = null;
    /**
     * The SupplierLocator
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:SupplierLocator
     * @var \Travelport\Util\StructType\SupplierLocator|null
     */
    protected ?\Travelport\Util\StructType\SupplierLocator $SupplierLocator = null;
    /**
     * The DestinationPurposeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: DestinationPurposeCode
     * @var \Travelport\Util\StructType\DestinationPurposeCode|null
     */
    protected ?\Travelport\Util\StructType\DestinationPurposeCode $DestinationPurposeCode = null;
    /**
     * The LanguageOption
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * - ref: LanguageOption
     * @var \Travelport\Util\StructType\LanguageOption[]
     */
    protected ?array $LanguageOption = null;
    /**
     * The LandCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: LandCharges
     * @var \Travelport\Util\StructType\LandCharges|null
     */
    protected ?\Travelport\Util\StructType\LandCharges $LandCharges = null;
    /**
     * The PrintBlankFormItinerary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrintBlankFormItinerary
     * @var \Travelport\Util\StructType\PrintBlankFormItinerary|null
     */
    protected ?\Travelport\Util\StructType\PrintBlankFormItinerary $PrintBlankFormItinerary = null;
    /**
     * The ExemptOBFee
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ExemptOBFee
     * @var \Travelport\Util\StructType\ExemptOBFee|null
     */
    protected ?\Travelport\Util\StructType\ExemptOBFee $ExemptOBFee = null;
    /**
     * The IsPrimaryDI
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the DI is Primary DI. 1P only
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsPrimaryDI = null;
    /**
     * The DocumentInstructionNumber
     * Meta information extracted from the WSDL
     * - documentation: The Document Instruction line number. 1P only
     * - use: optional
     * @var string|null
     */
    protected ?string $DocumentInstructionNumber = null;
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
    protected ?string $Reference = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The FreeText
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 756
     * - use: optional
     * @var string|null
     */
    protected ?string $FreeText = null;
    /**
     * The NameNumber
     * Meta information extracted from the WSDL
     * - documentation: Host Name Number
     * - use: optional
     * @var string|null
     */
    protected ?string $NameNumber = null;
    /**
     * The TicketRecord
     * Meta information extracted from the WSDL
     * - documentation: Ticket Record Number
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketRecord = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to specify the Plating Carrier for ticketing | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * The ExemptVAT
     * Meta information extracted from the WSDL
     * - documentation: Allows an agency to update if VAT is Exemtped on the fare.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ExemptVAT = null;
    /**
     * The NetRemitApplied
     * Meta information extracted from the WSDL
     * - documentation: Indicator to the BSP net remittance scheme applies to ticketed fare.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NetRemitApplied = null;
    /**
     * The FreeTicket
     * Meta information extracted from the WSDL
     * - documentation: Indicates free ticket.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $FreeTicket = null;
    /**
     * The CurrencyOverrideCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $CurrencyOverrideCode = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\Util\StructType\TypeTicketModifierAmountType $netRemit
     * @param \Travelport\Util\StructType\TypeTicketModifierAmountType $netFare
     * @param \Travelport\Util\StructType\TypeTicketModifierAmountType $actualSellingFare
     * @param \Travelport\Util\StructType\TypeTicketModifierAccountingType $invoiceFare
     * @param \Travelport\Util\StructType\TypeTicketModifierAccountingType $corporateDiscount
     * @param \Travelport\Util\StructType\TypeTicketModifierAccountingType $accountingInfo
     * @param \Travelport\Util\StructType\BulkTicket $bulkTicket
     * @param \Travelport\Util\StructType\TypeBulkTicketModifierType $groupTour
     * @param \Travelport\Util\StructType\Commission $commission
     * @param \Travelport\Util\StructType\TourCode $tourCode
     * @param \Travelport\Util\StructType\TicketEndorsement[] $ticketEndorsement
     * @param \Travelport\Util\StructType\TypeTicketModifierValueType $valueModifier
     * @param \Travelport\Util\StructType\DocumentSelect $documentSelect
     * @param \Travelport\Util\StructType\DocumentOptions $documentOptions
     * @param \Travelport\Util\StructType\SegmentSelect $segmentSelect
     * @param \Travelport\Util\StructType\SegmentModifiers[] $segmentModifiers
     * @param \Travelport\Util\StructType\SupplierLocator $supplierLocator
     * @param \Travelport\Util\StructType\DestinationPurposeCode $destinationPurposeCode
     * @param \Travelport\Util\StructType\LanguageOption[] $languageOption
     * @param \Travelport\Util\StructType\LandCharges $landCharges
     * @param \Travelport\Util\StructType\PrintBlankFormItinerary $printBlankFormItinerary
     * @param \Travelport\Util\StructType\ExemptOBFee $exemptOBFee
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
    public function __construct(?array $bookingTravelerRef = null, ?\Travelport\Util\StructType\TypeTicketModifierAmountType $netRemit = null, ?\Travelport\Util\StructType\TypeTicketModifierAmountType $netFare = null, ?\Travelport\Util\StructType\TypeTicketModifierAmountType $actualSellingFare = null, ?\Travelport\Util\StructType\TypeTicketModifierAccountingType $invoiceFare = null, ?\Travelport\Util\StructType\TypeTicketModifierAccountingType $corporateDiscount = null, ?\Travelport\Util\StructType\TypeTicketModifierAccountingType $accountingInfo = null, ?\Travelport\Util\StructType\BulkTicket $bulkTicket = null, ?\Travelport\Util\StructType\TypeBulkTicketModifierType $groupTour = null, ?\Travelport\Util\StructType\Commission $commission = null, ?\Travelport\Util\StructType\TourCode $tourCode = null, ?array $ticketEndorsement = null, ?\Travelport\Util\StructType\TypeTicketModifierValueType $valueModifier = null, ?\Travelport\Util\StructType\DocumentSelect $documentSelect = null, ?\Travelport\Util\StructType\DocumentOptions $documentOptions = null, ?\Travelport\Util\StructType\SegmentSelect $segmentSelect = null, ?array $segmentModifiers = null, ?\Travelport\Util\StructType\SupplierLocator $supplierLocator = null, ?\Travelport\Util\StructType\DestinationPurposeCode $destinationPurposeCode = null, ?array $languageOption = null, ?\Travelport\Util\StructType\LandCharges $landCharges = null, ?\Travelport\Util\StructType\PrintBlankFormItinerary $printBlankFormItinerary = null, ?\Travelport\Util\StructType\ExemptOBFee $exemptOBFee = null, ?bool $isPrimaryDI = false, ?string $documentInstructionNumber = null, ?string $reference = null, ?string $status = null, ?string $freeText = null, ?string $nameNumber = null, ?string $ticketRecord = null, ?string $platingCarrier = null, ?bool $exemptVAT = null, ?bool $netRemitApplied = null, ?bool $freeTicket = null, ?string $currencyOverrideCode = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
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
     * This method is responsible for validating the values passed to the setBookingTravelerRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBookingTravelerRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketingModifiersBookingTravelerRefItem) {
            // validation for constraint: itemType
            if (!is_string($ticketingModifiersBookingTravelerRefItem)) {
                $invalidValues[] = is_object($ticketingModifiersBookingTravelerRefItem) ? get_class($ticketingModifiersBookingTravelerRefItem) : sprintf('%s(%s)', gettype($ticketingModifiersBookingTravelerRefItem), var_export($ticketingModifiersBookingTravelerRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string[] $bookingTravelerRef
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingTravelerRefArrayErrorMessage = self::validateBookingTravelerRefForArrayConstraintsFromSetBookingTravelerRef($bookingTravelerRef))) {
            throw new InvalidArgumentException($bookingTravelerRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($bookingTravelerRef) && count($bookingTravelerRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($bookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function addToBookingTravelerRef(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The BookingTravelerRef property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BookingTravelerRef) && count($this->BookingTravelerRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BookingTravelerRef)), __LINE__);
        }
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get NetRemit value
     * @return \Travelport\Util\StructType\TypeTicketModifierAmountType|null
     */
    public function getNetRemit(): ?\Travelport\Util\StructType\TypeTicketModifierAmountType
    {
        return $this->NetRemit;
    }
    /**
     * Set NetRemit value
     * @param \Travelport\Util\StructType\TypeTicketModifierAmountType $netRemit
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setNetRemit(?\Travelport\Util\StructType\TypeTicketModifierAmountType $netRemit = null): self
    {
        $this->NetRemit = $netRemit;
        
        return $this;
    }
    /**
     * Get NetFare value
     * @return \Travelport\Util\StructType\TypeTicketModifierAmountType|null
     */
    public function getNetFare(): ?\Travelport\Util\StructType\TypeTicketModifierAmountType
    {
        return $this->NetFare;
    }
    /**
     * Set NetFare value
     * @param \Travelport\Util\StructType\TypeTicketModifierAmountType $netFare
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setNetFare(?\Travelport\Util\StructType\TypeTicketModifierAmountType $netFare = null): self
    {
        $this->NetFare = $netFare;
        
        return $this;
    }
    /**
     * Get ActualSellingFare value
     * @return \Travelport\Util\StructType\TypeTicketModifierAmountType|null
     */
    public function getActualSellingFare(): ?\Travelport\Util\StructType\TypeTicketModifierAmountType
    {
        return $this->ActualSellingFare;
    }
    /**
     * Set ActualSellingFare value
     * @param \Travelport\Util\StructType\TypeTicketModifierAmountType $actualSellingFare
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setActualSellingFare(?\Travelport\Util\StructType\TypeTicketModifierAmountType $actualSellingFare = null): self
    {
        $this->ActualSellingFare = $actualSellingFare;
        
        return $this;
    }
    /**
     * Get InvoiceFare value
     * @return \Travelport\Util\StructType\TypeTicketModifierAccountingType|null
     */
    public function getInvoiceFare(): ?\Travelport\Util\StructType\TypeTicketModifierAccountingType
    {
        return $this->InvoiceFare;
    }
    /**
     * Set InvoiceFare value
     * @param \Travelport\Util\StructType\TypeTicketModifierAccountingType $invoiceFare
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setInvoiceFare(?\Travelport\Util\StructType\TypeTicketModifierAccountingType $invoiceFare = null): self
    {
        $this->InvoiceFare = $invoiceFare;
        
        return $this;
    }
    /**
     * Get CorporateDiscount value
     * @return \Travelport\Util\StructType\TypeTicketModifierAccountingType|null
     */
    public function getCorporateDiscount(): ?\Travelport\Util\StructType\TypeTicketModifierAccountingType
    {
        return $this->CorporateDiscount;
    }
    /**
     * Set CorporateDiscount value
     * @param \Travelport\Util\StructType\TypeTicketModifierAccountingType $corporateDiscount
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setCorporateDiscount(?\Travelport\Util\StructType\TypeTicketModifierAccountingType $corporateDiscount = null): self
    {
        $this->CorporateDiscount = $corporateDiscount;
        
        return $this;
    }
    /**
     * Get AccountingInfo value
     * @return \Travelport\Util\StructType\TypeTicketModifierAccountingType|null
     */
    public function getAccountingInfo(): ?\Travelport\Util\StructType\TypeTicketModifierAccountingType
    {
        return $this->AccountingInfo;
    }
    /**
     * Set AccountingInfo value
     * @param \Travelport\Util\StructType\TypeTicketModifierAccountingType $accountingInfo
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setAccountingInfo(?\Travelport\Util\StructType\TypeTicketModifierAccountingType $accountingInfo = null): self
    {
        $this->AccountingInfo = $accountingInfo;
        
        return $this;
    }
    /**
     * Get BulkTicket value
     * @return \Travelport\Util\StructType\BulkTicket|null
     */
    public function getBulkTicket(): ?\Travelport\Util\StructType\BulkTicket
    {
        return $this->BulkTicket;
    }
    /**
     * Set BulkTicket value
     * @param \Travelport\Util\StructType\BulkTicket $bulkTicket
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setBulkTicket(?\Travelport\Util\StructType\BulkTicket $bulkTicket = null): self
    {
        $this->BulkTicket = $bulkTicket;
        
        return $this;
    }
    /**
     * Get GroupTour value
     * @return \Travelport\Util\StructType\TypeBulkTicketModifierType|null
     */
    public function getGroupTour(): ?\Travelport\Util\StructType\TypeBulkTicketModifierType
    {
        return $this->GroupTour;
    }
    /**
     * Set GroupTour value
     * @param \Travelport\Util\StructType\TypeBulkTicketModifierType $groupTour
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setGroupTour(?\Travelport\Util\StructType\TypeBulkTicketModifierType $groupTour = null): self
    {
        $this->GroupTour = $groupTour;
        
        return $this;
    }
    /**
     * Get Commission value
     * @return \Travelport\Util\StructType\Commission|null
     */
    public function getCommission(): ?\Travelport\Util\StructType\Commission
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Travelport\Util\StructType\Commission $commission
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setCommission(?\Travelport\Util\StructType\Commission $commission = null): self
    {
        $this->Commission = $commission;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\Util\StructType\TourCode|null
     */
    public function getTourCode(): ?\Travelport\Util\StructType\TourCode
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\Util\StructType\TourCode $tourCode
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setTourCode(?\Travelport\Util\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\Util\StructType\TicketEndorsement[]
     */
    public function getTicketEndorsement(): ?array
    {
        return $this->TicketEndorsement;
    }
    /**
     * This method is responsible for validating the values passed to the setTicketEndorsement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicketEndorsement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketEndorsementForArrayConstraintsFromSetTicketEndorsement(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketingModifiersTicketEndorsementItem) {
            // validation for constraint: itemType
            if (!$ticketingModifiersTicketEndorsementItem instanceof \Travelport\Util\StructType\TicketEndorsement) {
                $invalidValues[] = is_object($ticketingModifiersTicketEndorsementItem) ? get_class($ticketingModifiersTicketEndorsementItem) : sprintf('%s(%s)', gettype($ticketingModifiersTicketEndorsementItem), var_export($ticketingModifiersTicketEndorsementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TicketEndorsement property can only contain items of type \Travelport\Util\StructType\TicketEndorsement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketEndorsement[] $ticketEndorsement
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setTicketEndorsement(?array $ticketEndorsement = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketEndorsementArrayErrorMessage = self::validateTicketEndorsementForArrayConstraintsFromSetTicketEndorsement($ticketEndorsement))) {
            throw new InvalidArgumentException($ticketEndorsementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($ticketEndorsement) && count($ticketEndorsement) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($ticketEndorsement)), __LINE__);
        }
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
    /**
     * Add item to TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TicketEndorsement $item
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function addToTicketEndorsement(\Travelport\Util\StructType\TicketEndorsement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TicketEndorsement) {
            throw new InvalidArgumentException(sprintf('The TicketEndorsement property can only contain items of type \Travelport\Util\StructType\TicketEndorsement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->TicketEndorsement) && count($this->TicketEndorsement) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->TicketEndorsement)), __LINE__);
        }
        $this->TicketEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get ValueModifier value
     * @return \Travelport\Util\StructType\TypeTicketModifierValueType|null
     */
    public function getValueModifier(): ?\Travelport\Util\StructType\TypeTicketModifierValueType
    {
        return $this->ValueModifier;
    }
    /**
     * Set ValueModifier value
     * @param \Travelport\Util\StructType\TypeTicketModifierValueType $valueModifier
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setValueModifier(?\Travelport\Util\StructType\TypeTicketModifierValueType $valueModifier = null): self
    {
        $this->ValueModifier = $valueModifier;
        
        return $this;
    }
    /**
     * Get DocumentSelect value
     * @return \Travelport\Util\StructType\DocumentSelect|null
     */
    public function getDocumentSelect(): ?\Travelport\Util\StructType\DocumentSelect
    {
        return $this->DocumentSelect;
    }
    /**
     * Set DocumentSelect value
     * @param \Travelport\Util\StructType\DocumentSelect $documentSelect
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setDocumentSelect(?\Travelport\Util\StructType\DocumentSelect $documentSelect = null): self
    {
        $this->DocumentSelect = $documentSelect;
        
        return $this;
    }
    /**
     * Get DocumentOptions value
     * @return \Travelport\Util\StructType\DocumentOptions|null
     */
    public function getDocumentOptions(): ?\Travelport\Util\StructType\DocumentOptions
    {
        return $this->DocumentOptions;
    }
    /**
     * Set DocumentOptions value
     * @param \Travelport\Util\StructType\DocumentOptions $documentOptions
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setDocumentOptions(?\Travelport\Util\StructType\DocumentOptions $documentOptions = null): self
    {
        $this->DocumentOptions = $documentOptions;
        
        return $this;
    }
    /**
     * Get SegmentSelect value
     * @return \Travelport\Util\StructType\SegmentSelect|null
     */
    public function getSegmentSelect(): ?\Travelport\Util\StructType\SegmentSelect
    {
        return $this->SegmentSelect;
    }
    /**
     * Set SegmentSelect value
     * @param \Travelport\Util\StructType\SegmentSelect $segmentSelect
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setSegmentSelect(?\Travelport\Util\StructType\SegmentSelect $segmentSelect = null): self
    {
        $this->SegmentSelect = $segmentSelect;
        
        return $this;
    }
    /**
     * Get SegmentModifiers value
     * @return \Travelport\Util\StructType\SegmentModifiers[]
     */
    public function getSegmentModifiers(): ?array
    {
        return $this->SegmentModifiers;
    }
    /**
     * This method is responsible for validating the values passed to the setSegmentModifiers method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSegmentModifiers method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSegmentModifiersForArrayConstraintsFromSetSegmentModifiers(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketingModifiersSegmentModifiersItem) {
            // validation for constraint: itemType
            if (!$ticketingModifiersSegmentModifiersItem instanceof \Travelport\Util\StructType\SegmentModifiers) {
                $invalidValues[] = is_object($ticketingModifiersSegmentModifiersItem) ? get_class($ticketingModifiersSegmentModifiersItem) : sprintf('%s(%s)', gettype($ticketingModifiersSegmentModifiersItem), var_export($ticketingModifiersSegmentModifiersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SegmentModifiers property can only contain items of type \Travelport\Util\StructType\SegmentModifiers, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SegmentModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SegmentModifiers[] $segmentModifiers
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setSegmentModifiers(?array $segmentModifiers = null): self
    {
        // validation for constraint: array
        if ('' !== ($segmentModifiersArrayErrorMessage = self::validateSegmentModifiersForArrayConstraintsFromSetSegmentModifiers($segmentModifiers))) {
            throw new InvalidArgumentException($segmentModifiersArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($segmentModifiers) && count($segmentModifiers) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($segmentModifiers)), __LINE__);
        }
        $this->SegmentModifiers = $segmentModifiers;
        
        return $this;
    }
    /**
     * Add item to SegmentModifiers value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\SegmentModifiers $item
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function addToSegmentModifiers(\Travelport\Util\StructType\SegmentModifiers $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\SegmentModifiers) {
            throw new InvalidArgumentException(sprintf('The SegmentModifiers property can only contain items of type \Travelport\Util\StructType\SegmentModifiers, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->SegmentModifiers) && count($this->SegmentModifiers) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->SegmentModifiers)), __LINE__);
        }
        $this->SegmentModifiers[] = $item;
        
        return $this;
    }
    /**
     * Get SupplierLocator value
     * @return \Travelport\Util\StructType\SupplierLocator|null
     */
    public function getSupplierLocator(): ?\Travelport\Util\StructType\SupplierLocator
    {
        return $this->SupplierLocator;
    }
    /**
     * Set SupplierLocator value
     * @param \Travelport\Util\StructType\SupplierLocator $supplierLocator
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setSupplierLocator(?\Travelport\Util\StructType\SupplierLocator $supplierLocator = null): self
    {
        $this->SupplierLocator = $supplierLocator;
        
        return $this;
    }
    /**
     * Get DestinationPurposeCode value
     * @return \Travelport\Util\StructType\DestinationPurposeCode|null
     */
    public function getDestinationPurposeCode(): ?\Travelport\Util\StructType\DestinationPurposeCode
    {
        return $this->DestinationPurposeCode;
    }
    /**
     * Set DestinationPurposeCode value
     * @param \Travelport\Util\StructType\DestinationPurposeCode $destinationPurposeCode
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setDestinationPurposeCode(?\Travelport\Util\StructType\DestinationPurposeCode $destinationPurposeCode = null): self
    {
        $this->DestinationPurposeCode = $destinationPurposeCode;
        
        return $this;
    }
    /**
     * Get LanguageOption value
     * @return \Travelport\Util\StructType\LanguageOption[]
     */
    public function getLanguageOption(): ?array
    {
        return $this->LanguageOption;
    }
    /**
     * This method is responsible for validating the values passed to the setLanguageOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLanguageOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLanguageOptionForArrayConstraintsFromSetLanguageOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketingModifiersLanguageOptionItem) {
            // validation for constraint: itemType
            if (!$ticketingModifiersLanguageOptionItem instanceof \Travelport\Util\StructType\LanguageOption) {
                $invalidValues[] = is_object($ticketingModifiersLanguageOptionItem) ? get_class($ticketingModifiersLanguageOptionItem) : sprintf('%s(%s)', gettype($ticketingModifiersLanguageOptionItem), var_export($ticketingModifiersLanguageOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LanguageOption property can only contain items of type \Travelport\Util\StructType\LanguageOption, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LanguageOption value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LanguageOption[] $languageOption
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setLanguageOption(?array $languageOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($languageOptionArrayErrorMessage = self::validateLanguageOptionForArrayConstraintsFromSetLanguageOption($languageOption))) {
            throw new InvalidArgumentException($languageOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($languageOption) && count($languageOption) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($languageOption)), __LINE__);
        }
        $this->LanguageOption = $languageOption;
        
        return $this;
    }
    /**
     * Add item to LanguageOption value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\LanguageOption $item
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function addToLanguageOption(\Travelport\Util\StructType\LanguageOption $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\LanguageOption) {
            throw new InvalidArgumentException(sprintf('The LanguageOption property can only contain items of type \Travelport\Util\StructType\LanguageOption, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->LanguageOption) && count($this->LanguageOption) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->LanguageOption)), __LINE__);
        }
        $this->LanguageOption[] = $item;
        
        return $this;
    }
    /**
     * Get LandCharges value
     * @return \Travelport\Util\StructType\LandCharges|null
     */
    public function getLandCharges(): ?\Travelport\Util\StructType\LandCharges
    {
        return $this->LandCharges;
    }
    /**
     * Set LandCharges value
     * @param \Travelport\Util\StructType\LandCharges $landCharges
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setLandCharges(?\Travelport\Util\StructType\LandCharges $landCharges = null): self
    {
        $this->LandCharges = $landCharges;
        
        return $this;
    }
    /**
     * Get PrintBlankFormItinerary value
     * @return \Travelport\Util\StructType\PrintBlankFormItinerary|null
     */
    public function getPrintBlankFormItinerary(): ?\Travelport\Util\StructType\PrintBlankFormItinerary
    {
        return $this->PrintBlankFormItinerary;
    }
    /**
     * Set PrintBlankFormItinerary value
     * @param \Travelport\Util\StructType\PrintBlankFormItinerary $printBlankFormItinerary
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setPrintBlankFormItinerary(?\Travelport\Util\StructType\PrintBlankFormItinerary $printBlankFormItinerary = null): self
    {
        $this->PrintBlankFormItinerary = $printBlankFormItinerary;
        
        return $this;
    }
    /**
     * Get ExemptOBFee value
     * @return \Travelport\Util\StructType\ExemptOBFee|null
     */
    public function getExemptOBFee(): ?\Travelport\Util\StructType\ExemptOBFee
    {
        return $this->ExemptOBFee;
    }
    /**
     * Set ExemptOBFee value
     * @param \Travelport\Util\StructType\ExemptOBFee $exemptOBFee
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setExemptOBFee(?\Travelport\Util\StructType\ExemptOBFee $exemptOBFee = null): self
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setIsPrimaryDI(?bool $isPrimaryDI = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrimaryDI) && !is_bool($isPrimaryDI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrimaryDI, true), gettype($isPrimaryDI)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setDocumentInstructionNumber(?string $documentInstructionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentInstructionNumber) && !is_string($documentInstructionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentInstructionNumber, true), gettype($documentInstructionNumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($reference) && mb_strlen((string) $reference) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $reference)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($reference) && mb_strlen((string) $reference) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $reference)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($status) && mb_strlen((string) $status) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $status)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setFreeText(?string $freeText = null): self
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freeText, true), gettype($freeText)), __LINE__);
        }
        // validation for constraint: maxLength(756)
        if (!is_null($freeText) && mb_strlen((string) $freeText) > 756) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 756', mb_strlen((string) $freeText)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setNameNumber(?string $nameNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($nameNumber) && !is_string($nameNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nameNumber, true), gettype($nameNumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setTicketRecord(?string $ticketRecord = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketRecord) && !is_string($ticketRecord)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketRecord, true), gettype($ticketRecord)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setExemptVAT(?bool $exemptVAT = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exemptVAT) && !is_bool($exemptVAT)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exemptVAT, true), gettype($exemptVAT)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setNetRemitApplied(?bool $netRemitApplied = null): self
    {
        // validation for constraint: boolean
        if (!is_null($netRemitApplied) && !is_bool($netRemitApplied)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($netRemitApplied, true), gettype($netRemitApplied)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setFreeTicket(?bool $freeTicket = null): self
    {
        // validation for constraint: boolean
        if (!is_null($freeTicket) && !is_bool($freeTicket)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeTicket, true), gettype($freeTicket)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setCurrencyOverrideCode(?string $currencyOverrideCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyOverrideCode) && !is_string($currencyOverrideCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyOverrideCode, true), gettype($currencyOverrideCode)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($currencyOverrideCode) && mb_strlen((string) $currencyOverrideCode) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $currencyOverrideCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
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
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\TicketingModifiers
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
