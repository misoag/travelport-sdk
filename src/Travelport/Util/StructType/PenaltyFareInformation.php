<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected bool $ProhibitPenaltyFares;
    /**
     * The PenaltyInfo
     * Meta information extracted from the WSDL
     * - documentation: Penalty Limit if requested.
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeFarePenalty|null
     */
    protected ?\Travelport\Util\StructType\TypeFarePenalty $PenaltyInfo = null;
    /**
     * Constructor method for PenaltyFareInformation
     * @uses PenaltyFareInformation::setProhibitPenaltyFares()
     * @uses PenaltyFareInformation::setPenaltyInfo()
     * @param bool $prohibitPenaltyFares
     * @param \Travelport\Util\StructType\TypeFarePenalty $penaltyInfo
     */
    public function __construct(bool $prohibitPenaltyFares, ?\Travelport\Util\StructType\TypeFarePenalty $penaltyInfo = null)
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
     * @return \Travelport\Util\StructType\PenaltyFareInformation
     */
    public function setProhibitPenaltyFares(bool $prohibitPenaltyFares): self
    {
        // validation for constraint: boolean
        if (!is_null($prohibitPenaltyFares) && !is_bool($prohibitPenaltyFares)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prohibitPenaltyFares, true), gettype($prohibitPenaltyFares)), __LINE__);
        }
        $this->ProhibitPenaltyFares = $prohibitPenaltyFares;
        
        return $this;
    }
    /**
     * Get PenaltyInfo value
     * @return \Travelport\Util\StructType\TypeFarePenalty|null
     */
    public function getPenaltyInfo(): ?\Travelport\Util\StructType\TypeFarePenalty
    {
        return $this->PenaltyInfo;
    }
    /**
     * Set PenaltyInfo value
     * @param \Travelport\Util\StructType\TypeFarePenalty $penaltyInfo
     * @return \Travelport\Util\StructType\PenaltyFareInformation
     */
    public function setPenaltyInfo(?\Travelport\Util\StructType\TypeFarePenalty $penaltyInfo = null): self
    {
        $this->PenaltyInfo = $penaltyInfo;
        
        return $this;
    }
}
