<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeVoucherInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Information pertaining to the payment of a Vehicle Rental.
 * @subpackage Structs
 */
class TypeVoucherInformation extends AbstractStructBase
{
    /**
     * The VoucherType
     * Meta information extracted from the WSDL
     * - documentation: Specifies if the Voucher is for Full Credit or a Group/Day or a Monetary Amount or RegularVoucher.
     * - use: required
     * @var string
     */
    protected string $VoucherType;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Amount associated with the Voucher. | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Amount = null;
    /**
     * The ConfirmationNumber
     * Meta information extracted from the WSDL
     * - documentation: Confirmation from the vendor for the voucher
     * - use: optional
     * @var string|null
     */
    protected ?string $ConfirmationNumber = null;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - documentation: Associated account name for the voucher
     * - use: optional
     * @var string|null
     */
    protected ?string $AccountName = null;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: To advise car associates of the voucher number and store in the car segment. It is required when VoucherType selected as "RegularVoucher" for 1P only. | Used for Character Strings, length 1 to 16.
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $Number = null;
    /**
     * Constructor method for typeVoucherInformation
     * @uses TypeVoucherInformation::setVoucherType()
     * @uses TypeVoucherInformation::setAmount()
     * @uses TypeVoucherInformation::setConfirmationNumber()
     * @uses TypeVoucherInformation::setAccountName()
     * @uses TypeVoucherInformation::setNumber()
     * @param string $voucherType
     * @param string $amount
     * @param string $confirmationNumber
     * @param string $accountName
     * @param string $number
     */
    public function __construct(string $voucherType, ?string $amount = null, ?string $confirmationNumber = null, ?string $accountName = null, ?string $number = null)
    {
        $this
            ->setVoucherType($voucherType)
            ->setAmount($amount)
            ->setConfirmationNumber($confirmationNumber)
            ->setAccountName($accountName)
            ->setNumber($number);
    }
    /**
     * Get VoucherType value
     * @return string
     */
    public function getVoucherType(): string
    {
        return $this->VoucherType;
    }
    /**
     * Set VoucherType value
     * @uses \Travelport\UniversalRecord\EnumType\TypeVoucherType::valueIsValid()
     * @uses \Travelport\UniversalRecord\EnumType\TypeVoucherType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $voucherType
     * @return \Travelport\UniversalRecord\StructType\TypeVoucherInformation
     */
    public function setVoucherType(string $voucherType): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\UniversalRecord\EnumType\TypeVoucherType::valueIsValid($voucherType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\UniversalRecord\EnumType\TypeVoucherType', is_array($voucherType) ? implode(', ', $voucherType) : var_export($voucherType, true), implode(', ', \Travelport\UniversalRecord\EnumType\TypeVoucherType::getValidValues())), __LINE__);
        }
        $this->VoucherType = $voucherType;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVoucherInformation
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
     * Get ConfirmationNumber value
     * @return string|null
     */
    public function getConfirmationNumber(): ?string
    {
        return $this->ConfirmationNumber;
    }
    /**
     * Set ConfirmationNumber value
     * @param string $confirmationNumber
     * @return \Travelport\UniversalRecord\StructType\TypeVoucherInformation
     */
    public function setConfirmationNumber(?string $confirmationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationNumber) && !is_string($confirmationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationNumber, true), gettype($confirmationNumber)), __LINE__);
        }
        $this->ConfirmationNumber = $confirmationNumber;
        
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Travelport\UniversalRecord\StructType\TypeVoucherInformation
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeVoucherInformation
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: maxLength(16)
        if (!is_null($number) && mb_strlen((string) $number) > 16) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 16', mb_strlen((string) $number)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($number) && mb_strlen((string) $number) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
}
