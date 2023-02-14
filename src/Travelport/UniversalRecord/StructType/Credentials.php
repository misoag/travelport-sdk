<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Credentials StructType
 * Meta information extracted from the WSDL
 * - documentation: Container to send login id and password on each request
 * @subpackage Structs
 */
class Credentials extends AbstractStructBase
{
    /**
     * The UserId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 36
     * - use: required
     * @var string
     */
    protected string $UserId;
    /**
     * Constructor method for Credentials
     * @uses Credentials::setUserId()
     * @param string $userId
     */
    public function __construct(string $userId)
    {
        $this
            ->setUserId($userId);
    }
    /**
     * Get UserId value
     * @return string
     */
    public function getUserId(): string
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param string $userId
     * @return \Travelport\UniversalRecord\StructType\Credentials
     */
    public function setUserId(string $userId): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($userId) && mb_strlen((string) $userId) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $userId)), __LINE__);
        }
        $this->UserId = $userId;
        
        return $this;
    }
}
