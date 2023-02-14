<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueueNextModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Can only be used when modifying an Universal Record in Queue mode.If notspecified along with ReturnRecord as false then current PNR in queue contextwill be removed.
 * @subpackage Structs
 */
class QueueNextModifiers extends AbstractStructBase
{
    /**
     * The NextOnQueue
     * Meta information extracted from the WSDL
     * - documentation: Set to true to retrieve the next PNR on Queue ,if not set or set to false system would return the current PNR.NextOnQueue cannot be combined with Provider Locator Code and ReturnRecord as true
     * @var bool|null
     */
    protected ?bool $NextOnQueue = null;
    /**
     * The ProviderLocatorCode
     * Meta information extracted from the WSDL
     * - documentation: If providerLocatorCode is specified then system would return the specified locator code in Queue mode .Provider Locator Code cannot be combined with NextOnQueue and ReturnRecord as true | A Locator Code that uniquely identifies a
     * Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderLocatorCode = null;
    /**
     * The ReQueueCurrent
     * Meta information extracted from the WSDL
     * - documentation: Set to true to place the current PNR back on Queue
     * @var bool|null
     */
    protected ?bool $ReQueueCurrent = null;
    /**
     * The QueueSessionToken
     * Meta information extracted from the WSDL
     * - documentation: Queue Session Token to hold session token for multiple queue
     * - use: optional
     * @var string|null
     */
    protected ?string $QueueSessionToken = null;
    /**
     * Constructor method for QueueNextModifiers
     * @uses QueueNextModifiers::setNextOnQueue()
     * @uses QueueNextModifiers::setProviderLocatorCode()
     * @uses QueueNextModifiers::setReQueueCurrent()
     * @uses QueueNextModifiers::setQueueSessionToken()
     * @param bool $nextOnQueue
     * @param string $providerLocatorCode
     * @param bool $reQueueCurrent
     * @param string $queueSessionToken
     */
    public function __construct(?bool $nextOnQueue = null, ?string $providerLocatorCode = null, ?bool $reQueueCurrent = null, ?string $queueSessionToken = null)
    {
        $this
            ->setNextOnQueue($nextOnQueue)
            ->setProviderLocatorCode($providerLocatorCode)
            ->setReQueueCurrent($reQueueCurrent)
            ->setQueueSessionToken($queueSessionToken);
    }
    /**
     * Get NextOnQueue value
     * @return bool|null
     */
    public function getNextOnQueue(): ?bool
    {
        return $this->NextOnQueue;
    }
    /**
     * Set NextOnQueue value
     * @param bool $nextOnQueue
     * @return \Travelport\UniversalRecord\StructType\QueueNextModifiers
     */
    public function setNextOnQueue(?bool $nextOnQueue = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nextOnQueue) && !is_bool($nextOnQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nextOnQueue, true), gettype($nextOnQueue)), __LINE__);
        }
        $this->NextOnQueue = $nextOnQueue;
        
        return $this;
    }
    /**
     * Get ProviderLocatorCode value
     * @return string|null
     */
    public function getProviderLocatorCode(): ?string
    {
        return $this->ProviderLocatorCode;
    }
    /**
     * Set ProviderLocatorCode value
     * @param string $providerLocatorCode
     * @return \Travelport\UniversalRecord\StructType\QueueNextModifiers
     */
    public function setProviderLocatorCode(?string $providerLocatorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($providerLocatorCode) && !is_string($providerLocatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerLocatorCode, true), gettype($providerLocatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($providerLocatorCode) && mb_strlen((string) $providerLocatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $providerLocatorCode)), __LINE__);
        }
        $this->ProviderLocatorCode = $providerLocatorCode;
        
        return $this;
    }
    /**
     * Get ReQueueCurrent value
     * @return bool|null
     */
    public function getReQueueCurrent(): ?bool
    {
        return $this->ReQueueCurrent;
    }
    /**
     * Set ReQueueCurrent value
     * @param bool $reQueueCurrent
     * @return \Travelport\UniversalRecord\StructType\QueueNextModifiers
     */
    public function setReQueueCurrent(?bool $reQueueCurrent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($reQueueCurrent) && !is_bool($reQueueCurrent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reQueueCurrent, true), gettype($reQueueCurrent)), __LINE__);
        }
        $this->ReQueueCurrent = $reQueueCurrent;
        
        return $this;
    }
    /**
     * Get QueueSessionToken value
     * @return string|null
     */
    public function getQueueSessionToken(): ?string
    {
        return $this->QueueSessionToken;
    }
    /**
     * Set QueueSessionToken value
     * @param string $queueSessionToken
     * @return \Travelport\UniversalRecord\StructType\QueueNextModifiers
     */
    public function setQueueSessionToken(?string $queueSessionToken = null): self
    {
        // validation for constraint: string
        if (!is_null($queueSessionToken) && !is_string($queueSessionToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queueSessionToken, true), gettype($queueSessionToken)), __LINE__);
        }
        $this->QueueSessionToken = $queueSessionToken;
        
        return $this;
    }
}
