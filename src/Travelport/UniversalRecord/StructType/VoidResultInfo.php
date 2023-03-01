<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidResultInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: List of Successful Or Failed void document results.
 * @subpackage Structs
 */
class VoidResultInfo extends AbstractStructBase
{
    /**
     * The FailureRemark
     * Meta information extracted from the WSDL
     * - documentation: Container to show all provider failure information.
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $FailureRemark = null;
    /**
     * The ResultType
     * Meta information extracted from the WSDL
     * - documentation: Successful Or Failed result indicator.
     * - use: optional
     * @var string|null
     */
    public ?string $ResultType = null;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - documentation: Used for Character Strings, length 1 to 13.
     * - base: xs:string
     * - maxLength: 13
     * - minLength: 1
     * @var string|null
     */
    public ?string $DocumentNumber = null;
    /**
     * The DocumentType
     * @var string|null
     */
    public ?string $DocumentType = null;
    /**
     * Constructor method for VoidResultInfo
     * @uses VoidResultInfo::setFailureRemark()
     * @uses VoidResultInfo::setResultType()
     * @uses VoidResultInfo::setDocumentNumber()
     * @uses VoidResultInfo::setDocumentType()
     * @param string $failureRemark
     * @param string $resultType
     * @param string $documentNumber
     * @param string $documentType
     */
    public function __construct(?string $failureRemark = null, ?string $resultType = null, ?string $documentNumber = null, ?string $documentType = null)
    {
        $this
            ->setFailureRemark($failureRemark)
            ->setResultType($resultType)
            ->setDocumentNumber($documentNumber)
            ->setDocumentType($documentType);
    }
    /**
     * Get FailureRemark value
     * @return string|null
     */
    public function getFailureRemark(): ?string
    {
        return $this->FailureRemark;
    }
    /**
     * Set FailureRemark value
     * @param string $failureRemark
     * @return \Travelport\UniversalRecord\StructType\VoidResultInfo
     */
    public function setFailureRemark(?string $failureRemark = null): self
    {
        $this->FailureRemark = $failureRemark;
        
        return $this;
    }
    /**
     * Get ResultType value
     * @return string|null
     */
    public function getResultType(): ?string
    {
        return $this->ResultType;
    }
    /**
     * Set ResultType value
     * @param string $resultType
     * @return \Travelport\UniversalRecord\StructType\VoidResultInfo
     */
    public function setResultType(?string $resultType = null): self
    {
        $this->ResultType = $resultType;
        
        return $this;
    }
    /**
     * Get DocumentNumber value
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->DocumentNumber;
    }
    /**
     * Set DocumentNumber value
     * @param string $documentNumber
     * @return \Travelport\UniversalRecord\StructType\VoidResultInfo
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        $this->DocumentNumber = $documentNumber;
        
        return $this;
    }
    /**
     * Get DocumentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->DocumentType;
    }
    /**
     * Set DocumentType value
     * @param string $documentType
     * @return \Travelport\UniversalRecord\StructType\VoidResultInfo
     */
    public function setDocumentType(?string $documentType = null): self
    {
        $this->DocumentType = $documentType;
        
        return $this;
    }
}
