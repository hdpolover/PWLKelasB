<table id="example" class="table table-striped table-bordered" width="100%">
    <tr>
        <th>NO</th>
        <th>NRP</th>
        <th>NAMA</th>
		<th>Tugas 1</th>
		<th>Tugas 2</th>
		<th>Tugas 3</th>   
		<th>Rata2</th>  
    </tr>
        <tr>
        <?php
        $no = 0;
        foreach ($hasil as $data_kriteria) {
			$r=floor(($data_kriteria->tugas1+$data_kriteria->tugas2+$data_kriteria->tugas3)/3);
            $no++; ?>
            <td style='vertical-align:middle; text-align:center;'><?php echo $no; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->nrp; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->nama; ?> </td>                            
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->tugas1; ?> </td>
			<td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->tugas2; ?> </td>
			<td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->tugas3; ?> </td>
			<td style='vertical-align:middle; text-align:center;'><strong><?php echo $r; ?> </strong></td>
        </tr>
        <?php } ?>
</table>

<table id="example" class="table table-striped table-bordered" width="100%">
<br>
    <tr>
        <th>NO</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Rata-Rata</th>
    </tr>        
        <tr>
        <?php
        $no = 0;
        foreach ($top5 as $data_kriteria) {
			$no++; ?>
            <td style='vertical-align:middle; text-align:center;'><?php echo $no; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->nrp; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->nama; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><strong><?php echo $data_kriteria->rata;?></strong></td>
        </tr>
        <?php } ?>
</table>