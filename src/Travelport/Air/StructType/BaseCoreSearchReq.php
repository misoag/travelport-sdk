<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\NextResultReference[]
     */
    public ?array $NextResultReference = null;
    /**
     * Constructor method for BaseCoreSearchReq
     * @uses BaseCoreSearchReq::setNextResultReference()
     * @param \Travelport\Air\StructType\NextResultReference[] $nextResultReference
     */
    public function __construct(?array $nextResultReference = null)
    {
        $this
            ->setNextResultReference($nextResultReference);
    }
    /**
     * Get NextResultReference value
     * @return \Travelport\Air\StructType\NextResultReference[]
     */
    public function getNextResultReference(): ?array
    {
        return $this->NextResultReference;
    }
    /**
     * Set NextResultReference value
     * @param \Travelport\Air\StructType\NextResultReference[] $nextResultReference
     * @return \Travelport\Air\StructType\BaseCoreSearchReq
     */
    public function setNextResultReference(?array $nextResultReference = null): self
    {
        $this->NextResultReference = $nextResultReference;
        
        return $this;
    }
    /**
     * Add item to NextResultReference value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\NextResultReference $item
     * @return \Travelport\Air\StructType\BaseCoreSearchReq
     */
    public function addToNextResultReference(\Travelport\Air\StructType\NextResultReference $item): self
    {
        $this->NextResultReference[] = $item;
        
        return $this;
    }
}
