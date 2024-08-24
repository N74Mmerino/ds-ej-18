<?php

class PedidoCompra{
    public $Fecha;
    public $Proveedor;
    public $FechaEntregaEstimada;
    public $CostoTotal;
    public $PedidoCerrrado;
    public $ListaLineaCompra= array();

    public function MostrarDatos(){

    
        echo 'Fecha : '.$this->Fecha.'<br>';
        echo 'Proveedor : '.$this->Proveedor->Id.'<br>';
        echo 'Descripcion : '.$this->Proveedor->Descripcion.'<br>';
        echo 'Fecha de entrega estimada : '.$this->FechaEntregaEstimada.'<br>';
        echo 'Costo total : '.$this->CostoTotal.'<br>';
        echo 'Pedido cerrado : '.$this->PedidoCerrado.'<br>';
        echo '-------------------------------------------<br>';
    
        foreach($this->ListaLineaCompra as $LineaCompra){

            echo 'Producto <br>';
            echo '*Codigo : '.$LineaCompra->Producto->Codigo.'<br>';
            echo '*Descripcion : '.$LineaCompra->Producto->Descripcion.'<br>';
            echo '*Precio de venta : '.$LineaCompra->Producto->PrecioVenta.'<br>';
            echo '*Cantidad  : '.$LineaCompra->Cantidad.'<br>';
            echo '*Costo Unitario  : '.$LineaCompra->CostoUnitario.'<br>';
            echo '*Fue Entregado  : '.$LineaCompra->FueEntregado.'<br>';
    
        }
    
    
    }
}

