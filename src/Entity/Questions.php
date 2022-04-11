<?php

namespace App\Entity;

use App\Repository\QuestionsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuestionsRepository::class)]
class Questions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $surveyId;

    #[ORM\Column(type: 'string', length: 255)]
    private $label;

    #[ORM\Column(type: 'integer')]
    private $questionOrder;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurveyId(): ?int
    {
        return $this->surveyId;
    }

    public function setSurveyId(int $surveyId): self
    {
        $this->surveyId = $surveyId;

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

    public function getQuestionOrder(): ?int
    {
        return $this->questionOrder;
    }

    public function setQuestionOrder(int $questionOrder): self
    {
        $this->questionOrder = $questionOrder;

        return $this;
    }
}
