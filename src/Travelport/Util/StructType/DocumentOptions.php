<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\PassengerReceiptOverride|null
     */
    protected ?\Travelport\Util\StructType\PassengerReceiptOverride $PassengerReceiptOverride = null;
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
    protected ?array $OverrideOption = null;
    /**
     * The SuppressItineraryRemarks
     * Meta information extracted from the WSDL
     * - documentation: True when itinerary remarks are suppressed.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SuppressItineraryRemarks = null;
    /**
     * The GenerateItinNumbers
     * Meta information extracted from the WSDL
     * - documentation: True when itinerary numbers are system generated.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $GenerateItinNumbers = null;
    /**
     * Constructor method for DocumentOptions
     * @uses DocumentOptions::setPassengerReceiptOverride()
     * @uses DocumentOptions::setOverrideOption()
     * @uses DocumentOptions::setSuppressItineraryRemarks()
     * @uses DocumentOptions::setGenerateItinNumbers()
     * @param \Travelport\Util\StructType\PassengerReceiptOverride $passengerReceiptOverride
     * @param string[] $overrideOption
     * @param bool $suppressItineraryRemarks
     * @param bool $generateItinNumbers
     */
    public function __construct(?\Travelport\Util\StructType\PassengerReceiptOverride $passengerReceiptOverride = null, ?array $overrideOption = null, ?bool $suppressItineraryRemarks = null, ?bool $generateItinNumbers = null)
    {
        $this
            ->setPassengerReceiptOverride($passengerReceiptOverride)
            ->setOverrideOption($overrideOption)
            ->setSuppressItineraryRemarks($suppressItineraryRemarks)
            ->setGenerateItinNumbers($generateItinNumbers);
    }
    /**
     * Get PassengerReceiptOverride value
     * @return \Travelport\Util\StructType\PassengerReceiptOverride|null
     */
    public function getPassengerReceiptOverride(): ?\Travelport\Util\StructType\PassengerReceiptOverride
    {
        return $this->PassengerReceiptOverride;
    }
    /**
     * Set PassengerReceiptOverride value
     * @param \Travelport\Util\StructType\PassengerReceiptOverride $passengerReceiptOverride
     * @return \Travelport\Util\StructType\DocumentOptions
     */
    public function setPassengerReceiptOverride(?\Travelport\Util\StructType\PassengerReceiptOverride $passengerReceiptOverride = null): self
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
     * This method is responsible for validating the values passed to the setOverrideOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOverrideOption method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOverrideOptionForArrayConstraintsFromSetOverrideOption(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentOptionsOverrideOptionItem) {
            // validation for constraint: itemType
            if (!is_string($documentOptionsOverrideOptionItem)) {
                $invalidValues[] = is_object($documentOptionsOverrideOptionItem) ? get_class($documentOptionsOverrideOptionItem) : sprintf('%s(%s)', gettype($documentOptionsOverrideOptionItem), var_export($documentOptionsOverrideOptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OverrideOption property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setOverrideOption method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOverrideOption method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOverrideOptionForMaxLengthConstraintFromSetOverrideOption($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $documentOptionsOverrideOptionItem) {
            // validation for constraint: maxLength(50)
            if (mb_strlen((string) $documentOptionsOverrideOptionItem) > 50) {
                $invalidValues[] = var_export($documentOptionsOverrideOptionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 50', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OverrideOption value
     * @throws InvalidArgumentException
     * @param string[] $overrideOption
     * @return \Travelport\Util\StructType\DocumentOptions
     */
    public function setOverrideOption(?array $overrideOption = null): self
    {
        // validation for constraint: array
        if ('' !== ($overrideOptionArrayErrorMessage = self::validateOverrideOptionForArrayConstraintsFromSetOverrideOption($overrideOption))) {
            throw new InvalidArgumentException($overrideOptionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(50)
        if ('' !== ($overrideOptionMaxLengthErrorMessage = self::validateOverrideOptionForMaxLengthConstraintFromSetOverrideOption($overrideOption))) {
            throw new InvalidArgumentException($overrideOptionMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($overrideOption) && count($overrideOption) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($overrideOption)), __LINE__);
        }
        $this->OverrideOption = $overrideOption;
        
        return $this;
    }
    /**
     * Add item to OverrideOption value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\DocumentOptions
     */
    public function addToOverrideOption(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The OverrideOption property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (mb_strlen((string) $item) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->OverrideOption) && count($this->OverrideOption) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->OverrideOption)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentOptions
     */
    public function setSuppressItineraryRemarks(?bool $suppressItineraryRemarks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressItineraryRemarks) && !is_bool($suppressItineraryRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressItineraryRemarks, true), gettype($suppressItineraryRemarks)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentOptions
     */
    public function setGenerateItinNumbers(?bool $generateItinNumbers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($generateItinNumbers) && !is_bool($generateItinNumbers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateItinNumbers, true), gettype($generateItinNumbers)), __LINE__);
        }
        $this->GenerateItinNumbers = $generateItinNumbers;
        
        return $this;
    }
}
