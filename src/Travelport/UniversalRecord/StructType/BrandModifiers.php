<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to specify the level of branding requested.
 * @subpackage Structs
 */
class BrandModifiers extends AbstractStructBase
{
    /**
     * The FareFamilyDisplay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\FareFamilyDisplay
     */
    protected \Travelport\UniversalRecord\StructType\FareFamilyDisplay $FareFamilyDisplay;
    /**
     * The BasicDetailsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Travelport\UniversalRecord\StructType\BasicDetailsOnly
     */
    protected \Travelport\UniversalRecord\StructType\BasicDetailsOnly $BasicDetailsOnly;
    /**
     * Constructor method for BrandModifiers
     * @uses BrandModifiers::setFareFamilyDisplay()
     * @uses BrandModifiers::setBasicDetailsOnly()
     * @param \Travelport\UniversalRecord\StructType\FareFamilyDisplay $fareFamilyDisplay
     * @param \Travelport\UniversalRecord\StructType\BasicDetailsOnly $basicDetailsOnly
     */
    public function __construct(\Travelport\UniversalRecord\StructType\FareFamilyDisplay $fareFamilyDisplay, \Travelport\UniversalRecord\StructType\BasicDetailsOnly $basicDetailsOnly)
    {
        $this
            ->setFareFamilyDisplay($fareFamilyDisplay)
            ->setBasicDetailsOnly($basicDetailsOnly);
    }
    /**
     * Get FareFamilyDisplay value
     * @return \Travelport\UniversalRecord\StructType\FareFamilyDisplay
     */
    public function getFareFamilyDisplay(): \Travelport\UniversalRecord\StructType\FareFamilyDisplay
    {
        return $this->FareFamilyDisplay;
    }
    /**
     * Set FareFamilyDisplay value
     * @param \Travelport\UniversalRecord\StructType\FareFamilyDisplay $fareFamilyDisplay
     * @return \Travelport\UniversalRecord\StructType\BrandModifiers
     */
    public function setFareFamilyDisplay(\Travelport\UniversalRecord\StructType\FareFamilyDisplay $fareFamilyDisplay): self
    {
        $this->FareFamilyDisplay = $fareFamilyDisplay;
        
        return $this;
    }
    /**
     * Get BasicDetailsOnly value
     * @return \Travelport\UniversalRecord\StructType\BasicDetailsOnly
     */
    public function getBasicDetailsOnly(): \Travelport\UniversalRecord\StructType\BasicDetailsOnly
    {
        return $this->BasicDetailsOnly;
    }
    /**
     * Set BasicDetailsOnly value
     * @param \Travelport\UniversalRecord\StructType\BasicDetailsOnly $basicDetailsOnly
     * @return \Travelport\UniversalRecord\StructType\BrandModifiers
     */
    public function setBasicDetailsOnly(\Travelport\UniversalRecord\StructType\BasicDetailsOnly $basicDetailsOnly): self
    {
        $this->BasicDetailsOnly = $basicDetailsOnly;
        
        return $this;
    }
}
