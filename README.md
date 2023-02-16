A single class has been added in Entity folder with multiple attributes.

You can see what keys are extracted by running

`docker compose exec php bin/console trans:extract --dump-messages en_dev`

It matches with the services that are displayed when running the following command:

`docker compose exec php bin/console debug:container --tag=constraint_validator`

Result:

<img width="1680" alt="Capture d’écran 2023-02-16 à 11 42 54" src="https://user-images.githubusercontent.com/5627752/219343406-e0fbb5a6-368a-4b76-b49a-e22aad16f34e.png">
