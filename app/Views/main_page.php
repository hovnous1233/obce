<?php

use App\Models\Okres;

use function PHPUnit\Framework\any;
?>
<?=$this->extend("layout/template");?>


<?=$this->section("content");?>

<h1>Zlínský kraj</h1>

<?php $table = new \CodeIgniter\View\Table(); 

$table->setHeading("Pořadí","Název obce", "Počet adres"); 

foreach ($kraj as $key => $row){
    $poradi = $key + (($page * 20 + 1) - 20);
    $table->addRow($poradi,$row->nazev,$row->pocet);
}

$template = array(
'table_open'=> '<table class="table table-bordered">',
'thead_open'=> '<thead>',
'thead_close'=> '</thead>',
'heading_row_start'=> '<tr>',
'heading_row_end'=>' </tr>',
'heading_cell_start'=> '<th>',
'heading_cell_end' => '</th>',
'tbody_open' => '<tbody>',
'tbody_close' => '</tbody>',
'row_start' => '<tr>',
'row_end'  => '</tr>',
'cell_start' => '<td>',
'cell_end' => '</td>',
'row_alt_start' => '<tr>',
'row_alt_end' => '</tr>',
'cell_alt_start' => '<td>',
'cell_alt_end' => '</td>',
'table_close' => '</table>'
);

$table->setTemplate($template);



echo $table->generate();
echo $pager->links();
?>




<?=$this->endSection();?>