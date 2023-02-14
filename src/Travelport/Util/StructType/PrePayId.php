<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Id;
    /**
     * The CompanyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CompanyName
     * @var \Travelport\Util\StructType\CompanyName|null
     */
    protected ?\Travelport\Util\StructType\CompanyName $CompanyName = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type of pre pay unique identifier,presently only available value is FlightPass.
     * - use: optional
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for PrePayId
     * @uses PrePayId::setId()
     * @uses PrePayId::setCompanyName()
     * @uses PrePayId::setType()
     * @param string $id
     * @param \Travelport\Util\StructType\CompanyName $companyName
     * @param string $type
     */
    public function __construct(string $id, ?\Travelport\Util\StructType\CompanyName $companyName = null, ?string $type = null)
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
     * @return \Travelport\Util\StructType\PrePayId
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($id) && mb_strlen((string) $id) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $id)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($id) && mb_strlen((string) $id) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get CompanyName value
     * @return \Travelport\Util\StructType\CompanyName|null
     */
    public function getCompanyName(): ?\Travelport\Util\StructType\CompanyName
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param \Travelport\Util\StructType\CompanyName $companyName
     * @return \Travelport\Util\StructType\PrePayId
     */
    public function setCompanyName(?\Travelport\Util\StructType\CompanyName $companyName = null): self
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
     * @return \Travelport\Util\StructType\PrePayId
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
