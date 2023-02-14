<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\TypeRestrictionLengthOfStay|null
     */
    protected ?\Travelport\Util\StructType\TypeRestrictionLengthOfStay $MinimumStay = null;
    /**
     * The MaximumStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeRestrictionLengthOfStay|null
     */
    protected ?\Travelport\Util\StructType\TypeRestrictionLengthOfStay $MaximumStay = null;
    /**
     * Constructor method for RuleLengthOfStay
     * @uses RuleLengthOfStay::setMinimumStay()
     * @uses RuleLengthOfStay::setMaximumStay()
     * @param \Travelport\Util\StructType\TypeRestrictionLengthOfStay $minimumStay
     * @param \Travelport\Util\StructType\TypeRestrictionLengthOfStay $maximumStay
     */
    public function __construct(?\Travelport\Util\StructType\TypeRestrictionLengthOfStay $minimumStay = null, ?\Travelport\Util\StructType\TypeRestrictionLengthOfStay $maximumStay = null)
    {
        $this
            ->setMinimumStay($minimumStay)
            ->setMaximumStay($maximumStay);
    }
    /**
     * Get MinimumStay value
     * @return \Travelport\Util\StructType\TypeRestrictionLengthOfStay|null
     */
    public function getMinimumStay(): ?\Travelport\Util\StructType\TypeRestrictionLengthOfStay
    {
        return $this->MinimumStay;
    }
    /**
     * Set MinimumStay value
     * @param \Travelport\Util\StructType\TypeRestrictionLengthOfStay $minimumStay
     * @return \Travelport\Util\StructType\RuleLengthOfStay
     */
    public function setMinimumStay(?\Travelport\Util\StructType\TypeRestrictionLengthOfStay $minimumStay = null): self
    {
        $this->MinimumStay = $minimumStay;
        
        return $this;
    }
    /**
     * Get MaximumStay value
     * @return \Travelport\Util\StructType\TypeRestrictionLengthOfStay|null
     */
    public function getMaximumStay(): ?\Travelport\Util\StructType\TypeRestrictionLengthOfStay
    {
        return $this->MaximumStay;
    }
    /**
     * Set MaximumStay value
     * @param \Travelport\Util\StructType\TypeRestrictionLengthOfStay $maximumStay
     * @return \Travelport\Util\StructType\RuleLengthOfStay
     */
    public function setMaximumStay(?\Travelport\Util\StructType\TypeRestrictionLengthOfStay $maximumStay = null): self
    {
        $this->MaximumStay = $maximumStay;
        
        return $this;
    }
}
