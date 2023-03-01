<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Requisition StructType
 * Meta information extracted from the WSDL
 * - documentation: Requisition Form of Payment
 * @subpackage Structs
 */
class Requisition extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Requisition number used for accounting
     * - use: optional
     * @var string|null
     */
    public ?string $Number = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for Requisition
     * @uses Requisition::setNumber()
     * @uses Requisition::setCategory()
     * @uses Requisition::setType()
     * @param string $number
     * @param string $category
     * @param string $type
     */
    public function __construct(?string $number = null, ?string $category = null, ?string $type = null)
    {
        $this
            ->setNumber($number)
            ->setCategory($category)
            ->setType($type);
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Hotel\StructType\Requisition
     */
    public function setNumber(?string $number = null): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Hotel\StructType\Requisition
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\Requisition
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
