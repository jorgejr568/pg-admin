class Model{
    private $tableName = null;

    public function __construct(){

    }

    public function getTable(){
        return $this->tableName;
    }
}