<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitialAsynchResult StructType
 * @subpackage Structs
 */
class InitialAsynchResult extends AbstractStructBase
{
    /**
     * The MaxWait
     * Meta information extracted from the WSDL
     * - documentation: Max wait time in seconds.
     * - use: optional
     * @var int|null
     */
    public ?int $MaxWait = null;
    /**
     * Constructor method for InitialAsynchResult
     * @uses InitialAsynchResult::setMaxWait()
     * @param int $maxWait
     */
    public function __construct(?int $maxWait = null)
    {
        $this
            ->setMaxWait($maxWait);
    }
    /**
     * Get MaxWait value
     * @return int|null
     */
    public function getMaxWait(): ?int
    {
        return $this->MaxWait;
    }
    /**
     * Set MaxWait value
     * @param int $maxWait
     * @return \Travelport\UniversalRecord\StructType\InitialAsynchResult
     */
    public function setMaxWait(?int $maxWait = null): self
    {
        $this->MaxWait = $maxWait;
        
        return $this;
    }
}
