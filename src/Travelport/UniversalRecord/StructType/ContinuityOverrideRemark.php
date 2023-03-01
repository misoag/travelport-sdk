<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContinuityOverrideRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: A textual remark container to hold any printable text. (max 512 chars)
 * @subpackage Structs
 */
class ContinuityOverrideRemark extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - default: MCT
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    public ?string $Category = null;
    /**
     * Constructor method for ContinuityOverrideRemark
     * @uses ContinuityOverrideRemark::set_()
     * @uses ContinuityOverrideRemark::setCategory()
     * @param string $_
     * @param string $category
     */
    public function __construct(?string $_ = null, ?string $category = 'MCT')
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
     * @return \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark
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
     * @return \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark
     */
    public function setCategory(?string $category = 'MCT'): self
    {
        $this->Category = $category;
        
        return $this;
    }
}
