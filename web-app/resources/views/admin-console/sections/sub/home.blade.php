@extends('admin-console.layout.master-page')

@section('title', trans('admin.sections.title'))

@section('content')
	<h2>{!! trans('admin.sections.sub.add_title', ['name' => $parent->name]) !!} </h2>
	@if(!is_null($parent->parentSection))
	<a href="{!! route('admin.sections.sub.home', ['id' => $parent->parentSection->id]) !!}" class="btn btn-primary btn-xs">
		{!! trans('admin.back') !!}
	</a>
	@else
		<a href="{!! route('admin.sections.home') !!}" class="btn btn-primary btn-xs">
			{!! trans('admin.back') !!}
		</a>
	@endif
	|
	<a href="{!! route('admin.sections.add.page', ['id' => $parent->id]) !!}">
		{!! trans('admin.pages.sub.add') !!}
	</a>
	|
	<a href="{!! route('admin.sections.sub.add', ['id' => $parent->id]) !!}">
		{!! trans('admin.sections.sub.add') !!}
	</a>
	@if($parent->sections->count() > 0)
		<table class="table table-hover">
			<thead>
				<tr>
					<th>{!! trans('admin.sections.field.name') !!}</th>
					<th>{!! trans('admin.created_at') !!}</th>
					<th>{!! trans('admin.updated_at') !!}</th>
					<th>{!! trans('admin.actions') !!}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($parent->sections as $section)
					<tr>
						<td>{!! $section->name !!} - {!! $section->sections->count() !!} {!! trans('admin.sections.sub.title') !!}</td>
						<td>{!! $section->created_at !!}</td>
						<td>{!! $section->updated_at !!}</td>
						<td>
							@if($section->sections->count() == 0 && $section->pages->count() == 0)
								<a href="{!! route('admin.sections.sub.add', ['id' => $parent->id]) !!}" class="btn btn-primary btn-xs">
									{!! trans('admin.sections.sub.add') !!}
								</a> |
								<a href="{!! route('admin.sections.edit', ['id' => $section->id]) !!}" class="btn btn-primary btn-xs">
									{!! trans('admin.pages.sub.add') !!}
								</a>
							@elseif($section->sections->count() > 0)
								<a href="{!! route('admin.sections.sub.home', ['id' => $section->id]) !!}" class="btn btn-primary btn-xs">
									{!! trans('admin.sections.sub.list') !!}
								</a>
							@elseif($section->pages->count() > 0)
							@endif
							<a href="{!! route('admin.sections.edit', ['id' => $section->id]) !!}" class="btn btn-primary btn-xs">
								{!! trans('admin.edit') !!}
							</a>
							{!! Form::open(['route' => ['admin.sections.delete', $section->id], 'style' => 'display: inline;']) !!}
								{!! Form::submit(trans('admin.delete'), ['class' => 'btn btn-danger btn-xs']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		
	@else
		<div class="alert alert-info">{!! trans('admin.no_results') !!}</div>
	@endif
@endsection