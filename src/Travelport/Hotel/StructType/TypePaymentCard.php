<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePaymentCard StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for all credit and debit card information.
 * @subpackage Structs
 */
class TypePaymentCard extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PhoneNumber
     * @var \Travelport\Hotel\StructType\PhoneNumber|null
     */
    protected ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - documentation: The address to where the billing statements for this card are sent. Used for address verification purposes.
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    protected ?\Travelport\Hotel\StructType\TypeStructuredAddress $BillingAddress = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The 2 letter credit/ debit card type. | 2 letter Credit/Debit Card merchant type
     * - base: xs:string
     * - maxLength: 2
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: The associated credit/debit card number without spaces or dashes.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 13
     * - use: optional
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * The ExpDate
     * Meta information extracted from the WSDL
     * - documentation: The Expiration date of this card in YYYY-MM format.
     * - use: optional
     * @var int|null
     */
    public ?int $ExpDate = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The CVV
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    protected ?string $CVV = null;
    /**
     * The ApprovalCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $ApprovalCode = null;
    /**
     * Constructor method for typePaymentCard
     * @uses TypePaymentCard::setPhoneNumber()
     * @uses TypePaymentCard::setBillingAddress()
     * @uses TypePaymentCard::setType()
     * @uses TypePaymentCard::setNumber()
     * @uses TypePaymentCard::setExpDate()
     * @uses TypePaymentCard::setName()
     * @uses TypePaymentCard::setCVV()
     * @uses TypePaymentCard::setApprovalCode()
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $billingAddress
     * @param string $type
     * @param string $number
     * @param int $expDate
     * @param string $name
     * @param string $cVV
     * @param string $approvalCode
     */
    public function __construct(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Hotel\StructType\TypeStructuredAddress $billingAddress = null, ?string $type = null, ?string $number = null, ?int $expDate = null, ?string $name = null, ?string $cVV = null, ?string $approvalCode = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setBillingAddress($billingAddress)
            ->setType($type)
            ->setNumber($number)
            ->setExpDate($expDate)
            ->setName($name)
            ->setCVV($cVV)
            ->setApprovalCode($approvalCode);
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Hotel\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Hotel\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Hotel\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setPhoneNumber(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get BillingAddress value
     * @return \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public function getBillingAddress(): ?\Travelport\Hotel\StructType\TypeStructuredAddress
    {
        return $this->BillingAddress;
    }
    /**
     * Set BillingAddress value
     * @param \Travelport\Hotel\StructType\TypeStructuredAddress $billingAddress
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setBillingAddress(?\Travelport\Hotel\StructType\TypeStructuredAddress $billingAddress = null): self
    {
        $this->BillingAddress = $billingAddress;
        
        return $this;
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
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(2)
        if (!is_null($type) && mb_strlen((string) $type) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 2', mb_strlen((string) $type)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($type) && mb_strlen((string) $type) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $type)), __LINE__);
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
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($number) && mb_strlen((string) $number) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(13)
        if (!is_null($number) && mb_strlen((string) $number) < 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 13', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get ExpDate value
     * @return int|null
     */
    public function getExpDate(): ?int
    {
        return $this->ExpDate;
    }
    /**
     * Set ExpDate value
     * @param int $expDate
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setExpDate(?int $expDate = null): self
    {
        // validation for constraint: int
        if (!is_null($expDate) && !(is_int($expDate) || ctype_digit($expDate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expDate, true), gettype($expDate)), __LINE__);
        }
        $this->ExpDate = $expDate;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($name) && mb_strlen((string) $name) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get CVV value
     * @return string|null
     */
    public function getCVV(): ?string
    {
        return $this->CVV;
    }
    /**
     * Set CVV value
     * @param string $cVV
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setCVV(?string $cVV = null): self
    {
        // validation for constraint: string
        if (!is_null($cVV) && !is_string($cVV)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cVV, true), gettype($cVV)), __LINE__);
        }
        // validation for constraint: maxLength(4)
        if (!is_null($cVV) && mb_strlen((string) $cVV) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 4', mb_strlen((string) $cVV)), __LINE__);
        }
        $this->CVV = $cVV;
        
        return $this;
    }
    /**
     * Get ApprovalCode value
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->ApprovalCode;
    }
    /**
     * Set ApprovalCode value
     * @param string $approvalCode
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setApprovalCode(?string $approvalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalCode, true), gettype($approvalCode)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($approvalCode) && mb_strlen((string) $approvalCode) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $approvalCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($approvalCode) && mb_strlen((string) $approvalCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $approvalCode)), __LINE__);
        }
        $this->ApprovalCode = $approvalCode;
        
        return $this;
    }
}
