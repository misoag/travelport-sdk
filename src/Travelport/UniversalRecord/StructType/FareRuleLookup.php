<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleLookup StructType
 * Meta information extracted from the WSDL
 * - documentation: Parameters to use for a fare rule lookup that is not associated with an Air Reservation Locator Code.
 * @subpackage Structs
 */
class FareRuleLookup extends AbstractStructBase
{
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Origin;
    /**
     * The Destination
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    public string $Destination;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $FareBasis;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\UniversalRecord\StructType\AccountCode|null
     */
    public ?\Travelport\UniversalRecord\StructType\AccountCode $AccountCode = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public ?\Travelport\UniversalRecord\StructType\PointOfSale $PointOfSale = null;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DepartureDate = null;
    /**
     * The TicketingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TicketingDate = null;
    /**
     * Constructor method for FareRuleLookup
     * @uses FareRuleLookup::setOrigin()
     * @uses FareRuleLookup::setDestination()
     * @uses FareRuleLookup::setCarrier()
     * @uses FareRuleLookup::setFareBasis()
     * @uses FareRuleLookup::setProviderCode()
     * @uses FareRuleLookup::setAccountCode()
     * @uses FareRuleLookup::setPointOfSale()
     * @uses FareRuleLookup::setDepartureDate()
     * @uses FareRuleLookup::setTicketingDate()
     * @param string $origin
     * @param string $destination
     * @param string $carrier
     * @param string $fareBasis
     * @param string $providerCode
     * @param \Travelport\UniversalRecord\StructType\AccountCode $accountCode
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @param string $departureDate
     * @param string $ticketingDate
     */
    public function __construct(string $origin, string $destination, string $carrier, string $fareBasis, string $providerCode, ?\Travelport\UniversalRecord\StructType\AccountCode $accountCode = null, ?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null, ?string $departureDate = null, ?string $ticketingDate = null)
    {
        $this
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setCarrier($carrier)
            ->setFareBasis($fareBasis)
            ->setProviderCode($providerCode)
            ->setAccountCode($accountCode)
            ->setPointOfSale($pointOfSale)
            ->setDepartureDate($departureDate)
            ->setTicketingDate($ticketingDate);
    }
    /**
     * Get Origin value
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->Origin;
    }
    /**
     * Set Origin value
     * @param string $origin
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setOrigin(string $origin): self
    {
        $this->Origin = $origin;
        
        return $this;
    }
    /**
     * Get Destination value
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setDestination(string $destination): self
    {
        $this->Destination = $destination;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string
     */
    public function getFareBasis(): string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setFareBasis(string $fareBasis): self
    {
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\UniversalRecord\StructType\AccountCode|null
     */
    public function getAccountCode(): ?\Travelport\UniversalRecord\StructType\AccountCode
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\UniversalRecord\StructType\AccountCode $accountCode
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setAccountCode(?\Travelport\UniversalRecord\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\UniversalRecord\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\UniversalRecord\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setPointOfSale(?\Travelport\UniversalRecord\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        $this->DepartureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get TicketingDate value
     * @return string|null
     */
    public function getTicketingDate(): ?string
    {
        return $this->TicketingDate;
    }
    /**
     * Set TicketingDate value
     * @param string $ticketingDate
     * @return \Travelport\UniversalRecord\StructType\FareRuleLookup
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        $this->TicketingDate = $ticketingDate;
        
        return $this;
    }
}
