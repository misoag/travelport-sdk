<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MetaData StructType
 * Meta information extracted from the WSDL
 * - documentation: Extra data to elaborate the parent element. This data is primarily informative and is not persisted.
 * @subpackage Structs
 */
class MetaData extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Value;
    /**
     * Constructor method for MetaData
     * @uses MetaData::setKey()
     * @uses MetaData::setValue()
     * @param string $key
     * @param string $value
     */
    public function __construct(string $key, string $value)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\MetaData
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\Air\StructType\MetaData
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
