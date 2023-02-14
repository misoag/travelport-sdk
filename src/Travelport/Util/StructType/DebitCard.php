<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitCard StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for all debit card information.
 * @subpackage Structs
 */
class DebitCard extends TypePaymentCard
{
    /**
     * The IssueNumber
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    protected ?string $IssueNumber = null;
    /**
     * The ProfileID
     * Meta information extracted from the WSDL
     * - documentation: The unique ID of the profile that contains the payment details to use.
     * - type: xs:string
     * @var string|null
     */
    protected ?string $ProfileID = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: The Key assigned to the payment details value from the specified profile. | Reference type
     * - base: xs:string
     * - type: typeRef
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * Constructor method for DebitCard
     * @uses DebitCard::setIssueNumber()
     * @uses DebitCard::setProfileID()
     * @uses DebitCard::setKey()
     * @param string $issueNumber
     * @param string $profileID
     * @param string $key
     */
    public function __construct(?string $issueNumber = null, ?string $profileID = null, ?string $key = null)
    {
        $this
            ->setIssueNumber($issueNumber)
            ->setProfileID($profileID)
            ->setKey($key);
    }
    /**
     * Get IssueNumber value
     * @return string|null
     */
    public function getIssueNumber(): ?string
    {
        return $this->IssueNumber;
    }
    /**
     * Set IssueNumber value
     * @param string $issueNumber
     * @return \Travelport\Util\StructType\DebitCard
     */
    public function setIssueNumber(?string $issueNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($issueNumber) && !is_string($issueNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueNumber, true), gettype($issueNumber)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($issueNumber) && mb_strlen((string) $issueNumber) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $issueNumber)), __LINE__);
        }
        $this->IssueNumber = $issueNumber;
        
        return $this;
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID(): ?string
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Travelport\Util\StructType\DebitCard
     */
    public function setProfileID(?string $profileID = null): self
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($profileID, true), gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        
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
     * @return \Travelport\Util\StructType\DebitCard
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
}
