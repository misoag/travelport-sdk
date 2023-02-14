<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyMapping StructType
 * Meta information extracted from the WSDL
 * - documentation: Element for which mapping key sent in the request is different from the mapping key comes in the response.
 * @subpackage Structs
 */
class KeyMapping extends AbstractStructBase
{
    /**
     * The ElementName
     * Meta information extracted from the WSDL
     * - documentation: Name of the element.
     * - use: required
     * @var string
     */
    protected string $ElementName;
    /**
     * The OriginalKey
     * Meta information extracted from the WSDL
     * - documentation: The mapping key which is sent in the request.
     * - use: required
     * @var string
     */
    protected string $OriginalKey;
    /**
     * The NewKey
     * Meta information extracted from the WSDL
     * - documentation: The mapping key that comes in the response.
     * - use: required
     * @var string
     */
    protected string $NewKey;
    /**
     * Constructor method for KeyMapping
     * @uses KeyMapping::setElementName()
     * @uses KeyMapping::setOriginalKey()
     * @uses KeyMapping::setNewKey()
     * @param string $elementName
     * @param string $originalKey
     * @param string $newKey
     */
    public function __construct(string $elementName, string $originalKey, string $newKey)
    {
        $this
            ->setElementName($elementName)
            ->setOriginalKey($originalKey)
            ->setNewKey($newKey);
    }
    /**
     * Get ElementName value
     * @return string
     */
    public function getElementName(): string
    {
        return $this->ElementName;
    }
    /**
     * Set ElementName value
     * @param string $elementName
     * @return \Travelport\UniversalRecord\StructType\KeyMapping
     */
    public function setElementName(string $elementName): self
    {
        // validation for constraint: string
        if (!is_null($elementName) && !is_string($elementName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($elementName, true), gettype($elementName)), __LINE__);
        }
        $this->ElementName = $elementName;
        
        return $this;
    }
    /**
     * Get OriginalKey value
     * @return string
     */
    public function getOriginalKey(): string
    {
        return $this->OriginalKey;
    }
    /**
     * Set OriginalKey value
     * @param string $originalKey
     * @return \Travelport\UniversalRecord\StructType\KeyMapping
     */
    public function setOriginalKey(string $originalKey): self
    {
        // validation for constraint: string
        if (!is_null($originalKey) && !is_string($originalKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalKey, true), gettype($originalKey)), __LINE__);
        }
        $this->OriginalKey = $originalKey;
        
        return $this;
    }
    /**
     * Get NewKey value
     * @return string
     */
    public function getNewKey(): string
    {
        return $this->NewKey;
    }
    /**
     * Set NewKey value
     * @param string $newKey
     * @return \Travelport\UniversalRecord\StructType\KeyMapping
     */
    public function setNewKey(string $newKey): self
    {
        // validation for constraint: string
        if (!is_null($newKey) && !is_string($newKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newKey, true), gettype($newKey)), __LINE__);
        }
        $this->NewKey = $newKey;
        
        return $this;
    }
}
