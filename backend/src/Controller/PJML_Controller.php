<?php
namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PJML
_Controller extends AbstractController 
{
    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    #[Route('/api/PJML
', name: 'get_PJML
')]
    public function index(): JsonResponse
    {
        $sql = 'SELECT frasePJML
 FROM secretosPJML
 LIMIT 1';
        $result = $this->connection->fetchOne($sql);

        if (!$result) {
            return $this->json(['frasePJML
' => 'No frasePJML
 found in the database!']);
        }

        $result = 'Backend Operativo, respuesta de la BD: '.$result;
        return $this->json(['frasePJML
' => $result]);
    }
}
