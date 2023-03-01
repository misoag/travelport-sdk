<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $Name = null;
    /**
     * The Identifier
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - use: optional
     * @var string|null
     */
    public ?string $Identifier = null;
    /**
     * The PassengerCount
     * Meta information extracted from the WSDL
     * - documentation: Number in party
     * - use: optional
     * @var int|null
     */
    public ?int $PassengerCount = null;
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
    public ?string $PackageIdentifier = null;
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
        $this->PackageIdentifier = $packageIdentifier;
        
        return $this;
    }
}
