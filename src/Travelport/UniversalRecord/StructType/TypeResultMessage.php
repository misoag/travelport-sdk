<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeResultMessage StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to identify the results of a requests
 * @subpackage Structs
 */
class TypeResultMessage extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Code;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for typeResultMessage
     * @uses TypeResultMessage::setCode()
     * @uses TypeResultMessage::set_()
     * @uses TypeResultMessage::setType()
     * @param int $code
     * @param string $_
     * @param string $type
     */
    public function __construct(int $code, ?string $_ = null, ?string $type = null)
    {
        $this
            ->setCode($code)
            ->set_($_)
            ->setType($type);
    }
    /**
     * Get Code value
     * @return int
     */
    public function getCode(): int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage
     */
    public function setCode(int $code): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage
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
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage
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
