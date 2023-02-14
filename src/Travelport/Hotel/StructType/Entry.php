<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Entry StructType
 * @subpackage Structs
 */
class Entry extends AbstractStructBase
{
    /**
     * The Reason
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * The Description
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for Entry
     * @uses Entry::setReason()
     * @uses Entry::setDescription()
     * @param string $reason
     * @param string $description
     */
    public function __construct(?string $reason = null, ?string $description = null)
    {
        $this
            ->setReason($reason)
            ->setDescription($description);
    }
    /**
     * Get Reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }
    /**
     * Set Reason value
     * @param string $reason
     * @return \Travelport\Hotel\StructType\Entry
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Hotel\StructType\Entry
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
