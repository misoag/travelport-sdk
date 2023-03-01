<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * Meta information extracted from the WSDL
 * - type: common:typeMoney
 * - use: optional
 * @subpackage Structs
 */
class Tax extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - choice: Amount | Percentage
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public string $Amount;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - choice: Amount | Percentage
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public float $Percentage;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Code identifying fee (e.g. agency fee, bed tax etc.). Refer to OPEN Travel Code List for Fee Tax Type. Possible values are OTA Code against FTT. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: required
     * @var int
     */
    public int $Code;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $EffectiveDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $ExpirationDate = null;
    /**
     * The Term
     * Meta information extracted from the WSDL
     * - documentation: Indicates how the tax is applied. Values can be PerPerson, PerNight and PerStay
     * - use: optional
     * @var string|null
     */
    public ?string $Term = null;
    /**
     * The CollectionFreq
     * Meta information extracted from the WSDL
     * - documentation: Indicates how often the tax is collected. Values can be Once or Daily
     * - use: optional
     * @var string|null
     */
    public ?string $CollectionFreq = null;
    /**
     * Constructor method for Tax
     * @uses Tax::setAmount()
     * @uses Tax::setPercentage()
     * @uses Tax::setCode()
     * @uses Tax::setEffectiveDate()
     * @uses Tax::setExpirationDate()
     * @uses Tax::setTerm()
     * @uses Tax::setCollectionFreq()
     * @param string $amount
     * @param float $percentage
     * @param int $code
     * @param string $effectiveDate
     * @param string $expirationDate
     * @param string $term
     * @param string $collectionFreq
     */
    public function __construct(string $amount = null, float $percentage = null, int $code, ?string $effectiveDate = null, ?string $expirationDate = null, ?string $term = null, ?string $collectionFreq = null)
    {
        $this
            ->setAmount($amount)
            ->setPercentage($percentage)
            ->setCode($code)
            ->setEffectiveDate($effectiveDate)
            ->setExpirationDate($expirationDate)
            ->setTerm($term)
            ->setCollectionFreq($collectionFreq);
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount ?? null;
    }
    /**
     * Set Amount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param string $amount
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setAmount(string $amount = null): self
    {
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage(): ?float
    {
        return $this->Percentage ?? null;
    }
    /**
     * Set Percentage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param float $percentage
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setPercentage(float $percentage = null): self
    {
        if (is_null($percentage) || (is_array($percentage) && empty($percentage))) {
            unset($this->Percentage);
        } else {
            $this->Percentage = $percentage;
        }
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setCode(int $code): self
    {
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get EffectiveDate value
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->EffectiveDate;
    }
    /**
     * Set EffectiveDate value
     * @param string $effectiveDate
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        $this->ExpirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get Term value
     * @return string|null
     */
    public function getTerm(): ?string
    {
        return $this->Term;
    }
    /**
     * Set Term value
     * @param string $term
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setTerm(?string $term = null): self
    {
        $this->Term = $term;
        
        return $this;
    }
    /**
     * Get CollectionFreq value
     * @return string|null
     */
    public function getCollectionFreq(): ?string
    {
        return $this->CollectionFreq;
    }
    /**
     * Set CollectionFreq value
     * @param string $collectionFreq
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setCollectionFreq(?string $collectionFreq = null): self
    {
        $this->CollectionFreq = $collectionFreq;
        
        return $this;
    }
}
