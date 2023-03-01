<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMDCoupon StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Key related supporting attributes | The coupon information for the EMD issued. Supported providers are 1G/1V/1P
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
    public int $Number;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the coupon. Possible values Open, Void, Refunded, Exchanged, Irregular Operations,Airport Control, Checked In, Flown/Used, Boarded/Lifted, Suspended, Unknown
     * - use: required
     * @var string
     */
    public string $Status;
    /**
     * The RFIC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 1
     * - use: required
     * @var string
     */
    public string $RFIC;
    /**
     * The SvcDescription
     * Meta information extracted from the WSDL
     * - documentation: Description of the service related to the EMD Coupon
     * - use: optional
     * @var string|null
     */
    public ?string $SvcDescription = null;
    /**
     * The ConsumedAtIssuanceInd
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the EMD coupon has been considered used as soon as issued.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ConsumedAtIssuanceInd = null;
    /**
     * The RFISC
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $RFISC = null;
    /**
     * The RFIDescription
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 86
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $RFIDescription = null;
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
    public ?string $Origin = null;
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
    public ?string $Destination = null;
    /**
     * The FlightNumber
     * Meta information extracted from the WSDL
     * - documentation: Flight Number of the flight with which the coupon is associated. | flight number type.
     * - base: xs:string
     * - maxLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $FlightNumber = null;
    /**
     * The PresentTo
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 71
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PresentTo = null;
    /**
     * The PresentAt
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 71
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $PresentAt = null;
    /**
     * The NonRefundableInd
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the coupon is non-refundable
     * - use: optional
     * @var bool|null
     */
    public ?bool $NonRefundableInd = null;
    /**
     * The MarketingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Marketing carrier associated with the coupon | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    public ?string $MarketingCarrier = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setNumber(int $number): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setStatus(string $status): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setRFIC(string $rFIC): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setSvcDescription(?string $svcDescription = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setConsumedAtIssuanceInd(?bool $consumedAtIssuanceInd = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setRFISC(?string $rFISC = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setRFIDescription(?string $rFIDescription = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setOrigin(?string $origin = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setDestination(?string $destination = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setFlightNumber(?string $flightNumber = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setPresentTo(?string $presentTo = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setPresentAt(?string $presentAt = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setNonRefundableInd(?bool $nonRefundableInd = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setMarketingCarrier(?string $marketingCarrier = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setKey(?string $key = null): self
    {
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
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\EMDCoupon
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
