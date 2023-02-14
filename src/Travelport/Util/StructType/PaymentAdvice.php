<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentAdvice StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains other form of payment for Cruise Reservations
 * @subpackage Structs
 */
class PaymentAdvice extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 22
     * - use: required
     * @var string
     */
    protected string $DocumentNumber;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - documentation: Document Issuance date
     * - use: required
     * @var string
     */
    protected string $IssueDate;
    /**
     * The IssueCity
     * Meta information extracted from the WSDL
     * - documentation: City code of document issuance | Valid 3 letter IATA city or airport code
     * - base: xs:string
     * - length: 3
     * - use: required
     * - whiteSpace: collapse
     * @var string
     */
    protected string $IssueCity;
    /**
     * The OriginalFOP
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 19
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalFOP = null;
    /**
     * Constructor method for PaymentAdvice
     * @uses PaymentAdvice::setType()
     * @uses PaymentAdvice::setDocumentNumber()
     * @uses PaymentAdvice::setIssueDate()
     * @uses PaymentAdvice::setIssueCity()
     * @uses PaymentAdvice::setOriginalFOP()
     * @param string $type
     * @param string $documentNumber
     * @param string $issueDate
     * @param string $issueCity
     * @param string $originalFOP
     */
    public function __construct(string $type, string $documentNumber, string $issueDate, string $issueCity, ?string $originalFOP = null)
    {
        $this
            ->setType($type)
            ->setDocumentNumber($documentNumber)
            ->setIssueDate($issueDate)
            ->setIssueCity($issueCity)
            ->setOriginalFOP($originalFOP);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Util\StructType\PaymentAdvice
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($type) && mb_strlen((string) $type) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string
     */
    public function getDocumentNumber(): string
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Travelport\Util\StructType\PaymentAdvice
     */
    public function setDocumentNumber(string $documentNumber): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        // validation for constraint: maxLength(22)
        if (!is_null($documentNumber) && mb_strlen((string) $documentNumber) > 22) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 22', mb_strlen((string) $documentNumber)), __LINE__);
        }
        $this->DocumentNumber = $documentNumber;
        
        return $this;
    }
    /**
     * Get IssueDate value
     * @return string
     */
    public function getIssueDate(): string
    {
        return $this->IssueDate;
    }
    /**
     * Set IssueDate value
     * @param string $issueDate
     * @return \Travelport\Util\StructType\PaymentAdvice
     */
    public function setIssueDate(string $issueDate): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->IssueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get IssueCity value
     * @return string
     */
    public function getIssueCity(): string
    {
        return $this->IssueCity;
    }
    /**
     * Set IssueCity value
     * @param string $issueCity
     * @return \Travelport\Util\StructType\PaymentAdvice
     */
    public function setIssueCity(string $issueCity): self
    {
        // validation for constraint: string
        if (!is_null($issueCity) && !is_string($issueCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueCity, true), gettype($issueCity)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($issueCity) && mb_strlen((string) $issueCity) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $issueCity)), __LINE__);
        }
        $this->IssueCity = $issueCity;
        
        return $this;
    }
    /**
     * Get OriginalFOP value
     * @return string|null
     */
    public function getOriginalFOP(): ?string
    {
        return $this->OriginalFOP;
    }
    /**
     * Set OriginalFOP value
     * @param string $originalFOP
     * @return \Travelport\Util\StructType\PaymentAdvice
     */
    public function setOriginalFOP(?string $originalFOP = null): self
    {
        // validation for constraint: string
        if (!is_null($originalFOP) && !is_string($originalFOP)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalFOP, true), gettype($originalFOP)), __LINE__);
        }
        // validation for constraint: maxLength(19)
        if (!is_null($originalFOP) && mb_strlen((string) $originalFOP) > 19) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 19', mb_strlen((string) $originalFOP)), __LINE__);
        }
        $this->OriginalFOP = $originalFOP;
        
        return $this;
    }
}
