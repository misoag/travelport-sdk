<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public string $Type;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 22
     * - use: required
     * @var string
     */
    public string $DocumentNumber;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - documentation: Document Issuance date
     * - use: required
     * @var string
     */
    public string $IssueDate;
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
    public string $IssueCity;
    /**
     * The OriginalFOP
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 19
     * - use: optional
     * @var string|null
     */
    public ?string $OriginalFOP = null;
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
     * @return \Travelport\Hotel\StructType\PaymentAdvice
     */
    public function setType(string $type): self
    {
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
     * @return \Travelport\Hotel\StructType\PaymentAdvice
     */
    public function setDocumentNumber(string $documentNumber): self
    {
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
     * @return \Travelport\Hotel\StructType\PaymentAdvice
     */
    public function setIssueDate(string $issueDate): self
    {
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
     * @return \Travelport\Hotel\StructType\PaymentAdvice
     */
    public function setIssueCity(string $issueCity): self
    {
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
     * @return \Travelport\Hotel\StructType\PaymentAdvice
     */
    public function setOriginalFOP(?string $originalFOP = null): self
    {
        $this->OriginalFOP = $originalFOP;
        
        return $this;
    }
}
