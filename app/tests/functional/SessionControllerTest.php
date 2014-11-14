<?php
 
class SessionControllerTest extends TestCase{

	/**
	 * Test Index
	 * @group session
	 */
	public function testCreate()
	{
	  $this->call('GET', 'login');
	  $this->assertResponseOk();
	}

	/**
	 * Test Store failure
	 * @group session
	 */
	public function testStoreFailure()
	{
	  Auth::shouldReceive('attempt')->andReturn(false);
	  $this->call('POST', 'login');
	  $this->assertRedirectedToRoute('session.create');
	  $this->assertSessionHas('flash');
	}

	/**
	 * Test Store success
	 * @group session
	 */
	public function testStoreSuccess()
	{
	  Auth::shouldReceive('attempt')->andReturn(true);
	  $this->call('POST', 'login');
	  $this->assertRedirectedToRoute('home.index');
	}

}
