@foreach( $result['data'] as $entry )

	@if ( isset($entry['images']) )

		<img src="{{ $entry['images']['standard_resolution']['url'] }}" alt="{{ $entry['caption']['text'] }}">

	@endif

@endforeach