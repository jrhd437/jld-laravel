@props(['info'])

<div class="card">
    <div class="image">
        <img src="/images/{{ $info['image'] }}" alt="{{ $info['alt'] }}" />
    </div>
    <div class="description">
        <h2>{{ $info['title'] }}</h2>
        {!! $info['body'] !!}
    </div>
</div>