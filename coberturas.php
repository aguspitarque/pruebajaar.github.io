<table class="table table-bordered table-active">
    <thead>
      <tr>
        <th style="color: red;">Cobertura</th>
        <th style="color: red;">Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <?php 

        $query = "SELECT * from coberturas";
        $result_tareas = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result_tareas)) { ?>
        
          <tr>
            <td><?php echo $row['Nombre'] ?></td>
            <td><?php echo $row['Descripcion'] ?></td>
          </tr>   
        
       <?php } ?>
    </tbody>
</table>