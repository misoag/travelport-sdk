<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleLengthOfStay StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for rules providing minimum and maximum stay requirements.
 * @subpackage Structs
 */
class RuleLengthOfStay extends AbstractStructBase
{
    /**
     * The MinimumStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeRestrictionLengthOfStay|null
     */
    public ?\Travelport\Air\StructType\TypeRestrictionLengthOfStay $MinimumStay = null;
    /**
     * The MaximumStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeRestrictionLengthOfStay|null
     */
    public ?\Travelport\Air\StructType\TypeRestrictionLengthOfStay $MaximumStay = null;
    /**
     * Constructor method for RuleLengthOfStay
     * @uses RuleLengthOfStay::setMinimumStay()
     * @uses RuleLengthOfStay::setMaximumStay()
     * @param \Travelport\Air\StructType\TypeRestrictionLengthOfStay $minimumStay
     * @param \Travelport\Air\StructType\TypeRestrictionLengthOfStay $maximumStay
     */
    public function __construct(?\Travelport\Air\StructType\TypeRestrictionLengthOfStay $minimumStay = null, ?\Travelport\Air\StructType\TypeRestrictionLengthOfStay $maximumStay = null)
    {
        $this
            ->setMinimumStay($minimumStay)
            ->setMaximumStay($maximumStay);
    }
    /**
     * Get MinimumStay value
     * @return \Travelport\Air\StructType\TypeRestrictionLengthOfStay|null
     */
    public function getMinimumStay(): ?\Travelport\Air\StructType\TypeRestrictionLengthOfStay
    {
        return $this->MinimumStay;
    }
    /**
     * Set MinimumStay value
     * @param \Travelport\Air\StructType\TypeRestrictionLengthOfStay $minimumStay
     * @return \Travelport\Air\StructType\RuleLengthOfStay
     */
    public function setMinimumStay(?\Travelport\Air\StructType\TypeRestrictionLengthOfStay $minimumStay = null): self
    {
        $this->MinimumStay = $minimumStay;
        
        return $this;
    }
    /**
     * Get MaximumStay value
     * @return \Travelport\Air\StructType\TypeRestrictionLengthOfStay|null
     */
    public function getMaximumStay(): ?\Travelport\Air\StructType\TypeRestrictionLengthOfStay
    {
        return $this->MaximumStay;
    }
    /**
     * Set MaximumStay value
     * @param \Travelport\Air\StructType\TypeRestrictionLengthOfStay $maximumStay
     * @return \Travelport\Air\StructType\RuleLengthOfStay
     */
    public function setMaximumStay(?\Travelport\Air\StructType\TypeRestrictionLengthOfStay $maximumStay = null): self
    {
        $this->MaximumStay = $maximumStay;
        
        return $this;
    }
}
