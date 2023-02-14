<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\BillingPointOfSaleInfo|null
     */
    protected ?\Travelport\Util\StructType\BillingPointOfSaleInfo $BillingPointOfSaleInfo = null;
    /**
     * The AgentIDOverride
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AgentIDOverride
     * @var \Travelport\Util\StructType\AgentIDOverride[]
     */
    protected ?array $AgentIDOverride = null;
    /**
     * The TerminalSessionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: TerminalSessionInfo
     * @var string|null
     */
    protected ?string $TerminalSessionInfo = null;
    /**
     * The TraceId
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for this atomic transaction traced by the user. Use is optional.
     * - use: optional
     * @var string|null
     */
    protected ?string $TraceId = null;
    /**
     * The TokenId
     * Meta information extracted from the WSDL
     * - documentation: Authentication Token ID used when running in statefull operation. Obtained from the LoginRsp. Use is optional.
     * - use: optional
     * @var string|null
     */
    protected ?string $TokenId = null;
    /**
     * The AuthorizedBy
     * Meta information extracted from the WSDL
     * - documentation: Used in showing who authorized the request. Use is optional.
     * - use: optional
     * @var string|null
     */
    protected ?string $AuthorizedBy = null;
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
    protected ?string $TargetBranch = null;
    /**
     * The OverrideLogging
     * Meta information extracted from the WSDL
     * - documentation: Use to override the default logging level
     * - use: optional
     * @var string|null
     */
    protected ?string $OverrideLogging = null;
    /**
     * The LanguageCode
     * Meta information extracted from the WSDL
     * - documentation: ISO 639 two-character language codes are used to retrieve specific information in the requested language. For Rich Content and Branding, language codes ZH-HANT (Chinese Traditional), ZH-HANS (Chinese Simplified), FR-CA (French
     * Canadian) and PT-BR (Portuguese Brazil) can also be used. For RCH, language codes ENGB, ENUS, DEDE, DECH can also be used. Only certain services support this attribute. Providers: ACH, RCH, 1G, 1V, 1P.
     * - use: optional
     * @var string|null
     */
    protected ?string $LanguageCode = null;
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
     * @param \Travelport\Util\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo
     * @param \Travelport\Util\StructType\AgentIDOverride[] $agentIDOverride
     * @param string $terminalSessionInfo
     * @param string $traceId
     * @param string $tokenId
     * @param string $authorizedBy
     * @param string $targetBranch
     * @param string $overrideLogging
     * @param string $languageCode
     */
    public function __construct(?\Travelport\Util\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo = null, ?array $agentIDOverride = null, ?string $terminalSessionInfo = null, ?string $traceId = null, ?string $tokenId = null, ?string $authorizedBy = null, ?string $targetBranch = null, ?string $overrideLogging = null, ?string $languageCode = null)
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
     * @return \Travelport\Util\StructType\BillingPointOfSaleInfo|null
     */
    public function getBillingPointOfSaleInfo(): ?\Travelport\Util\StructType\BillingPointOfSaleInfo
    {
        return $this->BillingPointOfSaleInfo;
    }
    /**
     * Set BillingPointOfSaleInfo value
     * @param \Travelport\Util\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setBillingPointOfSaleInfo(?\Travelport\Util\StructType\BillingPointOfSaleInfo $billingPointOfSaleInfo = null): self
    {
        $this->BillingPointOfSaleInfo = $billingPointOfSaleInfo;
        
        return $this;
    }
    /**
     * Get AgentIDOverride value
     * @return \Travelport\Util\StructType\AgentIDOverride[]
     */
    public function getAgentIDOverride(): ?array
    {
        return $this->AgentIDOverride;
    }
    /**
     * This method is responsible for validating the values passed to the setAgentIDOverride method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAgentIDOverride method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAgentIDOverrideForArrayConstraintsFromSetAgentIDOverride(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseCoreReqAgentIDOverrideItem) {
            // validation for constraint: itemType
            if (!$baseCoreReqAgentIDOverrideItem instanceof \Travelport\Util\StructType\AgentIDOverride) {
                $invalidValues[] = is_object($baseCoreReqAgentIDOverrideItem) ? get_class($baseCoreReqAgentIDOverrideItem) : sprintf('%s(%s)', gettype($baseCoreReqAgentIDOverrideItem), var_export($baseCoreReqAgentIDOverrideItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AgentIDOverride property can only contain items of type \Travelport\Util\StructType\AgentIDOverride, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AgentIDOverride value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AgentIDOverride[] $agentIDOverride
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setAgentIDOverride(?array $agentIDOverride = null): self
    {
        // validation for constraint: array
        if ('' !== ($agentIDOverrideArrayErrorMessage = self::validateAgentIDOverrideForArrayConstraintsFromSetAgentIDOverride($agentIDOverride))) {
            throw new InvalidArgumentException($agentIDOverrideArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($agentIDOverride) && count($agentIDOverride) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($agentIDOverride)), __LINE__);
        }
        $this->AgentIDOverride = $agentIDOverride;
        
        return $this;
    }
    /**
     * Add item to AgentIDOverride value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AgentIDOverride $item
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function addToAgentIDOverride(\Travelport\Util\StructType\AgentIDOverride $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AgentIDOverride) {
            throw new InvalidArgumentException(sprintf('The AgentIDOverride property can only contain items of type \Travelport\Util\StructType\AgentIDOverride, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AgentIDOverride) && count($this->AgentIDOverride) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AgentIDOverride)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setTerminalSessionInfo(?string $terminalSessionInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($terminalSessionInfo) && !is_string($terminalSessionInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminalSessionInfo, true), gettype($terminalSessionInfo)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\BaseCoreReq
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
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setTokenId(?string $tokenId = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenId) && !is_string($tokenId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenId, true), gettype($tokenId)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setAuthorizedBy(?string $authorizedBy = null): self
    {
        // validation for constraint: string
        if (!is_null($authorizedBy) && !is_string($authorizedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authorizedBy, true), gettype($authorizedBy)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setTargetBranch(?string $targetBranch = null): self
    {
        // validation for constraint: string
        if (!is_null($targetBranch) && !is_string($targetBranch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetBranch, true), gettype($targetBranch)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($targetBranch) && mb_strlen((string) $targetBranch) > 25) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen((string) $targetBranch)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($targetBranch) && mb_strlen((string) $targetBranch) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $targetBranch)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeLoggingLevel::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeLoggingLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $overrideLogging
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setOverrideLogging(?string $overrideLogging = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeLoggingLevel::valueIsValid($overrideLogging)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeLoggingLevel', is_array($overrideLogging) ? implode(', ', $overrideLogging) : var_export($overrideLogging, true), implode(', ', \Travelport\Util\EnumType\TypeLoggingLevel::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\BaseCoreReq
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->LanguageCode = $languageCode;
        
        return $this;
    }
}
