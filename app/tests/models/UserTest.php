<?php
use Zizaco\FactoryMuff\Facade\FactoryMuff;
class UserTest extends TestCase
{
	public function testThatTrueIsTrue()
	{
		$this->assertTrue(true);
	}

	public function testUsernameIsRequired()
	{
		$user = new User;
		$user->email = "phil@ipbrown.com";
		$user->password = "password";
		$user->password_confirmation = "password";

		$this->assertFalse($user->save());
		$errors = $user->errors()->all();
		$this->assertCount(1, $errors);
		$this->assertEquals($errors[0], "The username field is required.");
	}

	/**
	 * Test a user can follower other users
	 */
	public function testUserCanFollowerUsers()
	{
		// Create users
		$philip = FactoryMuff::create('User');
		$jack = FactoryMuff::create('User');
		$ev = FactoryMuff::create('User');
		$biz = FactoryMuff::create('User');

		// First set
		$philip->follow()->save($jack);

		// First tests
		$this->assertCount(1, $philip->follow);
		$this->assertCount(0, $philip->followers);

		// Second set
		$jack->follow()->save($ev);
		$jack->follow()->save($biz);

		// Second tests
		$this->assertCount(2, $jack->follow);
		$this->assertCount(1, $jack->followers);

		// Third set
		$ev->follow()->save($jack);
		$ev->follow()->save($philip);
		$ev->follow()->save($biz);

		// Third tests
		$this->assertCount(3, $ev->follow);
		$this->assertCount(1, $ev->followers);

		// Fourth set
		$biz->follow()->save($jack);
		$biz->follow()->save($ev);

		// Fourth tests
		$this->assertCount(2, $biz->follow);
		$this->assertCount(2, $biz->followers);
	}
}

