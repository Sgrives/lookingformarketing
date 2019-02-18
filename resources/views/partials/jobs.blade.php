<li class="list-group-item">
    <a style="color:#546E7A" href="{{ url('/jobs/type/'.$job->type->slug) }}">{{ ucfirst($job->type->name) }}</a> |
    <a style="color:#546E7A" href="{{ url('/jobs/desk/'.$job->desk->slug) }}"">{{ ucfirst($job->desk->name) }}</a> |
    <a style="color:#546E7A" href="{{ url('/jobs/location/'.$job->location_slug) }}">{{ ucfirst($job->location) }}</a>
    <h2>
        <a style="color:#546E7A" href="{{ url('/jobs/company/'.$job->company->slug) }}">{{ $job->company->name }}</a>
        <a href="{{ url('/jobs/'.$job->slug) }}">{{ $job->title }}</a>
        <span class="float-right" style="color:#546E7A">{{ $job->updated_at->format('M, d') }}</span>
    </h2>
</li>
