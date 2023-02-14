<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraChild StructType
 * Meta information extracted from the WSDL
 * - documentation: Providers: 1p
 * @subpackage Structs
 */
class ExtraChild extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - documentation: The number of extra children in the room
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Additional information
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * Constructor method for ExtraChild
     * @uses ExtraChild::setCount()
     * @uses ExtraChild::setContent()
     * @param int $count
     * @param string $content
     */
    public function __construct(?int $count = null, ?string $content = null)
    {
        $this
            ->setCount($count)
            ->setContent($content);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Travelport\Hotel\StructType\ExtraChild
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Travelport\Hotel\StructType\ExtraChild
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
}
