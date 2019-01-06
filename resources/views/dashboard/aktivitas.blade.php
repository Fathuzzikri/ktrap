@extends('adminlte::page')

@section('title', 'K-TRAP Detail Aktivitas')

@section('content_header')
    <h1>Detail Aktivitas</h1>
@stop

@section('content')
    <div class="col-md-12">
    	<div class="box">
            <div class="box-header row">
            	<div class="col-md-11">
            	<h3 class="box-title">Tabel Detail Aktivitas Penyerang</h3>
            </div>
            	<div class="col-md-1">
            		<button onclick="goBack()" type="button" class="btn btn-block btn-warning btn-sm">Kembali</button>
            	</div>
            </div>

            <!-- /.box-header -->
            <div class="box-body table-responsive">
            	<div class="row">
            		<div class="col-sm-12">
            			<table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                			<thead>
                				<tr role="row">
                					<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 182px;">No.</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;">Command</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 199px;">Status</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 199px;">Waktu</th>
                				</tr>
                			</thead>
                			<tbody>
                				@php
							        $no = 1;
							    @endphp
                				@foreach ($aktivitas as $act)
                					<tr role="row" class="odd">
					                	<td class="col-md-1">{{ $no++ }}</td>
										<td>{{ $act->input }}</td>
										<td>
											@if ($act->success == 1)
												<span class="label label-success">Berhasil</span>
											@else
												<span class="label label-danger">Gagal</span>
											@endif
										</td>
										<td>{{$act->timestamp}}</td>
					                </tr>
                				@endforeach
				            </tbody>
			                <tfoot>
			                	<tr>
			                	<th >No.</th>
			                	<th >Command</th>
			                	<th >Status</th>
			                	</tr>
			                </tfoot>
			            </table>
			        </div>
			    </div>
			</div>
		</div>
	</div>
@stop

@section('adminlte_js')
    <script src="//cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $("#example1, #example2").DataTable();
        });
    </script>
    <script>
    function goBack() {
        window.history.back();
    }
</script>
@stop