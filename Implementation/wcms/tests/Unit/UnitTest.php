<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use WithoutMiddleware;
    
    public function testURL()
    {
    	$response = $this->call('GET','/');
    	$this->assertEquals(200,$response->status());
    }

    public function testLogin()
    {

	    $username="gagan";
	    $password="gagrangol";

	    $response = $this->call("GET",'wcms/login',[
	    	'username'=>$username,
	    	'password' => $password
	    ]);

	    $this->assertEquals(200,$response->status());
    }

    public function testRegister()
    {
    	$response = $this->call("GET",'/register',[
	    	'fullname' => "Gagan Raj Dangol",
	    	'address' => "Khokana, Lalitpur",
	    	'contact' => "9860058411",
	    	'email' => "dangolgrozen123@gmail.com",
	    	'username' => "gagan",
	    	'password' => "gagrangol",
	    	'usertypeid' => 2
	    ]);

	    $this->assertEquals(200,$response->status());
    }

    public function testAddItem()
    {
    	$response = $this->call('PUT', '/inventory',[
    		'itemid' => '3',
    		'item_name' => 'Bhimsen',
            'item_type' => 'D',
            'price' => 10000,
            'item_description' => 'qwertyuioplkjhgfdzxcvbn'
    	]);

    	$this->assertEquals(500,$response->status());
    }
    
    public function testItemDelete()
    {
    	$response = $this->call('DELETE', '/additems/5', [
            'itemid' => 5
        ]);

    	$this->assertEquals(302,$response->status());
    }

    public function testOrderlist()
    {
    	$response = $this->call('GET', '/orderlist', [
    		'userid' => 2,
            'itemid' => 1
    	]);

    	$this->assertEquals(500,$response->status());
    }

    public function testOrderprocess()
    {
    	$response = $this->call('PUT', '/orderprocess/1',[

	    	'order_date' => "2019-04-09	",
	    	'quantity' => 3,
	    	'userid' => 2
	    ]);

    	$this->assertEquals(405,$response->status());
    }

    public function testItems()
    {
    	$response = $this->call('GET', '/order2');

    	$this->assertEquals(200,$response->status());
    }
    
    public function testOrder()
    {
    	$response = $this->call('GET', '/orderprocess/1');
        $this->assertEquals(200,$response->status());
    }

    public function testForum()
    {
        $response = $this->call('GET', '/post',[
            'postid' => 1
        ]);
        $this->assertEquals(200,$response->status());
    }
}
