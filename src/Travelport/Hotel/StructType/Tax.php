<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected string $Amount;
    /**
     * The Percentage
     * Meta information extracted from the WSDL
     * - choice: Amount | Percentage
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Percentage;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Code identifying fee (e.g. agency fee, bed tax etc.). Refer to OPEN Travel Code List for Fee Tax Type. Possible values are OTA Code against FTT. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * - use: required
     * @var int
     */
    protected int $Code;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $EffectiveDate = null;
    /**
     * The ExpirationDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ExpirationDate = null;
    /**
     * The Term
     * Meta information extracted from the WSDL
     * - documentation: Indicates how the tax is applied. Values can be PerPerson, PerNight and PerStay
     * - use: optional
     * @var string|null
     */
    protected ?string $Term = null;
    /**
     * The CollectionFreq
     * Meta information extracted from the WSDL
     * - documentation: Indicates how often the tax is collected. Values can be Once or Daily
     * - use: optional
     * @var string|null
     */
    protected ?string $CollectionFreq = null;
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
    public function __construct(string $amount, float $percentage, int $code, ?string $effectiveDate = null, ?string $expirationDate = null, ?string $term = null, ?string $collectionFreq = null)
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
     * @return string
     */
    public function getAmount(): string
    {
        return isset($this->Amount) ? $this->Amount : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAmount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAmount method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAmountForChoiceConstraintsFromSetAmount($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Percentage',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Amount can\'t be set as the property %s is already set. Only one property must be set among these properties: Amount, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Amount value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $amount
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setAmount(string $amount): self
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        // validation for constraint: choice(Amount, Percentage)
        if ('' !== ($amountChoiceErrorMessage = self::validateAmountForChoiceConstraintsFromSetAmount($amount))) {
            throw new InvalidArgumentException($amountChoiceErrorMessage, __LINE__);
        }
        if (is_null($amount) || (is_array($amount) && empty($amount))) {
            unset($this->Amount);
        } else {
            $this->Amount = $amount;
        }
        
        return $this;
    }
    /**
     * Get Percentage value
     * @return float
     */
    public function getPercentage(): float
    {
        return isset($this->Percentage) ? $this->Percentage : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPercentage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPercentage method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePercentageForChoiceConstraintsFromSetPercentage($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Amount',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Percentage can\'t be set as the property %s is already set. Only one property must be set among these properties: Percentage, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Percentage value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param float $percentage
     * @return \Travelport\Hotel\StructType\Tax
     */
    public function setPercentage(float $percentage): self
    {
        // validation for constraint: float
        if (!is_null($percentage) && !(is_float($percentage) || is_numeric($percentage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percentage, true), gettype($percentage)), __LINE__);
        }
        // validation for constraint: choice(Amount, Percentage)
        if ('' !== ($percentageChoiceErrorMessage = self::validatePercentageForChoiceConstraintsFromSetPercentage($percentage))) {
            throw new InvalidArgumentException($percentageChoiceErrorMessage, __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($effectiveDate) && !is_string($effectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($effectiveDate, true), gettype($effectiveDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($term) && !is_string($term)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($term, true), gettype($term)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($collectionFreq) && !is_string($collectionFreq)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($collectionFreq, true), gettype($collectionFreq)), __LINE__);
        }
        $this->CollectionFreq = $collectionFreq;
        
        return $this;
    }
}
