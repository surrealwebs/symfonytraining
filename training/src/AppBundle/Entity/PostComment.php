<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PostComment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PostCommentRepository")
 */
class PostComment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime")
     */
    private $commentDate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_body", type="text")
     */
    private $commentBody;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_approved", type="boolean")
     */
    private $isApproved;

    /**
     * The BlogPost that is the target of this Comment.
     *
     * @var BlogPost
     *
     * @ORM\ManyToOne(targetEntity="BlogPost", inversedBy="comments")
     * @ORM\JoinColumn(name="blog_post_id", referencedColumnName="id", nullable=false)
     */
    private $blogPost;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     *
     * @return PostComment
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }

    /**
     * Set commentBody
     *
     * @param string $commentBody
     *
     * @return PostComment
     */
    public function setCommentBody($commentBody)
    {
        $this->commentBody = $commentBody;

        return $this;
    }

    /**
     * Get commentBody
     *
     * @return string
     */
    public function getCommentBody()
    {
        return $this->commentBody;
    }

    /**
     * Set isApproved
     *
     * @param boolean $isApproved
     *
     * @return PostComment
     */
    public function setIsApproved($isApproved)
    {
        $this->isApproved = $isApproved;

        return $this;
    }

    /**
     * Get isApproved
     *
     * @return boolean
     */
    public function getIsApproved()
    {
        return $this->isApproved;
    }

    /**
     * Get the BlogPost this comment belongs to
     *
     * @return BlogPost
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }

    /**
     * Set the BlogPost this comment belongs to
     *
     * @param BlogPost $blogPost
     *
     * @return PostComment
     */
    public function setBlogPost($blogPost)
    {
        $this->blogPost = $blogPost;

        return $this;
    }


}

