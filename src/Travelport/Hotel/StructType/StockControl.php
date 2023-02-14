<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StockControl StructType
 * Meta information extracted from the WSDL
 * - documentation: The Stock Control Numbers related details of the MCO.
 * @subpackage Structs
 */
class StockControl extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Stock control type valid options include: Pending, Failed, Plain Paper, Blank, Suppressed.
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Stock control number.
     * - use: optional
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * Constructor method for StockControl
     * @uses StockControl::setType()
     * @uses StockControl::setNumber()
     * @param string $type
     * @param string $number
     */
    public function __construct(?string $type = null, ?string $number = null)
    {
        $this
            ->setType($type)
            ->setNumber($number);
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
     * @return \Travelport\Hotel\StructType\StockControl
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
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Hotel\StructType\StockControl
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
}
