<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCoreSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Base Request for Air Search
 * @subpackage Structs
 */
class BaseCoreSearchReq extends BaseCoreReq
{
    /**
     * The NextResultReference
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: NextResultReference
     * @var \Travelport\UniversalRecord\StructType\NextResultReference[]
     */
    public ?array $NextResultReference = null;
    /**
     * Constructor method for BaseCoreSearchReq
     * @uses BaseCoreSearchReq::setNextResultReference()
     * @param \Travelport\UniversalRecord\StructType\NextResultReference[] $nextResultReference
     */
    public function __construct(?array $nextResultReference = null)
    {
        $this
            ->setNextResultReference($nextResultReference);
    }
    /**
     * Get NextResultReference value
     * @return \Travelport\UniversalRecord\StructType\NextResultReference[]
     */
    public function getNextResultReference(): ?array
    {
        return $this->NextResultReference;
    }
    /**
     * Set NextResultReference value
     * @param \Travelport\UniversalRecord\StructType\NextResultReference[] $nextResultReference
     * @return \Travelport\UniversalRecord\StructType\BaseCoreSearchReq
     */
    public function setNextResultReference(?array $nextResultReference = null): self
    {
        $this->NextResultReference = $nextResultReference;
        
        return $this;
    }
    /**
     * Add item to NextResultReference value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\NextResultReference $item
     * @return \Travelport\UniversalRecord\StructType\BaseCoreSearchReq
     */
    public function addToNextResultReference(\Travelport\UniversalRecord\StructType\NextResultReference $item): self
    {
        $this->NextResultReference[] = $item;
        
        return $this;
    }
}
