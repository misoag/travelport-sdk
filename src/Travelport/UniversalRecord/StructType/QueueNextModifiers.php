<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public ?bool $NextOnQueue = null;
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
    public ?string $ProviderLocatorCode = null;
    /**
     * The ReQueueCurrent
     * Meta information extracted from the WSDL
     * - documentation: Set to true to place the current PNR back on Queue
     * @var bool|null
     */
    public ?bool $ReQueueCurrent = null;
    /**
     * The QueueSessionToken
     * Meta information extracted from the WSDL
     * - documentation: Queue Session Token to hold session token for multiple queue
     * - use: optional
     * @var string|null
     */
    public ?string $QueueSessionToken = null;
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
        $this->QueueSessionToken = $queueSessionToken;
        
        return $this;
    }
}
