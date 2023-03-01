<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HostReservation StructType
 * Meta information extracted from the WSDL
 * - documentation: Defines a reservation that already exists in the host system (e.g an agent using Galileo Desktop already booked a reservation on Midwest in Sabre host system).
 * @subpackage Structs
 */
class HostReservation extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier code (e.g. YX, UA, ...) that is providing the merchandising | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    public string $Carrier;
    /**
     * The CarrierLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: The locator code in the supplier system (also could be defined as locator in the carrier host system). | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    public string $CarrierLocatorCode;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the GDS or other provider code of the entity actually housing the reservation. This is optional when used on Merchandising Availability but required on MerchandisingFulfillment. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    public string $ProviderCode;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Contains the locator of the reservation actually housed in the provider. | A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * - use: required
     * @var string
     */
    public string $ProviderLocatorCode;
    /**
     * The UniversalLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: The locator of the Universal Record, if one exists. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    public ?string $UniversalLocatorCode = null;
    /**
     * The ETicket
     * Meta information extracted from the WSDL
     * - documentation: An flag to indicate if ticket has been issued for the PNR.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ETicket = null;
    /**
     * Constructor method for HostReservation
     * @uses HostReservation::setCarrier()
     * @uses HostReservation::setCarrierLocatorCode()
     * @uses HostReservation::setProviderCode()
     * @uses HostReservation::setProviderLocatorCode()
     * @uses HostReservation::setUniversalLocatorCode()
     * @uses HostReservation::setETicket()
     * @param string $carrier
     * @param string $carrierLocatorCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param string $universalLocatorCode
     * @param bool $eTicket
     */
    public function __construct(string $carrier, string $carrierLocatorCode, string $providerCode, string $providerLocatorCode, ?string $universalLocatorCode = null, ?bool $eTicket = false)
    {
        $this
            ->setCarrier($carrier)
            ->setCarrierLocatorCode($carrierLocatorCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setUniversalLocatorCode($universalLocatorCode)
            ->setETicket($eTicket);
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
     * @return \Travelport\Air\StructType\HostReservation
     */
    public function setCarrier(string $carrier): self
    {
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get CarrierLocatorCode value
     * @return string
     */
    public function getCarrierLocatorCode(): string
    {
        return $this->CarrierLocatorCode;
    }
    /**
     * Set CarrierLocatorCode value
     * @param string $carrierLocatorCode
     * @return \Travelport\Air\StructType\HostReservation
     */
    public function setCarrierLocatorCode(string $carrierLocatorCode): self
    {
        $this->CarrierLocatorCode = $carrierLocatorCode;
        
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
     * @return \Travelport\Air\StructType\HostReservation
     */
    public function setProviderCode(string $providerCode): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string
     */
    public function getProviderLocatorCode(): string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\Air\StructType\HostReservation
     */
    public function setProviderLocatorCode(string $providerLocatorCode): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get UniversalLocatorCode value
     * @return string|null
     */
    public function getUniversalLocatorCode(): ?string
    {
        return $this->UniversalLocatorCode;
    }
    /**
     * Set UniversalLocatorCode value
     * @param string $universalLocatorCode
     * @return \Travelport\Air\StructType\HostReservation
     */
    public function setUniversalLocatorCode(?string $universalLocatorCode = null): self
    {
        $this->UniversalLocatorCode = $universalLocatorCode;
        
        return $this;
    }
    /**
     * Get ETicket value
     * @return bool|null
     */
    public function getETicket(): ?bool
    {
        return $this->ETicket;
    }
    /**
     * Set ETicket value
     * @param bool $eTicket
     * @return \Travelport\Air\StructType\HostReservation
     */
    public function setETicket(?bool $eTicket = false): self
    {
        $this->ETicket = $eTicket;
        
        return $this;
    }
}
