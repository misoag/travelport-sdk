<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareRulesRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response to an AirFareRuleReq.
 * @subpackage Structs
 */
class AirFareRulesRsp extends BaseRsp
{
    /**
     * The FareRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRule
     * @var \Travelport\Air\StructType\FareRule[]
     */
    public ?array $FareRule = null;
    /**
     * Constructor method for AirFareRulesRsp
     * @uses AirFareRulesRsp::setFareRule()
     * @param \Travelport\Air\StructType\FareRule[] $fareRule
     */
    public function __construct(?array $fareRule = null)
    {
        $this
            ->setFareRule($fareRule);
    }
    /**
     * Get FareRule value
     * @return \Travelport\Air\StructType\FareRule[]
     */
    public function getFareRule(): ?array
    {
        return $this->FareRule;
    }
    /**
     * Set FareRule value
     * @param \Travelport\Air\StructType\FareRule[] $fareRule
     * @return \Travelport\Air\StructType\AirFareRulesRsp
     */
    public function setFareRule(?array $fareRule = null): self
    {
        $this->FareRule = $fareRule;
        
        return $this;
    }
    /**
     * Add item to FareRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareRule $item
     * @return \Travelport\Air\StructType\AirFareRulesRsp
     */
    public function addToFareRule(\Travelport\Air\StructType\FareRule $item): self
    {
        $this->FareRule[] = $item;
        
        return $this;
    }
}
