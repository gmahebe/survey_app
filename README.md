# Survey application in laravel
------------
what is application?
* It is simple survey app.
* users can post anonymously or they can login
* users can login/register
* users can delete their questions
* survey urls can be copied and sent to others users to fill in.


Install
------------
download source code and add .env file to blog directory. Config .env file 


Database tables
------------
* users (default + role)
* questionaires (id, title, purpose, user_id, created_at, updated_at)
* questions (id, questionaire_id, question, created_at, updated_at)
* answers (id, question_id, answer, created_at, updated_at)
* surveys (id, questionaire_id, name, email, created_at, updated_at)
* survey_responses (id, survey_id, question_id, answer_id, created_at, updated_at)

Quick install without Tutorial
------------

1.  Clone the repository

  git clone https://github.com/gmahebe/survey_app.git [your project name]

2.  Follow the [Setup database instructions]
  * Edit the .env.example file to match your database and rename to .env
  * Set up and run the migrations

3. run `composer install` and `npm install`

4. Ensure that the permissions on the storage folder are set correctly. You will get a 500 error otherwise.

5. Ensure that you have set the correct image path for justboil.me to the appropriate folder or just use the default /images and make sure that folder has the correct permissions to upload images (usually owned by the webserver user).

