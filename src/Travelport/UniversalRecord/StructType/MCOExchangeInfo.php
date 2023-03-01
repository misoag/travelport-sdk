<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOExchangeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to the exchange tickets available for the MCO
 * @subpackage Structs
 */
class MCOExchangeInfo extends AbstractStructBase
{
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The ExchangedCoupon
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: ExchangedCoupon
     * @var \Travelport\UniversalRecord\StructType\ExchangedCoupon[]
     */
    public ?array $ExchangedCoupon = null;
    /**
     * The OriginalTicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Airline form and serial number of the original ticket issued. | Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalTicketNumber = null;
    /**
     * The OriginalCityCode
     * Meta information extracted from the WSDL
     * - documentation: Location of honoring carrier or operator. | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalCityCode = null;
    /**
     * The OriginalTicketDate
     * Meta information extracted from the WSDL
     * - documentation: Date that the Original ticket was issued. | Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalTicketDate = null;
    /**
     * The IATACode
     * Meta information extracted from the WSDL
     * - documentation: IATA code of the issuing agency. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    public ?string $IATACode = null;
    /**
     * Constructor method for MCOExchangeInfo
     * @uses MCOExchangeInfo::setFormOfPayment()
     * @uses MCOExchangeInfo::setExchangedCoupon()
     * @uses MCOExchangeInfo::setOriginalTicketNumber()
     * @uses MCOExchangeInfo::setOriginalCityCode()
     * @uses MCOExchangeInfo::setOriginalTicketDate()
     * @uses MCOExchangeInfo::setIATACode()
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\ExchangedCoupon[] $exchangedCoupon
     * @param string $originalTicketNumber
     * @param string $originalCityCode
     * @param string $originalTicketDate
     * @param string $iATACode
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?array $exchangedCoupon = null, ?string $originalTicketNumber = null, ?string $originalCityCode = null, ?string $originalTicketDate = null, ?string $iATACode = null)
    {
        $this
            ->setFormOfPayment($formOfPayment)
            ->setExchangedCoupon($exchangedCoupon)
            ->setOriginalTicketNumber($originalTicketNumber)
            ->setOriginalCityCode($originalCityCode)
            ->setOriginalTicketDate($originalTicketDate)
            ->setIATACode($iATACode);
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\UniversalRecord\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get ExchangedCoupon value
     * @return \Travelport\UniversalRecord\StructType\ExchangedCoupon[]
     */
    public function getExchangedCoupon(): ?array
    {
        return $this->ExchangedCoupon;
    }
    /**
     * Set ExchangedCoupon value
     * @param \Travelport\UniversalRecord\StructType\ExchangedCoupon[] $exchangedCoupon
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setExchangedCoupon(?array $exchangedCoupon = null): self
    {
        $this->ExchangedCoupon = $exchangedCoupon;
        
        return $this;
    }
    /**
     * Add item to ExchangedCoupon value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExchangedCoupon $item
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function addToExchangedCoupon(\Travelport\UniversalRecord\StructType\ExchangedCoupon $item): self
    {
        $this->ExchangedCoupon[] = $item;
        
        return $this;
    }
    /**
     * Get OriginalTicketNumber value
     * @return string|null
     */
    public function getOriginalTicketNumber(): ?string
    {
        return $this->OriginalTicketNumber;
    }
    /**
     * Set OriginalTicketNumber value
     * @param string $originalTicketNumber
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setOriginalTicketNumber(?string $originalTicketNumber = null): self
    {
        $this->OriginalTicketNumber = $originalTicketNumber;
        
        return $this;
    }
    /**
     * Get OriginalCityCode value
     * @return string|null
     */
    public function getOriginalCityCode(): ?string
    {
        return $this->OriginalCityCode;
    }
    /**
     * Set OriginalCityCode value
     * @param string $originalCityCode
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setOriginalCityCode(?string $originalCityCode = null): self
    {
        $this->OriginalCityCode = $originalCityCode;
        
        return $this;
    }
    /**
     * Get OriginalTicketDate value
     * @return string|null
     */
    public function getOriginalTicketDate(): ?string
    {
        return $this->OriginalTicketDate;
    }
    /**
     * Set OriginalTicketDate value
     * @param string $originalTicketDate
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setOriginalTicketDate(?string $originalTicketDate = null): self
    {
        $this->OriginalTicketDate = $originalTicketDate;
        
        return $this;
    }
    /**
     * Get IATACode value
     * @return string|null
     */
    public function getIATACode(): ?string
    {
        return $this->IATACode;
    }
    /**
     * Set IATACode value
     * @param string $iATACode
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setIATACode(?string $iATACode = null): self
    {
        $this->IATACode = $iATACode;
        
        return $this;
    }
}
