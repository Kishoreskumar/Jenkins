<?php
 
class UserControllerTest extends TestCase {

	public function setUp()
	{
	  parent::setUp();
	  $this->mock = $this->mock('Cribbb\Storage\User\UserRepository');
	  //$this->mock = $this->mock('User');
	}
	
	public function mock($class)
	{
	  $mock = Mockery::mock($class);
	  $this->app->instance($class, $mock);
	  return $mock;
	}
	
	/**
	 * @group users
	 */
	public function testIndex()
	{
	  $this->mock->shouldReceive('all')->once();
	  $this->call('GET', 'users');	 
	  $this->assertResponseOk();
	}

	/**
	 * @group users
	 */
	public function testCreate()
	{
	  $this->call('GET', 'users/create');	 
	  $this->assertResponseOk();
	}

	/**
	 * @group users
	 */
	public function testShow()
	{
	  $this->mock->shouldReceive('find')
	             ->once()
	             ->with(1);
	 
	  $this->call('GET', 'users/1');
	 
	  $this->assertResponseOk();
	}

	/**
	 * @group users
	 */
	public function testEdit()
	{
	  $this->call('GET', 'users/1/edit');
	 
	  $this->assertResponseOk();
	}

/*
	public function testStoreFails()
	{
	  $this->mock->shouldReceive('create')
	             ->once()
	             ->andReturn(Mockery::mock(array(
	                 'isSaved' => false,
	                 'errors' => array()
	               )));
	 
	  $this->call('POST', 'users');
	 
	  $this->assertRedirectedToRoute('users.create');
	  $this->assertSessionHasErrors();
	}

	public function testStoreSuccess()
	{
	  $this->mock->shouldReceive('create')
	             ->once()
	             ->andReturn(Mockery::mock(array(
	                 'isSaved' => true
	               )));
	 
	  $this->call('POST', 'users');
	  $this->assertRedirectedToRoute('users.index');
	  $this->assertSessionHas('flash');
	}
*/
}
