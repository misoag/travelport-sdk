<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JourneyRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: A Remark for a Journey.
 * @subpackage Structs
 */
class JourneyRemark extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * Constructor method for JourneyRemark
     * @uses JourneyRemark::set_()
     * @uses JourneyRemark::setCategory()
     * @param string $_
     * @param string $category
     */
    public function __construct(?string $_ = null, ?string $category = null)
    {
        $this
            ->set_($_)
            ->setCategory($category);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\Air\StructType\JourneyRemark
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\Air\StructType\JourneyRemark
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
}
