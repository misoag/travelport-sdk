<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetail StructType
 * Meta information extracted from the WSDL
 * - documentation: The tax idetail nformation for a fare quote tax.
 * @subpackage Structs
 */
class TaxDetail extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - type: typeMoney
     * - use: required
     * @var string
     */
    public string $Amount;
    /**
     * The OriginAirport
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * - type: typeAirport
     * - use: optional
     * @var string|null
     */
    public ?string $OriginAirport = null;
    /**
     * The DestinationAirport
     * Meta information extracted from the WSDL
     * - documentation: 3 Letter Airport Code
     * - base: xs:string
     * - length: 3
     * - type: typeAirport
     * - use: optional
     * @var string|null
     */
    public ?string $DestinationAirport = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $CountryCode = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - type: typeRef
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * Constructor method for TaxDetail
     * @uses TaxDetail::setAmount()
     * @uses TaxDetail::setOriginAirport()
     * @uses TaxDetail::setDestinationAirport()
     * @uses TaxDetail::setCountryCode()
     * @uses TaxDetail::setFareInfoRef()
     * @param string $amount
     * @param string $originAirport
     * @param string $destinationAirport
     * @param string $countryCode
     * @param string $fareInfoRef
     */
    public function __construct(string $amount, ?string $originAirport = null, ?string $destinationAirport = null, ?string $countryCode = null, ?string $fareInfoRef = null)
    {
        $this
            ->setAmount($amount)
            ->setOriginAirport($originAirport)
            ->setDestinationAirport($destinationAirport)
            ->setCountryCode($countryCode)
            ->setFareInfoRef($fareInfoRef);
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount(): string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Air\StructType\TaxDetail
     */
    public function setAmount(string $amount): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get OriginAirport value
     * @return string|null
     */
    public function getOriginAirport(): ?string
    {
        return $this->OriginAirport;
    }
    /**
     * Set OriginAirport value
     * @param string $originAirport
     * @return \Travelport\Air\StructType\TaxDetail
     */
    public function setOriginAirport(?string $originAirport = null): self
    {
        $this->OriginAirport = $originAirport;
        
        return $this;
    }
    /**
     * Get DestinationAirport value
     * @return string|null
     */
    public function getDestinationAirport(): ?string
    {
        return $this->DestinationAirport;
    }
    /**
     * Set DestinationAirport value
     * @param string $destinationAirport
     * @return \Travelport\Air\StructType\TaxDetail
     */
    public function setDestinationAirport(?string $destinationAirport = null): self
    {
        $this->DestinationAirport = $destinationAirport;
        
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Travelport\Air\StructType\TaxDetail
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\Air\StructType\TaxDetail
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
}
