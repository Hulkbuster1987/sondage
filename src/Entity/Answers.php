<?php

namespace App\Entity;

use App\Repository\AnswersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnswersRepository::class)]
class Answers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $questionId;

    #[ORM\Column(type: 'string', length: 255)]
    private $label;

    #[ORM\Column(type: 'integer')]
    private $answerOrder;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }

    public function setQuestionId(int $questionId): self
    {
        $this->questionId = $questionId;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getAnswerOrder(): ?int
    {
        return $this->answerOrder;
    }

    public function setAnswerOrder(int $answerOrder): self
    {
        $this->answerOrder = $answerOrder;

        return $this;
    }
}
