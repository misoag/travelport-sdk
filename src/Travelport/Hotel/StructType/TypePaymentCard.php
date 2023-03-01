<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?\Travelport\Hotel\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The BillingAddress
     * Meta information extracted from the WSDL
     * - documentation: The address to where the billing statements for this card are sent. Used for address verification purposes.
     * - minOccurs: 0
     * @var \Travelport\Hotel\StructType\TypeStructuredAddress|null
     */
    public ?\Travelport\Hotel\StructType\TypeStructuredAddress $BillingAddress = null;
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
    public ?string $Type = null;
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
    public ?string $Number = null;
    /**
     * The ExpDate
     * Meta information extracted from the WSDL
     * - documentation: The Expiration date of this card in YYYY-MM format.
     * - use: optional
     * @var string|null
     */
    public ?string $ExpDate = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 128
     * - use: optional
     * @var string|null
     */
    public ?string $Name = null;
    /**
     * The CVV
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 4
     * - use: optional
     * @var string|null
     */
    public ?string $CVV = null;
    /**
     * The ApprovalCode
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 16
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $ApprovalCode = null;
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
     * @param string $expDate
     * @param string $name
     * @param string $cVV
     * @param string $approvalCode
     */
    public function __construct(?\Travelport\Hotel\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Hotel\StructType\TypeStructuredAddress $billingAddress = null, ?string $type = null, ?string $number = null, ?string $expDate = null, ?string $name = null, ?string $cVV = null, ?string $approvalCode = null)
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
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get ExpDate value
     * @return string|null
     */
    public function getExpDate(): ?string
    {
        return $this->ExpDate;
    }
    /**
     * Set ExpDate value
     * @param string $expDate
     * @return \Travelport\Hotel\StructType\TypePaymentCard
     */
    public function setExpDate(?string $expDate = null): self
    {
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
        $this->ApprovalCode = $approvalCode;
        
        return $this;
    }
}
