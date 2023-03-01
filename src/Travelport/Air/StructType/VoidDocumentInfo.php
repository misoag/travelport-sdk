<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoidDocumentInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to represent document information.
 * @subpackage Structs
 */
class VoidDocumentInfo extends AbstractStructBase
{
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
     * Constructor method for VoidDocumentInfo
     * @uses VoidDocumentInfo::setDocumentNumber()
     * @uses VoidDocumentInfo::setDocumentType()
     * @param string $documentNumber
     * @param string $documentType
     */
    public function __construct(?string $documentNumber = null, ?string $documentType = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setDocumentType($documentType);
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
     * @return \Travelport\Air\StructType\VoidDocumentInfo
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
     * @return \Travelport\Air\StructType\VoidDocumentInfo
     */
    public function setDocumentType(?string $documentType = null): self
    {
        $this->DocumentType = $documentType;
        
        return $this;
    }
}
