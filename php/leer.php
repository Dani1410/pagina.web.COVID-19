<!doctype html><html lang="es"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><title>Leer</title><link href="./css/leer.css"rel="stylesheet"><link href="/bootstrap-5.3.0-dist/css/bootstrap.min.css"rel="stylesheet"><style>tr:hover{background-color:#f5f5f5}.logo{color:#333;font-weight:700;text-decoration:none;font-size:20px}.logo:hover{text-decoration:underline}.table{width:100%;border-collapse:collapse;margin:0 auto}.table td,.table th{padding:10px;text-align:left}.table th{background-color:#f8f9fa;font-weight:700}input[type=submit]{background-color:#dc3545;color:#fff;border:none;padding:8px 12px;cursor:pointer}input[type=submit]:hover{background-color:#c82333}.edit-link{color:#007bff;text-decoration:none}.edit-link:hover{text-decoration:underline}#header{background-color:#f8f9fa;padding:10px}.espacio-tabla{margin-top:20px}.table-container{max-width:800px;margin:0 auto;overflow-x:auto}@media only screen and (max-width:767px){.table-container{overflow-x:scroll}}</style></head><body><header id="header"><a href="../index.php"class="logo">Regresar</a></header><div class="espacio-tabla"><table class="table"><thead><tr><th>ID</th><th>Nombre</th><th>Correo</th><th>Usuario</th><th>Contraseña</th><th>Tipo</th><th>Acciones</th></tr></thead><tbody><?php include 'conexion.php';$sql="SELECT * FROM usuarios";$result=mysqli_query($conexion,$sql);while($mostrar=mysqli_fetch_array($result)){ ?><tr><th><?php echo $mostrar['id_usuario']; ?></th><td><?php echo $mostrar['nombre_completo']; ?></td><td><?php echo $mostrar['correo']; ?></td><td><?php echo $mostrar['usuario']; ?></td><td><?php echo $mostrar['contrasena']; ?></td><td><?php echo $mostrar['tipo']; ?></td><td><form action="./eliminar.php"method="POST"><input name="txt-id"type="hidden"value="<?php echo $mostrar['id_usuario']; ?>"readonly><td><input name="btnEliminar"type="submit"value="Eliminar"></td></form></td><td><a href="./editar.php?id=<?php echo $mostrar['id_usuario']; ?>">Editar</a></td></tr><?php } ?></tbody></table></div></body></html>