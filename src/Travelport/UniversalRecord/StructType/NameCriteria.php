<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Traveler First Name and Last Name for Searching misc traveler information
 * @subpackage Structs
 */
class NameCriteria extends AbstractStructBase
{
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * @var string|null
     */
    public ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * @var string|null
     */
    public ?string $LastName = null;
    /**
     * Constructor method for NameCriteria
     * @uses NameCriteria::setFirstName()
     * @uses NameCriteria::setLastName()
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(?string $firstName = null, ?string $lastName = null)
    {
        $this
            ->setFirstName($firstName)
            ->setLastName($lastName);
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Travelport\UniversalRecord\StructType\NameCriteria
     */
    public function setFirstName(?string $firstName = null): self
    {
        $this->FirstName = $firstName;
        
        return $this;
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Travelport\UniversalRecord\StructType\NameCriteria
     */
    public function setLastName(?string $lastName = null): self
    {
        $this->LastName = $lastName;
        
        return $this;
    }
}
