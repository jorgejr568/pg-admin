namespace PgAdmin\Kernel;

use PgAdmin\Kernel\Requests\Request;
use PgAdmin\Kernel\Response\Response;
use PgAdmin\Kernel\View\View;
use PgAdmin\Kernel\Router\Router;

class Kernel{
    private $request;
    
    private $response;

    private $view;

    private $router;

    public function boot(): Response{
        $this->request  =  new Request();

        $this->response = new Response();

        $this->view     = new View();

        $this->router   = new Router();

        $this->instanciateGlobally();
    }

    private function instanciateGlobally(){
        $_GLOBALS['kernel'] = $this;
    }

    public function request() : Request{
        return $this->request;
    }

    public function response() : Response{
        return $this->response;

    }

    public function view() : View{
        return $this->view;

    }

    public function router() : Router{
        return $this->router;

    }
}