<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoluntaryChanges StructType
 * @subpackage Structs
 */
class VoluntaryChanges extends AbstractStructBase
{
    /**
     * The Penalty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Penalty
     * @var \Travelport\Air\StructType\Penalty|null
     */
    public ?\Travelport\Air\StructType\Penalty $Penalty = null;
    /**
     * The VolChangeInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $VolChangeInd = null;
    /**
     * Constructor method for VoluntaryChanges
     * @uses VoluntaryChanges::setPenalty()
     * @uses VoluntaryChanges::setVolChangeInd()
     * @param \Travelport\Air\StructType\Penalty $penalty
     * @param bool $volChangeInd
     */
    public function __construct(?\Travelport\Air\StructType\Penalty $penalty = null, ?bool $volChangeInd = null)
    {
        $this
            ->setPenalty($penalty)
            ->setVolChangeInd($volChangeInd);
    }
    /**
     * Get Penalty value
     * @return \Travelport\Air\StructType\Penalty|null
     */
    public function getPenalty(): ?\Travelport\Air\StructType\Penalty
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Travelport\Air\StructType\Penalty $penalty
     * @return \Travelport\Air\StructType\VoluntaryChanges
     */
    public function setPenalty(?\Travelport\Air\StructType\Penalty $penalty = null): self
    {
        $this->Penalty = $penalty;
        
        return $this;
    }
    /**
     * Get VolChangeInd value
     * @return bool|null
     */
    public function getVolChangeInd(): ?bool
    {
        return $this->VolChangeInd;
    }
    /**
     * Set VolChangeInd value
     * @param bool $volChangeInd
     * @return \Travelport\Air\StructType\VoluntaryChanges
     */
    public function setVolChangeInd(?bool $volChangeInd = null): self
    {
        $this->VolChangeInd = $volChangeInd;
        
        return $this;
    }
}
