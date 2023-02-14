<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareFamilyDelete StructType
 * Meta information extracted from the WSDL
 * - documentation: Branded fare admin request element to delete a FareFamily for the given FareFamilyRef.
 * @subpackage Structs
 */
class FareFamilyDelete extends AbstractStructBase
{
    /**
     * The FareFamilyRef
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $FareFamilyRef;
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
     * Constructor method for FareFamilyDelete
     * @uses FareFamilyDelete::setFareFamilyRef()
     * @uses FareFamilyDelete::setVersion()
     * @param string $fareFamilyRef
     * @param int $version
     */
    public function __construct(string $fareFamilyRef, int $version)
    {
        $this
            ->setFareFamilyRef($fareFamilyRef)
            ->setVersion($version);
    }
    /**
     * Get FareFamilyRef value
     * @return string
     */
    public function getFareFamilyRef(): string
    {
        return $this->FareFamilyRef;
    }
    /**
     * Set FareFamilyRef value
     * @param string $fareFamilyRef
     * @return \Travelport\Util\StructType\FareFamilyDelete
     */
    public function setFareFamilyRef(string $fareFamilyRef): self
    {
        // validation for constraint: string
        if (!is_null($fareFamilyRef) && !is_string($fareFamilyRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareFamilyRef, true), gettype($fareFamilyRef)), __LINE__);
        }
        $this->FareFamilyRef = $fareFamilyRef;
        
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
     * @return \Travelport\Util\StructType\FareFamilyDelete
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
}
