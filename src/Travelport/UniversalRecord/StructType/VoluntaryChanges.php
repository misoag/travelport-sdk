<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\Penalty|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Penalty $Penalty = null;
    /**
     * The VolChangeInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $VolChangeInd = null;
    /**
     * Constructor method for VoluntaryChanges
     * @uses VoluntaryChanges::setPenalty()
     * @uses VoluntaryChanges::setVolChangeInd()
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
     * @return \Travelport\UniversalRecord\StructType\VoluntaryChanges
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
     * @return \Travelport\UniversalRecord\StructType\VoluntaryChanges
     */
    public function setVolChangeInd(?bool $volChangeInd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($volChangeInd) && !is_bool($volChangeInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($volChangeInd, true), gettype($volChangeInd)), __LINE__);
        }
        $this->VolChangeInd = $volChangeInd;
        
        return $this;
    }
}
