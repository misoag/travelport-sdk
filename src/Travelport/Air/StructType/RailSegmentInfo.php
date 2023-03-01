<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RailSegmentInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Holds the ExtraSegmentInfo and VendorMessages from RCH response. | A textual remark container to hold any printable text. (max 512 chars)
 * @subpackage Structs
 */
class RailSegmentInfo extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Either Extra for ExtraSegmentInfo or Vendor for VendorMessages.
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Supplier specific category.
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * Constructor method for RailSegmentInfo
     * @uses RailSegmentInfo::setType()
     * @uses RailSegmentInfo::set_()
     * @uses RailSegmentInfo::setCategory()
     * @param string $type
     * @param string $_
     * @param string $category
     */
    public function __construct(string $type, ?string $_ = null, ?string $category = null)
    {
        $this
            ->setType($type)
            ->set_($_)
            ->setCategory($category);
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
     * @return \Travelport\Air\StructType\RailSegmentInfo
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
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
     * @return \Travelport\Air\StructType\RailSegmentInfo
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
     * @return \Travelport\Air\StructType\RailSegmentInfo
     */
    public function setCategory(?string $category = null): self
    {
        $this->Category = $category;
        
        return $this;
    }
}
