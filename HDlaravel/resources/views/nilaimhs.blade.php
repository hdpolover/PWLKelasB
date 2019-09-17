
<table class="table table-hover">
<thead>
<tr>
<td>Nama</td>
<td>NRP</td>
<td>Tugas 1</td>
<td>Tugas 2</td>
<td>Tugas 3</td>
<td>Rata2</td>
</tr>
</thead>
<tbody>
@foreach($liat as $nilais)

<tr>
<td>{{ $nilais->nama }}</td>
<td>{{ $nilais->nrp }}</td>
<td>{{ $nilais->tugas1 }}</td>
<td>{{ $nilais->tugas2 }}</td>
<td>{{ $nilais->tugas3 }}</td>
<td>{{ $r= floor(($nilais->tugas1+$nilais->tugas2+$nilais->tugas3) /3) }}</td>
</tr>
@endforeach
</tbody>
</table>