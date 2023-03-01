<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SponsoredFltInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: This describes whether the segment is determined to be a sponsored flight. The SponsoredFltInfo node will only come back for Travelport UIs and not for other customers.
 * @subpackage Structs
 */
class SponsoredFltInfo extends AbstractStructBase
{
    /**
     * The SponsoredLNB
     * Meta information extracted from the WSDL
     * - documentation: The line number of the sponsored flight item
     * - use: required
     * @var int
     */
    public int $SponsoredLNB;
    /**
     * The NeutralLNB
     * Meta information extracted from the WSDL
     * - documentation: The neutral line number for the flight item.
     * - use: required
     * @var int
     */
    public int $NeutralLNB;
    /**
     * The FltKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    public string $FltKey;
    /**
     * Constructor method for SponsoredFltInfo
     * @uses SponsoredFltInfo::setSponsoredLNB()
     * @uses SponsoredFltInfo::setNeutralLNB()
     * @uses SponsoredFltInfo::setFltKey()
     * @param int $sponsoredLNB
     * @param int $neutralLNB
     * @param string $fltKey
     */
    public function __construct(int $sponsoredLNB, int $neutralLNB, string $fltKey)
    {
        $this
            ->setSponsoredLNB($sponsoredLNB)
            ->setNeutralLNB($neutralLNB)
            ->setFltKey($fltKey);
    }
    /**
     * Get SponsoredLNB value
     * @return int
     */
    public function getSponsoredLNB(): int
    {
        return $this->SponsoredLNB;
    }
    /**
     * Set SponsoredLNB value
     * @param int $sponsoredLNB
     * @return \Travelport\Air\StructType\SponsoredFltInfo
     */
    public function setSponsoredLNB(int $sponsoredLNB): self
    {
        $this->SponsoredLNB = $sponsoredLNB;
        
        return $this;
    }
    /**
     * Get NeutralLNB value
     * @return int
     */
    public function getNeutralLNB(): int
    {
        return $this->NeutralLNB;
    }
    /**
     * Set NeutralLNB value
     * @param int $neutralLNB
     * @return \Travelport\Air\StructType\SponsoredFltInfo
     */
    public function setNeutralLNB(int $neutralLNB): self
    {
        $this->NeutralLNB = $neutralLNB;
        
        return $this;
    }
    /**
     * Get FltKey value
     * @return string
     */
    public function getFltKey(): string
    {
        return $this->FltKey;
    }
    /**
     * Set FltKey value
     * @param string $fltKey
     * @return \Travelport\Air\StructType\SponsoredFltInfo
     */
    public function setFltKey(string $fltKey): self
    {
        $this->FltKey = $fltKey;
        
        return $this;
    }
}
