<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Comments StructType
 * @subpackage Structs
 */
class Comments extends AbstractStructBase
{
    /**
     * The _
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * The CommentId
     * Meta information extracted from the WSDL
     * - documentation: Unique comment identifier. For internal Travelport use only. | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $CommentId = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - documentation: date that the comment was entered. | Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The CommenterLanguage
     * Meta information extracted from the WSDL
     * - documentation: Language of the commenter. | 2 Letter ISO Language code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $CommenterLanguage = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - documentation: Source code of the comment entry. Example: 'NB' for Nightsbridge, ‘RG’, ‘AG’ for Agrialla,‘TO’.
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The CommentSourceName
     * Meta information extracted from the WSDL
     * - documentation: Name of the source for the comment.
     * - use: optional
     * @var string|null
     */
    protected ?string $CommentSourceName = null;
    /**
     * The Commenter
     * Meta information extracted from the WSDL
     * - documentation: Name of the comment's poster.
     * - use: optional
     * @var string|null
     */
    protected ?string $Commenter = null;
    /**
     * Constructor method for Comments
     * @uses Comments::set_()
     * @uses Comments::setCommentId()
     * @uses Comments::setDate()
     * @uses Comments::setCommenterLanguage()
     * @uses Comments::setSource()
     * @uses Comments::setCommentSourceName()
     * @uses Comments::setCommenter()
     * @param string $_
     * @param string $commentId
     * @param string $date
     * @param string $commenterLanguage
     * @param string $source
     * @param string $commentSourceName
     * @param string $commenter
     */
    public function __construct(?string $_ = null, ?string $commentId = null, ?string $date = null, ?string $commenterLanguage = null, ?string $source = null, ?string $commentSourceName = null, ?string $commenter = null)
    {
        $this
            ->set_($_)
            ->setCommentId($commentId)
            ->setDate($date)
            ->setCommenterLanguage($commenterLanguage)
            ->setSource($source)
            ->setCommentSourceName($commentSourceName)
            ->setCommenter($commenter);
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
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
    /**
     * Get CommentId value
     * @return string|null
     */
    public function getCommentId(): ?string
    {
        return $this->CommentId;
    }
    /**
     * Set CommentId value
     * @param string $commentId
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function setCommentId(?string $commentId = null): self
    {
        // validation for constraint: string
        if (!is_null($commentId) && !is_string($commentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentId, true), gettype($commentId)), __LINE__);
        }
        $this->CommentId = $commentId;
        
        return $this;
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($date) && !preg_match('/[^:Z].*/', $date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($date, true)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get CommenterLanguage value
     * @return string|null
     */
    public function getCommenterLanguage(): ?string
    {
        return $this->CommenterLanguage;
    }
    /**
     * Set CommenterLanguage value
     * @param string $commenterLanguage
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function setCommenterLanguage(?string $commenterLanguage = null): self
    {
        // validation for constraint: string
        if (!is_null($commenterLanguage) && !is_string($commenterLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commenterLanguage, true), gettype($commenterLanguage)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($commenterLanguage) && mb_strlen((string) $commenterLanguage) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $commenterLanguage)), __LINE__);
        }
        $this->CommenterLanguage = $commenterLanguage;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get CommentSourceName value
     * @return string|null
     */
    public function getCommentSourceName(): ?string
    {
        return $this->CommentSourceName;
    }
    /**
     * Set CommentSourceName value
     * @param string $commentSourceName
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function setCommentSourceName(?string $commentSourceName = null): self
    {
        // validation for constraint: string
        if (!is_null($commentSourceName) && !is_string($commentSourceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentSourceName, true), gettype($commentSourceName)), __LINE__);
        }
        $this->CommentSourceName = $commentSourceName;
        
        return $this;
    }
    /**
     * Get Commenter value
     * @return string|null
     */
    public function getCommenter(): ?string
    {
        return $this->Commenter;
    }
    /**
     * Set Commenter value
     * @param string $commenter
     * @return \Travelport\Hotel\StructType\Comments
     */
    public function setCommenter(?string $commenter = null): self
    {
        // validation for constraint: string
        if (!is_null($commenter) && !is_string($commenter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commenter, true), gettype($commenter)), __LINE__);
        }
        $this->Commenter = $commenter;
        
        return $this;
    }
}
