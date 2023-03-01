<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberOfAdults StructType
 * Meta information extracted from the WSDL
 * - documentation: Number of Adults
 * @subpackage Structs
 */
class NumberOfAdults extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    public ?string $_ = null;
    /**
     * The ExtraAdults
     * Meta information extracted from the WSDL
     * - documentation: The number of extra adults in the room ,use '0' to delete the extra adults
     * - use: optional
     * @var int|null
     */
    public ?int $ExtraAdults = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: Fee for extra adults. Providers: 1g/1v/1p | A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Amount = null;
    /**
     * The Content
     * Meta information extracted from the WSDL
     * - documentation: Additional information. Providers 1p
     * - use: optional
     * @var string|null
     */
    public ?string $Content = null;
    /**
     * Constructor method for NumberOfAdults
     * @uses NumberOfAdults::set_()
     * @uses NumberOfAdults::setExtraAdults()
     * @uses NumberOfAdults::setAmount()
     * @uses NumberOfAdults::setContent()
     * @param string $_
     * @param int $extraAdults
     * @param string $amount
     * @param string $content
     */
    public function __construct(?string $_ = null, ?int $extraAdults = null, ?string $amount = null, ?string $content = null)
    {
        $this
            ->set_($_)
            ->setExtraAdults($extraAdults)
            ->setAmount($amount)
            ->setContent($content);
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
     * @return \Travelport\Hotel\StructType\NumberOfAdults
     */
    public function set_(?string $_ = null): self
    {
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get ExtraAdults value
     * @return int|null
     */
    public function getExtraAdults(): ?int
    {
        return $this->ExtraAdults;
    }
    /**
     * Set ExtraAdults value
     * @param int $extraAdults
     * @return \Travelport\Hotel\StructType\NumberOfAdults
     */
    public function setExtraAdults(?int $extraAdults = null): self
    {
        $this->ExtraAdults = $extraAdults;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Travelport\Hotel\StructType\NumberOfAdults
     */
    public function setAmount(?string $amount = null): self
    {
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Travelport\Hotel\StructType\NumberOfAdults
     */
    public function setContent(?string $content = null): self
    {
        $this->Content = $content;
        
        return $this;
    }
}
