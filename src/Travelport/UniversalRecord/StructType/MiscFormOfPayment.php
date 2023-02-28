<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscFormOfPayment StructType
 * Meta information extracted from the WSDL
 * - documentation: Miscellaneous Form of Payments
 * @subpackage Structs
 */
class MiscFormOfPayment extends AbstractStructBase
{
    /**
     * The Category
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Category;
    /**
     * The CreditCardType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $CreditCardType = null;
    /**
     * The CreditCardNumber
     * Meta information extracted from the WSDL
     * - documentation: The associated credit/debit card number without spaces or dashes.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 13
     * - use: optional
     * @var string|null
     */
    protected ?string $CreditCardNumber = null;
    /**
     * The ExpDate
     * Meta information extracted from the WSDL
     * - documentation: The Expiration date of this card in YYYY-MM format.
     * - use: optional
     * @var int|null
     */
    protected ?string $expDate = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: Any free form text which may be associated with the Miscellaneous Form of Payment. This text may be provider or GDS specific
     * - use: optional
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The AcceptanceOverride
     * Meta information extracted from the WSDL
     * - documentation: Override airline restriction on the credit card.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AcceptanceOverride = null;
    /**
     * Constructor method for MiscFormOfPayment
     * @uses MiscFormOfPayment::setCategory()
     * @uses MiscFormOfPayment::setCreditCardType()
     * @uses MiscFormOfPayment::setCreditCardNumber()
     * @uses MiscFormOfPayment::setExpDate()
     * @uses MiscFormOfPayment::setText()
     * @uses MiscFormOfPayment::setAcceptanceOverride()
     * @param string $category
     * @param string $creditCardType
     * @param string $creditCardNumber
     * @param string $expDate
     * @param string $text
     * @param bool $acceptanceOverride
     */
    public function __construct(string $category, ?string $creditCardType = null, ?string $creditCardNumber = null, ?string $expDate = null, ?string $text = null, ?bool $acceptanceOverride = null)
    {
        $this
            ->setCategory($category)
            ->setCreditCardType($creditCardType)
            ->setCreditCardNumber($creditCardNumber)
            ->setExpDate($expDate)
            ->setText($text)
            ->setAcceptanceOverride($acceptanceOverride);
    }
    /**
     * Get Category value
     * @return string
     */
    public function getCategory(): string
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment
     */
    public function setCategory(string $category): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->Category = $category;
        
        return $this;
    }
    /**
     * Get CreditCardType value
     * @return string|null
     */
    public function getCreditCardType(): ?string
    {
        return $this->CreditCardType;
    }
    /**
     * Set CreditCardType value
     * @param string $creditCardType
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment
     */
    public function setCreditCardType(?string $creditCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardType) && !is_string($creditCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardType, true), gettype($creditCardType)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($creditCardType) && mb_strlen((string) $creditCardType) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $creditCardType)), __LINE__);
        }
        $this->CreditCardType = $creditCardType;
        
        return $this;
    }
    /**
     * Get CreditCardNumber value
     * @return string|null
     */
    public function getCreditCardNumber(): ?string
    {
        return $this->CreditCardNumber;
    }
    /**
     * Set CreditCardNumber value
     * @param string $creditCardNumber
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment
     */
    public function setCreditCardNumber(?string $creditCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardNumber) && !is_string($creditCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardNumber, true), gettype($creditCardNumber)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($creditCardNumber) && mb_strlen((string) $creditCardNumber) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $creditCardNumber)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($creditCardNumber) && mb_strlen((string) $creditCardNumber) < 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen((string) $creditCardNumber)), __LINE__);
        }
        $this->CreditCardNumber = $creditCardNumber;
        
        return $this;
    }
    /**
     * Get ExpDate value
     * @return int|null
     */
    public function getExpDate(): ?string
    {
        return $this->ExpDate;
    }
    /**
     * Set ExpDate value
     * @param string $expDate
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment
     */
    public function setExpDate(?string $expDate = null): self
    {
        
        $this->ExpDate = $expDate;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get AcceptanceOverride value
     * @return bool|null
     */
    public function getAcceptanceOverride(): ?bool
    {
        return $this->AcceptanceOverride;
    }
    /**
     * Set AcceptanceOverride value
     * @param bool $acceptanceOverride
     * @return \Travelport\UniversalRecord\StructType\MiscFormOfPayment
     */
    public function setAcceptanceOverride(?bool $acceptanceOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($acceptanceOverride) && !is_bool($acceptanceOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($acceptanceOverride, true), gettype($acceptanceOverride)), __LINE__);
        }
        $this->AcceptanceOverride = $acceptanceOverride;
        
        return $this;
    }
}
