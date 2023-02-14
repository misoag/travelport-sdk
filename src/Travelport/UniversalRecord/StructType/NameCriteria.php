<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected ?string $FirstName = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - minLength: 1
     * @var string|null
     */
    protected ?string $LastName = null;
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
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($firstName) && mb_strlen((string) $firstName) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $firstName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($firstName) && mb_strlen((string) $firstName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $firstName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($lastName) && mb_strlen((string) $lastName) > 30) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen((string) $lastName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($lastName) && mb_strlen((string) $lastName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        
        return $this;
    }
}
