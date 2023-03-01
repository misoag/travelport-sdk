<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCORemark StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to fare construction, free form text etc. of the MCO
 * @subpackage Structs
 */
class MCORemark extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The AdditionalRmk
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the remark is additional remark or not.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdditionalRmk = null;
    /**
     * Constructor method for MCORemark
     * @uses MCORemark::set_()
     * @uses MCORemark::setAdditionalRmk()
     * @param string $_
     * @param bool $additionalRmk
     */
    public function __construct(?string $_ = null, ?bool $additionalRmk = null)
    {
        $this
            ->set_($_)
            ->setAdditionalRmk($additionalRmk);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\Hotel\StructType\MCORemark
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get AdditionalRmk value
     * @return bool|null
     */
    public function getAdditionalRmk(): ?bool
    {
        return $this->AdditionalRmk;
    }
    /**
     * Set AdditionalRmk value
     * @param bool $additionalRmk
     * @return \Travelport\Hotel\StructType\MCORemark
     */
    public function setAdditionalRmk(?bool $additionalRmk = null): self
    {
        $this->AdditionalRmk = $additionalRmk;
        
        return $this;
    }
}
