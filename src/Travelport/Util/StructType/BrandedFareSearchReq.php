<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandedFareSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Branded Fare search request.
 * @subpackage Structs
 */
class BrandedFareSearchReq extends BaseReq
{
    /**
     * The FareFamilyCriteria
     * Meta information extracted from the WSDL
     * - ref: FareFamilyCriteria
     * @var \Travelport\Util\StructType\FareFamilyCriteria|null
     */
    protected ?\Travelport\Util\StructType\FareFamilyCriteria $FareFamilyCriteria = null;
    /**
     * The BrandedFareSearchModifier
     * Meta information extracted from the WSDL
     * - ref: BrandedFareSearchModifier
     * @var \Travelport\Util\StructType\BrandedFareSearchModifier|null
     */
    protected ?\Travelport\Util\StructType\BrandedFareSearchModifier $BrandedFareSearchModifier = null;
    /**
     * Constructor method for BrandedFareSearchReq
     * @uses BrandedFareSearchReq::setFareFamilyCriteria()
     * @uses BrandedFareSearchReq::setBrandedFareSearchModifier()
     * @param \Travelport\Util\StructType\FareFamilyCriteria $fareFamilyCriteria
     * @param \Travelport\Util\StructType\BrandedFareSearchModifier $brandedFareSearchModifier
     */
    public function __construct(?\Travelport\Util\StructType\FareFamilyCriteria $fareFamilyCriteria = null, ?\Travelport\Util\StructType\BrandedFareSearchModifier $brandedFareSearchModifier = null)
    {
        $this
            ->setFareFamilyCriteria($fareFamilyCriteria)
            ->setBrandedFareSearchModifier($brandedFareSearchModifier);
    }
    /**
     * Get FareFamilyCriteria value
     * @return \Travelport\Util\StructType\FareFamilyCriteria|null
     */
    public function getFareFamilyCriteria(): ?\Travelport\Util\StructType\FareFamilyCriteria
    {
        return $this->FareFamilyCriteria;
    }
    /**
     * Set FareFamilyCriteria value
     * @param \Travelport\Util\StructType\FareFamilyCriteria $fareFamilyCriteria
     * @return \Travelport\Util\StructType\BrandedFareSearchReq
     */
    public function setFareFamilyCriteria(?\Travelport\Util\StructType\FareFamilyCriteria $fareFamilyCriteria = null): self
    {
        $this->FareFamilyCriteria = $fareFamilyCriteria;
        
        return $this;
    }
    /**
     * Get BrandedFareSearchModifier value
     * @return \Travelport\Util\StructType\BrandedFareSearchModifier|null
     */
    public function getBrandedFareSearchModifier(): ?\Travelport\Util\StructType\BrandedFareSearchModifier
    {
        return $this->BrandedFareSearchModifier;
    }
    /**
     * Set BrandedFareSearchModifier value
     * @param \Travelport\Util\StructType\BrandedFareSearchModifier $brandedFareSearchModifier
     * @return \Travelport\Util\StructType\BrandedFareSearchReq
     */
    public function setBrandedFareSearchModifier(?\Travelport\Util\StructType\BrandedFareSearchModifier $brandedFareSearchModifier = null): self
    {
        $this->BrandedFareSearchModifier = $brandedFareSearchModifier;
        
        return $this;
    }
}
