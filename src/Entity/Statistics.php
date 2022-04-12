<?php

namespace App\Entity;

use App\Repository\StatisticsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StatisticsRepository::class)]
class Statistics
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $surveyId;

    #[ORM\Column(type: 'integer')]
    private $surveyViews;

    #[ORM\Column(type: 'integer')]
    private $answerCount;

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

    public function getSurveyViews(): ?int
    {
        return $this->surveyViews;
    }

    public function setSurveyViews(int $surveyViews): self
    {
        $this->surveyViews = $surveyViews;

        return $this;
    }

    public function getAnswerCount(): ?int
    {
        return $this->answerCount;
    }

    public function setAnswerCount(int $answerCount): self
    {
        $this->answerCount = $answerCount;

        return $this;
    }
}
