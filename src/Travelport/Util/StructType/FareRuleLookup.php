<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Origin;
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
    protected string $Destination;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $FareBasis;
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
    protected string $ProviderCode;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode|null
     */
    protected ?\Travelport\Util\StructType\AccountCode $AccountCode = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Util\StructType\PointOfSale|null
     */
    protected ?\Travelport\Util\StructType\PointOfSale $PointOfSale = null;
    /**
     * The DepartureDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DepartureDate = null;
    /**
     * The TicketingDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingDate = null;
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
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     * @param \Travelport\Util\StructType\PointOfSale $pointOfSale
     * @param string $departureDate
     * @param string $ticketingDate
     */
    public function __construct(string $origin, string $destination, string $carrier, string $fareBasis, string $providerCode, ?\Travelport\Util\StructType\AccountCode $accountCode = null, ?\Travelport\Util\StructType\PointOfSale $pointOfSale = null, ?string $departureDate = null, ?string $ticketingDate = null)
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
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setOrigin(string $origin): self
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
     * @return string
     */
    public function getDestination(): string
    {
        return $this->Destination;
    }
    /**
     * Set Destination value
     * @param string $destination
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setDestination(string $destination): self
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
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setCarrier(string $carrier): self
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
     * @return string
     */
    public function getFareBasis(): string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setFareBasis(string $fareBasis): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get AccountCode value
     * @return \Travelport\Util\StructType\AccountCode|null
     */
    public function getAccountCode(): ?\Travelport\Util\StructType\AccountCode
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setAccountCode(?\Travelport\Util\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Util\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\Util\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Util\StructType\PointOfSale $pointOfSale
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setPointOfSale(?\Travelport\Util\StructType\PointOfSale $pointOfSale = null): self
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
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FareRuleLookup
     */
    public function setTicketingDate(?string $ticketingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingDate) && !is_string($ticketingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingDate, true), gettype($ticketingDate)), __LINE__);
        }
        $this->TicketingDate = $ticketingDate;
        
        return $this;
    }
}
