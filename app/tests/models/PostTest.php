<?php
use Zizaco\FactoryMuff\Facade\FactoryMuff;
class PostTest extends TestCase 
{
	public function testThatTrueIsTrue()
	{
		$this->assertTrue(true);
	}

	public function testRelationshipWithUser()
	{
		$post = FactoryMuff::create('Post');
		$this->assertEquals($post->user_id, $post->user->id);		
	}

	// public function testUserIdIsRequired()
	// {
	// 	// Create new Post
	// 	$post = new Post;

	// 	// Set the boy
	// 	$post->body = "Yada yada yada";

	// 	// Post should not save
	// 	$this->assertFalse($post->save());

	// 	// Save the errors
	// 	$errors = $post->errors()->all();

	// 	// There should be 1 error
	// 	$this->assertCount(1, $errors);

	// 	// The error should be set
	// 	$this->assertEquals($errors[0], "The user id field is required.");
	// }

	// public function testPostBodyIsRequired()
	// {
	// 	// Create new Post
	// 	//$post = new Post;
	// 	$post = FactoryMuff::create('Post');
	// 	// Create a User
	// 	$user = FactoryMuff::create('User');

	// 	// Post should not save
	// 	$this->assertFalse($user->posts()->save($post));

	// 	// Save the errors
	// 	$errors = $post->errors()->all();

	// 	// There should be 1 error
	// 	$this->assertCount(1, $errors);

	// 	// The error should be set
	// 	$this->assertEquals($errors[0], "The body field is required.");
	// }
	
	public function testPostSavesCorrectly()
	{
		// Create a new Post
		$post = FactoryMuff::create('Post');
		$clique = FactoryMuff::create('Clique');
		$post->clique_id = $clique->id;
		// Save the Post
		$this->assertTrue($post->save());
	}

	public function testAddingNewComment()
	{
		$post = FactoryMuff::create('Post');
		$comment = new Comment(array('body'=>'A new comment'));
		$post->comments()->save($comment);
		$this->assertCount(1, $post->comments);
	}

}
