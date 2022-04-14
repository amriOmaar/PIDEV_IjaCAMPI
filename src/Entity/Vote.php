<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="vote", indexes={@ORM\Index(name="idu", columns={"idu"})})
 * @ORM\Entity
 */
class Vote
{
    /**
     * @var int
     *
     * @ORM\Column(name="idv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idv;

    /**
     * @var int
     *
     * @ORM\Column(name="type_vote", type="integer", nullable=false)
     */
    private $typeVote;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idu", referencedColumnName="iduser")
     * })
     */
    private $idu;

    public function getIdv(): ?int
    {
        return $this->idv;
    }

    public function getTypeVote(): ?int
    {
        return $this->typeVote;
    }

    public function setTypeVote(int $typeVote): self
    {
        $this->typeVote = $typeVote;

        return $this;
    }

    public function getIdu(): ?User
    {
        return $this->idu;
    }

    public function setIdu(?User $idu): self
    {
        $this->idu = $idu;

        return $this;
    }


}