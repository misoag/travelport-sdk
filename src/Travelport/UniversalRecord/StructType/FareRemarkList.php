<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRemarkList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareInfos
 * @subpackage Structs
 */
class FareRemarkList extends AbstractStructBase
{
    /**
     * The FareRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareRemark
     * @var \Travelport\UniversalRecord\StructType\FareRemark[]
     */
    public ?array $FareRemark = null;
    /**
     * Constructor method for FareRemarkList
     * @uses FareRemarkList::setFareRemark()
     * @param \Travelport\UniversalRecord\StructType\FareRemark[] $fareRemark
     */
    public function __construct(?array $fareRemark = null)
    {
        $this
            ->setFareRemark($fareRemark);
    }
    /**
     * Get FareRemark value
     * @return \Travelport\UniversalRecord\StructType\FareRemark[]
     */
    public function getFareRemark(): ?array
    {
        return $this->FareRemark;
    }
    /**
     * Set FareRemark value
     * @param \Travelport\UniversalRecord\StructType\FareRemark[] $fareRemark
     * @return \Travelport\UniversalRecord\StructType\FareRemarkList
     */
    public function setFareRemark(?array $fareRemark = null): self
    {
        $this->FareRemark = $fareRemark;
        
        return $this;
    }
    /**
     * Add item to FareRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRemark $item
     * @return \Travelport\UniversalRecord\StructType\FareRemarkList
     */
    public function addToFareRemark(\Travelport\UniversalRecord\StructType\FareRemark $item): self
    {
        $this->FareRemark[] = $item;
        
        return $this;
    }
}
