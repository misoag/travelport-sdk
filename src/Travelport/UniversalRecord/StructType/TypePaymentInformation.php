<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typePaymentInformation StructType
 * @subpackage Structs
 */
class TypePaymentInformation extends AbstractStructBase
{
    /**
     * The Voucher
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeVoucherInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\TypeVoucherInformation $Voucher = null;
    /**
     * The BillingNumber
     * Meta information extracted from the WSDL
     * - documentation: A Billing Number that may be associated to the Voucher.
     * - use: optional
     * @var string|null
     */
    public ?string $BillingNumber = null;
    /**
     * The BillingReferenceNumber
     * Meta information extracted from the WSDL
     * - documentation: A Number Assigned for Billing reconciliation processes that may also include a Corporate Account ID
     * - use: optional
     * @var string|null
     */
    public ?string $BillingReferenceNumber = null;
    /**
     * The PrePayment
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 90
     * - use: optional
     * @var string|null
     */
    public ?string $PrePayment = null;
    /**
     * Constructor method for typePaymentInformation
     * @uses TypePaymentInformation::setVoucher()
     * @uses TypePaymentInformation::setBillingNumber()
     * @uses TypePaymentInformation::setBillingReferenceNumber()
     * @uses TypePaymentInformation::setPrePayment()
     * @param \Travelport\UniversalRecord\StructType\TypeVoucherInformation $voucher
     * @param string $billingNumber
     * @param string $billingReferenceNumber
     * @param string $prePayment
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\TypeVoucherInformation $voucher = null, ?string $billingNumber = null, ?string $billingReferenceNumber = null, ?string $prePayment = null)
    {
        $this
            ->setVoucher($voucher)
            ->setBillingNumber($billingNumber)
            ->setBillingReferenceNumber($billingReferenceNumber)
            ->setPrePayment($prePayment);
    }
    /**
     * Get Voucher value
     * @return \Travelport\UniversalRecord\StructType\TypeVoucherInformation|null
     */
    public function getVoucher(): ?\Travelport\UniversalRecord\StructType\TypeVoucherInformation
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param \Travelport\UniversalRecord\StructType\TypeVoucherInformation $voucher
     * @return \Travelport\UniversalRecord\StructType\TypePaymentInformation
     */
    public function setVoucher(?\Travelport\UniversalRecord\StructType\TypeVoucherInformation $voucher = null): self
    {
        $this->Voucher = $voucher;
        
        return $this;
    }
    /**
     * Get BillingNumber value
     * @return string|null
     */
    public function getBillingNumber(): ?string
    {
        return $this->BillingNumber;
    }
    /**
     * Set BillingNumber value
     * @param string $billingNumber
     * @return \Travelport\UniversalRecord\StructType\TypePaymentInformation
     */
    public function setBillingNumber(?string $billingNumber = null): self
    {
        $this->BillingNumber = $billingNumber;
        
        return $this;
    }
    /**
     * Get BillingReferenceNumber value
     * @return string|null
     */
    public function getBillingReferenceNumber(): ?string
    {
        return $this->BillingReferenceNumber;
    }
    /**
     * Set BillingReferenceNumber value
     * @param string $billingReferenceNumber
     * @return \Travelport\UniversalRecord\StructType\TypePaymentInformation
     */
    public function setBillingReferenceNumber(?string $billingReferenceNumber = null): self
    {
        $this->BillingReferenceNumber = $billingReferenceNumber;
        
        return $this;
    }
    /**
     * Get PrePayment value
     * @return string|null
     */
    public function getPrePayment(): ?string
    {
        return $this->PrePayment;
    }
    /**
     * Set PrePayment value
     * @param string $prePayment
     * @return \Travelport\UniversalRecord\StructType\TypePaymentInformation
     */
    public function setPrePayment(?string $prePayment = null): self
    {
        $this->PrePayment = $prePayment;
        
        return $this;
    }
}
