<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriversLicense StructType
 * Meta information extracted from the WSDL
 * - documentation: Details of drivers license
 * @subpackage Structs
 */
class DriversLicense extends AbstractStructBase
{
    /**
     * The LicenseNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $LicenseNumber;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The ElStat
     * Meta information extracted from the WSDL
     * - documentation: This attribute is used to show the action results of an element. Possible values are "A" (when elements have been added to the UR) and "M" (when existing elements have been modified). Response only.
     * - type: typeElementStatus
     * - use: optional
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * Meta information extracted from the WSDL
     * - documentation: If a duplicate key is found where we are adding elements in some cases like URAdd, then instead of erroring out set this attribute to true.
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for DriversLicense
     * @uses DriversLicense::setLicenseNumber()
     * @uses DriversLicense::setKey()
     * @uses DriversLicense::setElStat()
     * @uses DriversLicense::setKeyOverride()
     * @param string $licenseNumber
     * @param string $key
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $licenseNumber, ?string $key = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setLicenseNumber($licenseNumber)
            ->setKey($key)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get LicenseNumber value
     * @return string
     */
    public function getLicenseNumber(): string
    {
        return $this->LicenseNumber;
    }
    /**
     * Set LicenseNumber value
     * @param string $licenseNumber
     * @return \Travelport\UniversalRecord\StructType\DriversLicense
     */
    public function setLicenseNumber(string $licenseNumber): self
    {
        $this->LicenseNumber = $licenseNumber;
        
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
     * @return \Travelport\UniversalRecord\StructType\DriversLicense
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
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
     * @param string $elStat
     * @return \Travelport\UniversalRecord\StructType\DriversLicense
     */
    public function setElStat(?string $elStat = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\DriversLicense
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
