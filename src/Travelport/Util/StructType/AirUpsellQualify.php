<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpsellQualify StructType
 * @subpackage Structs
 */
class AirUpsellQualify extends AbstractStructBase
{
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
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $EffectiveDate;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - documentation: Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: required
     * @var string
     */
    protected string $ExpirationDate;
    /**
     * The DepartureTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeTimeSpec|null
     */
    protected ?\Travelport\Util\StructType\TypeTimeSpec $DepartureTime = null;
    /**
     * The FlightSpec
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightSpec
     * @var \Travelport\Util\StructType\TypeFlightSpec|null
     */
    protected ?\Travelport\Util\StructType\TypeFlightSpec $FlightSpec = null;
    /**
     * The OperatingFlightSpec
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OperatingFlightSpec
     * @var \Travelport\Util\StructType\TypeFlightSpec|null
     */
    protected ?\Travelport\Util\StructType\TypeFlightSpec $OperatingFlightSpec = null;
    /**
     * The AccountCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:AccountCode
     * @var \Travelport\Util\StructType\AccountCode|null
     */
    protected ?\Travelport\Util\StructType\AccountCode $AccountCode = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The Origin
     * Meta information extracted from the WSDL
     * - documentation: Valid 3 letter IATA city or airport code
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
     * - documentation: Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * - whiteSpace: collapse
     * @var string|null
     */
    protected ?string $Destination = null;
    /**
     * The ClassOfService
     * Meta information extracted from the WSDL
     * - documentation: Class of service code (Booking code) usually one letter, rarely two.
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ClassOfService = null;
    /**
     * The OperatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $OperatingCarrier = null;
    /**
     * The OfferRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $OfferRef = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for pricing.
     * - base: xs:string
     * - maxLength: 20
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBasis = null;
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
     * Constructor method for AirUpsellQualify
     * @uses AirUpsellQualify::setCarrier()
     * @uses AirUpsellQualify::setEffectiveDate()
     * @uses AirUpsellQualify::setExpirationDate()
     * @uses AirUpsellQualify::setDepartureTime()
     * @uses AirUpsellQualify::setFlightSpec()
     * @uses AirUpsellQualify::setOperatingFlightSpec()
     * @uses AirUpsellQualify::setAccountCode()
     * @uses AirUpsellQualify::setProviderCode()
     * @uses AirUpsellQualify::setOrigin()
     * @uses AirUpsellQualify::setDestination()
     * @uses AirUpsellQualify::setClassOfService()
     * @uses AirUpsellQualify::setOperatingCarrier()
     * @uses AirUpsellQualify::setOfferRef()
     * @uses AirUpsellQualify::setKey()
     * @uses AirUpsellQualify::setFareBasis()
     * @uses AirUpsellQualify::setElStat()
     * @uses AirUpsellQualify::setKeyOverride()
     * @param string $carrier
     * @param string $effectiveDate
     * @param string $expirationDate
     * @param \Travelport\Util\StructType\TypeTimeSpec $departureTime
     * @param \Travelport\Util\StructType\TypeFlightSpec $flightSpec
     * @param \Travelport\Util\StructType\TypeFlightSpec $operatingFlightSpec
     * @param \Travelport\Util\StructType\AccountCode $accountCode
     * @param string $providerCode
     * @param string $origin
     * @param string $destination
     * @param string $classOfService
     * @param string $operatingCarrier
     * @param string $offerRef
     * @param string $key
     * @param string $fareBasis
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $carrier, string $effectiveDate, string $expirationDate, ?\Travelport\Util\StructType\TypeTimeSpec $departureTime = null, ?\Travelport\Util\StructType\TypeFlightSpec $flightSpec = null, ?\Travelport\Util\StructType\TypeFlightSpec $operatingFlightSpec = null, ?\Travelport\Util\StructType\AccountCode $accountCode = null, ?string $providerCode = null, ?string $origin = null, ?string $destination = null, ?string $classOfService = null, ?string $operatingCarrier = null, ?string $offerRef = null, ?string $key = null, ?string $fareBasis = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setCarrier($carrier)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate)
            ->setDepartureTime($departureTime)
            ->setFlightSpec($flightSpec)
            ->setOperatingFlightSpec($operatingFlightSpec)
            ->setAccountCode($accountCode)
            ->setProviderCode($providerCode)
            ->setOrigin($origin)
            ->setDestination($destination)
            ->setClassOfService($classOfService)
            ->setOperatingCarrier($operatingCarrier)
            ->setOfferRef($offerRef)
            ->setKey($key)
            ->setFareBasis($fareBasis)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
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
     * Get EffectiveDate value
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($effectiveDate) && !preg_match('/[^:Z].*/', $effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($effectiveDate, true)), __LINE__);
        }
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setExpirationDate(string $expirationDate): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($expirationDate) && !preg_match('/[^:Z].*/', $expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($expirationDate, true)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return \Travelport\Util\StructType\TypeTimeSpec|null
     */
    public function getDepartureTime(): ?\Travelport\Util\StructType\TypeTimeSpec
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param \Travelport\Util\StructType\TypeTimeSpec $departureTime
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setDepartureTime(?\Travelport\Util\StructType\TypeTimeSpec $departureTime = null): self
    {
        $this->DepartureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get FlightSpec value
     * @return \Travelport\Util\StructType\TypeFlightSpec|null
     */
    public function getFlightSpec(): ?\Travelport\Util\StructType\TypeFlightSpec
    {
        return $this->FlightSpec;
    }
    /**
     * Set FlightSpec value
     * @param \Travelport\Util\StructType\TypeFlightSpec $flightSpec
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setFlightSpec(?\Travelport\Util\StructType\TypeFlightSpec $flightSpec = null): self
    {
        $this->FlightSpec = $flightSpec;
        
        return $this;
    }
    /**
     * Get OperatingFlightSpec value
     * @return \Travelport\Util\StructType\TypeFlightSpec|null
     */
    public function getOperatingFlightSpec(): ?\Travelport\Util\StructType\TypeFlightSpec
    {
        return $this->OperatingFlightSpec;
    }
    /**
     * Set OperatingFlightSpec value
     * @param \Travelport\Util\StructType\TypeFlightSpec $operatingFlightSpec
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setOperatingFlightSpec(?\Travelport\Util\StructType\TypeFlightSpec $operatingFlightSpec = null): self
    {
        $this->OperatingFlightSpec = $operatingFlightSpec;
        
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setAccountCode(?\Travelport\Util\StructType\AccountCode $accountCode = null): self
    {
        $this->AccountCode = $accountCode;
        
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setProviderCode(?string $providerCode = null): self
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
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
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService(): ?string
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setClassOfService(?string $classOfService = null): self
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($classOfService, true), gettype($classOfService)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $classOfService)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($classOfService) && mb_strlen((string) $classOfService) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        
        return $this;
    }
    /**
     * Get OperatingCarrier value
     * @return string|null
     */
    public function getOperatingCarrier(): ?string
    {
        return $this->OperatingCarrier;
    }
    /**
     * Set OperatingCarrier value
     * @param string $operatingCarrier
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setOperatingCarrier(?string $operatingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrier) && !is_string($operatingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrier, true), gettype($operatingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($operatingCarrier) && mb_strlen((string) $operatingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $operatingCarrier)), __LINE__);
        }
        $this->OperatingCarrier = $operatingCarrier;
        
        return $this;
    }
    /**
     * Get OfferRef value
     * @return string|null
     */
    public function getOfferRef(): ?string
    {
        return $this->OfferRef;
    }
    /**
     * Set OfferRef value
     * @param string $offerRef
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setOfferRef(?string $offerRef = null): self
    {
        // validation for constraint: string
        if (!is_null($offerRef) && !is_string($offerRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offerRef, true), gettype($offerRef)), __LINE__);
        }
        $this->OfferRef = $offerRef;
        
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($fareBasis) && mb_strlen((string) $fareBasis) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
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
     * @return \Travelport\Util\StructType\AirUpsellQualify
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
