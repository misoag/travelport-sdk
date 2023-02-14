<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $Key;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Value;
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
     * @return \StructType\MetaData
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($key) && mb_strlen((string) $key) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $key)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($key) && mb_strlen((string) $key) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $key)), __LINE__);
        }
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
     * @return \StructType\MetaData
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($value) && mb_strlen((string) $value) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen((string) $value)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($value) && mb_strlen((string) $value) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
