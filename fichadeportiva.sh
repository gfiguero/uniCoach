#!/bin/bash
rm src/Uni/AdminBundle/Entity/Member.php
rm src/Uni/AdminBundle/Controller/MemberController.php
rm src/Uni/AdminBundle/Form/MemberType.php
php app/console doctrine:generate:entities UniAdminBundle:Member --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Member --format=yml --with-write --overwrite --no-interaction --route-prefix=member
rm src/Uni/AdminBundle/Entity/Role.php
rm src/Uni/AdminBundle/Controller/RoleController.php
rm src/Uni/AdminBundle/Form/RoleType.php
php app/console doctrine:generate:entities UniAdminBundle:Role --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:Role --format=yml --with-write --overwrite --no-interaction --route-prefix=role
rm src/Uni/AdminBundle/Entity/User.php
rm src/Uni/AdminBundle/Controller/UserController.php
rm src/Uni/AdminBundle/Form/UserType.php
php app/console doctrine:generate:entities UniAdminBundle:User --path="src"
php app/console generate:doctrine:crud --entity=UniAdminBundle:User --format=yml --with-write --overwrite --no-interaction --route-prefix=user
php app/console doctrine:schema:update --force
php app/console cache:clear --env=dev
php app/console cache:clear --env=prod
exit