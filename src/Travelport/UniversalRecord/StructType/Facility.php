<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Facility StructType
 * Meta information extracted from the WSDL
 * - documentation: Tax information related to seat price. This is presently populated for MCH and ACH content. Applicable providers are MCH/ACH | The facility definition for a part of a row or a seat map
 * @subpackage Structs
 */
class Facility extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of facility
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    public ?array $Characteristic = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\UniversalRecord\StructType\Remark[]
     */
    public ?array $Remark = null;
    /**
     * The PassengerSeatPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerSeatPrice
     * @var \Travelport\UniversalRecord\StructType\PassengerSeatPrice[]
     */
    public ?array $PassengerSeatPrice = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public ?array $TaxInfo = null;
    /**
     * The EMD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EMD
     * @var \Travelport\UniversalRecord\StructType\EMD|null
     */
    public ?\Travelport\UniversalRecord\StructType\EMD $EMD = null;
    /**
     * The ServiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceData
     * @var \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    public ?array $ServiceData = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\UniversalRecord\StructType\TourCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\TourCode $TourCode = null;
    /**
     * The SeatCode
     * Meta information extracted from the WSDL
     * - documentation: If a seat type, the seat identifier
     * - use: optional
     * @var string|null
     */
    public ?string $SeatCode = null;
    /**
     * The Availability
     * Meta information extracted from the WSDL
     * - documentation: If a seat type, the availability of the seat
     * - use: optional
     * @var string|null
     */
    public ?string $Availability = null;
    /**
     * The SeatPrice
     * Meta information extracted from the WSDL
     * - documentation: The price of the seat, if applicable. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $SeatPrice = null;
    /**
     * The Paid
     * Meta information extracted from the WSDL
     * - documentation: Set to True if either SeatPrice or GroupSeatPrice are returned.
     * - use: optional
     * @var bool|null
     */
    public ?bool $Paid = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: optional
     * @var string|null
     */
    public ?string $ServiceSubCode = null;
    /**
     * The SSRCode
     * Meta information extracted from the WSDL
     * - documentation: The SSR Code associated with the Facility | SSR Code, exactly 4 characters (e.g. DEAF, NSST, etc.)
     * - base: xs:string
     * - maxLength: 4
     * - minLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $SSRCode = null;
    /**
     * The IssuanceReason
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $IssuanceReason = null;
    /**
     * The BaseSeatPrice
     * Meta information extracted from the WSDL
     * - documentation: Price of the seats excluding Taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $BaseSeatPrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: Tax amount for the seat price. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The number of units availed for each optional service (e.g. 2 baggage availed will be specified as 2 in quantity for optional service BAGGAGE)
     * - use: optional
     * @var int|null
     */
    public ?int $Quantity = null;
    /**
     * The SequenceNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequence number associated with the OptionalService
     * - use: optional
     * @var int|null
     */
    public ?int $SequenceNumber = null;
    /**
     * The InclusiveOfTax
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the service was filed with a fee that is inclusive of tax.
     * - use: optional
     * @var bool|null
     */
    public ?bool $InclusiveOfTax = null;
    /**
     * The InterlineSettlementAllowed
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the interline settlement is allowed in service .
     * - use: optional
     * @var bool|null
     */
    public ?bool $InterlineSettlementAllowed = null;
    /**
     * The GeographySpecification
     * Meta information extracted from the WSDL
     * - documentation: Sector, Portion, Journey.
     * - use: optional
     * @var string|null
     */
    public ?string $GeographySpecification = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: The Source of the optional service. The source can be ACH, MCE, or MCH.
     * - use: optional
     * @var string|null
     */
    public ?string $Source = null;
    /**
     * The OptionalServiceRef
     * Meta information extracted from the WSDL
     * - documentation: References the OptionalService for the Row/Facility. Providers: ACH, 1G, 1V, 1P | Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $OptionalServiceRef = null;
    /**
     * The SeatInformationRef
     * Meta information extracted from the WSDL
     * - documentation: Specifies the seat information for the seat. Providers: ACH, 1G, 1V, 1P | Reference type
     * - base: xs:string
     * @var string|null
     */
    public ?string $SeatInformationRef = null;
    /**
     * Constructor method for Facility
     * @uses Facility::setType()
     * @uses Facility::setCharacteristic()
     * @uses Facility::setRemark()
     * @uses Facility::setPassengerSeatPrice()
     * @uses Facility::setTaxInfo()
     * @uses Facility::setEMD()
     * @uses Facility::setServiceData()
     * @uses Facility::setTourCode()
     * @uses Facility::setSeatCode()
     * @uses Facility::setAvailability()
     * @uses Facility::setSeatPrice()
     * @uses Facility::setPaid()
     * @uses Facility::setServiceSubCode()
     * @uses Facility::setSSRCode()
     * @uses Facility::setIssuanceReason()
     * @uses Facility::setBaseSeatPrice()
     * @uses Facility::setTaxes()
     * @uses Facility::setQuantity()
     * @uses Facility::setSequenceNumber()
     * @uses Facility::setInclusiveOfTax()
     * @uses Facility::setInterlineSettlementAllowed()
     * @uses Facility::setGeographySpecification()
     * @uses Facility::setSource()
     * @uses Facility::setOptionalServiceRef()
     * @uses Facility::setSeatInformationRef()
     * @param string $type
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @param \Travelport\UniversalRecord\StructType\PassengerSeatPrice[] $passengerSeatPrice
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @param \Travelport\UniversalRecord\StructType\EMD $eMD
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @param \Travelport\UniversalRecord\StructType\TourCode $tourCode
     * @param string $seatCode
     * @param string $availability
     * @param string $seatPrice
     * @param bool $paid
     * @param string $serviceSubCode
     * @param string $sSRCode
     * @param string $issuanceReason
     * @param string $baseSeatPrice
     * @param string $taxes
     * @param int $quantity
     * @param int $sequenceNumber
     * @param bool $inclusiveOfTax
     * @param bool $interlineSettlementAllowed
     * @param string $geographySpecification
     * @param string $source
     * @param string $optionalServiceRef
     * @param string $seatInformationRef
     */
    public function __construct(string $type, ?array $characteristic = null, ?array $remark = null, ?array $passengerSeatPrice = null, ?array $taxInfo = null, ?\Travelport\UniversalRecord\StructType\EMD $eMD = null, ?array $serviceData = null, ?\Travelport\UniversalRecord\StructType\TourCode $tourCode = null, ?string $seatCode = null, ?string $availability = null, ?string $seatPrice = null, ?bool $paid = null, ?string $serviceSubCode = null, ?string $sSRCode = null, ?string $issuanceReason = null, ?string $baseSeatPrice = null, ?string $taxes = null, ?int $quantity = null, ?int $sequenceNumber = null, ?bool $inclusiveOfTax = null, ?bool $interlineSettlementAllowed = null, ?string $geographySpecification = null, ?string $source = null, ?string $optionalServiceRef = null, ?string $seatInformationRef = null)
    {
        $this
            ->setType($type)
            ->setCharacteristic($characteristic)
            ->setRemark($remark)
            ->setPassengerSeatPrice($passengerSeatPrice)
            ->setTaxInfo($taxInfo)
            ->setEMD($eMD)
            ->setServiceData($serviceData)
            ->setTourCode($tourCode)
            ->setSeatCode($seatCode)
            ->setAvailability($availability)
            ->setSeatPrice($seatPrice)
            ->setPaid($paid)
            ->setServiceSubCode($serviceSubCode)
            ->setSSRCode($sSRCode)
            ->setIssuanceReason($issuanceReason)
            ->setBaseSeatPrice($baseSeatPrice)
            ->setTaxes($taxes)
            ->setQuantity($quantity)
            ->setSequenceNumber($sequenceNumber)
            ->setInclusiveOfTax($inclusiveOfTax)
            ->setInterlineSettlementAllowed($interlineSettlementAllowed)
            ->setGeographySpecification($geographySpecification)
            ->setSource($source)
            ->setOptionalServiceRef($optionalServiceRef)
            ->setSeatInformationRef($seatInformationRef);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Characteristic value
     * @return \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    public function getCharacteristic(): ?array
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Add item to Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Characteristic $item
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function addToCharacteristic(\Travelport\UniversalRecord\StructType\Characteristic $item): self
    {
        $this->Characteristic[] = $item;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\UniversalRecord\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setRemark(?array $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Remark $item
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function addToRemark(\Travelport\UniversalRecord\StructType\Remark $item): self
    {
        $this->Remark[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerSeatPrice value
     * @return \Travelport\UniversalRecord\StructType\PassengerSeatPrice[]
     */
    public function getPassengerSeatPrice(): ?array
    {
        return $this->PassengerSeatPrice;
    }
    /**
     * Set PassengerSeatPrice value
     * @param \Travelport\UniversalRecord\StructType\PassengerSeatPrice[] $passengerSeatPrice
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setPassengerSeatPrice(?array $passengerSeatPrice = null): self
    {
        $this->PassengerSeatPrice = $passengerSeatPrice;
        
        return $this;
    }
    /**
     * Add item to PassengerSeatPrice value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerSeatPrice $item
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function addToPassengerSeatPrice(\Travelport\UniversalRecord\StructType\PassengerSeatPrice $item): self
    {
        $this->PassengerSeatPrice[] = $item;
        
        return $this;
    }
    /**
     * Get TaxInfo value
     * @return \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    public function getTaxInfo(): ?array
    {
        return $this->TaxInfo;
    }
    /**
     * Set TaxInfo value
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        $this->TaxInfo = $taxInfo;
        
        return $this;
    }
    /**
     * Add item to TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo $item
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function addToTaxInfo(\Travelport\UniversalRecord\StructType\TypeTaxInfo $item): self
    {
        $this->TaxInfo[] = $item;
        
        return $this;
    }
    /**
     * Get EMD value
     * @return \Travelport\UniversalRecord\StructType\EMD|null
     */
    public function getEMD(): ?\Travelport\UniversalRecord\StructType\EMD
    {
        return $this->EMD;
    }
    /**
     * Set EMD value
     * @param \Travelport\UniversalRecord\StructType\EMD $eMD
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setEMD(?\Travelport\UniversalRecord\StructType\EMD $eMD = null): self
    {
        $this->EMD = $eMD;
        
        return $this;
    }
    /**
     * Get ServiceData value
     * @return \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    public function getServiceData(): ?array
    {
        return $this->ServiceData;
    }
    /**
     * Set ServiceData value
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setServiceData(?array $serviceData = null): self
    {
        $this->ServiceData = $serviceData;
        
        return $this;
    }
    /**
     * Add item to ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceData $item
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function addToServiceData(\Travelport\UniversalRecord\StructType\ServiceData $item): self
    {
        $this->ServiceData[] = $item;
        
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
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setTourCode(?\Travelport\UniversalRecord\StructType\TourCode $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Get SeatCode value
     * @return string|null
     */
    public function getSeatCode(): ?string
    {
        return $this->SeatCode;
    }
    /**
     * Set SeatCode value
     * @param string $seatCode
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setSeatCode(?string $seatCode = null): self
    {
        $this->SeatCode = $seatCode;
        
        return $this;
    }
    /**
     * Get Availability value
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @param string $availability
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setAvailability(?string $availability = null): self
    {
        $this->Availability = $availability;
        
        return $this;
    }
    /**
     * Get SeatPrice value
     * @return string|null
     */
    public function getSeatPrice(): ?string
    {
        return $this->SeatPrice;
    }
    /**
     * Set SeatPrice value
     * @param string $seatPrice
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setSeatPrice(?string $seatPrice = null): self
    {
        $this->SeatPrice = $seatPrice;
        
        return $this;
    }
    /**
     * Get Paid value
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->Paid;
    }
    /**
     * Set Paid value
     * @param bool $paid
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setPaid(?bool $paid = null): self
    {
        $this->Paid = $paid;
        
        return $this;
    }
    /**
     * Get ServiceSubCode value
     * @return string|null
     */
    public function getServiceSubCode(): ?string
    {
        return $this->ServiceSubCode;
    }
    /**
     * Set ServiceSubCode value
     * @param string $serviceSubCode
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setServiceSubCode(?string $serviceSubCode = null): self
    {
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
    /**
     * Get SSRCode value
     * @return string|null
     */
    public function getSSRCode(): ?string
    {
        return $this->SSRCode;
    }
    /**
     * Set SSRCode value
     * @param string $sSRCode
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setSSRCode(?string $sSRCode = null): self
    {
        $this->SSRCode = $sSRCode;
        
        return $this;
    }
    /**
     * Get IssuanceReason value
     * @return string|null
     */
    public function getIssuanceReason(): ?string
    {
        return $this->IssuanceReason;
    }
    /**
     * Set IssuanceReason value
     * @param string $issuanceReason
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setIssuanceReason(?string $issuanceReason = null): self
    {
        $this->IssuanceReason = $issuanceReason;
        
        return $this;
    }
    /**
     * Get BaseSeatPrice value
     * @return string|null
     */
    public function getBaseSeatPrice(): ?string
    {
        return $this->BaseSeatPrice;
    }
    /**
     * Set BaseSeatPrice value
     * @param string $baseSeatPrice
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setBaseSeatPrice(?string $baseSeatPrice = null): self
    {
        $this->BaseSeatPrice = $baseSeatPrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setQuantity(?int $quantity = null): self
    {
        $this->Quantity = $quantity;
        
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber(): ?int
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setSequenceNumber(?int $sequenceNumber = null): self
    {
        $this->SequenceNumber = $sequenceNumber;
        
        return $this;
    }
    /**
     * Get InclusiveOfTax value
     * @return bool|null
     */
    public function getInclusiveOfTax(): ?bool
    {
        return $this->InclusiveOfTax;
    }
    /**
     * Set InclusiveOfTax value
     * @param bool $inclusiveOfTax
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setInclusiveOfTax(?bool $inclusiveOfTax = null): self
    {
        $this->InclusiveOfTax = $inclusiveOfTax;
        
        return $this;
    }
    /**
     * Get InterlineSettlementAllowed value
     * @return bool|null
     */
    public function getInterlineSettlementAllowed(): ?bool
    {
        return $this->InterlineSettlementAllowed;
    }
    /**
     * Set InterlineSettlementAllowed value
     * @param bool $interlineSettlementAllowed
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setInterlineSettlementAllowed(?bool $interlineSettlementAllowed = null): self
    {
        $this->InterlineSettlementAllowed = $interlineSettlementAllowed;
        
        return $this;
    }
    /**
     * Get GeographySpecification value
     * @return string|null
     */
    public function getGeographySpecification(): ?string
    {
        return $this->GeographySpecification;
    }
    /**
     * Set GeographySpecification value
     * @param string $geographySpecification
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setGeographySpecification(?string $geographySpecification = null): self
    {
        $this->GeographySpecification = $geographySpecification;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setSource(?string $source = null): self
    {
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get OptionalServiceRef value
     * @return string|null
     */
    public function getOptionalServiceRef(): ?string
    {
        return $this->OptionalServiceRef;
    }
    /**
     * Set OptionalServiceRef value
     * @param string $optionalServiceRef
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setOptionalServiceRef(?string $optionalServiceRef = null): self
    {
        $this->OptionalServiceRef = $optionalServiceRef;
        
        return $this;
    }
    /**
     * Get SeatInformationRef value
     * @return string|null
     */
    public function getSeatInformationRef(): ?string
    {
        return $this->SeatInformationRef;
    }
    /**
     * Set SeatInformationRef value
     * @param string $seatInformationRef
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setSeatInformationRef(?string $seatInformationRef = null): self
    {
        $this->SeatInformationRef = $seatInformationRef;
        
        return $this;
    }
}
