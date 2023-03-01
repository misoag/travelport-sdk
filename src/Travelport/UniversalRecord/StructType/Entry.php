<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $Reason = null;
    /**
     * The Description
     * @var string|null
     */
    public ?string $Description = null;
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
     * @return \Travelport\UniversalRecord\StructType\Entry
     */
    public function setReason(?string $reason = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\Entry
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
}
