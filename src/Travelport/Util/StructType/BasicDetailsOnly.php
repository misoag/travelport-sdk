<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected bool $ReturnBasicDetails;
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
     * @return \Travelport\Util\StructType\BasicDetailsOnly
     */
    public function setReturnBasicDetails(bool $returnBasicDetails): self
    {
        // validation for constraint: boolean
        if (!is_null($returnBasicDetails) && !is_bool($returnBasicDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnBasicDetails, true), gettype($returnBasicDetails)), __LINE__);
        }
        $this->ReturnBasicDetails = $returnBasicDetails;
        
        return $this;
    }
}
