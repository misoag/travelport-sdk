<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelBedding StructType
 * Meta information extracted from the WSDL
 * - documentation: Specify desired bedding
 * @subpackage Structs
 */
class HotelBedding extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Queen, King, double, etc | Bedding types
     * - base: xs:string
     * - maxLength: 15
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The NumberOfBeds
     * Meta information extracted from the WSDL
     * - documentation: Number of beds of desired Type in room. Use '0' to delete the hotel Optional Beds ( Only RA RC CR )
     * - use: optional
     * @var int|null
     */
    protected ?int $NumberOfBeds = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Fee for bed type. Providers: 1g/1v/1p | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Additional information Providers: 1p
     * - use: optional
     * @var string|null
     */
    protected ?string $Content = null;
    /**
     * Constructor method for HotelBedding
     * @uses HotelBedding::setType()
     * @uses HotelBedding::setNumberOfBeds()
     * @uses HotelBedding::setAmount()
     * @uses HotelBedding::setContent()
     * @param string $type
     * @param int $numberOfBeds
     * @param string $amount
     * @param string $content
     */
    public function __construct(string $type, ?int $numberOfBeds = null, ?string $amount = null, ?string $content = null)
    {
        $this
            ->setType($type)
            ->setNumberOfBeds($numberOfBeds)
            ->setAmount($amount)
            ->setContent($content);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\HotelBedding
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($type) && mb_strlen((string) $type) > 15) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get NumberOfBeds value
     * @return int|null
     */
    public function getNumberOfBeds(): ?int
    {
        return $this->NumberOfBeds;
    }
    /**
     * Set NumberOfBeds value
     * @param int $numberOfBeds
     * @return \StructType\HotelBedding
     */
    public function setNumberOfBeds(?int $numberOfBeds = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfBeds) && !(is_int($numberOfBeds) || ctype_digit($numberOfBeds))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfBeds, true), gettype($numberOfBeds)), __LINE__);
        }
        $this->NumberOfBeds = $numberOfBeds;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \StructType\HotelBedding
     */
    public function setAmount(?string $amount = null): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \StructType\HotelBedding
     */
    public function setContent(?string $content = null): self
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->Content = $content;
        
        return $this;
    }
}
