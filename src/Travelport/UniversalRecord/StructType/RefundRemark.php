<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefundRemark StructType
 * Meta information extracted from the WSDL
 * - documentation: A textual remark displayed in Refund Quote and Refund response.
 * @subpackage Structs
 */
class RefundRemark extends AbstractStructBase
{
    /**
     * The RemarkData
     * Meta information extracted from the WSDL
     * - documentation: Actual remark data.
     * @var string|null
     */
    public ?string $RemarkData = null;
    /**
     * Constructor method for RefundRemark
     * @uses RefundRemark::setRemarkData()
     * @param string $remarkData
     */
    public function __construct(?string $remarkData = null)
    {
        $this
            ->setRemarkData($remarkData);
    }
    /**
     * Get RemarkData value
     * @return string|null
     */
    public function getRemarkData(): ?string
    {
        return $this->RemarkData;
    }
    /**
     * Set RemarkData value
     * @param string $remarkData
     * @return \Travelport\UniversalRecord\StructType\RefundRemark
     */
    public function setRemarkData(?string $remarkData = null): self
    {
        $this->RemarkData = $remarkData;
        
        return $this;
    }
}
