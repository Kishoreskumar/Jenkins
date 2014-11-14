<?php
 
class RegisterControllerTest extends TestCase{
 
  /**
   * @group register
   * Test Index
   */
  public function testIndex()
  {
    $this->call('GET', 'register');
 
    $this->assertResponseOk();
  }
 
  /**
   * @group register
   * Test Store fails
   */
  public function testStoreFails()
  {
    $this->mock->shouldReceive('create')
      ->once()
      ->andReturn(Mockery::mock(array('isSaved' => false, 'errors' => array())));
 
    $this->call('POST', 'register');
 
    $this->assertRedirectedToRoute('register.index');
    $this->assertSessionHasErrors();
  }
 
  /**
   * @group register
   * Test Store success
   */
  public function testStoreSuccess()
  {
    $this->mock->shouldReceive('create')
      ->once()
      ->andReturn(Mockery::mock(array('isSaved' => true)));
 
    $this->call('POST', 'register');
 
    $this->assertRedirectedToRoute('users.index');
    $this->assertSessionHas('flash');
  }
}
