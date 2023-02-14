<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Criteria StructType
 * @subpackage Structs
 */
class Criteria extends AbstractStructBase
{
    /**
     * The Order
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 8
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $Order;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * Constructor method for Criteria
     * @uses Criteria::setOrder()
     * @uses Criteria::setType()
     * @param int $order
     * @param string $type
     */
    public function __construct(int $order, string $type)
    {
        $this
            ->setOrder($order)
            ->setType($type);
    }
    /**
     * Get Order value
     * @return int
     */
    public function getOrder(): int
    {
        return $this->Order;
    }
    /**
     * Set Order value
     * @param int $order
     * @return \Travelport\Hotel\StructType\Criteria
     */
    public function setOrder(int $order): self
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        // validation for constraint: maxInclusive(8)
        if (!is_null($order) && $order > 8) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 8', var_export($order, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($order) && $order < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($order, true)), __LINE__);
        }
        $this->Order = $order;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Hotel\StructType\Criteria
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
