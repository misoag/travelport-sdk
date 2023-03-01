<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayAccount StructType
 * Meta information extracted from the WSDL
 * - documentation: PrePay Account associated with the customer
 * @subpackage Structs
 */
class PrePayAccount extends AbstractStructBase
{
    /**
     * The CreditSummary
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CreditSummary
     * @var \Travelport\Air\StructType\CreditSummary|null
     */
    public ?\Travelport\Air\StructType\CreditSummary $CreditSummary = null;
    /**
     * The PrePayPriceInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayPriceInfo
     * @var \Travelport\Air\StructType\PrePayPriceInfo|null
     */
    public ?\Travelport\Air\StructType\PrePayPriceInfo $PrePayPriceInfo = null;
    /**
     * The ProgramTitle
     * Meta information extracted from the WSDL
     * - documentation: Pre pay program title
     * - use: optional
     * @var string|null
     */
    public ?string $ProgramTitle = null;
    /**
     * The CertificateNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CertificateNumber = null;
    /**
     * The ProgramName
     * Meta information extracted from the WSDL
     * - documentation: Pre pay program name
     * - use: optional
     * @var string|null
     */
    public ?string $ProgramName = null;
    /**
     * The EffectiveDate
     * Meta information extracted from the WSDL
     * - documentation: Effective date for the pre pay account
     * - use: optional
     * @var string|null
     */
    public ?string $EffectiveDate = null;
    /**
     * The ExpireDate
     * Meta information extracted from the WSDL
     * - documentation: Expiry date for the pre pay account
     * - use: optional
     * @var string|null
     */
    public ?string $ExpireDate = null;
    /**
     * Constructor method for PrePayAccount
     * @uses PrePayAccount::setCreditSummary()
     * @uses PrePayAccount::setPrePayPriceInfo()
     * @uses PrePayAccount::setProgramTitle()
     * @uses PrePayAccount::setCertificateNumber()
     * @uses PrePayAccount::setProgramName()
     * @uses PrePayAccount::setEffectiveDate()
     * @uses PrePayAccount::setExpireDate()
     * @param \Travelport\Air\StructType\CreditSummary $creditSummary
     * @param \Travelport\Air\StructType\PrePayPriceInfo $prePayPriceInfo
     * @param string $programTitle
     * @param string $certificateNumber
     * @param string $programName
     * @param string $effectiveDate
     * @param string $expireDate
     */
    public function __construct(?\Travelport\Air\StructType\CreditSummary $creditSummary = null, ?\Travelport\Air\StructType\PrePayPriceInfo $prePayPriceInfo = null, ?string $programTitle = null, ?string $certificateNumber = null, ?string $programName = null, ?string $effectiveDate = null, ?string $expireDate = null)
    {
        $this
            ->setCreditSummary($creditSummary)
            ->setPrePayPriceInfo($prePayPriceInfo)
            ->setProgramTitle($programTitle)
            ->setCertificateNumber($certificateNumber)
            ->setProgramName($programName)
            ->setEffectiveDate($effectiveDate)
            ->setExpireDate($expireDate);
    }
    /**
     * Get CreditSummary value
     * @return \Travelport\Air\StructType\CreditSummary|null
     */
    public function getCreditSummary(): ?\Travelport\Air\StructType\CreditSummary
    {
        return $this->CreditSummary;
    }
    /**
     * Set CreditSummary value
     * @param \Travelport\Air\StructType\CreditSummary $creditSummary
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setCreditSummary(?\Travelport\Air\StructType\CreditSummary $creditSummary = null): self
    {
        $this->CreditSummary = $creditSummary;
        
        return $this;
    }
    /**
     * Get PrePayPriceInfo value
     * @return \Travelport\Air\StructType\PrePayPriceInfo|null
     */
    public function getPrePayPriceInfo(): ?\Travelport\Air\StructType\PrePayPriceInfo
    {
        return $this->PrePayPriceInfo;
    }
    /**
     * Set PrePayPriceInfo value
     * @param \Travelport\Air\StructType\PrePayPriceInfo $prePayPriceInfo
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setPrePayPriceInfo(?\Travelport\Air\StructType\PrePayPriceInfo $prePayPriceInfo = null): self
    {
        $this->PrePayPriceInfo = $prePayPriceInfo;
        
        return $this;
    }
    /**
     * Get ProgramTitle value
     * @return string|null
     */
    public function getProgramTitle(): ?string
    {
        return $this->ProgramTitle;
    }
    /**
     * Set ProgramTitle value
     * @param string $programTitle
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setProgramTitle(?string $programTitle = null): self
    {
        $this->ProgramTitle = $programTitle;
        
        return $this;
    }
    /**
     * Get CertificateNumber value
     * @return string|null
     */
    public function getCertificateNumber(): ?string
    {
        return $this->CertificateNumber;
    }
    /**
     * Set CertificateNumber value
     * @param string $certificateNumber
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setCertificateNumber(?string $certificateNumber = null): self
    {
        $this->CertificateNumber = $certificateNumber;
        
        return $this;
    }
    /**
     * Get ProgramName value
     * @return string|null
     */
    public function getProgramName(): ?string
    {
        return $this->ProgramName;
    }
    /**
     * Set ProgramName value
     * @param string $programName
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setProgramName(?string $programName = null): self
    {
        $this->ProgramName = $programName;
        
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
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setEffectiveDate(?string $effectiveDate = null): self
    {
        $this->EffectiveDate = $effectiveDate;
        
        return $this;
    }
    /**
     * Get ExpireDate value
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->ExpireDate;
    }
    /**
     * Set ExpireDate value
     * @param string $expireDate
     * @return \Travelport\Air\StructType\PrePayAccount
     */
    public function setExpireDate(?string $expireDate = null): self
    {
        $this->ExpireDate = $expireDate;
        
        return $this;
    }
}
