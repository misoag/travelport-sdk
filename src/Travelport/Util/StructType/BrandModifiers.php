<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\FareFamilyDisplay
     */
    protected \Travelport\Util\StructType\FareFamilyDisplay $FareFamilyDisplay;
    /**
     * The BasicDetailsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Travelport\Util\StructType\BasicDetailsOnly
     */
    protected \Travelport\Util\StructType\BasicDetailsOnly $BasicDetailsOnly;
    /**
     * Constructor method for BrandModifiers
     * @uses BrandModifiers::setFareFamilyDisplay()
     * @uses BrandModifiers::setBasicDetailsOnly()
     * @param \Travelport\Util\StructType\FareFamilyDisplay $fareFamilyDisplay
     * @param \Travelport\Util\StructType\BasicDetailsOnly $basicDetailsOnly
     */
    public function __construct(\Travelport\Util\StructType\FareFamilyDisplay $fareFamilyDisplay, \Travelport\Util\StructType\BasicDetailsOnly $basicDetailsOnly)
    {
        $this
            ->setFareFamilyDisplay($fareFamilyDisplay)
            ->setBasicDetailsOnly($basicDetailsOnly);
    }
    /**
     * Get FareFamilyDisplay value
     * @return \Travelport\Util\StructType\FareFamilyDisplay
     */
    public function getFareFamilyDisplay(): \Travelport\Util\StructType\FareFamilyDisplay
    {
        return $this->FareFamilyDisplay;
    }
    /**
     * Set FareFamilyDisplay value
     * @param \Travelport\Util\StructType\FareFamilyDisplay $fareFamilyDisplay
     * @return \Travelport\Util\StructType\BrandModifiers
     */
    public function setFareFamilyDisplay(\Travelport\Util\StructType\FareFamilyDisplay $fareFamilyDisplay): self
    {
        $this->FareFamilyDisplay = $fareFamilyDisplay;
        
        return $this;
    }
    /**
     * Get BasicDetailsOnly value
     * @return \Travelport\Util\StructType\BasicDetailsOnly
     */
    public function getBasicDetailsOnly(): \Travelport\Util\StructType\BasicDetailsOnly
    {
        return $this->BasicDetailsOnly;
    }
    /**
     * Set BasicDetailsOnly value
     * @param \Travelport\Util\StructType\BasicDetailsOnly $basicDetailsOnly
     * @return \Travelport\Util\StructType\BrandModifiers
     */
    public function setBasicDetailsOnly(\Travelport\Util\StructType\BasicDetailsOnly $basicDetailsOnly): self
    {
        $this->BasicDetailsOnly = $basicDetailsOnly;
        
        return $this;
    }
}
