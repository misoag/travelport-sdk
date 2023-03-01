<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseCoreReq StructType
 * @subpackage Structs
 */
class BaseCoreReq extends AbstractStructBase
{
    /**
     * The BillingPointOfSaleInfo
     * Meta information extracted from the WSDL
     * - ref: BillingPointOfSaleInfo
     * @var \Travelport\Hotel\StructType\BillingPointOfSaleInfo|null
     */
    public ?\Travelport\Hotel\StructType\BillingPointOfSaleInfo $BillingPointOfSaleInfo = null;
    /**
     * The AgentIDOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AgentIDOverride
     * @var \Travelport\Hotel\StructType\AgentIDOverride[]
     */
    public ?array $AgentIDOverride = null;
    /**
     * The TerminalSessionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: TerminalSessionInfo
     * @var string|null
     */
    public ?string $TerminalSessionInfo = null;
    /**
     * The TraceId
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for this atomic transaction traced by the user. Use is optional.
     * - use: optional
     * @var string|null
     */
    public ?string $TraceId = null;
    /**
     * The TokenId
     * Meta information extracted from the WSDL
     * - documentation: Authentication Token ID used when running in statefull operation. Obtained from the LoginRsp. Use is optional.
     * - use: optional
     * @var string|null
     */
    public ?string $TokenId = null;
    /**
     * The AuthorizedBy
     * Meta information extracted from the WSDL
     * - documentation: Used in showing who authorized the request. Use is optional.
     * - use: optional
     * @var string|null
     */
    public ?string $AuthorizedBy = null;
    /**
     * The TargetBranch
     * Meta information extracted from the WSDL
     * - documentation: Used for Emulation - If authorised will execute the request as if the agent's parent branch is the TargetBranch specified. | Agency Branch Code Identifier
     * - base: xs:string
     * - maxLength: 25
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $TargetBranch = null;
    /**
     * The OverrideLogging
     * Meta information extracted from the WSDL
     * - documentation: Use to override the default logging level
     * - use: optional
     * @var string|null
     */
    public ?string $OverrideLogging = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * - use: optional
     * @var string|null
     */
    public ?string $LanguageCode = null;
    /**
     * Constructor method for BaseCoreReq
     * @uses BaseCoreReq::setBillingPointOfSaleInfo()
     * @uses BaseCoreReq::setAgentIDOverride()
     * @uses BaseCoreReq::setTerminalSessionInfo()
     * @uses BaseCoreReq::setTraceId()
     * @uses BaseCoreReq::setTokenId()
     * @uses BaseCoreReq::setAuthorizedBy()
     * @uses BaseCoreReq::setTargetBranch()
     * @uses BaseCoreReq::setOverrideLogging()
     * @uses BaseCoreReq::setLanguageCode()
     * @param \Travelport\Hotel\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo
     * @param \Travelport\Hotel\StructType\AgentIDOverride[] $agentIDOverride
     * @param string $terminalSessionInfo
     * @param string $traceId
     * @param string $tokenId
     * @param string $authorizedBy
     * @param string $targetBranch
     * @param string $overrideLogging
     * @param string $languageCode
     */
    public function __construct(?\Travelport\Hotel\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo = null, ?array $agentIDOverride = null, ?string $terminalSessionInfo = null, ?string $traceId = null, ?string $tokenId = null, ?string $authorizedBy = null, ?string $targetBranch = null, ?string $overrideLogging = null, ?string $languageCode = null)
    {
        $this
            ->setBillingPointOfSaleInfo($billingPointOfSaleInfo)
            ->setAgentIDOverride($agentIDOverride)
            ->setTerminalSessionInfo($terminalSessionInfo)
            ->setTraceId($traceId)
            ->setTokenId($tokenId)
            ->setAuthorizedBy($authorizedBy)
            ->setTargetBranch($targetBranch)
            ->setOverrideLogging($overrideLogging)
            ->setLanguageCode($languageCode);
    }
    /**
     * Get BillingPointOfSaleInfo value
     * @return \Travelport\Hotel\StructType\BillingPointOfSaleInfo|null
     */
    public function getBillingPointOfSaleInfo(): ?\Travelport\Hotel\StructType\BillingPointOfSaleInfo
    {
        return $this->BillingPointOfSaleInfo;
    }
    /**
     * Set BillingPointOfSaleInfo value
     * @param \Travelport\Hotel\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setBillingPointOfSaleInfo(?\Travelport\Hotel\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo = null): self
    {
        $this->BillingPointOfSaleInfo = $billingPointOfSaleInfo;
        
        return $this;
    }
    /**
     * Get AgentIDOverride value
     * @return \Travelport\Hotel\StructType\AgentIDOverride[]
     */
    public function getAgentIDOverride(): ?array
    {
        return $this->AgentIDOverride;
    }
    /**
     * Set AgentIDOverride value
     * @param \Travelport\Hotel\StructType\AgentIDOverride[] $agentIDOverride
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setAgentIDOverride(?array $agentIDOverride = null): self
    {
        $this->AgentIDOverride = $agentIDOverride;
        
        return $this;
    }
    /**
     * Add item to AgentIDOverride value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\AgentIDOverride $item
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function addToAgentIDOverride(\Travelport\Hotel\StructType\AgentIDOverride $item): self
    {
        $this->AgentIDOverride[] = $item;
        
        return $this;
    }
    /**
     * Get TerminalSessionInfo value
     * @return string|null
     */
    public function getTerminalSessionInfo(): ?string
    {
        return $this->TerminalSessionInfo;
    }
    /**
     * Set TerminalSessionInfo value
     * @param string $terminalSessionInfo
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setTerminalSessionInfo(?string $terminalSessionInfo = null): self
    {
        $this->TerminalSessionInfo = $terminalSessionInfo;
        
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
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setTraceId(?string $traceId = null): self
    {
        $this->TraceId = $traceId;
        
        return $this;
    }
    /**
     * Get TokenId value
     * @return string|null
     */
    public function getTokenId(): ?string
    {
        return $this->TokenId;
    }
    /**
     * Set TokenId value
     * @param string $tokenId
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setTokenId(?string $tokenId = null): self
    {
        $this->TokenId = $tokenId;
        
        return $this;
    }
    /**
     * Get AuthorizedBy value
     * @return string|null
     */
    public function getAuthorizedBy(): ?string
    {
        return $this->AuthorizedBy;
    }
    /**
     * Set AuthorizedBy value
     * @param string $authorizedBy
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setAuthorizedBy(?string $authorizedBy = null): self
    {
        $this->AuthorizedBy = $authorizedBy;
        
        return $this;
    }
    /**
     * Get TargetBranch value
     * @return string|null
     */
    public function getTargetBranch(): ?string
    {
        return $this->TargetBranch;
    }
    /**
     * Set TargetBranch value
     * @param string $targetBranch
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setTargetBranch(?string $targetBranch = null): self
    {
        $this->TargetBranch = $targetBranch;
        
        return $this;
    }
    /**
     * Get OverrideLogging value
     * @return string|null
     */
    public function getOverrideLogging(): ?string
    {
        return $this->OverrideLogging;
    }
    /**
     * Set OverrideLogging value
     * @param string $overrideLogging
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setOverrideLogging(?string $overrideLogging = null): self
    {
        $this->OverrideLogging = $overrideLogging;
        
        return $this;
    }
    /**
     * Get LanguageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->LanguageCode;
    }
    /**
     * Set LanguageCode value
     * @param string $languageCode
     * @return \Travelport\Hotel\StructType\BaseCoreReq
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
