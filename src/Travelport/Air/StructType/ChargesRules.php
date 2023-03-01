<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargesRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Reference associated with the BookingRules
 * @subpackage Structs
 */
class ChargesRules extends AbstractStructBase
{
    /**
     * The VoluntaryChanges
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\VoluntaryChanges[]
     */
    public ?array $VoluntaryChanges = null;
    /**
     * The VoluntaryRefunds
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\VoluntaryRefunds[]
     */
    public ?array $VoluntaryRefunds = null;
    /**
     * Constructor method for ChargesRules
     * @uses ChargesRules::setVoluntaryChanges()
     * @uses ChargesRules::setVoluntaryRefunds()
     * @param \Travelport\Air\StructType\VoluntaryChanges[] $voluntaryChanges
     * @param \Travelport\Air\StructType\VoluntaryRefunds[] $voluntaryRefunds
     */
    public function __construct(?array $voluntaryChanges = null, ?array $voluntaryRefunds = null)
    {
        $this
            ->setVoluntaryChanges($voluntaryChanges)
            ->setVoluntaryRefunds($voluntaryRefunds);
    }
    /**
     * Get VoluntaryChanges value
     * @return \Travelport\Air\StructType\VoluntaryChanges[]
     */
    public function getVoluntaryChanges(): ?array
    {
        return $this->VoluntaryChanges;
    }
    /**
     * Set VoluntaryChanges value
     * @param \Travelport\Air\StructType\VoluntaryChanges[] $voluntaryChanges
     * @return \Travelport\Air\StructType\ChargesRules
     */
    public function setVoluntaryChanges(?array $voluntaryChanges = null): self
    {
        $this->VoluntaryChanges = $voluntaryChanges;
        
        return $this;
    }
    /**
     * Add item to VoluntaryChanges value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\VoluntaryChanges $item
     * @return \Travelport\Air\StructType\ChargesRules
     */
    public function addToVoluntaryChanges(\Travelport\Air\StructType\VoluntaryChanges $item): self
    {
        $this->VoluntaryChanges[] = $item;
        
        return $this;
    }
    /**
     * Get VoluntaryRefunds value
     * @return \Travelport\Air\StructType\VoluntaryRefunds[]
     */
    public function getVoluntaryRefunds(): ?array
    {
        return $this->VoluntaryRefunds;
    }
    /**
     * Set VoluntaryRefunds value
     * @param \Travelport\Air\StructType\VoluntaryRefunds[] $voluntaryRefunds
     * @return \Travelport\Air\StructType\ChargesRules
     */
    public function setVoluntaryRefunds(?array $voluntaryRefunds = null): self
    {
        $this->VoluntaryRefunds = $voluntaryRefunds;
        
        return $this;
    }
    /**
     * Add item to VoluntaryRefunds value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\VoluntaryRefunds $item
     * @return \Travelport\Air\StructType\ChargesRules
     */
    public function addToVoluntaryRefunds(\Travelport\Air\StructType\VoluntaryRefunds $item): self
    {
        $this->VoluntaryRefunds[] = $item;
        
        return $this;
    }
}
