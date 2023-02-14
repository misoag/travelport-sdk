<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\Penalty|null
     */
    protected ?\Travelport\Util\StructType\Penalty $Penalty = null;
    /**
     * The VolChangeInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $VolChangeInd = null;
    /**
     * Constructor method for VoluntaryRefunds
     * @uses VoluntaryRefunds::setPenalty()
     * @uses VoluntaryRefunds::setVolChangeInd()
     * @param \Travelport\Util\StructType\Penalty $penalty
     * @param bool $volChangeInd
     */
    public function __construct(?\Travelport\Util\StructType\Penalty $penalty = null, ?bool $volChangeInd = null)
    {
        $this
            ->setPenalty($penalty)
            ->setVolChangeInd($volChangeInd);
    }
    /**
     * Get Penalty value
     * @return \Travelport\Util\StructType\Penalty|null
     */
    public function getPenalty(): ?\Travelport\Util\StructType\Penalty
    {
        return $this->Penalty;
    }
    /**
     * Set Penalty value
     * @param \Travelport\Util\StructType\Penalty $penalty
     * @return \Travelport\Util\StructType\VoluntaryRefunds
     */
    public function setPenalty(?\Travelport\Util\StructType\Penalty $penalty = null): self
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
     * @return \Travelport\Util\StructType\VoluntaryRefunds
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
