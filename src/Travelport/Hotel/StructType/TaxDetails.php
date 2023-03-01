<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetails StructType
 * @subpackage Structs
 */
class TaxDetails extends AbstractStructBase
{
    /**
     * The Tax
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: Tax
     * @var \Travelport\Hotel\StructType\Tax[]
     */
    public array $Tax;
    /**
     * Constructor method for TaxDetails
     * @uses TaxDetails::setTax()
     * @param \Travelport\Hotel\StructType\Tax[] $tax
     */
    public function __construct(array $tax)
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return \Travelport\Hotel\StructType\Tax[]
     */
    public function getTax(): array
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \Travelport\Hotel\StructType\Tax[] $tax
     * @return \Travelport\Hotel\StructType\TaxDetails
     */
    public function setTax(array $tax): self
    {
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\Tax $item
     * @return \Travelport\Hotel\StructType\TaxDetails
     */
    public function addToTax(\Travelport\Hotel\StructType\Tax $item): self
    {
        $this->Tax[] = $item;
        
        return $this;
    }
}
