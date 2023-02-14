<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCO StructType
 * @subpackage Structs
 */
class MCO extends MCOInformation
{
    /**
     * The MCOIssued
     * Meta information extracted from the WSDL
     * - documentation: Set to true when the MCO is to be issued and set to false if it is stored for issue at a later time.
     * - use: required
     * @var bool
     */
    protected bool $MCOIssued;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \StructType\FormOfPayment[]
     */
    protected ?array $FormOfPayment = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Endorsement
     * @var \StructType\Endorsement|null
     */
    protected ?\StructType\Endorsement $Endorsement = null;
    /**
     * The MCOExchangeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MCOExchangeInfo
     * @var \StructType\MCOExchangeInfo|null
     */
    protected ?\StructType\MCOExchangeInfo $MCOExchangeInfo = null;
    /**
     * The MCOFeeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MCOFeeInfo
     * @var \StructType\MCOFeeInfo|null
     */
    protected ?\StructType\MCOFeeInfo $MCOFeeInfo = null;
    /**
     * The MCORemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MCORemark
     * @var \StructType\MCORemark[]
     */
    protected ?array $MCORemark = null;
    /**
     * The MCOPriceData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MCOPriceData
     * @var \StructType\MCOPriceData|null
     */
    protected ?\StructType\MCOPriceData $MCOPriceData = null;
    /**
     * The StockControl
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: StockControl
     * @var \StructType\StockControl[]
     */
    protected ?array $StockControl = null;
    /**
     * The MCOText
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MCOText
     * @var \StructType\MCOText[]
     */
    protected ?array $MCOText = null;
    /**
     * The TicketType
     * Meta information extracted from the WSDL
     * - documentation: Ticket issue indicator. Possible values "Pre-paid ticket advice", "Ticket on departure" and "Other" .
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketType = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The ticket that this MCO was issued in connection with. Could be the ticket that caused the fee, a residual from an exchange, or an airline service fee.
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketNumber = null;
    /**
     * The MCOIssueDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time in which the MCO was issued.
     * - use: optional
     * @var string|null
     */
    protected ?string $MCOIssueDate = null;
    /**
     * The MCODocNum
     * Meta information extracted from the WSDL
     * - documentation: MCO document number.
     * - use: optional
     * @var string|null
     */
    protected ?string $MCODocNum = null;
    /**
     * The IssueReasonCode
     * Meta information extracted from the WSDL
     * - documentation: O - Other, P thru Z - airline specific, 1 thru 9 - market specific | K - Refundable Balances, L - Hotel accommodations, M - Sundry charges, N - Cancellation fee | G - Up-grading, H - Under collections, I - Taxes/fees/charges, J -
     * Deposits down payments | C - Bag shipped as cargo, D - Land arrgs for it, E - Car hire, F - Sleeper / berth | MCO issuing reason code. Possible Values (List): A - Air transportation, B - Surface transportation
     * @var string|null
     */
    protected ?string $IssueReasonCode = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this MCO | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PlatingCarrier = null;
    /**
     * The TourOperator
     * Meta information extracted from the WSDL
     * - documentation: Tour Operator - name of honoring carrier or operator.
     * - use: optional
     * @var string|null
     */
    protected ?string $TourOperator = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Location of honoring carrier or operator.
     * - use: optional
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: The Tour Code of the MCO.
     * @var string|null
     */
    protected ?string $TourCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Code of the provider that houses this MCO. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Locator Code of the Provider Reservation that houses this MCO. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PCC in the host system. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PseudoCityCode = null;
    /**
     * The ExpiryDate
     * Meta information extracted from the WSDL
     * - documentation: E-Voucher’s Expiry Date. This expiry date is specific to Rail product
     * - use: optional
     * @var string|null
     */
    protected ?string $ExpiryDate = null;
    /**
     * Constructor method for MCO
     * @uses MCO::setMCOIssued()
     * @uses MCO::setFormOfPayment()
     * @uses MCO::setEndorsement()
     * @uses MCO::setMCOExchangeInfo()
     * @uses MCO::setMCOFeeInfo()
     * @uses MCO::setMCORemark()
     * @uses MCO::setMCOPriceData()
     * @uses MCO::setStockControl()
     * @uses MCO::setMCOText()
     * @uses MCO::setTicketType()
     * @uses MCO::setTicketNumber()
     * @uses MCO::setMCOIssueDate()
     * @uses MCO::setMCODocNum()
     * @uses MCO::setIssueReasonCode()
     * @uses MCO::setPlatingCarrier()
     * @uses MCO::setTourOperator()
     * @uses MCO::setLocation()
     * @uses MCO::setTourCode()
     * @uses MCO::setProviderCode()
     * @uses MCO::setProviderLocatorCode()
     * @uses MCO::setPseudoCityCode()
     * @uses MCO::setExpiryDate()
     * @param bool $mCOIssued
     * @param \StructType\FormOfPayment[] $formOfPayment
     * @param \StructType\Endorsement $endorsement
     * @param \StructType\MCOExchangeInfo $mCOExchangeInfo
     * @param \StructType\MCOFeeInfo $mCOFeeInfo
     * @param \StructType\MCORemark[] $mCORemark
     * @param \StructType\MCOPriceData $mCOPriceData
     * @param \StructType\StockControl[] $stockControl
     * @param \StructType\MCOText[] $mCOText
     * @param string $ticketType
     * @param string $ticketNumber
     * @param string $mCOIssueDate
     * @param string $mCODocNum
     * @param string $issueReasonCode
     * @param string $platingCarrier
     * @param string $tourOperator
     * @param string $location
     * @param string $tourCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $pseudoCityCode
     * @param string $expiryDate
     */
    public function __construct(bool $mCOIssued, ?array $formOfPayment = null, ?\StructType\Endorsement $endorsement = null, ?\StructType\MCOExchangeInfo $mCOExchangeInfo = null, ?\StructType\MCOFeeInfo $mCOFeeInfo = null, ?array $mCORemark = null, ?\StructType\MCOPriceData $mCOPriceData = null, ?array $stockControl = null, ?array $mCOText = null, ?string $ticketType = null, ?string $ticketNumber = null, ?string $mCOIssueDate = null, ?string $mCODocNum = null, ?string $issueReasonCode = null, ?string $platingCarrier = null, ?string $tourOperator = null, ?string $location = null, ?string $tourCode = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $pseudoCityCode = null, ?string $expiryDate = null)
    {
        $this
            ->setMCOIssued($mCOIssued)
            ->setFormOfPayment($formOfPayment)
            ->setEndorsement($endorsement)
            ->setMCOExchangeInfo($mCOExchangeInfo)
            ->setMCOFeeInfo($mCOFeeInfo)
            ->setMCORemark($mCORemark)
            ->setMCOPriceData($mCOPriceData)
            ->setStockControl($stockControl)
            ->setMCOText($mCOText)
            ->setTicketType($ticketType)
            ->setTicketNumber($ticketNumber)
            ->setMCOIssueDate($mCOIssueDate)
            ->setMCODocNum($mCODocNum)
            ->setIssueReasonCode($issueReasonCode)
            ->setPlatingCarrier($platingCarrier)
            ->setTourOperator($tourOperator)
            ->setLocation($location)
            ->setTourCode($tourCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setPseudoCityCode($pseudoCityCode)
            ->setExpiryDate($expiryDate);
    }
    /**
     * Get MCOIssued value
     * @return bool
     */
    public function getMCOIssued(): bool
    {
        return $this->MCOIssued;
    }
    /**
     * Set MCOIssued value
     * @param bool $mCOIssued
     * @return \StructType\MCO
     */
    public function setMCOIssued(bool $mCOIssued): self
    {
        // validation for constraint: boolean
        if (!is_null($mCOIssued) && !is_bool($mCOIssued)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mCOIssued, true), gettype($mCOIssued)), __LINE__);
        }
        $this->MCOIssued = $mCOIssued;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setFormOfPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFormOfPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOFormOfPaymentItem) {
            // validation for constraint: itemType
            if (!$mCOFormOfPaymentItem instanceof \StructType\FormOfPayment) {
                $invalidValues[] = is_object($mCOFormOfPaymentItem) ? get_class($mCOFormOfPaymentItem) : sprintf('%s(%s)', gettype($mCOFormOfPaymentItem), var_export($mCOFormOfPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FormOfPayment property can only contain items of type \StructType\FormOfPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FormOfPayment value
     * @throws InvalidArgumentException
     * @param \StructType\FormOfPayment[] $formOfPayment
     * @return \StructType\MCO
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($formOfPaymentArrayErrorMessage = self::validateFormOfPaymentForArrayConstraintsFromSetFormOfPayment($formOfPayment))) {
            throw new InvalidArgumentException($formOfPaymentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($formOfPayment) && count($formOfPayment) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($formOfPayment)), __LINE__);
        }
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \StructType\FormOfPayment $item
     * @return \StructType\MCO
     */
    public function addToFormOfPayment(\StructType\FormOfPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FormOfPayment) {
            throw new InvalidArgumentException(sprintf('The FormOfPayment property can only contain items of type \StructType\FormOfPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FormOfPayment) && count($this->FormOfPayment) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FormOfPayment)), __LINE__);
        }
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Endorsement value
     * @return \StructType\Endorsement|null
     */
    public function getEndorsement(): ?\StructType\Endorsement
    {
        return $this->Endorsement;
    }
    /**
     * Set Endorsement value
     * @param \StructType\Endorsement $endorsement
     * @return \StructType\MCO
     */
    public function setEndorsement(?\StructType\Endorsement $endorsement = null): self
    {
        $this->Endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get MCOExchangeInfo value
     * @return \StructType\MCOExchangeInfo|null
     */
    public function getMCOExchangeInfo(): ?\StructType\MCOExchangeInfo
    {
        return $this->MCOExchangeInfo;
    }
    /**
     * Set MCOExchangeInfo value
     * @param \StructType\MCOExchangeInfo $mCOExchangeInfo
     * @return \StructType\MCO
     */
    public function setMCOExchangeInfo(?\StructType\MCOExchangeInfo $mCOExchangeInfo = null): self
    {
        $this->MCOExchangeInfo = $mCOExchangeInfo;
        
        return $this;
    }
    /**
     * Get MCOFeeInfo value
     * @return \StructType\MCOFeeInfo|null
     */
    public function getMCOFeeInfo(): ?\StructType\MCOFeeInfo
    {
        return $this->MCOFeeInfo;
    }
    /**
     * Set MCOFeeInfo value
     * @param \StructType\MCOFeeInfo $mCOFeeInfo
     * @return \StructType\MCO
     */
    public function setMCOFeeInfo(?\StructType\MCOFeeInfo $mCOFeeInfo = null): self
    {
        $this->MCOFeeInfo = $mCOFeeInfo;
        
        return $this;
    }
    /**
     * Get MCORemark value
     * @return \StructType\MCORemark[]
     */
    public function getMCORemark(): ?array
    {
        return $this->MCORemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMCORemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMCORemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMCORemarkForArrayConstraintsFromSetMCORemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOMCORemarkItem) {
            // validation for constraint: itemType
            if (!$mCOMCORemarkItem instanceof \StructType\MCORemark) {
                $invalidValues[] = is_object($mCOMCORemarkItem) ? get_class($mCOMCORemarkItem) : sprintf('%s(%s)', gettype($mCOMCORemarkItem), var_export($mCOMCORemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MCORemark property can only contain items of type \StructType\MCORemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MCORemark value
     * @throws InvalidArgumentException
     * @param \StructType\MCORemark[] $mCORemark
     * @return \StructType\MCO
     */
    public function setMCORemark(?array $mCORemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($mCORemarkArrayErrorMessage = self::validateMCORemarkForArrayConstraintsFromSetMCORemark($mCORemark))) {
            throw new InvalidArgumentException($mCORemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mCORemark) && count($mCORemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mCORemark)), __LINE__);
        }
        $this->MCORemark = $mCORemark;
        
        return $this;
    }
    /**
     * Add item to MCORemark value
     * @throws InvalidArgumentException
     * @param \StructType\MCORemark $item
     * @return \StructType\MCO
     */
    public function addToMCORemark(\StructType\MCORemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MCORemark) {
            throw new InvalidArgumentException(sprintf('The MCORemark property can only contain items of type \StructType\MCORemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MCORemark) && count($this->MCORemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MCORemark)), __LINE__);
        }
        $this->MCORemark[] = $item;
        
        return $this;
    }
    /**
     * Get MCOPriceData value
     * @return \StructType\MCOPriceData|null
     */
    public function getMCOPriceData(): ?\StructType\MCOPriceData
    {
        return $this->MCOPriceData;
    }
    /**
     * Set MCOPriceData value
     * @param \StructType\MCOPriceData $mCOPriceData
     * @return \StructType\MCO
     */
    public function setMCOPriceData(?\StructType\MCOPriceData $mCOPriceData = null): self
    {
        $this->MCOPriceData = $mCOPriceData;
        
        return $this;
    }
    /**
     * Get StockControl value
     * @return \StructType\StockControl[]
     */
    public function getStockControl(): ?array
    {
        return $this->StockControl;
    }
    /**
     * This method is responsible for validating the values passed to the setStockControl method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStockControl method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStockControlForArrayConstraintsFromSetStockControl(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOStockControlItem) {
            // validation for constraint: itemType
            if (!$mCOStockControlItem instanceof \StructType\StockControl) {
                $invalidValues[] = is_object($mCOStockControlItem) ? get_class($mCOStockControlItem) : sprintf('%s(%s)', gettype($mCOStockControlItem), var_export($mCOStockControlItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StockControl property can only contain items of type \StructType\StockControl, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StockControl value
     * @throws InvalidArgumentException
     * @param \StructType\StockControl[] $stockControl
     * @return \StructType\MCO
     */
    public function setStockControl(?array $stockControl = null): self
    {
        // validation for constraint: array
        if ('' !== ($stockControlArrayErrorMessage = self::validateStockControlForArrayConstraintsFromSetStockControl($stockControl))) {
            throw new InvalidArgumentException($stockControlArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($stockControl) && count($stockControl) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($stockControl)), __LINE__);
        }
        $this->StockControl = $stockControl;
        
        return $this;
    }
    /**
     * Add item to StockControl value
     * @throws InvalidArgumentException
     * @param \StructType\StockControl $item
     * @return \StructType\MCO
     */
    public function addToStockControl(\StructType\StockControl $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\StockControl) {
            throw new InvalidArgumentException(sprintf('The StockControl property can only contain items of type \StructType\StockControl, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->StockControl) && count($this->StockControl) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->StockControl)), __LINE__);
        }
        $this->StockControl[] = $item;
        
        return $this;
    }
    /**
     * Get MCOText value
     * @return \StructType\MCOText[]
     */
    public function getMCOText(): ?array
    {
        return $this->MCOText;
    }
    /**
     * This method is responsible for validating the values passed to the setMCOText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMCOText method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMCOTextForArrayConstraintsFromSetMCOText(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOMCOTextItem) {
            // validation for constraint: itemType
            if (!$mCOMCOTextItem instanceof \StructType\MCOText) {
                $invalidValues[] = is_object($mCOMCOTextItem) ? get_class($mCOMCOTextItem) : sprintf('%s(%s)', gettype($mCOMCOTextItem), var_export($mCOMCOTextItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MCOText property can only contain items of type \StructType\MCOText, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MCOText value
     * @throws InvalidArgumentException
     * @param \StructType\MCOText[] $mCOText
     * @return \StructType\MCO
     */
    public function setMCOText(?array $mCOText = null): self
    {
        // validation for constraint: array
        if ('' !== ($mCOTextArrayErrorMessage = self::validateMCOTextForArrayConstraintsFromSetMCOText($mCOText))) {
            throw new InvalidArgumentException($mCOTextArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($mCOText) && count($mCOText) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($mCOText)), __LINE__);
        }
        $this->MCOText = $mCOText;
        
        return $this;
    }
    /**
     * Add item to MCOText value
     * @throws InvalidArgumentException
     * @param \StructType\MCOText $item
     * @return \StructType\MCO
     */
    public function addToMCOText(\StructType\MCOText $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MCOText) {
            throw new InvalidArgumentException(sprintf('The MCOText property can only contain items of type \StructType\MCOText, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->MCOText) && count($this->MCOText) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->MCOText)), __LINE__);
        }
        $this->MCOText[] = $item;
        
        return $this;
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @param string $ticketType
     * @return \StructType\MCO
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->TicketType = $ticketType;
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber(): ?string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \StructType\MCO
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get MCOIssueDate value
     * @return string|null
     */
    public function getMCOIssueDate(): ?string
    {
        return $this->MCOIssueDate;
    }
    /**
     * Set MCOIssueDate value
     * @param string $mCOIssueDate
     * @return \StructType\MCO
     */
    public function setMCOIssueDate(?string $mCOIssueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($mCOIssueDate) && !is_string($mCOIssueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCOIssueDate, true), gettype($mCOIssueDate)), __LINE__);
        }
        $this->MCOIssueDate = $mCOIssueDate;
        
        return $this;
    }
    /**
     * Get MCODocNum value
     * @return string|null
     */
    public function getMCODocNum(): ?string
    {
        return $this->MCODocNum;
    }
    /**
     * Set MCODocNum value
     * @param string $mCODocNum
     * @return \StructType\MCO
     */
    public function setMCODocNum(?string $mCODocNum = null): self
    {
        // validation for constraint: string
        if (!is_null($mCODocNum) && !is_string($mCODocNum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mCODocNum, true), gettype($mCODocNum)), __LINE__);
        }
        $this->MCODocNum = $mCODocNum;
        
        return $this;
    }
    /**
     * Get IssueReasonCode value
     * @return string|null
     */
    public function getIssueReasonCode(): ?string
    {
        return $this->IssueReasonCode;
    }
    /**
     * Set IssueReasonCode value
     * @param string $issueReasonCode
     * @return \StructType\MCO
     */
    public function setIssueReasonCode(?string $issueReasonCode = null): self
    {
        // validation for constraint: string
        if (!is_null($issueReasonCode) && !is_string($issueReasonCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueReasonCode, true), gettype($issueReasonCode)), __LINE__);
        }
        $this->IssueReasonCode = $issueReasonCode;
        
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
     * @return \StructType\MCO
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
     * Get TourOperator value
     * @return string|null
     */
    public function getTourOperator(): ?string
    {
        return $this->TourOperator;
    }
    /**
     * Set TourOperator value
     * @param string $tourOperator
     * @return \StructType\MCO
     */
    public function setTourOperator(?string $tourOperator = null): self
    {
        // validation for constraint: string
        if (!is_null($tourOperator) && !is_string($tourOperator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourOperator, true), gettype($tourOperator)), __LINE__);
        }
        $this->TourOperator = $tourOperator;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\MCO
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return string|null
     */
    public function getTourCode(): ?string
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param string $tourCode
     * @return \StructType\MCO
     */
    public function setTourCode(?string $tourCode = null): self
    {
        // validation for constraint: string
        if (!is_null($tourCode) && !is_string($tourCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourCode, true), gettype($tourCode)), __LINE__);
        }
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \StructType\MCO
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \StructType\MCO
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \StructType\MCO
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
    /**
     * Get ExpiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \StructType\MCO
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;
        
        return $this;
    }
}
