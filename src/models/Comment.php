<?php

namespace App\src\models;

class Comment
{
    //! Propriétés

    /**
     * Id of Comment.
     *
     * @var int
     */
    private $id;

    /**
     * Auteur of Comment.
     *
     * @var string
     */
    private $auteur;

    /**
     * Themes of article_id.
     *
     * @var int
     */
    private $article_id;

    /**
     * nom of Comment.
     *
     * @var string
     */
    private $nom;

    /**
     * email of comment.
     *
     * @var string
     */
    private $email;

    /**
     * Creation Date of comment.
     *
     * @var DateTime
     */
    private $createdAt;

    /**
     * the commentires of comment.
     *
     * @var string
     */
    private $comment;

    /**
     * Update Date of comment.
     *
     * @var DateTime
     */
    private $updatedAt;

    //! Méthodes magiques et de construction

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $dataforObj)
    {
        foreach ($dataforObj as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->{$method}($value);
            }
        }
    }

    //! Méthodes Getters & Setters

    /**
     * Get id of Comment.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id of Comment.
     *
     * @param int $id id of Comment
     *
     * @return self
     */
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get auteur of Comment.
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set auteur of Comment.
     *
     * @param string $auteur auteur of Comment
     *
     * @return self
     */
    public function setAuteur(string $auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get nom of Comment.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nom of Comment.
     *
     * @param string $nom nom of Comment
     *
     * @return self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get email of comment.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email of comment.
     *
     * @param string $email email of comment
     *
     * @return self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get creation Date of comment.
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get the commentires of comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the commentires of comment.
     *
     * @param string $commentes the commentires of comment
     *
     * @return self
     */
    public function setComment(string $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Set creation Date of comment.
     *
     * @param DateTime $createdAt creation Date of comment
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get update Date of comment.
     *
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set update Date of comment.
     *
     * @param DateTime $updatedAt update Date of comment
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
