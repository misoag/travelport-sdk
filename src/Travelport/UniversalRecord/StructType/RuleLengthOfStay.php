<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $MinimumStay = null;
    /**
     * The MaximumStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay|null
     */
    protected ?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $MaximumStay = null;
    /**
     * Constructor method for RuleLengthOfStay
     * @uses RuleLengthOfStay::setMinimumStay()
     * @uses RuleLengthOfStay::setMaximumStay()
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $minimumStay
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $maximumStay
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $minimumStay = null, ?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $maximumStay = null)
    {
        $this
            ->setMinimumStay($minimumStay)
            ->setMaximumStay($maximumStay);
    }
    /**
     * Get MinimumStay value
     * @return \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay|null
     */
    public function getMinimumStay(): ?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay
    {
        return $this->MinimumStay;
    }
    /**
     * Set MinimumStay value
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $minimumStay
     * @return \Travelport\UniversalRecord\StructType\RuleLengthOfStay
     */
    public function setMinimumStay(?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $minimumStay = null): self
    {
        $this->MinimumStay = $minimumStay;
        
        return $this;
    }
    /**
     * Get MaximumStay value
     * @return \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay|null
     */
    public function getMaximumStay(): ?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay
    {
        return $this->MaximumStay;
    }
    /**
     * Set MaximumStay value
     * @param \Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $maximumStay
     * @return \Travelport\UniversalRecord\StructType\RuleLengthOfStay
     */
    public function setMaximumStay(?\Travelport\UniversalRecord\StructType\TypeRestrictionLengthOfStay $maximumStay = null): self
    {
        $this->MaximumStay = $maximumStay;
        
        return $this;
    }
}
