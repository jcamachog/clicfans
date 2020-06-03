<?php
declare(strict_types=1);

namespace App\Domain\Comment;

interface CommentRepository
{
    /**
     * @return Comment[]
     */
    public function findAll(): array;

    /**
     * @param int $id
     * @return Comment
     */
    public function findCommentById(int $id): Comment;
}
