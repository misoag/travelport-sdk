<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $_ = null;
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - default: MCT
     * - maxLength: 10
     * - use: optional
     * @var string|null
     */
    protected ?string $Category = null;
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
     * @return \Travelport\UniversalRecord\StructType\ContinuityOverrideRemark
     */
    public function setCategory(?string $category = 'MCT'): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($category) && mb_strlen((string) $category) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
}
