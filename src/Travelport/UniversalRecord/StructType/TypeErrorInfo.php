<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeErrorInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for error data when there is an application error.
 * @subpackage Structs
 */
class TypeErrorInfo extends AbstractStructBase
{
    /**
     * The Code
     * @var string|null
     */
    protected ?string $Code = null;
    /**
     * The Service
     * @var string|null
     */
    protected ?string $Service = null;
    /**
     * The Type
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The Description
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The TransactionId
     * @var string|null
     */
    protected ?string $TransactionId = null;
    /**
     * The TraceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TraceId = null;
    /**
     * The CommandHistory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CommandHistory = null;
    /**
     * The Auxdata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Auxdata
     * @var \Travelport\UniversalRecord\StructType\Auxdata|null
     */
    protected ?\Travelport\UniversalRecord\StructType\Auxdata $Auxdata = null;
    /**
     * The StackTrace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StackTrace = null;
    /**
     * Constructor method for typeErrorInfo
     * @uses TypeErrorInfo::setCode()
     * @uses TypeErrorInfo::setService()
     * @uses TypeErrorInfo::setType()
     * @uses TypeErrorInfo::setDescription()
     * @uses TypeErrorInfo::setTransactionId()
     * @uses TypeErrorInfo::setTraceId()
     * @uses TypeErrorInfo::setCommandHistory()
     * @uses TypeErrorInfo::setAuxdata()
     * @uses TypeErrorInfo::setStackTrace()
     * @param string $code
     * @param string $service
     * @param string $type
     * @param string $description
     * @param string $transactionId
     * @param string $traceId
     * @param string $commandHistory
     * @param \Travelport\UniversalRecord\StructType\Auxdata $auxdata
     * @param string $stackTrace
     */
    public function __construct(?string $code = null, ?string $service = null, ?string $type = null, ?string $description = null, ?string $transactionId = null, ?string $traceId = null, ?string $commandHistory = null, ?\Travelport\UniversalRecord\StructType\Auxdata $auxdata = null, ?string $stackTrace = null)
    {
        $this
            ->setCode($code)
            ->setService($service)
            ->setType($type)
            ->setDescription($description)
            ->setTransactionId($transactionId)
            ->setTraceId($traceId)
            ->setCommandHistory($commandHistory)
            ->setAuxdata($auxdata)
            ->setStackTrace($stackTrace);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param string $service
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->Service = $service;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
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
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
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
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
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
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
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
    /**
     * Get Auxdata value
     * @return \Travelport\UniversalRecord\StructType\Auxdata|null
     */
    public function getAuxdata(): ?\Travelport\UniversalRecord\StructType\Auxdata
    {
        return $this->Auxdata;
    }
    /**
     * Set Auxdata value
     * @param \Travelport\UniversalRecord\StructType\Auxdata $auxdata
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
     */
    public function setAuxdata(?\Travelport\UniversalRecord\StructType\Auxdata $auxdata = null): self
    {
        $this->Auxdata = $auxdata;
        
        return $this;
    }
    /**
     * Get StackTrace value
     * @return string|null
     */
    public function getStackTrace(): ?string
    {
        return $this->StackTrace;
    }
    /**
     * Set StackTrace value
     * @param string $stackTrace
     * @return \Travelport\UniversalRecord\StructType\TypeErrorInfo
     */
    public function setStackTrace(?string $stackTrace = null): self
    {
        // validation for constraint: string
        if (!is_null($stackTrace) && !is_string($stackTrace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stackTrace, true), gettype($stackTrace)), __LINE__);
        }
        $this->StackTrace = $stackTrace;
        
        return $this;
    }
}
