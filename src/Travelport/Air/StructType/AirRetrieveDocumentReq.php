<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRetrieveDocumentReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: 1G,1V,1P. | Retrieve the post booking information for a PNR. ETRs will be returned for standard carriers. TCRs will be returned for Ticketless carriers. If the locator is send on a standard carrier, all ETRs will be
 * retrieved.
 * @subpackage Structs
 */
class AirRetrieveDocumentReq extends BaseReq
{
    /**
     * The AirReservationLocatorCode
     * Meta information extracted from the WSDL
     * - choice: AirReservationLocatorCode | TicketNumber | TCRNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: AirReservationLocatorCode
     * @var \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public ?\Travelport\Air\StructType\AirReservationLocatorCode $AirReservationLocatorCode = null;
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - choice: AirReservationLocatorCode | TicketNumber | TCRNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxLength: 13
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * - ref: common:TicketNumber
     * @var string[]
     */
    public ?array $TicketNumber = null;
    /**
     * The TCRNumber
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P-The identifying number for a Ticketless Air Reservation. | The identifying number for a Ticketless Air Reservation
     * - base: xs:string
     * - choice: AirReservationLocatorCode | TicketNumber | TCRNumber
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    public ?array $TCRNumber = null;
    /**
     * The ReturnRestrictions
     * Meta information extracted from the WSDL
     * - documentation: Will return a response which includes a set of restrictions associated with the document.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnRestrictions = null;
    /**
     * The ReturnPricing
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P-Will return a response which includes the pricing associated with the ETR.
     * - use: optional
     * @var bool|null
     */
    public ?bool $ReturnPricing = null;
    /**
     * The RetrieveMCO
     * Meta information extracted from the WSDL
     * - documentation: When true, returns MCO Information. The default value is false.
     * - use: optional
     * @var bool|null
     */
    public ?bool $RetrieveMCO = null;
    /**
     * The UniversalRecordLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * @var string|null
     */
    public ?string $UniversalRecordLocatorCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: A Locator Code that uniquely identifies a Provider Reservation or searches for one.
     * - base: xs:string
     * - maxLength: 15
     * @var string|null
     */
    public ?string $ProviderLocatorCode = null;
    /**
     * Constructor method for AirRetrieveDocumentReq
     * @uses AirRetrieveDocumentReq::setAirReservationLocatorCode()
     * @uses AirRetrieveDocumentReq::setTicketNumber()
     * @uses AirRetrieveDocumentReq::setTCRNumber()
     * @uses AirRetrieveDocumentReq::setReturnRestrictions()
     * @uses AirRetrieveDocumentReq::setReturnPricing()
     * @uses AirRetrieveDocumentReq::setRetrieveMCO()
     * @uses AirRetrieveDocumentReq::setUniversalRecordLocatorCode()
     * @uses AirRetrieveDocumentReq::setProviderCode()
     * @uses AirRetrieveDocumentReq::setProviderLocatorCode()
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @param string[] $ticketNumber
     * @param string[] $tCRNumber
     * @param bool $returnRestrictions
     * @param bool $returnPricing
     * @param bool $retrieveMCO
     * @param string $universalRecordLocatorCode
     * @param string $providerCode
     * @param string $providerLocatorCode
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null, ?array $ticketNumber = null, ?array $tCRNumber = null, ?bool $returnRestrictions = null, ?bool $returnPricing = null, ?bool $retrieveMCO = null, ?string $universalRecordLocatorCode = null, ?string $providerCode = null, ?string $providerLocatorCode = null)
    {
        $this
            ->setAirReservationLocatorCode($airReservationLocatorCode)
            ->setTicketNumber($ticketNumber)
            ->setTCRNumber($tCRNumber)
            ->setReturnRestrictions($returnRestrictions)
            ->setReturnPricing($returnPricing)
            ->setRetrieveMCO($retrieveMCO)
            ->setUniversalRecordLocatorCode($universalRecordLocatorCode)
            ->setProviderCode($providerCode)
            ->setProviderLocatorCode($providerLocatorCode);
    }
    /**
     * Get AirReservationLocatorCode value
     * @return \Travelport\Air\StructType\AirReservationLocatorCode|null
     */
    public function getAirReservationLocatorCode(): ?\Travelport\Air\StructType\AirReservationLocatorCode
    {
        return $this->AirReservationLocatorCode ?? null;
    }
    /**
     * Set AirReservationLocatorCode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setAirReservationLocatorCode(?\Travelport\Air\StructType\AirReservationLocatorCode $airReservationLocatorCode = null): self
    {
        if (is_null($airReservationLocatorCode) || (is_array($airReservationLocatorCode) && empty($airReservationLocatorCode))) {
            unset($this->AirReservationLocatorCode);
        } else {
            $this->AirReservationLocatorCode = $airReservationLocatorCode;
        }
        
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string[]|null
     */
    public function getTicketNumber(): ?array
    {
        return $this->TicketNumber ?? null;
    }
    /**
     * Set TicketNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string[] $ticketNumber
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setTicketNumber(?array $ticketNumber = null): self
    {
        if (is_null($ticketNumber) || (is_array($ticketNumber) && empty($ticketNumber))) {
            unset($this->TicketNumber);
        } else {
            $this->TicketNumber = $ticketNumber;
        }
        
        return $this;
    }
    /**
     * Add item to TicketNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function addToTicketNumber(string $item): self
    {
        $this->TicketNumber[] = $item;
        
        return $this;
    }
    /**
     * Get TCRNumber value
     * @return string[]|null
     */
    public function getTCRNumber(): ?array
    {
        return $this->TCRNumber ?? null;
    }
    /**
     * Set TCRNumber value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string[] $tCRNumber
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setTCRNumber(?array $tCRNumber = null): self
    {
        if (is_null($tCRNumber) || (is_array($tCRNumber) && empty($tCRNumber))) {
            unset($this->TCRNumber);
        } else {
            $this->TCRNumber = $tCRNumber;
        }
        
        return $this;
    }
    /**
     * Add item to TCRNumber value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function addToTCRNumber(string $item): self
    {
        $this->TCRNumber[] = $item;
        
        return $this;
    }
    /**
     * Get ReturnRestrictions value
     * @return bool|null
     */
    public function getReturnRestrictions(): ?bool
    {
        return $this->ReturnRestrictions;
    }
    /**
     * Set ReturnRestrictions value
     * @param bool $returnRestrictions
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setReturnRestrictions(?bool $returnRestrictions = null): self
    {
        $this->ReturnRestrictions = $returnRestrictions;
        
        return $this;
    }
    /**
     * Get ReturnPricing value
     * @return bool|null
     */
    public function getReturnPricing(): ?bool
    {
        return $this->ReturnPricing;
    }
    /**
     * Set ReturnPricing value
     * @param bool $returnPricing
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setReturnPricing(?bool $returnPricing = null): self
    {
        $this->ReturnPricing = $returnPricing;
        
        return $this;
    }
    /**
     * Get RetrieveMCO value
     * @return bool|null
     */
    public function getRetrieveMCO(): ?bool
    {
        return $this->RetrieveMCO;
    }
    /**
     * Set RetrieveMCO value
     * @param bool $retrieveMCO
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setRetrieveMCO(?bool $retrieveMCO = null): self
    {
        $this->RetrieveMCO = $retrieveMCO;
        
        return $this;
    }
    /**
     * Get UniversalRecordLocatorCode value
     * @return string|null
     */
    public function getUniversalRecordLocatorCode(): ?string
    {
        return $this->UniversalRecordLocatorCode;
    }
    /**
     * Set UniversalRecordLocatorCode value
     * @param string $universalRecordLocatorCode
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setUniversalRecordLocatorCode(?string $universalRecordLocatorCode = null): self
    {
        $this->UniversalRecordLocatorCode = $universalRecordLocatorCode;
        
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
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
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
     * @return \Travelport\Air\StructType\AirRetrieveDocumentReq
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
}
