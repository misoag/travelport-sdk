<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public int $Code;
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
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
     * @return \Travelport\Air\StructType\TypeResultMessage
     */
    public function setCode(int $code): self
    {
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
     * @return \Travelport\Air\StructType\TypeResultMessage
     */
    public function set_(?string $_ = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeResultMessage
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
