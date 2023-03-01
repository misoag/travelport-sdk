<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Additional information about seats. Providers: 1G, 1V, 1P,ACH
 * @subpackage Structs
 */
class SeatInformation extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Key;
    /**
     * The Power
     * Meta information extracted from the WSDL
     * - documentation: Detail about any electrical power the seat might have. For example: No Power Providers: 1G, 1V, 1P
     * @var string|null
     */
    public ?string $Power = null;
    /**
     * The Video
     * Meta information extracted from the WSDL
     * - documentation: Detail about any video components the seat might have. For example: No Video Providers: 1G, 1V, 1P
     * @var string|null
     */
    public ?string $Video = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Detail about the type of seat. For example: Exit Row, Standard, etc. Providers: 1G, 1V, 1P
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: Detailed description of the seat. Providers: 1G, 1V, 1P
     * @var string|null
     */
    public ?string $Description = null;
    /**
     * The Rating
     * @var \Travelport\Air\StructType\Rating|null
     */
    public ?\Travelport\Air\StructType\Rating $Rating = null;
    /**
     * Constructor method for SeatInformation
     * @uses SeatInformation::setKey()
     * @uses SeatInformation::setPower()
     * @uses SeatInformation::setVideo()
     * @uses SeatInformation::setType()
     * @uses SeatInformation::setDescription()
     * @uses SeatInformation::setRating()
     * @param string $key
     * @param string $power
     * @param string $video
     * @param string $type
     * @param string $description
     * @param \Travelport\Air\StructType\Rating $rating
     */
    public function __construct(string $key, ?string $power = null, ?string $video = null, ?string $type = null, ?string $description = null, ?\Travelport\Air\StructType\Rating $rating = null)
    {
        $this
            ->setKey($key)
            ->setPower($power)
            ->setVideo($video)
            ->setType($type)
            ->setDescription($description)
            ->setRating($rating);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\SeatInformation
     */
    public function setKey(string $key): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get Power value
     * @return string|null
     */
    public function getPower(): ?string
    {
        return $this->Power;
    }
    /**
     * Set Power value
     * @param string $power
     * @return \Travelport\Air\StructType\SeatInformation
     */
    public function setPower(?string $power = null): self
    {
        $this->Power = $power;
        
        return $this;
    }
    /**
     * Get Video value
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->Video;
    }
    /**
     * Set Video value
     * @param string $video
     * @return \Travelport\Air\StructType\SeatInformation
     */
    public function setVideo(?string $video = null): self
    {
        $this->Video = $video;
        
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
     * @return \Travelport\Air\StructType\SeatInformation
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
     * @return \Travelport\Air\StructType\SeatInformation
     */
    public function setDescription(?string $description = null): self
    {
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get Rating value
     * @return \Travelport\Air\StructType\Rating|null
     */
    public function getRating(): ?\Travelport\Air\StructType\Rating
    {
        return $this->Rating;
    }
    /**
     * Set Rating value
     * @param \Travelport\Air\StructType\Rating $rating
     * @return \Travelport\Air\StructType\SeatInformation
     */
    public function setRating(?\Travelport\Air\StructType\Rating $rating = null): self
    {
        $this->Rating = $rating;
        
        return $this;
    }
}
