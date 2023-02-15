<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\UniversalRecord\StructType\Characteristic[]
     */
    protected ?array $Characteristic = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\UniversalRecord\StructType\Remark[]
     */
    protected ?array $Remark = null;
    /**
     * The PassengerSeatPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PassengerSeatPrice
     * @var \Travelport\UniversalRecord\StructType\PassengerSeatPrice[]
     */
    protected ?array $PassengerSeatPrice = null;
    /**
     * The TaxInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TaxInfo
     * @var \Travelport\UniversalRecord\StructType\TypeTaxInfo[]
     */
    protected ?array $TaxInfo = null;
    /**
     * The EMD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: EMD
     * @var \Travelport\UniversalRecord\StructType\EMD|null
     */
    protected ?\Travelport\UniversalRecord\StructType\EMD $EMD = null;
    /**
     * The ServiceData
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:ServiceData
     * @var \Travelport\UniversalRecord\StructType\ServiceData[]
     */
    protected ?array $ServiceData = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\UniversalRecord\StructType\TourCode|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TourCode $TourCode = null;
    /**
     * The SeatCode
     * Meta information extracted from the WSDL
     * - documentation: If a seat type, the seat identifier
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatCode = null;
    /**
     * The Availability
     * Meta information extracted from the WSDL
     * - documentation: If a seat type, the availability of the seat
     * - use: optional
     * @var string|null
     */
    protected ?string $Availability = null;
    /**
     * The SeatPrice
     * Meta information extracted from the WSDL
     * - documentation: The price of the seat, if applicable. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $SeatPrice = null;
    /**
     * The Paid
     * Meta information extracted from the WSDL
     * - documentation: Set to True if either SeatPrice or GroupSeatPrice are returned.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Paid = null;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $ServiceSubCode = null;
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
    protected ?string $SSRCode = null;
    /**
     * The IssuanceReason
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 1
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $IssuanceReason = null;
    /**
     * The BaseSeatPrice
     * Meta information extracted from the WSDL
     * - documentation: Price of the seats excluding Taxes. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $BaseSeatPrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: Tax amount for the seat price. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: The number of units availed for each optional service (e.g. 2 baggage availed will be specified as 2 in quantity for optional service BAGGAGE)
     * - use: optional
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * The SequenceNumber
     * Meta information extracted from the WSDL
     * - documentation: The sequence number associated with the OptionalService
     * - use: optional
     * @var int|null
     */
    protected ?int $SequenceNumber = null;
    /**
     * The InclusiveOfTax
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the service was filed with a fee that is inclusive of tax.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InclusiveOfTax = null;
    /**
     * The InterlineSettlementAllowed
     * Meta information extracted from the WSDL
     * - documentation: Identifies if the interline settlement is allowed in service .
     * - use: optional
     * @var bool|null
     */
    protected ?bool $InterlineSettlementAllowed = null;
    /**
     * The GeographySpecification
     * Meta information extracted from the WSDL
     * - documentation: Sector, Portion, Journey.
     * - use: optional
     * @var string|null
     */
    protected ?string $GeographySpecification = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: The Source of the optional service. The source can be ACH, MCE, or MCH.
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The OptionalServiceRef
     * Meta information extracted from the WSDL
     * - documentation: References the OptionalService for the Row/Facility. Providers: ACH, 1G, 1V, 1P | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $OptionalServiceRef = null;
    /**
     * The SeatInformationRef
     * Meta information extracted from the WSDL
     * - documentation: Specifies the seat information for the seat. Providers: ACH, 1G, 1V, 1P | Reference type
     * - base: xs:string
     * @var string|null
     */
    protected ?string $SeatInformationRef = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeFacility::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeFacility::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeFacility::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeFacility', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeFacility::getValidValues())), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setCharacteristic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharacteristic method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharacteristicForArrayConstraintsFromSetCharacteristic(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facilityCharacteristicItem) {
            // validation for constraint: itemType
            if (!$facilityCharacteristicItem instanceof \Travelport\UniversalRecord\StructType\Characteristic) {
                $invalidValues[] = is_object($facilityCharacteristicItem) ? get_class($facilityCharacteristicItem) : sprintf('%s(%s)', gettype($facilityCharacteristicItem), var_export($facilityCharacteristicItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Characteristic property can only contain items of type \Travelport\UniversalRecord\StructType\Characteristic, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Characteristic value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Characteristic[] $characteristic
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setCharacteristic(?array $characteristic = null): self
    {
        // validation for constraint: array
        if ('' !== ($characteristicArrayErrorMessage = self::validateCharacteristicForArrayConstraintsFromSetCharacteristic($characteristic))) {
            throw new InvalidArgumentException($characteristicArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($characteristic) && count($characteristic) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($characteristic)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Characteristic) {
            throw new InvalidArgumentException(sprintf('The Characteristic property can only contain items of type \Travelport\UniversalRecord\StructType\Characteristic, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Characteristic) && count($this->Characteristic) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Characteristic)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarkForArrayConstraintsFromSetRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facilityRemarkItem) {
            // validation for constraint: itemType
            if (!$facilityRemarkItem instanceof \Travelport\UniversalRecord\StructType\Remark) {
                $invalidValues[] = is_object($facilityRemarkItem) ? get_class($facilityRemarkItem) : sprintf('%s(%s)', gettype($facilityRemarkItem), var_export($facilityRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Remark property can only contain items of type \Travelport\UniversalRecord\StructType\Remark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setRemark(?array $remark = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarkArrayErrorMessage = self::validateRemarkForArrayConstraintsFromSetRemark($remark))) {
            throw new InvalidArgumentException($remarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($remark) && count($remark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($remark)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\Remark) {
            throw new InvalidArgumentException(sprintf('The Remark property can only contain items of type \Travelport\UniversalRecord\StructType\Remark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Remark) && count($this->Remark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Remark)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setPassengerSeatPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPassengerSeatPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePassengerSeatPriceForArrayConstraintsFromSetPassengerSeatPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facilityPassengerSeatPriceItem) {
            // validation for constraint: itemType
            if (!$facilityPassengerSeatPriceItem instanceof \Travelport\UniversalRecord\StructType\PassengerSeatPrice) {
                $invalidValues[] = is_object($facilityPassengerSeatPriceItem) ? get_class($facilityPassengerSeatPriceItem) : sprintf('%s(%s)', gettype($facilityPassengerSeatPriceItem), var_export($facilityPassengerSeatPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PassengerSeatPrice property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerSeatPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PassengerSeatPrice value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PassengerSeatPrice[] $passengerSeatPrice
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setPassengerSeatPrice(?array $passengerSeatPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($passengerSeatPriceArrayErrorMessage = self::validatePassengerSeatPriceForArrayConstraintsFromSetPassengerSeatPrice($passengerSeatPrice))) {
            throw new InvalidArgumentException($passengerSeatPriceArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($passengerSeatPrice) && count($passengerSeatPrice) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($passengerSeatPrice)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PassengerSeatPrice) {
            throw new InvalidArgumentException(sprintf('The PassengerSeatPrice property can only contain items of type \Travelport\UniversalRecord\StructType\PassengerSeatPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PassengerSeatPrice) && count($this->PassengerSeatPrice) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PassengerSeatPrice)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setTaxInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxInfoForArrayConstraintsFromSetTaxInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facilityTaxInfoItem) {
            // validation for constraint: itemType
            if (!$facilityTaxInfoItem instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
                $invalidValues[] = is_object($facilityTaxInfoItem) ? get_class($facilityTaxInfoItem) : sprintf('%s(%s)', gettype($facilityTaxInfoItem), var_export($facilityTaxInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TaxInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeTaxInfo[] $taxInfo
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setTaxInfo(?array $taxInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($taxInfoArrayErrorMessage = self::validateTaxInfoForArrayConstraintsFromSetTaxInfo($taxInfo))) {
            throw new InvalidArgumentException($taxInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($taxInfo) && count($taxInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($taxInfo)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\TypeTaxInfo) {
            throw new InvalidArgumentException(sprintf('The TaxInfo property can only contain items of type \Travelport\UniversalRecord\StructType\TypeTaxInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TaxInfo) && count($this->TaxInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TaxInfo)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setServiceData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceDataForArrayConstraintsFromSetServiceData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $facilityServiceDataItem) {
            // validation for constraint: itemType
            if (!$facilityServiceDataItem instanceof \Travelport\UniversalRecord\StructType\ServiceData) {
                $invalidValues[] = is_object($facilityServiceDataItem) ? get_class($facilityServiceDataItem) : sprintf('%s(%s)', gettype($facilityServiceDataItem), var_export($facilityServiceDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceData property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceData value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ServiceData[] $serviceData
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setServiceData(?array $serviceData = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceDataArrayErrorMessage = self::validateServiceDataForArrayConstraintsFromSetServiceData($serviceData))) {
            throw new InvalidArgumentException($serviceDataArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceData) && count($serviceData) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceData)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ServiceData) {
            throw new InvalidArgumentException(sprintf('The ServiceData property can only contain items of type \Travelport\UniversalRecord\StructType\ServiceData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceData) && count($this->ServiceData) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceData)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($seatCode) && !is_string($seatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatCode, true), gettype($seatCode)), __LINE__);
        }
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeSeatAvailability::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeSeatAvailability::getValidValues()
     * @throws InvalidArgumentException
     * @param string $availability
     * @return \Travelport\UniversalRecord\StructType\Facility
     */
    public function setAvailability(?string $availability = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeSeatAvailability::valueIsValid($availability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeSeatAvailability', is_array($availability) ? implode(', ', $availability) : var_export($availability, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeSeatAvailability::getValidValues())), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($seatPrice) && !is_string($seatPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatPrice, true), gettype($seatPrice)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($paid) && !is_bool($paid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paid, true), gettype($paid)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($serviceSubCode) && !is_string($serviceSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceSubCode, true), gettype($serviceSubCode)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($serviceSubCode) && mb_strlen((string) $serviceSubCode) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $serviceSubCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($sSRCode) && !is_string($sSRCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSRCode, true), gettype($sSRCode)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($sSRCode) && mb_strlen((string) $sSRCode) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $sSRCode)), __LINE__);
        }
        // validation for constraint: minLength(4)
        if (!is_null($sSRCode) && mb_strlen((string) $sSRCode) < 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 4', mb_strlen((string) $sSRCode)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($issuanceReason) && !is_string($issuanceReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuanceReason, true), gettype($issuanceReason)), __LINE__);
        }
        // validation for constraint: maxLength(1)
        if (!is_null($issuanceReason) && mb_strlen((string) $issuanceReason) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1', mb_strlen((string) $issuanceReason)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($issuanceReason) && mb_strlen((string) $issuanceReason) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $issuanceReason)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($baseSeatPrice) && !is_string($baseSeatPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseSeatPrice, true), gettype($baseSeatPrice)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !(is_int($sequenceNumber) || ctype_digit($sequenceNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($inclusiveOfTax) && !is_bool($inclusiveOfTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inclusiveOfTax, true), gettype($inclusiveOfTax)), __LINE__);
        }
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
        // validation for constraint: boolean
        if (!is_null($interlineSettlementAllowed) && !is_bool($interlineSettlementAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($interlineSettlementAllowed, true), gettype($interlineSettlementAllowed)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($geographySpecification) && !is_string($geographySpecification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geographySpecification, true), gettype($geographySpecification)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($optionalServiceRef) && !is_string($optionalServiceRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($optionalServiceRef, true), gettype($optionalServiceRef)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($seatInformationRef) && !is_string($seatInformationRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seatInformationRef, true), gettype($seatInformationRef)), __LINE__);
        }
        $this->SeatInformationRef = $seatInformationRef;
        
        return $this;
    }
}
