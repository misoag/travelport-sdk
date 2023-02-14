<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $ModifiedStart = null;
    /**
     * The ModifiedEnd
     * @var string|null
     */
    protected ?string $ModifiedEnd = null;
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
        // validation for constraint: string
        if (!is_null($modifiedStart) && !is_string($modifiedStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedStart, true), gettype($modifiedStart)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($modifiedEnd) && !is_string($modifiedEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedEnd, true), gettype($modifiedEnd)), __LINE__);
        }
        $this->ModifiedEnd = $modifiedEnd;
        
        return $this;
    }
}
