<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestKeyMappings StructType
 * Meta information extracted from the WSDL
 * - documentation: All the elements for which mapping key sent in the request is different from the mapping key comes in the response.
 * @subpackage Structs
 */
class RequestKeyMappings extends AbstractStructBase
{
    /**
     * The KeyMapping
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: KeyMapping
     * @var \Travelport\Air\StructType\KeyMapping[]
     */
    public ?array $KeyMapping = null;
    /**
     * Constructor method for RequestKeyMappings
     * @uses RequestKeyMappings::setKeyMapping()
     * @param \Travelport\Air\StructType\KeyMapping[] $keyMapping
     */
    public function __construct(?array $keyMapping = null)
    {
        $this
            ->setKeyMapping($keyMapping);
    }
    /**
     * Get KeyMapping value
     * @return \Travelport\Air\StructType\KeyMapping[]
     */
    public function getKeyMapping(): ?array
    {
        return $this->KeyMapping;
    }
    /**
     * Set KeyMapping value
     * @param \Travelport\Air\StructType\KeyMapping[] $keyMapping
     * @return \Travelport\Air\StructType\RequestKeyMappings
     */
    public function setKeyMapping(?array $keyMapping = null): self
    {
        $this->KeyMapping = $keyMapping;
        
        return $this;
    }
    /**
     * Add item to KeyMapping value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\KeyMapping $item
     * @return \Travelport\Air\StructType\RequestKeyMappings
     */
    public function addToKeyMapping(\Travelport\Air\StructType\KeyMapping $item): self
    {
        $this->KeyMapping[] = $item;
        
        return $this;
    }
}
