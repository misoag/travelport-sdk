<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?int $MaxWait = null;
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
     * @return \Travelport\Util\StructType\InitialAsynchResult
     */
    public function setMaxWait(?int $maxWait = null): self
    {
        // validation for constraint: int
        if (!is_null($maxWait) && !(is_int($maxWait) || ctype_digit($maxWait))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxWait, true), gettype($maxWait)), __LINE__);
        }
        $this->MaxWait = $maxWait;
        
        return $this;
    }
}
