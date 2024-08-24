<?php

require_once 'modelo/LineaCompra.php';
require_once 'modelo/PedidoCompra.php';
require_once 'modelo/Producto.php';
require_once 'modelo/Proveedor.php';

$Proveedor= new Proveedor();
$Proveedor->Id=1;
$Proveedor->Descripcion='Raul';

$PROD1= new Producto();
$PROD1->Codigo=1;
$PROD1->Descripcion='Vinos';
$PROD1->PrecioVenta='$10.000';

$PROD2= new Producto();
$PROD2->Codigo=2;
$PROD2->Descripcion='Quesos';
$PROD2->PrecioVenta='$7.000';

$LINCOMP1= new LineaCompra();
$LINCOMP1->Producto=$PROD1;
$LINCOMP1->Cantidad='18';
$LINCOMP1->CostoUnitario='$7.000';
$LINCOMP1->FueEntregado='Si';

$LINCOMP2= new LineaCompra();
$LINCOMP2->Producto=$PROD2;
$LINCOMP2->Cantidad='36';
$LINCOMP2->CostoUnitario='$3.000';
$LINCOMP2->FueEntregado='Si';

$PedidoCompra= new PedidoCompra();
$PedidoCompra->Fecha='24/08/2024';
$PedidoCompra->Proveedor=$Proveedor;
$PedidoCompra->FechaEntregaEstimada='27/08/2024';
$PedidoCompra->CostoTotal='$17.000';
$PedidoCompra->PedidoCerrado='Pedido cerrado';

$PedidoCompra->ListaLineaCompra[]=$LINCOMP1;
$PedidoCompra->ListaLineaCompra[]=$LINCOMP2;

$PedidoCompra->MostrarDatos();



