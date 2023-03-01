<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public ?string $Code = null;
    /**
     * The Service
     * @var string|null
     */
    public ?string $Service = null;
    /**
     * The Type
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Description
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The TransactionId
     * @var string|null
     */
    public ?string $TransactionId = null;
    /**
     * The TraceId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $TraceId = null;
    /**
     * The CommandHistory
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $CommandHistory = null;
    /**
     * The Auxdata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Auxdata
     * @var \Travelport\Air\StructType\Auxdata|null
     */
    public ?\Travelport\Air\StructType\Auxdata $Auxdata = null;
    /**
     * The StackTrace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $StackTrace = null;
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
     * @param \Travelport\Air\StructType\Auxdata $auxdata
     * @param string $stackTrace
     */
    public function __construct(?string $code = null, ?string $service = null, ?string $type = null, ?string $description = null, ?string $transactionId = null, ?string $traceId = null, ?string $commandHistory = null, ?\Travelport\Air\StructType\Auxdata $auxdata = null, ?string $stackTrace = null)
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setCode(?string $code = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setService(?string $service = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setType(?string $type = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setDescription(?string $description = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setTransactionId(?string $transactionId = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setTraceId(?string $traceId = null): self
    {
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setCommandHistory(?string $commandHistory = null): self
    {
        $this->CommandHistory = $commandHistory;
        
        return $this;
    }
    /**
     * Get Auxdata value
     * @return \Travelport\Air\StructType\Auxdata|null
     */
    public function getAuxdata(): ?\Travelport\Air\StructType\Auxdata
    {
        return $this->Auxdata;
    }
    /**
     * Set Auxdata value
     * @param \Travelport\Air\StructType\Auxdata $auxdata
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setAuxdata(?\Travelport\Air\StructType\Auxdata $auxdata = null): self
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
     * @return \Travelport\Air\StructType\TypeErrorInfo
     */
    public function setStackTrace(?string $stackTrace = null): self
    {
        $this->StackTrace = $stackTrace;
        
        return $this;
    }
}
