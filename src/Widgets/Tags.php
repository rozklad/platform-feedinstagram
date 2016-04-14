<?php namespace Sanatorium\Feedinstagram\Widgets;

class Tags {

	public function show()
	{
		return 'Hello world from ['.__FILE__.']';
	}

	/**
	 * Retrieve recent media by given
	 * tag.
	 * @param  string $tag Tag
	 * @return View        Illuminate\View
	 */
	public function media($tag = null)
	{
		$access_token = '2233126250.1677ed0.18c7247217e449edbc885e2c0cc65579';

		$response = file_get_contents('https://api.instagram.com/v1/tags/'.$tag.'/media/recent?access_token='.$access_token);

		$result = json_decode($response, true);

		return view('sanatorium/feedinstagram::widgets/tags/media', compact('result'));
	}

}
