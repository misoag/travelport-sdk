<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReasonCode StructType
 * Meta information extracted from the WSDL
 * - documentation: Reason Code
 * @subpackage Structs
 */
class ReasonCode extends AbstractStructBase
{
    /**
     * The OutOfPolicy
     * Meta information extracted from the WSDL
     * - documentation: Reason Code - Out of Policy
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $OutOfPolicy = null;
    /**
     * The PurposeOfTrip
     * Meta information extracted from the WSDL
     * - documentation: Reason Code -Purpose of Trip
     * - minOccurs: 0
     * @var string|null
     */
    public ?string $PurposeOfTrip = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Remark
     * @var \Travelport\UniversalRecord\StructType\Remark|null
     */
    public ?\Travelport\UniversalRecord\StructType\Remark $Remark = null;
    /**
     * Constructor method for ReasonCode
     * @uses ReasonCode::setOutOfPolicy()
     * @uses ReasonCode::setPurposeOfTrip()
     * @uses ReasonCode::setRemark()
     * @param string $outOfPolicy
     * @param string $purposeOfTrip
     * @param \Travelport\UniversalRecord\StructType\Remark $remark
     */
    public function __construct(?string $outOfPolicy = null, ?string $purposeOfTrip = null, ?\Travelport\UniversalRecord\StructType\Remark $remark = null)
    {
        $this
            ->setOutOfPolicy($outOfPolicy)
            ->setPurposeOfTrip($purposeOfTrip)
            ->setRemark($remark);
    }
    /**
     * Get OutOfPolicy value
     * @return string|null
     */
    public function getOutOfPolicy(): ?string
    {
        return $this->OutOfPolicy;
    }
    /**
     * Set OutOfPolicy value
     * @param string $outOfPolicy
     * @return \Travelport\UniversalRecord\StructType\ReasonCode
     */
    public function setOutOfPolicy(?string $outOfPolicy = null): self
    {
        $this->OutOfPolicy = $outOfPolicy;
        
        return $this;
    }
    /**
     * Get PurposeOfTrip value
     * @return string|null
     */
    public function getPurposeOfTrip(): ?string
    {
        return $this->PurposeOfTrip;
    }
    /**
     * Set PurposeOfTrip value
     * @param string $purposeOfTrip
     * @return \Travelport\UniversalRecord\StructType\ReasonCode
     */
    public function setPurposeOfTrip(?string $purposeOfTrip = null): self
    {
        $this->PurposeOfTrip = $purposeOfTrip;
        
        return $this;
    }
    /**
     * Get Remark value
     * @return \Travelport\UniversalRecord\StructType\Remark|null
     */
    public function getRemark(): ?\Travelport\UniversalRecord\StructType\Remark
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param \Travelport\UniversalRecord\StructType\Remark $remark
     * @return \Travelport\UniversalRecord\StructType\ReasonCode
     */
    public function setRemark(?\Travelport\UniversalRecord\StructType\Remark $remark = null): self
    {
        $this->Remark = $remark;
        
        return $this;
    }
}
