<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayRetrieve StructType
 * Meta information extracted from the WSDL
 * - documentation: Provider: ACH.
 * @subpackage Structs
 */
class PrePayRetrieve extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - documentation: Pre pay id to retrieved,example flight pass number | Loyalty Card number with maximum length as 36.
     * - base: xs:string
     * - maxLength: 36
     * - minLength: 1
     * - use: required
     * @var string
     */
    public string $Id;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Pre pay id type,example 'FlightPass'
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for PrePayRetrieve
     * @uses PrePayRetrieve::setId()
     * @uses PrePayRetrieve::setType()
     * @param string $id
     * @param string $type
     */
    public function __construct(string $id, ?string $type = null)
    {
        $this
            ->setId($id)
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
     * @return \Travelport\Air\StructType\PrePayRetrieve
     */
    public function setId(string $id): self
    {
        $this->Id = $id;
        
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
     * @return \Travelport\Air\StructType\PrePayRetrieve
     */
    public function setType(?string $type = null): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
