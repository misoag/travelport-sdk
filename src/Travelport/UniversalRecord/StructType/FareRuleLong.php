<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRuleLong StructType
 * Meta information extracted from the WSDL
 * - documentation: Long Text Fare Rule
 * @subpackage Structs
 */
class FareRuleLong extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public int $Category;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for FareRuleLong
     * @uses FareRuleLong::setCategory()
     * @uses FareRuleLong::set_()
     * @uses FareRuleLong::setType()
     * @param int $category
     * @param string $_
     * @param string $type
     */
    public function __construct(int $category, ?string $_ = null, ?string $type = null)
    {
        $this
            ->setCategory($category)
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get Category value
     * @return int
     */
    public function getCategory(): int
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param int $category
     * @return \Travelport\UniversalRecord\StructType\FareRuleLong
     */
    public function setCategory(int $category): self
    {
        $this->Category = $category;
        
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
     * @return \Travelport\UniversalRecord\StructType\FareRuleLong
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
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
     * @return \Travelport\UniversalRecord\StructType\FareRuleLong
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
