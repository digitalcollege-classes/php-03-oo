<?php

declare(strict_types=1);

final class ErrorController extends AbstractController
{
    public const string VIEW_NOT_FOUND = 'error/page-not-found';

    public function pageNotFound(): void
    {
        http_response_code(404);

        $this->render(self::VIEW_NOT_FOUND);
        //parent::render('error/page-not-found');
    }
}
