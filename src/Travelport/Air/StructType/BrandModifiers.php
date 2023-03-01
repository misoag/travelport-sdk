<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\FareFamilyDisplay
     */
    public \Travelport\Air\StructType\FareFamilyDisplay $FareFamilyDisplay;
    /**
     * The BasicDetailsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Travelport\Air\StructType\BasicDetailsOnly
     */
    public \Travelport\Air\StructType\BasicDetailsOnly $BasicDetailsOnly;
    /**
     * Constructor method for BrandModifiers
     * @uses BrandModifiers::setFareFamilyDisplay()
     * @uses BrandModifiers::setBasicDetailsOnly()
     * @param \Travelport\Air\StructType\FareFamilyDisplay $fareFamilyDisplay
     * @param \Travelport\Air\StructType\BasicDetailsOnly $basicDetailsOnly
     */
    public function __construct(\Travelport\Air\StructType\FareFamilyDisplay $fareFamilyDisplay, \Travelport\Air\StructType\BasicDetailsOnly $basicDetailsOnly)
    {
        $this
            ->setFareFamilyDisplay($fareFamilyDisplay)
            ->setBasicDetailsOnly($basicDetailsOnly);
    }
    /**
     * Get FareFamilyDisplay value
     * @return \Travelport\Air\StructType\FareFamilyDisplay
     */
    public function getFareFamilyDisplay(): \Travelport\Air\StructType\FareFamilyDisplay
    {
        return $this->FareFamilyDisplay;
    }
    /**
     * Set FareFamilyDisplay value
     * @param \Travelport\Air\StructType\FareFamilyDisplay $fareFamilyDisplay
     * @return \Travelport\Air\StructType\BrandModifiers
     */
    public function setFareFamilyDisplay(\Travelport\Air\StructType\FareFamilyDisplay $fareFamilyDisplay): self
    {
        $this->FareFamilyDisplay = $fareFamilyDisplay;
        
        return $this;
    }
    /**
     * Get BasicDetailsOnly value
     * @return \Travelport\Air\StructType\BasicDetailsOnly
     */
    public function getBasicDetailsOnly(): \Travelport\Air\StructType\BasicDetailsOnly
    {
        return $this->BasicDetailsOnly;
    }
    /**
     * Set BasicDetailsOnly value
     * @param \Travelport\Air\StructType\BasicDetailsOnly $basicDetailsOnly
     * @return \Travelport\Air\StructType\BrandModifiers
     */
    public function setBasicDetailsOnly(\Travelport\Air\StructType\BasicDetailsOnly $basicDetailsOnly): self
    {
        $this->BasicDetailsOnly = $basicDetailsOnly;
        
        return $this;
    }
}
