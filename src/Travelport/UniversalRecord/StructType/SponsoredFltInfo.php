<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected int $SponsoredLNB;
    /**
     * The NeutralLNB
     * Meta information extracted from the WSDL
     * - documentation: The neutral line number for the flight item.
     * - use: required
     * @var int
     */
    protected int $NeutralLNB;
    /**
     * The FltKey
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - use: required
     * @var string
     */
    protected string $FltKey;
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
     * @return \Travelport\UniversalRecord\StructType\SponsoredFltInfo
     */
    public function setSponsoredLNB(int $sponsoredLNB): self
    {
        // validation for constraint: int
        if (!is_null($sponsoredLNB) && !(is_int($sponsoredLNB) || ctype_digit($sponsoredLNB))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sponsoredLNB, true), gettype($sponsoredLNB)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\SponsoredFltInfo
     */
    public function setNeutralLNB(int $neutralLNB): self
    {
        // validation for constraint: int
        if (!is_null($neutralLNB) && !(is_int($neutralLNB) || ctype_digit($neutralLNB))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($neutralLNB, true), gettype($neutralLNB)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\SponsoredFltInfo
     */
    public function setFltKey(string $fltKey): self
    {
        // validation for constraint: string
        if (!is_null($fltKey) && !is_string($fltKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fltKey, true), gettype($fltKey)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($fltKey) && mb_strlen((string) $fltKey) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $fltKey)), __LINE__);
        }
        $this->FltKey = $fltKey;
        
        return $this;
    }
}
