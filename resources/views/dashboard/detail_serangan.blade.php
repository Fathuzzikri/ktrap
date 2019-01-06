@extends('adminlte::page')

@section('title', 'K-TRAP Serangan Masuk')

@section('content_header')
    <h1>Serangan Masuk</h1>
@stop

@section('content')
	<div class="col-md-12">
    	<div class="box">
            <div class="box-header">
            	<h3 class="box-title">Tabel Serangan Masuk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
            	<div class="row">
            		<div class="col-sm-12">
            			<table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                			<thead>
                				<tr role="row">
                					<th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" style="width: 182px;">No.</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;">Session</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 199px;">Username</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156px;">Password</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156px;">Status</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 156px;">Waktu</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 112px;">Aksi</th>
                				</tr>
                			</thead>
                			<tbody>
                				@php
							        $no = 1;
							    @endphp
                				@foreach ($serangan as $s)
                					<tr role="row" class="odd">
					                	<td class="col-md-1">{{ $no++ }}</td>
										<td>{{ $s->session }}</td>
										<td>{{ $s->username }}</td>
										<td>{{ $s->password }}</td>
										<td>
											@if ($s->success == 1)
												<span class="label label-success">Terjebak</span>
											@else
												<span class="label label-danger">Gagal</span>
											@endif
										</td>
										<td>{{ $s->timestamp }}</td>
										<td>
											<a href="lihat/{{$s->session}}">
												<button type="button" class="btn btn-block btn-success btn-sm">Lihat Aktivitas</button>
											</a>
										</td>
					                </tr>
                				@endforeach
				            </tbody>
			                <tfoot>
			                	<tr>
			                	<th >No.</th>
			                	<th >Session</th>
			                	<th >Username</th>
			                	<th >Password</th>
			                	<th >Status</th>
			                	<th >Aksi</th>
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
@stop