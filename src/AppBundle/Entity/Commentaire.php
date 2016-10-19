<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentaireRepository")
 * 
 *
 * Defines the properties of the Comment entity to represent the blog comments.
 * See http://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 *
 * Tip: if you have an existing database, you can generate these entity class automatically.
 * See http://symfony.com/doc/current/cookbook/doctrine/reverse_engineering.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="circuit", inversedBy="comments")
     * (Doctrine OWNING SIDE)
     * @ORM\JoinColumn(name="circuit_id", referencedColumnName="id")
     */
    private $circuit;

    /**
     * @ORM\Column(name="content", type="text")
     * @Assert\NotBlank(message="comment.blank")
     * @Assert\Length(
     *     min = "5",	
     *     minMessage = "comment.too_short",
     *     max = "10000",
     *     maxMessage = "comment.too_long"
     * )
     */
    private $content;
    
    /**
     * @ORM\Column(name="note", type="integer")
     * @Assert\Range(  
     * 		min = 0,
     *      max = 5,
     * )
     * 
     */
    private $note;

    /**
     * @ORM\Column(name="authorEmail", type="string")
     * @Assert\Email()
     */
    private $authorEmail;

    /**
     * @ORM\Column(name="publishedAt", type="datetime")
     * @Assert\DateTime()
     */
    private $publishedAt;

    /** Create an empty comment
     *
     */
    public function __construct()
    {
        $this->publishedAt = new \DateTime();
    }

    /**
     * @Assert\IsTrue(message = "comment.is_spam")
     */
    public function isLegitComment()
    {
        $containsInvalidCharacters = false !== strpos($this->content, '@');

        return !$containsInvalidCharacters;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    public function getNote(){
    	return $this->note;
    }
    
    public function setNote($note){
    	$this->note = $note;
    }

    public function getAuthorEmail()
    {
        return $this->authorEmail;
    }
    public function setAuthorEmail($authorEmail)
    {
        $this->authorEmail = $authorEmail;
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }
    public function setPublishedAt(\DateTime $publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    public function getCircuit()
    {
        return $this->circuit;
    }
    public function setCircuit(Circuit $circuit)
    {
        $this->circuit = $circuit;
    }
}
