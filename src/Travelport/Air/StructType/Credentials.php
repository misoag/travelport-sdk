<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $UserId;
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
     * @return \Travelport\Air\StructType\Credentials
     */
    public function setUserId(string $userId): self
    {
        $this->UserId = $userId;
        
        return $this;
    }
}
