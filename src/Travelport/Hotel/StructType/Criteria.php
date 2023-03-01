<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public int $Order;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Type;
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
        $this->Type = $type;
        
        return $this;
    }
}
