namespace PgAdmin;

class App{
    public function boot(){
        $kernel = new PgAdmin\Kernel\Kernel();

        $kernel->boot();
    }
}