<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $_ = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: Fare-owning carrier | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Carrier = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier that provides the association to the fare amount and fare rules.
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBasis = null;
    /**
     * The FareComponent
     * Meta information extracted from the WSDL
     * - documentation: A portion of a journey or itinerary between two consecutive fare break points.
     * - use: optional
     * @var int|null
     */
    protected ?int $FareComponent = null;
    /**
     * The PriceableUnit
     * Meta information extracted from the WSDL
     * - documentation: Identifies FareComponents that are priced together
     * - use: optional
     * @var int|null
     */
    protected ?int $PriceableUnit = null;
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
    protected ?string $BoardPoint = null;
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
    protected ?string $OffPoint = null;
    /**
     * The MinimumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Estimated minimum change fee associated with the fare component. Can be overridden by ChangeFeeApplicationCodes for other fare components. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $MinimumChangeFee = null;
    /**
     * The MaximumChangeFee
     * Meta information extracted from the WSDL
     * - documentation: Estimated maximum change fee associated with the fare component. Can be overridden by ChangeFeeApplicationCodes for other fare components. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $MaximumChangeFee = null;
    /**
     * The FiledCurrency
     * Meta information extracted from the WSDL
     * - documentation: Currency of the filed change fee | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $FiledCurrency = null;
    /**
     * The ConversionRate
     * Meta information extracted from the WSDL
     * - documentation: Conversion rate from filed change fee currency to reissue location currency
     * - use: optional
     * @var float|null
     */
    protected ?float $ConversionRate = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Answers whether the FareComponent is refundable
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refundable = null;
    /**
     * The ChangeFeeApplicationCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ChangeFeeApplicationCode = null;
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setFareComponent(?int $fareComponent = null): self
    {
        // validation for constraint: int
        if (!is_null($fareComponent) && !(is_int($fareComponent) || ctype_digit($fareComponent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fareComponent, true), gettype($fareComponent)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setPriceableUnit(?int $priceableUnit = null): self
    {
        // validation for constraint: int
        if (!is_null($priceableUnit) && !(is_int($priceableUnit) || ctype_digit($priceableUnit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceableUnit, true), gettype($priceableUnit)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setBoardPoint(?string $boardPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($boardPoint) && !is_string($boardPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boardPoint, true), gettype($boardPoint)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($boardPoint) && mb_strlen((string) $boardPoint) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $boardPoint)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setOffPoint(?string $offPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($offPoint) && !is_string($offPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offPoint, true), gettype($offPoint)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($offPoint) && mb_strlen((string) $offPoint) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $offPoint)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setMinimumChangeFee(?string $minimumChangeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($minimumChangeFee) && !is_string($minimumChangeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minimumChangeFee, true), gettype($minimumChangeFee)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setMaximumChangeFee(?string $maximumChangeFee = null): self
    {
        // validation for constraint: string
        if (!is_null($maximumChangeFee) && !is_string($maximumChangeFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maximumChangeFee, true), gettype($maximumChangeFee)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setFiledCurrency(?string $filedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($filedCurrency) && !is_string($filedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filedCurrency, true), gettype($filedCurrency)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($filedCurrency) && mb_strlen((string) $filedCurrency) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $filedCurrency)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        // validation for constraint: float
        if (!is_null($conversionRate) && !(is_float($conversionRate) || is_numeric($conversionRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($conversionRate, true), gettype($conversionRate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setRefundable(?bool $refundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundable, true), gettype($refundable)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PenaltyInformation
     */
    public function setChangeFeeApplicationCode(?string $changeFeeApplicationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($changeFeeApplicationCode) && !is_string($changeFeeApplicationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeFeeApplicationCode, true), gettype($changeFeeApplicationCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($changeFeeApplicationCode) && mb_strlen((string) $changeFeeApplicationCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $changeFeeApplicationCode)), __LINE__);
        }
        $this->ChangeFeeApplicationCode = $changeFeeApplicationCode;
        
        return $this;
    }
}
