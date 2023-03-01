<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifiedRange StructType
 * Meta information extracted from the WSDL
 * - documentation: Only search for modifications that occured between the two dates (inclusive).
 * @subpackage Structs
 */
class ModifiedRange extends AbstractStructBase
{
    /**
     * The ModifiedStart
     * @var string|null
     */
    public ?string $ModifiedStart = null;
    /**
     * The ModifiedEnd
     * @var string|null
     */
    public ?string $ModifiedEnd = null;
    /**
     * Constructor method for ModifiedRange
     * @uses ModifiedRange::setModifiedStart()
     * @uses ModifiedRange::setModifiedEnd()
     * @param string $modifiedStart
     * @param string $modifiedEnd
     */
    public function __construct(?string $modifiedStart = null, ?string $modifiedEnd = null)
    {
        $this
            ->setModifiedStart($modifiedStart)
            ->setModifiedEnd($modifiedEnd);
    }
    /**
     * Get ModifiedStart value
     * @return string|null
     */
    public function getModifiedStart(): ?string
    {
        return $this->ModifiedStart;
    }
    /**
     * Set ModifiedStart value
     * @param string $modifiedStart
     * @return \Travelport\UniversalRecord\StructType\ModifiedRange
     */
    public function setModifiedStart(?string $modifiedStart = null): self
    {
        $this->ModifiedStart = $modifiedStart;
        
        return $this;
    }
    /**
     * Get ModifiedEnd value
     * @return string|null
     */
    public function getModifiedEnd(): ?string
    {
        return $this->ModifiedEnd;
    }
    /**
     * Set ModifiedEnd value
     * @param string $modifiedEnd
     * @return \Travelport\UniversalRecord\StructType\ModifiedRange
     */
    public function setModifiedEnd(?string $modifiedEnd = null): self
    {
        $this->ModifiedEnd = $modifiedEnd;
        
        return $this;
    }
}
