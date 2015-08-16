<?php


class ProductoDao {

   private $mensaje="";
    public function registrarProducto(ProductosDto $productoDto,PDO $cnn) {

        $estado=1;
        try {
            $query = $cnn->prepare('INSERT INTO Productos (Nombre,Descripcion,UnidadMedida,IdIva,ValorBase,IdPresentacion,IdCategoria,estado ) VALUES(?,?,?,?,?,?,?,?)');
            $query->bindParam(1, $productoDto->getNombreProducto());
            $query->bindParam(2, $productoDto->getDescripcion());
            $query->bindParam(3, $productoDto->getUnidadMedida());
            $query->bindParam(4, $productoDto->getIva());
            $query->bindParam(5, $productoDto->getValorUnitario());
            $query->bindParam(6, $productoDto->getPresentacion());
            $query->bindParam(7, $productoDto->getCategoriaProducto());
            $query->bindParam(8,$estado);
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
                $query = $cnn->prepare('UPDATE productos SET  Nombre=?, Descripcion=?, UnidadMedida=?, IdIva=?, Valor=?, IdPresentacion=?, IdCategoria=? WHERE IdProducto=?');
                $query->bindParam(1, $productoDto->getNombreProducto());
                $query->bindParam(2, $productoDto->getDescripcion());
                $query->bindParam(3, $productoDto->getUnidadMedida());
                $query->bindParam(4, $productoDto->getIva());
                $query->bindParam(5, $productoDto->getValorUnitario());
                $query->bindParam(6, $productoDto->getPresentacion());
                $query->bindParam(7, $productoDto->getCategoriaProducto());
                $query->bindParam(8, $productoDto->getIdProducto());
                $query->execute();
                $this->mensaje = "Producto Actualizado";
            }
            catch(Exception $ex){
                $this->mensaje=$ex->getMessage();
                print_r($productoDto);
            }
            $cnn=null;
            return $this->mensaje;
            }
         public function listarProductos(PDO $cnn){
             $state='Cancelado';
             try {
                 $query = $cnn->prepare('SELECT * FROM SIGCO.Productos where (estado  LIKE ?)  IS NOT TRUE');
                 $query->bindParam(1,$state);
                 $query->execute();

                return $query->fetchAll();

             }
             catch(Exception $ex){
               print $ex->getMessage();
             }
             $cnn=null;
         }

    public function obtenerProducto($id,PDO $cnn){
        try {
            $query = $cnn->prepare('select * from  Productos where IdProducto=?');
            $query->bindParam(1,$id);
            $query->execute();
            return $query->fetchAll();

        }
        catch(Exception $ex){
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
    public function  obtenerPresentacionProducto(PDO $cnn){
        try {
            $query = $cnn->prepare('select * from Presentaciones');
            $query->execute();
            return $query->fetchAll();
        } catch(Exception $ex){
            print $ex->getMessage();
        }
        $cnn=null;
    }

    public function  presentacionId($id,PDO $cnn){
        try {
            $query = $cnn->prepare('select * from Presentaciones where IdPresentacion=?');
            $query->bindParam(1,$id);
            $query->execute();
            return $query->fetchAll();
        } catch(Exception $ex){
            print $ex->getMessage();
        }
        $cnn=null;
    }
    public function  obtenerCategoriaProducto(PDO $cnn){
        try {
            $query = $cnn->prepare('select * from CategoriasProductos');
            $query->execute();
            return $query->fetchAll();
        } catch(Exception $ex){
            print $ex->getMessage();
        }
        $cnn=null;
    }
    public function  obtenerIvaProducto(PDO $cnn){
        try {
            $query = $cnn->prepare('select * from Impuestos');
            $query->execute();
            return $query->fetchAll();
        } catch(Exception $ex){
            print $ex->getMessage();
        }
        $cnn=null;
    }
    }
