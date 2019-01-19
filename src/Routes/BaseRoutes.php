<?php 

namespace Routes;

class BaseRoutes
{
    protected $router;

    public function __construct()
    {
        try {
            $this->router = new \Phroute\RouteCollector();
        } catch (ReflectionException $e) {
            http_response_code(500);
            echo json_encode(array(
                'message' => 'The route exists, but I can\'t map to a valid controller'
            ));
            die();
        }

        // TODO: Routing.

    }

    public function getRouter()
    {
        return $this->router;
    }
}
