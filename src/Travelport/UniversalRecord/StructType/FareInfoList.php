<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfoList StructType
 * Meta information extracted from the WSDL
 * - documentation: The shared object list of FareInfos
 * @subpackage Structs
 */
class FareInfoList extends AbstractStructBase
{
    /**
     * The FareInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: FareInfo
     * @var \Travelport\UniversalRecord\StructType\FareInfo[]
     */
    public ?array $FareInfo = null;
    /**
     * Constructor method for FareInfoList
     * @uses FareInfoList::setFareInfo()
     * @param \Travelport\UniversalRecord\StructType\FareInfo[] $fareInfo
     */
    public function __construct(?array $fareInfo = null)
    {
        $this
            ->setFareInfo($fareInfo);
    }
    /**
     * Get FareInfo value
     * @return \Travelport\UniversalRecord\StructType\FareInfo[]
     */
    public function getFareInfo(): ?array
    {
        return $this->FareInfo;
    }
    /**
     * Set FareInfo value
     * @param \Travelport\UniversalRecord\StructType\FareInfo[] $fareInfo
     * @return \Travelport\UniversalRecord\StructType\FareInfoList
     */
    public function setFareInfo(?array $fareInfo = null): self
    {
        $this->FareInfo = $fareInfo;
        
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareInfo $item
     * @return \Travelport\UniversalRecord\StructType\FareInfoList
     */
    public function addToFareInfo(\Travelport\UniversalRecord\StructType\FareInfo $item): self
    {
        $this->FareInfo[] = $item;
        
        return $this;
    }
}
