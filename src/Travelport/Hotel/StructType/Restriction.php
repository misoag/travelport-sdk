<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Restriction StructType
 * Meta information extracted from the WSDL
 * - documentation: Which activities are supported for a particular element
 * @subpackage Structs
 */
class Restriction extends AbstractStructBase
{
    /**
     * The Operation
     * Meta information extracted from the WSDL
     * - documentation: The operation that is restricted
     * - use: required
     * @var string
     */
    protected string $Operation;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - documentation: The reason it is restricted
     * - use: optional
     * @var string|null
     */
    protected ?string $Reason = null;
    /**
     * Constructor method for Restriction
     * @uses Restriction::setOperation()
     * @uses Restriction::setReason()
     * @param string $operation
     * @param string $reason
     */
    public function __construct(string $operation, ?string $reason = null)
    {
        $this
            ->setOperation($operation)
            ->setReason($reason);
    }
    /**
     * Get Operation value
     * @return string
     */
    public function getOperation(): string
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Travelport\Hotel\StructType\Restriction
     */
    public function setOperation(string $operation): self
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\Restriction
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
}
