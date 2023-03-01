<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PenaltyFareInformation StructType
 * @subpackage Structs
 */
class PenaltyFareInformation extends AbstractStructBase
{
    /**
     * The ProhibitPenaltyFares
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether user wants penalty fares to be returned.
     * - use: required
     * @var bool
     */
    public bool $ProhibitPenaltyFares;
    /**
     * The PenaltyInfo
     * Meta information extracted from the WSDL
     * - documentation: Penalty Limit if requested.
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\TypeFarePenalty|null
     */
    public ?\Travelport\Air\StructType\TypeFarePenalty $PenaltyInfo = null;
    /**
     * Constructor method for PenaltyFareInformation
     * @uses PenaltyFareInformation::setProhibitPenaltyFares()
     * @uses PenaltyFareInformation::setPenaltyInfo()
     * @param bool $prohibitPenaltyFares
     * @param \Travelport\Air\StructType\TypeFarePenalty $penaltyInfo
     */
    public function __construct(bool $prohibitPenaltyFares, ?\Travelport\Air\StructType\TypeFarePenalty $penaltyInfo = null)
    {
        $this
            ->setProhibitPenaltyFares($prohibitPenaltyFares)
            ->setPenaltyInfo($penaltyInfo);
    }
    /**
     * Get ProhibitPenaltyFares value
     * @return bool
     */
    public function getProhibitPenaltyFares(): bool
    {
        return $this->ProhibitPenaltyFares;
    }
    /**
     * Set ProhibitPenaltyFares value
     * @param bool $prohibitPenaltyFares
     * @return \Travelport\Air\StructType\PenaltyFareInformation
     */
    public function setProhibitPenaltyFares(bool $prohibitPenaltyFares): self
    {
        $this->ProhibitPenaltyFares = $prohibitPenaltyFares;
        
        return $this;
    }
    /**
     * Get PenaltyInfo value
     * @return \Travelport\Air\StructType\TypeFarePenalty|null
     */
    public function getPenaltyInfo(): ?\Travelport\Air\StructType\TypeFarePenalty
    {
        return $this->PenaltyInfo;
    }
    /**
     * Set PenaltyInfo value
     * @param \Travelport\Air\StructType\TypeFarePenalty $penaltyInfo
     * @return \Travelport\Air\StructType\PenaltyFareInformation
     */
    public function setPenaltyInfo(?\Travelport\Air\StructType\TypeFarePenalty $penaltyInfo = null): self
    {
        $this->PenaltyInfo = $penaltyInfo;
        
        return $this;
    }
}
