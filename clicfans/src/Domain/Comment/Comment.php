<?php
declare(strict_types=1);

namespace App\Domain\Comment;

use JsonSerializable;

class Comment implements JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var date
     */
    private $date;

    /**
     * @param int|null  $id
     * @param string    $name
     * @param string    $comment
     * @param string    $date
     */
    public function __construct(int $id, string $name, string $comment, string $date)
    {
        $this->id = $id;
        $this->name = $name;
        $this->comment = $comment;
        $this->date = $date;
    }

    /**
     * @return int|null
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'comment' => $this->comment,
            'date' => $this->date,
        ];
    }

}