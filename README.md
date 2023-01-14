## About the challenge

The intention of this code is to demonstrate my knowledge in laravel, using different strategies to do three different things

- Create api endpoint for authentication/authorization logic
- Create api endpoint to display all the users that exists in the database
- Create a schedule task that is used to send emails to each user at midnight

## Considerations
Since I don't had time because my current work, I could not include:
- Seeds for the creation of the users, in this case you can run
  - `php artisan tinker` 
  - `App\Models\User::create(['name'=> 'Test User', 'email' => 'test@test.com', 'password' => bcrypt('test')]);`
- Unit testings for the different classes
- Use chunks in order to paginate the users
- Install and setup of smtp

## Requirements
 - Docker
