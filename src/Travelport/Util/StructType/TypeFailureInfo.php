<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFailureInfo StructType
 * @subpackage Structs
 */
class TypeFailureInfo extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Code;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Message;
    /**
     * Constructor method for typeFailureInfo
     * @uses TypeFailureInfo::setCode()
     * @uses TypeFailureInfo::setMessage()
     * @param int $code
     * @param string $message
     */
    public function __construct(int $code, string $message)
    {
        $this
            ->setCode($code)
            ->setMessage($message);
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
     * @return \Travelport\Util\StructType\TypeFailureInfo
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
     * Get Message value
     * @return string
     */
    public function getMessage(): string
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Travelport\Util\StructType\TypeFailureInfo
     */
    public function setMessage(string $message): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->Message = $message;
        
        return $this;
    }
}
