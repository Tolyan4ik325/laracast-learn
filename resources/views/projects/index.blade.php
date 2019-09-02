@foreach($projects as $project)


<ul>
<li>
	<a href="/projects/{{ $project->id }}">{{$project->title}}</a>
</li>

</ul>

@endforeach