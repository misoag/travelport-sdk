<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentRequired StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional Details, Documents , Project IDs
 * @subpackage Structs
 */
class DocumentRequired extends AbstractStructBase
{
    /**
     * The DocType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DocType = null;
    /**
     * The IncludeExcludeUseInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $IncludeExcludeUseInd = null;
    /**
     * The DocId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $DocId = null;
    /**
     * The AllowedIds
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $AllowedIds = null;
    /**
     * Constructor method for DocumentRequired
     * @uses DocumentRequired::setDocType()
     * @uses DocumentRequired::setIncludeExcludeUseInd()
     * @uses DocumentRequired::setDocId()
     * @uses DocumentRequired::setAllowedIds()
     * @param string $docType
     * @param bool $includeExcludeUseInd
     * @param string $docId
     * @param string $allowedIds
     */
    public function __construct(?string $docType = null, ?bool $includeExcludeUseInd = null, ?string $docId = null, ?string $allowedIds = null)
    {
        $this
            ->setDocType($docType)
            ->setIncludeExcludeUseInd($includeExcludeUseInd)
            ->setDocId($docId)
            ->setAllowedIds($allowedIds);
    }
    /**
     * Get DocType value
     * @return string|null
     */
    public function getDocType(): ?string
    {
        return $this->DocType;
    }
    /**
     * Set DocType value
     * @param string $docType
     * @return \Travelport\UniversalRecord\StructType\DocumentRequired
     */
    public function setDocType(?string $docType = null): self
    {
        $this->DocType = $docType;
        
        return $this;
    }
    /**
     * Get IncludeExcludeUseInd value
     * @return bool|null
     */
    public function getIncludeExcludeUseInd(): ?bool
    {
        return $this->IncludeExcludeUseInd;
    }
    /**
     * Set IncludeExcludeUseInd value
     * @param bool $includeExcludeUseInd
     * @return \Travelport\UniversalRecord\StructType\DocumentRequired
     */
    public function setIncludeExcludeUseInd(?bool $includeExcludeUseInd = null): self
    {
        $this->IncludeExcludeUseInd = $includeExcludeUseInd;
        
        return $this;
    }
    /**
     * Get DocId value
     * @return string|null
     */
    public function getDocId(): ?string
    {
        return $this->DocId;
    }
    /**
     * Set DocId value
     * @param string $docId
     * @return \Travelport\UniversalRecord\StructType\DocumentRequired
     */
    public function setDocId(?string $docId = null): self
    {
        $this->DocId = $docId;
        
        return $this;
    }
    /**
     * Get AllowedIds value
     * @return string|null
     */
    public function getAllowedIds(): ?string
    {
        return $this->AllowedIds;
    }
    /**
     * Set AllowedIds value
     * @param string $allowedIds
     * @return \Travelport\UniversalRecord\StructType\DocumentRequired
     */
    public function setAllowedIds(?string $allowedIds = null): self
    {
        $this->AllowedIds = $allowedIds;
        
        return $this;
    }
}
