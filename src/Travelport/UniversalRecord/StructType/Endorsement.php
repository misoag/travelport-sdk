<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Endorsement StructType
 * Meta information extracted from the WSDL
 * - documentation: Restrictions or instructions about the fare or ticket | Endorsement. Size can be up to 100 characters
 * @subpackage Structs
 */
class Endorsement extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Endorsement type.Size can be up to 256 characters
     * - base: xs:string
     * - maxLength: 256
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for Endorsement
     * @uses Endorsement::setValue()
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this
            ->setValue($value);
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
     * @return \Travelport\UniversalRecord\StructType\Endorsement
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: maxLength(256)
        if (!is_null($value) && mb_strlen((string) $value) > 256) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 256', mb_strlen((string) $value)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($value) && mb_strlen((string) $value) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
