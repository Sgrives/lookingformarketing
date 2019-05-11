<div class="row">
    <div class="col-md-8 align-self-center small">
        <strong class="d-inline-block mb-2 text-primary">{{ $guide->category->name }}</strong> |  <em>Updated {{ $guide->updated_at->format('m-d-Y') }}</em>
    </div>
</div>
<div class="row">
    <article class="col-md-8">
        <h1>{{ $guide->title }}</h1>
        <div>{!! $guide->body !!}</div>
    </article>
    <aside class="offset-md-1 col-md-3">
        <div class="sticky-top">
            <div id="sidenav"></div>
        </div>
    </aside>
</div>