<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameOverride StructType
 * Meta information extracted from the WSDL
 * - documentation: To be used if the name is different from booking travelers in the PNR
 * @subpackage Structs
 */
class NameOverride extends AbstractStructBase
{
    /**
     * The First
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $First;
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Last;
    /**
     * The Age
     * Meta information extracted from the WSDL
     * - documentation: Age.
     * - use: optional
     * @var int|null
     */
    protected ?int $Age = null;
    /**
     * Constructor method for NameOverride
     * @uses NameOverride::setFirst()
     * @uses NameOverride::setLast()
     * @uses NameOverride::setAge()
     * @param string $first
     * @param string $last
     * @param int $age
     */
    public function __construct(string $first, string $last, ?int $age = null)
    {
        $this
            ->setFirst($first)
            ->setLast($last)
            ->setAge($age);
    }
    /**
     * Get First value
     * @return string
     */
    public function getFirst(): string
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param string $first
     * @return \StructType\NameOverride
     */
    public function setFirst(string $first): self
    {
        // validation for constraint: string
        if (!is_null($first) && !is_string($first)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first, true), gettype($first)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($first) && mb_strlen((string) $first) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $first)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($first) && mb_strlen((string) $first) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $first)), __LINE__);
        }
        $this->First = $first;
        
        return $this;
    }
    /**
     * Get Last value
     * @return string
     */
    public function getLast(): string
    {
        return $this->Last;
    }
    /**
     * Set Last value
     * @param string $last
     * @return \StructType\NameOverride
     */
    public function setLast(string $last): self
    {
        // validation for constraint: string
        if (!is_null($last) && !is_string($last)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last, true), gettype($last)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($last) && mb_strlen((string) $last) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $last)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($last) && mb_strlen((string) $last) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $last)), __LINE__);
        }
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get Age value
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param int $age
     * @return \StructType\NameOverride
     */
    public function setAge(?int $age = null): self
    {
        // validation for constraint: int
        if (!is_null($age) && !(is_int($age) || ctype_digit($age))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($age, true), gettype($age)), __LINE__);
        }
        $this->Age = $age;
        
        return $this;
    }
}
