<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public bool $MCOIssued;
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \Travelport\Hotel\StructType\FormOfPayment[]
     */
    public ?array $FormOfPayment = null;
    /**
     * The Endorsement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Endorsement
     * @var \Travelport\Hotel\StructType\Endorsement|null
     */
    public ?\Travelport\Hotel\StructType\Endorsement $Endorsement = null;
    /**
     * The MCOExchangeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MCOExchangeInfo
     * @var \Travelport\Hotel\StructType\MCOExchangeInfo|null
     */
    public ?\Travelport\Hotel\StructType\MCOExchangeInfo $MCOExchangeInfo = null;
    /**
     * The MCOFeeInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MCOFeeInfo
     * @var \Travelport\Hotel\StructType\MCOFeeInfo|null
     */
    public ?\Travelport\Hotel\StructType\MCOFeeInfo $MCOFeeInfo = null;
    /**
     * The MCORemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MCORemark
     * @var \Travelport\Hotel\StructType\MCORemark[]
     */
    public ?array $MCORemark = null;
    /**
     * The MCOPriceData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MCOPriceData
     * @var \Travelport\Hotel\StructType\MCOPriceData|null
     */
    public ?\Travelport\Hotel\StructType\MCOPriceData $MCOPriceData = null;
    /**
     * The StockControl
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: StockControl
     * @var \Travelport\Hotel\StructType\StockControl[]
     */
    public ?array $StockControl = null;
    /**
     * The MCOText
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: MCOText
     * @var \Travelport\Hotel\StructType\MCOText[]
     */
    public ?array $MCOText = null;
    /**
     * The TicketType
     * Meta information extracted from the WSDL
     * - documentation: Ticket issue indicator. Possible values "Pre-paid ticket advice", "Ticket on departure" and "Other" .
     * - use: optional
     * @var string|null
     */
    public ?string $TicketType = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: The ticket that this MCO was issued in connection with. Could be the ticket that caused the fee, a residual from an exchange, or an airline service fee.
     * - use: optional
     * @var string|null
     */
    public ?string $TicketNumber = null;
    /**
     * The MCOIssueDate
     * Meta information extracted from the WSDL
     * - documentation: Date and time in which the MCO was issued.
     * - use: optional
     * @var string|null
     */
    public ?string $MCOIssueDate = null;
    /**
     * The MCODocNum
     * Meta information extracted from the WSDL
     * - documentation: MCO document number.
     * - use: optional
     * @var string|null
     */
    public ?string $MCODocNum = null;
    /**
     * The IssueReasonCode
     * Meta information extracted from the WSDL
     * - documentation: O - Other, P thru Z - airline specific, 1 thru 9 - market specific | K - Refundable Balances, L - Hotel accommodations, M - Sundry charges, N - Cancellation fee | G - Up-grading, H - Under collections, I - Taxes/fees/charges, J -
     * Deposits down payments | C - Bag shipped as cargo, D - Land arrgs for it, E - Car hire, F - Sleeper / berth | MCO issuing reason code. Possible Values (List): A - Air transportation, B - Surface transportation
     * @var string|null
     */
    public ?string $IssueReasonCode = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: The Plating Carrier for this MCO | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The TourOperator
     * Meta information extracted from the WSDL
     * - documentation: Tour Operator - name of honoring carrier or operator.
     * - use: optional
     * @var string|null
     */
    public ?string $TourOperator = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: Location of honoring carrier or operator.
     * - use: optional
     * @var string|null
     */
    public ?string $Location = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - documentation: The Tour Code of the MCO.
     * @var string|null
     */
    public ?string $TourCode = null;
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
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the Provider Locator Code of the Provider Reservation that houses this MCO. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
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
    public ?string $PseudoCityCode = null;
    /**
     * The ExpiryDate
     * Meta information extracted from the WSDL
     * - documentation: E-Voucher’s Expiry Date. This expiry date is specific to Rail product
     * - use: optional
     * @var string|null
     */
    public ?string $ExpiryDate = null;
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
     * @param \Travelport\Hotel\StructType\FormOfPayment[] $formOfPayment
     * @param \Travelport\Hotel\StructType\Endorsement $endorsement
     * @param \Travelport\Hotel\StructType\MCOExchangeInfo $mCOExchangeInfo
     * @param \Travelport\Hotel\StructType\MCOFeeInfo $mCOFeeInfo
     * @param \Travelport\Hotel\StructType\MCORemark[] $mCORemark
     * @param \Travelport\Hotel\StructType\MCOPriceData $mCOPriceData
     * @param \Travelport\Hotel\StructType\StockControl[] $stockControl
     * @param \Travelport\Hotel\StructType\MCOText[] $mCOText
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
    public function __construct(bool $mCOIssued, ?array $formOfPayment = null, ?\Travelport\Hotel\StructType\Endorsement $endorsement = null, ?\Travelport\Hotel\StructType\MCOExchangeInfo $mCOExchangeInfo = null, ?\Travelport\Hotel\StructType\MCOFeeInfo $mCOFeeInfo = null, ?array $mCORemark = null, ?\Travelport\Hotel\StructType\MCOPriceData $mCOPriceData = null, ?array $stockControl = null, ?array $mCOText = null, ?string $ticketType = null, ?string $ticketNumber = null, ?string $mCOIssueDate = null, ?string $mCODocNum = null, ?string $issueReasonCode = null, ?string $platingCarrier = null, ?string $tourOperator = null, ?string $location = null, ?string $tourCode = null, ?string $providerCode = null, ?string $providerLocatorCode = null, ?string $pseudoCityCode = null, ?string $expiryDate = null)
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCOIssued(bool $mCOIssued): self
    {
        $this->MCOIssued = $mCOIssued;
        
        return $this;
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\Hotel\StructType\FormOfPayment[]
     */
    public function getFormOfPayment(): ?array
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\Hotel\StructType\FormOfPayment[] $formOfPayment
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setFormOfPayment(?array $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Add item to FormOfPayment value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\FormOfPayment $item
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function addToFormOfPayment(\Travelport\Hotel\StructType\FormOfPayment $item): self
    {
        $this->FormOfPayment[] = $item;
        
        return $this;
    }
    /**
     * Get Endorsement value
     * @return \Travelport\Hotel\StructType\Endorsement|null
     */
    public function getEndorsement(): ?\Travelport\Hotel\StructType\Endorsement
    {
        return $this->Endorsement;
    }
    /**
     * Set Endorsement value
     * @param \Travelport\Hotel\StructType\Endorsement $endorsement
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setEndorsement(?\Travelport\Hotel\StructType\Endorsement $endorsement = null): self
    {
        $this->Endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get MCOExchangeInfo value
     * @return \Travelport\Hotel\StructType\MCOExchangeInfo|null
     */
    public function getMCOExchangeInfo(): ?\Travelport\Hotel\StructType\MCOExchangeInfo
    {
        return $this->MCOExchangeInfo;
    }
    /**
     * Set MCOExchangeInfo value
     * @param \Travelport\Hotel\StructType\MCOExchangeInfo $mCOExchangeInfo
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCOExchangeInfo(?\Travelport\Hotel\StructType\MCOExchangeInfo $mCOExchangeInfo = null): self
    {
        $this->MCOExchangeInfo = $mCOExchangeInfo;
        
        return $this;
    }
    /**
     * Get MCOFeeInfo value
     * @return \Travelport\Hotel\StructType\MCOFeeInfo|null
     */
    public function getMCOFeeInfo(): ?\Travelport\Hotel\StructType\MCOFeeInfo
    {
        return $this->MCOFeeInfo;
    }
    /**
     * Set MCOFeeInfo value
     * @param \Travelport\Hotel\StructType\MCOFeeInfo $mCOFeeInfo
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCOFeeInfo(?\Travelport\Hotel\StructType\MCOFeeInfo $mCOFeeInfo = null): self
    {
        $this->MCOFeeInfo = $mCOFeeInfo;
        
        return $this;
    }
    /**
     * Get MCORemark value
     * @return \Travelport\Hotel\StructType\MCORemark[]
     */
    public function getMCORemark(): ?array
    {
        return $this->MCORemark;
    }
    /**
     * Set MCORemark value
     * @param \Travelport\Hotel\StructType\MCORemark[] $mCORemark
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCORemark(?array $mCORemark = null): self
    {
        $this->MCORemark = $mCORemark;
        
        return $this;
    }
    /**
     * Add item to MCORemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MCORemark $item
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function addToMCORemark(\Travelport\Hotel\StructType\MCORemark $item): self
    {
        $this->MCORemark[] = $item;
        
        return $this;
    }
    /**
     * Get MCOPriceData value
     * @return \Travelport\Hotel\StructType\MCOPriceData|null
     */
    public function getMCOPriceData(): ?\Travelport\Hotel\StructType\MCOPriceData
    {
        return $this->MCOPriceData;
    }
    /**
     * Set MCOPriceData value
     * @param \Travelport\Hotel\StructType\MCOPriceData $mCOPriceData
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCOPriceData(?\Travelport\Hotel\StructType\MCOPriceData $mCOPriceData = null): self
    {
        $this->MCOPriceData = $mCOPriceData;
        
        return $this;
    }
    /**
     * Get StockControl value
     * @return \Travelport\Hotel\StructType\StockControl[]
     */
    public function getStockControl(): ?array
    {
        return $this->StockControl;
    }
    /**
     * Set StockControl value
     * @param \Travelport\Hotel\StructType\StockControl[] $stockControl
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setStockControl(?array $stockControl = null): self
    {
        $this->StockControl = $stockControl;
        
        return $this;
    }
    /**
     * Add item to StockControl value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\StockControl $item
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function addToStockControl(\Travelport\Hotel\StructType\StockControl $item): self
    {
        $this->StockControl[] = $item;
        
        return $this;
    }
    /**
     * Get MCOText value
     * @return \Travelport\Hotel\StructType\MCOText[]
     */
    public function getMCOText(): ?array
    {
        return $this->MCOText;
    }
    /**
     * Set MCOText value
     * @param \Travelport\Hotel\StructType\MCOText[] $mCOText
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCOText(?array $mCOText = null): self
    {
        $this->MCOText = $mCOText;
        
        return $this;
    }
    /**
     * Add item to MCOText value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\MCOText $item
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function addToMCOText(\Travelport\Hotel\StructType\MCOText $item): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setTicketType(?string $ticketType = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setTicketNumber(?string $ticketNumber = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCOIssueDate(?string $mCOIssueDate = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setMCODocNum(?string $mCODocNum = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setIssueReasonCode(?string $issueReasonCode = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setTourOperator(?string $tourOperator = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setLocation(?string $location = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setTourCode(?string $tourCode = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
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
     * @return \Travelport\Hotel\StructType\MCO
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        $this->ExpiryDate = $expiryDate;
        
        return $this;
    }
}
