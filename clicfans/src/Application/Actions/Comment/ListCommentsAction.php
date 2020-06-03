<?php
declare(strict_types=1);

namespace App\Application\Actions\Comment;

use Psr\Http\Message\ResponseInterface as Response;

class ListCommentsAction extends CommentAction
{
    /**
     * @inheritDoc
     */
    protected function action(): Response
    {
        $comments = $this->commentRepository->findAll();

        $this->logger->info("Comments list was viewed.");

        return $this->respondWithData($comments);
    }
}