<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $Type;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - documentation: Supplier specific category.
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
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
     * @uses \Travelport\UniversalRecord\EnumType\TypeRailSegmentInfo::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeRailSegmentInfo::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\RailSegmentInfo
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeRailSegmentInfo::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeRailSegmentInfo', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeRailSegmentInfo::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailSegmentInfo
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\RailSegmentInfo
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
}
