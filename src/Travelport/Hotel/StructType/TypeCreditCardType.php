<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeCreditCardType StructType
 * @subpackage Structs
 */
class TypeCreditCardType extends TypePaymentCard
{
    /**
     * The ExtendedPayment
     * Meta information extracted from the WSDL
     * - documentation: Used for American Express (AX) and other credit cards, e.g., Visa (VI) and Master card (CA), that allow Extended Payment, subject to the BSP market rule.
     * - use: optional
     * @var string|null
     */
    protected ?string $ExtendedPayment = null;
    /**
     * The CustomerReference
     * Meta information extracted from the WSDL
     * - documentation: Agencies use this to pass the traveler information to the credit card company.
     * - use: optional
     * @var string|null
     */
    protected ?string $CustomerReference = null;
    /**
     * The AcceptanceOverride
     * Meta information extracted from the WSDL
     * - documentation: Override airline restriction on the credit card.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AcceptanceOverride = null;
    /**
     * The ThirdPartyPayment
     * Meta information extracted from the WSDL
     * - documentation: If true, this indicates that the credit card holder is not one of the passengers.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $ThirdPartyPayment = null;
    /**
     * The BankName
     * Meta information extracted from the WSDL
     * - documentation: Issuing bank name for this credit card
     * @var string|null
     */
    protected ?string $BankName = null;
    /**
     * The BankCountryCode
     * Meta information extracted from the WSDL
     * - documentation: ISO Country code associated with the issuing bank | 2 Letter Country code
     * - base: xs:string
     * - length: 2
     * @var string|null
     */
    protected ?string $BankCountryCode = null;
    /**
     * The BankStateCode
     * Meta information extracted from the WSDL
     * - documentation: State code associated with the issuing bank. | Defines the State code.
     * - base: xs:string
     * - maxLength: 6
     * @var string|null
     */
    protected ?string $BankStateCode = null;
    /**
     * The Enett
     * Meta information extracted from the WSDL
     * - documentation: Acceptable values are true or false. If set to true it will denote that the credit card used has been issued through Enett. For all other credit card payments this value will be set to false.
     * - default: false
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Enett = null;
    /**
     * Constructor method for typeCreditCardType
     * @uses TypeCreditCardType::setExtendedPayment()
     * @uses TypeCreditCardType::setCustomerReference()
     * @uses TypeCreditCardType::setAcceptanceOverride()
     * @uses TypeCreditCardType::setThirdPartyPayment()
     * @uses TypeCreditCardType::setBankName()
     * @uses TypeCreditCardType::setBankCountryCode()
     * @uses TypeCreditCardType::setBankStateCode()
     * @uses TypeCreditCardType::setEnett()
     * @param string $extendedPayment
     * @param string $customerReference
     * @param bool $acceptanceOverride
     * @param bool $thirdPartyPayment
     * @param string $bankName
     * @param string $bankCountryCode
     * @param string $bankStateCode
     * @param bool $enett
     */
    public function __construct(?string $extendedPayment = null, ?string $customerReference = null, ?bool $acceptanceOverride = null, ?bool $thirdPartyPayment = false, ?string $bankName = null, ?string $bankCountryCode = null, ?string $bankStateCode = null, ?bool $enett = false)
    {
        $this
            ->setExtendedPayment($extendedPayment)
            ->setCustomerReference($customerReference)
            ->setAcceptanceOverride($acceptanceOverride)
            ->setThirdPartyPayment($thirdPartyPayment)
            ->setBankName($bankName)
            ->setBankCountryCode($bankCountryCode)
            ->setBankStateCode($bankStateCode)
            ->setEnett($enett);
    }
    /**
     * Get ExtendedPayment value
     * @return string|null
     */
    public function getExtendedPayment(): ?string
    {
        return $this->ExtendedPayment;
    }
    /**
     * Set ExtendedPayment value
     * @param string $extendedPayment
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setExtendedPayment(?string $extendedPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($extendedPayment) && !is_string($extendedPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extendedPayment, true), gettype($extendedPayment)), __LINE__);
        }
        $this->ExtendedPayment = $extendedPayment;
        
        return $this;
    }
    /**
     * Get CustomerReference value
     * @return string|null
     */
    public function getCustomerReference(): ?string
    {
        return $this->CustomerReference;
    }
    /**
     * Set CustomerReference value
     * @param string $customerReference
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setCustomerReference(?string $customerReference = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReference, true), gettype($customerReference)), __LINE__);
        }
        $this->CustomerReference = $customerReference;
        
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
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
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
    /**
     * Get ThirdPartyPayment value
     * @return bool|null
     */
    public function getThirdPartyPayment(): ?bool
    {
        return $this->ThirdPartyPayment;
    }
    /**
     * Set ThirdPartyPayment value
     * @param bool $thirdPartyPayment
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setThirdPartyPayment(?bool $thirdPartyPayment = false): self
    {
        // validation for constraint: boolean
        if (!is_null($thirdPartyPayment) && !is_bool($thirdPartyPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($thirdPartyPayment, true), gettype($thirdPartyPayment)), __LINE__);
        }
        $this->ThirdPartyPayment = $thirdPartyPayment;
        
        return $this;
    }
    /**
     * Get BankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->BankName;
    }
    /**
     * Set BankName value
     * @param string $bankName
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->BankName = $bankName;
        
        return $this;
    }
    /**
     * Get BankCountryCode value
     * @return string|null
     */
    public function getBankCountryCode(): ?string
    {
        return $this->BankCountryCode;
    }
    /**
     * Set BankCountryCode value
     * @param string $bankCountryCode
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setBankCountryCode(?string $bankCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankCountryCode) && !is_string($bankCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCountryCode, true), gettype($bankCountryCode)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($bankCountryCode) && mb_strlen((string) $bankCountryCode) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $bankCountryCode)), __LINE__);
        }
        $this->BankCountryCode = $bankCountryCode;
        
        return $this;
    }
    /**
     * Get BankStateCode value
     * @return string|null
     */
    public function getBankStateCode(): ?string
    {
        return $this->BankStateCode;
    }
    /**
     * Set BankStateCode value
     * @param string $bankStateCode
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setBankStateCode(?string $bankStateCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankStateCode) && !is_string($bankStateCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankStateCode, true), gettype($bankStateCode)), __LINE__);
        }
        // validation for constraint: maxLength(6)
        if (!is_null($bankStateCode) && mb_strlen((string) $bankStateCode) > 6) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 6', mb_strlen((string) $bankStateCode)), __LINE__);
        }
        $this->BankStateCode = $bankStateCode;
        
        return $this;
    }
    /**
     * Get Enett value
     * @return bool|null
     */
    public function getEnett(): ?bool
    {
        return $this->Enett;
    }
    /**
     * Set Enett value
     * @param bool $enett
     * @return \Travelport\Hotel\StructType\TypeCreditCardType
     */
    public function setEnett(?bool $enett = false): self
    {
        // validation for constraint: boolean
        if (!is_null($enett) && !is_bool($enett)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enett, true), gettype($enett)), __LINE__);
        }
        $this->Enett = $enett;
        
        return $this;
    }
}
