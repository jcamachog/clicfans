<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\Comment;

use App\Domain\Comment\Comment;
use \App\Domain\Comment\CommentRepository;
use Illuminate\Database\Capsule\Manager;

class CommentRepositoryImpl implements CommentRepository {

    /**
     * @var Comment[]
     */
    private $comments;

    /**
     * @var Manager
     */
    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @inheritDoc
     */
    public function findAll(): array
    {
        return $this->manager->getContainer()->get(Manager::class)->table('comments')->get()->all();
    }

    /**
     * @inheritDoc
     */
    public function findCommentById(int $id): Comment
    {
        // TODO: Implement findUserOfId() method.
    }
}