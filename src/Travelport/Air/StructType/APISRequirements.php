<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APISRequirements StructType
 * Meta information extracted from the WSDL
 * - documentation: Specific details for APIS Requirements.
 * @subpackage Structs
 */
class APISRequirements extends AbstractStructBase
{
    /**
     * The Document
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Document
     * @var \Travelport\Air\StructType\Document[]
     */
    public ?array $Document = null;
    /**
     * The Key
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Applicability level of the Document. Required, Supported, API_Supported or Unknown
     * - use: optional
     * @var string|null
     */
    public ?string $Level = null;
    /**
     * The GenderRequired
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $GenderRequired = null;
    /**
     * The DateOfBirthRequired
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    public ?bool $DateOfBirthRequired = null;
    /**
     * The RequiredDocuments
     * Meta information extracted from the WSDL
     * - documentation: What are required documents for the APIS Requirement. One, FirstAndOneOther or All
     * - use: optional
     * @var string|null
     */
    public ?string $RequiredDocuments = null;
    /**
     * The NationalityRequired
     * Meta information extracted from the WSDL
     * - documentation: Nationality of the traveler is required for booking for some suppliers.
     * - use: optional
     * @var bool|null
     */
    public ?bool $NationalityRequired = null;
    /**
     * Constructor method for APISRequirements
     * @uses APISRequirements::setDocument()
     * @uses APISRequirements::setKey()
     * @uses APISRequirements::setLevel()
     * @uses APISRequirements::setGenderRequired()
     * @uses APISRequirements::setDateOfBirthRequired()
     * @uses APISRequirements::setRequiredDocuments()
     * @uses APISRequirements::setNationalityRequired()
     * @param \Travelport\Air\StructType\Document[] $document
     * @param string $key
     * @param string $level
     * @param bool $genderRequired
     * @param bool $dateOfBirthRequired
     * @param string $requiredDocuments
     * @param bool $nationalityRequired
     */
    public function __construct(?array $document = null, ?string $key = null, ?string $level = null, ?bool $genderRequired = null, ?bool $dateOfBirthRequired = null, ?string $requiredDocuments = null, ?bool $nationalityRequired = null)
    {
        $this
            ->setDocument($document)
            ->setKey($key)
            ->setLevel($level)
            ->setGenderRequired($genderRequired)
            ->setDateOfBirthRequired($dateOfBirthRequired)
            ->setRequiredDocuments($requiredDocuments)
            ->setNationalityRequired($nationalityRequired);
    }
    /**
     * Get Document value
     * @return \Travelport\Air\StructType\Document[]
     */
    public function getDocument(): ?array
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @param \Travelport\Air\StructType\Document[] $document
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setDocument(?array $document = null): self
    {
        $this->Document = $document;
        
        return $this;
    }
    /**
     * Add item to Document value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Document $item
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function addToDocument(\Travelport\Air\StructType\Document $item): self
    {
        $this->Document[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Level value
     * @return string|null
     */
    public function getLevel(): ?string
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param string $level
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setLevel(?string $level = null): self
    {
        $this->Level = $level;
        
        return $this;
    }
    /**
     * Get GenderRequired value
     * @return bool|null
     */
    public function getGenderRequired(): ?bool
    {
        return $this->GenderRequired;
    }
    /**
     * Set GenderRequired value
     * @param bool $genderRequired
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setGenderRequired(?bool $genderRequired = null): self
    {
        $this->GenderRequired = $genderRequired;
        
        return $this;
    }
    /**
     * Get DateOfBirthRequired value
     * @return bool|null
     */
    public function getDateOfBirthRequired(): ?bool
    {
        return $this->DateOfBirthRequired;
    }
    /**
     * Set DateOfBirthRequired value
     * @param bool $dateOfBirthRequired
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setDateOfBirthRequired(?bool $dateOfBirthRequired = null): self
    {
        $this->DateOfBirthRequired = $dateOfBirthRequired;
        
        return $this;
    }
    /**
     * Get RequiredDocuments value
     * @return string|null
     */
    public function getRequiredDocuments(): ?string
    {
        return $this->RequiredDocuments;
    }
    /**
     * Set RequiredDocuments value
     * @param string $requiredDocuments
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setRequiredDocuments(?string $requiredDocuments = null): self
    {
        $this->RequiredDocuments = $requiredDocuments;
        
        return $this;
    }
    /**
     * Get NationalityRequired value
     * @return bool|null
     */
    public function getNationalityRequired(): ?bool
    {
        return $this->NationalityRequired;
    }
    /**
     * Set NationalityRequired value
     * @param bool $nationalityRequired
     * @return \Travelport\Air\StructType\APISRequirements
     */
    public function setNationalityRequired(?bool $nationalityRequired = null): self
    {
        $this->NationalityRequired = $nationalityRequired;
        
        return $this;
    }
}
