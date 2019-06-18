<?php


    namespace App\Model;


    use Doctrine\ActiveRecord\Exception\NotFoundException;
    use Psr\Http\Message\ServerRequestInterface;

    class WriteLogAndNotFoundExceptionToFile
    {
        public function writeUserLog(ServerRequestInterface $request): void
        {
            $log = (array)$request->getUri();
            $handle = fopen("logs/user_log_ and_exception.csv", "a+");
            fputcsv($handle, $log, ";");
            fclose($handle);
        }

        public function writeNotFoundException(NotFoundException $exception): void
        {
            $array = [
                $exception->getMessage(),
                $exception->getCode(),
                $exception->getFile(),
                $exception->getLine(),
            ];

            $handle = fopen("logs/user_log_ and_exception.csv", "a+");
            fputcsv($handle, $array , ";");
            fclose($handle);
        }
    }