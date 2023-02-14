<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OptionalServiceModifier StructType
 * Meta information extracted from the WSDL
 * - documentation: Optional service modifiers
 * @subpackage Structs
 */
class OptionalServiceModifier extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Optional service type | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: Optional service supplier code | 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $SupplierCode;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - documentation: As published by ATPCO
     * - use: required
     * @var string
     */
    protected string $ServiceSubCode;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: The departure date of the air segment the optional service is valid for.
     * - use: required
     * @var string
     */
    protected string $TravelDate;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This allows MDS to return specific image and text corresponding to the ancillary name (S5 ancillary name).
     * - use: required
     * @var string
     */
    protected string $Description;
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: Secondary optional service type | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SecondaryType = null;
    /**
     * Constructor method for OptionalServiceModifier
     * @uses OptionalServiceModifier::setType()
     * @uses OptionalServiceModifier::setSupplierCode()
     * @uses OptionalServiceModifier::setServiceSubCode()
     * @uses OptionalServiceModifier::setTravelDate()
     * @uses OptionalServiceModifier::setDescription()
     * @uses OptionalServiceModifier::setSecondaryType()
     * @param string $type
     * @param string $supplierCode
     * @param string $serviceSubCode
     * @param string $travelDate
     * @param string $description
     * @param string $secondaryType
     */
    public function __construct(string $type, string $supplierCode, string $serviceSubCode, string $travelDate, string $description, ?string $secondaryType = null)
    {
        $this
            ->setType($type)
            ->setSupplierCode($supplierCode)
            ->setServiceSubCode($serviceSubCode)
            ->setTravelDate($travelDate)
            ->setDescription($description)
            ->setSecondaryType($secondaryType);
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
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($type) && mb_strlen((string) $type) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $type)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($type) && mb_strlen((string) $type) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier
     */
    public function setSupplierCode(string $supplierCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get ServiceSubCode value
     * @return string
     */
    public function getServiceSubCode(): string
    {
        return $this->ServiceSubCode;
    }
    /**
     * Set ServiceSubCode value
     * @param string $serviceSubCode
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier
     */
    public function setServiceSubCode(string $serviceSubCode): self
    {
        // validation for constraint: string
        if (!is_null($serviceSubCode) && !is_string($serviceSubCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceSubCode, true), gettype($serviceSubCode)), __LINE__);
        }
        $this->ServiceSubCode = $serviceSubCode;
        
        return $this;
    }
    /**
     * Get TravelDate value
     * @return string
     */
    public function getTravelDate(): string
    {
        return $this->TravelDate;
    }
    /**
     * Set TravelDate value
     * @param string $travelDate
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier
     */
    public function setTravelDate(string $travelDate): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->TravelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string
     */
    public function getDescription(): string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier
     */
    public function setDescription(string $description): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get SecondaryType value
     * @return string|null
     */
    public function getSecondaryType(): ?string
    {
        return $this->SecondaryType;
    }
    /**
     * Set SecondaryType value
     * @param string $secondaryType
     * @return \Travelport\UniversalRecord\StructType\OptionalServiceModifier
     */
    public function setSecondaryType(?string $secondaryType = null): self
    {
        // validation for constraint: string
        if (!is_null($secondaryType) && !is_string($secondaryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryType, true), gettype($secondaryType)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($secondaryType) && mb_strlen((string) $secondaryType) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $secondaryType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($secondaryType) && mb_strlen((string) $secondaryType) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $secondaryType)), __LINE__);
        }
        $this->SecondaryType = $secondaryType;
        
        return $this;
    }
}
