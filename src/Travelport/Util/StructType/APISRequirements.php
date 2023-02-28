<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\Document[]
     */
    protected ?array $Document = null;
    /**
     * The Key
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The Level
     * Meta information extracted from the WSDL
     * - documentation: Applicability level of the Document. Required, Supported, API_Supported or Unknown
     * - use: optional
     * @var string|null
     */
    protected ?string $Level = null;
    /**
     * The GenderRequired
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $GenderRequired = null;
    /**
     * The DateOfBirthRequired
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $DateOfBirthRequired = null;
    /**
     * The RequiredDocuments
     * Meta information extracted from the WSDL
     * - documentation: What are required documents for the APIS Requirement. One, FirstAndOneOther or All
     * - use: optional
     * @var string|null
     */
    protected ?string $RequiredDocuments = null;
    /**
     * The NationalityRequired
     * Meta information extracted from the WSDL
     * - documentation: Nationality of the traveler is required for booking for some suppliers.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $NationalityRequired = null;
    /**
     * Constructor method for APISRequirements
     * @uses APISRequirements::setDocument()
     * @uses APISRequirements::setKey()
     * @uses APISRequirements::setLevel()
     * @uses APISRequirements::setGenderRequired()
     * @uses APISRequirements::setDateOfBirthRequired()
     * @uses APISRequirements::setRequiredDocuments()
     * @uses APISRequirements::setNationalityRequired()
     * @param \Travelport\Util\StructType\Document[] $document
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
     * @return \Travelport\Util\StructType\Document[]
     */
    public function getDocument(): ?array
    {
        return $this->Document;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentForArrayConstraintFromSetDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $aPISRequirementsDocumentItem) {
            // validation for constraint: itemType
            if (!$aPISRequirementsDocumentItem instanceof \Travelport\Util\StructType\Document) {
                $invalidValues[] = is_object($aPISRequirementsDocumentItem) ? get_class($aPISRequirementsDocumentItem) : sprintf('%s(%s)', gettype($aPISRequirementsDocumentItem), var_export($aPISRequirementsDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Document property can only contain items of type \Travelport\Util\StructType\Document, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Document value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Document[] $document
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setDocument(?array $document = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentArrayErrorMessage = self::validateDocumentForArrayConstraintFromSetDocument($document))) {
            throw new InvalidArgumentException($documentArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($document) && count($document) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($document)), __LINE__);
        }
        $this->Document = $document;
        
        return $this;
    }
    /**
     * Add item to Document value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\Document $item
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function addToDocument(\Travelport\Util\StructType\Document $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\Document) {
            throw new InvalidArgumentException(sprintf('The Document property can only contain items of type \Travelport\Util\StructType\Document, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Document) && count($this->Document) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Document)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setLevel(?string $level = null): self
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setGenderRequired(?bool $genderRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($genderRequired) && !is_bool($genderRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($genderRequired, true), gettype($genderRequired)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setDateOfBirthRequired(?bool $dateOfBirthRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dateOfBirthRequired) && !is_bool($dateOfBirthRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dateOfBirthRequired, true), gettype($dateOfBirthRequired)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setRequiredDocuments(?string $requiredDocuments = null): self
    {
        // validation for constraint: string
        if (!is_null($requiredDocuments) && !is_string($requiredDocuments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requiredDocuments, true), gettype($requiredDocuments)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\APISRequirements
     */
    public function setNationalityRequired(?bool $nationalityRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nationalityRequired) && !is_bool($nationalityRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nationalityRequired, true), gettype($nationalityRequired)), __LINE__);
        }
        $this->NationalityRequired = $nationalityRequired;
        
        return $this;
    }
}
