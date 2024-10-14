<title>Cases</title>
<body>
<div class="case-display">

<table>
  <thead>
    <tr>
      <?php foreach(array_keys($cases[0]) as $columnName):
        if ($columnName != 'cid'): ?>
          <?php if ($columnName == 'Date'): ?>
              <th id="date"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'Citation'): ?>
              <th id="citation"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'State'): ?>
              <th id="state"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'Gender'): ?>
              <th id="gender"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'Age'): ?>
              <th id="age"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'Impairment'): ?>
              <th id="impairment"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'Issue'): ?>
              <th id="issue"><?php echo ucfirst($columnName); ?></th>
            <?php elseif ($columnName == 'Decision'): ?>
              <th id="decision"><?php echo ucfirst($columnName); ?></th>
            <?php endif; ?>

        <?php endif;
     endforeach; ?>
    </tr>
  </thead>
  
<tbody>
  <?php $rowNumber = 0; // Initialize a counter ?>
  
  <?php foreach($cases as $row): ?>
    <?php $rowClass = ($rowNumber % 2 == 0) ? 'even-row' : 'odd-row'; // Determine the row class ?>

    <tr class="<?php echo $rowClass; ?>" onclick="window.location.href='cases/<?php echo $row['cid']; ?>';" style="cursor: pointer;">
      <?php foreach($row as $columnName => $columnValue):
        if ($columnName != 'cid'): ?>
          <td><?php echo $columnValue; ?></td>
        <?php endif;
      endforeach; ?>
      
    </tr>

    <?php $rowNumber++; // Increment the counter ?>
  <?php endforeach; ?>
</tbody>

</table>

</div> 
</body>
</html>