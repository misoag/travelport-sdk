<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rating StructType
 * Meta information extracted from the WSDL
 * - documentation: Definition of the seat rating. Providers: 1G, 1V, 1P, 1J
 * @subpackage Structs
 */
class Rating extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: Numerical rating of the seat from 1 to 5 with 1 being bad and 5 being good. Providers: 1G, 1V, 1P, 1J
     * - use: required
     * @var int
     */
    protected int $Number;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for Rating
     * @uses Rating::setNumber()
     * @uses Rating::set_()
     * @param int $number
     * @param string $_
     */
    public function __construct(int $number, ?string $_ = null)
    {
        $this
            ->setNumber($number)
            ->set_($_);
    }
    /**
     * Get Number value
     * @return int
     */
    public function getNumber(): int
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Travelport\UniversalRecord\StructType\Rating
     */
    public function setNumber(int $number): self
    {
        // validation for constraint: int
        if (!is_null($number) && !(is_int($number) || ctype_digit($number))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->Number = $number;
        
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
     * @return \Travelport\UniversalRecord\StructType\Rating
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
}
