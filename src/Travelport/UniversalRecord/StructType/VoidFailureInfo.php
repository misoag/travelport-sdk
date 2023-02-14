<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidFailureInfo StructType
 * @subpackage Structs
 */
class VoidFailureInfo extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $TicketNumber;
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - use: optional
     * @var int|null
     */
    protected ?int $Code = null;
    /**
     * Constructor method for VoidFailureInfo
     * @uses VoidFailureInfo::setTicketNumber()
     * @uses VoidFailureInfo::set_()
     * @uses VoidFailureInfo::setCode()
     * @param string $ticketNumber
     * @param string $_
     * @param int $code
     */
    public function __construct(string $ticketNumber, ?string $_ = null, ?int $code = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->set_($_)
            ->setCode($code);
    }
    /**
     * Get TicketNumber value
     * @return string
     */
    public function getTicketNumber(): string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\UniversalRecord\StructType\VoidFailureInfo
     */
    public function setTicketNumber(string $ticketNumber): self
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNumber, true), gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        
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
     * @return \Travelport\UniversalRecord\StructType\VoidFailureInfo
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
     * @return \Travelport\UniversalRecord\StructType\VoidFailureInfo
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
