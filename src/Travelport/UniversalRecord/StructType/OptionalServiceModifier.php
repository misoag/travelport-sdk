<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Type;
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
    public string $SupplierCode;
    /**
     * The ServiceSubCode
     * Meta information extracted from the WSDL
     * - documentation: As published by ATPCO
     * - use: required
     * @var string
     */
    public string $ServiceSubCode;
    /**
     * The TravelDate
     * Meta information extracted from the WSDL
     * - documentation: The departure date of the air segment the optional service is valid for.
     * - use: required
     * @var string
     */
    public string $TravelDate;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This allows MDS to return specific image and text corresponding to the ancillary name (S5 ancillary name).
     * - use: required
     * @var string
     */
    public string $Description;
    /**
     * The SecondaryType
     * Meta information extracted from the WSDL
     * - documentation: Secondary optional service type | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * @var string|null
     */
    public ?string $SecondaryType = null;
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
        $this->SecondaryType = $secondaryType;
        
        return $this;
    }
}
