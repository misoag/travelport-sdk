<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoluntaryRefunds StructType
 * @subpackage Structs
 */
class VoluntaryRefunds extends AbstractStructBase
{
    /**
     * The Penalty
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Penalty
     * @var \Travelport\UniversalRecord\StructType\Penalty|null
     */
    public ?\Travelport\UniversalRecord\StructType\Penalty $Penalty = null;
    /**
     * The VolChangeInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $VolChangeInd = null;
    /**
     * Constructor method for VoluntaryRefunds
     * @uses VoluntaryRefunds::setPenalty()
     * @uses VoluntaryRefunds::setVolChangeInd()
     * @param \Travelport\UniversalRecord\StructType\Penalty $penalty
     * @param bool $volChangeInd
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\Penalty $penalty = null, ?bool $volChangeInd = null)
    {
        $this
            ->setPenalty($penalty)
            ->setVolChangeInd($volChangeInd);
    }
    /**
     * Get Penalty value
     * @return \Travelport\UniversalRecord\StructType\Penalty|null
     */
    public function getPenalty(): ?\Travelport\UniversalRecord\StructType\Penalty
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Travelport\UniversalRecord\StructType\Penalty $penalty
     * @return \Travelport\UniversalRecord\StructType\VoluntaryRefunds
     */
    public function setPenalty(?\Travelport\UniversalRecord\StructType\Penalty $penalty = null): self
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
     * @return \Travelport\UniversalRecord\StructType\VoluntaryRefunds
     */
    public function setVolChangeInd(?bool $volChangeInd = null): self
    {
        $this->VolChangeInd = $volChangeInd;
        
        return $this;
    }
}
