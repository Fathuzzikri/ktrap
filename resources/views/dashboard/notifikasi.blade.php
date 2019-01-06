@extends('adminlte::page')

@section('title', 'K-TRAP Log Notifikasi')

@section('content_header')
    <h1>Log Notifikasi</h1>
@stop

@section('content')
    <div class="col-md-12">
    	<div class="box">
            <div class="box-header">
            	<div class="col-md-10">
            		<h3 class="box-title">Log Notifikasi</h3>
            	</div>
            	<div class="col-md-2">
            		<a href="tes_notifikasi">
            			<button type="button" class="btn btn-block btn-primary btn-md">Tes Notifikasi</button>
            		</a>
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
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 224px;">ID Session</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 199px;">Waktu Pengiriman</th>
                					<th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 199px;">Aksi</th>
                				</tr>
                			</thead>
                			<tbody>
                				@php
							        $no = 1;
							    @endphp
                				@foreach ($log_notif as $ln)
                					<tr role="row" class="odd">
					                	<td class="col-md-1">{{ $no++ }}</td>
										<td>{{ $ln->id_session }}</td>
										<td>{{ $ln->timestamp }}</td>
										<td>
											@if ($ln->id_session === 'TESTING')
												<a href="notif/{{$ln->id}}">
													<button type="button" class="btn btn-block btn-danger btn-sm">Hapus</button>
												</a>
												
											@else
												<a href="lihat/{{$ln->id_session}}">
													<button type="button" class="btn btn-block btn-info btn-sm">Lihat Aktivitas</button>
												</a>
											@endif
										</td>
					                </tr>
                				@endforeach
				            </tbody>
			                <tfoot>
			                	<tr>
			                	<th >No.</th>
			                	<th >ID Session</th>
			                	<th >Waktu Pegiriman</th>
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