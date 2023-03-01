<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyCodesList StructType
 * @subpackage Structs
 */
class PolicyCodesList extends AbstractStructBase
{
    /**
     * The PolicyCode
     * Meta information extracted from the WSDL
     * - documentation: A code that indicates why an item was determined to be ‘out of policy’. | Type for PolicyCode attribute.
     * - base: xs:int
     * - maxInclusive: 9999
     * - maxOccurs: 10
     * - minInclusive: 1
     * - minOccurs: 1
     * @var int[]
     */
    public array $PolicyCode;
    /**
     * Constructor method for PolicyCodesList
     * @uses PolicyCodesList::setPolicyCode()
     * @param int[] $policyCode
     */
    public function __construct(array $policyCode)
    {
        $this
            ->setPolicyCode($policyCode);
    }
    /**
     * Get PolicyCode value
     * @return int[]
     */
    public function getPolicyCode(): array
    {
        return $this->PolicyCode;
    }
    /**
     * Set PolicyCode value
     * @param int[] $policyCode
     * @return \Travelport\Air\StructType\PolicyCodesList
     */
    public function setPolicyCode(array $policyCode): self
    {
        $this->PolicyCode = $policyCode;
        
        return $this;
    }
    /**
     * Add item to PolicyCode value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Travelport\Air\StructType\PolicyCodesList
     */
    public function addToPolicyCode(int $item): self
    {
        $this->PolicyCode[] = $item;
        
        return $this;
    }
}
