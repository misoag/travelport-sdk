<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailStationLocationModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Request object used to request specific rail station locations.
 * @subpackage Structs
 */
class RailStationLocationModifiers extends AbstractStructBase
{
    /**
     * The RailLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:RailLocation
     * @var \Travelport\Util\StructType\RailLocation|null
     */
    protected ?\Travelport\Util\StructType\RailLocation $RailLocation = null;
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - documentation: 2 character country code such as FR. | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $CountryCode = null;
    /**
     * The Distributor
     * Meta information extracted from the WSDL
     * - documentation: 2 character Rail distributor code such as TL or 2C. | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Distributor = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: A city name or station name such as Paris or Paris Nord.
     * - use: optional
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - documentation: The value “false” will return stations that are no longer active but remain on the table because existing bookings may reference them. The default is “true” which returns only active locations.
     * - default: true
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Active = null;
    /**
     * Constructor method for RailStationLocationModifiers
     * @uses RailStationLocationModifiers::setRailLocation()
     * @uses RailStationLocationModifiers::setCountryCode()
     * @uses RailStationLocationModifiers::setDistributor()
     * @uses RailStationLocationModifiers::setDescription()
     * @uses RailStationLocationModifiers::setActive()
     * @param \Travelport\Util\StructType\RailLocation $railLocation
     * @param string $countryCode
     * @param string $distributor
     * @param string $description
     * @param bool $active
     */
    public function __construct(?\Travelport\Util\StructType\RailLocation $railLocation = null, ?string $countryCode = null, ?string $distributor = null, ?string $description = null, ?bool $active = true)
    {
        $this
            ->setRailLocation($railLocation)
            ->setCountryCode($countryCode)
            ->setDistributor($distributor)
            ->setDescription($description)
            ->setActive($active);
    }
    /**
     * Get RailLocation value
     * @return \Travelport\Util\StructType\RailLocation|null
     */
    public function getRailLocation(): ?\Travelport\Util\StructType\RailLocation
    {
        return $this->RailLocation;
    }
    /**
     * Set RailLocation value
     * @param \Travelport\Util\StructType\RailLocation $railLocation
     * @return \Travelport\Util\StructType\RailStationLocationModifiers
     */
    public function setRailLocation(?\Travelport\Util\StructType\RailLocation $railLocation = null): self
    {
        $this->RailLocation = $railLocation;
        
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
     * @return \Travelport\Util\StructType\RailStationLocationModifiers
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($countryCode) && mb_strlen((string) $countryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get Distributor value
     * @return string|null
     */
    public function getDistributor(): ?string
    {
        return $this->Distributor;
    }
    /**
     * Set Distributor value
     * @param string $distributor
     * @return \Travelport\Util\StructType\RailStationLocationModifiers
     */
    public function setDistributor(?string $distributor = null): self
    {
        // validation for constraint: string
        if (!is_null($distributor) && !is_string($distributor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distributor, true), gettype($distributor)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($distributor) && mb_strlen((string) $distributor) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $distributor)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($distributor) && mb_strlen((string) $distributor) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $distributor)), __LINE__);
        }
        $this->Distributor = $distributor;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Util\StructType\RailStationLocationModifiers
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \Travelport\Util\StructType\RailStationLocationModifiers
     */
    public function setActive(?bool $active = true): self
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        
        return $this;
    }
}
