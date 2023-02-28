<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\UniversalRecord\StructType\ResponseMessage[]
     */
    protected ?array $ResponseMessage = null;
    /**
     * The TraceId
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for this atomic transaction traced by the user. Use is optional.
     * - use: optional
     * @var string|null
     */
    protected ?string $TraceId = null;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - documentation: System generated unique identifier for this atomic transaction.
     * - use: optional
     * @var string|null
     */
    protected ?string $TransactionId = null;
    /**
     * The ResponseTime
     * Meta information extracted from the WSDL
     * - documentation: The time (in ms) the system spent processing this request, not including transmission times.
     * - use: optional
     * @var int|null
     */
    protected ?int $ResponseTime = null;
    /**
     * The CommandHistory
     * Meta information extracted from the WSDL
     * - documentation: HTTP link to download command history and debugging information of the request that generated this response. Must be enabled on the system.
     * - use: optional
     * @var string|null
     */
    protected ?string $CommandHistory = null;
    /**
     * Constructor method for BaseRsp
     * @uses BaseRsp::setResponseMessage()
     * @uses BaseRsp::setTraceId()
     * @uses BaseRsp::setTransactionId()
     * @uses BaseRsp::setResponseTime()
     * @uses BaseRsp::setCommandHistory()
     * @param \Travelport\UniversalRecord\StructType\ResponseMessage[] $responseMessage
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
     * @return \Travelport\UniversalRecord\StructType\ResponseMessage[]
     */
    public function getResponseMessage(): ?array
    {
        return $this->ResponseMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponseMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseMessageForArrayConstraintFromSetResponseMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseRspResponseMessageItem) {
            // validation for constraint: itemType
            if (!$baseRspResponseMessageItem instanceof \Travelport\UniversalRecord\StructType\ResponseMessage) {
                $invalidValues[] = is_object($baseRspResponseMessageItem) ? get_class($baseRspResponseMessageItem) : sprintf('%s(%s)', gettype($baseRspResponseMessageItem), var_export($baseRspResponseMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResponseMessage property can only contain items of type \Travelport\UniversalRecord\StructType\ResponseMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ResponseMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ResponseMessage[] $responseMessage
     * @return \Travelport\UniversalRecord\StructType\BaseRsp
     */
    public function setResponseMessage(?array $responseMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($responseMessageArrayErrorMessage = self::validateResponseMessageForArrayConstraintFromSetResponseMessage($responseMessage))) {
            throw new InvalidArgumentException($responseMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($responseMessage) && count($responseMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($responseMessage)), __LINE__);
        }
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
    /**
     * Add item to ResponseMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ResponseMessage $item
     * @return \Travelport\UniversalRecord\StructType\BaseRsp
     */
    public function addToResponseMessage(\Travelport\UniversalRecord\StructType\ResponseMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ResponseMessage) {
            throw new InvalidArgumentException(sprintf('The ResponseMessage property can only contain items of type \Travelport\UniversalRecord\StructType\ResponseMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ResponseMessage) && count($this->ResponseMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ResponseMessage)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BaseRsp
     */
    public function setTraceId(?string $traceId = null): self
    {
        // validation for constraint: string
        if (!is_null($traceId) && !is_string($traceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traceId, true), gettype($traceId)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BaseRsp
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BaseRsp
     */
    public function setResponseTime(?int $responseTime = null): self
    {
        // validation for constraint: int
        if (!is_null($responseTime) && !(is_int($responseTime) || ctype_digit($responseTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($responseTime, true), gettype($responseTime)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\BaseRsp
     */
    public function setCommandHistory(?string $commandHistory = null): self
    {
        // validation for constraint: string
        if (!is_null($commandHistory) && !is_string($commandHistory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commandHistory, true), gettype($commandHistory)), __LINE__);
        }
        $this->CommandHistory = $commandHistory;
        
        return $this;
    }
}
