<?php
  require("view/header.php");
  ?>
    <table class="table table-hover">
      <thead>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
      </thead>
      <tbody></tbody>
      <tfoot></tfoot>
    </table>
  </body>
</html>

<script>
  for(i=0; i<4; i++){
    $('table tbody').append('<tr>');
    for(j=0; j<4; j++){
      $('table tbody').append('<td id="'+i+j+'">2</td>');
    }
    $('table tbody').append('</tr>');
  }

</script>
