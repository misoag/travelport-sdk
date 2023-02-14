<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?string $DocType = null;
    /**
     * The IncludeExcludeUseInd
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludeExcludeUseInd = null;
    /**
     * The DocId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $DocId = null;
    /**
     * The AllowedIds
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AllowedIds = null;
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
     * @return \Travelport\Util\StructType\DocumentRequired
     */
    public function setDocType(?string $docType = null): self
    {
        // validation for constraint: string
        if (!is_null($docType) && !is_string($docType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docType, true), gettype($docType)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentRequired
     */
    public function setIncludeExcludeUseInd(?bool $includeExcludeUseInd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeExcludeUseInd) && !is_bool($includeExcludeUseInd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeExcludeUseInd, true), gettype($includeExcludeUseInd)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentRequired
     */
    public function setDocId(?string $docId = null): self
    {
        // validation for constraint: string
        if (!is_null($docId) && !is_string($docId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docId, true), gettype($docId)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\DocumentRequired
     */
    public function setAllowedIds(?string $allowedIds = null): self
    {
        // validation for constraint: string
        if (!is_null($allowedIds) && !is_string($allowedIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowedIds, true), gettype($allowedIds)), __LINE__);
        }
        $this->AllowedIds = $allowedIds;
        
        return $this;
    }
}
