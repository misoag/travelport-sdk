<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomView StructType
 * @subpackage Structs
 */
class RoomView extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: OTA code represents different hotel room views. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: optional
     * @var int|null
     */
    protected ?int $Code = null;
    /**
     * Constructor method for RoomView
     * @uses RoomView::setCode()
     * @param int $code
     */
    public function __construct(?int $code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\Hotel\StructType\RoomView
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
}
