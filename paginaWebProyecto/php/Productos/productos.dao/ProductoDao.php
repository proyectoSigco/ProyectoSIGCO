<?php


class ProductoDao {

   private $mensaje="";
    public function registrarProducto(ProductosDto $productoDto,PDO $cnn) {


        try {
            $query = $cnn->prepare("INSERT INTO productos  VALUES(?,?,?,?,?,?,?,?)");
            $query->bindParam(1, $productoDto->getIdProducto());
            $query->bindParam(2, $productoDto->getNombreProducto());
            $query->bindParam(3, $productoDto->getDescripcion());
            $query->bindParam(4, $productoDto->getUnidadMedida());
            $query->bindParam(5, $productoDto->getIva());
            $query->bindParam(6, $productoDto->getValorUnitario());
            //$query->bindParam(7, $productoDto->getImagenProducto());
            $query->bindParam(7, $productoDto->getPresentacion());
            $query->bindParam(8, $productoDto->getCategoriaProducto());
            $query->execute();
            $this->mensaje="Producto  Registrado";
        } catch (Exception $ex) {
            $this->mensaje = $ex->getMessage();
        }
        $cnn =null;
        return $this->mensaje;
    }
        public function modificarProducto(ProductosDto $productoDto,PDO $cnn){
            try {
                $query = $cnn->prepare('UPDATE productos SET Nombre=?,Descripcion=?,UnidadMedida=?,Iva=?,Valor=?,IdUnidad=? WHERE IdProducto=?');
                $query->bindParam(1, $productoDto->getIdProducto());
                $query->bindParam(2, $productoDto->getNombreProducto());
                $query->bindParam(3, $productoDto->getDescripcion());
                $query->bindParam(4, $productoDto->getUnidadMedida());
                $query->bindParam(5, $productoDto->getIva());
                $query->bindParam(6, $productoDto->getValorUnitario());
                $query->bindParam(7, $productoDto->getImagenProducto());
                $query->bindParam(8, $productoDto->getPresentacion());
                $query->bindParam(9, $productoDto->getCategoriaProducto());
                $query->bindParam(10, $productoDto->getIdProducto());
                $query->execute();
                $this->mensaje = "Registrado";
            }
            catch(Exception $ex){
                $this->mensaje=$ex->getMessage();
            }
            $cnn=null;
            return $this->mensaje;
            }
         public function listarProductos(PDO $cnn){
             try {
                 $query = $cnn->prepare('select * from  productos');
                 $query->execute();
                return $query->fetchAll();

             }
             catch(Exception $ex){
               print $ex->getMessage();
             }
             $cnn=null;
         }
        public function  buscarProducto($idProducto,PDO $cnn){
           try {
               $query = $cnn->prepare('select * from productos WHERE IdProducto=?');
               $query->bindParam(1, $idProducto);
               $query->execute();
               return $query->fetch();
           } catch(Exception $ex){
               print $ex->getMessage();
           }
            $cnn=null;
        }
        public function cancelarProducto($idProducto,PDO $cnn){
            $cancelar='Cancelado';
            try{
                $query=$cnn->prepare('UPDATE productos  SET Estado=?  where IdProducto=?');
                $query->bindParam(1,$cancelar);
                $query->bindParam(2,$idProducto);
                $query->execute();
                return $this->mensaje='Producto Eliminado';
            }catch (Exception $ex){
                print $ex->getMessage();
            }
        }
    }
