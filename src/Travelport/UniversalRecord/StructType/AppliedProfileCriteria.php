<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AppliedProfileCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler Applied Profile Id for Searching misc traveler information
 * @subpackage Structs
 */
class AppliedProfileCriteria extends AbstractStructBase
{
    /**
     * The TravelerProfileId
     * Meta information extracted from the WSDL
     * - documentation: A type for unique party identifiers of any party role.
     * - base: common:typeProfileID
     * @var int|null
     */
    protected ?int $TravelerProfileId = null;
    /**
     * Constructor method for AppliedProfileCriteria
     * @uses AppliedProfileCriteria::setTravelerProfileId()
     * @param int $travelerProfileId
     */
    public function __construct(?int $travelerProfileId = null)
    {
        $this
            ->setTravelerProfileId($travelerProfileId);
    }
    /**
     * Get TravelerProfileId value
     * @return int|null
     */
    public function getTravelerProfileId(): ?int
    {
        return $this->TravelerProfileId;
    }
    /**
     * Set TravelerProfileId value
     * @param int $travelerProfileId
     * @return \Travelport\UniversalRecord\StructType\AppliedProfileCriteria
     */
    public function setTravelerProfileId(?int $travelerProfileId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelerProfileId) && !(is_int($travelerProfileId) || ctype_digit($travelerProfileId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelerProfileId, true), gettype($travelerProfileId)), __LINE__);
        }
        $this->TravelerProfileId = $travelerProfileId;
        
        return $this;
    }
}
