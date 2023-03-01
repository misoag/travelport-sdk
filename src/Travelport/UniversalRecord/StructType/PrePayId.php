<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayId StructType
 * Meta information extracted from the WSDL
 * - documentation: Supplier info that is specific to the pre pay Id | Pre pay unique identifier , example Flight Pass Number
 * @subpackage Structs
 */
class PrePayId extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - documentation: This is the exact pre pay number. Example flight pass number | Loyalty Card number with maximum length as 36.
     * - base: xs:string
     * - maxLength: 36
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Id;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CompanyName
     * @var \Travelport\UniversalRecord\StructType\CompanyName|null
     */
    public ?\Travelport\UniversalRecord\StructType\CompanyName $CompanyName = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of pre pay unique identifier,presently only available value is FlightPass.
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for PrePayId
     * @uses PrePayId::setId()
     * @uses PrePayId::setCompanyName()
     * @uses PrePayId::setType()
     * @param string $id
     * @param \Travelport\UniversalRecord\StructType\CompanyName $companyName
     * @param string $type
     */
    public function __construct(string $id, ?\Travelport\UniversalRecord\StructType\CompanyName $companyName = null, ?string $type = null)
    {
        $this
            ->setId($id)
            ->setCompanyName($companyName)
            ->setType($type);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId(): string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Travelport\UniversalRecord\StructType\PrePayId
     */
    public function setId(string $id): self
    {
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get CompanyName value
     * @return \Travelport\UniversalRecord\StructType\CompanyName|null
     */
    public function getCompanyName(): ?\Travelport\UniversalRecord\StructType\CompanyName
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Travelport\UniversalRecord\StructType\CompanyName $companyName
     * @return \Travelport\UniversalRecord\StructType\PrePayId
     */
    public function setCompanyName(?\Travelport\UniversalRecord\StructType\CompanyName $companyName = null): self
    {
        $this->CompanyName = $companyName;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\UniversalRecord\StructType\PrePayId
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
