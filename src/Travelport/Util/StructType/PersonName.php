<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonName StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer name field
 * @subpackage Structs
 */
class PersonName extends AbstractStructBase
{
    /**
     * The Last
     * Meta information extracted from the WSDL
     * - documentation: Person Last Name. | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Last;
    /**
     * The First
     * Meta information extracted from the WSDL
     * - documentation: Person First Name. | Used for Character Strings, length 1 to 64.
     * - base: xs:string
     * - maxLength: 64
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $First = null;
    /**
     * The Prefix
     * Meta information extracted from the WSDL
     * - documentation: Person Name prefix. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Prefix = null;
    /**
     * Constructor method for PersonName
     * @uses PersonName::setLast()
     * @uses PersonName::setFirst()
     * @uses PersonName::setPrefix()
     * @param string $last
     * @param string $first
     * @param string $prefix
     */
    public function __construct(string $last, ?string $first = null, ?string $prefix = null)
    {
        $this
            ->setLast($last)
            ->setFirst($first)
            ->setPrefix($prefix);
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
     * @return \Travelport\Util\StructType\PersonName
     */
    public function setLast(string $last): self
    {
        // validation for constraint: string
        if (!is_null($last) && !is_string($last)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($last, true), gettype($last)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($last) && mb_strlen((string) $last) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $last)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($last) && mb_strlen((string) $last) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $last)), __LINE__);
        }
        $this->Last = $last;
        
        return $this;
    }
    /**
     * Get First value
     * @return string|null
     */
    public function getFirst(): ?string
    {
        return $this->First;
    }
    /**
     * Set First value
     * @param string $first
     * @return \Travelport\Util\StructType\PersonName
     */
    public function setFirst(?string $first = null): self
    {
        // validation for constraint: string
        if (!is_null($first) && !is_string($first)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($first, true), gettype($first)), __LINE__);
        }
        // validation for constraint: maxLength(64)
        if (!is_null($first) && mb_strlen((string) $first) > 64) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 64', mb_strlen((string) $first)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($first) && mb_strlen((string) $first) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $first)), __LINE__);
        }
        $this->First = $first;
        
        return $this;
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix(): ?string
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Travelport\Util\StructType\PersonName
     */
    public function setPrefix(?string $prefix = null): self
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefix, true), gettype($prefix)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($prefix) && mb_strlen((string) $prefix) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $prefix)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($prefix) && mb_strlen((string) $prefix) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $prefix)), __LINE__);
        }
        $this->Prefix = $prefix;
        
        return $this;
    }
}
