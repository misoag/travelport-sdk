<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coach StructType
 * Meta information extracted from the WSDL
 * - documentation: Captures rail seat map/coach map information
 * @subpackage Structs
 */
class Coach extends AbstractStructBase
{
    /**
     * The Characteristic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Characteristic
     * @var \Travelport\UniversalRecord\StructType\Characteristic|null
     */
    public ?\Travelport\UniversalRecord\StructType\Characteristic $Characteristic = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\UniversalRecord\StructType\Remark[]
     */
    public ?array $Remark = null;
    /**
     * The CoachNumber
     * Meta information extracted from the WSDL
     * - documentation: Coach number for which seat map/coach map is returned.
     * - use: optional
     * @var string|null
     */
    public ?string $CoachNumber = null;
    /**
     * Constructor method for Coach
     * @uses Coach::setCharacteristic()
     * @uses Coach::setRemark()
     * @uses Coach::setCoachNumber()
     * @param \Travelport\UniversalRecord\StructType\Characteristic $characteristic
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @param string $coachNumber
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Characteristic $characteristic = null, ?array $remark = null, ?string $coachNumber = null)
    {
        $this
            ->setCharacteristic($characteristic)
            ->setRemark($remark)
            ->setCoachNumber($coachNumber);
    }
    /**
     * Get Characteristic value
     * @return \Travelport\UniversalRecord\StructType\Characteristic|null
     */
    public function getCharacteristic(): ?\Travelport\UniversalRecord\StructType\Characteristic
    {
        return $this->Characteristic;
    }
    /**
     * Set Characteristic value
     * @param \Travelport\UniversalRecord\StructType\Characteristic $characteristic
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function setCharacteristic(?\Travelport\UniversalRecord\StructType\Characteristic $characteristic = null): self
    {
        $this->Characteristic = $characteristic;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\UniversalRecord\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\UniversalRecord\StructType\Remark[] $remark
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function setRemark(?array $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Remark $item
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function addToRemark(\Travelport\UniversalRecord\StructType\Remark $item): self
    {
        $this->Remark[] = $item;
        
        return $this;
    }
    /**
     * Get CoachNumber value
     * @return string|null
     */
    public function getCoachNumber(): ?string
    {
        return $this->CoachNumber;
    }
    /**
     * Set CoachNumber value
     * @param string $coachNumber
     * @return \Travelport\UniversalRecord\StructType\Coach
     */
    public function setCoachNumber(?string $coachNumber = null): self
    {
        $this->CoachNumber = $coachNumber;
        
        return $this;
    }
}
