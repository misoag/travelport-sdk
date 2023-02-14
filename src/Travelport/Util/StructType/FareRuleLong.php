<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected int $Category;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
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
     * @return \Travelport\Util\StructType\FareRuleLong
     */
    public function setCategory(int $category): self
    {
        // validation for constraint: int
        if (!is_null($category) && !(is_int($category) || ctype_digit($category))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FareRuleLong
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
     * @return \Travelport\Util\StructType\FareRuleLong
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
