<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailPricingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response, and the full fare on the reservation. | Per traveler type pricing breakdown.
 * @subpackage Structs
 */
class RailPricingInfo extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The RailFare
     * Meta information extracted from the WSDL
     * - choice: RailFare | RailFareRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFare
     * @var \Travelport\UniversalRecord\StructType\RailFare[]
     */
    public ?array $RailFare = null;
    /**
     * The RailFareRef
     * Meta information extracted from the WSDL
     * - choice: RailFare | RailFareRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailFareRef
     * @var \Travelport\UniversalRecord\StructType\RailFareRef[]
     */
    public ?array $RailFareRef = null;
    /**
     * The RailBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailBookingInfo
     * @var \Travelport\UniversalRecord\StructType\RailBookingInfo[]
     */
    public ?array $RailBookingInfo = null;
    /**
     * The PassengerType
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypePassengerType[]
     */
    public ?array $PassengerType = null;
    /**
     * The BookingTravelerRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:BookingTravelerRef
     * @var \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public ?array $BookingTravelerRef = null;
    /**
     * The ExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount to pay to cover the exchange of the fare (includes penalties). | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ExchangeAmount = null;
    /**
     * The ApproximateExchangeAmount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ApproximateExchangeAmount = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    public ?string $ApproximateFees = null;
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
     * Constructor method for RailPricingInfo
     * @uses RailPricingInfo::setKey()
     * @uses RailPricingInfo::setRailFare()
     * @uses RailPricingInfo::setRailFareRef()
     * @uses RailPricingInfo::setRailBookingInfo()
     * @uses RailPricingInfo::setPassengerType()
     * @uses RailPricingInfo::setBookingTravelerRef()
     * @uses RailPricingInfo::setExchangeAmount()
     * @uses RailPricingInfo::setApproximateExchangeAmount()
     * @uses RailPricingInfo::setTotalPrice()
     * @uses RailPricingInfo::setBasePrice()
     * @uses RailPricingInfo::setApproximateTotalPrice()
     * @uses RailPricingInfo::setApproximateBasePrice()
     * @uses RailPricingInfo::setEquivalentBasePrice()
     * @uses RailPricingInfo::setTaxes()
     * @uses RailPricingInfo::setFees()
     * @uses RailPricingInfo::setServices()
     * @uses RailPricingInfo::setApproximateTaxes()
     * @uses RailPricingInfo::setApproximateFees()
     * @uses RailPricingInfo::setElStat()
     * @uses RailPricingInfo::setKeyOverride()
     * @param string $key
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     * @param \Travelport\UniversalRecord\StructType\RailFareRef[] $railFareRef
     * @param \Travelport\UniversalRecord\StructType\RailBookingInfo[] $railBookingInfo
     * @param \Travelport\UniversalRecord\StructType\TypePassengerType[] $passengerType
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @param string $exchangeAmount
     * @param string $approximateExchangeAmount
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $key, ?array $railFare = null, ?array $railFareRef = null, ?array $railBookingInfo = null, ?array $passengerType = null, ?array $bookingTravelerRef = null, ?string $exchangeAmount = null, ?string $approximateExchangeAmount = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setKey($key)
            ->setRailFare($railFare)
            ->setRailFareRef($railFareRef)
            ->setRailBookingInfo($railBookingInfo)
            ->setPassengerType($passengerType)
            ->setBookingTravelerRef($bookingTravelerRef)
            ->setExchangeAmount($exchangeAmount)
            ->setApproximateExchangeAmount($approximateExchangeAmount)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get RailFare value
     * @return \Travelport\UniversalRecord\StructType\RailFare[]|null
     */
    public function getRailFare(): ?array
    {
        return $this->RailFare ?? null;
    }
    /**
     * Set RailFare value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\RailFare[] $railFare
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setRailFare(?array $railFare = null): self
    {
        if (is_null($railFare) || (is_array($railFare) && empty($railFare))) {
            unset($this->RailFare);
        } else {
            $this->RailFare = $railFare;
        }
        
        return $this;
    }
    /**
     * Add item to RailFare value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFare $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToRailFare(\Travelport\UniversalRecord\StructType\RailFare $item): self
    {
        $this->RailFare[] = $item;
        
        return $this;
    }
    /**
     * Get RailFareRef value
     * @return \Travelport\UniversalRecord\StructType\RailFareRef[]|null
     */
    public function getRailFareRef(): ?array
    {
        return $this->RailFareRef ?? null;
    }
    /**
     * Set RailFareRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\UniversalRecord\StructType\RailFareRef[] $railFareRef
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setRailFareRef(?array $railFareRef = null): self
    {
        if (is_null($railFareRef) || (is_array($railFareRef) && empty($railFareRef))) {
            unset($this->RailFareRef);
        } else {
            $this->RailFareRef = $railFareRef;
        }
        
        return $this;
    }
    /**
     * Add item to RailFareRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailFareRef $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToRailFareRef(\Travelport\UniversalRecord\StructType\RailFareRef $item): self
    {
        $this->RailFareRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailBookingInfo value
     * @return \Travelport\UniversalRecord\StructType\RailBookingInfo[]
     */
    public function getRailBookingInfo(): ?array
    {
        return $this->RailBookingInfo;
    }
    /**
     * Set RailBookingInfo value
     * @param \Travelport\UniversalRecord\StructType\RailBookingInfo[] $railBookingInfo
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setRailBookingInfo(?array $railBookingInfo = null): self
    {
        $this->RailBookingInfo = $railBookingInfo;
        
        return $this;
    }
    /**
     * Add item to RailBookingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailBookingInfo $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToRailBookingInfo(\Travelport\UniversalRecord\StructType\RailBookingInfo $item): self
    {
        $this->RailBookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get PassengerType value
     * @return \Travelport\UniversalRecord\StructType\TypePassengerType[]
     */
    public function getPassengerType(): ?array
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @param \Travelport\UniversalRecord\StructType\TypePassengerType[] $passengerType
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setPassengerType(?array $passengerType = null): self
    {
        $this->PassengerType = $passengerType;
        
        return $this;
    }
    /**
     * Add item to PassengerType value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypePassengerType $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToPassengerType(\Travelport\UniversalRecord\StructType\TypePassengerType $item): self
    {
        $this->PassengerType[] = $item;
        
        return $this;
    }
    /**
     * Get BookingTravelerRef value
     * @return \Travelport\UniversalRecord\StructType\BookingTravelerRef[]
     */
    public function getBookingTravelerRef(): ?array
    {
        return $this->BookingTravelerRef;
    }
    /**
     * Set BookingTravelerRef value
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef[] $bookingTravelerRef
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setBookingTravelerRef(?array $bookingTravelerRef = null): self
    {
        $this->BookingTravelerRef = $bookingTravelerRef;
        
        return $this;
    }
    /**
     * Add item to BookingTravelerRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BookingTravelerRef $item
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function addToBookingTravelerRef(\Travelport\UniversalRecord\StructType\BookingTravelerRef $item): self
    {
        $this->BookingTravelerRef[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangeAmount value
     * @return string|null
     */
    public function getExchangeAmount(): ?string
    {
        return $this->ExchangeAmount;
    }
    /**
     * Set ExchangeAmount value
     * @param string $exchangeAmount
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setExchangeAmount(?string $exchangeAmount = null): self
    {
        $this->ExchangeAmount = $exchangeAmount;
        
        return $this;
    }
    /**
     * Get ApproximateExchangeAmount value
     * @return string|null
     */
    public function getApproximateExchangeAmount(): ?string
    {
        return $this->ApproximateExchangeAmount;
    }
    /**
     * Set ApproximateExchangeAmount value
     * @param string $approximateExchangeAmount
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setApproximateExchangeAmount(?string $approximateExchangeAmount = null): self
    {
        $this->ApproximateExchangeAmount = $approximateExchangeAmount;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setTaxes(?string $taxes = null): self
    {
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setFees(?string $fees = null): self
    {
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setServices(?string $services = null): self
    {
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        $this->ApproximateFees = $approximateFees;
        
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
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
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
