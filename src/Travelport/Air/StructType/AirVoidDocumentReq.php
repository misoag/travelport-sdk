<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirVoidDocumentReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to void all previously issued tickets for the PNR.
 * @subpackage Structs
 */
class AirVoidDocumentReq extends BaseReq
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The VoidDocumentInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: VoidDocumentInfo
     * @var \Travelport\Air\StructType\VoidDocumentInfo[]
     */
    public ?array $VoidDocumentInfo = null;
    /**
     * The ShowETR
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V-If set as true, response will display the detailed ETR for successfully voided E-Tickets.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ShowETR = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V-Provider code of a specific host. | 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V-Contains the locator of the host reservation.
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * The ValidateSpanishResidency
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G - If set as true, Spanish Residency will be validated for Provisioned Customers.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    public ?bool $ValidateSpanishResidency = null;
    /**
     * Constructor method for AirVoidDocumentReq
     * @uses AirVoidDocumentReq::setAirReservationLocatorCode()
     * @uses AirVoidDocumentReq::setVoidDocumentInfo()
     * @uses AirVoidDocumentReq::setShowETR()
     * @uses AirVoidDocumentReq::setProviderCode()
     * @uses AirVoidDocumentReq::setProviderLocatorCode()
     * @uses AirVoidDocumentReq::setValidateSpanishResidency()
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param \Travelport\Air\StructType\VoidDocumentInfo[] $voidDocumentInfo
     * @param bool $showETR
     * @param string $providerCode
     * @param string $providerLocatorCode
     * @param bool $validateSpanishResidency
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $voidDocumentInfo = null, ?bool $showETR = false, ?string $providerCode = null, ?string $providerLocatorCode = null, ?bool $validateSpanishResidency = false)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setVoidDocumentInfo($voidDocumentInfo)
            ->setShowETR($showETR)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setValidateSpanishResidency($validateSpanishResidency);
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Air\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode;
    }
    /**
     * Set AirReservationLocatorCode value
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        $this->AirReservationLocatorCode = $airReservationLocatorCode;
        
        return $this;
    }
    /**
     * Get VoidDocumentInfo value
     * @return \Travelport\Air\StructType\VoidDocumentInfo[]
     */
    public function getVoidDocumentInfo(): ?array
    {
        return $this->VoidDocumentInfo;
    }
    /**
     * Set VoidDocumentInfo value
     * @param \Travelport\Air\StructType\VoidDocumentInfo[] $voidDocumentInfo
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function setVoidDocumentInfo(?array $voidDocumentInfo = null): self
    {
        $this->VoidDocumentInfo = $voidDocumentInfo;
        
        return $this;
    }
    /**
     * Add item to VoidDocumentInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\VoidDocumentInfo $item
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function addToVoidDocumentInfo(\Travelport\Air\StructType\VoidDocumentInfo $item): self
    {
        $this->VoidDocumentInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ShowETR value
     * @return bool|null
     */
    public function getShowETR(): ?bool
    {
        return $this->ShowETR;
    }
    /**
     * Set ShowETR value
     * @param bool $showETR
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function setShowETR(?bool $showETR = false): self
    {
        $this->ShowETR = $showETR;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function setProviderCode(?string $providerCode = null): self
    {
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get ValidateSpanishResidency value
     * @return bool|null
     */
    public function getValidateSpanishResidency(): ?bool
    {
        return $this->ValidateSpanishResidency;
    }
    /**
     * Set ValidateSpanishResidency value
     * @param bool $validateSpanishResidency
     * @return \Travelport\Air\StructType\AirVoidDocumentReq
     */
    public function setValidateSpanishResidency(?bool $validateSpanishResidency = false): self
    {
        $this->ValidateSpanishResidency = $validateSpanishResidency;
        
        return $this;
    }
}
