<?php
 header("Access-Control-Allow-Origin: *");

/* Twitter API */
include 'TweetPHP.php';
$TweetPHP = new TweetPHP(
	array(
		'consumer_key'        => 'h5WoF8tSw55IErvgXnjV8tMQ3',
		'consumer_secret'     => 'VzYixb2IlJpd3gpfYPwTRskDpx91csfGjshHL74Dp2NR46dtGh',
		'access_token'        => '430420807-k98DoXzRyfy2lnGbQhmEYO6laAicQNakOb7ur8RM',
		'access_token_secret' => '0xagJKG0e5tG18mrZnMcoqms0relkr1rRFIVNHGm46N5y',
		'api_endpoint'        => 'search/tweets',
		'api_params'          => array(
			'q'           => '#php',
			'result_type' => 'latest',
		),
		'tweets_to_display'   => 10,
	)
);
$twitt_array = $TweetPHP->get_tweet_array();
echo json_encode( $twitt_array );