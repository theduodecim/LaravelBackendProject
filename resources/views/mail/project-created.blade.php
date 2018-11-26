@component('mail::message')
# New Project {{ $project->title }}

{{ $project->description }}

@component('mail::button', ['url' => url('/project/' . $project->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
