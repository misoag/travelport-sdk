<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PenaltyInformation StructType
 * @subpackage Structs
 */
class PenaltyInformation extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Fare-owning carrier | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $Carrier = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier that provides the association to the fare amount and fare rules.
     * - use: optional
     * @var string|null
     */
    public ?string $FareBasis = null;
    /**
     * The FareComponent
     * Meta information extracted from the WSDL
     * - documentation: A portion of a journey or itinerary between two consecutive fare break points.
     * - use: optional
     * @var int|null
     */
    public ?int $FareComponent = null;
    /**
     * The PriceableUnit
     * Meta information extracted from the WSDL
     * - documentation: Identifies FareComponents that are priced together
     * - use: optional
     * @var int|null
     */
    public ?int $PriceableUnit = null;
    /**
     * The BoardPoint
     * Meta information extracted from the WSDL
     * - documentation: Origin for the FareComponent | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $BoardPoint = null;
    /**
     * The OffPoint
     * Meta information extracted from the WSDL
     * - documentation: Destination for the FareComponent | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    public ?string $OffPoint = null;
    /**
     * The MinimumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Estimated minimum change fee associated with the fare component. Can be overridden by ChangeFeeApplicationCodes for other fare components. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MinimumChangeFee = null;
    /**
     * The MaximumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Estimated maximum change fee associated with the fare component. Can be overridden by ChangeFeeApplicationCodes for other fare components. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $MaximumChangeFee = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency of the filed change fee | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    public ?string $FiledCurrency = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: Conversion rate from filed change fee currency to reissue location currency
     * - use: optional
     * @var float|null
     */
    public ?float $ConversionRate = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Answers whether the FareComponent is refundable
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refundable = null;
    /**
     * The ChangeFeeApplicationCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ChangeFeeApplicationCode = null;
    /**
     * Constructor method for PenaltyInformation
     * @uses PenaltyInformation::set_()
     * @uses PenaltyInformation::setCarrier()
     * @uses PenaltyInformation::setFareBasis()
     * @uses PenaltyInformation::setFareComponent()
     * @uses PenaltyInformation::setPriceableUnit()
     * @uses PenaltyInformation::setBoardPoint()
     * @uses PenaltyInformation::setOffPoint()
     * @uses PenaltyInformation::setMinimumChangeFee()
     * @uses PenaltyInformation::setMaximumChangeFee()
     * @uses PenaltyInformation::setFiledCurrency()
     * @uses PenaltyInformation::setConversionRate()
     * @uses PenaltyInformation::setRefundable()
     * @uses PenaltyInformation::setChangeFeeApplicationCode()
     * @param string $_
     * @param string $carrier
     * @param string $fareBasis
     * @param int $fareComponent
     * @param int $priceableUnit
     * @param string $boardPoint
     * @param string $offPoint
     * @param string $minimumChangeFee
     * @param string $maximumChangeFee
     * @param string $filedCurrency
     * @param float $conversionRate
     * @param bool $refundable
     * @param string $changeFeeApplicationCode
     */
    public function __construct(?string $_ = null, ?string $carrier = null, ?string $fareBasis = null, ?int $fareComponent = null, ?int $priceableUnit = null, ?string $boardPoint = null, ?string $offPoint = null, ?string $minimumChangeFee = null, ?string $maximumChangeFee = null, ?string $filedCurrency = null, ?float $conversionRate = null, ?bool $refundable = null, ?string $changeFeeApplicationCode = null)
    {
        $this
            ->set_($_)
            ->setCarrier($carrier)
            ->setFareBasis($fareBasis)
            ->setFareComponent($fareComponent)
            ->setPriceableUnit($priceableUnit)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setMinimumChangeFee($minimumChangeFee)
            ->setMaximumChangeFee($maximumChangeFee)
            ->setFiledCurrency($filedCurrency)
            ->setConversionRate($conversionRate)
            ->setRefundable($refundable)
            ->setChangeFeeApplicationCode($changeFeeApplicationCode);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setCarrier(?string $carrier = null): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get FareComponent value
     * @return int|null
     */
    public function getFareComponent(): ?int
    {
        return $this->FareComponent;
    }
    /**
     * Set FareComponent value
     * @param int $fareComponent
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setFareComponent(?int $fareComponent = null): self
    {
        $this->FareComponent = $fareComponent;
        
        return $this;
    }
    /**
     * Get PriceableUnit value
     * @return int|null
     */
    public function getPriceableUnit(): ?int
    {
        return $this->PriceableUnit;
    }
    /**
     * Set PriceableUnit value
     * @param int $priceableUnit
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setPriceableUnit(?int $priceableUnit = null): self
    {
        $this->PriceableUnit = $priceableUnit;
        
        return $this;
    }
    /**
     * Get BoardPoint value
     * @return string|null
     */
    public function getBoardPoint(): ?string
    {
        return $this->BoardPoint;
    }
    /**
     * Set BoardPoint value
     * @param string $boardPoint
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setBoardPoint(?string $boardPoint = null): self
    {
        $this->BoardPoint = $boardPoint;
        
        return $this;
    }
    /**
     * Get OffPoint value
     * @return string|null
     */
    public function getOffPoint(): ?string
    {
        return $this->OffPoint;
    }
    /**
     * Set OffPoint value
     * @param string $offPoint
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setOffPoint(?string $offPoint = null): self
    {
        $this->OffPoint = $offPoint;
        
        return $this;
    }
    /**
     * Get MinimumChangeFee value
     * @return string|null
     */
    public function getMinimumChangeFee(): ?string
    {
        return $this->MinimumChangeFee;
    }
    /**
     * Set MinimumChangeFee value
     * @param string $minimumChangeFee
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setMinimumChangeFee(?string $minimumChangeFee = null): self
    {
        $this->MinimumChangeFee = $minimumChangeFee;
        
        return $this;
    }
    /**
     * Get MaximumChangeFee value
     * @return string|null
     */
    public function getMaximumChangeFee(): ?string
    {
        return $this->MaximumChangeFee;
    }
    /**
     * Set MaximumChangeFee value
     * @param string $maximumChangeFee
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setMaximumChangeFee(?string $maximumChangeFee = null): self
    {
        $this->MaximumChangeFee = $maximumChangeFee;
        
        return $this;
    }
    /**
     * Get FiledCurrency value
     * @return string|null
     */
    public function getFiledCurrency(): ?string
    {
        return $this->FiledCurrency;
    }
    /**
     * Set FiledCurrency value
     * @param string $filedCurrency
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        $this->FiledCurrency = $filedCurrency;
        
        return $this;
    }
    /**
     * Get ConversionRate value
     * @return float|null
     */
    public function getConversionRate(): ?float
    {
        return $this->ConversionRate;
    }
    /**
     * Set ConversionRate value
     * @param float $conversionRate
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        $this->ConversionRate = $conversionRate;
        
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool|null
     */
    public function getRefundable(): ?bool
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setRefundable(?bool $refundable = null): self
    {
        $this->Refundable = $refundable;
        
        return $this;
    }
    /**
     * Get ChangeFeeApplicationCode value
     * @return string|null
     */
    public function getChangeFeeApplicationCode(): ?string
    {
        return $this->ChangeFeeApplicationCode;
    }
    /**
     * Set ChangeFeeApplicationCode value
     * @param string $changeFeeApplicationCode
     * @return \Travelport\UniversalRecord\StructType\PenaltyInformation
     */
    public function setChangeFeeApplicationCode(?string $changeFeeApplicationCode = null): self
    {
        $this->ChangeFeeApplicationCode = $changeFeeApplicationCode;
        
        return $this;
    }
}
