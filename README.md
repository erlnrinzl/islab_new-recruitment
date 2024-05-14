# NEW RECRUITMENT - ISLAB WEBSITE

## About 

## How To Collaborate

### Clone and Setup
1. Fork this repository.
2. Clone the repository to your local machine using `git clone your_fork_repository_link`
3. Copy .env.example into .env and fill the necessary information, like database credentials and AZURE credentials using `cp .env.example .env`
4. Install dependencies using `composer install`
5. Update the dependencies using `composer update`
6. Run `php artisan key:generate`
6. Update the database using `php artisan migrate`
7. Run the application using `php artisan serve`

### Collaborate
8. Sync your forked repository with the main repository in your github repository page.
9. Pull the latest changes from the main repository using `git pull`
10. Create a new branch for your feature or bug fix using `git branch branch_name` with this format of branch name: `be-featurename` or `fe-featurename`
11. Do the feature or bug fix.
12. Add all your changes to next commit using `git add .`
13. Commit your changes using `git commit -m "commit message"`
14. Push your branch using `git push origin branch_name`
15. Open a pull request in the main repository page.
16. Start step 8-14 again for the next feature or bug fix.

## License

This project is built with Laravel. Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Aknowledgement

The ISPM Laravel Project is open-sourced for "New Recruitment - IS Lab Website" project using Laravel. If you need help with this project, kindly hit me on mail at admin@naspadstudio.my.id!


## Docker Ready :D

To install docker with this project

First, build the docker image using `docker build <buildpath> -t ispmlaravel`

Then, run `docker run -d -p 81:8000 --name backend ispmlaravel`

Voila! Happy coding :D
