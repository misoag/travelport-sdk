<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\Tax[]
     */
    public array $Tax;
    /**
     * Constructor method for TaxDetails
     * @uses TaxDetails::setTax()
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     */
    public function __construct(array $tax)
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return \Travelport\UniversalRecord\StructType\Tax[]
     */
    public function getTax(): array
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @param \Travelport\UniversalRecord\StructType\Tax[] $tax
     * @return \Travelport\UniversalRecord\StructType\TaxDetails
     */
    public function setTax(array $tax): self
    {
        $this->Tax = $tax;
        
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\Tax $item
     * @return \Travelport\UniversalRecord\StructType\TaxDetails
     */
    public function addToTax(\Travelport\UniversalRecord\StructType\Tax $item): self
    {
        $this->Tax[] = $item;
        
        return $this;
    }
}
