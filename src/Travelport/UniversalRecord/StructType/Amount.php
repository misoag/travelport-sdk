<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amount StructType
 * Meta information extracted from the WSDL
 * - type: typeMoney
 * - use: optional | required
 * @subpackage Structs
 */
class Amount extends AbstractStructBase
{
    /**
     * The Type
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The AmountDuePaid
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $AmountDuePaid = null;
    /**
     * Constructor method for Amount
     * @uses Amount::setType()
     * @uses Amount::setAmountDuePaid()
     * @param string $type
     * @param string $amountDuePaid
     */
    public function __construct(?string $type = null, ?string $amountDuePaid = null)
    {
        $this
            ->setType($type)
            ->setAmountDuePaid($amountDuePaid);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\Amount
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get AmountDuePaid value
     * @return string|null
     */
    public function getAmountDuePaid(): ?string
    {
        return $this->AmountDuePaid;
    }
    /**
     * Set AmountDuePaid value
     * @param string $amountDuePaid
     * @return \Travelport\UniversalRecord\StructType\Amount
     */
    public function setAmountDuePaid(?string $amountDuePaid = null): self
    {
        // validation for constraint: string
        if (!is_null($amountDuePaid) && !is_string($amountDuePaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amountDuePaid, true), gettype($amountDuePaid)), __LINE__);
        }
        $this->AmountDuePaid = $amountDuePaid;
        
        return $this;
    }
}
