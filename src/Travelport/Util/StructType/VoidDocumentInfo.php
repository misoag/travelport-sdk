<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $DocumentNumber = null;
    /**
     * The DocumentType
     * @var string|null
     */
    protected ?string $DocumentType = null;
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
     * @return \Travelport\Util\StructType\VoidDocumentInfo
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        // validation for constraint: maxLength(13)
        if (!is_null($documentNumber) && mb_strlen((string) $documentNumber) > 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 13', mb_strlen((string) $documentNumber)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($documentNumber) && mb_strlen((string) $documentNumber) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $documentNumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\VoidDocumentInfo
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->DocumentType = $documentType;
        
        return $this;
    }
}
