<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: The base type for all responses.
 * @subpackage Structs
 */
class BaseRsp extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ResponseMessage
     * @var \Travelport\Hotel\StructType\ResponseMessage[]
     */
    public ?array $ResponseMessage = null;
    /**
     * The TraceId
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for this atomic transaction traced by the user. Use is optional.
     * - use: optional
     * @var string|null
     */
    public ?string $TraceId = null;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - documentation: System generated unique identifier for this atomic transaction.
     * - use: optional
     * @var string|null
     */
    public ?string $TransactionId = null;
    /**
     * The ResponseTime
     * Meta information extracted from the WSDL
     * - documentation: The time (in ms) the system spent processing this request, not including transmission times.
     * - use: optional
     * @var int|null
     */
    public ?int $ResponseTime = null;
    /**
     * The CommandHistory
     * Meta information extracted from the WSDL
     * - documentation: HTTP link to download command history and debugging information of the request that generated this response. Must be enabled on the system.
     * - use: optional
     * @var string|null
     */
    public ?string $CommandHistory = null;
    /**
     * Constructor method for BaseRsp
     * @uses BaseRsp::setResponseMessage()
     * @uses BaseRsp::setTraceId()
     * @uses BaseRsp::setTransactionId()
     * @uses BaseRsp::setResponseTime()
     * @uses BaseRsp::setCommandHistory()
     * @param \Travelport\Hotel\StructType\ResponseMessage[] $responseMessage
     * @param string $traceId
     * @param string $transactionId
     * @param int $responseTime
     * @param string $commandHistory
     */
    public function __construct(?array $responseMessage = null, ?string $traceId = null, ?string $transactionId = null, ?int $responseTime = null, ?string $commandHistory = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setTraceId($traceId)
            ->setTransactionId($transactionId)
            ->setResponseTime($responseTime)
            ->setCommandHistory($commandHistory);
    }
    /**
     * Get ResponseMessage value
     * @return \Travelport\Hotel\StructType\ResponseMessage[]
     */
    public function getResponseMessage(): ?array
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Travelport\Hotel\StructType\ResponseMessage[] $responseMessage
     * @return \Travelport\Hotel\StructType\BaseRsp
     */
    public function setResponseMessage(?array $responseMessage = null): self
    {
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
    /**
     * Add item to ResponseMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\ResponseMessage $item
     * @return \Travelport\Hotel\StructType\BaseRsp
     */
    public function addToResponseMessage(\Travelport\Hotel\StructType\ResponseMessage $item): self
    {
        $this->ResponseMessage[] = $item;
        
        return $this;
    }
    /**
     * Get TraceId value
     * @return string|null
     */
    public function getTraceId(): ?string
    {
        return $this->TraceId;
    }
    /**
     * Set TraceId value
     * @param string $traceId
     * @return \Travelport\Hotel\StructType\BaseRsp
     */
    public function setTraceId(?string $traceId = null): self
    {
        $this->TraceId = $traceId;
        
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Travelport\Hotel\StructType\BaseRsp
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        $this->TransactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get ResponseTime value
     * @return int|null
     */
    public function getResponseTime(): ?int
    {
        return $this->ResponseTime;
    }
    /**
     * Set ResponseTime value
     * @param int $responseTime
     * @return \Travelport\Hotel\StructType\BaseRsp
     */
    public function setResponseTime(?int $responseTime = null): self
    {
        $this->ResponseTime = $responseTime;
        
        return $this;
    }
    /**
     * Get CommandHistory value
     * @return string|null
     */
    public function getCommandHistory(): ?string
    {
        return $this->CommandHistory;
    }
    /**
     * Set CommandHistory value
     * @param string $commandHistory
     * @return \Travelport\Hotel\StructType\BaseRsp
     */
    public function setCommandHistory(?string $commandHistory = null): self
    {
        $this->CommandHistory = $commandHistory;
        
        return $this;
    }
}
