<?php
class ConveniosNacController
{
    public $pdo;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=nueva', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM convenios_nacs");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $con = new ConveniosNac();

                $con->__SET('id', $r->id);
                $con->__SET('detalle', $r->detalle);
                $con->__SET('publico', $r->publico);
                $con->__SET('ciudad', $r->ciudad);
                $con->__SET('universidad', $r->universidad);
                $con->__SET('tipo', $r->tipo);
                $con->__SET('duracion', $r->duracion);


                $result[] = $con;
            }

            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("SELECT * FROM convenios_nacs WHERE id = ?");

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $con = new ConveniosNac();

            $con->__SET('id', $r->id);
            $con->__SET('detalle', $r->detalle);
            $con->__SET('publico', $r->publico);
            $con->__SET('ciudad', $r->ciudad);
            $con->__SET('universidad', $r->universidad);
            $con->__SET('tipo', $r->tipo);
            $con->__SET('duracion', $r->duracion);

            return $con;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo
                ->prepare("DELETE FROM convenios_nacs WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(ConveniosNac $data)
    {
        try {
            $sql = "UPDATE convenios_nacs SET 
                    id          = ?, 
                    detalle        = ?,
                    publico            = ?, 
                    ciudad = ?
                    universidad = ?
                    tipo = ?
                    duracion = ?

                WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->__GET('id'),
                        $data->__GET('detalle'),
                        $data->__GET('publico'),
                        $data->__GET('ciudad'),
                        $data->__GET('universidad'),
                        $data->__GET('tipo'),
                        $data->__GET('duracion')
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(ConveniosNac $data)
    {
        try {
            $sql = "INSERT INTO convenios_nacs (id, detalle, publico, ciudad, universidad, tipo, duracion) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->__GET('id'),
                        $data->__GET('detalle'),
                        $data->__GET('publico'),
                        $data->__GET('ciudad'),
                        $data->__GET('universidad'),
                        $data->__GET('tipo'),
                        $data->__GET('duracion')
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

$con = new ConveniosNac();
$controller = new ConveniosNacController();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $con->__SET('id',       $_REQUEST['id']);
            $con->__SET('detalle',  $_REQUEST['detalle']);
            $con->__SET('publico',  $_REQUEST['publico']);
            $con->__SET('ciudad',   $_REQUEST['ciudad']);
            $con->__SET('universidad', $_REQUEST['universidad']);
            $con->__SET('tipo',     $_REQUEST['tipo']);
            $con->__SET('duracion', $_REQUEST['duracion']);


            $controller->Actualizar($con);
            header('Location: index.php');
            break;

        case 'registrar':
            $con->__SET('id',       $_REQUEST['id']);
            $con->__SET('detalle',  $_REQUEST['detalle']);
            $con->__SET('publico',  $_REQUEST['publico']);
            $con->__SET('ciudad',   $_REQUEST['ciudad']);
            $con->__SET('universidad', $_REQUEST['universidad']);
            $con->__SET('tipo',     $_REQUEST['tipo']);
            $con->__SET('duracion', $_REQUEST['duracion']);


            $controller->Registrar($con);
            header('Location: index.php');
            break;

        case 'eliminar':
            $controller->Eliminar($_REQUEST['id']);
            header('Location: index.php');
            break;

        case 'editar':
            $con = $controller->Obtener($_REQUEST['id']);
            break;
    }
}
