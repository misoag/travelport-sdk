<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preference StructType
 * Meta information extracted from the WSDL
 * - documentation: Preferences of the segment related to the profile (Agent, Branch, etc.).
 * @subpackage Structs
 */
class Preference extends AbstractStructBase
{
    /**
     * The Owner
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Owner;
    /**
     * Constructor method for Preference
     * @uses Preference::setOwner()
     * @param string $owner
     */
    public function __construct(string $owner)
    {
        $this
            ->setOwner($owner);
    }
    /**
     * Get Owner value
     * @return string
     */
    public function getOwner(): string
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param string $owner
     * @return \Travelport\UniversalRecord\StructType\Preference
     */
    public function setOwner(string $owner): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->Owner = $owner;
        
        return $this;
    }
}
