<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\PhoneNumber|null
     */
    protected ?\Travelport\Util\StructType\PhoneNumber $PhoneNumber = null;
    /**
     * The TermConditions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: TermConditions
     * @var \Travelport\Util\StructType\TermConditions|null
     */
    protected ?\Travelport\Util\StructType\TermConditions $TermConditions = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: common:Remark
     * @var \Travelport\Util\StructType\Remark[]
     */
    protected ?array $Remark = null;
    /**
     * The IncludeCoverSheet
     * Meta information extracted from the WSDL
     * - documentation: Specifies whether to include a cover page with fax or not.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeCoverSheet = null;
    /**
     * The To
     * Meta information extracted from the WSDL
     * - documentation: To address.
     * - use: optional
     * @var string|null
     */
    protected ?string $To = null;
    /**
     * The From
     * Meta information extracted from the WSDL
     * - documentation: From address.
     * - use: optional
     * @var string|null
     */
    protected ?string $From = null;
    /**
     * The DeptBillingCode
     * Meta information extracted from the WSDL
     * - documentation: Department billing code.
     * - use: optional
     * @var string|null
     */
    protected ?string $DeptBillingCode = null;
    /**
     * The InvoiceNumber
     * Meta information extracted from the WSDL
     * - documentation: Invoice number.
     * - use: optional
     * @var string|null
     */
    protected ?string $InvoiceNumber = null;
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
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @param \Travelport\Util\StructType\TermConditions $termConditions
     * @param \Travelport\Util\StructType\Remark[] $remark
     * @param bool $includeCoverSheet
     * @param string $to
     * @param string $from
     * @param string $deptBillingCode
     * @param string $invoiceNumber
     */
    public function __construct(?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null, ?\Travelport\Util\StructType\TermConditions $termConditions = null, ?array $remark = null, ?bool $includeCoverSheet = null, ?string $to = null, ?string $from = null, ?string $deptBillingCode = null, ?string $invoiceNumber = null)
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
     * @return \Travelport\Util\StructType\PhoneNumber|null
     */
    public function getPhoneNumber(): ?\Travelport\Util\StructType\PhoneNumber
    {
        return $this->PhoneNumber;
    }
    /**
     * Set PhoneNumber value
     * @param \Travelport\Util\StructType\PhoneNumber $phoneNumber
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setPhoneNumber(?\Travelport\Util\StructType\PhoneNumber $phoneNumber = null): self
    {
        $this->PhoneNumber = $phoneNumber;
        
        return $this;
    }
    /**
     * Get TermConditions value
     * @return \Travelport\Util\StructType\TermConditions|null
     */
    public function getTermConditions(): ?\Travelport\Util\StructType\TermConditions
    {
        return $this->TermConditions;
    }
    /**
     * Set TermConditions value
     * @param \Travelport\Util\StructType\TermConditions $termConditions
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setTermConditions(?\Travelport\Util\StructType\TermConditions $termConditions = null): self
    {
        $this->TermConditions = $termConditions;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\Util\StructType\Remark[]
     */
    public function getRemark(): ?array
    {
        return $this->Remark;
    }
    /**
     * This method is responsible for validating the values passed to the setRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarkForArrayConstraintsFromSetRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $faxDetailsRemarkItem) {
            // validation for constraint: itemType
            if (!$faxDetailsRemarkItem instanceof \Travelport\Util\StructType\Remark) {
                $invalidValues[] = is_object($faxDetailsRemarkItem) ? get_class($faxDetailsRemarkItem) : sprintf('%s(%s)', gettype($faxDetailsRemarkItem), var_export($faxDetailsRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Remark property can only contain items of type \Travelport\Util\StructType\Remark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Remark[] $remark
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setRemark(?array $remark = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarkArrayErrorMessage = self::validateRemarkForArrayConstraintsFromSetRemark($remark))) {
            throw new InvalidArgumentException($remarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($remark) && count($remark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($remark)), __LINE__);
        }
        $this->Remark = $remark;
        
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Remark $item
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function addToRemark(\Travelport\Util\StructType\Remark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Remark) {
            throw new InvalidArgumentException(sprintf('The Remark property can only contain items of type \Travelport\Util\StructType\Remark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Remark) && count($this->Remark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Remark)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setIncludeCoverSheet(?bool $includeCoverSheet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeCoverSheet) && !is_bool($includeCoverSheet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeCoverSheet, true), gettype($includeCoverSheet)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setTo(?string $to = null): self
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), gettype($to)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setFrom(?string $from = null): self
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), gettype($from)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setDeptBillingCode(?string $deptBillingCode = null): self
    {
        // validation for constraint: string
        if (!is_null($deptBillingCode) && !is_string($deptBillingCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deptBillingCode, true), gettype($deptBillingCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\FaxDetails
     */
    public function setInvoiceNumber(?string $invoiceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNumber) && !is_string($invoiceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNumber, true), gettype($invoiceNumber)), __LINE__);
        }
        $this->InvoiceNumber = $invoiceNumber;
        
        return $this;
    }
}
