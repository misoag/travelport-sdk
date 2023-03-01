<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Displays additional text about the service.
 * @subpackage Structs
 */
class AdditionalInfo extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: The category code is the code the AdditionalInfo text came from, e.g. S5 or S7.
     * - use: required
     * @var string
     */
    public string $Category;
    /**
     * Constructor method for AdditionalInfo
     * @uses AdditionalInfo::setCategory()
     * @param string $category
     */
    public function __construct(string $category)
    {
        $this
            ->setCategory($category);
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\Air\StructType\AdditionalInfo
     */
    public function setCategory(string $category): self
    {
        $this->Category = $category;
        
        return $this;
    }
}
