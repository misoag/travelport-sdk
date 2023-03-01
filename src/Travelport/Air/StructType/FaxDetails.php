<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FaxDetails StructType
 * Meta information extracted from the WSDL
 * - documentation: Term and Conditions for the fax . | Send type as Fax for fax number. | The Fax Details Information
 * @subpackage Structs
 */
class FaxDetails extends AbstractStructBase
{
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - ref: common:PhoneNumber
     * @var \Travelport\Air\StructType\PhoneNumber|null
     */
    public ?\Travelport\Air\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The TermConditions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TermConditions
     * @var \Travelport\Air\StructType\TermConditions|null
     */
    public ?\Travelport\Air\StructType\TermConditions $TermConditions = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\Air\StructType\Remark[]
     */
    public ?array $Remark = null;
    /**
     * The IncludeCoverSheet
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to include a cover page with fax or not.
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeCoverSheet = null;
    /**
     * The To
     * Meta information extracted from the WSDL
     * - documentation: To address.
     * - use: optional
     * @var string|null
     */
    public ?string $To = null;
    /**
     * The From
     * Meta information extracted from the WSDL
     * - documentation: From address.
     * - use: optional
     * @var string|null
     */
    public ?string $From = null;
    /**
     * The DeptBillingCode
     * Meta information extracted from the WSDL
     * - documentation: Department billing code.
     * - use: optional
     * @var string|null
     */
    public ?string $DeptBillingCode = null;
    /**
     * The InvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: Invoice number.
     * - use: optional
     * @var string|null
     */
    public ?string $InvoiceNumber = null;
    /**
     * Constructor method for FaxDetails
     * @uses FaxDetails::setPhoneNumber()
     * @uses FaxDetails::setTermConditions()
     * @uses FaxDetails::setRemark()
     * @uses FaxDetails::setIncludeCoverSheet()
     * @uses FaxDetails::setTo()
     * @uses FaxDetails::setFrom()
     * @uses FaxDetails::setDeptBillingCode()
     * @uses FaxDetails::setInvoiceNumber()
     * @param \Travelport\Air\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Air\StructType\TermConditions $termConditions
     * @param \Travelport\Air\StructType\Remark[] $remark
     * @param bool $includeCoverSheet
     * @param string $to
     * @param string $from
     * @param string $deptBillingCode
     * @param string $invoiceNumber
     */
    public function __construct(?\Travelport\Air\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Air\StructType\TermConditions $termConditions = null, ?array $remark = null, ?bool $includeCoverSheet = null, ?string $to = null, ?string $from = null, ?string $deptBillingCode = null, ?string $invoiceNumber = null)
    {
        $this
            ->setPhoneNumber($phoneNumber)
            ->setTermConditions($termConditions)
            ->setRemark($remark)
            ->setIncludeCoverSheet($includeCoverSheet)
            ->setTo($to)
            ->setFrom($from)
            ->setDeptBillingCode($deptBillingCode)
            ->setInvoiceNumber($invoiceNumber);
    }
    /**
     * Get PhoneNumber value
     * @return \Travelport\Air\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Air\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Air\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setPhoneNumber(?\Travelport\Air\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get TermConditions value
     * @return \Travelport\Air\StructType\TermConditions|null
     */
    public function getTermConditions(): ?\Travelport\Air\StructType\TermConditions
    {
        return $this->TermConditions;
    }
    /**
     * Set TermConditions value
     * @param \Travelport\Air\StructType\TermConditions $termConditions
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setTermConditions(?\Travelport\Air\StructType\TermConditions $termConditions = null): self
    {
        $this->TermConditions = $termConditions;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\Air\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\Air\StructType\Remark[] $remark
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setRemark(?array $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Remark $item
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function addToRemark(\Travelport\Air\StructType\Remark $item): self
    {
        $this->Remark[] = $item;
        
        return $this;
    }
    /**
     * Get IncludeCoverSheet value
     * @return bool|null
     */
    public function getIncludeCoverSheet(): ?bool
    {
        return $this->IncludeCoverSheet;
    }
    /**
     * Set IncludeCoverSheet value
     * @param bool $includeCoverSheet
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setIncludeCoverSheet(?bool $includeCoverSheet = null): self
    {
        $this->IncludeCoverSheet = $includeCoverSheet;
        
        return $this;
    }
    /**
     * Get To value
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setTo(?string $to = null): self
    {
        $this->To = $to;
        
        return $this;
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setFrom(?string $from = null): self
    {
        $this->From = $from;
        
        return $this;
    }
    /**
     * Get DeptBillingCode value
     * @return string|null
     */
    public function getDeptBillingCode(): ?string
    {
        return $this->DeptBillingCode;
    }
    /**
     * Set DeptBillingCode value
     * @param string $deptBillingCode
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setDeptBillingCode(?string $deptBillingCode = null): self
    {
        $this->DeptBillingCode = $deptBillingCode;
        
        return $this;
    }
    /**
     * Get InvoiceNumber value
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->InvoiceNumber;
    }
    /**
     * Set InvoiceNumber value
     * @param string $invoiceNumber
     * @return \Travelport\Air\StructType\FaxDetails
     */
    public function setInvoiceNumber(?string $invoiceNumber = null): self
    {
        $this->InvoiceNumber = $invoiceNumber;
        
        return $this;
    }
}
