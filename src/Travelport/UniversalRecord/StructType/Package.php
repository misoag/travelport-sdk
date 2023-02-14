<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Package StructType
 * Meta information extracted from the WSDL
 * - documentation: Cruise package Details
 * @subpackage Structs
 */
class Package extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Cruise package Name | Used for Character Strings, length 1 to 30.
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Identifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    protected ?string $Identifier = null;
    /**
     * The PassengerCount
     * Meta information extracted from the WSDL
     * - documentation: Number in party
     * - use: optional
     * @var int|null
     */
    protected ?int $PassengerCount = null;
    /**
     * The PackageIdentifier
     * Meta information extracted from the WSDL
     * - documentation: Vendor Package/Tour Identifier | Used for Character Strings, length 1 to 14.
     * - base: xs:string
     * - maxLength: 14
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $PackageIdentifier = null;
    /**
     * Constructor method for Package
     * @uses Package::setName()
     * @uses Package::setIdentifier()
     * @uses Package::setPassengerCount()
     * @uses Package::setPackageIdentifier()
     * @param string $name
     * @param string $identifier
     * @param int $passengerCount
     * @param string $packageIdentifier
     */
    public function __construct(?string $name = null, ?string $identifier = null, ?int $passengerCount = null, ?string $packageIdentifier = null)
    {
        $this
            ->setName($name)
            ->setIdentifier($identifier)
            ->setPassengerCount($passengerCount)
            ->setPackageIdentifier($packageIdentifier);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\UniversalRecord\StructType\Package
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($name) && mb_strlen((string) $name) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $name)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen((string) $name) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Identifier value
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
        return $this->Identifier;
    }
    /**
     * Set Identifier value
     * @param string $identifier
     * @return \Travelport\UniversalRecord\StructType\Package
     */
    public function setIdentifier(?string $identifier = null): self
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identifier, true), gettype($identifier)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($identifier) && mb_strlen((string) $identifier) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $identifier)), __LINE__);
        }
        $this->Identifier = $identifier;
        
        return $this;
    }
    /**
     * Get PassengerCount value
     * @return int|null
     */
    public function getPassengerCount(): ?int
    {
        return $this->PassengerCount;
    }
    /**
     * Set PassengerCount value
     * @param int $passengerCount
     * @return \Travelport\UniversalRecord\StructType\Package
     */
    public function setPassengerCount(?int $passengerCount = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerCount) && !(is_int($passengerCount) || ctype_digit($passengerCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerCount, true), gettype($passengerCount)), __LINE__);
        }
        $this->PassengerCount = $passengerCount;
        
        return $this;
    }
    /**
     * Get PackageIdentifier value
     * @return string|null
     */
    public function getPackageIdentifier(): ?string
    {
        return $this->PackageIdentifier;
    }
    /**
     * Set PackageIdentifier value
     * @param string $packageIdentifier
     * @return \Travelport\UniversalRecord\StructType\Package
     */
    public function setPackageIdentifier(?string $packageIdentifier = null): self
    {
        // validation for constraint: string
        if (!is_null($packageIdentifier) && !is_string($packageIdentifier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageIdentifier, true), gettype($packageIdentifier)), __LINE__);
        }
        // validation for constraint: maxLength(14)
        if (!is_null($packageIdentifier) && mb_strlen((string) $packageIdentifier) > 14) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 14', mb_strlen((string) $packageIdentifier)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($packageIdentifier) && mb_strlen((string) $packageIdentifier) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $packageIdentifier)), __LINE__);
        }
        $this->PackageIdentifier = $packageIdentifier;
        
        return $this;
    }
}
