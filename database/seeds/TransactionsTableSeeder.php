<?php

use Illuminate\Database\Seeder;
use App\Transaction;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();

        Transaction::create(array(
	        'user_id' => 1,
	        'video_feeds' => 'https://www.dropbox.com/s/jirq62dhkkuf25c/webcam.mp4?dl=0',
	        'tools_taken' => 'screwdriver:1',
	        'tools_returned' => null,
	        'drawers_opened' => '1', 
	    ));

        Transaction::create(array(
            'user_id' => 2,
            'video_feeds' => 'https://www.dropbox.com/s/jirq62dhkkuf25c/webcam.mp4?dl=0',
            'tools_taken' => 'hammer:1',
            'tools_returned' => null,
            'drawers_opened' => '2', 
        ));

        Transaction::create(array(
            'user_id' => 3,
            'video_feeds' => 'https://www.dropbox.com/s/jirq62dhkkuf25c/webcam.mp4?dl=0',
            'tools_taken' => 'plier:2',
            'tools_returned' => null,
            'drawers_opened' => '4', 
        ));
    }
}
