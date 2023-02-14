<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProviderReservationDivideRsp StructType
 * @subpackage Structs
 */
class ProviderReservationDivideRsp extends BaseRsp
{
    /**
     * The ParentProviderReservationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ParentProviderReservationInfo
     * @var \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo
     */
    protected \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo $ParentProviderReservationInfo;
    /**
     * The ChildProviderReservationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: ChildProviderReservationInfo
     * @var \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo
     */
    protected \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo $ChildProviderReservationInfo;
    /**
     * Constructor method for ProviderReservationDivideRsp
     * @uses ProviderReservationDivideRsp::setParentProviderReservationInfo()
     * @uses ProviderReservationDivideRsp::setChildProviderReservationInfo()
     * @param \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo $parentProviderReservationInfo
     * @param \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo $childProviderReservationInfo
     */
    public function __construct(\Travelport\UniversalRecord\StructType\ParentProviderReservationInfo $parentProviderReservationInfo, \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo $childProviderReservationInfo)
    {
        $this
            ->setParentProviderReservationInfo($parentProviderReservationInfo)
            ->setChildProviderReservationInfo($childProviderReservationInfo);
    }
    /**
     * Get ParentProviderReservationInfo value
     * @return \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo
     */
    public function getParentProviderReservationInfo(): \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo
    {
        return $this->ParentProviderReservationInfo;
    }
    /**
     * Set ParentProviderReservationInfo value
     * @param \Travelport\UniversalRecord\StructType\ParentProviderReservationInfo $parentProviderReservationInfo
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideRsp
     */
    public function setParentProviderReservationInfo(\Travelport\UniversalRecord\StructType\ParentProviderReservationInfo $parentProviderReservationInfo): self
    {
        $this->ParentProviderReservationInfo = $parentProviderReservationInfo;
        
        return $this;
    }
    /**
     * Get ChildProviderReservationInfo value
     * @return \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo
     */
    public function getChildProviderReservationInfo(): \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo
    {
        return $this->ChildProviderReservationInfo;
    }
    /**
     * Set ChildProviderReservationInfo value
     * @param \Travelport\UniversalRecord\StructType\ChildProviderReservationInfo $childProviderReservationInfo
     * @return \Travelport\UniversalRecord\StructType\ProviderReservationDivideRsp
     */
    public function setChildProviderReservationInfo(\Travelport\UniversalRecord\StructType\ChildProviderReservationInfo $childProviderReservationInfo): self
    {
        $this->ChildProviderReservationInfo = $childProviderReservationInfo;
        
        return $this;
    }
}
