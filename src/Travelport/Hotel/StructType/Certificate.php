<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Certificate StructType
 * Meta information extracted from the WSDL
 * - documentation: Certificate Form of Payment
 * @subpackage Structs
 */
class Certificate extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: The Certificate number
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The monetary value of the certificate. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The DiscountAmount
     * Meta information extracted from the WSDL
     * - documentation: The monetary discount amount of this certificate. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $DiscountAmount = null;
    /**
     * The DiscountPercentage
     * Meta information extracted from the WSDL
     * - documentation: The percentage discount value of this certificate.
     * - use: optional
     * @var int|null
     */
    public ?int $DiscountPercentage = null;
    /**
     * The NotValidBefore
     * Meta information extracted from the WSDL
     * - documentation: The date that this certificate becomes valid.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidBefore = null;
    /**
     * The NotValidAfter
     * Meta information extracted from the WSDL
     * - documentation: The date that this certificate expires.
     * - use: optional
     * @var string|null
     */
    public ?string $NotValidAfter = null;
    /**
     * Constructor method for Certificate
     * @uses Certificate::setNumber()
     * @uses Certificate::setAmount()
     * @uses Certificate::setDiscountAmount()
     * @uses Certificate::setDiscountPercentage()
     * @uses Certificate::setNotValidBefore()
     * @uses Certificate::setNotValidAfter()
     * @param string $number
     * @param string $amount
     * @param string $discountAmount
     * @param int $discountPercentage
     * @param string $notValidBefore
     * @param string $notValidAfter
     */
    public function __construct(string $number, ?string $amount = null, ?string $discountAmount = null, ?int $discountPercentage = null, ?string $notValidBefore = null, ?string $notValidAfter = null)
    {
        $this
            ->setNumber($number)
            ->setAmount($amount)
            ->setDiscountAmount($discountAmount)
            ->setDiscountPercentage($discountPercentage)
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Hotel\StructType\Certificate
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
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
     * @return \Travelport\Hotel\StructType\Certificate
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get DiscountAmount value
     * @return string|null
     */
    public function getDiscountAmount(): ?string
    {
        return $this->DiscountAmount;
    }
    /**
     * Set DiscountAmount value
     * @param string $discountAmount
     * @return \Travelport\Hotel\StructType\Certificate
     */
    public function setDiscountAmount(?string $discountAmount = null): self
    {
        $this->DiscountAmount = $discountAmount;
        
        return $this;
    }
    /**
     * Get DiscountPercentage value
     * @return int|null
     */
    public function getDiscountPercentage(): ?int
    {
        return $this->DiscountPercentage;
    }
    /**
     * Set DiscountPercentage value
     * @param int $discountPercentage
     * @return \Travelport\Hotel\StructType\Certificate
     */
    public function setDiscountPercentage(?int $discountPercentage = null): self
    {
        $this->DiscountPercentage = $discountPercentage;
        
        return $this;
    }
    /**
     * Get NotValidBefore value
     * @return string|null
     */
    public function getNotValidBefore(): ?string
    {
        return $this->NotValidBefore;
    }
    /**
     * Set NotValidBefore value
     * @param string $notValidBefore
     * @return \Travelport\Hotel\StructType\Certificate
     */
    public function setNotValidBefore(?string $notValidBefore = null): self
    {
        $this->NotValidBefore = $notValidBefore;
        
        return $this;
    }
    /**
     * Get NotValidAfter value
     * @return string|null
     */
    public function getNotValidAfter(): ?string
    {
        return $this->NotValidAfter;
    }
    /**
     * Set NotValidAfter value
     * @param string $notValidAfter
     * @return \Travelport\Hotel\StructType\Certificate
     */
    public function setNotValidAfter(?string $notValidAfter = null): self
    {
        $this->NotValidAfter = $notValidAfter;
        
        return $this;
    }
}
