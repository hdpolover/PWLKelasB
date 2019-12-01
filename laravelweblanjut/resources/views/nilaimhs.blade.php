@extends('layouts.app')
@section('content')

{!! Form::open(['url' => 'nilaimhs', 'method'=>'get', 'class'=>'form-inline'])!!}
<div class="form-group {!! $errors->has('q') ? 'has-error' : '' !!}">
    {!! Form::text('q', isset($q) ? $q : null, ['class'=>'form-control', 'placeholder' => 'Nama Mahasiswa..']) !!}
    {!! $errors->first('q', '<p class="help-block">:message</p>') !!} </div>
{!! Form::submit('Search', ['class'=>'btn btn-primary']) !!} {!! Form::close() !!}
<br>


<h3>List Mahasiswa
    <small>
        <a href="{{ route('mhs.create') }}" class="btn btn-warning btn-sm">Tambah Mahasiswa</a>
    </small>
</h3>

<table id="example" class="table table-striped table-bordered" width="100%">
    <tr>
        <th>NO</th>
        <th>NRP</th>
        <th>NAMA</th>
        <th>Tugas 1</th>
        <th>Tugas 2</th>
        <th>Tugas 3</th>
        <th>Rata2</th>\
        <th>Aksi</th>
    </tr>
    <tr>
        <?php
        $no = 0;
        foreach ($hasil as $data_kriteria) {
            $r = floor(($data_kriteria->tugas1 + $data_kriteria->tugas2 + $data_kriteria->tugas3) / 3);
            $no++; ?>
            <td style='vertical-align:middle; text-align:center;'><?php echo $no; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->nrp; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->nama; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->tugas1; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->tugas2; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><?php echo $data_kriteria->tugas3; ?> </td>
            <td style='vertical-align:middle; text-align:center;'><strong><?php echo $r; ?> </strong></td>
            <td>{!! Form::model($data_kriteria, ['route' => ['mhs.destroy', $data_kriteria],
                'method' => 'delete', 'class' => 'form-inline'] ) !!}
                <a href="{{ route('mhs.edit', $data_kriteria->id)}}" class="btn btn-warning btn-sm">edit</a> &nbsp;
                {!! Form::submit('delete', ['class'=>'btn btn-danger btn-sm']) !!}
                {!! Form::close()!!}
            </td>
    </tr>
<?php } ?>
</table>

{{ $hasil->appends(compact('q'))->links() }}

@endsection