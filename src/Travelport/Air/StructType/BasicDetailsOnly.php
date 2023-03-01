<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicDetailsOnly StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to request basic details of the brand.
 * @subpackage Structs
 */
class BasicDetailsOnly extends AbstractStructBase
{
    /**
     * The ReturnBasicDetails
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public bool $ReturnBasicDetails;
    /**
     * Constructor method for BasicDetailsOnly
     * @uses BasicDetailsOnly::setReturnBasicDetails()
     * @param bool $returnBasicDetails
     */
    public function __construct(bool $returnBasicDetails)
    {
        $this
            ->setReturnBasicDetails($returnBasicDetails);
    }
    /**
     * Get ReturnBasicDetails value
     * @return bool
     */
    public function getReturnBasicDetails(): bool
    {
        return $this->ReturnBasicDetails;
    }
    /**
     * Set ReturnBasicDetails value
     * @param bool $returnBasicDetails
     * @return \Travelport\Air\StructType\BasicDetailsOnly
     */
    public function setReturnBasicDetails(bool $returnBasicDetails): self
    {
        $this->ReturnBasicDetails = $returnBasicDetails;
        
        return $this;
    }
}
