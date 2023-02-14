<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareFamily StructType
 * Meta information extracted from the WSDL
 * - documentation: Flight number range or specific flight number for which this fare family would qualify. | It is a branded Fare for a carrier and given fare basis code.
 * @subpackage Structs
 */
class FareFamily extends AbstractStructBase
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
     * The Label
     * Meta information extracted from the WSDL
     * - documentation: An alpha-numeric string which denotes fare family. Some carriers may return this in lieu of or in addition to the CabinClass.
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 0
     * - use: required
     * @var string
     */
    protected string $Label;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for pricing.
     * - base: xs:string
     * - maxLength: 20
     * - use: required
     * @var string
     */
    protected string $FareBasis;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - documentation: Version of the Universal record. Required with any request to modify the existing Universal record.
     * - base: xs:integer
     * - use: required
     * @var int
     */
    protected int $Version;
    /**
     * The FlightSpec
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FlightSpec
     * @var \Travelport\Util\StructType\TypeFlightSpec|null
     */
    protected ?\Travelport\Util\StructType\TypeFlightSpec $FlightSpec = null;
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
     * Constructor method for FareFamily
     * @uses FareFamily::setCarrier()
     * @uses FareFamily::setLabel()
     * @uses FareFamily::setFareBasis()
     * @uses FareFamily::setVersion()
     * @uses FareFamily::setFlightSpec()
     * @uses FareFamily::setKey()
     * @param string $carrier
     * @param string $label
     * @param string $fareBasis
     * @param int $version
     * @param \Travelport\Util\StructType\TypeFlightSpec $flightSpec
     * @param string $key
     */
    public function __construct(string $carrier, string $label, string $fareBasis, int $version, ?\Travelport\Util\StructType\TypeFlightSpec $flightSpec = null, ?string $key = null)
    {
        $this
            ->setCarrier($carrier)
            ->setLabel($label)
            ->setFareBasis($fareBasis)
            ->setVersion($version)
            ->setFlightSpec($flightSpec)
            ->setKey($key);
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
     * @return \Travelport\Util\StructType\FareFamily
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
     * Get Label value
     * @return string
     */
    public function getLabel(): string
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \Travelport\Util\StructType\FareFamily
     */
    public function setLabel(string $label): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($label) && mb_strlen((string) $label) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $label)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($label) && mb_strlen((string) $label) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $label)), __LINE__);
        }
        $this->Label = $label;
        
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
     * @return \Travelport\Util\StructType\FareFamily
     */
    public function setFareBasis(string $fareBasis): self
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
     * Get Version value
     * @return int
     */
    public function getVersion(): int
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Travelport\Util\StructType\FareFamily
     */
    public function setVersion(int $version): self
    {
        // validation for constraint: int
        if (!is_null($version) && !(is_int($version) || ctype_digit($version))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
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
     * @return \Travelport\Util\StructType\FareFamily
     */
    public function setFlightSpec(?\Travelport\Util\StructType\TypeFlightSpec $flightSpec = null): self
    {
        $this->FlightSpec = $flightSpec;
        
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
     * @return \Travelport\Util\StructType\FareFamily
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
}
