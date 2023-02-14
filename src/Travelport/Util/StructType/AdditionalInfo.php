<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Displays additional text about the service. | Any additional information specific to a type of value being returned. | Used for Character Strings, length 1 to 255.
 * - base: xs:string
 * - maxLength: 255
 * - minLength: 1
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
    protected string $Category;
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: This will identify different additionalInfo.
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for AdditionalInfo
     * @uses AdditionalInfo::setCategory()
     * @uses AdditionalInfo::set_()
     * @uses AdditionalInfo::setType()
     * @param string $category
     * @param string $_
     * @param string $type
     */
    public function __construct(string $category, ?string $_ = null, ?string $type = null)
    {
        $this
            ->setCategory($category)
            ->set_($_)
            ->setType($type);
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
     * @return \Travelport\Util\StructType\AdditionalInfo
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
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
     * @return \Travelport\Util\StructType\AdditionalInfo
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($_) && mb_strlen((string) $_) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $_)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($_) && mb_strlen((string) $_) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $_)), __LINE__);
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
     * @return \Travelport\Util\StructType\AdditionalInfo
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
