<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public int $Code;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public string $Message;
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
     * @return \Travelport\Air\StructType\TypeFailureInfo
     */
    public function setCode(int $code): self
    {
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
     * @return \Travelport\Air\StructType\TypeFailureInfo
     */
    public function setMessage(string $message): self
    {
        $this->Message = $message;
        
        return $this;
    }
}
