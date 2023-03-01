<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseSearchRsp StructType
 * @subpackage Structs
 */
class BaseSearchRsp extends BaseRsp
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
     * Constructor method for BaseSearchRsp
     * @uses BaseSearchRsp::setNextResultReference()
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
     * @return \Travelport\Air\StructType\BaseSearchRsp
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
     * @return \Travelport\Air\StructType\BaseSearchRsp
     */
    public function addToNextResultReference(\Travelport\Air\StructType\NextResultReference $item): self
    {
        $this->NextResultReference[] = $item;
        
        return $this;
    }
}
