<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?string $Type = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Stock control number.
     * - use: optional
     * @var string|null
     */
    public ?string $Number = null;
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
     * @return \Travelport\UniversalRecord\StructType\StockControl
     */
    public function setType(?string $type = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\StockControl
     */
    public function setNumber(?string $number = null): self
    {
        $this->Number = $number;
        
        return $this;
    }
}
