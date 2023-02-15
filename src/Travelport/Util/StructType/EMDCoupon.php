<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDCoupon StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Key related supporting attributes | The coupon information for the EMD issued. Supported providers are 1G/1V/1P/1J
 * @subpackage Structs
 */
class EMDCoupon extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Number of the EMD coupon
     * - use: required
     * @var int
     */
    protected int $Number;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the coupon. Possible values Open, Void, Refunded, Exchanged, Irregular Operations,Airport Control, Checked In, Flown/Used, Boarded/Lifted, Suspended, Unknown
     * - use: required
     * @var string
     */
    protected string $Status;
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: required
     * @var string
     */
    protected string $RFIC;
    /**
     * The SvcDescription
     * Meta information extracted from the WSDL
     * - documentation: Description of the service related to the EMD Coupon
     * - use: optional
     * @var string|null
     */
    protected ?string $SvcDescription = null;
    /**
     * The ConsumedAtIssuanceInd
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the EMD coupon has been considered used as soon as issued.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ConsumedAtIssuanceInd = null;
    /**
     * The RFISC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $RFISC = null;
    /**
     * The RFIDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 86
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $RFIDescription = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Departure Airport Code for the flight with which the Coupon is associated | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Origin = null;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Destination Airport Code for the flight with which the Coupon is associated | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Flight Number of the flight with which the coupon is associated. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $FlightNumber = null;
    /**
     * The PresentTo
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 71
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $PresentTo = null;
    /**
     * The PresentAt
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 71
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $PresentAt = null;
    /**
     * The NonRefundableInd
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the coupon is non-refundable
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NonRefundableInd = null;
    /**
     * The MarketingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Marketing carrier associated with the coupon | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $MarketingCarrier = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated Key | Reference type
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
     * Constructor method for EMDCoupon
     * @uses EMDCoupon::setNumber()
     * @uses EMDCoupon::setStatus()
     * @uses EMDCoupon::setRFIC()
     * @uses EMDCoupon::setSvcDescription()
     * @uses EMDCoupon::setConsumedAtIssuanceInd()
     * @uses EMDCoupon::setRFISC()
     * @uses EMDCoupon::setRFIDescription()
     * @uses EMDCoupon::setOrigin()
     * @uses EMDCoupon::setDestination()
     * @uses EMDCoupon::setFlightNumber()
     * @uses EMDCoupon::setPresentTo()
     * @uses EMDCoupon::setPresentAt()
     * @uses EMDCoupon::setNonRefundableInd()
     * @uses EMDCoupon::setMarketingCarrier()
     * @uses EMDCoupon::setKey()
     * @uses EMDCoupon::setElStat()
     * @uses EMDCoupon::setKeyOverride()
     * @param int $number
     * @param string $status
     * @param string $rFIC
     * @param string $svcDescription
     * @param bool $consumedAtIssuanceInd
     * @param string $rFISC
     * @param string $rFIDescription
     * @param string $origin
     * @param string $destination
     * @param string $flightNumber
     * @param string $presentTo
     * @param string $presentAt
     * @param bool $nonRefundableInd
     * @param string $marketingCarrier
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(int $number, string $status, string $rFIC, ?string $svcDescription = null, ?bool $consumedAtIssuanceInd = null, ?string $rFISC = null, ?string $rFIDescription = null, ?string $origin = null, ?string $destination = null, ?string $flightNumber = null, ?string $presentTo = null, ?string $presentAt = null, ?bool $nonRefundableInd = null, ?string $marketingCarrier = null, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setNumber($number)
            ->setStatus($status)
            ->setRFIC($rFIC)
            ->setSvcDescription($svcDescription)
            ->setConsumedAtIssuanceInd($consumedAtIssuanceInd)
            ->setRFISC($rFISC)
            ->setRFIDescription($rFIDescription)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setFlightNumber($flightNumber)
            ->setPresentTo($presentTo)
            ->setPresentAt($presentAt)
            ->setNonRefundableInd($nonRefundableInd)
            ->setMarketingCarrier($marketingCarrier)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Number value
     * @return int
     */
    public function getNumber(): int
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setNumber(int $number): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get RFIC value
     * @return string
     */
    public function getRFIC(): string
    {
        return $this->RFIC;
    }
    /**
     * Set RFIC value
     * @param string $rFIC
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setRFIC(string $rFIC): self
    {
        // validation for constraint: string
        if (!is_null($rFIC) && !is_string($rFIC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFIC, true), gettype($rFIC)), __LINE__);
        }
        // validation for constraint: length(1)
        if (!is_null($rFIC) && mb_strlen((string) $rFIC) !== 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 1', mb_strlen((string) $rFIC)), __LINE__);
        }
        $this->RFIC = $rFIC;
        
        return $this;
    }
    /**
     * Get SvcDescription value
     * @return string|null
     */
    public function getSvcDescription(): ?string
    {
        return $this->SvcDescription;
    }
    /**
     * Set SvcDescription value
     * @param string $svcDescription
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setSvcDescription(?string $svcDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($svcDescription) && !is_string($svcDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($svcDescription, true), gettype($svcDescription)), __LINE__);
        }
        $this->SvcDescription = $svcDescription;
        
        return $this;
    }
    /**
     * Get ConsumedAtIssuanceInd value
     * @return bool|null
     */
    public function getConsumedAtIssuanceInd(): ?bool
    {
        return $this->ConsumedAtIssuanceInd;
    }
    /**
     * Set ConsumedAtIssuanceInd value
     * @param bool $consumedAtIssuanceInd
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setConsumedAtIssuanceInd(?bool $consumedAtIssuanceInd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($consumedAtIssuanceInd) && !is_bool($consumedAtIssuanceInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($consumedAtIssuanceInd, true), gettype($consumedAtIssuanceInd)), __LINE__);
        }
        $this->ConsumedAtIssuanceInd = $consumedAtIssuanceInd;
        
        return $this;
    }
    /**
     * Get RFISC value
     * @return string|null
     */
    public function getRFISC(): ?string
    {
        return $this->RFISC;
    }
    /**
     * Set RFISC value
     * @param string $rFISC
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setRFISC(?string $rFISC = null): self
    {
        // validation for constraint: string
        if (!is_null($rFISC) && !is_string($rFISC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFISC, true), gettype($rFISC)), __LINE__);
        }
        $this->RFISC = $rFISC;
        
        return $this;
    }
    /**
     * Get RFIDescription value
     * @return string|null
     */
    public function getRFIDescription(): ?string
    {
        return $this->RFIDescription;
    }
    /**
     * Set RFIDescription value
     * @param string $rFIDescription
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setRFIDescription(?string $rFIDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($rFIDescription) && !is_string($rFIDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rFIDescription, true), gettype($rFIDescription)), __LINE__);
        }
        // validation for constraint: maxLength(86)
        if (!is_null($rFIDescription) && mb_strlen((string) $rFIDescription) > 86) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 86', mb_strlen((string) $rFIDescription)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($rFIDescription) && mb_strlen((string) $rFIDescription) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $rFIDescription)), __LINE__);
        }
        $this->RFIDescription = $rFIDescription;
        
        return $this;
    }
    /**
     * Get Origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($origin) && mb_strlen((string) $origin) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $origin)), __LINE__);
        }
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($destination) && mb_strlen((string) $destination) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $destination)), __LINE__);
        }
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNumber, true), gettype($flightNumber)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($flightNumber) && mb_strlen((string) $flightNumber) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        
        return $this;
    }
    /**
     * Get PresentTo value
     * @return string|null
     */
    public function getPresentTo(): ?string
    {
        return $this->PresentTo;
    }
    /**
     * Set PresentTo value
     * @param string $presentTo
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setPresentTo(?string $presentTo = null): self
    {
        // validation for constraint: string
        if (!is_null($presentTo) && !is_string($presentTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($presentTo, true), gettype($presentTo)), __LINE__);
        }
        // validation for constraint: maxLength(71)
        if (!is_null($presentTo) && mb_strlen((string) $presentTo) > 71) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 71', mb_strlen((string) $presentTo)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($presentTo) && mb_strlen((string) $presentTo) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $presentTo)), __LINE__);
        }
        $this->PresentTo = $presentTo;
        
        return $this;
    }
    /**
     * Get PresentAt value
     * @return string|null
     */
    public function getPresentAt(): ?string
    {
        return $this->PresentAt;
    }
    /**
     * Set PresentAt value
     * @param string $presentAt
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setPresentAt(?string $presentAt = null): self
    {
        // validation for constraint: string
        if (!is_null($presentAt) && !is_string($presentAt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($presentAt, true), gettype($presentAt)), __LINE__);
        }
        // validation for constraint: maxLength(71)
        if (!is_null($presentAt) && mb_strlen((string) $presentAt) > 71) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 71', mb_strlen((string) $presentAt)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($presentAt) && mb_strlen((string) $presentAt) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $presentAt)), __LINE__);
        }
        $this->PresentAt = $presentAt;
        
        return $this;
    }
    /**
     * Get NonRefundableInd value
     * @return bool|null
     */
    public function getNonRefundableInd(): ?bool
    {
        return $this->NonRefundableInd;
    }
    /**
     * Set NonRefundableInd value
     * @param bool $nonRefundableInd
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setNonRefundableInd(?bool $nonRefundableInd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nonRefundableInd) && !is_bool($nonRefundableInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nonRefundableInd, true), gettype($nonRefundableInd)), __LINE__);
        }
        $this->NonRefundableInd = $nonRefundableInd;
        
        return $this;
    }
    /**
     * Get MarketingCarrier value
     * @return string|null
     */
    public function getMarketingCarrier(): ?string
    {
        return $this->MarketingCarrier;
    }
    /**
     * Set MarketingCarrier value
     * @param string $marketingCarrier
     * @return \Travelport\Util\StructType\EMDCoupon
     */
    public function setMarketingCarrier(?string $marketingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($marketingCarrier) && !is_string($marketingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marketingCarrier, true), gettype($marketingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($marketingCarrier) && mb_strlen((string) $marketingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $marketingCarrier)), __LINE__);
        }
        $this->MarketingCarrier = $marketingCarrier;
        
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
     * @return \Travelport\Util\StructType\EMDCoupon
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
     * @return \Travelport\Util\StructType\EMDCoupon
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
     * @return \Travelport\Util\StructType\EMDCoupon
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
